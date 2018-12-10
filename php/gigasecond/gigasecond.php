<?php
// $datetime = new DateTime();
// $date = $datetime->createFromFormat('Y-m-d H:i:s', '1992-04-24 17:30:00');

// function from($date) {
//     $gs = clone $date;
//     $gs->add(new DateInterval('PT1000000000S'));
//     return $gs;
// }

function from($input) {
    $gs=date_create($input);
    $gs->modify('+1000000000 seconds');
    return $gs->format('Y-m-d');
   
  }