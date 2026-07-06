<x-layout title="home">
    <h1>HELLO WORLD</h1>
    {{ $greeting }} , {{$person}}! 
    @if(count($tasks) > 0)
        <p > yes i have some tasks for you</p>
        <p> nomber of tasks : {{ count($tasks) }}</p>
    @endif
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach 
    @if (!count($names))
        <p>no names</p>
    @endif
    @unless (count($names))
        <p>no names</p>
    @endunless
    @forelse ($names as $name)
        <li>{{$name}}</li>
    @empty
        <p>no names</p>
    @endforelse
    @can('edit', $person)
        <p>you can edit this person</p>
    @else
        <p>you cannot edit this person</p>
    @endcan
        
    <x-card class="max-w-400" >
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
        <a href="/idea">Idea</a>
    </x-card>
</x-layout>