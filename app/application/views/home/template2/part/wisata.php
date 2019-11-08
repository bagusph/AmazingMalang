<section class="exibition-area section-gap" id="exhibitions">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Wisata</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-exibition-carusel">
							<?php foreach ($objekwisata as $key => $value): ?>
								<div class="single-exibition item">
								<img src="<?php echo base_url('uploads/wisata/'.$value->foto) ?>" alt="" style="max-width: 100%;min-width:100%;max-height: 250px; min-height: 250px">
								<ul class="tags">
									<li><a href="#">Wisata</a></li>
									<li><a href="#"><?php echo $value->nama_kategori ?></a></li>
								</ul>
								<a href="#"><h4><?php echo $value->nama ?></h4></a>
								<p>
									<?php echo substr($value->keterangan, 0,50) ?>
								</p>
								<h6 class="date"><?php echo $value->jamkunjung ?></h6>
							</div>
							<?php endforeach ?>
							<?php foreach ($penginapan as $key => $value): ?>
								<div class="single-exibition item">
								<img src="<?php echo base_url('uploads/penginapan/'.$value->foto) ?>" alt="" style="max-width: 100%;min-width:100%;max-height: 250px; min-height: 250px">
								<ul class="tags">
									<li><a href="#">Penginapan</a></li>
								</ul>
								<a href="<?php echo base_url('Home/penginapandetail/'.$this->uri->segment(3)."/".$value->id) ?>"><h4><?php echo $value->nama ?></h4></a>
								<p>
									<?php echo substr($value->keterangan, 0,50) ?>
								</p>
								<h6 class="date"><?php echo $value->alamat ?></h6>
							</div>
							<?php endforeach ?>
							<?php foreach ($toko as $key => $value): ?>
								<div class="single-exibition item">
								<img src="<?php echo base_url('uploads/toko/'.$value->foto) ?>" alt="" style="max-width: 100%;min-width:100%;max-height: 250px; min-height: 250px">
								<ul class="tags">
									<li><a href="#">Toko</a></li>
									<li><a href="#"><?php echo $value->jenis ?></a></li>
								</ul>
								<a href="<?php echo base_url('Home/tokodetail/'.$this->uri->segment(3)."/".$value->id) ?>"><h4><?php echo $value->nama ?></h4></a>
								<p>
									<?php echo substr($value->keterangan, 0,50) ?>
								</p>
								<h6 class="date"><?php echo $value->alamat ?></h6>
							</div>
							<?php endforeach ?>
						</div>													
					</div>
				</div>	
			</section>