<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between mr-48">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{ route('people.register') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Criar registro</a>
                    </div>
                    <form action="{{ route('people.filter') }}" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="Filtrar">
                        <select name="type_filter" id="type_filter" placeholder="campo">
                            <option value="name">Nome</option>
                            <option value="email">Email</option>
                            <option value="phone">Telefone</option>
                            <option value="birthdate">Idade</option>
                        </select>
                        <button class="py-2 px-4 border-2 rounded" type="submit">Filtrar</button>
                    </form>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="my-4">
                            <h3 class="text-green-600 text-lg">{{session('success')}}</h3>
                        </div>

                    @endif
                    <div class="flex">
                        <div>
                            <h1 class="mb-2 text-md uppercase font-bold">Nome</h1>
                            @foreach ($people as $person)
                                <p>{{$person->name}}</p>
                            @endforeach
                        </div>
                        <div class="px-12">
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
                        <div class="px-12">
                            <h1 class="mb-2 text-md uppercase font-bold">Nascimento</h1>
                            @foreach ($people as $person)
                                <p>{{str_replace('-', '/', date('d-m-Y', strtotime($person->birthdate)))}}</p>
                            @endforeach
                        </div>
                        <div>
                            <h1 class="mb-2 text-md uppercase font-bold">Exclus??o</h1>
                            @foreach ($people as $person)
                            <form action="{{ route('people.destroy', $person->id) }}" method="post">
                                @csrf                                
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit">Deletar</button>
                            </form>
                            @endforeach
                        </div>
                        <div class="px-12">
                            <h1 class="mb-2 text-md uppercase font-bold">Edi????o</h1>
                            @foreach ($people as $person)
                            <form action="{{ route('people.edit', $person->id) }}" method="get">
                                @csrf                                
                                    <button type="submit">Editar</button>
                            </form>
                            @endforeach
                        </div>
                    </div>
                    {{$people->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
