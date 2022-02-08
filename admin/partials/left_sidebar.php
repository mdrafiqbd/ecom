<!-- Sidebar Stats -->
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">


                    <a href="index.html"><img src="../assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class="sidebar-title">Menu</li> -->

                <li class="sidebar-item active ">
                    <a href="../dashboard/index.php" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>

                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="../category" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Category</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item">
                            <a href="../partials/category-list.php">Category List</a>
                        </li>
                        <li class="submenu-item">
                            <a href="../category">Add Category</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Products</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="../products/products-list.php">Products List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="../products">Add Product</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>USER</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="../users/">User List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="../users/add_user.php">Add User</a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<!-- Sidebar End -->