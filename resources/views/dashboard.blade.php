@extends('layouts.app')

@section('title')
    Your Notes
@endsection

@section('content')

<main>
        <section class="my-5 container-xxl">
              <h2 class="fs-4 bg-primary rounded-4 py-4 px-3 shadow-sm" data-bs-toggle="collapse" href="#collapseCreateNote" role="button" aria-expanded="false" aria-controls="collapseCreateNote">
                Create Note
              </h2>
              
              <div class="collapse" id="collapseCreateNote">
                <div class="card card-body shadow-sm border-0">
                  <form action="" method="POST">
                    @csrf
                    <div><input type="text" value="Title"></div>
                    <div><input type="textarea" rows="10">Description...</div>
                  </form>
                </div>
              </div>
        </section>
        
        <section class="container-xxl" id="update">

            <div class="bg-primary w-100 shadow-sm py-3 mb-5 rounded-3">

                <div class="px-4">
                    <h2 class="fw-semibold fs-4 py-2">Edit profile</h2>
                </div>

                <hr class="w-100">

                <form method="POST" action="" class="px-4 d-flex flex-column gap-4 mb-5 text-secondary">
                    <div>
                        <img class="rounded" src="https://unsplash.it/100/100" alt="">
                        <div class="mt-3">
                            <input type="file" class="rounded-4 py-3 bg-secondary form-control" id="avatar" placeholder="Avatar">
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="rounded-4 bg-secondary form-control" id="name" placeholder="Name">
                        <label for="name">First name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="rounded-4 bg-secondary form-control" id="lastname" placeholder="Lastname">
                        <label for="lastname">Last name</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="rounded-4 bg-secondary form-control" id="email" placeholder="Email">
                        <label for="email">Email address</label>
                    </div>

                    <div>
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Update">
                    </div>
                </form>
                
            </div>

            <div class="bg-primary w-100 shadow-sm py-3 mb-5 rounded-3">

                <div class="px-4">
                    <h2 class="fw-semibold fs-4 py-2">Edit password</h2>
                </div>

                <hr class="w-100">

                <form method="POST" action="" class="px-4 d-flex flex-column gap-4 text-secondary">
                    <div class="form-floating">
                        <input type="password" class="rounded-4 bg-secondary form-control" id="cur-password" name="cur-password" placeholder="Current Password">
                        <label for="cur-password">Current Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 bg-secondary form-control" id="new-password" name="new-password" placeholder="New Password">
                        <label for="new-password">New Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="rounded-4 bg-secondary form-control" id="conf-password" name="conf-password" placeholder="Confirm Password">
                        <label for="conf-password">Password</label>
                    </div>

                    <div>
                        <input type="submit" class="btn bg-tertiary text-light rounded-3" value="Update">
                    </div>
                </form>
            </div>
            
        </section>
    </main>
@endsection