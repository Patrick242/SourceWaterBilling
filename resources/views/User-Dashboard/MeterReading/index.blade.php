@extends('Layouts.userlayout')

@section('title', 'SourceWater-MeterReadingCalculator')

@section('content')
   <div class="container  my-5 py-5">
        <div class="row">
            <div class="col-md-4">
                @include("Partials.userMenu")
            </div>
            <div class="col-md-8 bg-white py-2" style="border-radius: 10px">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                 <h4>Meter Calculator</h4>
                <hr>
        <form action="{{route('meter.create.bill')}}" method="POST">
                <div class="form-group">
                    <label for="first-name">Full-Name</label>
                    <input class="form-control" type="text" name="name" id="firstname" value='{{Auth::user()->name}}' required>
                </div>

                <div class="form-group">
                    <label for="card-number">Card-Number</label>
                    <input class="form-control" type="number" name="cardnumber" id="card-number" required>
                </div>

                <div class="form-group">
                    <label for="meter-reading">Current-Meter-Reading</label>
                    <input class="form-control" type="text" name="currentmeterreading" id="meter-reading" required>
                </div>

                <div class="form-group">
                    {{csrf_field()}}
                    <input type="submit" class="form-control btn" style="background-color: rgb(89, 207, 234);" value="submit-readings" name="Calculate-Bill">
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

