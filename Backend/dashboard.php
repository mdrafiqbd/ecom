<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Backend/assets/css/bootstrap.css">

    <link rel="stylesheet" href="Backend/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="Backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="Backend/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="Backend/assets/css/app.css">
    <link rel="shortcut icon" href="Backend/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php require_once 'partials/left_sidebar.php'; ?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <h3>Profile Statistics</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <?php include 'partials/statistics.php'?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Profile Visit</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-profile-visit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Profile Visit</h4>
                                        </div>
                                        <?php require_once 'partials/profile_visit.php' ?>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <?php require_once 'partials/comments.php' ?>
                                </div>
                            </div>
                        </div>
                        <?php require_once 'partials/right_sidebar.php' ?>
                    </section>
                </div>
                <?php require_once 'partials/footer.php'?>

            </div>
        </div>
        <script src="Backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="Backend/assets/js/bootstrap.bundle.min.js"></script>

        <script src="Backend/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="Backend/assets/js/pages/dashboard.js"></script>

        <script src="Backend/assets/js/main.js"></script>
</body>

</html>