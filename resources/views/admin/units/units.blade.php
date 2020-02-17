@extends('layouts.app')
@section('content')


    <div class="toast" role="alert" style="position: absolute;z-index: 9999;top: 5%; right:5%;"
         xmlns="http://www.w3.org/1999/html">
        <div class="toast-header">
            <strong class="mr-auto">Unit</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            @if (Session::has('message'))
                {{Session::get('message') }}
            @endif
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Units</div>

                <div class="card-body">




                   <form action="{{route('units')}}" method="post" class="row">
                     @csrf
                           <div class="form-group col-md-6" >
                               <label for="unit_name">Unit Name</label>
                               <input type="text" class="form-control" id="unit_name"  name="unit_name" placeholder="Unit Name " required>
                           </div>




                       <div class="form-group col-md-6">
                           <label for="unit_code">Unit Code</label>
                           <input type="text" class="form-control" id="units_code" name="units_code" placeholder="Unit Code " required>
                       </div>



                       <div class="form-group col-md-12">

                           <button type="submit" class="btn btn-primary"> Save new unit</button>

                       </div>



                   </form>

                    <div class="row">


                        @foreach( $units as $unit )

                            <div class="col-md-3">
                                <div class="alert alert-primary" role="alert">

                                  <span class="buttons-span">
                                      <span><a href="delete-unit"><i class="fa fa-trash" ></i></a></span>
                                      <span><a href="edit-unit"><i class="fas fa-edit"></i></a></span>

                                  </span>
                                    <p> {{ $unit->unit_name }} , {{ $unit->units_code }}</p>

                                </div>
                                </div>

                        @endforeach
                    </div>

                    {{$units->links()}}


                </div>
            </div>
        </div>
    </div>

</div>


@endsection
<span>
                                        <form action="{{route('units') }}" method="post"  style="position: relative">

                                             <input type="hidden" name="_method" value="delete"/>
                                             <input type="hidden" name="units_id"  value="{{ $unit->id }}">
                                            <button type="submit" class="delete-btn"> <i class="fa fa-trash" ></i></button>
                                        </form>
                                    </span>

@if (Session::has('message'))
@section('scripts')

    <script>
        jQuery(document).ready(function ($) {

            var $toast = $('.toast').toast({
                autohide : false
            });
            $toast.toast('show');
        });

    </script>
@endsection


@endif

