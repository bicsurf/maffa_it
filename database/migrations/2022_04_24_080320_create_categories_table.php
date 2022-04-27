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
            'fotografia',
            'telefonia',
            'console e videogiochi',
            'audio/video',
            'accessori per animali',
            'musica e film',
            'biciclette',
            'accessoti auto',
            'libri e riviste',
            'elettrodomestici',
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
