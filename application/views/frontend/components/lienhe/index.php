<?php echo form_open( base_url()."lien-he"); ?>
<section>
	<div class="container">
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<?php 
				echo validation_errors();
				
				?>
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h1 style="color: black">Liên hệ với chúng tôi</h1>				
					
					<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="name"><em> Họ tên</em><span class="required">*</span></label>
									<input id="name" name="fullname" type="text" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="email"><em> Email</em><span class="required">*</span></label>
									<input id="email" name="email" class="form-control" type="email" value="">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="phone"><em> Số điện thoại</em><span class="required">*</span></label>
									<input type="number" id="phone" class="form-control" name="phone">

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
							<textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
						</div>
						<div class="form-group">
							<label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
							<textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
						</div>
						<button type="submit" class="btn-update-order" >Gửi nhận xét</button>

					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="f-contact" style="
			padding-left: 32px;
			">
			<h1 style="color: black">Thông tin liên hệ</h1>
			<ul class="list-unstyled">
				<li class="clearfix">
					<i class="fa fa-map-marker fa-1x" style="color:#0f9ed8; padding: 20px; "></i>
					<span style="color: black"> An Dương Vương, Quận 5, TP.HCM</span><br>
				</li>
				<li class="clearfix">
					<i class="fa fa-phone fa-1x" style="color:#0f9ed8;padding: 20px;  "></i>
					<span style="color: black">0968013815</span>
				</li>
				<li class="clearfix">
					<i class="fa fa-envelope fa-1x " style="color:#0f9ed8; padding: 20px; "></i>
					<span style="color: black"><a href="mailto:sale.24hstore@gmail.com">dungtien208001@gmail.com</a></span>
				</li>
			</ul>
		</div>

	</div>
	<div class="col-md-12 col-lg-12 col-xs-12 col-12">

		<div style="margin-top: 15px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3919.6697268382204!2d106.6800696!3d10.7599171!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1621913523669!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

</section>
