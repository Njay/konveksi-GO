<?php
  include('../Config/config.php');
  //include('../Action/grafik_data.php');
  $qUser = mysqli_query($kon,"SELECT count(id) AS jmlUser FROM tb_user");
  $vUser = mysqli_fetch_array($qUser);

  $qCustomer = mysqli_query($kon,"SELECT count(id) AS jmlCustomer FROM tb_order");
  $vCustomer = mysqli_fetch_array($qCustomer);

  $qTotalPesanan = mysqli_query($kon,"SELECT SUM(jumlah) AS total FROM tb_order");
  $vTotalPesanan = mysqli_fetch_array($qTotalPesanan);
?>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Karyawan</span>
                <span class="info-box-number">
                  <?php echo $vUser['jmlUser']?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pesanan Selesai</span>
                <span class="info-box-number">1801</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pesanan</span>
                <span class="info-box-number"><?php echo $vTotalPesanan['total']?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pelanggan</span>
                <span class="info-box-number"><?php echo $vCustomer['jmlCustomer']?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
      <div style="text-align:center">
            <h3 class="page-header" >Product Sales Reports </h3>
            <p style="align:center;"><canvas id="chartjs_bar"></canvas></p>
        </div>   
    </section>
    <?php
    include("../Config/config.php");

    $query = mysqli_query($kon, "SELECT * FROM tb_order");
    $chart_data="";
    while ($row = mysqli_fetch_array($query)) {
        $tipe[] = $row["tipe"];
        $jumlah[] = $row["jumlah"];
    };
    ?>
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($tipe); ?>,
                        datasets: [{
                            label:"Jumlah",
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#5FF702",
                                "#02F7EC",
                                "#F70245",
                                "#0254F7",
                                "#F7F702",
                                "#F56A09",
                            ],
                            data:<?php echo json_encode($jumlah); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
    <!-- /.content -->