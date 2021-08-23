<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Runner\Hook;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "name" => "Eko Budi",
        "email" => "mochekobudisetiawan@gmail.com",
        "img" => "img/man.png",
        "title" => "Blog"
    ]);
});





Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eko Budi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi eius laudantium iure molestias asperiores saepe expedita. Consequuntur accusamus quod asperiores? Asperiores maiores modi sunt, deserunt illum quae ipsa soluta!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eko Ndan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis praesentium nulla. Obcaecati placeat, quam asperiores debitis eveniet at! Atque nesciunt cumque neque velit maiores veniam, expedita natus est sed ad autem quo dolorem nam maxime tempora exercitationem commodi nulla laborum quae? Sed rerum repellendus ad aspernatur corrupti praesentium doloribus reprehenderit minima consequatur! Veniam fugiat odio sint quo maxime vel voluptatibus unde libero. Repudiandae, sunt modi nostrum atque praesentium non deleniti nam eligendi nulla voluptate? Magni, aperiam incidunt! Impedit, minima. Expedita cupiditate excepturi eos voluptas provident reprehenderit, est maxime nobis rem laborum odit? Repellendus, adipisci soluta. Dolore obcaecati hic doloremque temporibus laborum praesentium distinctio ad tenetur exercitationem, quasi ratione dolorem sint, nostrum voluptates veniam atque sed. Ratione aut saepe labore mollitia id voluptatibus quos ipsum ducimus excepturi numquam adipisci, voluptate, nostrum soluta debitis minus fugiat voluptates a laboriosam, eaque dolorem omnis. Error esse recusandae asperiores at nostrum totam voluptas fugiat hic nesciunt alias omnis eos nisi optio labore a necessitatibus ex nulla vel aut, natus expedita fugit amet beatae tempora. Consequuntur iste laboriosam animi dolorem commodi cum quasi, voluptatibus atque nobis delectus harum rerum libero temporibus corrupti, earum itaque adipisci! Animi molestiae blanditiis at qui quidem modi obcaecati, ipsum officia!"
        ]
    ];

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});


//Halaman Single Post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eko Budi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi eius laudantium iure molestias asperiores saepe expedita. Consequuntur accusamus quod asperiores? Asperiores maiores modi sunt, deserunt illum quae ipsa soluta!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eko Ndan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis praesentium nulla. Obcaecati placeat, quam asperiores debitis eveniet at! Atque nesciunt cumque neque velit maiores veniam, expedita natus est sed ad autem quo dolorem nam maxime tempora exercitationem commodi nulla laborum quae? Sed rerum repellendus ad aspernatur corrupti praesentium doloribus reprehenderit minima consequatur! Veniam fugiat odio sint quo maxime vel voluptatibus unde libero. Repudiandae, sunt modi nostrum atque praesentium non deleniti nam eligendi nulla voluptate? Magni, aperiam incidunt! Impedit, minima. Expedita cupiditate excepturi eos voluptas provident reprehenderit, est maxime nobis rem laborum odit? Repellendus, adipisci soluta. Dolore obcaecati hic doloremque temporibus laborum praesentium distinctio ad tenetur exercitationem, quasi ratione dolorem sint, nostrum voluptates veniam atque sed. Ratione aut saepe labore mollitia id voluptatibus quos ipsum ducimus excepturi numquam adipisci, voluptate, nostrum soluta debitis minus fugiat voluptates a laboriosam, eaque dolorem omnis. Error esse recusandae asperiores at nostrum totam voluptas fugiat hic nesciunt alias omnis eos nisi optio labore a necessitatibus ex nulla vel aut, natus expedita fugit amet beatae tempora. Consequuntur iste laboriosam animi dolorem commodi cum quasi, voluptatibus atque nobis delectus harum rerum libero temporibus corrupti, earum itaque adipisci! Animi molestiae blanditiis at qui quidem modi obcaecati, ipsum officia!"
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
