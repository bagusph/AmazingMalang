<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="map-wrap" style="width:100%; height: 445px;" id="map" data-lat="<?php echo $desawisata->_lat ?>" data-long="<?php echo $desawisata->_long ?>"></div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5><?php echo $desawisata->desa ?>, <?php echo $desawisata->kabupaten ?></h5>
						<p><?php echo $desawisata->alamat ?></p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5><?php echo $config_page->telp ?></h5>
						<p>Call Sms or Wa</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5><?php echo $config_page->email ?></h5>
						<p>Kirim Email</p>
					</div>
				</div>														
			</div>
			<div class="col-lg-8">
				<form class="form-area " id="myForm" action="" method="post" class="contact-form text-right">
					<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="nama" placeholder="Masukan Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
							
							<input name="email" placeholder="Masukan Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="telp" placeholder="Masukan Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
							<div class="mt-20 alert-msg" style="text-align: left;"></div>
						</div>
						<div class="col-lg-6 form-group">
							<select name="rating" class="form-control mb-3">
								<option value="5">Sangat Baik</option>
								<option value="4">Baik</option>
								<option value="3" selected="">Biasa</option>
								<option value="2">Buruk</option>
								<option value="1">Sangat Buruk</option>
							</select>
							<textarea class="common-textarea form-control" name="keterangan" placeholder="Keterangan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20 text-white" style="float: right;">Kirim Review</button>
							
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>	
</section>