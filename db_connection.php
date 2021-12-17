<?php
 function dbconnect()
 {
   $DB = new mysqli("localhost","username","password","mydb");
   if (mysqli_connect_error())
   {
     echo'Cannot connect to database:'.mysqli_connect_error();
   }
   else
   {
     return $DB;
   }
