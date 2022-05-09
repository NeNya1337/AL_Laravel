@extends('layouts/app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Übersicht
            </h1>
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
                            <form action="/userships/" method="post" class="inline-block">
                                @csrf
                                <input type="hidden" value="{{ $ship->id }}" name="id" />
                                <button class="border-b-2 pb-2 border-dotted italic text-red-500">
                                    Choose &rarr;
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
