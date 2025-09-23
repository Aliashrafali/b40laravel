@extends('layouts.app')

@section('content')
    @include('includes.navbar')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="form-area p-3">
                        <form action="">
                            @csrf
                            <h6>Fill Student's Records</h6><hr>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name <sup style="color: red;">*</sup></label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Father's Name <sup style="color: red;">*</sup></label>
                                <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Father's Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile No. <sup style="color: red;">*</sup></label>
                                <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Mobile" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option disabled selected value="">--Select Class--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
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
