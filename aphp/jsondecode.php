<?php
$json = '{"name":"John Doe","email":"johndoe@example.com","age":35}';

$data = json_decode($json);

print $data->name;
?>
