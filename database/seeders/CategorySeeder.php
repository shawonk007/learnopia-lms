<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $categories = [
            [ 'title' => 'Graphic Design', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Web Design', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Web Development', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Programming', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Digital Marketing', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'UI / UX Design', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Language Learning', 'parent_id' => NULL, 'status' => 1 ],
            [ 'title' => 'Writing & Translation', 'parent_id' => NULL, 'status' => 1 ],
        ];

        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['title']);
            Category::create($category);
        }
    }
}
