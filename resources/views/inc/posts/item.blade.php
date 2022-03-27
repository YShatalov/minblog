<div class="px-4 py-8 max-w-xl rounded-3xl">
    <div class="bg-gray-600 shadow-2xl rounded-3xl" >
        <div>
            <a href="{{route('rec-data-one', $el->id)}}">
                <img src="/storage/posts/{{$el->thumbnail}}" class="rounded-3xl">
            </a>
        </div>

        <div class="px-4 py-2 mt-2">
            <h2 class="font-bold text-2xl text-white">{{ $el->title }}</h2>
            <p class="sm:text-sm text-xs text-gray-200 px-2 mr-1 my-3">
                {!! $el->preview !!}
            </p>
        </div>
    </div>
</div>