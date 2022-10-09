@extends('layouts.front_end.frontend')

@section('content')
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">

                @foreach ($productes as $producte)
                    <section class="section" id="explore">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-content">


                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top"src="{{ asset('producte_img/' . $producte->image) }}"
                                                alt="Image Product">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $producte->name }}</h5>
                                                <p class="card-text">{{ $producte->description }}</p>
                                                <a href="#" class="btn btn-info">Add To Cart</a>
                                                <a href="{{route('details_producte' , $producte)}}" class="btn btn-success">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                @endforeach
            </div>

        </div>


    </div>



    {{-- <h3>{{$category->name}}</h3>

@foreach ($productes as $producte)

<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">



            <div class="main-banner" id="top">
                <div class="container-fluid">

                    <section class="section" id="explore">
                        <div class="container">
                            <div class="row">


                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top"src="{{ asset('producte_img/' . $producte->image) }}" alt="Image Product">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$producte->name}}</h5>
                                        <p class="card-text">{{$producte->description}}</p>
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>

            </div>
            </div>
            </section>


        </div>


    </div>
</div>
@endforeach --}}
@endsection
