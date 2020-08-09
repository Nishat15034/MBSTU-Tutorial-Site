@extends('layouts.admin.master')

@section('title', 'course')

@section('content')
	<div id="page_content">
        <div id="page_content_inner">
            {!! Form::open(['url' => 'admin/course/add', 'method' => 'post']) !!}
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-width-medium-1-1">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    
                                    <div class="uk-width-medium-1-1">
                                        <label>course Name</label>
                                        <input name="course_name" type="text" class="md-input" />
                                        @if($errors->has('course_name'))
                                        <p style="color: red !important" class="text-danger-600 mt-5">* {{ $errors->first('course_name') }}</p>
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