@extends('admin.layout.master')
@section('title', 'Event List | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form action="/admin/list" role="search" class="sr-input-func" method="post" name="search-form">
                                        @csrf
                                        <input type="search" name="keyword" placeholder="Search by title..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">List</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
@endsection
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="product-status-wrap drp-lst">
                            <h4>Book list</h4>
                            <div class="asset-inner">
                                <table class="table-mailbox">
                                    <tr>
                                        <th ></th>
                                        <th>Book Id</th>
                                        <th>Author Id</th>
                                        <th>Title</th>
                                        <th>ISBN</th>
                                        <th>Pub year</th>
                                        <th>Available</th>
                                    </tr>
                                    @foreach($data as $item)
                                        <tr>
                                            @php
                                                $s_date = \Carbon\Carbon::parse()
                                            @endphp
                                            <td><input type="checkbox"></td>
                                            <td>{{ $item['bookid'] }}</td>
                                            <td>{{ $item['authorid'] }}</td>
                                            <td>{{ $item['title'] }}</td>
                                            <td>{{ $item['ISBN'] }}</td>
                                            <td>{{ $item['pub_year'] }}</td>
                                            <td>{{ $item['available'] }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

