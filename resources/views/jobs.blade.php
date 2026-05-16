<x-layout>
    <h1>⋆˚✿˖° These are 15 available IT jobs ⋆˚✿˖°</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"> {{ $job['title'] }} - Pays ₱{{ number_format($job['salary'], 2) }}<br> <br>
                </a>    
                Job Description: {{ $job['job_description'] }}
                <br>
            </li>
            <br>
        @endforeach
    </ul>
</x-layout>
