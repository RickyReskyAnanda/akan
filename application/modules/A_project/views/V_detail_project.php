<span ng-controller="detailprojectctrl">
    <!-- Modal Menambahkan User START -->
    <div class="modal inmodal" id="myModalJurnal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">  
        <div class="modal-content animated bounceIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-bars modal-icon"></i> 
                    <h4 class="modal-title">Tambah Jurnal Umum</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group" ng-hide="tampilform"><label class="col-lg-4 control-label">Alamat</label>
                            <div class="col-lg-8"><textarea class="form-control" ng-model="isijurnal.alamat" placeholder="alamat.."></textarea></div>
                        </div>
                        <div class="form-group" ng-hide="tampilform"><label class="col-lg-4 control-label">Nama Suplier</label>
                        <div class="col-lg-8"><input type="text" ng-model="isijurnal.nama_suplier" placeholder="Nama Suplier.." class="form-control"></div>
                        </div>
                        <div class="form-group" ng-hide="tampilform"><label class="col-lg-4 control-label">Alamat</label>
                            <div class="col-lg-8"><textarea class="form-control" ng-model="isijurnal.alamat" placeholder="alamat.."></textarea></div>
                        </div>
                        <div class="form-group" ng-hide="tampilform"><label class="col-lg-4 control-label">No Telpon</label>
                            <div class="col-lg-8"><input type="text" ng-model="isijurnal.no_telp" placeholder="Nomor Telpon.." class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Tanggal</label>
                            <div class="col-lg-3">
                                <select class="form-control m-b" name="account">
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control m-b" name="account">
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Des</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select class="form-control m-b" name="account">
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">No Nota</label>
                            <div class="col-lg-5"><input type="text" ng-model="isijurnal.no_nota" placeholder="Nomor Nota" class="form-control"></div>
                            <div class="col-lg-3"><input type="text" placeholder="10DES2016" class="form-control" disabled></div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Uraian</label>
                            <div class="col-lg-8"><textarea class="form-control" rows="3" ng-model="isijurnal.uraian" placeholder="Detail atau Uraian.."></textarea></div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Vol.</label>
                            <div class="col-lg-8"><input type="text" ng-model="isijurnal.volume" placeholder="Volume.." class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Sat.</label>
                            <div class="col-lg-8"><input type="text" class="form-control" ng-model="isijurnal.satuan" placeholder="Satuan.."></div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Harga Satuan</label>
                            <div class="col-lg-8"><div class="input-group"><span class="input-group-addon">Rp.</span> 
                            <input type="text" ng-model="isijurnal.harga_satuan" class="form-control" placeholder="000000"> <span class="input-group-addon">.00</span></div></div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" ng-click="tambahdatajurnal()" data-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Menambahkan User END -->
    <!-- Modal Menambahkan User START -->
    <div class="modal inmodal" id="myModalKode" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">  
        <div class="modal-content animated bounceIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-book modal-icon"></i> 
                    <h4 class="modal-title">{{judulmodal}} Buku Besar</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group"><label class="col-lg-4 control-label">Nama Buku Besar</label>
                            <div class="col-lg-8"><input type="text" placeholder="Masukkan Nama Buku Besar" class="form-control" ng-model="isikode.nama_buku_besar"></div>
                        </div>
                        <div class="form-group" ng-show="showpembayaran"><label class="col-lg-4 control-label">Jenis</label>
                         <div class="col-lg-8">
                            <div>
                                <label class="checkbox-inline"><input type="radio" checked="" value="debit" name="optionsRadios" ng-model="isikode.pembayaran"> Debit</label>
                                <label class="checkbox-inline"><input type="radio" value="kredit" name="optionsRadios" ng-model="isikode.pembayaran"> Kredit</label>
                            </div></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" ng-click="simpankode()" data-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Menambahkan User END -->
    <!-- Modal Edit Project start -->
        <div class="modal inmodal" id="editProject" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content animated bounceIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon"></i>
                    <h4 class="modal-title">Edit {{judulmodal}} Project</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group"><label class="col-lg-4 control-label">Nama Project</label>
                            <div class="col-lg-8"><input type="text" ng-model="project.nama_project" placeholder="Nama Project ..." class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Pemilik</label>
                            <div class="col-lg-8"><input type="text" ng-model="project.pemilik" placeholder="Pemilik ..." class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Lokasi</label>
                            <div class="col-lg-8"><textarea class="form-control" ng-model="project.lokasi" placeholder="Isi Lokasi"></textarea> 
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-4 control-label">Tahun</label>
                            <div class="col-lg-8"><input type="text" ng-model="project.tahun" placeholder="Tahun ..."  class="form-control"> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" ng-click="tambahdata()">Simpan</button>
                </div>
            </div>
            </div>
        </div>
    <!-- Modal Edit Project End -->

    <div id="toast-container" class="toast-top-right" aria-live="polite" role="alert" ng-show="tampilkantoast">
        <div class="toast {{properties.warna}}" style="opacity: 0.896272;">
            <div class="toast-progress" style="width: 100%;"></div>
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-title">{{properties.judul}}</div>
            <div class="toast-message">{{properties.isi}}</div>
        </div>
    </div>


    <!-- content start -->
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Projects</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="basic.html">Projects</a>
                    </li>
                    <li class="active">
                        <strong>Detail Project</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
        <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a class="btn btn-warning btn-sm pull-right" type="button" data-toggle="modal" data-target="#editProject"><i class="fa fa-edit"></i> | Edit Project</a>
                                        <h2>Gedung A Saintek</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:20px;">
                                <div class="col-lg-4">
                                    <dl class="dl-vertical">
                                        <dt class="badge badge-info"><i class="fa fa-user"></i> Pemilik Project </dt>
                                        <dd style="margin: 5px 18px;">{{detailproject.nama_project}}</dd><hr>
                                        <dt class="badge badge-info"><i class="fa fa-map-marker"></i> Lokasi </dt>
                                        <dd style="margin: 5px 18px;">{{detailproject.lokasi}}</dd><hr>
                                        <dt class="badge badge-info"><i class="fa fa-calendar"></i> Status </dt>
                                        <dd style="margin: 5px 18px;">{{detailproject.status}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <ul class="stat-list">
                                        <li>
                                            <p>Saldo</p>
                                            <h2 class="no-margins">{{detailproject.modal_masuk | currency:"Rp."}}</h2>
                                            <div class="progress progress-mini">
                                                <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                    </ul>
                                </div>
                                <div class="col-md-5"></div>
                                <div class="col-md-8">
                                    <ul class="stat-list">
                                        <li class="col-md-4">
                                            <p>Modal (Credit)</p>
                                            <h3 class="no-margins betul" >Rp. 46.000.000</h3>
                                            <div class="progress progress-mini">
                                                <div class="progress-bar" style="width: 100%;"></div>
                                            </div>
                                        </li>
                                        <li class="col-md-4">
                                            <p>Penjualan (Credit)</p>
                                            <h3 class="no-margins betul" >Rp. 46.000.000</h3>
                                            <div class="progress progress-mini">
                                                <div class="progress-bar" style="width: 100%;"></div>
                                            </div>
                                        </li>
                                        <li class="col-md-4">
                                            <p>Pembelian (Credit)</p>
                                            <h3 class="no-margins betul" >Rp. 46.000.000</h3>
                                            <div class="progress progress-mini">
                                                <div class="progress-bar" style="width: 100%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="{{aktif1}}" ng-click="tabBerganti(1)"><a href="">Jurnal Umum</a></li>
                            <li class="{{aktif2}}" ng-click="tabBerganti(2)"><a href=""> Buku Besar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane {{aktif1}}">
                                <div class="panel-body" ng-show="tabulasi">
                                    
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <table class="table table-bordered table-responsive">
                                            <thead>         
                                            <tr>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;" >Tanggal</th>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;">No Nota</th>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;">Kode</th>
                                                <th colspan="4" style="text-align: center;font-size: 13px;">Deskripsi</th>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;">Debit</th>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;">Kredit</th>
                                                <th rowspan="2" style="padding-top:25px; text-align: center; font-size: 13px;">Saldo</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; font-size: 13px;">Uraian</th>
                                                <th style="text-align: center; font-size: 13px;">Vol.</th>
                                                <th style="text-align: center; font-size: 13px;">Sat.</th>
                                                <th style="text-align: center; font-size: 13px;">Harga Satuan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="jurnalumum in jurnalumumText">
                                                <td style="font-size: 13px;">{{jurnalumum.tanggal | date:'dd MMMM yyyy'}}</td>
                                                <td style="font-size: 13px;">1</td>
                                                <td style="font-size: 13px;">A2347</td>
                                                <td style="font-size: 13px;">{{jurnalumum.uraian}}</td>
                                                <td style="font-size: 13px;">{{jurnalumum.volume}} </td>
                                                <td style="font-size: 13px;">{{jurnalumum.satuan}}</td>
                                                <td style="font-size: 13px;">{{jurnalumum.harga_satuan | currency:"Rp."}}</td>
                                                <td style="font-size: 13px;">{{jurnalumum.total | currency:"Rp."}}</td>
                                                <td style="font-size: 13px;">
                                                    <button class="btn btn-danger" type="button" ng-click="hapusdatajurnal(jurnalumum.id_jurnal_umum,$index)">
                                                        <i class="fa fa-trash"></i> | Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane {{aktif2}}">
                                <div class="panel-body" ng-hide="tabulasi">
                                    
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active" ng-click="tabbukubesar('0','modal','Modal','debit')"><a data-toggle="tab" href="" aria-expanded="true">Modal</a></li>
                                                    <li ng-click="tabbukubesar('0','penjualan','Penjualan','debit')"><a data-toggle="tab" href="" aria-expanded="false"> Penjualan</a></li>
                                                    <li ng-click="tabbukubesar('0','pembelian','Pembelian','kredit')"><a data-toggle="tab" href="" aria-expanded="false"> Pembelian</a></li>
                                                    <li ng-click="tabbukubesar(0,'hutang','Hutang','debit')"><a data-toggle="tab" href="" aria-expanded="false"> Hutang</a></li>
                                                    <li ng-repeat="tabu in kode" ng-click="tabbukubesar(tabu.id_buku_besar,'lainnya',tabu.nama_buku_besar,tabu.pembayaran)">
                                                        <a data-toggle="tab" href="" aria-expanded="false">
                                                            {{tabu.nama_buku_besar}}
                                                        </a>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#myModalKode" ng-click="viewtambahkode()"><a href=""> <i class="fa fa-plus-square"></i></a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                        <div class="panel-body">
                                                        <div class="table responsive">
                                                        <div class="ibox-tools pull-left" >
                                                        <button class="btn btn-primary dim" ng-click="viewtambahbuku()" data-toggle="modal" data-target="#myModalJurnal" type="button" >
                                                            <i class="fa fa-book"></i> | Tambah Jurnal Umum
                                                        </button>
                                                        <button class="btn btn-success dim"  type="button" >
                                                            <i class="fa fa-print"></i> | Cetak
                                                        </button>
                                                        
                                                        <button class="btn btn-danger dim " data-toggle="dropdown"  type="button" ng-show="tombolhapus">
                                                            <i class="fa fa-wrench"></i> | Setting
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-user">
                                                            <li><a href=""  data-toggle="modal" data-target="#myModalKode" ng-click="vieweditkode()"><i class="fa fa-wrench"></i> Ubah Kode</a>
                                                            </li>
                                                            <li><a href="" ng-click="hapuskode()"><i class="fa fa-trash"></i> Hapus Kode</a>
                                                            </li>
                                                        </ul>
                                                        </div>
                                                        <table class="table table-bordered">
                                                            <thead>         
                                                                <tr>
                                                                    <th style="text-align: center; font-size: 13px;" >Kode</th>
                                                                    <th style="text-align: center; font-size: 13px;" >Uraian</th>
                                                                    <th style="text-align: center; font-size: 13px;" >Debit</th>
                                                                    <th style="text-align: center; font-size: 13px;" >Kredit</th>
                                                                    <th style="text-align: center; font-size: 13px;">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat="bukubesar in projectText">
                                                                    <td style="padding-top: 15px;font-size: 13px;">{{view.jenis}}</td>
                                                                    <td style="padding-top: 15px;font-size: 13px;">{{bukubesar.nama_buku_besar}}</td>
                                                                    <td style="padding-top: 15px;font-size: 13px;">
                                                                        <span ng-if="bukubesar.pembayaran=='debit'">{{bukubesar.nominal | currency:"Rp."}}</span>
                                                                    </td>
                                                                    <td style="padding-top: 15px;font-size: 13px;">
                                                                        <span ng-if="bukubesar.pembayaran=='kredit'">{{bukubesar.nominal | currency:"Rp."}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#myModalBuku" ng-click="vieweditbuku(bukubesar,bukubesar.jenis)">
                                                                            <i class="fa fa-user"></i> | Edit
                                                                        </button>
                                                                        <button class="btn btn-sm btn-danger" type="button" ng-click="hapussubbuku(bukubesar,$index)">
                                                                            <i class="fa fa-trash"></i> | Hapus
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2" style="padding-top: 15px;font-size: 13px;">Total</th>
                                                                    <th style="padding-top: 15px;font-size: 13px;">{{totalbuku.debit | currency:"Rp."}}</th>
                                                                    <th style="padding-top: 15px;font-size: 13px;">{{totalbuku.kredit | currency:"Rp."}}</th>
                                                                    <th style="padding-top: 15px;font-size: 13px;"></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </span>
        <!-- content end -->
