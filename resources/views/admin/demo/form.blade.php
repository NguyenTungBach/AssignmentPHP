@extends('admin.layout.master-layout')

@section('title')
    <title>Form</title>
@endsection

@section('breadcrumb')
    <header class="page-header">
        <h2>Form Create</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Form Create</span></li>
            </ol>

            <div class="sidebar-right-toggle" ></div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-md-12">
        <form name="register-form" action="/form" method="post">
            @csrf
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                    <h2 class="panel-title">Create</h2>
                </header>
                <div class="panel-body">
                    @if($errors->all())
                        <div class="validation-message">
                            <ul style="display: block;">
                                @foreach($errors->all() as $error)
                                    <li>
                                        <label class="error">
                                            {{$error}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Event Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name">
                            @error('name')
                                <label for="name" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Event Name</label>
                            <input type="text" class="form-control" name="address" placeholder="address">
                            @error('address')
                                <label for="address" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label>Ticket Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price">
                            @error('price')
                                <label for="price" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Thumbnail</label>
                            <input type="text" class="form-control" name="thumbnail" placeholder="thumbnail">
                            @error('thumbnail')
                                <label for="thumbnail" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" placeholder="Content">
                            @error('content')
                                <label for="content" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Detail content</label>
                            <textarea class="form-control" name="detail" id="editor" ></textarea>
                        </div>
                        @error('detail')
                            <label for="detail" class="error">{{$message}}</label>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            @error('status')
                                <label for="status" class="error">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button type="submit" class="btn btn-info btn-fill">Creat</button>
                    <a href="/table"><button type="button" class="btn btn-danger pull-right">Cancel</button></a>
                </footer>
            </section>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dark-faith',
                uploadPreset: 'nqbsybdh'}, (error, result) => {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['register-form']['thumbnail'].value += result.info.secure_url + ',';

                    document.getElementById('preview-img').innerHTML += `<img src="${result.info.secure_url}" class="img-thumbnail img-200px">`;
                }
            }
        )

        $('#upload_widget').click(function () {
            myWidget.open();
        });
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
