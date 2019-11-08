a	<!-- Intro section start -->
<section class="intro-section sp-pad spad" style="margin-top: 100px">
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-xl-4 intro-text">
				<h3><span class="sp-sub-title">Tentang</span></h3>
				<h3 class="sp-title"><?php echo $desawisata->nama ?></h3>
				<h5><?php echo $desawisata->kecamatan ?></h5>
				<h2><?php echo $desawisata->kabupaten ?></h2>
				<p><?php echo $desawisata->deskripsi ?></p>
			</div>
			<div class="col-xl-7 offset-xl-1">
				<figure class="intro-img mt-5 mt-xl-0">
					<img src="<?php echo base_url('uploads/desawisata/'.$desawisata->foto) ?>" alt="">
				</figure>
			</div>
		</div>
	</div>
</section>
	<!-- Intro section end -->