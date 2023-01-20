<?php

// Server-side validation
$errors = [];
$naam =;
if($naam == '') {
    $errors['naam'] = 'naam invoeren.';
}
if($telefoonnummer == '') {
    $errors['telefoonnummer'] = 'telefoonnummer invoeren.';
}
if($taco == '') {
    $errors['taco'] = 'Aantal tacos aangeven.';
}
