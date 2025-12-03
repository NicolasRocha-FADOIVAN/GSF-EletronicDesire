<?php 

function profile() {

    if(!isset($_SESSION['id'])) {
        $element='

        <a class="profile-button" href="index.php?route=login"><b>Entre ou Cadastre-se</b></a>
        
        ';
    } else {
        $element='

        <a class="profile-button" href="#"><img src="./screen/assets/profile.png" alt="Logo Electronic Desire Gaming" style="width: 30px"/></a>
        
        ';
    }

    echo $element;
}