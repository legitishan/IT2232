<?php
$a=$_POST['username'];
$b=$_POST['password'];
if($a=='user' && $b=='password'){
    echo 'Valid';
}
else{
    echo 'Invalid';
}

?>