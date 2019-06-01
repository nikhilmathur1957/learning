<hr class="solid">

<div class="row mt-5 mb-5 pt-1">
	<div class="col-lg-4">
		<?php if($this->uri->segment(3) == 1 || $this->uri->segment(3) == 2 || $this->uri->segment(3) == 3){?>
		<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
			<div>
				<span class="img-thumbnail d-block no-borders">
					<img alt="" class="img-fluid" src="<?php echo base_url(); ?>assets/img/demos/medical/doctors/doctor-1.jpg">
				</span>
			</div>
			<div>
				<span class="img-thumbnail d-block no-borders">
					<img alt="" class="img-fluid" src="<?php echo base_url(); ?>assets/img/demos/medical/doctors/doctor-1-2.jpg">
				</span>
			</div>
		</div>
<?php } ?>
	</div>
<?php if($this->uri->segment(3) == 1){ ?>
	<div class="col-lg-8">

		<h3 class="font-weight-bold mt-2">Dr. Rana Sengupta</h3>

		<p>Rana Sengupta was part of the initial group that conceived MLPC.Starting his career with Oxfam as a Campaign Manager for MLPC, Rana’s leadership steered the organization to become a registered entity and
		grow from being a campaign office to an organization that empowers lakhs of mine workers besides working towards environmental justice and policy change.</p>
		<p>Rana is an Ashoka Fellow and has obtained a Doctorate Degree on The Status of mine labour in the Supply Chain of Natural Stones</p>
		
	</div>
<?php } else if($this->uri->segment(3) == 2) { ?> 
	<div class="col-lg-8">

		<h3 class="font-weight-bold mt-2">Dr. Bipin jojo</h3>

		<p>Academician – Professor Centre for Social Justice &amp; Governance, Tata Institute of Social Science Deonar, Mumbai</p>
		
	</div>
<?php } else if($this->uri->segment(3) == 3) {?>
	<div class="col-lg-8">

		<h3 class="font-weight-bold mt-2">Mr Krishnendu Mukherjee</h3>

		<p>Barrister of England and Wales, Advocate High Court of Bombay, Doughty Street Chamber, London</p>
		
	</div>
<?php } else{
	echo 'No Details Available!!';
} ?>
</div>

<hr class="solid">

<h4 class="font-weight-semibold mt-5 mb-1">More People:</h4>