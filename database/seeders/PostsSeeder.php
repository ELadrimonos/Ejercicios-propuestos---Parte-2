<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = Usuario::all();
        $faker = Faker::create();

        foreach ($usuarios as $usuario){
            for ($i = 0; $i < 3; $i++) {
                $post = new Post();
                $post->usuario_id = $usuario->id;
                $post->titulo = $faker->word;
                $post->contenido = $faker->text;
                $post->save();
            }
        }
    }
}
