<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Token;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller {
    //
    public function home() {
        return view('front-end.home');
    }
    // 
    public function about() {
        return view('front-end.about');
    }
    // 
    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('front-end.courses', compact('category'));
    }
    // 
    public function courses() {
        $categories = Category::all();
        $courses = Course::all();
        return view('front-end.courses', compact('categories', 'courses'));
    }
    //
    public function display($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        // $lessons = Lesson::where()
        return view('front-end.display', compact('course'));
    }
    // public function category($slug) {
    //     return view('front-end.courses', compact('course'));
    // }
    // 
    public function enrollment(Request $request) {
        $courseId = $request->query('course_id');
        $course = Course::find($courseId);
        return view('front-end.enrollment', compact('course'));
    }
    // 
    public function checkout(Request $request) {
        dd($request);
        Stripe::setApiKey(config('services.stripe.secret'));
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount,
            'currency' => 'usd',
        ]);
    }
    // 
    public function team() {
        return view('front-end.team');
    }
    // 
    public function instructor($uname) {
        $instructor = User::where([['role_id', 7], ['username', $uname]])->firstOrFail();
        return view('front-end.instructor', compact('instructor'));
    }
    // 
    public function contact() {
        return view('front-end.contact');
    }
    // 
    public function disclaimer() {
        return view('front-end.disclaimer');
    }
    // 
    public function privacy() {
        return view('front-end.privacy');
    }
    // 
    public function terms() {
        return view('front-end.terms');
    }
    // 
    public function faq() {
        return view('front-end.faq');
    }
    // 
    public function sitemap() {
        return view('front-end.sitemap');
    }


    public function processPayment(Request $request) {
        // dd($request);
        Stripe::setApiKey(config('stripe.sk'));

        $courseId = $request->get('course_id');
        $courseTitle = $request->get('course_title');
        $coursePrice = $request->get('regular_price');

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'INR',
                        'product_data' => [
                            'name' => $courseTitle,
                        ],
                        'unit_amount' => $coursePrice,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('enrollment'),
        ]);

        return redirect()->away($session->url);

        $card = [
            'number' => '4242424242424242',
            'exp_month' => 12,
            'exp_year' => 25,
            'cvc' => '123',
        ];

        try {
            $token = Token::create([
                'card' => $card,
            ]);
            Log::info('Stripe Token Created: ' . json_encode($token));

            $course = Course::findOrFail($request->course_id);

            // Create an enrollment record
            $enroll = Enrollment::create([
                'user_id' => Auth::user()->id,
                'course_id' => $course->id,
                // 'status' => 1,
            ]);

            $subTotal = $course->regular_price * 1;
            $tax = $course->regular_price * 0.05;
            $total = $subTotal + $tax;

            // Create a payment record
            $payment = Payment::create([
                'user_id' => Auth::user()->id,
                'enrollment_id' => $enroll->id,
                'payment_method' => 'Stripe',
                'transaction_id' => $token->id,
                'card_number' => '**** **** **** ' . substr($card['number'], -4),
                'amount' => $total,
                // 'status' => 1,
            ]);

            // Handle successful payment simulation
            return response()->json(['payment' => $payment]);
        } catch (\Stripe\Exception\CardException $e) {
            // Handle card error
            Log::error('Stripe Card Exception: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (\Exception $e) {
            // Handle other errors
            Log::error('Stripe Exception: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred.'], 500);
        }

        // dd($request->all());
        // $enroll = Enrollment::create($request->all());
        // if ($enroll) {
        //   $payment = new Payment($request->all());
        //   $enroll->payment()->save($payment);
        // }
        // return "Payment successful";
    }

    public function success() {
        return "Payment successful";
    }
}
