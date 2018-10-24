<!--
IT15060822
W.M.W.G.Wijesundara
-->

<?php
session_start();
session_unset(); 
session_destroy();
header("Location:../index.php?er=Logged Out");
?>