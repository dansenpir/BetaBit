<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('people.register') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Criar registro</a>
                    <a href="{{ route('people.edit') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Editar registro</a>
                    <a href="{{ route('people.remove') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Remover registro</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex">
                        <div>
                            <h1 class="mb-2 text-md uppercase font-bold">Nome</h1>
                            @foreach ($people as $person)
                            <p>{{$person->name}}</p>
                            @endforeach
                        </div>
                        <div class="px-24">
                            <h1 class="mb-2 text-md uppercase font-bold">Email</h1>
                            @foreach ($people as $person)
                            <p>{{$person->email}}</p>
                            @endforeach
                        </div>
                        <div>
                            <h1 class="mb-2 text-md uppercase font-bold">Telefone</h1>
                            @foreach ($people as $person)
                            <p>{{$person->phone}}</p>
                            @endforeach
                        </div>
                        <div class="px-24">
                            <h1 class="mb-2 text-md uppercase font-bold">Nascimento</h1>
                            @foreach ($people as $person)
                            <p>{{str_replace('-', '/', date('d-m-Y', strtotime($person->birthdate)))}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
