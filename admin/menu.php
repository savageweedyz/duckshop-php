
<header class="p-3 bg-dark text-white" style = "background-color:#ff6347;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="show_department.php" class="nav-link px-2 text-white">Customer</a></li>
                    <li><a href="fr_profile.php" class="nav-link px-2 text-white">Profile</a></li>
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Product</button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="show_type.php">Type</a></li>
                                    <li><a class="dropdown-item" href="show_product.php">Product</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Employee</button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="show_department.php">Department</a></li>
                                    <li><a class="dropdown-item" href="show_employee.php">Emloyee</a></li>
                                </ul>        
                        </li>
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Report</button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="report_order_no.php">รายงานการสั่งซื้อ</a></li>
                                    <li><a class="dropdown-item" href="show_employee.php">Emloyee</a></li>
                                </ul>        
                        </li>  
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <?php
                 if(isset($_SESSION["emp_name"]))
                 {
                  echo $_SESSION["emp_name"] ." ". $_SESSION["emp_lastname"];
                 }
                 ?>
                </form> 
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <a href ="logout.php  " ><button type="button" class="btn btn-warning">Log Out</button></a>
        </div>
      </div>
    </div>
  </header>