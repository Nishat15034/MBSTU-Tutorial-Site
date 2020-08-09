@extends('layouts.user.master')

@section('title', 'course')

@section('content')
<div class="courses_section">
      <div class="container">
        <div class="row">
          @if($topic_contents != null)
          @foreach($topic_contents as $topic_content)
          <div class="col-xs-12 col-sm-8 col-lg-9 courses_right pull-right">
            <div class="courses_right_inner padding-border-left">
              <div class="about_inner course-grid clearfix">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <h3>{{$topic_content->topic_title}}</h3>
                      <?php echo $topic_content->topic_description; ?>
                    
                      <iframe width="100%" height="480" src="{{$topic_content->topic_youtbe_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div><!-- end courses_right_inner -->
          </div><!-- end courses_right -->
          @endforeach
          @endif
          <div style="padding-bottom: 200px;" class=" vertical-menu col-xs-12 col-sm-4 col-lg-2 courses_left hidden-xs pull-left">
            <div class="courses_left_inner">
              <h3>{{$category->category_name}}</h3>
              <ul>
                @foreach($sub_categories as $sub_category)
                  <li><b>{{$sub_category->sub_category_name}}</b></li>
                  @foreach($sub_category->topic as $topic)
                  @if($topic->id == $topic_id)
                  <li class="active"><a href="{{url('/'.$topic->id.'/'.$sub_category->sub_category_name.'/'.$category->category_name)}}">{{$topic->topic_name}}</a></li>
                  @else
                  <li ><a href="{{url('/'.$topic->id.'/'.$sub_category->sub_category_name.'/'.$category->category_name)}}">{{$topic->topic_name}}</a></li>
                  @endif
                  @endforeach
                @endforeach
              </ul>
            </div><!--end courses_left_inner-->
          </div><!--end courses_left-->
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!--end post section-->
@endsection