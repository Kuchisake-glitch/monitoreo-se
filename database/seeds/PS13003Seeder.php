<?php

use App\Componente;
use App\Medicion;
use App\SistemaEmbebido;
use App\TipoDato;
use App\Unidad;
use Illuminate\Database\Seeder;

class PS13003Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SistemaEmbebido::create([
            'user_id'=>'1',
            'nombre'=>'SistemaEmbebido1',
            'activo'=>TRUE
        ]);

        SistemaEmbebido::create([
            'user_id'=>'2',
            'nombre'=>'SistemaEmbebido2',
            'activo'=>FALSE
        ]);

        TipoDato::create([
            'nombre'=>'Entero'
        ]);

        TipoDato::create([
            'nombre'=>'Decimal'
        ]);

        TipoDato::create([
            'nombre'=>'Cadena de Texto'
        ]);

        Unidad::create([
            'nombre'=>'kilometro',
            'abreviacion'=>'km'
        ]);

        Unidad::create([
            'nombre'=>'kilogramo',
            'abreviacion'=>'kg'
        ]);

        Unidad::create([
            'nombre'=>'kelvin',
            'abreviacion'=>'K'
        ]);

        Componente::create([
            'sistema_embebido_id'=>1,
            'tipo_dato_id'=>1,
            'unidad_id'=>1,
            'nombre'=>'primer sistema'
        ]);

        Componente::create([
            'sistema_embebido_id'=>1,
            'tipo_dato_id'=>2,
            'unidad_id'=>3,
            'nombre'=>'segundo sistema'
        ]);

        Componente::create([
            'sistema_embebido_id'=>2,
            'tipo_dato_id'=>3,
            'unidad_id'=>2,
            'nombre'=>'tercer sistema'
        ]);

        Componente::create([
            'sistema_embebido_id'=>2,
            'tipo_dato_id'=>1,
            'unidad_id'=>3,
            'nombre'=>'cuarto sistema'
        ]);

        Medicion::create([
            'componente_id'=>1,
            'valor'=>'nano'
        ]);

        Medicion::create([
            'componente_id'=>2,
            'valor'=>'micro'
        ]);

        Medicion::create([
            'componente_id'=>3,
            'valor'=>'mili'
        ]);

        Medicion::create([
            'componente_id'=>4,
            'valor'=>'centi'
        ]);

        Medicion::create([
            'componente_id'=>1,
            'valor'=>'kilo'
        ]);

        Medicion::create([
            'componente_id'=>2,
            'valor'=>'mega'
        ]);

        Medicion::create([
            'componente_id'=>3,
            'valor'=>'giga'
        ]);

        Medicion::create([
            'componente_id'=>4,
            'valor'=>'tera'
        ]);
    }
}
