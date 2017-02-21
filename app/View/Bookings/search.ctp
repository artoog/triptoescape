<?php

//print_r($booking['Booking']['app_session_id']);

$artoo = SessionHelper::read('Booking');
print_r($artoo);

?>