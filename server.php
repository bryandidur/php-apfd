<?php

/*
|---------------------------------------------------
| Example On Getting the Request Data
|---------------------------------------------------
|
| You can use this file to test your installation
| of the apfd PHP extension.
|
*/

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

// $files = $_FILES;
$data = filter_input_array(INPUT_POST); // Same as $_POST, but more secure.

print '<pre>';
print_r($data);
// print_r($files);
print '</pre>';
