@extends('layouts.app')

@section('content')
    @include('includes.navbar')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="form-area p-3">
                        <form action="" method="POST">
                            @csrf
                            <h6>Fill Student's Records</h6><hr>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name </label>
                                <input type="text" name="name" class="form-control" value="{{ $studentdata->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile No. </label>
                                <input type="text" name="mobile" class="form-control" value="{{ $studentdata->mobile }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email Id </label>
                                <input type="email" name="email" class="form-control" value="{{ $studentdata->email }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Father's Name </label>
                                <input type="text" name="fname" class="form-control" value="{{ $studentdata->fname }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Father's Name">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="class" aria-label="Default select example">
                                    <option disabled selected value="">--Select Class--</option>
                                    @if ($studentdata->class == '1')
                                        <option value="1" selected>1</option>
                                    @else
                                        <option value="2" selected>2</option>
                                    @endif
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div style="display: block; float: right;">
                                        <button type="submit" name="ok" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
