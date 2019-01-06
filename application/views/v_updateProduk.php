
<div class="row">
                        <div class="col-12">
                            <div class="card card-body">
                                <h4 class="card-title">Tambah Data Produk</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <?php foreach($tb_produk as $u){ ?>
                                        <form method="post" action="<?php echo base_url('/c_updateProduk/update') ?>">
                                            <div class="form-group">
                                                <label for="">Nama Produk</label>
                                                <input type="text" name="nmproduk" class="form-control" id="" value="<?php echo ->nm_produk ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="custom-select col-12" name="kategoriproduk" id="">
                                                    <option selected disabled>Pilih Kategori Produk</option>
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Minuman">Minuman</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga" value="" placeholder="Harga">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan Produk</label>
                                                <textarea class="form-control" name="keterangan" rows="5"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success m-r-10">Simpan</button>
                                            <button type="submit" class="btn btn-dark">Batal</button>
                                        </form>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                