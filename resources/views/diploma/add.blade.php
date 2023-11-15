@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('loading.loader')
    {{-- end loader --}}


    {{-- start header --}}
    @include('header.header-web')
    {{-- end header --}}

    <section class="add-web p-70">


        <div class="container col-md-5 m-auto p-70">
            <h1 class="text-center text-light">Upload Diploma</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label> Diploma Name </label>
                            <input type="text" name="diploma_name" class="form-control">
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 mt-2">
                        <div class="form-group">
                            <label> Department Name </label>
                            <select name="department_name" id="" class="form-control">
                                <option value="web">Web</option>
                                <option value="Network">Network</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 mt-2">
                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="diploma_price" class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 mt-3">
                        <div class="btn-upload">
                            <button name="add" class="upload">Add</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </section>
@endsection
