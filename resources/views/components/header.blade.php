<header>

    @php
        $nav = ['Home', 'Prodotti', 'News'];
    @endphp

    <div class="container">

        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">

        <nav class="header-nav">
            @foreach ($nav as $navItem)
                <div class="header-nav-item"><a class="nav-text" href="#">{{$navItem}}</a></div>
            @endforeach
        </nav>

    </div>

</header>
