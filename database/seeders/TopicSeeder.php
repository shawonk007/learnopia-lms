<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopicSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $topics = [
            [ 'title' => 'HTML', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'CSS', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'JavaScript', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'Bootstrap', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'PHP', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'MySQL', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'jQuery', 'status' => 1 , 'popular' => FALSE ],
            [ 'title' => 'AJAX', 'status' => 1 , 'popular' => FALSE ],
            [ 'title' => 'Laravel', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'CodeIgniter', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Node.js', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Angular.js', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'React.js', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Vite.js', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Vue.js', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Tailwind', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Photoshop', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Illustrator', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Figma', 'status' => 1 , 'popular' => TRUE ],
        ];

        foreach ($topics as $topic) {
            $topic['slug'] = Str::slug($topic['title']);
            Topic::create($topic);
        }
    }
}
