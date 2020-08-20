<?php 



require 'config.php';



$database->insert(''.date("F").'', [
    'exercise' => $_POST['exercise'],
    'kcal' => $_POST['kcal'],
    'water' => $_POST['water'],
    'meditation' => $_POST['meditation'],
    'sleepstart' => $_POST['sleepstart'],
    'sleepend' => $_POST['sleepend'],
    'weight' => $_POST['weight'],
    'vakum' => $_POST['vakum'],
    'streching' => $_POST['streching'],
    'coldshower' => $_POST['coldshower'],
    'running' => $_POST['running'],
    'reading' => $_POST['reading'],
    /* 'notes' => $_POST['notes'], */
    'day' => $_POST['day']
    ]);


  





    

   