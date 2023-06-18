<?php
include("dbcon.php");
?>
<title>View Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<div class="container">
  <h1>
    <span style="color:green"></span>
    <a href="add_movie.php">
      <button class='btn btn-success pull-right'>
        Add Movie
      </button>
    </a>
  </h1>
</div>
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }

  .update,
  .delete {
    background-color: green;
    color: white;
    border: 0;
    outline: none;
    border-radius: 5px;
    height: 23px;
    width: 80px;
    font-weight: bold;
    cursor: pointer;
  }

  .delete {
    background-color: red;
  }
</style>
<h2>Movie Details</h2>
<table>
  <tr>
    <th width="10%">Sl No. </th>
    <th width="20%">Movie Name </th>
    <th width="15%">Show Time </th>
    <th width="15%">Show Date </th>
    <th width="20%">Image </th>
    <th width="20%">Operatinos </th>
  </tr>
  <?php
  $query = "SELECT * FROM movies";
  $data = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_array($data)) {


    echo "<tr>
        <td>$row[id]</td>
            <td>$row[movie_name]</td>
            <td>$row[show_time]</td>
            <td>$row[date]</td>
             <td>  <img src=" . 'img/' . $row['image'] . " width=50px height=50px> </td>
             <td><a href='update_movie.php?id=$row[id]'><input type='submit' value='Update' class='update'></a>
             <a href='delete_movie.php?id=$row[id]'><input type='submit' value='Delete' class='delete'></a></td>
             
        </tr>
        ";

  }
  ?>
</table>