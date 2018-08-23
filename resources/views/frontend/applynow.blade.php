
@extends('frontend.layouts.app')

@section('content')

    <?php use Illuminate\Support\Facades\Input;

    $affid = Session::get('s1');

    ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://searchmycredit.co.uk/admin/public/crafty_postcode_big.class.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/javascript" src="dtp/moment.min.js"></script>


    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="dtp/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="dtp/daterangepicker.css" />


    <div id="Content">
        <div class="content_wrapper clearfix">
            <!-- .sections_group -->
            <div class="sections_group">
                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading">
                                    <div class="fancy_heading_wrapper has_icon">
                                        <h2>Credit Report Application Page</h2>
                                        <div class="inside">
                                            Personalising the price comparison market through intelligent credit scoring</div>
                                        <i class="fa fa-gear"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <?php
                        //
                        //     if(ISSET($_GET['FirstName'])){
                        //
                        //         $postData = INPUT::get();
                        //
                        //         $applicantData = DB::table('applicants')->insert([
                        //             'Title' => INPUT::get('Title'),
                        //             'AppDate' => INPUT::get('AppDate'),
                        //             'FirstName' => INPUT::get('FirstName'),
                        //             'LastName' => INPUT::get('LastName'),
                        //             'Email' => INPUT::get('Email'),
                        //             'DOB' => INPUT::get('DOB'),
                        //             'HomePhone' => INPUT::get('HomePhone'),
                        //             'LandPhone' => INPUT::get('HomePhone'),
                        //             'MobilePhone' => INPUT::get('MobilePhone'),
                        //             'WorkPhone' => INPUT::get('WorkPhone'),
                        //             'Postcode' => INPUT::get('Postcode'),
                        //             'Address1' => INPUT::get('Address1'),
                        //             'Address2' => INPUT::get('Address2'),
                        //             'Town' => INPUT::get('Town'),
                        //             'County' => INPUT::get('County'),
                        //             'AddressFrom' => INPUT::get('AddressFrom'),
                        //             'Employer' => INPUT::get('Employer'),
                        //             'Industry' => INPUT::get('Industry'),
                        //             'MonthlyPay' => INPUT::get('MonthlyPay'),
                        //             'IncomeNext' => INPUT::get('IncomeNext'),
                        //             'IncomeFollowing' => INPUT::get('IncomeFollowing'),
                        //             'IncomeFrom' => INPUT::get('IncomeFrom'),
                        //             'IncomeFrequency' => INPUT::get('IncomeFrequency'),
                        //             'IncomeMethod' => INPUT::get('IncomeMethod'),
                        //             'terms1' => INPUT::get('terms1'),
                        //             'terms2' => INPUT::get('terms2'),
                        //             'terms3' => INPUT::get('terms3')]);
                        //
                        //}
                        //    ?>

                        <?php
                        $appDate = date('Y-m-d h:m:s');

                        ?>
                        <div class="row">
                            <div class="panel-group">
                                <form action="process" method="GET" id="contact-form">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4>Personal Information</h4>
                                        </div>
                                        <div class="panel-body">
                                            <input type="hidden" name="AppDate" value="{{$appDate}}">
                                            <input type="hidden" name="Source" value="www.searchmycredit.co.uk">
                                            <input type="hidden" name="AffID" value="<?php echo $affid; ?>">
                                            <input type="hidden" name="terms1" value="on">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Title">Title</label>
                                                        <select class="form-control" name="Title" required>
                                                            <option value="">Please select</option>
                                                            <option value="mr">Mr</option>
                                                            <option value="ms">Ms</option>
                                                            <option value="miss">Miss</option>
                                                            <option value="mrs">Mrs</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">First Name*</label>
                                                        <input class="form-control" name="FirstName" type="text" placeholder="John" required>
                                                        <div class="help" ></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="LastName">Surname*</label>
                                                        <input class="form-control" name="LastName" type="text" placeholder="Doe" required>
                                                        <div class="help" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <script type="text/javascript">
                                                    var date = new Date();
                                                    var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
                                                    var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
                                                </script>
                                                <div class="col-md-12">
                                                    <label for="">BirthDate*</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="DOBDay" required>
                                                        <option value="" selected="selected">D</option>
                                                        <?php
                                                        for($i=1;$i<=31;$i++){ ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="DOBMonth" required>
                                                        <option value="" selected="selected">M</option>
                                                        <option value="01">Jan</option>
                                                        <option value="02">Feb</option>
                                                        <option value="03">Mar</option>
                                                        <option value="04">Apr</option>
                                                        <option value="05">May</option>
                                                        <option value="06">Jun</option>
                                                        <option value="07">Jul</option>
                                                        <option value="08">Aug</option>
                                                        <option value="09">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="DOBYear" required>
                                                        <option value="" selected="selected">Y</option>
                                                        <?php
                                                        for($i=1940;$i<=1998;$i++){ ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-4">
                                                    <label for="HomePhone">Home Telephone*</label>
                                                    <input class="form-control" name="HomePhone" type="number" maxlength="11" minlength="11" placeholder="07700 900245" autocomplete="on" required>
                                                    <div class="help" ></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="MobilePhone">Mobile Telephone*</label>
                                                    <input class="form-control" name="MobilePhone" type="number" maxlength="11" minlength="11" autocomplete="on" required placeholder="07700 90024">
                                                    <div class="help" ></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="WorkPhone">Work Telephone*</label>
                                                    <input class="form-control" name="WorkPhone" type="number" maxlength="11" minlength="11" autocomplete="on" required placeholder="07700 90024">
                                                    <div class="help" ></div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <label for="Email">Email Address*</label>
                                                    <input class="form-control" name="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not a valid email format" autocomplete="on" required>
                                                    <div class="help"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Confirm Email*</label>
                                                    <input class="form-control" name="Email" type="email" required>
                                                    <div class="help"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading"><h4>Address details</h4></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12" align="center">
                                                    <label for="Postcode">Postcode</label>
                                                    <input type="text" class="form-control" style="max-width: 200px" placeholder="Enter Your Postcode" name="Postcode" id="postcode_2" autocomplete="on" required>
                                                </div>
                                                <div class="col-md-12" align="center">
                                                    <input type="button" name="submit" onclick="cp_obj_2.doLookup()" value="Find Address">
                                                </div>
                                                <div class="col-md-12">
                                                    <div align="center"> <span id="crafty_postcode_result_display_2" type="select" >&nbsp;</span><br/></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="Address1">Address 1*</label>
                                                    <input class="form-control" id="Address1" name="Address1" type="text" required>
                                                    <div class="help"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Address1">Address 2</label>
                                                    <input class="form-control" id="Address2" name="Address2" type="text "required>
                                                    <div class="help"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="Address1">Town*</label>
                                                    <input class="form-control" id="Town" name="Town" type="text" required>
                                                    <div class="help"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="County">County</label>
                                                    <input class="form-control" id="County" name="County" type="text" required>
                                                    <div class="help" ></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <script type="text/javascript">
                                                        $(function() {

                                                            $('input[name="AddressFrom"]').daterangepicker({
                                                                singleDatePicker: true,
                                                                showDropdowns: true,

                                                                locale: {
                                                                    format: 'YYYY-MM-DD'
                                                                }

                                                            });
                                                        });
                                                    </script>
                                                    <label for="AddressFrom">Date Moved In*</label>
                                                    <input class="form-control" type="select" name="AddressFrom" required>
                                                    <div class="help"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Residential Status*</label>
                                                    <select class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="homeowner">Homeowner</option>
                                                        <option value="council tenant">Council tenant</option>
                                                        <option value="private tenant">Private tenant</option>
                                                        <option value="living with family">Living with family</option>
                                                        <option value="work accommodation">Work accommodation</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <input type="checkbox" placeholder="on" name="terms1"> Please tick this box to indicate your consent to receiving email or SMS or other marketing from us and our trusted partners.
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" placeholder="on" name="terms2"> Please tick box to confirm that you agree to the <a href="SMC_Terms.pdf">Terms and Conditions.</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div align="center"><br><br><input type="submit" name="submit" value="Submit Application"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="crafty_postcode_big.class.js"></script>

    <script>

        var cp_obj_2 = CraftyPostcodeCreate();
        cp_obj_2.set("access_token", "d4b72-c7629-c05cc-01e67"); // your token here
        cp_obj_2.set("result_elem_id", "crafty_postcode_result_display_2");
        cp_obj_2.set("form", ""); // left blank, we will use element id's
        cp_obj_2.set("elem_company"  , "companyname_1");
        cp_obj_2.set("elem_house_num"  , "Address1");
        cp_obj_2.set("elem_street1"  , "Address2");
        cp_obj_2.set("elem_town"     , "Town");
        cp_obj_2.set("elem_county", "County");
        cp_obj_2.set("elem_postcode" , "postcode_2");
    </script>

@stop

@section('js')
    <script>
        jQuery('#contact-form').bootstrapValidator({
//        live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                Name: {
                    validators: {
                        notEmpty: {
                            message: 'The Name is required and cannot be empty'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                Message: {
                    validators: {
                        notEmpty: {
                            message: 'The Message is required and cannot be empty'
                        }
                    }
                }
            }
        });
    </script>
@endsection