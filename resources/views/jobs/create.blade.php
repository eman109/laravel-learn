<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <h2 class="font-bold twxt-lg">{{$job['title']}}</h2>

    <p>
        This job Pays {{$job['salary']}} per year.
    </p>
</x-layout>