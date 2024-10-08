@extends('layouts/app')

@section('content')


<!-- blog section header start -->
<div class="blog_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <h1 class="blog_taital">My <span class="blog_taital_1">Projects</span></h1>
             <p class="blog_text">"Here are some of my recent works."</p>
          </div>
       </div>
    </div>
            <!-- blog section header end -->

            <div class="blog_section_2">
                <div class="container">
                    @foreach ($projects as $index => $project)
                        @if ($index % 3 == 0)
                            <div class="row">
                        @endif

                        <div class="col-md-4">
                            <div class="blog_box">
                                <div class="blog_img">
                                    <h4 class="prep_text">{{ $project['name'] }}</h4>
                                </div>
                                <p class="lorem_text">{{ $project['description'] }}</p>
                                <div class="readmore_bt_1">
                                    <a href="{{ route('projects_details.show', $project['id']) }}">Read More</a>
                                </div>
                            </div>
                        </div>

                        @if (($index + 1) % 3 == 0 || $index + 1 == count($projects))
                            </div> <!-- Close the row -->
                        @endif
                    @endforeach
                </div>
            </div>




   <!-- blog section end -->
@endsection
