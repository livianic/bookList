<x-app-layout>
    <link rel="stylesheet" href="../css/dashboard.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biblioteca') }}
        </h2>
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="adcLivro">
            <a href="{{url('register-book')}}">
                <x-secondary-button class="ms-4">
                {{ __('Adicionar Livro') }}
                </x-secondary-button>
            </a>
            
            
        </div>    
    </div>
</x-app-layout>
