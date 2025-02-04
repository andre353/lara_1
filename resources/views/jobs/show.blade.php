<x-layout>
    <x-slot:heading>
        Вакансии: {{ $job->title }}
    </x-slot:heading>
    <p class="mb-6">
        Зарплата: {{ $job->salary }}
    </p>

    @can('edit', $job)
        <p>
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>