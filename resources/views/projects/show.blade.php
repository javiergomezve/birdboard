@extends('layouts.app')

@section('content')

    <header class="flex items-end justify-between mb-3 py-4">
        <p class="text-gray-600">
            <a href="/projects">My Projects</a> / {{ $project->title }}
        </p>
        <a href="/projects/create" class="button">New project</a>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-gray-600 text-lg mb-3">Tasks</h2>
                    {{-- tasks --}}
                    <div class="card mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="card mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>

                <div class="">
                    <h2 class="text-gray-600 text-lg mb-3">General notes</h2>
                    {{-- general notes --}}
                    <textarea class="card w-full" style="min-height: 200px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aperiam blanditiis consequatur dicta ea expedita facilis fuga minus mollitia, nobis pariatur placeat quisquam, tenetur, voluptates? Inventore optio quasi reiciendis!
                    </textarea>
                </div>
            </div>


            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>

@endsection
