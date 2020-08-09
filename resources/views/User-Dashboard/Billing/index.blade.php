@extends('Layouts.userlayout')

@section('title', 'SourceWater-Bills')

@section('content')
   <div class="container  my-5 py-5">
       @if (Session::has('info'))
           <div class="alert alert-danger">
               {{Session::get('info')}}
           </div>
       @endif
        <div class="row my-5">
            <div class="col-md-4">
                @include("Partials.userMenu")
            </div>
            <div class="col-md-8 bg-white py-2" style="border-radius: 10px">
                 <h4>Bills</h4>
                <hr>
                @foreach($userbills as $bill)
                    <div class="container-fluid">
                        <div class="row bg-light">
                        <div class="col-md-4 text-white" id='userid'><p><a class="btn" style="background-color: rgb(89, 207, 234);">{{$bill->id}}</a></p></div>
                        <div class="col-md-4" id="username"><p>{{$bill->name}}</p></div>
                            <div class="col-md-4" id="billbuttons">
                                <p class="btn mt-2 mr-1 text-white" style="background-color: rgb(89, 207, 234);">View</p>
                            <p class="btn mt-2" style="background-color: rgb(89, 207, 234);"><a class="text-white" href="{{route('bill.delete', ['id' => $bill->id])}}">Delete</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid bg-light">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-light">
                                    <thead>
                                        <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Previous Meter Reading</th>
                                        <th scope="col">Current Meter Reading</th>
                                        <th scope="col">Consumption</th>
                                        <th scope="col">Bill Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$bill->name}}</td>
                                            <td>{{$previousdatebill}}</td>
                                            <td>{{$currentdatebill}}</td>
                                            <td>{{$consumption}}</td>
                                            <td>{{$currentdate}}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total Amount(RWF)</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{335}}Rwf</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$userbills->links()}}
            </div>
        </div>
    </div>
@endsection

