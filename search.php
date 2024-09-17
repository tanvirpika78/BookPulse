<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <title>Search Page</title>
</head>

<body style="background-color:white;">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="color:white;background-color:#043504;">
 Search Result
</nav>
<a href="./index2.php" class="fa-solid fa-backward fa-beat fa" style="color: #1f5151; padding-left: 20px;"> Back</a>



  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #4CAF50; color: white;">
                <div class="card-header" style="background-color: #388E3C;border-color: black; border-width: 1px; border-style: solid;">
                    <h4 style="text-align: center;">Book Info</h4>
                </div>
                <div class="card-body" style="background-color:white">
                    <table class="table table-bordered" style="color: black;border-color: black; border-width: 1px; border-style: solid;">
                    <thead style="background-color: #BDBDBD; border-color: black; border-width: 1px; border-style: solid;">
    <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Bookpic</th>
        <th>Book Price</th>
        <th>Book Author</th>
    </tr>
</thead>

                        <tbody>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "library_managment");

                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM book WHERE CONCAT(id, bookname, bookpic, bookprice) LIKE '%$filtervalues%'";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['bookname']; ?></td>
                                            <td>
                                                <img src="./library_Project/uploads/<?php echo $row['bookpic']; ?>" alt="Book Image" style="max-width: 100px;">
                                            </td>
                                            <td><?= $row['bookprice']; ?></td>
                                            <td><?= $row['bookauthor']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>