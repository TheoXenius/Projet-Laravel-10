@extends('base')

@section('title', 'Menu')

@section('content')
    <section>
      <h2>Menu</h2>
      @foreach ($categories as $categorie)
      <div>
        <h3>{{ $categorie->titre }}</h3>
        <ul class="plats">
          @for ($i = 0; $i< 5; $i++)
          <li>
            <img src="/images/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" alt="ciotola di insalate di verdure" />
            <h4>Lorem ipsum dolor</h4>
            <span class="prix">7,00 eur</span>
          </li>
          @endfor
        </ul>
      </div>
      @endforeach
    </section>
@endsection
