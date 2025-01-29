<x-layout>
    <x-slot:heading>
        Вакансии
    </x-slot:heading>
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li class="border border-gray-200 rounded-lg">
                <article>
                    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 text-gray-800 hover:underline">
                        <span class="block font-bold text-blue-500 text-sm">{{ $job->employer->name }}</span>
                        <span><strong>{{ $job['title'] }}</strong>, зарплата: <strong>{{ $job['salary']}}</strong> руб.</span>
                    </a>
                </article>
            </li>
        @endforeach
    </ul>
</x-layout>