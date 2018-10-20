<?php
//Los namespace se utilizan para evitar errores en el nombrado de clases y poder utilizar
//los mismos nombres de clases pero diferenciando por su contexto
//En este caso se le indica a php que buscara la interfaz Printable dentro de App/Models
namespace App\Models;

interface Printable {
    public function getDescription();
}