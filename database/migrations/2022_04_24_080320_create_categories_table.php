<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $names = [
            'Fotografia',
            'Telefonia',
            'Console e videogiochi',
            'Audio/video',
            'Accessori per animali',
            'Musica e film',
            'Biciclette',
            'Accessoti auto',
            'Libri e riviste',
            'Elettrodomestici',
        ];
        foreach ($names as $name){
            Category::create([
                'name' => $name,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
