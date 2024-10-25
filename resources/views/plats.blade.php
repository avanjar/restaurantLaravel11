@extends('base')
@section('content')
<img class="gateau" src="{{asset('./image/cake.png')}}" alt="image dessert gateau">
<p>gateau au chocolat</p>
<p>prix:5£</p>
<img class="burger" src="{{asset('./image/hamburger.png')}}" alt="plat poisson">
<p>burger</p>
<p>prix:12£</p>
<img class="salad" src="{{asset('./image/salad.png')}}" alt="salade">
<p>salade</p>
<p>prix:8£</p>
<img src="" alt="soupe">
<p>soupe</p>
<p>prix:6£</p>
<ul>
    @foreach ($produits as $produits)
    <li>{{$produits->nomp}}
        {{$produits->prix}}
        {{ $produits->descriptionp}}
     </li>
        
    @endforeach
</ul>
   
@endsection