@yield('content')


@section('content')
<div class="blog_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="blog_taital">My <span class="blog_taital_1">Projects</span></h1>
                <p class="blog_text">Here are some of my recent works.</p>
            </div>
        </div>
    </div>
    <div class="blog_section_2">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <h4 class="date_text">{{ \Carbon\Carbon::parse($project['project_date'])->format('M d') }}</h4>
                            <h4 class="prep_text">{{ $project['title'] }}</h4>
                        </div>
                        <p class="lorem_text">{{ Str::limit($project['description'], 150) }}</p>
                        <div class="readmore_bt_1"><a href="{{ route('projects.show', $project['id']) }}">Read More</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

