                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Transaksi</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo site_url('.')?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Transaksi</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <div class="table-responsive">
                                    <table width="100%">
                                            <tr>
                                                <td>
                                                    <a class="btn btn-danger" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button"><i class="mdi mdi-cart-outline"></i> Mulai Pemesanan</a>
                                                </td>
                                                <td width="100"></td>
                                                <td width="1">
                                                    <a class="btn waves-effect waves-light btn-outline-info" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button"><i class="mdi mdi-cart-outline"></i> Laporan Transaksi</a>
                                                </td>
                                                <td width="1">
                                                    <a class="btn waves-effect waves-light btn-outline-info" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button"><i class="mdi mdi-cart-outline"></i> Laporan Transaksi</a>
                                                </td>
                                            </tr>
                                    </table>
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
                    
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <caption>List of transaction</caption>
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;" width="1">No</th>
                                                    <th style="text-align: center;">Kode Transaksi</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Total Harga</th>
                                                    <th scope="col">Jumlah yang dibeli</th>
                                                    <th style="text-align: center;">Tanggal</th>
                                                    <th width="1" style="text-align: center;">Detail Transaksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                        $no = 1;
                                        if(isset($data_penjualan)){
                                            foreach($data_penjualan as $row){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th style="text-align: center;"><?php echo $no++ ?></th>
                                                <td style="text-align: center;"><?php echo $row->kd_trans ?></td>
                                                <td><?php echo $row->nm_pelanggan ?></td>
                                                <td>Rp. <?php echo $row->total_bayar ?></td>
                                                <td style="text-align: center;">@mdo</td>
                                                <td style="text-align: center;"><?php echo $row->tgl_trans ?></td>
                                                <td style="text-align: center;">
                                                    <a class="btn waves-effect waves-light btn-outline-success" href="<?php echo site_url('c_Transaksi/detail_transaksi/'.$row->kd_trans);?>" role="button">Detail Transaksi</a>
                                                </td>
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
                    </div>