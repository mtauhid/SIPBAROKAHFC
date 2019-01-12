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
                                                <th width="1"></th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($kategori as $r) {
                                            echo '<tr>';
                                            echo '<td>'.$r['kd_kategori'].'</td><td>'.$r['nama_kategori'].'</td>';
                                            echo '<td><a class="btn btn-primary" href="'.site_url('/c_tambahKategori/v_updateKategori/'.$r['kd_kategori']).'" class="class="btn waves-effect waves-light btn-rounded btn-success"">Ubah</a></td>';
											echo '<td><a class="btn btn-primary" href="'.site_url('/c_tambahKategori/v_deletekategori/'.$r['kd_kategori']).'" class="class="btn waves-effect waves-light btn-rounded btn-success"">Hapus</a></td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>