<?php

function valueAlert() {
    if (isset($_POST['value'])) {
        $value = $_POST['value'];
        // Faire quelque chose avec la valeur reçue
        // Par exemple, l'afficher à nouveau
        var_dump($_POST);
        echo $value;
    }
}



