<?php

namespace Database\Seeders;

use App\Models\Egg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eggs = config('egg');

        foreach ($eggs as $egg) {
            $new_egg = new Egg();

            $new_egg->url = $egg['url'];
            $new_egg->name = $egg['name'];
            $new_egg->color = $egg['color'];
            $new_egg->content = $egg['content'];
            $new_egg->type = $egg['type'];
            $new_egg->size = $egg['size'];
            $new_egg->save();
        }
    }
}
