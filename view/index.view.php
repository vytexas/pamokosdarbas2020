<?php

use userApp\User;

$user = new User("Vytenis", "vytenis@gmail.com", "student");


foreach ($user->showProfile() as $item) {
    echo $item . " ";


}

?>
