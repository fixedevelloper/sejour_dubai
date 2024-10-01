@extends('base')
@section('content')
    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Procedure</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><span>Procedure</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="{{asset('assets/images/page/mask-bcrumb.png')}}" alt="">
                </div>
            </div>

        </div>
    </section>
@endsection
