<x-layout>
    <x-slot:heading>
        Главная
    </x-slot:heading>
    <ul>
        @foreach ($skills as $skill)
            <a href="/{{ $skill['id'] }}" class="text-blue-700 hover:underline">
                <li><strong>{{ $skill['name'] }}</strong>, коммерческий опыт <strong>{{ $skill['experience']}}</strong></li>
            </a>
        @endforeach
    </ul>
</x-layout>