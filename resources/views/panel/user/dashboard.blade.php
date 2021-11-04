@extends('layouts.user.master')


@section('content')
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page_title-content">
                        <p>Welcome Back,
                            <span> Carla Pascle</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget-card">
                                <div class="widget-title">
                                    <h5>Balance</h5>
                                    <p class="text-success">133% <span><i class="las la-arrow-up"></i></span></p>
                                </div>
                                <div class="widget-info">
                                    <h3>$18,235.0</h3>
                                    <p>USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget-card">
                                <div class="widget-title">
                                    <h5>Balance</h5>
                                    <p class="text-danger">133% <span><i class="las la-arrow-down"></i></span></p>
                                </div>
                                <div class="widget-info">
                                    <h3>$18,235.0</h3>
                                    <p>USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget-card">
                                <div class="widget-title">
                                    <h5>Balance</h5>
                                    <p class="text-success">133% <span><i class="las la-arrow-up"></i></span></p>
                                </div>
                                <div class="widget-info">
                                    <h3>$18,235.0</h3>
                                    <p>USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget-card">
                                <div class="widget-title">
                                    <h5>Balance</h5>
                                    <p class="text-danger">133% <span><i class="las la-arrow-down"></i></span></p>
                                </div>
                                <div class="widget-info">
                                    <h3>$18,235.0</h3>
                                    <p>USD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xl-8 col-lg-12 col-xxl-8">
                            <div class="card profile_chart transparent">
                                <div class="card-header">
                                    <div class="chart_current_data">
                                        <h3>254856 <span>USD</span></h3>
                                        <p class="text-success">125648 <span>USD (20%)</span></p>
                                    </div>
                                    <div class="duration-option">
                                        <a id="all" class="active">ALL</a>
                                        <a id="one_month" class="">1M</a>
                                        <a id="six_months">6M</a>
                                        <a id="one_year" class="">1Y</a>
                                        <a id="ytd" class="">YTD</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="timeline-chart"></div>
                                    <div class="chart-content text-center">
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">24hr Volume</p>
                                                    <strong>$1236548.325</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Market Cap</p>
                                                    <strong>19B USD</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Circulating</p>
                                                    <strong>29.4M BTC</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">All Time High</p>
                                                    <strong>19.783.06 USD</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Typical hold </p>
                                                    <strong>88 days</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Trading activity </p>
                                                    <strong>70% buy </strong>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Popularity </p>
                                                    <strong>#1 most held </strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Popularity </p>
                                                    <strong>#1 most held </strong>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-xxl-4">
                            <div class="card balance-widget transparent">
                                <div class="card-body">
                                    <div id="wallet-chart"></div>
                                    <div class="balance-widget">
                                        <h4>Total Balance : <strong>$125480</strong></h4>
                                        <ul class="list-unstyled">
                                            <li class="d-flex">
                                                <i class="cc BTC me-3"></i>
                                                <div class="flex-grow-1">
                                                    <h5 class="m-0">Bitcoin</h6>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 BTC</h5>
                                                    <span>0.125 USD</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <i class="cc LTC me-3"></i>
                                                <div class="flex-grow-1">
                                                    <h5 class="m-0">Litecoin</h6>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 LTC</h5>
                                                    <span>0.125 USD</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <i class="cc XRP me-3"></i>
                                                <div class="flex-grow-1">
                                                    <h5 class="m-0">Ripple</h6>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 XRP</h5>
                                                    <span>0.125 USD</span>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <i class="cc DASH me-3"></i>
                                                <div class="flex-grow-1">
                                                    <h5 class="m-0">Dash</h6>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 XRP</h5>
                                                    <span>0.125 USD</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-xxl-12">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc BTC-alt"></i></span>
                                                    <h5 class="d-inline-block ms-2 mb-3">Bitcoin
                                                        <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge bg-success ms-2">+
                                                            06%</span>
                                                </h4>
                                            </div>
                                            <div id="btcChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc ETH-alt"></i></span>
                                                    <h5 class="d-inline-block ms-2 mb-3">Ethereum
                                                        <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge bg-danger ms-2">-
                                                            06%</span>
                                                </h4>
                                            </div>
                                            <div id="ltcChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc LTC-alt"></i></span>
                                                    <h5 class="d-inline-block ms-2 mb-3">Litecoin
                                                        <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge bg-primary ms-2">
                                                            06%</span>
                                                </h4>
                                            </div>
                                            <div id="xrpChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-xxl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Exchange</h4>
                                </div>
                                <div class="card-body">
                                    <div class="buy-sell-widget">
                                        <form method="post" name="myform" class="currency_validate">
                                            <div class="mb-3">
                                                <label class="me-sm-2">Currency</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="cc BTC-alt"></i></label>
                                                    </div>
                                                    <select name='currency' class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="bitcoin">Bitcoin</option>
                                                        <option value="litecoin">Litecoin</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="me-sm-2">Payment Method</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="fa fa-bank"></i></label>
                                                    </div>
                                                    <select class="form-control" name="method">
                                                        <option value="">Select</option>
                                                        <option value="bank">Bank of America ********45845</option>
                                                        <option value="master">Master Card ***********5458</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="me-sm-2">Enter your amount</label>
                                                <div class="input-group">
                                                    <input type="text" name="currency_amount" class="form-control"
                                                           placeholder="0.0214 BTC">
                                                    <input type="text" name="usd_amount" class="form-control"
                                                           placeholder="125.00 USD">
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <p class="mb-0">Monthly Limit</p>
                                                    <h6 class="mb-0">$49750 remaining</h6>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit"
                                                    class="btn btn-success w-100">Exchange
                                                Now</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-xxl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Transaction </h4>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-widget">
                                        <ul class="list-unstyled">
                                            <li class="d-flex">
                                                <span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                <div class="flex-grow-1">
                                                    <p>
                                                        <small>9 November,
                                                            <script>
                                                                var CurrentYear = new Date().getFullYear()
                                                                document.write(CurrentYear)
                                                            </script>
                                                        </small>
                                                        <small>15:33</small>
                                                    </p>
                                                    <p class="wallet-address text-dark">15f5s8s47bhj61r8w4e77e5e56
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <h4>0.000242 BTC</h4>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                <div class="flex-grow-1">
                                                    <p>
                                                        <small>9 November,
                                                            <script>
                                                                var CurrentYear = new Date().getFullYear()
                                                                document.write(CurrentYear)
                                                            </script>
                                                        </small>
                                                        <small>15:33</small>
                                                    </p>
                                                    <p class="wallet-address text-dark">15f5s8s47bhj61r8w4e77e5e56
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <h4>0.000242 LTC</h4>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                <div class="flex-grow-1">
                                                    <p>
                                                        <small>9 November,
                                                            <script>
                                                                var CurrentYear = new Date().getFullYear()
                                                                document.write(CurrentYear)
                                                            </script>
                                                        </small>
                                                        <small>15:33</small>
                                                    </p>
                                                    <p class="wallet-address text-dark">15f5s8s47bhj61r8w4e77e5e56
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <h4>0.000242 XRP</h4>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                <div class="flex-grow-1">
                                                    <p>
                                                        <small>9 November,
                                                            <script>
                                                                var CurrentYear = new Date().getFullYear()
                                                                document.write(CurrentYear)
                                                            </script>
                                                        </small>
                                                        <small>15:33</small>
                                                    </p>
                                                    <p class="wallet-address text-dark">15f5s8s47bhj61r8w4e77e5e56
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <h4>0.000242 XRP</h4>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                <div class="flex-grow-1">
                                                    <p>
                                                        <small>9 November,
                                                            <script>
                                                                var CurrentYear = new Date().getFullYear()
                                                                document.write(CurrentYear)
                                                            </script>
                                                        </small>
                                                        <small>15:33</small>
                                                    </p>
                                                    <p class="wallet-address text-dark">15f5s8s47bhj61r8w4e77e5e56
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <h4>0.000242 XRP</h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
