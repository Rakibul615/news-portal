@extends('admin.master')
@section('content')
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('admin.store')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" row="10" name="description"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="New Post">
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
