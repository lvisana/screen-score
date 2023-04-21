@extends('layouts.app')

@section('title')
    Update account
@endsection

@section('content')

        <section class="pt-4 pb-5 my-4 container-xl" id="update">
            <div class="bg-primary d-flex align-items-center gap-2 shadow-sm rounded-4 p-4">
                <i class="fa-solid fa-user icon-md"></i>
                <h1 class="secondary-font fw-semibold fs-6 m-0">Update account</h1>
            </div>

            <div class="bg-primary w-100 shadow-sm py-3 mb-5 rounded-3">

                <div class="px-4">
                    <h2 class="fw-bold secondary-font fs-4 py-2">Edit profile</h2>
                </div>

                <hr class="w-100">

                <form method="POST" action="" class="px-4 d-flex flex-column gap-4 mb-5 text-secondary">
                    <div class="form-floating">
                        <input type="text" class="rounded-4 accent-light form-control" id="name" placeholder="Name">
                        <label for="name">First name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="rounded-4 accent-light form-control" id="lastname" placeholder="Lastname">
                        <label for="lastname">Last name</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="rounded-4 accent-light form-control" id="email" placeholder="Email">
                        <label for="email">Email address</label>
                    </div>

                    <div>
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Update">
                    </div>
                </form>
                
            </div>

            <div class="bg-primary w-100 shadow-sm py-3 mb-5 rounded-3">

                <div class="px-4">
                    <h2 class="fw-bold secondary-font fs-4 py-2">Edit password</h2>
                </div>

                <hr class="w-100">

                <form method="POST" action="" class="px-4 d-flex flex-column gap-4 text-secondary">
                    <div class="form-floating">
                        <input type="password" class="rounded-4 accent-light form-control" id="cur-password" name="cur-password" placeholder="Current Password">
                        <label for="cur-password">Current Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 accent-light form-control" id="new-password" name="new-password" placeholder="New Password">
                        <label for="new-password">New Password</label>
                    </div>

                    <div>
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Update">
                    </div>
                </form>
            </div>
            
        </section>
@endsection