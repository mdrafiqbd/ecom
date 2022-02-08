<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php require_once 'left_sidebar.php'; ?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last text-center">
                                <h3>Category List</h3>
                                <p class="text-subtitle text-muted">For user to check they list</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <a href="new_category.php">
                                    <button type="button" class="btn btn-primary">
                                        <i class="bi bi-plus">Add
                                            Category</i> </button>
                                </a>
                            </div>

                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Category Name</th>
                                            <th>Category Slug</th>
                                            <th>Category Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require_once '../config.php';
                                        $qry ="SELECT * FROM products_categories";
                                        $result =$conn->query($qry);
                                        $i =0;
                                 while($row =$result->fetch_assoc()){

                                 
                                
                               ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php  echo $i++; ?>
                                            </td>
                                            <td><?php echo $row['category_name'];?></td>
                                            <td><?php echo $row['category_slug'];?></td>
                                            <td><img style="width:100px; height:100px"
                                                    src="<?php echo $row['category_image'];?>" alt=""></td>


                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                            <td><a href="category-edit.php?id=<?php echo $row['category_id'];?>"><i
                                                        class="bi bi-pencil-square"></i></a>

                                                <a href="category-delete.php?id=<?php echo $row['category_id'];?>"
                                                    onclick="return confirm('Are you sure you want to delete this item')"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php  };
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>
            </div>

        </div>
        <?php require_once 'footer.php'?>
        <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="../assets/js/pages/dashboard.js"></script>

        <script src="../assets/js/main.js"></script>
</body>

</html>