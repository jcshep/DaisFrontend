

<div id="cards">

				<?php $i=0; while ($i <= 10) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading-<?php echo $i?>">
							<div class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-sub-<?php echo $i?>" aria-expanded="false" aria-controls="collapse-sub-<?php echo $i?>">												
									Contractor Resource
								</a>
							</div>
						</div>
						<div id="collapse-sub-<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $i?>">
							<div class="panel-body">
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
							</div>
						</div>
					</div>
				<?php $i++; } ?>

	



</div>