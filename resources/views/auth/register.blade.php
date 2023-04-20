@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <main class="d-flex align-items-center">
        <section class="container-xxl" id="signup">

            <div class="bg-primary w-100 shadow-sm rounded-3 py-3 px-4">

                @include('components.logo', ['name' => 'Notes'])

                <div class="text-center mt-4">
                    <h1 class="fw-semibold fs-4">Sign up</h1>
                    <p class="text-secondary">Create your account.</p>
                </div>

                <form method="POST" action="{{route('register.save')}}" class="d-flex flex-column gap-4 mb-3 text-secondary">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="rounded-4 accent-light form-control" id="name" name="name" placeholder="Name" required>
                        <label for="name">First name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="rounded-4 accent-light form-control" id="surname" name="surname" placeholder="Surname" required>
                        <label for="lastname">Surname</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="rounded-4 accent-light form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 accent-light form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 accent-light form-control" id="conf-password" name="conf-password" placeholder="Confirm Password" required>
                        <label for="conf-password">Confirm Password</label>
                    </div>

                    <div class="center-container">
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Sign Up">
                    </div>
                </form>
                
                <p class="text-center text-secondary my-4">Already have an account? <a href="{{route('login')}}" class="fw-bold link-dark link-underline link-underline-opacity-0">Sign In</a></p>
            </div>
            
        </section>
    </main>
@endsection

{{-- $errors->get('password_confirmation') --}}