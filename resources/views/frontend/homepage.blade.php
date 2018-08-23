@extends('frontend.layouts.app')

@section('content')

    @include('frontend.layouts._partials.slider')
    <!-- #Content -->
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
                                        <h2>Welcome to Search My Credit</h2>
                                        <div class="inside">
                                            Personalising the price comparison market through intelligent credit scoring
                                        </div>
                                        <i class="fa fa-gear"></i>
                                    </div>
                                </div>
                            </div>
                            <p align="center" strong>Search My Credit helps consumers understand and take better control of their own financial status, allowing each individual to be more confident in the financial decisions they make. Search My Credit provides customers with a tailored solution to their credit needs based off their credit score.</p>
                            <br>
                            <p align="center" strong>Our partner company, Callcredit Consumer Limited, will provide you access to your credit report.</p>
                        </div>
                    </div>
                </div>

                <p align="center"><img src="https://searchmycredit.co.uk/upload/img1.png"></p>
                <div class="section" style="padding-top:30px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_column">
                                <div style="text-align: center;">

                                </div>
                            </div>

                            <div class="column one column_divider">
                                <hr style="margin: 0 0 30px;"/>
                            </div>
                            <div class="column one-second column_image">
                                <div class="scale-with-grid aligncenter wp-caption no-hover">
                                    <div class="photo">
                                        <img class="scale-with-grid" src="upload/imac2.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-second column_column">
                                <h2 class="title" style="padding-top: 30px;">Check your credit report</h2>
                                <h6>Knowing the facts about your credit profile and your credit score can help you to identify any areas that need correcting. Credit report and score is provided by Callcredit Consumer Limited.</h6>
                                <ul class="list list_tick">
                                    <li>Monitor your credit monthly</li>
                                    <li>Fraud check</li>
                                    <li>Make sure your credit profile information is accurate</li>
                                    <li>Fast & Easy to use</li>
                                </ul>
                                View your credit report and credit score, and understand what your credit rating is and what it means. Credit report and score is provided by CallCredit Consumer Limited.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .four-columns - sidebar -->
        </div>
    </div>

@endsection