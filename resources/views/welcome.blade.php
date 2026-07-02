<x-layout title="home">
    <h1>HELLO WORLD</h1>
    {{ $greeting }} , {{$person}}!
    <x-card class="max-w-400" >
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
    </x-card>
</x-layout>