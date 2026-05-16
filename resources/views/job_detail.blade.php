<x-layout>
    <h1>{{ $job['title'] }}</h1>
    <p>Monthly Salary: ₱{{ number_format($job['salary'], 2) }}</p>
    <p>Job Description: {{ $job['job_description'] }}</p>

    <a href="/jobs">Back to job list</a>
</x-layout>