



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
                "title" : "Telp",
                "data": "telp" 
            },
            { 
                "title" : "Email",
                "data": "email" 
            },
            { 
                "title" : "Username",
                "data": "username" 
            },
            { 
                "title" : "Status",
                "data": (data, type, row) => {
                    let ret = "";
                    switch(data.status){
                        case '1':
                        ret += '<span class="badge badge-pill badge-primary">Active</span>';
                        break;
                        case '2':
                        ret += '<span class="badge badge-pill badge-danger">Inactive</span>';
                        break;
                    }
                    return ret;
                },
            },
            { 
                "title" : "Level",
                "data": (data, type, row) => {
                    let ret = "";
                    switch(data.fk_level){
                        case '1':
                        ret += '<span class="badge badge-pill badge-dark">Super Admin</span>';
                        break;
                        case '2':
                        ret += '<span class="badge badge-pill badge-primary">Admin</span>';
                        break;
                        case '3':
                        ret += '<span class="badge badge-pill badge-success">Super Admin</span>';
                        break;
                        case '4':
                        ret += '<span class="badge badge-pill badge-info">Admin Desawisata</span>';
                        break;
                        case '5':
                        ret += '<span class="badge badge-pill badge-warning">Operator Kamar : '+data.fk_penginapan+'</span>';
                        break;
                    }
                    return ret;
                },
            },
            { 
                "title" : "Desa Wisata",
                "data": (data, type, row) => {
                    let ret = "";
                    ret += '<span class="badge badge-info">'+data.nama_desawisata+'</span>';
                    return ret;
                }
            },
            {
                "title": "Actions",
                "width" : "120px",
                "visible":true,
                "class": "text-center",
                "data": (data, type, row) => {
                    let ret = "";
                    ret += ' <a href="#" onclick="info_form('+data.id+'); return false;" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-info-circle"></i> Lihat</a>';
                    var level = "<?php echo $this->session->userdata('logged_in')['fk_level'] ?>";
                    if (data.fk_level != level) {
                        ret += ' <a href="#" onclick="update_form('+data.id+'); return false;" class="btn btn-xs btn-rounded btn-success"> <i class="fa fa-pencil"></i> Edit</a>';
                        ret += ' <a href="#" onclick="delete_form('+data.id+')" class="btn btn-xs btn-rounded btn-danger"> <i class="fa fa-trash"></i> Hapus</a>';
                    }
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
