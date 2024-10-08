@extends('layouts/app')

@section('content')

<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg">
    <div class="grid grid-cols-1 gap-6">
        @foreach($work as $item)
            <div class="experience-item bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">

                <!-- Educational Experiences -->
                @if($item['type'] === 'school' || $item['type'] === 'college' || $item['type'] === 'university')
                    <div class="education">
                        <h3 class="text-xl font-semibold text-blue-600">{{ ucfirst($item['type']) }}: {{ $item['name'] }}</h3>
                        <p class="text-gray-500">{{ $item['location'] }}</p>
                        <p class="text-sm text-gray-400">
                            Duration: {{ \Carbon\Carbon::parse($item['start_date'])->format('F Y') }} -
                            {{ $item['end_date'] ? \Carbon\Carbon::parse($item['end_date'])->format('F Y') : 'Present' }}
                        </p>
                        @if(isset($item['degree']))
                            <p class="mt-2 text-gray-600">Degree: <span class="font-medium">{{ $item['degree'] }}</span></p>
                        @endif
                    </div>
                @endif

                <!-- Job Experiences -->
                @if($item['type'] === 'job')
                    <div class="job">
                        <h3 class="text-xl font-semibold text-green-600">{{ $item['position'] }} at {{ $item['company_name'] }}</h3>
                        <p class="text-sm text-gray-400">
                            Work Stack: <span class="font-medium">{{ $item['work_stack'] }}</span>
                        </p>
                        <p class="text-sm text-gray-400">
                            Duration: {{ \Carbon\Carbon::parse($item['start_date'])->format('F Y') }} -
                            {{ $item['end_date'] ? \Carbon\Carbon::parse($item['end_date'])->format('F Y') : 'Present' }}
                        </p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>



@endsection
