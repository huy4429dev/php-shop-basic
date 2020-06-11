<?php  
include('../../autoload/Autoload.php');

//================== check login

if(!Auth::user()){

  Redirect::url('admin/account/login.php');
  
}


include('../../layouts/admin/header.php');



?>
  <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-12 py-5">
                <h4>Dashboard</h4>
                <p class="text-gray">Welcome aboard, <?php print_r(Auth::user()->name) ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>30%</p>
                      <p>+06.2%</p>
                    </div>
                    <p class="text-black">Traffic</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_1"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>43%</p>
                      <p>+15.7%</p>
                    </div>
                    <p class="text-black">Conversion</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_2"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>23%</p>
                      <p>+02.7%</p>
                    </div>
                    <p class="text-black">Bounce Rate</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_3"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>75%</p>
                      <p>- 53.34%</p>
                    </div>
                    <p class="text-black">Marketing</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_4"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <p class="card-title">Campaign</p>
                    <div id="radial-chart"></div>
                    <h4 class="text-center">$23,350.00</h4>
                    <p class="text-center text-muted">Used balance this billing cycle</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 equel-grid">
                <div class="grid widget-revenue-card">
                  <div class="grid-body d-flex flex-column h-100">
                    <div class="split-header">
                      <p class="card-title">Server Load</p>
                      <div class="content-wrapper v-centered">
                        <small class="text-muted">2h ago</small>
                        <span class="btn action-btn btn-refresh btn-xs component-flat">
                          <i class="mdi mdi-autorenew text-muted mdi-2x"></i>
                        </span>
                      </div>
                    </div>
                    <div class="mt-auto">
                      <canvas id="cpu-performance" height="80"></canvas>
                      <h3 class="font-weight-medium mt-4">69.05%</h3>
                      <p class="text-gray">Storage is getting full</p>
                      <div class="w-50">
                        <div class="d-flex justify-content-between text-muted mt-3">
                          <small>Usage</small> <small>35.62 GB / 2TB</small>
                        </div>
                        <div class="progress progress-slim mt-2">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php  
include('../../layouts/admin/footer.php');
?>
