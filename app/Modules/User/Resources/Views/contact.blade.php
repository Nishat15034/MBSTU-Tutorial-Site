@extends('layouts.user.master')

@section('title', 'contact')

@section('content')
<div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
							<h3>Contact Form</h3>
							<div class="contact_form">
								{!! Form::open(['url' => '/message', 'method' => 'post']) !!}
									<div class="row">
										@if(Session::has('flash_message1'))
											<div class="col-xs-12 col-sm-7">
												<div class="price-title">
													<p style="color: {{session('flash_notification')}}">{{session('flash_message1')}}</p>
												</div>
											</div>
										@endif
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Name <span class="error">*</span></label>
												<input type="text" class="form-control" name="name">
												@if($errors->has('name'))
			                                       <p style="color: red !important">* {{ $errors->first('name') }}</p>
			                                    @endif
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="email" class="form-control" name="email">
												@if($errors->has('email'))
			                                       <p style="color: red !important">* {{ $errors->first('email') }}</p>
			                                    @endif
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-11">
											<div class="form-group">
												<label>Message <span class="error">*</span></label>
												<textarea name="message" class="form-control" cols="10" rows="9"></textarea>
												@if($errors->has('message'))
			                                       <p style="color: red !important">* {{ $errors->first('message') }}</p>
			                                    @endif
											</div>
										</div>
									</div><!--end row-->
									<input type="submit" value="Send Message" class="commonBtn">
								{!! Form::close() !!}
							</div>
						</div><!--end single content left-->
					</div>

					<div class="col-xs-12 col-sm-4 custom_left">
						<div class="sidebar">
							<div class="list_block sidebar_item">
								<h3>Contacts</h3>
								<ul class="contact_info">
									<li><i class="fa fa-home"></i>Santosh,Tangail,CSE Dept. in MBSTU</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:abumohammadrafi@gmail.com">cmlearning@gmail.com</a></li>
									<li><i class="fa fa-phone"></i> 012-3434-456768</li>
									<li><i class="fa fa-globe"></i> <a href="#">http://www.cmlearning.com</a></li>
								</ul>
							</div>
							<div class="list_block">
								<div class="newsletter">
									<h3>Newsletter</h3>
									@if(Session::has('flash_message'))
									<div class="price-title">
										<p style="color: {{session('flash_notification')}}">{{session('flash_message')}}</p>
									</div>
									@endif
									{!! Form::open(['url' => '/subscribe', 'method' => 'post']) !!}
										<div class="form-group">
										  <input type="email" name="email" placeholder="Email" id="exampleInputEmail1" class="form-control">
										  @if($errors->has('email'))
	                                        <p style="color: red !important">* {{ $errors->first('email') }}</p>
	                                       @endif
										</div>
										<button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
									{!! Form::close() !!}
								</div>
							</div>
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->

		<div style="height:400px;width:100%;" id="map" class="contact_map">

		</div>
@endsection