<?php
// assuming you have a Mysql database setup
$Name = "Name:";
$mobile_number= "Mobile_Number:";
$gender ="Gender:";
$email="Email:";
$Feedback="Feedback";
//create connection
$conn =new mysqli($Name,$mobile_number,$gender,$Feedback,$email);
