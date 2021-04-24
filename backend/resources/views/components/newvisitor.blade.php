<style>
    main{
        background-color: rgba(87, 87, 87,.7)
    }
</style>
<div class="absloute border-2 t-4 l-4 z-10 bg-white" style="width:90vw;hegiht:90vh;">
    <h2 class="text-3xl text-center my-4">ようこそ！</h2>
    <a href="" class="text-2xl text-center my-2">使い方について</a>
    <a class="text-2xl text-center my-2">プライバシーポリシー</a>
    <p>※このサイトでは投稿履歴機能のためにクッキーを利用します。</p>
    <form  method="POST" action="/SunDock/new">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            利用開始
           </button>
    </form>
</div>