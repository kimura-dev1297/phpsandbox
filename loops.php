<?php

  /*
    For
    While
    Do..While
    ForEach
  */

  # For Loop
  # @params - init, condition, inc

 /* for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<br>';
  } 
  */

  # While Loop
  # @params - condition

  /*$i = 0;

  while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
  }
  */

  # Do...While
  # @params - condition

 /* $i = 0;

  do {
    echo $i;
    echo '<br>';
    $i++;
  }

  while($i < 10);
  */

  #ForEach Loop
 /* $people = array('Brad', 'Jose', 'Will');

  foreach($people as $person) {
    echo $person;
    echo '<br>';
  } */

  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'Will' => 'will@gmail.com');

  foreach($people as $person => $email) {
    echo $person.': '.$email;
    echo '<br>';
  }
?>