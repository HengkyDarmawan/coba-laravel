<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// class Post extends Model
class Post
{
    private static $blog_posts = [
        [
            "title" => "Solo Leveling",
            "slug" => "solo-leveling",
            "author" => "Chugong",
            "body" => "Manhwa Solo Leveling yang dibuat oleh komikus bernama Chugong 추공 ini bercerita tentang 10 tahun yang lalu, setelah Gerbang yang menghubungkan dunia nyata dengan dunia monster terbuka, beberapa orang biasa, setiap hari menerima kekuatan untuk berburu monster di dalam Gerbang. Mereka dikenal sebagai Pemburu. Namun, tidak semua Pemburu kuat. Nama saya Sung Jin-Woo, seorang Pemburu peringkat-E. Saya seseorang yang harus mempertaruhkan nyawanya di ruang bawah tanah paling rendah, Terlemah di Dunia. Tidak memiliki keterampilan apa pun untuk ditampilkan, saya hampir tidak mendapatkan uang yang dibutuhkan dengan bertarung di ruang bawah tanah berlevel rendah… setidaknya sampai saya menemukan ruang bawah tanah tersembunyi dengan kesulitan tersulit dalam ruang bawah tanah peringkat-D! Pada akhirnya, saat aku menerima kematian, tiba-tiba aku menerima kekuatan aneh, log pencarian yang hanya bisa kulihat, rahasia untuk naik level yang hanya aku yang tahu! Jika saya berlatih sesuai dengan pencarian saya dan monster yang diburu, level saya akan naik. Berubah dari Hunter terlemah menjadi Hunter S-rank terkuat!"
        ],
        [
            "title" => "The Beginning After The End",
            "slug" => "the-beginning-after-the-end",
            "author" => "TurtleMe",
            "body" => "Manhwa The Beginning After the End yang dibuat oleh komikus bernama TurtleMe ini bercerita tentang Raja Gray memiliki kekuatan, kekayaan, dan prestise yang tak tertandingi di dunia yang diatur oleh kemampuan bela diri. Namun, kesendirian tetap ada di belakang mereka yang memiliki kekuatan besar. Di bawah eksterior glamor seorang raja yang kuat mengintai cangkang manusia, tanpa tujuan dan kemauan. Bereinkarnasi ke dunia baru yang penuh dengan sihir dan monster, raja memiliki kesempatan kedua untuk menghidupkan kembali hidupnya. Namun, memperbaiki kesalahan masa lalunya tidak akan menjadi satu-satunya tantangannya. Di bawah kedamaian dan kemakmuran dunia baru adalah arus bawah yang mengancam untuk menghancurkan semua yang telah dia kerjakan, mempertanyakan peran dan alasannya untuk dilahirkan kembali."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
