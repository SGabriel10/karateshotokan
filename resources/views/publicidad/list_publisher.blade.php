<div class="slideshow-container">
@foreach($images as $item)
    <div class="mySlides fade" id="imagenes">
        <img src="{{asset('/images/'.$item->url)}}" height="90" width="200">
    </div>

@endforeach
</div>
<br>
<div style="text-align:center" id="buttons" >
@foreach($images as $item)
    <span class="dot"></span> 
@endforeach
</div>