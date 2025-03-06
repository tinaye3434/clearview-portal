<div>
    <x-layouts.auth>
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
             data-sidebar-position="fixed" data-header-position="fixed">
            <div
                class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 col-lg-6 col-xxl-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                                    </a>
                                    <p class="text-center">Your Social Campaigns</p>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="text-center" :status="session('status')" />

                                    <form wire:submit="register()">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                                <input wire:model="address" type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                                <input wire:model="phone" type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">User Type</label>
                                            <select wire:model="type"  class="form-control" id="exampleInputEmail1" name="type" aria-describedby="emailHelp" required>
                                                <option value="">--Select Option--</option>
                                                <option value="ngo">NGO</option>
                                                <option value="donor">Donor</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1" name="password">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                                <input wire:model="password_confirmation" type="text" class="form-control" id="exampleInputEmail1" name="password_confirmation" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="fs-4 mb-0 fw-bold">Already have an account?</p>
                                            <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Sign In</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.auth>
</div>
