@extends('app')
@section('style')
    
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 col-xxl-12">
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-xxl-4">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="card welcome-profile transparent">
                                <div class="card-body"><img src="./images/profile/2.png" alt="">
                                    <h4>Welcome, Maria Pascle!</h4>
                                    <p>Looks like you are not verified yet. Verify yourself to use the
                                        full potential of Qash.</p>
                                    <ul>
                                        <li><a href="#"><span class="verified"><i class="fa-solid fa-chevron-down"></i></span> Verify
                                                account</a></li>
                                        <li><a href="#"><span class="not-verified"><i class="fa-solid fa-lock"></i></span>
                                                Two-factor authentication (2FA)</a></li>
                                        <li><a href="#"><span class="not-verified"><i class="fa-solid fa-money-check-dollar"></i></span> Deposit
                                                money</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="widget-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="widget-stat">
                                        <div class="coin-title"><span><i class="fa-solid fa-chevron-down"></i></span>
                                            <h5 class="d-inline-block ml-2 mb-3">Bitcoin
                                                <span>(24h)</span>
                                            </h5>
                                        </div>
                                        <h4>USD 1254.36 <span class="badge badge-success ml-2">+
                                                06%</span></h4>
                                    </div>
                                    <div id="btcChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="widget-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="widget-stat">
                                        <div class="coin-title"><span><i class="fa-solid fa-chevron-down"></i></span>
                                            <h5 class="d-inline-block ml-2 mb-3">Ethereum
                                                <span>(24h)</span>
                                            </h5>
                                        </div>
                                        <h4>USD 1254.36 <span class="badge badge-danger ml-2">-
                                                06%</span></h4>
                                    </div>
                                    <div id="ltcChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="widget-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="widget-stat">
                                        <div class="coin-title"><span><i class="fa-solid fa-chevron-down"></i></span>
                                            <h5 class="d-inline-block ml-2 mb-3">Litecoin
                                                <span>(24h)</span>
                                            </h5>
                                        </div>
                                        <h4>USD 1254.36 <span class="badge badge-primary ml-2">06%</span>
                                        </h4>
                                    </div>
                                    <div id="xrpChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-xxl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Exchange</h4>
                        </div>
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                <form method="post" name="myform" class="currency_validate form-row">
                                    <div class="form-group col-xl-4 mb-0"><label
                                            class="mr-sm-2">Currency</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><label
                                                    class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></label></div><select
                                                name="currency" class="form-control">
                                                <option value="">Select</option>
                                                <option value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 mb-0"><label class="mr-sm-2">Payment
                                            Method</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><label
                                                    class="input-group-text"><i
                                                        class="fa fa-bank"></i></label></div><select
                                                class="form-control" name="method">
                                                <option value="">Select</option>
                                                <option value="bank">Bank of America ********45845
                                                </option>
                                                <option value="master">Master Card ***********5458
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 mb-0"><label class="mr-sm-2">Enter
                                            your amount</label>
                                        <div class="input-group"><input type="text"
                                                name="currency_amount" class="form-control"
                                                placeholder="0.0214 BTC"> <input type="text"
                                                name="usd_amount" class="form-control"
                                                placeholder="125.00 USD"></div>
                                    </div>
                                    <div class="col-12">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3">
                                            <!-- <p class="mb-0">Monthly Limit</p> -->
                                            <h6 class="mb-0">$49750 remaining</h6><button type="submit"
                                                name="submit" class="btn btn-success px-5">Exchange
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card profile_chart transparent">
                        <div class="card-header">
                            <div class="chart_current_data">
                                <h3>254856 <span>USD</span></h3>
                                <p class="text-success">125648 <span>USD (20%)</span></p>
                            </div>
                            <div class="duration-option"><a id="all" class="active">ALL</a> <a
                                    id="one_month" class="">1M</a> <a id="six_months">6M</a> <a
                                    id="one_year" class="">1Y</a> <a id="ytd"
                                    class="">YTD</a></div>
                        </div>
                        <div class="card-body">
                            <div id="timeline-chart"></div>
                            <div class="chart-content text-center mt-3">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">24hr Volume</p>
                                            <strong>$1236548.325</strong>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">Market Cap</p><strong>19B USD</strong>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">Circulating</p><strong>29.4M BTC</strong>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">All Time High</p><strong>19.783.06
                                                USD</strong>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">Typical hold</p><strong>88 days</strong>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="chart-stat">
                                            <p class="mb-1">Trading activity</p><strong>70%
                                                buy</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-12">
            <div class="row">
                <div class="col-xl-12 col-xxl-6">
                    <div class="card balance-widget transparent">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-xl-12 col-xxl-6 col-lg-6">
                                    <div id="wallet-chart"></div>
                                    <h4>Total Balance : <strong>$125480</strong></h4>
                                </div>
                                <div class="col-xl-12 col-xxl-6 col-lg-6">
                                    <div class="balance-widget">
                                        <ul class="list-unstyled">
                                            <li class="media"><i class="fa-solid fa-bitcoin-sign"></i>
                                                <div class="media-body">
                                                    <h5 class="m-0">Bitcoin</h5>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 BTC</h5><span>0.125 USD</span>
                                                </div>
                                            </li>
                                            <li class="media"><i class="fa-solid fa-coins"></i>
                                                <div class="media-body">
                                                    <h5 class="m-0">Litecoin</h5>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 LTC</h5><span>0.125 USD</span>
                                                </div>
                                            </li>
                                            <li class="media"><i class="fa-solid fa-coins"></i>
                                                <div class="media-body">
                                                    <h5 class="m-0">Ripple</h5>
                                                </div>
                                                <div class="text-right">
                                                    <h5>0.000242 XRP</h5><span>0.125 USD</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-6">
                    <div class="card acc_balance">
                        <div class="card-header">
                            <h4 class="card-title">Wallet</h4>
                        </div>
                        <div class="card-body"><span>Available BTC</span>
                            <h3>0.0230145 BTC</h3>
                            <div class="d-flex justify-content-between my-4">
                                <div>
                                    <p class="mb-1">Buy this month</p>
                                    <h4>3.0215485 BTC</h4>
                                </div>
                                <div>
                                    <p class="mb-1">Sell this month</p>
                                    <h4>3.0215485 BTC</h4>
                                </div>
                            </div>
                            <div class="btn-group mb-3"><button class="btn btn-primary">Sell</button>
                                <button class="btn btn-success">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title">Transaction</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="transaction-table">
                        <div class="table-responsive">
                            <table class="table mb-0 table-responsive-sm">
                                <tbody>
                                    <tr>
                                        <td><span class="sold-thumb"><i class="fa-solid fa-chevron-down"></i></span></td>
                                        <td><span class="badge badge-danger">Sold</span></td>
                                        <td><i class="fa-solid fa-bitcoin-sign"></i> BTC</td>
                                        <td>Using - Bank *******5264</td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="buy-thumb"><i class="fa-solid fa-chevron-down"></i></i></span>
                                        </td>
                                        <td><span class="badge badge-success">Buy</span></td>
                                        <td><i class="fa-solid fa-bitcoin-sign"></i> LTC</td>
                                        <td>Using - Card *******8475</td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="sold-thumb"><i class="fa-solid fa-chevron-down"></i></span></td>
                                        <td><span class="badge badge-danger">Sold</span></td>
                                        <td><i class="fa-solid fa-bitcoin-sign"></i> XRP</td>
                                        <td>Using - Card *******8475</td>
                                        <td class="text-danger">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                    <tr>
                                        <td><span class="buy-thumb"><i class="fa-solid fa-chevron-down"></i></i></span>
                                        </td>
                                        <td><span class="badge badge-success">Buy</span></td>
                                        <td><i class="fa-solid fa-bitcoin-sign"></i> DASH</td>
                                        <td>Using - Card *******2321</td>
                                        <td class="text-success">-0.000242 BTC</td>
                                        <td>-0.125 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection
