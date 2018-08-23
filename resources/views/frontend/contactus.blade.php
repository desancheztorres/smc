@extends('frontend.layouts.app')

@section('content')

    <!-- #Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="column one column_fancy_heading">
                <div class="fancy_heading">
                    <div class="fancy_heading_wrapper has_icon">
                        <h2>Contact Search My Credit</h2>
                        <div class="inside">
                            We will endeavor to get back to you by the end of the working day.
                        </div>
                        <i class="fa fa-gear"></i>
                    </div>
                </div>
            </div>
            <!-- .sections_group -->
            <div class="sections_group">
                <div class="section " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column two-third column_column">
                                <h5>View your credit report and credit score, and understand what your credit rating is and what it means.</h5>
                                <p>
                                    Search My Credit provides a fully online service so that we can provide you the best and most efficient service saving you both time and hassle. We're always on hand to answer any questions or queries you might have, or even if you just want a chat! Our email is customerservice@searchmycredit.co.uk if you want to contact us through that medium.</p>
                                <p>
                                    Please note that Search My Credit does not itself provide credit information and does not have access to credit information. Search My Credit does not in any way influence or impact on the credit information stored by Callcredit Consumer Limited, we cannot improve your credit rating, correct information held by Callcredit Consumer Limited or act for you in any way</p>
                            </div>
                            <div class="column one-third column_contact_box">
                                <div class="contact_box">
                                    <h5 class="title">Contact us</h5>
                                    <ul>
                                        <li class="address">
                                            <p>
                                                Search My Credit<br/>
                                                Ridgeland House, 15 Carfax,Horsham, RH12 1DY, England<br/>
                                                Our Customer Services team are here to assist you between
                                                Monday to Friday 09:00 – 17:30
                                            </p>
                                        </li>
                                        <li class="phone"><i class="fa-phone"></i>
                                            <p>
                                                <a href="#">02035985198</a>
                                            </p>
                                        </li>
                                        <li class="mail"><i class="fa-envelope"></i>
                                            <p>
                                                <a href="mailto:customerservice@searchmycredit.co.uk">customerservice@searchmycredit.co.uk</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_column">
                                <div role="form" class="wpcf7" id="wpcf7-f9896-p5721-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                    </div>
                                    <form id="contact-form">

                                        <p>
												<span class="wpcf7-form-control-wrap name">
													<input type="text"  name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name"/>
												</span>

                                            <span class="wpcf7-form-control-wrap email">
													 <input type="text" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email"/>
												</span>

                                            <span class="wpcf7-form-control-wrap subject">
													 <input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject"/>
												</span>

                                            <span class="wpcf7-form-control-wrap message">
													<textarea  name="comment" id="comment" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
												</span>
                                            <input type="submit" id="submit_contact" value="Send message" class="wpcf7-form-control wpcf7-submit"/>
                                        <div id="msg" class="message"></div>
                                        <p></p>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div></div>


@stop