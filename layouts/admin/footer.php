<footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co" target="_blank">UXCANDY</a>. All rights reserved</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- plugins:js -->
    <script src="<?= BASE_URL.'/layouts/admin/assets/vendors/js/core.js'?>"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="<?= BASE_URL.'/layouts/admin/assets/vendors/apexcharts/apexcharts.min.js'?>"></script>
    <script src="<?= BASE_URL.'/layouts/admin/assets/vendors/chartjs/Chart.min.js'?>"></script>
    <script src="<?= BASE_URL.'/layouts/admin/assets/js/charts/chartjs.addon.js'?>"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="<?= BASE_URL.'/layouts/admin/assets/js/template.js'?>"></script>
    <script src="<?= BASE_URL.'/layouts/admin/assets/js/dashboard.js'?>"></script>
    <script src="<?= BASE_URL.'/public/libs/js/jquery-3.5.1.min.js'?>"></script>
    <script src="<?= BASE_URL.'/public/libs/js/jquery-ui.js'?>"></script>
    <script src="<?= BASE_URL.'/public/libs/js/jquery.dataTables.min.js'?>"></script>
    
    <?php 
        if(isset($script)){
          echo($script);
        }
    ?>
  </body>
</html>