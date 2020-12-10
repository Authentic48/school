@extends('layouts.app')

@section('content')
<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">логин</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Эл. адрес *</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">пароль *</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="пароль">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection
