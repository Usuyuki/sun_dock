
<div class="flex justify-center items-center absolute border-2 z-10 bg-white" style="top:2vh;right:5vw;width:90vw;height:90vh;">
    <style>

        main{

            background-color: rgba(87, 87, 87,.7)
        }
        </style>
    <div class="mx-auto text-center">
        <h2 class="text-3xl my-4">ようこそ！</h2>

        <p><a href="" class="text-2xl text-center my-2">使い方について</a></p>
        <p><a class="text-2xl text-center my-2">プライバシーポリシー</a></p>
        <p class="mt-20">※このサイトでは投稿履歴機能のためにクッキーを利用します。</p>
        <form  method="POST" action="/SunDock/new">
            @csrf
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                利用開始
            </button>
        </form>
    </div>
</div>