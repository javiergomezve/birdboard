<div class="card">
    <h3 class="font-normal text-xl py-3 -ml-5 mb-3 pl-4 border-l-4 border-blue-blue">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>

    <div class="text-gray-600">
        {{ \Illuminate\Support\Str::limit($project->description) }}
    </div>
</div>
