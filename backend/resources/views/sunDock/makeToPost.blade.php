@extends("layouts.main")
@section("title","sun_dock_new")
@section('content')

    <div class="justify-center flex">
      
            <form  method="POST" action="/SunDock/post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <h3 class="text-center text-4xl"> </h3>
                    <label class="block">
                        <span class="text-gray-700">内容</span>
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
@endsection