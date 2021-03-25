<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'=> 'Laravel 6.2',
            'slug'=> str_slug('Laravel 6.2')
            ]);

        Channel::create([
            'name'=> 'vue js',
            'slug'=> str_slug('vue js')
            ]);
        Channel::create([
            'name'=> 'Angular 8',
            'slug'=> str_slug('Angular 8')
            ]); 
        Channel::create([
            'name'=> 'Node js',
            'slug'=> str_slug('Node js')
                ]); 
    }
}
