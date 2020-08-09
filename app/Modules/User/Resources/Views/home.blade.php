@extends('layouts.user.master')

@section('title', 'Home')

@section('content')
<div class="bannercontainer bannerV2">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="{{url('user/img/home/slider/course_banner_1.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft text-center"
                  data-x="center"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Lets start your course
                </div>

                <div class="tp-caption rs-caption-2 sft text-center"
                  data-x="center"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Congratulation! Study any topic, anytime. Explore thousands of courses.Stay Sharp. Get ahead with Learning Paths
                </div>
              </div>
            </li>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="{{url('user/img/home/slider/course_banner_2.jpg')}}" alt="slidebg2" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Lets start your course
                </div>

                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Congratulation! Study any topic, anytime. Explore thousands of courses.Stay Sharp. Get ahead with Learning Paths
                </div>
              </div>
            </li>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="{{url('user/img/home/slider/course_banner_3.jpg')}}" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft text-right"
                  data-hoffset="-50"
                  data-x="right"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Lets start your course
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="-50"
                  data-x="right"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                 Congratulation! Study any topic, anytime. Explore thousands of courses.Stay Sharp. Get ahead with Learning Paths
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- BANNER BOTTOM -->
    <div class="banner-bottom">
      <div class="container">
        <div class="banner-bottom-inner">
            <div class="col-sm-12">
              <div class="searchCourse">
                {!! Form::open(['url' => '/subscribe/home', 'method' => 'post']) !!}
                  <input  type="text" placeholder="Type your email...." name="email" class="form-control">
                  <button class="btn btn-default commonBtn" type="submit">Subscribe</button>
                  @if($errors->has('email'))
                    <p style="color: red !important">* {{ $errors->first('email') }}</p>
                  @endif
                  @if(Session::has('flash_message'))
                    <p style="color: {{session('flash_notification')}}">{{session('flash_message')}}</p>
                  @endif
                {!! Form::close() !!}
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container">
        <div class="info-section">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Over 5,000 Students Enrolled</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-shield" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Get Certified Once Completed</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-book" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>500 + Online Courses and Increasing</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-group" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>More than 100 Super Qualified Instructor</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- COURSE CATEGORY -->
    <section class="courseCategory padding paralax" style="background-image: url(user/img/home/paralax/paralax03a.jpg);">
      <div class="container">
        <div class="sectionTitle text-center">
          <h3>Course Categories</h3>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-paint-brush" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Design</a></h4>
                <a class="courseNo" href="#">10 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Music</a></h4>
                <a class="courseNo" href="#">8 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-gamepad" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Gaming</a></h4>
                <a class="courseNo" href="#">6 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Technology</a></h4>
                <a class="courseNo" href="#">9 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-code" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Development</a></h4>
                <a class="courseNo" href="#">12 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="fa fa-camera-retro" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="#">Photography</a></h4>
                <a class="courseNo" href="#">4 Course</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- LIGHT SECTION -->
    <section class="clearfix padding feature-section">
      <div class="container">

        <div class="sectionTitle text-center">
          <h3>Why CSE MBSTU Learning Course?</h3>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-firefox" aria-hidden="true"></i></span>
              <h3>Learn Anything Online</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-desktop" aria-hidden="true"></i></span>
              <h3>Learn On Any Device</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-id-badge" aria-hidden="true"></i></span>
              <h3>Cartification Courses</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-headphones" aria-hidden="true"></i></span>
              <h3>24/7 Support</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection