
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <h class="card-body-title tx-20 tx-bold tx-black-5 text-center">Edit Book</h6> -->

    <div class="row justify-content-center p-5">
            
    <div class="col-md-8">
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
        <div class="card">


            <table class="table">
                <thead class="thead-light">
                <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <!-- <th scope="col">Action</th> -->
                        
                        </tr>
                </thead>
                <tbody>
                    <td>{{$book->id}}</td>
                    <td>{{$book->Title}}</td>
                    <td>{{$book->Category}}</td>
                    <td>{{$book->Author}}</td>
                    <td>${{$book->Price}}</td>
                    <td>{{$book->Quantity}}</td>


                
                </tbody>
                    
            </table>
        <!-- for pagination -->
        
        
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
        <div class="card-header bg-white text-center bg-white p-3">Update Book Info</div>
            
            <div class="card-body">
                <form action="{{ route('save-edit', $book->id) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" value="{{ $book->Title }}" name="title" aria-describedby="emailHelp" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <input type="text" class="form-control" value="{{ $book->Category }}" name="category" aria-describedby="emailHelp" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" value="{{ $book->Author }}" name="author" aria-describedby="emailHelp" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" value="{{ $book->Price }}" name="price" aria-describedby="emailHelp" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" value="{{ $book->Quantity }}" name="quantity" aria-describedby="emailHelp" placeholder="Category">
                    </div>
                    
                    <button type="submit" class="btn btn-primary ml-2">Update</button>
                    <a href="{{ url()->previous() }}" class="btn btn-warning text-white">back</a>

                </form>
            </div>


        </div>
      </div>
    </div>
</div>
@endsection

<!--  -->



