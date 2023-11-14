@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('loading.loader')
    {{-- end loader --}}

    {{-- start header --}}
    @include('header.header')
    {{-- end header --}}

    <section class="add-web p-70">

        <div class="container col-md-5 m-auto">
            <h1 class="text-center text-light">Upload Web Session</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label > Session Name </label>
                            <input type="text" name="session_name" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 mt-2">
                        <div class="form-group">
                            <label > Session Video </label>
                            <input type="file" name="session_video" class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 mt-3">
                        <div class="btn-upload">
                            <button name="upload" class="upload">Upload</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </section>
@endsection
