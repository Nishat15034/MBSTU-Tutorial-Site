@extends('layouts.admin.master')

@section('title', 'Dashboard')

@section('content')
	<div id="page_content">
        <div id="page_content_inner">
            <div class="uk-margin-top uk-padding-top uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                @if($check_user->type == 1)
                <div class="uk-margin-bottom uk-margin-top">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">people</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total User:<b>{{$total_user}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom uk-margin-top">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">people_outline</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Pending User:<b>{{$pending_user}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom uk-margin-top">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">school</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Course:<b>{{$total_course}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom uk-margin-top">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">layers</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Category:<b>{{$total_category}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom uk-margin-top">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">filter_b_and_w</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Subcategory:<b>{{$total_subcategory}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">blur_circular</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Topic:<b>{{$total_topic}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">local_library</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Tutorial:<b>{{$total_content}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">star</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Subscriber:<b>{{$total_subscriber}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">mail</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    Total Message:<b>{{$total_message}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div  class="uk-margin-bottom">
                    <div style="background-color: #3366ff;" class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i  style="color:#fff" class="material-icons">layers</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    My Category:<b>{{$my_category}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div style="background-color: #3366ff;" class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i style="color:#fff" class="material-icons">filter_b_and_w</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    My Subcategory:<b>{{$my_subcategory}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div style="background-color: #3366ff;" class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i style="color:#fff" class="material-icons">blur_circular</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    My Topic:<b>{{$my_topic}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <div style="background-color: #3366ff;" class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i style="color:#fff" class="material-icons">local_library</i></span>

                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <h3>
                                    My Tutorial:<b>{{$my_topic_content}}</b>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection