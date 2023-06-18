<html>

<head>
    <title>Update Page</title>
</head>

<body>
    <center>
        <?php



        error_reporting(0);
        include 'dbcon.php';
        $conn = mysqli_connect("localhost", "root", "", "student_db");


        if (isset($_POST['update'])) {
            $id = $_REQUEST['id'];
            $movie_name = $_REQUEST['movie_name'];
            $show_time = $_REQUEST['show_time'];
            $date = $_REQUEST['date'];
            if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {
                $fileSize = $_FILES['image']['size'];
                $tmpName = $_FILES['image']['tmp_name'];
                $fileType = $_FILES['image']['type'];
                $fileName = $_FILES['image']['name'];

                unlink("img/$image_old");
                move_uploaded_file($tmpName, "img/$fileName");
            } else {
                $fileName = $image_old;
            }


            $sql = "UPDATE movies SET movie_name='$movie_name',show_time='$show_time',date='$date',image='$fileName' WHERE id='$id' ";

            $query_run = mysqli_query($conn, $sql);
            if ($query_run) {
                echo "Data updated";
            } else {
                echo "Failed to update";
            }

        }


        ?>



    </center>
</body>

</html>