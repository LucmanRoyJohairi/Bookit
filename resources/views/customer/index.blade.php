@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="card-header text-center bg-white p-3">Latest Books</h5>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <div class="row justify-content-center p-5">
        
        @foreach ($books as $b)
        <div class="col-md-4">
       
            <div class="card">
                <!-- <h5 class="card-header text-center bg-white p-3">Customers</h5> -->
                
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Title: {{$b->Title}}</h5>
                    <p class="card-text">Author: {{$b->Author}}</p>
                    <h6 class="card-subtitle mb-2 text-muted p-3">Price: ${{ $b->Price}}</h6>
                    <a href="{{ route('view-book', $b->id) }}" class="btn btn-primary align-center pl-5 pr-5" role="button" aria-pressed="true">buy</a>
                </div>
            </div>
            
        </div>
        @endforeach

        

       
        
    </div>
</div>
@endsection
