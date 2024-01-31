<?php

namespace App\Models;

/* krn blom pake database
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
*/

class Post // extends Model
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama IYAKAH",
            "slug" => "judul-post-pertama",
            "author" => "Gabriella Caroline PN",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt rerum eos tempora excepturi qui suscipit eligendi rem at nisi, dicta consequatur odit dolorem iure, non vel nostrum quod temporibus repellendus, hic repudiandae tempore? Recusandae, sint. Ut minima libero, minus accusantium culpa quo, modi eligendi, pariatur ullam velit quis aliquid quasi voluptatibus dolor enim itaque quam dolores. Odio exercitationem, nostrum dolore laudantium nam molestiae quisquam tempora ex, minus quo, porro incidunt minima autem error esse assumenda. Rerum similique adipisci expedita porro.",
        ],
        [
            "title" => "Judul Post Kedua YOI",
            "slug" => "judul-post-kedua",
            "author" => "Satriya Nugraha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus ad adipisci architecto aliquid rerum reiciendis voluptate, consequatur omnis atque accusamus perspiciatis suscipit perferendis in labore quas repellendus quibusdam deleniti recusandae illo! Ipsa dolor sequi beatae vero laborum numquam quia accusamus tenetur nobis doloribus corrupti in ad, molestias ipsum necessitatibus veniam corporis optio sapiente sint cum molestiae commodi sunt voluptas? Temporibus libero nemo voluptatum ex eveniet eligendi odio numquam itaque tempore ducimus, quae cum corporis, sunt id excepturi suscipit optio reprehenderit, officia dolorem. Doloremque commodi earum assumenda magnam et mollitia velit possimus, nesciunt autem hic, non, quia pariatur unde incidunt.",
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all(); //posts berupa collection
        
        //firstWhere berarti ambil 1 data yg pertama kali ditemukan, dimana slugnya sama dengan $slug
        return $posts->firstWhere('slug', $slug);
    }

    // use HasFactory;
}
