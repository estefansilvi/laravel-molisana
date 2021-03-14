@extends('templates.base')
@section('page-title')
    Homepage
@endsection
@section('content')
<main class="homepage-main">

  <div class="container">

      {{--  pasta lunga --}}
      @include('components.typology-section',['titolo' => 'LE LUNGHE', 'paste'=> $pastaArray,'tipo'=>'lunga'])

      {{-- end pasta lunga --}}

      {{-- pasta corta --}}
      @include('components.typology-section',['titolo' => 'LE CORTE', 'paste'=> $pastaArray,'tipo'=>'corta'])

      {{-- end pasta corta --}}

      {{--  pasta cortissima --}}
      @include('components.typology-section',['titolo' => 'LE CORTISSIME', 'paste'=> $pastaArray,'tipo'=>'cortissima'])

      {{-- end pasta cortissima --}}

  </div>
               

</main>
@endsection

        

    