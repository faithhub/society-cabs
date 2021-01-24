@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Payment Settings ')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <form action="{{route('admin.settings.payment.store')}}" method="POST">
                {{csrf_field()}}
                <h5>Payment Modes</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="stripe_secret_key" class="col-form-label">
                                    @lang('Stripe Payments')
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('CARD') == 1) checked  @endif  name="CARD" id="stripe_check" onchange="cardselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="card_field" @if(Setting::get('CARD') == 0) style="display: none;" @endif>
                            <div class="form-group row">
                                <label for="stripe_secret_key" class="col-xs-4 col-form-label">Stripe Secret key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('stripe_secret_key', '') }}" name="stripe_secret_key" id="stripe_secret_key"  placeholder="Stripe Secret key">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stripe_publishable_key" class="col-xs-4 col-form-label">Stripe Publishable key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('stripe_publishable_key', '') }}" name="stripe_publishable_key" id="stripe_publishable_key"  placeholder="Stripe Publishable key">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="UPI_key" class="col-form-label">
                                    PayPal Payments
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('paypal') == 1) checked  @endif  name="paypal" id="paypal_check" onchange="paypalselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="paypal_field" @if(Setting::get('paypal') == 0) style="display: none;" @endif>
                            <div class="form-group row">
                                <label for="paypal_client_id" class="col-xs-4 col-form-label">PayPal Client ID</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('paypal_client_id', '') }}" name="paypal_client_id" id="paypal_client_id"  placeholder="PayPal Client Id">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="stripe_secret_key" class="col-form-label">
                                    FlutterWave Payments
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('rave') == 1) checked  @endif  name="rave" id="rave_check" onchange="raveselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="rave_field" @if(Setting::get('rave') == 0) style="display: none;" @endif>
                            <div class="form-group row">
                                <label for="rave_publicKey" class="col-xs-4 col-form-label">Public Key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('rave_publicKey', '') }}" name="rave_publicKey" id="rave_publicKey"  placeholder="Public Key">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rave_encryptionKey" class="col-xs-4 col-form-label">Encryption Key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('rave_encryptionKey', '') }}" name="rave_encryptionKey" id="rave_encryptionKey"  placeholder="Encryption Key">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rave_encryptionKey" class="col-xs-4 col-form-label">Select Country</label>
                                <div class="col-xs-8">
                                    <select class="form-control" id="rave_country" name="rave_country">

                                        <option value="GH" @if(Setting::get('rave_country') === 'GH') selected @endif>@lang('GH')</option>

                                        <option value="KE" @if(Setting::get('rave_country') === 'KE') selected @endif>@lang('KE')</option>

                                        <option value="ZA" @if(Setting::get('rave_country') === 'ZA') selected @endif>@lang('ZA')</option>

                                        <option value="TZ" @if(Setting::get('rave_country') ==='TZ') selected @endif>@lang('TZ')</option>

                                        <option value="NG" @if(Setting::get('rave_country') ==='NG') selected @endif>@lang('NG')</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="UPI_key" class="col-form-label">
                                    UPI Payments
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('UPI') == 1) checked  @endif  name="UPI" id="upi_check" onchange="upiselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="upi_field" @if(Setting::get('UPI') == 0) style="display: none;" @endif>
                            <div class="form-group row">
                                <label for="UPI_key" class="col-xs-4 col-form-label">UPI Address</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('UPI_key', '') }}" name="UPI_key" id="UPI_key"  placeholder="UPI Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="razor_key" class="col-form-label">
                                    RazorPay Gateway
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('razor') == 1) checked  @endif  name="razor" id="razor_check" onchange="razorselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="razor_field" @if(Setting::get('razor') == 0) style="display: none;" @endif>
                            <div class="form-group row">
                                <label for="razor_key" class="col-xs-4 col-form-label">RazorPay Key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="{{Setting::get('razor_key', '') }}" name="razor_key" id="razor_key"  placeholder="RazorPay Key">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

       

                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="cash-payments" class="col-form-label">
                                    Cash Payments
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input @if(Setting::get('CASH') == 1) checked  @endif name="CASH" id="cash-payments" onchange="cardselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Payment Settings</h5>

                <div class="card card-block card-inverse card-info">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="daily_target" class="col-xs-4 col-form-label">Daily Rides Target</label>
                            <div class="col-xs-8">
                                <input class="form-control" 
                                    type="number"
                                    value="{{ Setting::get('daily_target', '0')  }}"
                                    id="daily_target"
                                    name="daily_target"
                                    min="0"
                                    required
                                    placeholder="Daily Target">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weekly_target" class="col-xs-4 col-form-label">Weekly Rides Target</label>
                            <div class="col-xs-8">
                                <input class="form-control" 
                                    type="number"
                                    value="{{ Setting::get('weekly_target', '0')  }}"
                                    id="weekly_target"
                                    name="weekly_target"
                                    min="0"
                                    required
                                    placeholder="Weekly Target">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tax_percentage" class="col-xs-4 col-form-label">Tax percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="{{ Setting::get('tax_percentage', '0')  }}"
                                    id="tax_percentage"
                                    name="tax_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Tax Percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surge_trigger" class="col-xs-4 col-form-label">Surge Trigger Point</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="{{ Setting::get('surge_trigger', '')  }}"
                                    id="surge_trigger"
                                    name="surge_trigger"
                                    min="0"
                                    required
                                    placeholder="Surge Trigger Point">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surge_percentage" class="col-xs-4 col-form-label">Surge percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="{{ Setting::get('surge_percentage', '0')  }}"
                                    id="surge_percentage"
                                    name="surge_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Surge percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commission_percentage" class="col-xs-4 col-form-label">Commission percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="{{ Setting::get('commission_percentage', '0') }}"
                                    id="commission_percentage"
                                    name="commission_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Commission percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="booking_prefix" class="col-xs-4 col-form-label">Booking ID Prefix</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="text"
                                    value="{{ Setting::get('booking_prefix', '0') }}"
                                    id="booking_prefix"
                                    name="booking_prefix"
                                    min="0"
                                    max="4"
                                    placeholder="Booking ID Prefix">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="base_price" class="col-xs-4 col-form-label">
                                Currency ( <strong>{{ Setting::get('currency', '$')  }} </strong>)
                            </label>
                            <div class="col-xs-8">
                                <select name="currency" class="form-control" required>
                                    <option @if(Setting::get('currency') == "$") selected @endif value="$">US Dollar (USD)</option>
                                    <option @if(Setting::get('currency') == "₹") selected @endif value="₹"> Indian Rupee (INR)</option>
                                    <option @if(Setting::get('currency') == "د.ك") selected @endif value="د.ك">Kuwaiti Dinar (KWD)</option>
                                    <option @if(Setting::get('currency') == "د.ب") selected @endif value="د.ب">Bahraini Dinar (BHD)</option>
                                    <option @if(Setting::get('currency') == "﷼") selected @endif value="﷼">Omani Rial (OMR)</option>
                                    <option @if(Setting::get('currency') == "£") selected @endif value="£">British Pound (GBP)</option>
                                    <option @if(Setting::get('currency') == "€") selected @endif value="€">Euro (EUR)</option>
                                    <option @if(Setting::get('currency') == "CHF") selected @endif value="CHF">Swiss Franc (CHF)</option>
                                    <option @if(Setting::get('currency') == "ل.د") selected @endif value="ل.د">Libyan Dinar (LYD)</option>
                                    <option @if(Setting::get('currency') == "B$") selected @endif value="B$">Bruneian Dollar (BND)</option>
                                    <option @if(Setting::get('currency') == "S$") selected @endif value="S$">Singapore Dollar (SGD)</option>
                                    <option @if(Setting::get('currency') == "AU$") selected @endif value="AU$"> Australian Dollar (AUD)</option>
									<option @if(Setting::get('currency') == "KES") selected @endif value="KES"> Kenya Shilling (KES)</option>
									<option @if(Setting::get('currency') == "R") selected @endif value="R"> SouthAfrica Rand (R)</option>
                                    <option @if(Setting::get('currency') == "Kr.") selected @endif value="Kr."> Danish krone (Kr.)</option>
                                    <option @if(Setting::get('currency') == "₪") selected @endif value="₪"> Israeli Shekel (₪)</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-4">
                        <a href="{{ route('admin.index') }}" class="btn btn-warning btn-block">Back</a>
                    </div>
                    <div class="offset-xs-4 col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block">Update Site Settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
function cardselect()
{
    if($('#stripe_check').is(":checked")) {
        $("#card_field").fadeIn(700);
    } else {
        $("#card_field").fadeOut(700);
    }
}

function upiselect()
{
    if($('#upi_check').is(":checked")) {
        $("#upi_field").fadeIn(700);
    } else {
        $("#upi_field").fadeOut(700);
    }
}

function razorselect()
{
    if($('#razor_check').is(":checked")) {
        $("#razor_field").fadeIn(700);
    } else {
        $("#razor_field").fadeOut(700);
    }
}

function paypalselect()
{
    if($('#paypal_check').is(":checked")) {
        $("#paypal_field").fadeIn(700);
    } else {
        $("#paypal_field").fadeOut(700);
    }
}

function raveselect()
{
    if($('#rave_check').is(":checked")) {
        $("#rave_field").fadeIn(700);
    } else {
        $("#rave_field").fadeOut(700);
    }
}
</script>
@endsection
