@extends('layouts.admin.master')

@section('title', 'Subscribers')

@section('content')
<div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    
                    <div class="uk-overflow-container uk-margin-bottom">
                        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                            <thead>
                            <tr>
                                <th class="filter-false remove sorter-false" data-priority="6">Serial</th>
                                <th data-priority="critical">Title</th>
                                <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Serial</th>
                                    <th>Title</th>
                                    <th class="uk-text-center">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($subscriber_messages as $key => $subscriber_message)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$subscriber_message->title}}</td>
                                <td class="uk-text-center">
                                	<a href="{{url('admin/subscribers/message/view/'.$subscriber_message->id)}}" ><i class="md-icon material-icons">visibility</i></a>
                                    <a href="{{url('admin/subscribers/message/delete/'.$subscriber_message->id)}}" class="s_remove_row"><i class="md-icon material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="uk-pagination ts_pager">
                            <li data-uk-tooltip title="Select Page">
                                <select class="ts_gotoPage ts_selectize"></select>
                            </li>
                            <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                            <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                            <li><span class="pagedisplay"></span></li>
                            <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                            <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                            <li data-uk-tooltip title="Page Size">
                                <select class="pagesize ts_selectize">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </li>
                         </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="md-fab-wrapper">
            <a class="md-fab md-fab-accent md-fab-wave-light" href="{{url('admin/subscribers/message/create')}}" id="invoice_add">
                <i class="material-icons">&#xE145;</i>
            </a>
        </div>
    </div>
@endsection