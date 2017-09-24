<?php

// möglichkeit 1
echo 'name: '.$_POST['name'].'<br>';
echo 'email: '.$_POST['email'].'<br>';
echo 'website: '.$_POST['website'].'<br>';
echo 'comment: '.$_POST['comment'].'<br>';
echo 'gender: '.$_POST['gender'];


echo '<hr>';

// möglichkeit 2
foreach($_POST as $name => $value) {

    echo $name.': '.$value.'<br>';
}



// Anmerkung: Chrome versucht, XSS zu blockieren. Grundsätzlich sind sie mit diesem Formular aber möglich.