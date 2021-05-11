<?php

use Illuminate\Database\Eloquent\Model;


class GrupoInvestigacion extends Model
{
    protected $table = 'ceia3_grupo_investigacions';
    public function patentes()
    {
        return $this->belongsToMany(Patentes::class, 'ceia3_patentes_grupos_investigacion_pivots', 'ceia3_grupo_investigacion_id', 'ceia3_patente_id')->withPivot('ceia3_grupo_investigacion_id', 'ceia3_patente_id')->withTimestamps();
    }
}
