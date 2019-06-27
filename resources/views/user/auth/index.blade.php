@extends('user.auth.layout')
@section('page-title')
    Authentication
@stop
@section('page-form')
    <!-- Tabbed form -->
    <div class="card">

        <!-- Form -->
        <div>
            <ul class="nav nav-tabs nav-justified alpha-grey mb-0">
                <li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active"
                                        data-toggle="tab"><h6 class="my-1">Sign in</h6></a></li>
                <li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0" data-toggle="tab">
                        <h6 class="my-1">Register</h6></a></li>
            </ul>

            <div class="tab-content modal-body">
                <div class="tab-pane fade show active" id="login-tab1">
                    <form class="login-form" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-3">
                            <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled"
                                           {{ old('remember') ? 'checked' : '' }} data-fouc>
                                    Remember
                                </label>
                            </div>

                            <a href="{{route('password.recover')}}" class="ml-auto">Forgot password?</a>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                        class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">or sign in with</span>
                        </div>

                        <div class="form-group text-center">
                            <button type="button"
                                    class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2">
                                <i class="icon-facebook"></i></button>
                            <button type="button"
                                    class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2">
                                <i class="icon-dribbble3"></i></button>
                            <button type="button"
                                    class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2">
                                <i class="icon-github"></i></button>
                            <button type="button"
                                    class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2">
                                <i class="icon-twitter"></i></button>
                        </div>

                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a
                                    href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </form>
                </div>

                <div class="tab-pane fade" id="login-tab2">
                    <form action="index.html" class="flex-fill">
                        <div class="text-center mb-3">
                            <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Create account</h5>
                            <span class="d-block text-muted">All fields are required</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="text" class="form-control" placeholder="Choose username">
                            <div class="form-control-feedback">
                                <i class="icon-user-plus text-muted"></i>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="text" class="form-control" placeholder="First name">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="text" class="form-control" placeholder="Second name">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="password" class="form-control" placeholder="Create password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="password" class="form-control" placeholder="Repeat password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="email" class="form-control" placeholder="Your email">
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="email" class="form-control" placeholder="Repeat email">
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-input-styled" checked data-fouc>
                                    Send me <a href="#">test account settings</a>
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-input-styled" checked data-fouc>
                                    Subscribe to monthly newsletter
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                    Accept <a href="#">terms of service</a>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i
                                        class="icon-plus3"></i></b> Create account
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /form -->

    </div>
    <!-- /tabbed recovery form -->
@stop
