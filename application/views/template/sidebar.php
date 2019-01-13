            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <?php
                            if($this->session->userdata('level')=="Admin"){
                            ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Dashboard');?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('c_transaksi');?>" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Transaksi</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo site_url('c_Produk');?>" aria-expanded="false"><i class="mdi mdi-cards-variant"></i><span class="hide-menu">Produk</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('c_Kategori');?>" aria-expanded="false"><i class="mdi mdi-view-list"></i><span class="hide-menu">Kategori Produk</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="?>javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Laporan</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_Laps');?>" class="sidebar-link"><i class="mdi mdi-camera-burst"></i> <span class="hide-menu">Product Details</span></a></li>
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_LapOrders');?>" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Product Orders</span></a></li>
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_LaporanTransaksi');?>" class="sidebar-link"><i class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Products Checkout</span></a></li>
                                </ul>
                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo site_url('#');?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
								
                                
                            </li>
                            <?php
                            }else if($this->session->userdata('level')=="Kasir"){
                            ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Dashboard');?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('c_transaksi');?>" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Transaksi</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="?>javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Laporan</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_Laps');?>" class="sidebar-link"><i class="mdi mdi-camera-burst"></i> <span class="hide-menu">Product Details</span></a></li>
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_LapOrders');?>" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Product Orders</span></a></li>
                                    <li class="sidebar-item"><a href="<?php echo site_url('c_LaporanTransaksi');?>" class="sidebar-link"><i class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Products Checkout</span></a></li>
                                </ul>
                            </li>
                                </ul>
                            </li>
                        <?php }?>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->