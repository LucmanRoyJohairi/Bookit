@extends('layouts.app')

@section('content')
<div class="container">
<h6 class="card-body-title tx-20 tx-bold tx-black-5 mg-b-8 ml-5">Logged in as Administrator</h6>

    <div class="row justify-content-center p-5">
        
        <div class="col-md-4">
            <div class="card">

                <!-- <h5 class="card-header text-center bg-white p-3">Customers</h5> -->
                
                <div class="card-body text-center">
                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Customers</h5>
                    <h6 class="card-subtitle mb-2  p-3">Total: {{ count($users)}}</h6>
                    @if($latest_user)
                    <h6 class="card-subtitle mb-2 text-muted p-3">Last updated: {{ $latest_user->created_at->diffForHumans()}} </h6>
                    @endif


                    <!-- <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Books</h5> -->
                    <!-- <h6 class="card-subtitle mb-2 text-muted p-3">Total: {{ count($users) }} </h6> -->
                    <a href="{{ route('customers') }}" class="btn btn-primary align-center pl-5 pr-5" role="button" aria-pressed="true">open</a>
                </div>
            </div>
            
        </div>

        <div class="col-md-4">
            <div class="card">

                <!-- <h5 class="card-header text-center bg-white p-3">Sales</h5> -->
                
                <div class="card-body text-center">
                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Profit</h5>
                    <h1 class="card-title pl-5 pr-5 pb-2 pt-3 text-success">$ {{ $total}}</h1>
                    @if($latest)
                    <h6 class="card-subtitle mb-2 text-muted p-3">Last updated: {{ $latest->created_at->diffForHumans()}} </h6>
                    @endif

                    <a href="{{ route('show-sales') }}" class="btn btn-primary align-center pl-5 pr-5" role="button" aria-pressed="true">open</a>
                </div>
            </div>

            
        </div>

        <div class="col-md-4">
            <div class="card">

                <!-- <h5 class="card-header text-center bg-white p-3">Books</h5> -->
                
                <div class="card-body text-center">
                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Inventory</h5>


                    <!-- <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Books</h5> -->
                    <h6 class="card-subtitle mb-2  p-3">Stock: {{ count($books)}}</h6>
                    @if($latest_book)
                    <h6 class="card-subtitle mb-2 text-muted p-3">Last updated: {{ $latest_book->created_at->diffForHumans()}} </h6>
                    @endif
                    <a href="{{ route('books') }}" class="btn btn-primary align-center pl-5 pr-5" role="button" aria-pressed="true">open</a>
                </div>
            </div>



        </div>

        <!-- 2nd row -->
        

    </div>
</div>
@endsection
