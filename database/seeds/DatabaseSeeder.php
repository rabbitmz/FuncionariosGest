<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(AreaEmpresaTableSeeder::class);
    	$this->call(ActividadeEmpresaTableSeeder::class);
    	$this->call(ProvinciaTableSeeder::class);
    	$this->call(CidadeTableSeeder::class);
    	$this->call(DistritoTableSeeder::class);
    	$this->call(NacionalidadeTableSeeder::class);
    	$this->call(ProfissaoTableSeeder::class);
    	$this->call(CompetenciaTableSeeder::class);
    	$this->call(CategoriaCursoTableSeeder::class);
    	$this->call(CursoTableSeeder::class);
    	$this->call(TipoDocumentoTableSeeder::class);
    	$this->call(TipoContratoTableSeeder::class);
    	
    }
}
