<?php

require_once 'BaseElement.php';

//Para heredar las funcionalidades y atributos de BaseElement usamos extends
class Job extends BaseElement {

    // se sobreescrbe el constructor de la clase padre BaseElement
    public function __construct($title, $description) {
        // se crea una variable interna concatenada a través de un .
        $newTitle = 'Job: ' . $title;
        //con el this se hace referencia a la variable title del padre y se asigna la variable anterior
        $this->title = $newTitle;
    }

    public function getDurationAsString() {
        //se redondea a la baja 
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }
}