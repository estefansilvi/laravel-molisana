
<section>
    <h2 class="main-title">{{$titolo}}</h2>
    <div class="pasta-container">
        @foreach ($paste as $item)
            @if ($item['tipo'] === $tipo)
              <a class="poster" href="{{route('single-product',['id' => $loop->iteration,'tipo' => $item['tipo']])}}"><img src="{{$item['src']}}" alt="" ></a>
            @endif
        @endforeach
    </div>
</section>
