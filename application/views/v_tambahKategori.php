						<div class="row">
                        <div class="col-12">
                            <div class="card card-body">
                                <h4 class="card-title">Tambah Data Kategori</h4>
                                <hr>
								<?php
								/**
 * View untuk form penambahan (Create) data dan sekaligus pengubahan (Update) data
 * 
 */
// periksa apakah kita sedang dalam mode 'Update'
								if (!isset($update)) {
    $update = array('kd_kategori' => '', 'nama_kategori' => '');
} else {
    $update_flag = '<input type="hidden" name="updateKD" value="'.$update['kd_kategori'].'">';
}
?>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form method="post" action="<?php echo site_url('/c_tambahKategori/save') ?>">
											<div class="form-group">
                                                <label for="">Kode</label>
                                                <input type="text" name="kd_kategori" class="form-control" id="kd_kategori" value= "<?php echo $update['kd_kategori'] ?>" placeholder="Kode">
                                            </div>
											<div class="form-group">
                                                <label for="">Nama Kategori</label>
                                                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value= "<?php echo $update['nama_kategori'] ?>" placeholder="Kategori">
                                            </div>
                                            
											<?php if (isset($update_flag)) { 
													echo $update_flag; 
													} ?>
                                            <button type="submit" class="btn btn-success m-r-10">Simpan</button>
                                            <a class="btn btn-primary" href="c_Kategori" role="button">Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>