<x-layout>
    <x-slot:heading>
        Вакансии: {{ $job['title'] }}
    </x-slot:heading>
    <p>
        Зарплата: {{ $job['salary'] }}
    </p>
</x-layout>