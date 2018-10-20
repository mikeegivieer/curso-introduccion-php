<?php


//Esta es la clase base que contiene los atributos básicos de un proyecto  y de un trabajo como 
//titulo descripción etcétera
class BaseElement {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    //en php los constructores se crean utilizando la palabra reservada __construct
    //en este caso cuando creamos un objeto al constructor le pasamos el titulo y la descripción
    //para que los asigne a las variables de clase

    public function __construct($title, $description) {
        
        //this hace referencia al objeto creado en si y a su método setTitlle que se encarga de asignar
        //el titulo a la variable tittle
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t) {
        //Si se le manda una cadena vaciá se le ponga una por defecto
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
        //la funcion php floor redondea el resultado de la división a la baja
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      //Dentro de las comillas dobles ponemos escribir las variables y php interpretara su contenido
      //a diferencia de las comillas simples
        return "$years years $extraMonths months";
    }
}