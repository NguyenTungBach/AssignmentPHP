@extends('admin.layout.master-layout')

@section('title')
    <title>Detail Event</title>
@endsection

@section('breadcrumb')
    <header class="page-header">
        <h2>Detail Event</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Detail Event</span></li>
            </ol>

            <div class="sidebar-right-toggle" ></div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-md-12">
        <form action="#">
            @csrf
            <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                    <form >
                        <section class="panel">
                            <div class="col-md-12">
                                <br>
                                <div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Name:</label>
                                        <h4>{{$item['name']}}</h4>
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Address:</label>
                                        <h4>{{$item['address']}}</h4>
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Price (Triệu/m2) :</label>
                                        <h4>{{number_format($item['price'])}}</h4>
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Content: </label>
                                        <h4>{{$item['content']}}</h4>
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Detail: </label>
                                        <h4>{{$item['detail']}}</h4>
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <h4>Thumbnail: </h4>
                                        <img style="width: 25%" src="{{$item['thumbnail']}}" alt="">
                                    </div>
                                    <div class="col-md-12 mb-lg">
                                        <label>Status: </label>
                                        <h4>{{$item['status']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </section>
        </form>
    </div>
    <footer class="panel-footer">
        <a href="/table"><button class="btn btn-danger">Back to list</button></a>
        <a href="/edit?id={{$item['id']}}"><button class="btn btn-primary">Edit</button></a>
        <a href="/delete?id={{$item['id']}}"><button class="btn btn-primary">Delete</button></a>
    </footer>
@endsection
