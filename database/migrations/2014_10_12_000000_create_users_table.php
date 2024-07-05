<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('signature')->nullable();
            $table->unsignedBigInteger('user_type');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('user_type')->references('id')->on('user_type');
        });

        DB::table('users')->insert([
            'name' => 'Freddo Website',
            'email' => 'sales@glasse.com.mx',
            'phone' => '5555555555',
            'password' => bcrypt('12345678'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel Coronado',
            'email' => 'gabriel@glasse.com.mx',
            'phone' => '7294447086',
            'password' => bcrypt('Gabo0191$!$'),
            'user_type' => 7,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Roberto',
            'email' => 'roberto@glasse.com.mx',
            'phone' => '5542873295',
            'password' => bcrypt('GlasseRoberto2022'),
            'user_type' => 6,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Enrique Espinosa',
            'email' => 'luis@ciampi.com.mx',
            'phone' => '5539355290',
            'password' => bcrypt('Tata1535!'),
            'user_type' => 5,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Jose Miguel Espinosa',
            'email' => 'direccion@freddo.com.mx',
            'phone' => '5540706946',
            'password' => bcrypt('CiampiMickey2023'),
            'user_type' => 4,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriela Marin Espinosa',
            'email' => 'gabrielamarin@ciampi.com.mx',
            'phone' => '5565328587',
            'password' => bcrypt('Ciampi2021!'),
            'user_type' => 4,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Blanca Castañeda',
            'email' => 'blanca@glasse.com.mx',
            'phone' => '5520719520',
            'password' => bcrypt('CiampiBlanca2023'),
            'user_type' => 3,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Leticia Magaly Velazquez Garcia',
            'email' => 'leticia@freddo.com.mx',
            'password' => bcrypt('FreddoLety2024'),
            'user_type' => 2,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Joseline Cardenas',
            'email' => 'joseline@freddo.com.mx',
            'password' => bcrypt('FreddoJoseline2024'),
            'user_type' => 2,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Sofía villanueva',
            'email' => 'sofia@freddo.com.mx',
            'password' => bcrypt('FreddoSophie2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Harry Bazán',
            'email' => 'harry@freddo.com.mx',
            'password' => bcrypt('FreddoHarry2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Nora Elizabeth Chavez Serrano',
            'email' => 'nora@freddo.com.mx',
            'password' => bcrypt('FreddoNora2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Keren Álvarez',
            'email' => 'keren@freddo.com.mx',
            'password' => bcrypt('FreddoKeren2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Jahaziel Salas',
            'email' => 'jahaziel@freddo.com.mx',
            'password' => bcrypt('FreddoJahaziel2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Santiago Mendez',
            'email' => 'santiago@freddo.com.mx',
            'password' => bcrypt('FreddoSanti2024'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
