@extends('layouts/app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Übersicht
            </h1>
        </div>
        <div class="pt-10">
            <a href="/ships/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Add a new ship &rarr;
            </a>
        </div>
        <div class="w-5/6 py-10">
            <table class="w-full border-collapse border-b-2 border-solid">
                <tbody class="">
                <tr>
                    <th class="w-1/4 border-collapse border-r border-b border-t border-l border-solid">Name</th>
                    <th class="w-1/4 border-collapse border-r border-b border-t border-l border-solid">Faction</th>
                    <th class="w-1/4 border-collapse border-r border-b border-t border-l border-solid">laid down</th>
                    <th class="w-1/4 border-collapse border-r border-b border-t border-l border-solid">Actions</th>
                </tr>
                @foreach($ships as $ship)
                    <tr>
                        <td title="{{ $ship->greeting }}" class="border-collapse border-r border-b border-t border-l border-solid">{{ $ship->name }}</td>
                        <td class="border-collapse border-r border-b border-t border-l border-solid">{{ $ship->faction }}</td>
                        <td class="border-collapse border-r border-b border-t border-l border-solid">{{ $ship->laid_down }}</td>
                        <td class="border-collapse border-r border-b border-t border-l border-solid">
                            <a href="/ships/{{ $ship->id }}" class="border-b-2 pb-2 border-dotted italic text-blue-600">
                                Show details &rarr;
                            </a>
                            <a href="/ships/{{ $ship->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">
                                Edit &rarr;
                            </a>
                            <form action="/ships/{{ $ship->id }}" method="POST" class="inline-block">
                                @csrf
                                @method('delete')
                                <button class="border-b-2 pb-2 border-dotted italic text-red-500">
                                    Delete &rarr;
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
