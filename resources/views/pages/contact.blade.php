@include('layouts.partials.header')
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap"></div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
                               <form class="form" method="post" action="User">
                                    @csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                                <br><span style="color:red"> @error('name'){{$message}}@enderror</span></br>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email"value="{{ old('email') }}" placeholder="Email" >
                                                <br><span style="color: red">@error('email'){{$message}}@enderror</span></br>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                                <br><span style="color: red">@error('phone'){{$message}}@enderror</span></br>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" >
                                                <br><span style="color: red">@error('subject'){{$message}}@enderror</span></br>
											</div>
										</div>
                                        <div class="col-lg-6">
											<div class="form-group">
                                                <select class="form-control select2 select2-hidden-accessible" name="disease_type" id="disease_type" onchange="disease_type()" data-select2-id="select2-data-disease_type" tabindex="-1" aria-hidden="true">
                                                  @foreach ($diseases as $disease)
                                                    <option value="{{$disease->id}}">{{$disease->disease_type}}</option>
                                                    @endforeach
                                                </select>
											</div>
                                        </div>
                                        <div class="col-lg-6">
											<div class="form-group">
												<input type="file" name="image" value="{{ old('image') }}" placeholder="Image Upload Here">
                                                <br><span style="color:red"> @error('name'){{$message}}@enderror</span></br>
											</div>
										</div>
                                        <div class="col-lg-6">
											<div class="form-group">
                                                <label>Gender</label><br>
                                                <label><input style="width: 20px" type="radio" id="gender" name="gender" value="male">Male</label>
                                                <label><input style="width: 20px" type="radio" id="gender" name="gender" value="Female">Female</label>
												<br><span style="color:red"></span></br>
											</div>
										</div>
                                        <div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="city" value="{{ old('city') }}" placeholder="City">
                                                <br><span style="color:red"> @error('name'){{$message}}@enderror</span></br>
											</div>
										</div>


										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message"  value="{{ old('message') }}" placeholder="Your Message" ></textarea>
                                                <br><span style="color: red">@error('message'){{$message}}@enderror</span></br>
											</div>
										</div>


										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
											<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+(000) 1234 56789</h3>
									<p>info@company.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>2 Fir e Brigade Road</h3>
									<p>Chittagonj, Lakshmipur</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@extends('layouts.partials.footer')
