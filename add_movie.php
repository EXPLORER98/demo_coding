<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    error_reporting(0);

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="border-shadow-sm text-center m-4">
        <div class="w-50"></div>
    </div>

    <form action="moviepage.php" method="post" enctype="multipart/form-data">




        <div class="container" my-4>
            <h2>Add New Movie</h2>
            <div class="w-50">
                <label for="exampleFormControlInput1" class="form-label">Movie Name</label>
                <input type="text" name="movie_name" class="form-control" id="exampleFormControlInput1"
                    placeholder=" add movie name" required>
            </div>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Show Time</label>
                <input type="time" name="show_time" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Show Date</label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput3">

            </div>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Thumbnail Image</label>
                <input type="file" id="img" name="image" accept=".jpg, .jpeg, .png" value="">

            </div>


            <br>

            <input type="submit" name="submit" class="btn btn-primary">


        </div>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </form>
</body>

</html>