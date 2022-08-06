
@extends('layouts.app')

@section('content')
<div class="container">
    <h6 class="card-body-title tx-20 tx-bold tx-black-5 mg-b-8 text-center">Book Information: </h6>


    <div class="row justify-content-center p-5">
            
        <div class="col-md-6">
            <div class="card">
                <!-- <h5 class="card-header text-center bg-white p-3">Customers</h5> -->
                
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Title: {{$book->Title}}</h5>
                    <p class="card-text">Author: {{$book->Author}}</p>
                    <h6 class="card-subtitle mb-2 text-success p-3">Price: ${{ $book->Price}}</h6>
                    <h6 class="card-subtitle mb-2 text-danger p-3">Stock Left: {{ $book->Quantity}}</h6>
                    <!-- <a href="" class="btn btn-primary align-center pl-5 pr-5" role="button" aria-pressed="true">buy</a> -->
                </div>
            </div>
            
        </div>
        <!-- 2nd row -->
        <div class="col-md-4">
        <div class="card">
        <div class="card-header bg-white text-center bg-white p-3">Confirm Purchase</div>
            
            <div class="card-body">
                <form action="{{ route('buy-book', $book->id) }}" method="POST">
                @csrf
                
                        <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="user_id" aria-describedby="emailHelp" placeholder="Category" >
                        <input type="hidden" class="form-control" value="{{ $book->id }}" name="book_id" aria-describedby="emailHelp" placeholder="Category">
                        <input type="hidden" class="form-control" value="{{ $book->Price }}" name="price" aria-describedby="emailHelp" placeholder="Category">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" value="{{ $book->Title }}" name="title" aria-describedby="emailHelp" placeholder="Category" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" aria-describedby="emailHelp" placeholder="enter amount" required>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary ml-2">Buy</button>
                    <a href="{{ url()->previous() }}" class="btn btn-warning text-white">cancel</a>

                </form>
            </div>


        </div>
            

    </div>
</div>
@endsection

<!--  -->
