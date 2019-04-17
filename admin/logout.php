<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("location: index.php"); // Redirecting To dashboard Page
}
?>