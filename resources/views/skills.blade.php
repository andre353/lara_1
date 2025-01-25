<x-layout>
    <x-slot:heading>
        Навыки
    </x-slot:heading>
    <ul>
        @foreach ($skills as $skill)
            <li>
                <a href="/skills/{{ $skill['id'] }}" class="text-gray-800 hover:underline">
                    <strong>{{ $skill['name'] }}</strong>, коммерческий опыт <strong>{{ $skill['experience']}}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>