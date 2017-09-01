<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //
	protected $table = 'professional';

				public function profissoes()
				{
				return $this->belongsToMany(Profissao::class,'professional_profissao','professional_id','profissao_id')->withPivot('nivel_professional_id');
					//return $this->belongsToMany(Profissao::class);
				}

        public function TipoDocumento()
        {
            return $this->belongsTo(Tipo_documento::class);
        }

        public function Nacionalidade()
        {
            return $this->belongsTo(Nacionalidade::class);
        }

        public function NaturalidadeProvincia()
        {
            return $this->belongsTo(Provincia::class);
        }

        public function NaturalidadeDistrito()
        {
            return $this->belongsTo(Distrito::class);
        }

        public function EnderecoProvincia()
        {
            return $this->belongsTo(Provincia::class);
        }

        public function Distrito()
        {
            return $this->belongsTo(Distrito::class);
        }

        public function Classe()
        {
            return $this->belongsTo(Classe::class);
        }

}
