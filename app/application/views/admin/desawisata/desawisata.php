



<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">
                Data <?php echo $c_name ?> 

                <button type="button" class="btn btn-sm btn-primary btn-flat float-right mb-3" onclick="input_form();"><i class="fa fa-plus"></i> Tambah Data</button>
            </h4>

            <div class="data-tables datatable-dark table-responsive">
                <table id="product-table" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%"></table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg" id="modal-content">

    </div>
</div>
<script>
    $(document).ready(() => {
        $('#product-table').DataTable( {
            "ajax": {
                'url': "<?= base_url('Admin/'.$c_name.'/getdata') ?>",
            },
            "columns": [
            {
                "title" : "No",
                "width" : "15px",
                "data": null,
                "visible":true,
                "class": "text-center",
                render: (data, type, row, meta) => {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { 
                "title" : "Nama",
                "data": "nama" 
            },
            { 
                "title" : "Alamat",
                "data": "alamat",
                render: (data,type,row) => {
                    isLong = "";
                    if (data.length > 30) {
                        isLong = "...";
                    }
                    return data.substr(0,30)+isLong;
                }
            },
            { 
                "title" : "Desa",
                "data": "desa",
            },
            { 
                "title" : "Kecamatan",
                "data": "kecamatan",
            },
            { 
                "title" : "Kabupaten",
                "data": "kabupaten",
            },
            { 
                "title" : "Deskripsi",
                "data": "deskripsi",
                render: (data,type,row) => {
                    return data.substr(0,30)+"...";
                } 
            },
            { 
                "title" : "Lattitude",
                "data": "_lat" 
            },
            { 
                "title" : "Longtitude",
                "data": "_long" 
            },
            {
                "title": "Actions",
                "width" : "120px",
                "data":'id',
                "visible":true,
                "class": "text-center",
                render: (data, type, row) => {
                    let ret = "";
                    ret += ' <a href="#" onclick="info_form('+data+'); return false;" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-info-circle"></i> Lihat</a>';
                    ret += ' <a href="<?php echo base_url('Admin/Configpage/index/') ?>'+data+'" class="btn btn-xs btn-rounded btn-warning"> <i class="fa fa-cog"></i> Config</a>';
                    ret += ' <a href="#" onclick="update_form('+data+'); return false;" class="btn btn-xs btn-rounded btn-success"> <i class="fa fa-pencil"></i> Edit</a>';
                    ret += ' <a href="#" onclick="delete_form('+data+')" class="btn btn-xs btn-rounded btn-danger"> <i class="fa fa-trash"></i> Hapus</a>';
                    return ret;
                }
            }
            ]
        } );
    });

    function reload_table() {
        $('#product-table').DataTable().ajax.reload(null,false);
    }

    function info_form(id) {
        $('#modal').modal('show');

        $.ajax({
            url: "<?php echo base_url('Admin/'.$c_name.'/info/') ?>"+id,
            data: null,
            success: function(data)
            {
                $('#modal-content').html(data);
            }
        });
    }

    function input_form() {
        $('#modal').modal('show');
        $.ajax({
            url: "<?php echo base_url('Admin/'.$c_name.'/insert') ?>",
            data: null,
            success: function(data)
            {
                $('#modal-content').html(data);
            }
        });
    }
    function update_form(id) {
        $('#modal').modal('show');
        $.ajax({
            url: "<?php echo base_url('Admin/'.$c_name.'/update/') ?>"+id,
            data: null,
            success: function(data)
            {
                $('#modal-content').html(data);
            }
        });
    }
    function delete_form(id) {
        swal({
          title: "Apakah anda yakin?",
          text: "Setelah anda menghapus, data ini tidak dapat kembali",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "<?php echo base_url('Admin/'.$c_name.'/delete/') ?>"+id,
                data: null,
                success: function(data)
                {
                    if (data == "error1451") {
                        swal("Delete Gagal", "Foreign Key error", "error");
                    }else{
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    }
                    reload_table();
                }
            });
            
        } else {
            swal("Data aman", {
                icon: "info",
            });
        }
    });


    }
</script>
