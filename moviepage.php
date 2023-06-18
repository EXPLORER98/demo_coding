<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        include 'dbcon.php';
        $conn = mysqli_connect("localhost", "root", "", "student_db");


        $movie_name = $_REQUEST['movie_name'];
        $show_time = $_REQUEST['show_time'];
        $date = $_REQUEST['date'];
        if ($_FILES["image"]["error"] == 4) {
            echo "<script>alert('Image does not exist');</script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                    "<script>alert('invalid Image Extension');</script>";
            } else if ($fileSize > 1000000) {
                echo
                    "<script>alert(' Image Size is too large');</script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'img/' . $newImageName);


                $sql = "INSERT INTO movies (movie_name,show_time,date,image)
             VALUES('$movie_name','$show_time','$date','$newImageName')";

                $query_run = mysqli_query($conn, $sql);
                if ($query_run) {

                    header("location:movie_details.php");
                } else {
                    echo '<script>alert("Data Not Inserted")</script>';
                }

            }
        }




        ?>



    </center>
</body>

</html>