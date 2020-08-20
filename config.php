<?php 

    // show all errors
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    //database
    require '_inc/vendor/autoload.php';
    
    use Medoo\Medoo;

    $database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'project_1',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    
    ]);

  
    //variables 
    $exercise;
    $vakum;
    $streching;
    $coldShower;
    $running;
    $reading;

    $day=date("l");   
    $date=date("d.m.");
    $month=date("F");
  
     