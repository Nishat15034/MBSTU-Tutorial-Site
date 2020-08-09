@extends('layouts.admin.master')

@section('title', 'Topic-Content')

@section('content')
<div id="page_content">
    <div id="page_content_inner">

        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Category: </b>{{$topic_content->topic->subCategory->category->category_name}}</p>
                            	</div>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>SubCategory: </b>{{$topic_content->topic->subCategory->sub_category_name}}</p>
                            	</div>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Topic: </b>{{$topic_content->topic->topic_name}}</p>
                            	</div>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Title: </b>{{$topic_content->topic_title}}</p>
                            	</div>
                            	<div class=" uk-margin-top uk-width-medium-1-1">
                            		<?php echo $topic_content->topic_description; ?>
                            	</div>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                	<iframe width="854" height="480" src="{{$topic_content->topic_youtbe_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                	
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection