  <!-- Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
       <h1 class="text-center mt-3">PANTAU COVID-19</h1>
       <div class="text-center"><img class="text-center" src="<?= base_url();?>assets/img/coderempire.png"  width="280" alt="Photo"></div>
       <h6 class="text-center mt-3">Corona Virus Global & Indonesia Live Data</h6>
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
    <div class="container mt-2">
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h5 class="mb-0">TOTAL POSITIF</h5>

              <h3 class="mb-0"><?= $globalPos['value']; ?></h3>
              <p class="mb-0">Orang</p>
            </div>
            <div class="icon">
              <i><img src="<?= base_url('assets/img/emoji-LWx.png'); ?>" width="80" height="80"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h5 class="mb-0">TOTAL SEMBUH</h5>

              <h3 class="mb-0"><?= $globalSem['value']; ?></h3>
              <p class="mb-0">Orang</p>
            </div>
            <div class="icon">
              <i><img src="<?= base_url('assets/img/happy-ipM.png'); ?>" width="80" height="80"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h5 class="mb-0">TOTAL MENINGGAL</h5>

              <h3 class="mb-0"><?= $globalMeni['value']; ?></h3>
              <p class="mb-0">Orang</p>
            </div>
            <div class="icon">
              <i><img src="<?= base_url('assets/img/sad-u6e.png'); ?>" width="80" height="80"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3 class="mb-0">INDONESIA</h3>
              <p class="mb-0"><?= $indonesia['positif']; ?> Positif</p>
              <p class="mb-0"><?= $indonesia['sembuh']; ?> Sembuh</p>
              <p class="mb-0"><?= $indonesia['meninggal']; ?> Meninggal</p>
            </div>
            <div class="icon">
              <i><img src="<?php echo base_url('assets/img/indonesia-PZq.png'); ?>" width="80" height="80"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="card card-outline card-warning">
            <div class="card-header">
              <h3 class="card-title">DATA KASUS CORONA VIRUS <?= strtoupper($getSingleProvince['provinsi']);?></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="info-box bg-info">
                    <span class="info-box-icon"><i><img src="<?php echo base_url('assets/img/emoji-LWx.png'); ?>" width="50"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Positif</span>
                      <span class="info-box-number"><?= $getSingleProvince['positif'];?></span>

                      <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                      </div>
                        <!-- <span class="progress-description">
                          70% Increase in 30 Days
                        </span> -->
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-success">
                      <span class="info-box-icon"><i><img src="<?php echo base_url('assets/img/happy-ipM.png'); ?>" width="50"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Sembuh</span>
                        <span class="info-box-number"><?= $getSingleProvince['sembuh'];?></span>

                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <!-- <span class="progress-description">
                          70% Increase in 30 Days
                        </span> -->
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-warning">
                      <span class="info-box-icon"><i><img src="<?php echo base_url('assets/img/sad-u6e.png'); ?>" width="50"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Meninggal</span>
                        <span class="info-box-number"><?= $getSingleProvince['meninggal'];?></span>

                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <!-- <span class="progress-description">
                          70% Increase in 30 Days
                        </span> -->
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">DATA KASUS CORONA VIRUS BERDASARKAN TINGKAT PROVINSI INDONESIA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="example1 table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $no = 1;
                   foreach ($provinsi as $value) { ?>  
                    <!-- melakukan looping data pada data provinsi -->
                    <!-- lalu ambil key array multidimensi $value['Key']['value']; -->
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $value['attributes']['Provinsi']; ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Posi']); ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Semb']); ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Meni']); ?></td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title">DATA KASUS CORONA VIRUS BERDASARKAN NEGARA GLOBAL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="example1 table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Negara</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach ($global as $value) { ?>  
                      <!-- melakukan looping data pada data global -->
                      <!-- lalu ambil key array multidimensi $value['Key']['value']; -->
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['attributes']['Country_Region']; ?></td>
                        <td><?= number_format($value['attributes']['Confirmed']); ?></td>
                        <td><?= number_format($value['attributes']['Recovered']); ?></td>
                        <td><?= number_format($value['attributes']['Deaths']); ?></td>
                        <!-- number format digunakan untuk memisahkan angka yang tadinya 1400500 menjadi 1,400,500 -->
                      </tr>
                      <?php $no++; } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Negara</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


