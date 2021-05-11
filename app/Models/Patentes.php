<?php

use Illuminate\Database\Eloquent\Model;


class Patentes extends Model
{
    protected $table = 'ceia3_patentes';
    protected $fillable = ['todo', 'category', 'description'];

    public function grupos_investigacion()
    {
        return $this->belongsToMany(GrupoInvestigacion::class, 'ceia3_patentes_grupos_investigacion_pivots', 'ceia3_patente_id', 'ceia3_grupo_investigacion_id');
    }
};
