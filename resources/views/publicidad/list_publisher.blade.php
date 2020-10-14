
<div class="slideshow-container">
@foreach($images as $item)
    <div class="mySlides fade" id="imagenes">
        <img src="<?php echo cloudinary_url('https://res.cloudinary.com/freelance-developer/image/upload/v1602627801/images/'.$item->url,array('type' => 'fetch'));?>"  height="90" width="200"/>
    </div>
@endforeach
</div>
<br>
<div style="text-align:center" id="buttons" >
@foreach($images as $item)
    <span class="dot"></span> 
@endforeach
</div>