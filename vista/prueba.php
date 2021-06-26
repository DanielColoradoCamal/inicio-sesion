<?php 

    $contra = password_hash('12345', PASSWORD_DEFAULT,['cost'=>10]);

    echo $contra;

?>