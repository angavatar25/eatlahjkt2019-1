<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <?php $prefix = "../../../../";?>
  <?php include $prefix . "include/head.php";?>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <?php include $prefix . "include/navbar-admin.php";?>
  <div class="app-body app-body-alt">
    <?php include $prefix . "components/pages/antipm/include/sidebar.php";?>
    <main class="main">
      <div class="app-body-header">
        <h1>Clients</h1>
        <div class="btn-placeholder">
          <a href="<?php echo $prefix; ?>components/pages/antipm/clients/add-edit.php" class="btn btn-success">Add</a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="animated fadeIn">

          <div class="card card-section pt-0">
            <div class="card-body">
              <div class="table-responsive table-no-footer">
                <table id="dataTable" class="table">
                  <thead>
                    <tr>
                      <th>Client Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/clients/add-edit.php">Bank Mandiri</a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/clients/add-edit.php">OCBC NISP</a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/clients/add-edit.php">Garuda</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php include $prefix . "include/footer-admin.php";?>
  <?php include $prefix . "include/script.php";?>

  <script>
  $('#dataTable').DataTable();
  </script>


</body>

</html>