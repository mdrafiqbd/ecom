<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php require_once '../../partials/left_sidebar.php'; ?>
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
                                <h3>Add Products</h3>

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

                                    <a href="../"><button class="btn btn-primary"><i
                                                class="bi bi-back">Back</i></button> </a>
                                </h4>
                            </div>

                            <div class="card-body">
                                <form action="category-save.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Name</label>
                                            <input type="text" name="product_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Id</label>
                                            <input type="text" name="product_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Name</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Id</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Name</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Id</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="basicInput">Product Name</label>
                                            <input type="text" name="category_name" class="form-control" id="basicInput"
                                                placeholder="Enter email">
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





                <?php require_once '../../partials/footer.php'?>

            </div>
        </div>
        <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="../../assets/js/pages/dashboard.js"></script>

        <script src="../../assets/js/main.js"></script>
</body>

</html>