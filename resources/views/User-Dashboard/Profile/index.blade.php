@extends('Layouts.userlayout')

@section('title', 'SourceWater-Profile');

@section('content')
   <div class="container  my-5 py-5">
        <div class="row my-5">
            <div class="col-md-4">
                @include("Partials.userMenu")
            </div>
            <div class="col-md-8 bg-white py-2" style="border-radius: 10px">
                 <h4>Profile</h4>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name='name' class="form-control" id='name' required value='{{$user->name}}' />
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id='email' name="email" required value='{{$user->email}}'/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
