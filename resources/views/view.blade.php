@extends('layouts.app')

@section('content')
    @include('includes.navbar')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-bordered w-100">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Mobile</th>
                                    <th>Email ID</th>
                                    <th>Class</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td><span style="text-transform: capitalize;">{{ $student->fname }}</span></td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->class }}</td>
                                        <td>
                                            @if ($student->status == 0)
                                                <span class="badge rounded-pill text-bg-success">Active</span>
                                            @else
                                                <span class="badge rounded-pill text-bg-warning">De-active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" style="text-decoration: none;" class="badge rounded-pill text-bg-primary">Edit</a>
                                            <a href={{ 'delete/'.$student->id }} style="text-decoration: none;" class="badge rounded-pill text-bg-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
