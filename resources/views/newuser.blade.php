<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Criar registro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="" class="flex flex-col">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" placeholder="Insira o nome">

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="email@mail.com">

                        <label for="phone">Telefone</label>
                        <input type="tel" name="phone" id="phone" placeholder="43987654321">

                        <label for="birthdate">Data de nascimento:</label>
                        <input type="date" name="birthdate" id="birthdate">


                        <button type="submit" class="mt-4 border-2 rounded border-green-600 text-green-600">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
