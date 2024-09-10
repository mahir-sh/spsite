@extends('layouts/app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Work Experiences</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4>University</h4>
                            <p>Name: {{ auth()->user()->university->name }}</p>
                            <p>Duration: {{ auth()->user()->university->duration }}</p>
                        </li>
                        <li class="list-group-item">
                            <h4>College</h4>
                            <p>Name: {{ auth()->user()->college->name }}</p>
                            <p>Duration: {{ auth()->user()->college->duration }}</p>
                        </li>
                        @foreach(auth()->user()->jobs as $job)
                            <li class="list-group-item">
                                <h4>Job {{ $loop->iteration }}</h4>
                                <p>Company: {{ $job->company }}</p>
                                <p>Designation: {{ $job->designation }}</p>
                                <p>Duration: {{ $job->duration }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
