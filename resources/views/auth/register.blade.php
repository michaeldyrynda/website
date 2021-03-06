
@extends('frontend.master')

@section('content')


<div class="container content-center">
    <div class="flex content-center">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
            <div class="text-blue-lightest shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col bg-blue-dark">
                <div class="mb-4">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="name">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Username">
        
                    @if ($errors->has('name'))
                    <span class="">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="name" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
        
                    @if ($errors->has('email'))
                    <span class="">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="location">
                        Location
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-lightest" id="location" type="text" name="location" value="{{ old('location') }}" placeholder="Location">
        
                    @if ($errors->has('location'))
                    <span class="">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                </div>





                <div class="mb-6">
                    <label class="block text-blue-lightest text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
                    <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded" type="button">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-white hover:text-blue-darker" href="{{ route('password.request') }}">
                    Forgot </br> Password?
                </a>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-white hover:bg-red-dark py-2 px-4 rounded" type="button">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-white hover:text-blue-darker" href="{{ route('password.request') }}">
                    Forgot </br> Password?
                </a>
            </div>
            </div>
        </form>
    </div>
</div>

@endsection


