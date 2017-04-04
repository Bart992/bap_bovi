<?php

$teachers = array('ingrid','jelle','joey');

//echo $teachers[1];

//$teachers[1] = 'ed';

//for($i = 0;$i <3;$i++);

    //echo '<p>' . $teachers[$i] . '</p>';


//$teachers[] = 'theo';


array_push($teachers, 'theo', 'hugo', 'paul');



foreach ($teachers as $one_teacher);
    echo '<p>' . $one_teacher . '</p>';



$subjects = array('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');

//echo $subjects['ingrid'];

foreach ($subjects as $teacher => $subject) {
    echo $teacher . ' teaches ' . $subject . '<br>';
}


?>