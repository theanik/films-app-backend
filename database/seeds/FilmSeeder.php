<?php

use Illuminate\Database\Seeder;
use App\Film;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"  => "The Good, the Bad and the Ugly",
                "slug"  => "the-good,-the-bad-and-the-ugly",
                "description"  => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                "release_date"  => "1970-07-31",
                "ticket_price"  => 646,
                "country"  => "Canada",
                "genre"  => "Thriller",
                "photo"  => "the-good,-the-bad-and-the-ugly.jpg"
            ],
            [
                "name"   => "Emerald Rose",
                "slug"   => "emerald-rose",
                "description"   => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.",
                "release_date"   => "1972-07-04",
                "ticket_price"  => 906,
                "country"  => "Germany",
                "genre"  => "War",
                "photo"  => "emerald-rose.jpg"
            ],
            [
                "name"  => "12 Angry Men",
                "slug"  => "12-angry-men",
                "description"  => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                "release_date"  => "2017-04-24",
                "ticket_price"  => 793,
                "country"  => "Turki",
                "genre"  => "Crime",
                "photo"  => "12-angry-men.jpg"
            ],
            [
                "name"  => "The Godfather",
                "slug"  => "the-godfather",
                "description"  => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.",
                "release_date"  => "1991-07-16",
                "ticket_price"  => 827,
                "country"  => "Finland",
                "genre"  => "Biography",
                "photo"  => "the-godfather.jpg"
            ],
            [
                "name"  => "The Shawshank Redemption (1994)",
                "slug"  => "the-shawshank-redemption-(1994)",
                "description"  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)",
                "release_date"  => "2019-02-07",
                "ticket_price"  => 454,
                "country"  => "Finland",
                "genre"  => "Adventure",
                "photo"  => "the-shawshank-redemption-(1994).jpg"
            ],
            [
                "name"  => "Aretha Suarez",
                "slug"  => "aretha-suarez",
                "description"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                "release_date"  => "2017-09-27",
                "ticket_price"  => 211,
                "country"  => "Canada",
                "genre"  => "Action",
                "photo"  => "aretha-suarez.jpg"
            ]
        ];

        foreach($data as $film){
            Film::create($film);
        }
}
}