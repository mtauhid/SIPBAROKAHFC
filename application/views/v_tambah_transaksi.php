<div class="row">
                        <div class="col-lg-12">
                            <div class="page-breadcrumb">
                                <h4 class="page-title">Barang</h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">Library</li>
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
                                    <input type="text" class="form-control" id="nametext1" value="<?php echo $kd_trans; ?>" disabled style="width: 100px;">
                                    <h5 class="card-title"></h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th width="1%"><a class="btn btn-sm btn-primary" style="width: 120px" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button">Tambah Barang</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/gallery/chair.jpg" alt="iMac" width="80"></td>
                                                    <td>Rounded Chair</td>
                                                    <td>20</td>
                                                    <td class="font-500">$153</td>
                                                    <td width="1%"><a class="btn btn-xs btn-danger" style="width: 120px;" href="<?php echo site_url('c_transaksi/tambah_transaksi')?>" role="button">Tambah Data</a></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="font-500" align="right">Total Bayar</td>
                                                    <td class="font-500">$153</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <h5 class="card-title">Choose payment Option</h5>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="nav-item">
                                            <a href="#iprofile" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                                <span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Debit Card</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="nav-item">
                                            <a href="#ihome" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                                <span class="visible-xs"><i class="ti-user"></i></span> 
                                                <span class="hidden-xs">Paypal</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane" id="ihome">
                                            <br/> You can pay your money through paypal, for more info <a href="#">click here</a>
                                            <br>
                                            <br>
                                            <button class="btn btn-info"><i class="fab fa-cc-paypal"></i> Pay with Paypal</button>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="iprofile">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <form>
                                                        <div class="form-group input-group m-t-40">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fab fa-cc-visa"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Card Number" aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label>EXPIRATION DATE</label>
                                                                    <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required=""> </div>
                                                            </div>
                                                            <div class="col-xs-5 col-md-5 pull-right">
                                                                <div class="form-group">
                                                                    <label>CV CODE</label>
                                                                    <input type="text" class="form-control" name="CVC" placeholder="CVC" required=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>NAME OF CARD</label>
                                                                    <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"> </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-info">Make Payment</button>
                                                    </form>
                                                </div>
                                                <div class="col-md-4 ml-auto">
                                                    <h4 class="card-title m-t-30">General Info</h4>
                                                    <h2><i class="fab fa-cc-visa text-info"></i> <i class="fab fa-cc-mastercard text-danger"></i> <i class="fab fa-cc-discover text-success"></i> <i class="fab fa-cc-amex text-warning"></i></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>