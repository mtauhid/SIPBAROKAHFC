<div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Barang</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo site_url('.')?>">Dashboard</a>
                                            <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                                            <li class="breadcrumb-item" active>Tambah barang yang dibeli</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <input type="text" class="form-control" id="nametext1" name="kd_trans" value="<?php echo $kd_trans ?>" readonly style="width: 100px;">

                                    <h5 class="card-title"></h5>
                                    <div class="table-responsive">
                                        <form method="post" action="<?php echo site_url('/c_Transaksi/tambah_ke_cart') ?>">
                                            <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" id="nametext1" name="kd_trans" value="<?php echo $kd_trans; ?>" style="width: 100px;" hidden >
                                                        <select class="form-control" name="kd_produk" id="exampleFormControlSelect1" required>
                                                            <option selected disabled>PILIH ITEM PRODUK</option>
                                                            <?php
                                                            if(isset($data_produk)){
                                                                foreach($data_produk as $row){
                                                                    ?>
                                                                    <option value="<?php echo $row->kd_produk?>"><?php echo $row->nm_produk?></option>
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td width="1">
                                                        <input type="text" class="form-control" name="qty" value="" style="width: 80px;" placeholder="JUMLAH" required>
                                                    </td>
                                                    <td width="1">
                                                        <button type="submit" class="btn waves-effect waves-light btn-info">Tambah Barang</button>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </form>
                                        
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <th width="13%">Kode Produk</th>
                                                    <th>Nama Produk</th>
                                                    <th width="1%">Qty</th>
                                                    <th width="1%">Harga</th>
                                                    <th width="110px" style="tex">Hapus item</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                if(isset($data_cart)){
                                                    foreach($data_cart as $row){
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $no++;?></td>
                                                    <td style="text-align: center;"><?php echo $row->kd_produk ?></td>
                                                    <td><?php echo $row->nm_produk ?></td>
                                                    <td style="text-align: center;"><?php echo $row->qty ?></td>
                                                    <td style="text-align: center;"><?php echo $row->total_harga_peritem ?></td>
                                                    <td align="center">
                                                        <a class="btn btn-xs waves-effect waves-light btn-outline-danger" style="width: 100px;" href="<?php echo site_url('c_Transaksi/hapus_produkdibeli/'.$row->id_produkdibeli);?>" role="button">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <tr>
                                                    <?php
                                                    foreach($data_cart as $tot);
                                                    ?>
                                                    <td colspan="5" class="font-500" align="right">Total Bayar</td>
                                                    <td class="font-500">Rp. <?php echo $tot->total_harga_peritem?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form method="post" action="<?php echo site_url('/c_Transaksi/selesai_pesan') ?>">
                                            <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2" rowspan="2">
                                                        <textarea name="keterangan" placeholder="Tambahkan keterangan" style="width: 100%" class="form-control" rows="4"></textarea>

                                                        <input type="text" class="form-control" id="nametext1" name="kd_trans" value="<?php echo $kd_trans; ?>" style="width: 100px;" hidden>

                                                        <input type="text" class="form-control" id="nametext1" name="fix" value="1" style="width: 100px;" hidden>

                                                        <input id="tanggal_transaksi" type="hidden" name="tanggal_penjualan" data-date-format="dd-mm-yyyy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nametext1" name="nm_pelanggan" placeholder="Tambahkan pelanggan" style="width: 200px;" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" id="nametext1" name="bayar_dulu" placeholder="Bayar Dulu" style="width: 200px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="1">
                                                        <button type="button" class="btn waves-effect btn-warning">Batal</button>
                                                    </td>
                                                    <td width="">
                                                        
                                                    </td>
                                                    <td width="1">
                                                        
                                                        <button type="submit" class="btn waves-effect waves-light btn-success" style="width: 100%" >Selesai</button>
                                                        
                                                </tr>
                                            </tbody>
                                        </table>
                                        </form>
                                        
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>