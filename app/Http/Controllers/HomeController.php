<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('home',[
        "title" => "Home",
        "kegiatans" => [
            [
                "judul" => "isra mi'raj",
                "ringkasan" => "isra mi'raj blabla",
                "image" => "gambar1.jpg",
            ],
            [
                "judul" => "Mieling",
                "ringkasan" => "Mieling blabla",
                "image" => "gambar1.jpg",
            ],
            [
                "judul" => "Programing",
                "ringkasan" => "programing blabla",
                "image" => "gambar1.jpg",
            ],
            [
                "judul" => "bermain game",
                "ringkasan" => "game membuat senang",
                "image" => "gambar1.jpg"
            ],
            [
                "judul" => "bermain game",
                "ringkasan" => "game membuat senang",
                "image" => "gambar1.jpg"
            ],
        ],
        "misi" => [
            "Menjadikan siswa siswi smkn bermartabat dan berahklak baik",
            "Menjadikan siswa siswi smkn berkepribadian ganda",
            "Menjadikan siswa siswi smkn yang mempunyai sikap sopan dan santun",
        ],
        "visi" => [
            "Sekolah Ramah Anak",
            "Sekolah Hidup dan Mati",
        ]
    ]); 
    }
}
