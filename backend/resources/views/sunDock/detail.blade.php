@extends("layouts.main")
@section("title","sun_dock_detail")
@section('content')

    <div class="board-main">
        <div class="flex m-12">
          
            @foreach($comments as $comment )
                @component('components.commentFrame')
                    @slot("content")
                    {{$sunDock->content}}
                    @endslot
                    @slot("date")
                    {{$sunDock->created_at}}
                @endcomponent
        @endforeach
  
        </div>
        <div>
            @component("components.plusButton")
            @endcomponent
        </div>

    </div>
   @if($is_identifier)
   @else
    @component("components.newvisitor")
    @endcomponent
   @endif
@endsection