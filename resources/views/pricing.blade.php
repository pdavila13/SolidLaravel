@extends('layouts.app')

@section('htmlheader_title')
    Pricing
@endsection

@section('main-content')

    <style>
        body{
            background:#EEEEEE;
        }
        .bronze {
            background-color: #B0C4DE;
        }
        .bronze-text {
            color: #B0C4DE;
        }
        .silver {
            color: #fff;
            background-color: #C0C0C0;
        }
        .gold {
            color: #fff;
            background-color: #FFD700;
        }
        .gold-text {
            color:#FFD700;
        }
        .content .plan {
            position:relative;
            top:30px;
            background:rgba(255,255,255,1);
            padding-top:40px;
            padding-bottom:40px;
            border-radius:7px;
            color:#777;
            box-shadow:5px 5px 0 rgba(0,0,0,0.05);
            -webkit-transition:all .3s ease-out;
            transition:all .3s ease-out;
        }
        .content .plan.featured {
            top:0;
            padding-top:50px;
            padding-bottom:50px;
        }
        .content .plan:hover,
        .content .plan.featured {
            background:#5CC9DF;
            color:#fff;
        }
        .content .plan h2 {
            font-size:28px;
            font-weight:700;
            margin-bottom:0;
            text-transform:uppercase;
        }
        .content .plan.featured h2 {
            margin-bottom:10px;
        }
        .content .plan p {
            margin-bottom:5px;
            font-weight:400;
        }
        .content .plan .icon {
            display:inline-block;
            margin-bottom:30px;
            width:120px;
            height:120px;
            border-radius:50%;
            font-size:48px;
            line-height:120px;
            -webkit-transition:all .3s ease-out;
            transition:all .3s ease-out;
        }
        .content .plan.featured .icon,
        .content .plan:hover .icon{
            color:#5cc9df;
            background:#fff;
        }
        .content .plan .btn-pricing {
            margin-top:20px;
            margin-bottom:0;
            font-size:16px;
            padding:10px 20px;
        }
        .content .plan.featured .btn-pricing,
        .content .plan:hover .btn-pricing {
            background: #fff;
            color:#5CC9DF;
        }
        .content .plan .price {
            font-size:48px;
            font-weight:100;
            line-height:48px;
            margin-bottom:30px;
        }
        .content .plan.featured .price {
            margin-bottom:40px;
        }
    </style>
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="row">
                    <div class="col-xs-6 col-sm-3 pricing-box">
                        <div class="widget-box">
                            <div class="widget-header header-color-dark">
                                <h5 class="bigger lighter">Basic Package</h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <ul class="list-unstyled spaced2">
                                        <li>
                                            <i class="icon-ok green"></i>
                                            10 GB Disk Space
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            200 GB Bandwidth
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            100 Email Accounts
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            10 MySQL Databases
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            $10 Ad Credit
                                        </li>

                                        <li>
                                            <i class="icon-remove red"></i>
                                            Free Domain
                                        </li>
                                    </ul>

                                    <hr />
                                    <div class="price">
                                        $5
                                        <small>/month</small>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-block btn-inverse">
                                        <i class="icon-shopping-cart bigger-110"></i>
                                        <span>Buy</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-3 pricing-box">
                        <div class="widget-box">
                            <div class="widget-header header-color-orange">
                                <h5 class="bigger lighter">Starter Package</h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <ul class="list-unstyled spaced2">
                                        <li>
                                            <i class="icon-ok green"></i>
                                            50 GB Disk Space
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            1 TB Bandwidth
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            1000 Email Accounts
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            100 MySQL Databases
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            $25 Ad Credit
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Free Domain
                                        </li>
                                    </ul>

                                    <hr />
                                    <div class="price">
                                        $10
                                        <small>/month</small>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-block btn-warning">
                                        <i class="icon-shopping-cart bigger-110"></i>
                                        <span>Buy</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-3 pricing-box">
                        <div class="widget-box">
                            <div class="widget-header header-color-blue">
                                <h5 class="bigger lighter">Business Package</h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <ul class="list-unstyled spaced2">
                                        <li>
                                            <i class="icon-ok green"></i>
                                            200 GB Disk Space
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Unlimited Bandwidth
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            1000 Email Accounts
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            200 MySQL Databases
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            $25 Ad Credit
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Free Domain
                                        </li>
                                    </ul>

                                    <hr />
                                    <div class="price">
                                        $15
                                        <small>/month</small>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-block btn-primary">
                                        <i class="icon-shopping-cart bigger-110"></i>
                                        <span>Buy</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-3 pricing-box">
                        <div class="widget-box">
                            <div class="widget-header header-color-green">
                                <h5 class="bigger lighter">Ultimate Package</h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <ul class="list-unstyled spaced2">
                                        <li>
                                            <i class="icon-ok green"></i>
                                            Unlimited Space
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Unlimited Bandwidth
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Unlimited Email Accounts
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            Unlimited MySQL Databases
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            $50 Ad Credit
                                        </li>

                                        <li>
                                            <i class="icon-ok green"></i>
                                            2 Free Domains
                                        </li>
                                    </ul>

                                    <hr />
                                    <div class="price">
                                        $25
                                        <small>/month</small>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-block btn-success">
                                        <i class="icon-shopping-cart bigger-110"></i>
                                        <span>Buy</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
