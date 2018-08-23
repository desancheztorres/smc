@extends('frontend.layouts.app')

@section('content')

    <?php
    if(isset($_GET['a88b7dcd1a9e3e17770bbaa6d7515b31a2d7e85d']) && $_GET['a88b7dcd1a9e3e17770bbaa6d7515b31a2d7e85d'] != ""){
        $Email = $_GET['a88b7dcd1a9e3e17770bbaa6d7515b31a2d7e85d'];
        $Password = $_GET['5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'];
        $userDetails = DB::table('applicants')
            ->where('Email', '=', $Email)
            ->where('Password','=', $Password)
            ->get();
        if($Email == $userDetails[0]->Email && $Password == $userDetails[0]->Password){
            echo 'Both are the same ';
        }else{echo 'Error';}
    }
    ?>

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
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div><input type="submit" name="submit" value="Login"></div>


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