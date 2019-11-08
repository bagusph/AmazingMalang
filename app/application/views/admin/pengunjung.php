



<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
	<div class="card">
		<div class="card-body">
			<h4 class="header-title mb-3">
				Data <?php echo $c_name ?> 

				<button type="button" class="btn btn-sm btn-primary btn-flat float-right mb-3" onclick="input_form();"><i class="fa fa-plus"></i> Tambah Data</button>
			</h4>

			<table class="table">
				<tr>
					<td>#</td>
					<td>Lokal</td>
					<td>Regional</td>
					<td>Internasinal</td>
				</tr>
				<tr>
					<td>Anak - anak</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(1,1,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(1,1,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(2,1,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(2,1,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(3,1,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(3,1,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Remaja</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(1,2,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(1,2,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(2,2,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(2,2,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(3,2,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(3,2,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>Remaja</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(1,3,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(1,3,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(2,3,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(2,3,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
					<td>
						<div class="btn-group p-3">
							<button onclick="insert(3,3,1)" class="btn btn-primary">Laki - Laki</button>
							<button onclick="insert(3,3,2)" class="btn btn-danger">Perempuan</button>
						</div>
					</td>
				</tr>
				
			</table>
		</div>
	</div>
</div>
<script>

	function insert(domisili,umur,jeniskelamin) {

				$('button').attr('disabled',true);
		$.ajax({
			url: "<?php echo base_url('Admin/Pengunjung/insert/') ?>"+domisili+"/"+umur+"/"+jeniskelamin,
			data: null,
			success: function(data)
			{
				setInterval(function(){
					$('button').attr('disabled',false);
				}, 400);

			}
		});
	}
</script>