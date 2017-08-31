<?php

use Illuminate\Database\Seeder;

class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table ( 'classe' )->insert ( [
          'descricao' => '1° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '2° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '3° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '4° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '5° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '6° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '7° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '8° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '9° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '10° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '11° Classe',
      ] );
      DB::table ( 'classe' )->insert ( [
          'descricao' => '12° Classe',
      ] );
    }
}
