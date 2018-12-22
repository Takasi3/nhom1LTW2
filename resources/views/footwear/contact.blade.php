@extends("footwear.master")
@section('content')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="">Home</a></span> / <span>Contact</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 53 Võ Văn Ngân, <br> Linh Chiểu -Thủ Đức - HCM</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+84 981651221</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:khuctinhcasaubiamo@gmail.comm">Gửi Mail ♥</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">ThanKinhGiay.CF</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form action="#" class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.464263756725!2d106.7563953!3d10.8522498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1537780043658" width="600" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
