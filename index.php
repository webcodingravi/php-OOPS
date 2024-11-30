<?php

include 'database/config.php';

$obj = new Database();
// $obj->insert('student',['name' => 'Ravi kumar', 'email' => 'ravi@gmail.com', 'age' => 23]);
// echo "insert result is :";
// print_r($obj->getResult());

// $obj->update('student',['name' => 'Arjun', 'email' => 'arjun@gmail.com', 'age' => 25], 'id="5"');
// echo "update result is :";
// print_r($obj->getResult());

// $obj->delete('student', 'id="5"');
// echo "Delete result is :";
// print_r($obj->getResult());


$obj->sql('SELECT * FROM student');
$result = $obj->getResult();
echo "<table border='1' width='500px'>
       <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </thead>

";

foreach($result as list("id" => $id, "name" =>$name, 'email' => $email, "age" =>$age)) {
 echo "<tr>
 <td>$id</td>
 <td>$name</td>
  <td>$email</td>
 <td>$age</td>
 </tr>";
}
echo "</table>"
// echo "<pre>";
// echo "SQL result is :";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->select('student', '*',null,null,null,1);
// echo "<pre>";
// echo "select result is :";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->pagination('student',null,null,1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops crud</title>
</head>
<body>
    <div class="table">
        <table>
            <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>