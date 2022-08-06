
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ml-5">
        <a href="{{ route('admin-dashboard') }}" class="btn btn-warning text-white">back</a>

    </div>
    <h6 class="card-body-title tx-20 tx-bold tx-black-5 mg-b-8 text-center">Total Books: {{ count($books) }}</h6>


    <div class="row justify-content-center p-5">
            
        <div class="col-md-9">
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
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                        <th scope="col"> </th>
                        <!-- <th scope="col">Action</th> -->
                        
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($books as $b)
                        <tr>
                            <th>{{$b->id}}</th>
                            <td>{{$b->Title}}</td>
                            <td>{{$b->Category}}</td>
                            <td>{{$b->Author}}</td>
                            <td>${{$b->Price}}</td> 
                            <td>{{$b->Quantity}}</td> 
                            
                            <td>
                                @if($b->created_at == NULL)
                                    <span class="text-danger">No Date set.</span>
                                @else 
                                {{$b->created_at->diffForHumans() }}
                                @endif
                            </td>
                            </td>
                            <td><a href="{{ route('edit-book', $b->id) }}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{ route('del-book', $b->id) }}" onclick="return confirm('You are about to permanently delete a record.') " class="btn btn-danger">Del</a></td>

                            
                        </tr>
                        @endforeach

                    
                    </tbody>
                        
                </table>
            <!-- for pagination -->
            
            
            </div>
            

        </div>
        <!-- 2nd row -->

        <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-white text-center bg-white p-3">Add Books</div>
            <div class="card-body">
                <form action="{{ route('add-book') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="title" required>
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <input type="text" class="form-control" name="category" aria-describedby="emailHelp" placeholder="category" required>
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="author" aria-describedby="emailHelp" placeholder="author" required>
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="price" aria-describedby="emailHelp" placeholder="price" required>
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" aria-describedby="emailHelp" placeholder="quantity" required>
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-success ">Add Book</button>
                    <!-- <a href="{{ route('admin-dashboard') }}" class="btn btn-warning text-white">back</a> -->

                </form>
            </div>
            

        </div>
        
      </div>

    </div>
</div>
@endsection

<!--  -->
