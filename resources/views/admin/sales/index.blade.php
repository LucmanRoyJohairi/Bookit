
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ml-5">
        <a href="{{ url()->previous() }}" class="btn btn-warning text-white">back</a>

    </div>
    
    <h6 class="card-body-title tx-20 tx-bold tx-black-5 mg-b-8 text-center">Total sales: {{ count($sales) }}</h6>


    <div class="row justify-content-center p-5">
            
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title pl-5 pr-5 pb-2 pt-3">Total Profit</h5>
                    <h1 class="card-title pl-5 pr-5 pb-2 pt-3 text-success">$ {{ $total}}</h1>
                    @if($latest)

                        <h6 class="card-subtitle mb-2 text-muted p-3">Last updated: {{ $latest->created_at->diffForHumans()}} </h6>
                    @endif
                    </div>

            
            </div>
        </div>
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
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date</th>
                        <th scope="col">Customer</th>

                       <!-- <th></th> -->
                        <!-- <th scope="col">Action</th> -->
                        
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($sales as $s)
                        <tr>
                            <th>{{$s->id}}</th>
                            <td>{{$s->book_name}}</td>
                            <td>{{$s->price}}</td>
                            <td>{{$s->quantity}}</td>
                            <td>{{$s->total_payment}}</td>
                            <td>
                                @if($s->created_at == NULL)
                                    <span class="text-danger">No Date set.</span>
                                @else 
                                {{$s->created_at->diffForHumans() }}
                                @endif
                            </td>
                            <td>{{$s->user->name}}</td>
                            <!-- <td><a href="" class="btn btn-success">view</a></td> -->
                            
                        </tr>
                        @endforeach
                       
                    </tbody>
                        
                </table>
            <!-- for pagination -->
            
            
            </div>
            

        </div>
        <!-- 2nd row -->

        

    </div>
</div>
@endsection

<!--  -->
