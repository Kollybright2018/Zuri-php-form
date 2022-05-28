<?php
if (isset($_POST['register'])) {
   $name = "Name: ". $_POST['name']. "\n";
   $email ="email: ". $_POST['email']. "\n";
   $date ="DOB: ". $_POST['date']. "\n";
   $gender ="Gender: ". $_POST['gender']. "\n";

   $file = fopen('userdata.csv', 'a');
   $write = fwrite($file, $name);
   $write = fwrite($file, $email);
   $write = fwrite($file, $date);
   $write = fwrite($file, $gender);
    echo '<pre>';
    print_r($_POST);
echo '</pre>';
}



?>