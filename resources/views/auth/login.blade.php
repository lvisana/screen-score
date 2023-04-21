@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="h-100  pt-4 pb-5 d-flex align-items-center">
        <section class="container-xl" id="login">

            <div class="bg-primary w-100 shadow-sm rounded-3 py-3 px-4">

                @include('components.logo')

                <div class="text-center mt-4">
                    <h1 class="fw-semibold fs-4">Sign In</h1>
                    <p class="text-secondary">Login to stay connected.</p>
                </div>

                <form method="POST" action="{{route('authenticate')}}" class="d-flex flex-column gap-4 text-secondary">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="rounded-4 accent-light form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 accent-light form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="center-container">
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Sign In">
                    </div>
                </form>
                
                <p class="text-center text-secondary my-4">Not registered yet? <a href="{{route('register')}}" class="fw-bold link-dark link-underline link-underline-opacity-0">Sign Up</a></p>
            </div>
            
        </section>
    </div>
@endsection