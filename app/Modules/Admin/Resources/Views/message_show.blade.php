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
                            		<p><b>Name: </b>{{$message->name}}<span style="float:right">{{$message->created_at}}</span></p>
                            	</div>
                            	<div class="uk-width-medium-1-1">
                            		<p><b>Email: </b>{{$message->email}}</p>
                            	</div>
                            	<div class="uk-width-medium-1-1 margin-uk-top">
                            		<p><b>Message: </b>{{$message->message}}</p>
                            	</div>
                                <br><br><br>
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <label><b>Reply by me:</b></label>
                                </div>
                                <br>
                                @foreach($message_replies as $message_reply)
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    <p><?php echo $message_reply->message ?></p> <p style="float:right;margin-top:-35px;">{{$message->created_at}}</p>
                                    <div style="border-bottom: 1px solid #888;overflow: hidden;" class="uk-margin-top uk-width-medium-1-1"></div>
                                </div>
                                @endforeach
                                <br>
                                
                                <div class="uk-margin-top uk-width-medium-1-1">
                                    {!! Form::open(['url' => 'admin/message/reply', 'method' => 'post']) !!}
                                    <input hidden="" value="{{$message->email}}" type="text" name="email">
                                    <input hidden="" value="{{$message->id}}" type="text" name="message_id">
                                    <textarea name="message" id="wysiwyg_ckeditor" cols="30" rows="20">
                                    </textarea>
                                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-large-bottom">Submit</button>
                                    {!! Form::close() !!}
                                </div>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection