<div id="comicCardMain" class="full_box">
    <div class="my_box_container py-5 position-relative">
        <div class="row mb-5">
            @foreach ($comics as $comic)
                <div id="comicCard" class="col-6 col-md-4 col-lg-2 p-2">
                    <div class="mb-3">
                        <a href="{{ url($comic['link']) }}"><img src="{{ $comic['thumb'] }}" alt="" /></a>
                    </div>
                    <div>
                        <p class="mb-0">{{ $comic['series'] }}</p>
                        <span>{{ $comic['type'] }}</span><br />
                        <span>{{ $comic['price'] }}</span><br />
                    </div>
                </div>
            @endforeach
        </div>
        <div class="comic_label">CURRENT SERIES</div>
        <div class="text-center">
            <span class="comic_button">LOAD MORE</span>
        </div>
    </div>
</div>
