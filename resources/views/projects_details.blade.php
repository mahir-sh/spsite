@extends('layouts/app')



@section('content')
            @foreach ($projects as $project)
                @if ($project['id'] == $id)
                    <h2 class="text-3xl font-bold leading-tight mt-0 mb-2">{{ $project['name'] }}</h2>
                    <p class="text-gray-600 text-lg">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap my-4">
                        <div class="w-1/2 px-4">
                            <p class="text-gray-600"><b>Features:</b> {{ $project['features'] }}</p>
                        </div>
                        <div class="w-1/2 px-4">
                            <p class="text-gray-600"><b>Technologies:</b> {{ $project['technologies'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600"><b>Contact:</b> {{ $project['contact'] }}</p>
                @endif
            @endforeach
@endsection
