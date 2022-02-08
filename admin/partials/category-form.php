<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Category</h3>

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

            <div class="card-body">
                <form action="category-save.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="basicInput"
                                    placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Category Slug</label>

                                <input type="text" name="category_slug" class="form-control" id="helpInputTop">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Category Image</label>

                                <input type="file" name="image" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <button type="submit"> Save</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>



</div>