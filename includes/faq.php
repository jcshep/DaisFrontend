<div class="info-panel info-panel-full dark faq">
	<div class="container narrow">
		<h2 class="text-center">Frequently Asked Questions</h2>
		
		<div class="spacer-md"></div>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#faq-one" aria-controls="faq-one" role="tab" data-toggle="tab">Basics</a></li>
			<li role="presentation"><a href="#faq-two" aria-controls="faq-two" role="tab" data-toggle="tab">Plans</a></li>
			<li role="presentation"><a href="#faq-three" aria-controls="faq-three" role="tab" data-toggle="tab">Account & Billing</a></li>
			<li role="presentation"><a href="#faq-four" aria-controls="faq-four" role="tab" data-toggle="tab">Policies</a></li>
			<li role="presentation"><a href="#faq-five" aria-controls="faq-five" role="tab" data-toggle="tab">Business Solutions</a></li>
		</ul>

		<div class="spacer-xxl"></div>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="faq-one">
				
				<?php $i=0; while ($i <= 10) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading-<?php echo $i?>">
							<div class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i?>" aria-expanded="false" aria-controls="collapse-<?php echo $i?>">												
									How long will it take to start my service?
								</a>
							</div>
						</div>
						<div id="collapse-<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $i?>">
							<div class="panel-body">
								<p>These are the most common fixes for Internet issues (unless there is a network issue occurring):</p>
								<ul>
									<li>Reboot each device from the wall out. If you are using a router, disconnect your computer from the router and plug it directly into your modem or Ethernet wall jack, and again reboot devices from the wall out.</li>
									<li>If you still cannot access the Internet, contact us for assistance at + 1 800 376 9715</li>
								</ul>
								
							</div>
						</div>
					</div>
				<?php $i++; } ?>

			</div>
			<div role="tabpanel" class="tab-pane" id="faq-two">...</div>
			<div role="tabpanel" class="tab-pane" id="faq-three">...</div>
			<div role="tabpanel" class="tab-pane" id="faq-four">...</div>
			<div role="tabpanel" class="tab-pane" id="faq-five">...</div>
		</div>

	</div>
</div>