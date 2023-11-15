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
            <h1 class="text-center text-light">Upload Department</h1>

            @if (Session::has('done'))
                <div class="alert alert-success mx-auto text-center">{{ Session::get('done') }}</div>
            @endif

            <form action="{{ route('create.department') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label> Department Name </label>
                            <input type="text" name="department_name"
                                class="form-control  @error('department_name') is-invalid  @enderror">

                            @error('department_name')
                                <div
                                    class="alert alert-danger bg-transparent border-0 text-danger mt-2 animate__animated animate__fadeInUpBig">
                                    {{ $message }}</div>
                            @enderror
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
