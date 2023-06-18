<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>User Page</title>
</head>

<body>

    <form>
        <div class="container py-5">
            <div class="row mt-4">
                <h1 class="text-center">Movie Details</h1>
                <?php
                include 'dbcon.php';

                $query = "SELECT * FROM movies";
                $query_run = mysqli_query($conn, $query);
                $data = mysqli_num_rows($query_run) > 0;
                if ($data) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                        <div class="col-md-4 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="img/<?php echo $row['image'] ?>" width="200px" height="200px" alt="movie_image">
                                <div class="card-body">

                                    <h4 class="card-title">
                                        <?php echo $row['movie_name'] ?>
                                    </h4>
                                    <h4 class="card-title">
                                        <?php echo $row['show_time'] ?>
                                    </h4>
                                    <h4 class="card-title">
                                        <?php echo $row['date'] ?>
                                    </h4>

                                </div>
                            </div>
                        </div>
                        <?php

                    }
                } else {
                    echo "No Movies Available!!!";
                }
                ?>


            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>