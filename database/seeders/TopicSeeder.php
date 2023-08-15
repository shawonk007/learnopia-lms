<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $topics = [
            [ 'title' => 'HTML', 'slug' => 'html', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'CSS', 'slug' => 'css', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'JavaScript', 'slug' => 'javaScript', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'Bootstrap', 'slug' => 'bootstrap', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'PHP', 'slug' => 'php', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'MySQL', 'slug' => 'mysql', 'status' => 1 , 'popular' => False ],
            [ 'title' => 'jQuery', 'slug' => 'jquery', 'status' => 1 , 'popular' => FALSE ],
            [ 'title' => 'AJAX', 'slug' => 'ajax', 'status' => 1 , 'popular' => FALSE ],
            [ 'title' => 'Laravel', 'slug' => 'laravel', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'CodeIgniter', 'slug' => 'codeIgniter', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Node.js', 'slug' => 'nodejs', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Angular.js', 'slug' => 'angularjs', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'React.js', 'slug' => 'reactjs', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Vite.js', 'slug' => 'vitejs', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Vue.js', 'slug' => 'vuejs', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Tailwind', 'slug' => 'tailwind', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Photoshop', 'slug' => 'photoshop', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Illustrator', 'slug' => 'illustrator', 'status' => 1 , 'popular' => TRUE ],
            [ 'title' => 'Figma', 'slug' => 'figma', 'status' => 1 , 'popular' => TRUE ],
        ];

        foreach ($topics as $topic) {
            Topic::create($topic);
        }
    }
}
