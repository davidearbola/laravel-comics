<div class="full_box">
    <div class="my_box_container py-5">
        <div class="row">
            <div class="col-5">
                <img class="w-100" src="{{ $thumb }}">
            </div>
            <div class="col-7">
                <h3>{{ $title }}</h3>
                <p>{{ $description }}</p>
                <p>Prezzo: {{ $price }}</p>
                <span>Serie: {{ $series }}</span><br>
                <span>Pubblicazione: {{ $sale_date }}</span><br>
                <span>Categoria: {{ $type }}</span><br>
            </div>
        </div>
    </div>
</div>
