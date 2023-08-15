<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $categories = [
            [ 'title' => 'Graphic Design', 'parent_id' => NULL, 'slug' => 'graphic-design', 'status' => 1 ],
            [ 'title' => 'Web Design', 'parent_id' => NULL, 'slug' => 'web-design', 'status' => 1 ],
            [ 'title' => 'Web Development', 'parent_id' => NULL, 'slug' => 'web-development', 'status' => 1 ],
            [ 'title' => 'Programming', 'parent_id' => NULL, 'slug' => 'programming', 'status' => 1 ],
            [ 'title' => 'Digital Marketing', 'parent_id' => NULL, 'slug' => 'digital-marketing', 'status' => 1 ],
            [ 'title' => 'UI / UX Design', 'parent_id' => NULL, 'slug' => 'ui-ux-design', 'status' => 1 ],
            [ 'title' => 'Language Learning', 'parent_id' => NULL, 'slug' => 'language-learning', 'status' => 1 ],
            [ 'title' => 'Writing & Translation', 'parent_id' => NULL, 'slug' => 'writing-and-translation', 'status' => 1 ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
