<?php
//indicamos a php que busque la clase BaseElement estará disponibles en de App\Models
namespace App\Models;

require_once 'Printable.php';

//implementamos la interfaz Printable que viene siendo un contrato entre desarrolladores
//de como se van a nombrar los metodos y que es lo que se necesita hacer
class BaseElement implements Printable {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t) {
        if($t == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "$years years $extraMonths months";
    }

    public function getDescription() {
        return $this->description;
    }
}