<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="text-2xl text-black-700">
                            Las tecnologias que he utilizado
                        </p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p>Laravel como Framework de PHP</p>
                        <p>Laravel Breeze para Autenticacion</p>
                        <p>Tailwind.css para el Frontend</p>
                        <p>Goute para Web Scraping</p>
                        <p>Eloquent como ORM de Laravel</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="text-3xl text-black-700">
                            Relaciones de los Modelos
                        </p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="text-2xl text-black-700">Relaciones de los modelos
                            <img src="{{ asset('images/relaciones.png')}}" alt="">
                        </p>
                        <p class="text-2xl text-black-700">Todas las tablas de la base de Datos
                            <img src="{{ asset('images/relaciones completas.png')}}" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>