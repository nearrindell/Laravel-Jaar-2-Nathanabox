<x-layout>
        <x-slot:heading>
                Job Listing
        </x-slot:heading>

        <ul>

        </ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id']}}" class="text-purple-500 hover:underline">
            <strong>{{ $job['title']}}:</strong> Pays {{$job['salary']}} per year.
        </li>
        @endforeach


</x-layout>