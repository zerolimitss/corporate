<?php

use Illuminate\Database\Seeder;

class InitialDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('1'),
        ]);

        DB::table('categories')->insert([
            'title' => 'Блог',
            'alias' => 'blog',
        ]);

        DB::table('categories')->insert([
            'title' => 'Компьютеры',
            'alias' => 'computers',
        ]);

        DB::table('categories')->insert([
            'title' => 'Советы',
            'alias' => 'soveti',
        ]);

        DB::table('categories')->insert([
            'title' => 'Интересное',
            'alias' => 'iteresting',
        ]);

        factory(Corp\Article::class, 50)->create();

        DB::table('filters')->insert([
            'title' => 'Brand Identity',
            'alias' => 'brand-identity',
        ]);

        DB::table('menus')->insert([
            'title' => 'Главная',
            'path' => 'http://corporate',
        ]);

        DB::table('menus')->insert([
            'title' => 'Блог',
            'path' => 'http://corporate/articles',
        ]);

        DB::table('menus')->insert([
            'title' => 'Компьютеры',
            'path' => 'http://corporate/articles/cat/computers',
        ]);

        DB::table('menus')->insert([
            'title' => 'Интересное',
            'path' => 'http://corporate/articles/cat/iteresting',
        ]);

        DB::table('menus')->insert([
            'title' => 'Советы',
            'path' => 'http://corporate/articles/cat/soveti',
        ]);

        DB::table('menus')->insert([
            'title' => 'Портфолио',
            'path' => 'http://corporate/portfolios',
        ]);

        DB::table('menus')->insert([
            'title' => 'Контакты',
            'path' => 'http://corporate/contacts',
        ]);

        factory(Corp\Portfolio::class, 10)->create();

        DB::table('sliders')->insert([
            'image' => 'xx.jpg',
            'title' => '<h2 style="color:#fff">CORPORATE, MULTIPURPOSE.. <br /><span>PINK RIO</span></h2>',
            'description' => 'Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque',
        ]);

        DB::table('sliders')->insert([
            'image' => '00314.jpg',
            'title' => '<h2 style="color:#fff">PINKRIO. <span>STRONG AND POWERFUL.</span></h2>',
            'description' => 'Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque',
        ]);

        DB::table('sliders')->insert([
            'image' => 'dd.jpg',
            'title' => '<h2 style="color:#fff">PINKRIO. <span>STRONG AND POWERFUL.</span></h2>',
            'description' => 'Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque',
        ]);
    }
}
