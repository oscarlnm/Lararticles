@extends('layouts.app')

@section('title', 'Blog Laravel 11')

@push('css')
    <style>
        body{
            background-color:rgba(255, 231, 197, 0.927);
        }
    </style>
@endpush
@push('css')
    <style>
        body{
            color:rgb(0, 0, 0);
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        {{--<h1>Welcome to the homepage</h1>--}}
        <x-alert2 type="success" class="mb-4">
            <x-slot name="title" >
                Title
            </x-slot>
            Here is the alert content
        </x-alert2>

        <p>Hola mundo</p>
    </div>
@endsection
    