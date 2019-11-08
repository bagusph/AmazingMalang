<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Total</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $pengunjung_total ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Last Year</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $pengunjung_tahun ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Pengunjung</h4>
                            <p>Last Month</p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2><?php echo $pengunjung_bulan ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sales report area end -->
    <!-- overview area start -->
    <div class="row">
        <!-- <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Overview</h4>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div id="verview-shart"></div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Domisili</h4>
                    <div id="coin_distribution" 
                    data-lokal="<?php echo $domisili['lokal'] ?>" 
                    data-regional="<?php echo $domisili['regional'] ?>" 
                    data-internasional="<?php echo $domisili['internasional'] ?>"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Umur</h4>
                    <div id="donut-usia" 
                    data-anak="<?php echo $umur['anak'] ?>" 
                    data-remaja="<?php echo $umur['remaja'] ?>" 
                    data-dewasa="<?php echo $umur['dewasa'] ?>"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 coin-distribution">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title mb-0">Menurut Jenis Kelamin</h4>
                    <div id="donut-jeniskelamin" 
                    data-l="<?php echo $jeniskelamin['l'] ?>" 
                    data-p="<?php echo $jeniskelamin['p'] ?>" 
                    ></div>
                </div>
            </div>
        </div>
        
    </div>
    <br>
    <br>
    <!-- row area start -->
    <div class="row">

        <!-- Live Crypto Price area end -->
        <!-- trading history area start -->
        <div class="col-lg-12 mt-sm-30 mt-xs-30">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4 class="header-title">Trading History</h4>
                        <div class="trd-history-tabs">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#buy_order" role="tab">In Year</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sell_order" role="tab">Lifetiem</a>
                                </li>
                            </ul>
                        </div>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div class="trad-history mt-4">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tr class="heading-td">
                                            <td>Desawisata</td>
                                            <td>Desa</td>
                                            <td>Kecamatan</td>
                                            <td>Kabupaten</td>
                                            <td>in days</td>
                                            <td>in month</td>
                                            <td>in year</td>
                                            <?php if (onlyLevel('1') || onlyLevel('2') || onlyLevel('3')): ?>
                                            <td>Aksi</td>
                                            <?php endif ?>
                                        </tr>

                                        <?php 
                                        
                                        ?>
                                        <?php foreach ($desawisata_tabel as $value): ?>

                                            <tr>
                                                <td><?php echo $value->nama ?></td>
                                                <td><?php echo $value->desa ?></td>
                                                <td><?php echo $value->kecamatan ?></td>
                                                <td><?php echo $value->kabupaten ?></td>
                                                <td><?php echo $value->in_day ?></td>
                                                <td><?php echo $value->in_month ?></td>
                                                <td><?php echo $value->in_year ?></td>

                                            <?php if (onlyLevel('1') || onlyLevel('2') || onlyLevel('3')): ?>
                                                <td><a href="<?php echo base_url('Admin/Dashboard/index/'.$value->id) ?>" class="btn btn-sm btn-success">Detail</a></td>
                                                <?php endif ?>
                                            </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tr class="heading-td">
                                            <td>Trading ID</td>
                                            <td>Time</td>
                                            <td>Status</td>
                                            <td>Amount</td>
                                            <td>Last Trade</td>
                                        </tr>
                                        <tr>
                                            <td>8964978</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$445.90</td>
                                            <td>$094545.090</td>
                                        </tr>
                                        <tr>
                                            <td>89675978</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$78.90</td>
                                            <td>$074852945.090</td>
                                        </tr>
                                        <tr>
                                            <td>78527878</td>
                                            <td>4.00 AM</td>
                                            <td>Pending</td>
                                            <td>$0768.90</td>
                                            <td>$65465.090</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trading history area end -->
    </div>
</div>