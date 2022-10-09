@extends('layouts.front_end.frontend')

@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">


            @foreach ($productes as $producte)

            <div class="col-lg-3">
                <div class="right-content">
                    <div class="row">

                            <div class="col-lg-12">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>{{ $producte->name }}</h4>
                                            <span>{{ $producte->description }}</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>{{ $producte->name }}</h4>
                                                <p>{{ $producte->description }}
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('details_producte' , $producte)}}">Details Producte !!</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image Product">
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
<!-- ***** Main Banner Area End ***** -->



@endsection


