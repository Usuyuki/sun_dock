
<div class="sunDock-frame m-4">
    <a href="{{url('/SunDock/post')}}/{{$uuid}}">
        <div class="p-12">
            
            
            <p class="p-4 text-lg">{{$content}}</p>
        </div>
        <div class="p-12">
            <p class="text-xs text-right mr-12"> {{$date}}</p>
            <div class="flex ">
                
                <a href=""><i class="far fa-heart"></i>+{{$reaction_count_heart}}</a>
                <a href=""><i class="fas fa-hands-wash"></i>+{{$reaction_count_cheer}}</a>
                <a href=""><i class="far fa-sad-tear"></i>+{{$reaction_count_tear}}</a>
            </div>
            
        </div>
    </a>
</div>