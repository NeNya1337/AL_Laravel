@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Show details
            </h1>
        </div>
    </div>

    <div class="m-auto w-5/6 py-10">
        <div class="m-auto">
            <div class="float-right">
                <div class="inline-block">
                    <a href="/userships" class="border-b-2 pb-2 border-dotted italic text-gray-600">
                        &larr; Back
                    </a>
                    <a href="/userships/{{ $ship->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">
                        Edit &rarr;
                    </a>
                </div>
            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                        build in {{ $ship->laid_down }}
                    </span>
            <h2 class="text-gray-700 text-5xl">
                {{ $ship->faction.' '.$ship->name }}
            </h2>
            <p class="text-lg text-gray-700 py-6">
                Level {{ $ship->level }}
            </p>
            <p class="text-lg text-gray-700 py-6">
                {{ $ship->greeting }}
            </p>
            <hr class="mt-4 mb-8">
        </div>
    </div>
@endsection
