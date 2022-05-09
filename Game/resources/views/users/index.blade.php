@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Profile details
            </h1>
        </div>
    </div>

    <div class="m-auto w-5/6 py-10">
        <div class="m-auto">
            <div class="float-right">
                <form action="/level" method="POST">
                    @csrf
                    @method('POST')
                    <input type="number" name="experience" step="100" value="{{ $user->experience }}" class="text-lg text-gray-700 py-6" />
                    <button class="border-b-2 pb-2 border-dotted italic text-red-500">
                        Level up &rarr;
                    </button>
                </form>
                <form action="/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="border-b-2 pb-2 border-dotted italic text-red-500">
                        Delete &rarr;
                    </button>
                </form>
            </div>
            <h2 class="text-gray-700 text-5xl">
                {{ $user->name }}
            </h2>
            <hr class="mt-4 mb-8">
        </div>
    </div>
@endsection
