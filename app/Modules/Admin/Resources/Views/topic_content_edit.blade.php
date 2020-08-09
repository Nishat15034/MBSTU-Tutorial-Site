@extends('layouts.admin.master')

@section('title', 'Topic-Content')

@section('content')
<div ng-app="app" ng-controller="TopicContentController as ctrl" id="page_content">
    <div id="page_content_inner">
        {!! Form::open(['url' => 'admin/topic-content/edit/'.$topic_content->id, 'method' => 'post']) !!}
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <input type="hidden" id="select_topic_content_id"   value="{{$topic_content->id}}">
                                <input type="hidden" id="select_topic_id"   value="{{$topic_content->topic->id}}">
                                <input type="hidden" id="select_sub_category_id"   value="{{$topic_content->topic->subCategory->id}}">
                                <input type="hidden" id="select_category_id"   value="{{$topic_content->topic->subCategory->category->id}}">
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <div   class="uk-width-medium-1-2">
                                        <span></span>
                                        <select ng-model="category_id" ng-change="getSubCategory()">
                                            @foreach($categories as $category)
                                            @if($category->id == $topic_content->topic->subCategory->category->id)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @else
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div ng-show="show.show3" class="uk-margin-top uk-width-medium-1-1">
                                    <div   class="uk-width-medium-1-2 ">
                                        <span></span>
                                        <select  ng-model="sub_category_id" ng-change="getTopic()">
                                            <option ng-selected="@{{sub_category.id == sub_category_id}}"  ng-repeat="sub_category in sub_categories"  value="@{{sub_category.id}}">@{{sub_category.sub_category_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div ng-show="show.show2" class="uk-margin-top uk-width-medium-1-1">
                                    <div   class="uk-width-medium-1-2 ">
                                        <span></span>
                                        <select  ng-model="sub_category_id" ng-change="getTopic()">
                                            <option value="0">Select Sub-Category</option>
                                            <option   ng-repeat="sub_category in sub_categories"  value="@{{sub_category.id}}">@{{sub_category.sub_category_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <div   class="uk-width-medium-1-2 " >
                                        <span></span>
                                        <select ng-show="show.show" name="topic_id">
                                            <option ng-selected="@{{topic.id == topic_id}}"  ng-repeat="topic in topics" value="@{{topic.id}}" >@{{topic.topic_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <label>Title</label>
                                    <input name="topic_title" type="text" value="{{$topic_content->topic_title}}" class="md-input" />
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <label>Youtube Video url</label>
                                    <input name="topic_youtbe_url" type="text" value="{{$topic_content->topic_youtbe_url}}" class="md-input" />
                                </div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <textarea name="topic_description" id="wysiwyg_ckeditor" cols="30" rows="20"><?php echo $topic_content->topic_description; ?>
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
<script type="text/javascript" src="{{ url('angular/topic_content_edit.js') }}"></script>
@endsection