<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Student</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Add</a>
                </li>
                <li>
                    <a href="view_result.php">View</a>
                </li>
            </ul>
        </nav>
        <h1>View Student Record</h1>
    </header>
<div class="tr">
    <?php

include ('database.php');
$sql = "SELECT name, id, course, grade FROM students_detailed";
$res = mysqli_query($con, $sql);

if ($res) {
  echo "<tr>
          <th>name</th>
          <th>id</th>
          <th>course</th>
          <th>grade</th>
         </tr>";
while($row = mysqli_fetch_assoc($res)){
  echo "<tr>
          <br>
          <td>" . $row['name'] . "</td>  
          <td>" . $row['id'] . "</td>
          <td>" . $row['course'] . "</td> 
          <td>" . $row['grade'] . "</td>
          <br> 
      </tr>";
} 

}
?>
</div>
    <footer>
        <p>PHP Dynamic Website</p>
    </footer>
</body>
</html>

