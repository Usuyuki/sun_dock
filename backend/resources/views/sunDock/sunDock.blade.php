@extends("layouts.main")
@section("title","sun_dock_new")
@section('content')

    <div class="board-main">
        <div class="flex m-12">
            @empty($sunDocks)
                <h3 class="text-center text-3xl my-20">直近1週間の投稿はありません！</h3>
            @else
            @foreach($sunDocks as $sunDock )
                @component('components.sunDockFrame')
                    @slot("content")
                    {{$sunDock->content}}
                    @endslot
                    @slot("date")
                    {{$sunDock->created_at}}
                    @endslot
                    @slot("reaction_count_heart")
                    {{$sunDock->reaction_count_heart}}
                    @endslot
                    @slot("reaction_count_cheer")
                    {{$sunDock->reaction_count_cheer}}
                    @endslot
                    @slot("reaction_count_tear")
                    {{$sunDock->reaction_count_tear}}
                    @endslot
                @endcomponent
        @endforeach
            @endempty
        </div>
        <div>
            @component("components.plusButton")
            @endcomponent
        </div>

    </div>
@endsection