<x-layout>
    <x-slot:heading>
        Вакансии
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-gray-800 hover:underline">
                    <strong>{{ $job['title'] }}</strong>, зарплата: <strong>{{ $job['salary']}}</strong> руб.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>