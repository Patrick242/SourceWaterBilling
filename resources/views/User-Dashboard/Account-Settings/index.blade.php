@extends('Layouts.userlayout')

@section('title', 'SourceWater-AccountSettings')

@section('content')
   <div class="container  my-5 py-5">
        <div class="row my-5">
            <div class="col-md-4">
                @include("Partials.userMenu")
            </div>
            <div class="col-md-8 bg-white py-2" style="border-radius: 10px">
                 <h4>Account Settings</h4>
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

                    <div class="form-group">
                        <label for="password">Update Password</label>
                        <input type="password" class="form-control" id='password' name="password" required/>
                    </div>

                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type='submit' class='form-control text-white' style="background-color: rgb(89, 207, 234);" name='update-account' value='Update'/>
                    </div>

                    <p class="text-center font-weight-bolder w-50 mx-auto" style="border: 1px solid rgba(60, 60, 60, .8); border-radius: 20px">OR</p>
                </form>

                <div class="container-fluid my-2">
                    <div class="row">
                        <div class="col-md-12">
                            Do you want to delete your account permanently?
                            <p class="bg-primary btn w-100" style="background-color: rgb(89, 207, 234);"><a  class='text-white' href="#">Delete Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
