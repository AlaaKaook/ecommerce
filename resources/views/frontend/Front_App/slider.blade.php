<div id="myCarousel" class="carousel slide mb-4 mt-4" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        @foreach ($sliders as $slider)
            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"
                class="@if ($loop->first) active @endif"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="d-block w-100" src="{{ asset('slider_img/' . $slider->image) }}" alt="Image slide"
                    width="1498px" height="430px">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr>
<div class="mb-5"></div>
