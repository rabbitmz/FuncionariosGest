<?php

use Illuminate\Database\Seeder;

class PostoAdministrativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'ALTO CHANGANE',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'MUNICIPIO DE CHIBUTO',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'CHAIMITE',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'CHANGANINE',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'GODIDE',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'MALEHICE',
          'distrito_id' => '19',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'BALAMA',
          'distrito_id' => '2',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'IMPIRI',
          'distrito_id' => '2',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'KWEKWE',
          'distrito_id' => '2',
      ] );
      DB::table ( 'posto_administrativo' )->insert ( [
          'nome' => 'MAVALA',
          'distrito_id' => '2',
      ] );
    }
}
