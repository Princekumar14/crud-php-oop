<?php
include 'database.php';

$obj = new Database();

// $obj->insert('students', ['student_name'=>'Ram Kumar', 'age'=> '20', 'city'=>'Goa']);
// echo "Insert result is : ";
// print_r($obj->getResult());

// $obj->update('students', ['student_name'=>'Rama Kumar', 'age'=> '21', 'city'=>'Goaa'], 'id="6"');
// echo "updated result is : ";
// print_r($obj->getResult());

// $obj->delete('students',  'id="6"');
// echo "Delete result is : ";
// print_r($obj->getResult());

// $obj->sql('SELECT * FROM students');
// echo "SQL result is : ";
// print_r($obj->getResult());


$obj->select('students', 'id, city, student_name', null, "city='Ludhiana'", null, 2);
echo "\n\nSelect result is : \n\n";
print_r($obj->getResult());

echo $obj->pagination('students', null, "city='Ludhiana'", 2);



?>