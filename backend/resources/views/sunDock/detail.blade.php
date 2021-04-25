@extends("layouts.main")
@section("title","sun_dock_detail")
@section('content')

    <div class="board-main">
        <h2 class="text-4xl text-center my-4">本文</h2>
        <div class="flex jusitfy-center my-12 ">
            <div class="inline-block border-2 mx-auto">
                <p class="p-4 text-lg">{{$sunDock->content}}</p>
                <p class="text-xs text-right mr-12"> {{$sunDock->date}}</p>
                <div class="flex justify-center my-4">
                    
                    <a href=""><i class="far fa-heart"></i>+{{$sunDock->reaction_count_heart}}</a>
                    <a href=""><i class="fas fa-hands-wash"></i>+{{$sunDock->reaction_count_cheer}}</a>
                    <a href=""><i class="far fa-sad-tear"></i>+{{$sunDock->reaction_count_tear}}</a>
                </div>
            </div>
        </div>
        <h2 class="text-4xl text-center my-4">コメント</h2>
        <div class="w-50 mx-auto">


            <form  method="POST" action="/SunDock/comment" class=" bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <h3 class="text-center text-4xl"> </h3>
                <label class="block">
                    <span class="text-gray-700">コメントを投稿する</span>
                    <textarea name="content" class="form-textarea mt-1 block w-full" rows="20" placeholder="ここに投稿したい内容を入力してください。"></textarea>
                  </label>
            </div>
       
            <div class="flex items-center justify-center">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
               投稿
              </button>
            </div>
          </form>
        </div>
        <div class="flex m-12">
            @foreach($comments as $comment )
                @component('components.commentFrame')
                    @slot("content")
                    {{$sunDock->content}}
                    @endslot
                    @slot("date")
                    {{$sunDock->created_at}}
                    @endslot
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