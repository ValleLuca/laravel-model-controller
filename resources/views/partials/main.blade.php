<div class="container_main mt-5">
    <div class="container">
        <div class="row row-cols-5">
            @foreach ($finale as $item=>$element)
                <div class="col text-center">
                    <div class="border border-secondary">
                        <p>{{$element->title}}</p>
                        <p>{{$element->nationality}}</p>
                        <p>{{$element->vote}}</p>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</div>
    

