 <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Produk</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Produk</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Produk</h4>
                                    <!--<h6 class="card-subtitle">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</h6>-->
                                </div>
                                <div class="table-responsive">
								<center><?php echo anchor('c_Data/v_create','Tambah Data'); ?></center>
                                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                              <tr>
                                <th>Kode</th>
								<th>Kategori</th>
            <th colspan="2" style="width: 1%;"> </th>
                              </tr>
                            </thead>
                            <?php foreach ($produk as $r) {
            echo '<tr>';
            echo '<td>'.$r['kd_kategori'].'</td><td>'.$r['nama_kategori'].'</td>';
            echo '<td><a href="'.site_url('/c_Data/v_update/'.$r['kd_kategori']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/c_Data/v_delete/'.$r['kd_kategori']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
                          </table>
                                </div>
                            </div>
                        </div>
                    </div>