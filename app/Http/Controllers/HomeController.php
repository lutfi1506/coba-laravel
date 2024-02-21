<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('home',[
        "title" => "Home",
        "kegiatans" => Kegiatan::all(),
        "misi" => [
            "Menjadikan siswa siswi smkn bermartabat dan berahklak baik",
            "Menjadikan siswa siswi smkn berkepribadian ganda",
            "Menjadikan siswa siswi smkn yang mempunyai sikap sopan dan santun",
        ],
        "visi" => "menjadikan Sekolah SMKN 1 Kadipaten sebagai sekolah ramah anak yang dapat Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel eius totam at iste deleniti. Obcaecati autem amet voluptates est molestias voluptatem suscipit, quasi ab."
    ]); 
    }

    public function detail(string $slug){
        return view('detail',[
            "title" => "Detail Kegiatan",
            "kegiatan" => Kegiatan::find($slug)
        ]);
    }
}
