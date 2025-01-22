<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwago4eT-RW0vf7bQK4kULaiLmXRBnzN7uig&s', 'title' => 'Introducción a HTML y CSS', 'text' => 'Descubre los conceptos básicos de HTML y CSS, los lenguajes fundamentales para construir sitios web.'],
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwago4eT-RW0vf7bQK4kULaiLmXRBnzN7uig&s', 'title' => 'Introducción a php','text' => 'Aprende los fundamentos de PHP, uno de los lenguajes de programación más populares para el desarrollo web.'],
            ['image' => 'https://bairesdev.mo.cloudinary.net/blog/2023/08/What-Is-JavaScript-Used-For.jpg?tx=w_1920,q_auto', 'title' => 'Introducción a JavaScript', 'text' => 'Conoce JavaScript, el lenguaje que da vida a tus sitios web.'],
            ['image' => 'https://b2265571.smushcdn.com/2265571/wp-content/uploads/2022/07/ReactJS.png?lossy=2&strip=1&webp=1', 'title' => 'Introducción a React', 'text' => 'Descubre React, una biblioteca de JavaScript para construir interfaces de usuario.'],
            ['image' => 'https://i.ytimg.com/vi/gttZmeehAVk/maxresdefault.jpg', 'title' => 'Introducción a Vue.js', 'text' => 'Aprende a crear aplicaciones interactivas con Vue.js, un framework progresivo para JavaScript.'],
            ['image' => 'https://i.blogs.es/1d8a5b/python1/450_1000.jpg', 'title' => 'Phyton', 'text' => 'Aprende phyton con nuestro curso de experiencia propia.'],
        ];

        DB::table('cards')->insert($cards);
    }
}
