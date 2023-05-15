<?php

$notes = [];
$note = '';

while ($word !== 'fin') {
    $note = readline('saisissez une note :');
    $notes = [...$notes, $note];

}
