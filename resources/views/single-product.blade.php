@extends('templates.base')
@section('page-title')
{{$pastaSelezionata['titolo']}}
@endsection
@section('content')

  <div id="single-product">

      <main class="products-main">

        <div class="container">
          <h2>{{$pastaSelezionata['titolo']}}</h2>
          <img src="{{$pastaSelezionata['src-h']}}" alt="">
          <img src="{{$pastaSelezionata['src-p']}}" alt="">
          <p class="product-description">{!!$pastaSelezionata['descrizione']!!}</p>
        </div>

      </main>
    
  </div>

@endsection 

