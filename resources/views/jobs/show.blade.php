<x-layout>
    <x-slot:heading>
        Вакансии: {{ $job->title }}
    </x-slot:heading>
    <p class="mb-6">
        Зарплата: {{ $job->salary }}
    </p>

    <p>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>