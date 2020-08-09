@extends('layouts.admin.master')

@section('title', 'Message')

@section('content')
<div id="page_content">
    <div id="page_content_inner">

        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Title: </b>{{$message->title}}</p>
                            	</div>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Message: </b> <?php echo $message->message; ?></p>
                            	</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection