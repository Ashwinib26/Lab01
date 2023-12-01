<?php
// Sample array
$data = array(
    "name" => "Ashwini Bisen",
    "city" => "Nagpur",
    "country" => "India",
);

header("Content-Type: application/json");
echo json_encode($data);
exit();
