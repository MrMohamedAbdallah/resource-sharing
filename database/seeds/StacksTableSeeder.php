<?php

use App\Category;
use Illuminate\Database\Seeder;

class StacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Stacks names
        $stacksArray = [
            "javascript", "python", "php", "c", "c++", "c#", "ruby", "java", "kotlin"
        ];

        // Categories names
        $categoriesArray = [
            "book", "youtube", "documentation"
        ];

        // Create categories in the DB
        for($i = 0; $i < count($categoriesArray); $i++){
            $newCategory = new Category([
                "name"  => $categoriesArray[$i]
            ]);
            $newCategory->save();
        }
        
        // Create stacks in the DB
        for($i = 0; $i < count($stacksArray); $i++){
            // Creat a stack with a name from "stacksArray"
            factory(App\Stack::class, 1)->make()->each(function ($stack) use ($i, $stacksArray, $categoriesArray){
                $stack->name = $stacksArray[$i];
                $stack->save();

                // Create 10 resources for each stack
                factory(App\Resource::class, 10)->make()->each(function($resource) use ($stack, $categoriesArray){
                    $resource->stack_id = $stack->id;
                    $resource->category_id = (rand() % count($categoriesArray)) + 1;

                    $resource->save();
                });
            });
        }
        
    }
}
