<div class="info-panel info-panel-full dark manuals">
	<div class="container narrow">
		<h2 class="text-center">Manuals</h2>
		
		<div class="spacer-md"></div>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#manual-one" aria-controls="manual-one" role="tab" data-toggle="tab">Sony</a></li>
			<li role="presentation"><a href="#manual-two" aria-controls="manual-two" role="tab" data-toggle="tab">Samsung</a></li>
			<li role="presentation"><a href="#manual-three" aria-controls="manual-three" role="tab" data-toggle="tab">Vizio</a></li>
		</ul>

		<div class="spacer-xxl"></div>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="manual-one">
				
				<div id="cards">
				<?php $i=0; while ($i <= 5) { ?>
					<div class="row card transition">
						<div class="col-sm-2">
							<img src="images/manual-thumb.png" class="thumb" alt="">
						</div> <!--col-->
						<div class="col-sm-7">
								<strong>Sony Blu-ray Player 3-452-779-12(1)</strong> <br>
								Sony Blu-ray Player User Manual
						</div> <!--col-->
						<div class="col-sm-3 text-right">
							<a target="_blank" href="">Open as PDF</a>
						</div> <!--col-->	
					</div>
				<?php $i++; } ?>
				</div>

			</div>
			<div role="tabpanel" class="tab-pane" id="manual-two">...</div>
			<div role="tabpanel" class="tab-pane" id="manual-three">...</div>
			<div role="tabpanel" class="tab-pane" id="manual-four">...</div>
			<div role="tabpanel" class="tab-pane" id="manual-five">...</div>
		</div>

	</div>
</div>