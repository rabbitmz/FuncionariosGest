<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //
	protected $table = 'professional';
	
	public function professions()
	{
		return $this->belongsToMany(Professional_Profissao::class);
	}
	
        public function TipoDocumento()
        {
            return $this->belongsTo(TipoDocumento::class);
        }

        public function Nacionalidade()
        {
            return $this->belongsTo(Nacionalidade::class);
        }

        public function NaturalidadeProvincia()
        {
            return $this->belongsTo(Provincia::class);
        }

        public function EnderecoProvincia()
        {
            return $this->belongsTo(Provincia::class);
        }

        public function Distrito()
        {
            return $this->belongsTo(Distrito::class);
        }

        public function Cidade()
        {
            return $this->belongsTo(Cidade::class);
        }
        
        public function Classe()
        {
            return $this->belongsTo(Classe::class);
        }

}
