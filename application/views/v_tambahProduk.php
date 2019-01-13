<div class="row">
                        <div class="col-12">
                            <div class="card card-body">
                                <h4 class="card-title">Tambah Data Produk</h4>
                                <hr>
								<?php
								if (!isset($update)) {
                                    $update = array('kd_produk' => '', 'nm_produk' => '', 'kd_kategori' => '', 'harga' => '', 'keterangan' => '');
                                } else {
                                    $update_flag = '<input type="hidden" name="updateKD" value="'.$update['kd_produk'].'">';
                                }
                                ?>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form method="post" action="<?php echo site_url('/c_tambahProduk/save') ?>">
											<div class="form-group">
                                                <label for="">Kode</label>
                                                <input type="text" name="kd_produk" class="form-control" id="kd_produk" value= "<?php echo $update['kd_produk'] ?>" placeholder="Kode">
                                            </div>
											<div class="form-group">
                                                <label for="">Nama Produk</label>
<<<<<<< HEAD
                                                <input type="text" name="nmproduk" class="form-control" id="" placeholder="Nama Produk" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="custom-select col-12" name="kategoriproduk" id="" required="">
=======
                                                <input type="text" name="nm_produk" class="form-control" id="nm_produk" value= "<?php echo $update['nm_produk'] ?>" placeholder="Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="custom-select col-12" name="kategoriproduk" id="kategoriproduk">
>>>>>>> 03159b0bcd3b0444e8d587e77657b6efe4063bc8
                                                    <option selected disabled>Pilih Kategori Produk</option>
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Minuman">Minuman</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
<<<<<<< HEAD
                                                <input type="text" class="form-control" name="harga" value="" placeholder="Harga" required="">
=======
                                                <input type="text" class="form-control" name="harga" id = "harga" value="<?php echo $update['harga'] ?>" placeholder="Harga">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan Produk</label>
                                                <textarea class="form-control" name="keterangan" rows="5"></textarea>
>>>>>>> 03159b0bcd3b0444e8d587e77657b6efe4063bc8
                                            </div>
                                            <button type="submit" class="btn btn-success m-r-10">Simpan</button>
                                            <a class="btn btn-primary" href="c_Produk" role="button">Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>