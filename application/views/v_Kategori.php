                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Kategori Produk</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Kategori Produk</li>
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
                                    <h4 class="card-title">Daftar Kategori</h4>
                                    <!--<h6 class="card-subtitle">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</h6>-->
                                </div>
                                <table class="table" >
                                            <tbody>
                                                <tr>
                                                    
                                                    <td width="1">
                                                        <a class="btn btn-primary" href="c_tambahKategori" role="button">Tambah Kategori</a>
                                                    </td>
                                                    <td width="100%"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th width="1" colspan="2"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($kategori as $row) { ?>
                                        <tbody>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['nama_kategori'] ?></td>
                                            <td width="1">
                                                <a class="btn btn-primary" href="<?php echo site_url('c_tambahKategori/v_updateKategori'.$row['kd_kategori']);?>" role="button">Ubah</a>
                                                </td>
                                            <td width="1">
                                                <a class="btn btn-primary" href="<?php echo site_url('c_tambahProduk/v_deleteProduk/'.$row['kd_kategori']);?>" role="button">Hapus</a>
                                            </td>
                                        </tbody>
                                            
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>