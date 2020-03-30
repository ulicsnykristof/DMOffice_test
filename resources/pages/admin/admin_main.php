<?php
  include_once '../../templates/headers/admin_header.php';
?>

<!-- Main -->
    <div class="container" style="margin-top: 80px; margin-bottom: 180px;">
      <div class="card-deck my-deck" >

        <div class="card bg-secondary">
          <div class="card-header" style="font-size: 18px;">
            User Management
          </div>
          <div class="card-body text-center">
            <img class="card-img-top" src="../pics/admin_modify.png" alt="card.jpg">
            <a class="btn btn-primary" href="admin_manage.php" style="margin-bottom: 16px; font-size: 18px; width: 100px;">Enter</a>
            <p>List, add, modify and delete users</p>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header" style="font-size: 18px;">
            User Activity
          </div>
          <div class="card-body text-center">
            <img class="card-img-top" src="../pics/admin_modify.png" alt="card.jpg">
            <a class="btn btn-primary" href="admin_page_activity.php" style="margin-bottom: 16px; font-size: 18px; width: 100px;">Enter</a>
            <p>Monitoring user activities</p>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header" style="font-size: 18px;">
            Reports
          </div>
          <div class="card-body text-center">
            <img class="card-img-top" src="../pics/admin_modify.png" alt="card.jpg">
            <a class="btn btn-primary" href="#" style="margin-bottom: 16px; font-size: 18px; width: 100px;">Enter</a>
            <p>Several report option</p>
          </div>
        </div>

      </div>
    </div>

<?php
  include_once '../../templates/footers/admin_footer.php';
?>
