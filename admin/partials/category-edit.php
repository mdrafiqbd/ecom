<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Backend/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../Backend/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../../Backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../Backend/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Backend/assets/css/app.css">
    <link rel="shortcut icon" href="../../Backend/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php require_once 'left_sidebar.php'; 
             
            ?>
            <div id="main">

                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3> Update Category</h3>

                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category</h4>
                            </div>
                            <?php
                                            require_once '../config.php';
                                            $id = $_GET['id'];
                                            $select = "SELECT * FROM products_categories where category_id ='$id'";
                                            $qry = $conn->query($select); 
                                            $row = $qry->fetch_assoc() ; 
                                            //echo $_FILES['image']['name'];
                           ?>


                            <div class="card-body">
                                <form action="category-update.php?id=<?php echo $id; ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="basicInput">Category Name</label>
                                                <input type="text" name="category_name" class="form-control"
                                                    id="basicInput" value="<?php echo $row['category_name']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="helpInputTop">Category Slug</label>

                                                <input type="text" name="category_slug" class="form-control"
                                                    id="helpInputTop" value="<?php echo $row['category_slug']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="helpInputTop">Category Image</label>

                                                <input type="file" name="image" class="form-control" id="helpInputTop"
                                                    placeholder=" " value="">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="update"> Update</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>

                    </section>


                </div>

                <?php require_once 'footer.php'?>

            </div>
        </div>
        <script src="../../Backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../../Backend/assets/js/bootstrap.bundle.min.js"></script>

        <script src="../../Backend/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="../../Backend/assets/js/pages/dashboard.js"></script>

        <script src="../../Backend/assets/js/main.js"></script>
</body>

</html>