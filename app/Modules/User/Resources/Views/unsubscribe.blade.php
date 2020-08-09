@extends('layouts.user.master')

@section('title', 'Unsubscribe')

@section('content')
<div style="height:650px;" class="full_banner">
			<img style="height:100%;" src="{{url('user/img/events/banner.jpg')}}" alt="" />
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="single_caption">
							@if(Session::has('flash_message'))
			                    <h1 style="color: {{session('flash_notification')}}">{{session('flash_message')}}</h1>
			                @else
			                    <h1>Are you sure to unsubscribe ?</h1>
								<li class="apply_now"><a href="{{url('/unsubscribe/'.$email)}}">Yes Unsubscribe</a></li>
								<li class="apply_now"><a href="{{url('/')}}">Not Now</a></li>
			                @endif
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection