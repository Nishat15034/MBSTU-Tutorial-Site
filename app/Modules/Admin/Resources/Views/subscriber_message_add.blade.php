@extends('layouts.admin.master')

@section('title', 'Message')

@section('content')
<div ng-app="app" ng-controller="TopicContentController" id="page_content">
    <div id="page_content_inner">
        {!! Form::open(['url' => 'admin/subscribers/message/store', 'method' => 'post']) !!}
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <label>title</label>
                                    <input name="title" type="text" class="md-input" />
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <textarea name="message" id="wysiwyg_ckeditor" cols="30" rows="20">
                                    </textarea>
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

@section('angular')
<script type="text/javascript" src="{{ url('angular/topic_content.js') }}"></script>
@endsection