@extends('layouts.admin.master')

@section('title', 'Topic')

@section('content')
<div ng-app="app" ng-controller="TopicController" id="page_content" >
        <div id="page_content_inner">
            {!! Form::open(['url' => 'admin/topic/edit/'.$topic->id, 'method' => 'post']) !!}
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-1">
                                    <div   class="uk-width-medium-1-2 uk-button uk-form-select" data-uk-form-select>
                                        <span></span>
                                        <select ng-model="category_id" ng-change="getSubCategory()">
                                            <option value="">Select Category </option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div  class="uk-margin-top uk-width-medium-1-1">
                                    <div  class="uk-width-medium-1-2 uk-button uk-form-select" data-uk-form-select >
                                        <span></span>
                                        <select name="sub_category_id">
                                            <option value="{{$topic->subCategory->id}}">{{$topic->subCategory->sub_category_name}}</option>
                                            <option ng-repeat="sub_category in sub_categories"  value="@{{sub_category.id}}">@{{sub_category.sub_category_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-2">
                                    <label>Topic Name</label>
                                    <input value="{{$topic->topic_name}}" name="topic_name" type="text" class="md-input" />
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
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
<script type="text/javascript" src="{{ url('angular/topic.js') }}"></script>
@endsection