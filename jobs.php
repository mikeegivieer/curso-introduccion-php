<?php


//Tenemos que tener cuidado de no duplicar este require ya que a diferencia de require_one
//dependiendo de las veces que se mande a llamar incluirá el archivo y podría causar errores
require 'app/Models/Job.php';
require 'app/Models/Project.php';

//segun el constructor al crer un objeto de la clase Job tenemos que enviarle el titulo y la descripción
$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');

// Se crea un arreglo que conrtiene los 3 objetos creados anteriormente
$jobs = [
    $job1,
    $job2,
    $job3
  ];

$projects = [
    $project1
];
  
// si el trabajo no es  visible la función se detiene y regresa
function printElement($job) {
    if($job->visible == false) {
      return;
    }
    //si esta como visible se imprimen los datos en su lugar a través de echo
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }