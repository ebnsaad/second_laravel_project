<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['PHP', 'Laravel', 'Bootstrap', 'CSS', 'Html', 'Javascript', 'Vue'];

        foreach( $tags as $tag) {
            DB::table('tags')->insert(['name' => $tag]);
        }
    }
}
