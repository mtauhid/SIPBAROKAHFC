<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Hapus Data Kategori</span>
                    </h1>
                    </div>
                </div>
              </div>
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
              <div class='row'>
                <div class='col-sm-12'>
                  
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_tambahKategori/real_delete') ?>">
                                <p>Apakah anda yakin ingin menghapus kategori <strong><?php echo $delete['kd_kategori'] ?></strong></p>
                                <input type="hidden" name="kd_kategori" value="<?php echo $delete['kd_kategori'] ?>">
                                <a class="btn btn-primary" href="<?php echo site_url('c_Kategori/') ?>">Batal</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                              
                    </div>
                  
                </div>
              </div>
