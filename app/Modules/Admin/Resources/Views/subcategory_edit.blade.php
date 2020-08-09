@extends('layouts.admin.master')

@section('title', 'Sub-Category')

@section('content')
<div id="page_content">
        <div id="page_content_inner">
            {!! Form::open(['url' => 'admin/sub-category/edit/'.$sub_category->id, 'method' => 'post']) !!}
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-2">
                                    <select name="category_id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        @if($category->id == $sub_category->category_id)
                                        <option selected="" value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endif
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Sub-Category Name</label>
                                    <input name="sub_category_name" value="{{$sub_category->sub_category_name}}" type="text" class="md-input" />
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