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
                                                <input type="text" name="kode" class="form-control" id="" placeholder="Kode">
                                            </div>
											<div class="form-group">
                                                <label for="">Nama Kategori</label>
                                                <input type="text" name="kategori" class="form-control" id="" placeholder="Kategori">
                                            </div>
                                            
											<?php if (isset($update_flag)) { 
													echo $update_flag; 
													} ?>
                                            <button type="submit" class="btn btn-success m-r-10">Simpan</button>
                                            <button type="submit" class="btn btn-dark">Batal</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>