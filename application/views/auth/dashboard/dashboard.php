<div class="row" style="padding-left: 20px; padding-right: 20px;">
	<ul class="collapsible">
		<li class="active">
			<div class="collapsible-header"><h4><i class="material-icons">local_laundry_service</i>Laundry</h4></div>
			<div class="collapsible-body">
				<div class="row">
					<a href="<?= base_url('dashboard/laundry_masuk'); ?>" class="col s12 m6 l3 card bg-biru waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">shopping_cart</i>
							</div>
							<div class="col s5 m5 right-align">
								<p class="flow-text">
									<strong><?= $jml_laundry; ?></strong>
								</p>
								<p>Cucian</p>
							</div>
						</div>
					</a>
					<a href="<?= base_url('dashboard/member'); ?>" class="col s12 m6 l3 card bg-merah waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">account_box</i>
							</div>
							<div class="col s5 m5 right-align">
								<p class="flow-text">
									<strong><?= $jml_user; ?></strong>
								</p>
								<p>User</p>
							</div>
						</div>
					</a>
					<a class="col s12 m6 l3 card bg-kuning waves-effect waves-light mh100" style="border-right: 5px solid #fff;" href="<?= base_url('dashboard/testimoni'); ?>">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">message</i>
							</div>
							<div class="col s5 m5 right-align">
								<p class="flow-text"><strong><?= $jml_pesan; ?></strong></p>
								<p>Pesan</p>
							</div>
						</div>
					</a>
					<a href="<?= base_url('dashboard/laporan'); ?>" class="col s12 m6 l3 card bg-hijau waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">pie_chart</i>
							</div>
							<div class="col s5 m5 right-align">Laporan</div>
						</div>
					</a>	      	
				</div>		
			</div>
		</li>
		<li>
			<div class="collapsible-header"><h4><i class="material-icons">settings</i>Konfigurasi</h4></div>
			<div class="collapsible-body">
				<div class="row">
					<a href="<?= base_url('dashboard/user_manual'); ?>" class="col s12 m6 l6 card bg-merah waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">library_books</i>
							</div>
							<div class="col s5 m5 right-align">
								<p class="flow-text"><strong><?= $jml_pesan; ?></strong></p>
								<p>Panduan</p>
							</div>
						</div>
					</a>
					<a href="" class="col s12 m6 l6 card bg-kuning waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s7 m7">
								<i class="material-icons" style="font-size: 60px;">format_quote</i>
							</div>
							<div class="col s5 m5 right-align">
								<p class="flow-text">4</p>
								<p>Kutipan</p>
							</div>
						</div>
					</a>			
					<a href="<?= base_url('dashboard/profil_web'); ?>" class="col s12 m12 l12 card bg-hijau waves-effect waves-light mh100" style="border-right: 5px solid #fff;">
						<div class="card-content white-text">
							<div class="col s6 m6">
								<i class="material-icons" style="font-size: 60px;">local_laundry_service</i>
							</div>
							<div class="col s6 m6 right-align">
								<p>Informasi Web Perusahaan</p>
							</div>
						</div>
					</a>					
				</div>
			</div>
		</li>    
	</ul>
</div>