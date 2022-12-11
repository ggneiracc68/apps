<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl  sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome />  -->

@extends('pagPlantilla')

@section('titulo')
    <h1>Página de galeria </h1>
    <h3>Fotos... {{ $valor }} {{ $otro }}</h3> 
@endsection

            </div>
        </div>
    </div>
</x-app-layout>
