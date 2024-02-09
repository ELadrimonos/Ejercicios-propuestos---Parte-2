<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use App\Models\Comentario;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $faker = Faker::create();

        foreach ($posts as $post){
            for ($i = 0; $i < 3; $i++) {
                $usuario = Usuario::inRandomOrder()->first();
                $comentario = new Comentario();
                $comentario->usuario_id = $usuario->id;
                $comentario->post_id = $post->id;
                $comentario->contenido = $faker->text;
                $comentario->save();
            }
        }
    }
}
