
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ml-5">
        <a href="{{ url()->previous() }}" class="btn btn-warning text-white">back</a>

    </div>
    
    <h6 class="card-body-title tx-20 tx-bold tx-black-5 mg-b-8 text-center">Total Customers: {{ count($users) }}</h6>


    <div class="row justify-content-center p-5">
            
        <div class="col-md-12">
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
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date Joined</th>
                       <!-- <th></th> -->
                        <!-- <th scope="col">Action</th> -->
                        
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($users as $u)
                        <tr>
                            <th>{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->gender}}</td>
                            <td>{{$u->dateOfBirth}}</td>
                            <td>{{$u->contact}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                @if($u->created_at == NULL)
                                    <span class="text-danger">No Date set.</span>
                                @else 
                                {{$u->created_at->diffForHumans() }}
                                @endif
                            </td>
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
