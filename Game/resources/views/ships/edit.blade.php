@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update ship
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">


        <form action="/ships/{{ $ship->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <a href="/ships" class="border-b-2 pb-1 border-dotted italic text-gray-600">
                    &larr; Back
                </a>
                <input
                    class="mt-3 block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="name"
                    placeholder="Type..."
                    value="{{ $ship->name }}">
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="faction"
                    placeholder="Faction..."
                    value="{{ $ship->faction }}">
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="laid_down"
                    placeholder="laid down..."
                    value="{{ $ship->laid_down }}">
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="greeting"
                    placeholder="Greeting"
                    value="{{ $ship->greeting }}">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
