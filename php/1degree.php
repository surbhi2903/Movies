<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bacon.css">
</head>
<body>
<h1> The One Degree of Kevin Bacon</h1>
<form action="1degree.php" method="post">
Actor's Name:
<input type="text" name="firstname">
<input type="text" name="lastname">
<input type="submit" value="Search">
</form> 
<table>
<tr>
<th>Movie Name</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
  </tr>
<tr>
    <td>Alfreds Futterkiste</td>
  </tr>
<tr>
    <td>Alfreds Futterkiste</td>
  </tr>
<tr>
    <td>Alfreds Futterkiste</td>
  </tr>
 </table>

<?php include 'common.php';

$fname = $_POST['firstname'];
$sql  = "select * from (select DISTINCT t2.first_name,t2.last_name,t2.movie_id from (select * from actors as a INNER JOIN roles as r on a.id=r.actor_id where a.first_name='kevin' and a.last_name='bacon') as t1 INNER JOIN (select * from actors as a INNER JOIN roles as r on a.id=r.actor_id where a.first_name='".$fname."') as t2 ON t1.movie_id = t2.movie_id) as m1,movies as m where m1.movie_id=m.id";
$result= $conn->query($sql);
if($result->num_rows($result)>0){
    echo"<ul>";
    while($row= $result->fetch_assoc()){
        echo"<li>{$row['first_name']} {$row['last_name']} {$row['name']} </li>";
    }
    echo "</ul>";
}
else
{
    echo "<p> NIL </p>";
}
?>
</body>
</html>
