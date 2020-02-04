
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reviews</div>

                    <div class="card-body">

                        <div class="row">


                            @foreach( $reviews as $review )

                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <h5> {{ $review->coustmer->formattedName()}} </h5>
                                        <p>Product: {{ $review->product->title}} </p>
                                        <p>Stars:
                                            @for($i=0;$i<$review->stars;$i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>

                                            @endfor
                                        </p>
                                        <p> Review :{{ $review->review}} </p>
                                        <p>Date:{{$review->humanForamttedDate()}}</p>






                                    </div>
                                </div>

                            @endforeach
                        </div>

                        {{$reviews->links()}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
