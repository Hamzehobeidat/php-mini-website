<?php 


$multiArray = array( 
    array(
        "username" => "hamzeh",
        "password" => "hamzeh",
        "role"     => "admin",
    ),
    array(
        "username" => "maria",
        "password" => "maria",
        "role"     => "admin",
    ),
    array(
        "username" => "yacoub",
        "password" => "yacoub",
        "role"     => "user",
    ),

    array(
        "username" => "ali",
        "password" => "ali",
        "role"     => "user",
    ),

    array(
        "username" => "omar",
        "password" => "omar",
        "role"     => "user",
    )
    
    );


echo "<pre>";
// print_r($multiArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>
<table border = '2'>
<tr>
<th>username</th>
<th>role</th>
<th>Delete</th>
</tr>

<?php
foreach ($multiArray as $key => $val) 
{
?>
<tr>
<td><?php echo $val['username'];?></td>
<td><?php echo $val['role'];?></td>
<td><?php   echo "<button> '<?php unset($multiArray[$key]['username']); ?> delete'</button>" ?></td>
</tr>
<?php } ?>
</table>


</body>
</html>