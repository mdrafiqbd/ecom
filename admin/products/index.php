<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php require_once '../partials/left_sidebar.php'; ?>
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
                                <h3>Add Product</h3>

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
                                <h4 class="card-title">
                                    <button class="btn btn-primary"><i class="bi bi-back">Back</i></button>
                                </h4>
                            </div>

                            <div class="card-body">
                                <form action="category-save.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Name</label>
                                            <input type="text" name="product_name" class="form-control" id="basicInput"
                                                placeholder="Mens T-Shirt">
                                        </div>


                                        <div class="form-group col-6">
                                            <label for="basicInput">Categoty</label>

                                            <select class="form-select" name="role" aria-label="Default select example">

                                                <?php  require_once __DIR__."/../config.php";
                                                $sql ="SELECT * FROM products_categories";
                                                $output = $conn->query($sql);
                                                // $result = $output->fetch_assoc();
                                                //  print_r($result);
                                                // print_r($output);
                                //  while($row =$output->fetch_assoc()){
                                foreach($output as $row):
                                    
                                
                                ?>
                                                <option value="<?php echo $row['category_id'];?>">
                                                    <?php echo $row['category_name']; endforeach ?></option>


                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Price</label>
                                            <input type="number" name="price" class="form-control" id="basicInput"
                                                placeholder="999">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Discount Price</label>
                                            <input type="text" name="discount_price" class="form-control"
                                                id="basicInput" placeholder="100">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Quantity</label>
                                            <input type="number" min="1" name="quantity" class="form-control"
                                                id="basicInput" placeholder="1">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Feature Image</label>
                                            <input type="file" name="fimage" class="form-control" id="basicInput"
                                                placeholder="example.jpg">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="basicInput">Description</label>
                                            <textarea class="form-control border border-primary" name="description"
                                                id="description" cols="30" rows="6"></textarea>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Id</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>



                </div>





                <?php require_once '../partials/footer.php'?>

            </div>
        </div>
        <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="../assets/js/pages/dashboard.js"></script>

        <script src="../assets/js/main.js"></script>
        <script>
        CKEDITOR.replace('description');
        </script>
</body>

</html>