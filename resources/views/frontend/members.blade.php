@extends('frontend.layouts.app')

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <!-- .sections_group -->
            <div class="sections_group">
                <div class="section " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading">
                                    <div class="fancy_heading_wrapper has_icon">
                                        <h2>Member's</h2>
                                        <div class="inside">
                                            Our customer area allows you to see comprehensive details, as reported on your Callcredit Report, enabling you to explore the balance, limit and repayment history
                                        </div>
                                        <i class="fa fa-gear"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="column one column_divider">

                                </div>
                                <div class="column one-second column_image">
                                    <div class="scale-with-grid aligncenter wp-caption no-hover">
                                        <div class="photo">
                                            <img class="scale-with-grid" src="upload/imac2.png" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-second column_column"><br>
                                    <p>Please fill in your login details below</p>
                                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    {{--<p>Please note that you will need to have the sms code you were sent upon signup to login, if you cannot remember it we will generate you a new one.</p>--}}
                                </div>

                            </div>
                        </div> </div>
                </div>
            </div>

        </div>
    </div>

@stop