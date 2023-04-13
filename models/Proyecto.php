<?php

namespace Proyecto;

use Model\ActiveRecord;

class Proyecto extends ActiveRecord
{
    public static $tabla = 'proyectos';
    protected $columnasDB = ['id', 'proyecto', 'url', 'propietarioId'];

    public $id;
    public $proyecto;
    public $url;
    public $propietarioId;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->proyecto = $args['proyecto'] ?? null;
        $this->url = $args['url'] ?? null;
        $this->propietarioId = $args['propietarioId'] ?? null;
    }
}
