@extends('layouts.admin.master')

@section('title', 'Category')

@section('content')
	<div id="page_content">
        <div id="page_content_inner">
            {!! Form::open(['url' => 'admin/category/add', 'method' => 'post']) !!}
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-width-medium-1-1">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    
                                    <div class="uk-width-medium-1-1">
                                        <select class="uk-margin-bottom" id="select_demo_5" name="course_id" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                            <option value="">Select Course</option>
                                            @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        </select>
                                        <label>Category Name</label>
                                        <input name="category_name" type="text" class="md-input" />
                                        @if($errors->has('category_name'))
                                        <p style="color: red !important" class="text-danger-600 mt-5">* {{ $errors->first('category_name') }}</p>
                                        @endif
                                        <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-large-bottom">Submit</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection