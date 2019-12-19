<?php
session_start();

if(isset($_SESSION['lname'])){

echo "howdy ".$_SESSION['lname'];
}

?>
<?php
session_destroy();
?>