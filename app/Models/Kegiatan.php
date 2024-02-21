<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan
{
    public static $kegiatan = [
        [
            "judul" => "isra mi'raj",
            "slug" => "isra-miraj",
            "ringkasan" => "isra mi'raj blabla",
            "detail" => "isra mi'raj Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur molestias eius neque quis corporis inventore odio, repellendus hic nesciunt recusandae aut quas quo similique asperiores deserunt libero explicabo! Suscipit, aperiam consectetur? Minima perferendis eos nemo enim molestias! Provident maxime architecto, assumenda tempore delectus culpa debitis pariatur repellendus quia quisquam aliquam quaerat iusto suscipit vitae natus harum aut! Beatae eveniet porro voluptatem molestiae facere eaque, necessitatibus quo praesentium ipsum reprehenderit incidunt itaque at sit nostrum totam quod voluptatum autem optio nesciunt est eius vitae placeat ex! Blanditiis ipsam quisquam in quibusdam ut obcaecati, error magni voluptatum dolore debitis aspernatur, optio tempore.",
            "image" => "gambar1.jpg",
        ],
        [
            "judul" => "Mieling",
            "slug" => "mieling",
            "ringkasan" => "Mieling blabla",
            "detail" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate perspiciatis labore libero beatae earum quam odit delectus fugit repellendus voluptatem expedita explicabo, debitis, voluptate aspernatur!",
            "image" => "gambar1.jpg",
        ],
        [
            "judul" => "Programing",
            "slug" => "programing",
            "ringkasan" => "programing blabla",
            "detail" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate perspiciatis labore libero beatae earum quam odit delectus fugit repellendus voluptatem expedita explicabo, debitis, voluptate aspernatur nostrum exercitationem ut aut, maiores excepturi? Sint deleniti officia numquam nostrum assumenda. Veritatis nihil ipsam corrupti fugiat quidem magni sequi dolorum. Adipisci, explicabo quas!",
            "image" => "gambar1.jpg",
        ],
        [
            "judul" => "bermain game",
            "slug" => "bermain-game",
            "ringkasan" => "game membuat senang",
            "detail" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa voluptas alias eligendi facilis minus quia. Eveniet, possimus asperiores impedit iusto numquam harum nemo tenetur tempore repudiandae alias expedita unde optio corrupti perspiciatis minima itaque quis non quos officia voluptatum excepturi. Quae eaque alias tempora amet perspiciatis iste error quam necessitatibus cum repellendus, fugiat, sunt ab distinctio, molestias repellat quaerat? Doloribus quibusdam itaque consequatur perferendis quas dolorem et error laudantium unde ipsa, quasi culpa aliquam, similique repellendus optio incidunt quia dolorum ratione? Vitae, amet doloribus veritatis quidem consequuntur dolorum voluptatem repellendus maiores sed totam ducimus quos minus consectetur nihil cumque architecto?",
            "image" => "gambar1.jpg"
        ],
    ];

    public static function all()
    {
        return collect(self::$kegiatan);
    }
    public static function find($slug)
    {
        $kegiatans = static::all();

        return $kegiatans->firstWhere('slug',$slug);
    }
}
