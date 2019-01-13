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
                                    <table >
                                            <tbody>
                                                <tr>
                                                    <td width="1">
                                                        <a class="btn btn-danger" href="c_tambahProduk" role="button">Tambah Produk</a>
                                                    </td>
                                                    <td width="100%"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br/>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <caption>List of Produk</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Produk</th>
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Harga</th>
                                                    <th colspan="2" width="1" style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            if(isset($data_produk)){
                                                foreach($data_produk as $row){
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row->kd_produk ?></td>
                                                    <td><?php echo $row->nm_produk ?></td>
                                                    <td><?php echo $row->kd_kategori ?></td>
                                                    <td><?php echo $row->harga ?></td>
                                                    <td width="1">
                                                        <a class="btn btn-primary" href="<?php echo site_url('c_tambahProduk/v_updateProduk/'.$row->kd_produk);?>" role="button">Ubah</a>
                                                    </td>
                                                    <td width="1">
                                                        <a class="btn btn-primary" href="<?php echo site_url('c_tambahProduk/v_updateProduk/'.$row->kd_produk);?>" role="button">Hapus</a>
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