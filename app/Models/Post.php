<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; ---> Ini dipake supaya bisa paste banyak baris sesuai isi array (title, excerpt, dan body)

    protected $guarded = ['id']; // Atau bisa pake guarded. Apa yang mau dijaga --> contohnya id (tidak boleh diisi manual, sisanya boleh diisi)

    public function category(){
        return $this-> belongsTo(Category::class);
    }
    
    public function author(){
        return $this-> belongsTo(User::class, 'user_id');
    }

}
