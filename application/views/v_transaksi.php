                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Dashboard</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">Library</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <a class="btn btn-primary" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kode Transaksi</th>
                                                <th scope="col">Jumlah Barang</th>
                                                <th scope="col">Total Bayar</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        if(isset($data_penjualan)){
                                            foreach($data_penjualan as $row){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $no++ ?></th>
                                                <td><?php echo $row->kd_trans ?></td>
                                                <td><?php echo $row->total_bayar ?></td>
                                                <td><?php echo $row->total_bayar ?></td>
                                                <td>@mdo</td>
                                                <td>df</td>
                                            </tr>
                                        </tbody>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>