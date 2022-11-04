@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <div class="container-fluid">
                        <div class="row moneda form-group">
                          <div class="col-sm-6">
                            <select id="moneda-uno" class="form-control">
                                <option value="AED">AED</option>
                                <option value="ARS">ARS</option>
                                <option value="AUD">AUD</option>
                                <option value="BGN">BGN</option>
                                <option value="BRL">BRL</option>
                                <option value="BSD">BSD</option>
                                <option value="CAD">CAD</option>
                                <option value="CHF">CHF</option>
                                <option value="CLP">CLP</option>
                                <option value="CNY">CNY</option>
                                <option value="COP">COP</option>
                                <option value="CZK">CZK</option>
                                <option value="DKK">DKK</option>
                                <option value="DOP">DOP</option>
                                <option value="EGP">EGP</option>
                                <option value="EUR">EUR</option>
                                <option value="FJD">FJD</option>
                                <option value="GBP">GBP</option>
                                <option value="GTQ">GTQ</option>
                                <option value="HKD">HKD</option>
                                <option value="HRK">HRK</option>
                                <option value="HUF">HUF</option>
                                <option value="IDR">IDR</option>
                                <option value="ILS">ILS</option>
                                <option value="INR">INR</option>
                                <option value="ISK">ISK</option>
                                <option value="JPY">JPY</option>
                                <option value="KRW">KRW</option>
                                <option value="KZT">KZT</option>
                                <option value="MXN">MXN</option>
                                <option value="MYR">MYR</option>
                                <option value="NOK">NOK</option>
                                <option value="NZD">NZD</option>
                                <option value="PAB">PAB</option>
                                <option value="PEN">PEN</option>
                                <option value="PHP">PHP</option>
                                <option value="PKR">PKR</option>
                                <option value="PLN">PLN</option>
                                <option value="PYG">PYG</option>
                                <option value="RON">RON</option>
                                <option value="RUB">RUB</option>
                                <option value="SAR">SAR</option>
                                <option value="SEK">SEK</option>
                                <option value="SGD">SGD</option>
                                <option value="THB">THB</option>
                                <option value="TRY">TRY</option>
                                <option value="TWD">TWD</option>
                                <option value="UAH">UAH</option>
                                <option value="USD" selected>USD</option>
                                <option value="UYU">UYU</option>
                                <option value="VND">VND</option>
                                <option value="ZAR">ZAR</option>
                               </select>
                            </div>
                          <div class="col-sm-6">
                            <input 
                            class="form-control"
                            type="number" 
                            id="cantidad-uno" 
                            placeholder="0"  
                            value="1"
                            ></div>
                            <div>
                            <button class="btn btn-warning" id="taza">
                                cambio
                            </button>
                            <span class="badge bg-success cambio" id="cambio"></span>
                        </div> 
                        </div>
                        <div class="row moneda form-group">
                            <div class="col-sm-6">
                                <select id="moneda-dos" class="form-control">
                                    <option value="AED">AED</option>
                                    <option value="ARS">ARS</option>
                                    <option value="AUD">AUD</option>
                                    <option value="BGN">BGN</option>
                                    <option value="BRL">BRL</option>
                                    <option value="BSD">BSD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CLP">CLP</option>
                                    <option value="CNY">CNY</option>
                                    <option value="COP" selected>COP</option>
                                    <option value="CZK">CZK</option>
                                    <option value="DKK">DKK</option>
                                    <option value="DOP">DOP</option>
                                    <option value="EGP">EGP</option>
                                    <option value="EUR">EUR</option>
                                    <option value="FJD">FJD</option>
                                    <option value="GBP">GBP</option>
                                    <option value="GTQ">GTQ</option>
                                    <option value="HKD">HKD</option>
                                    <option value="HRK">HRK</option>
                                    <option value="HUF">HUF</option>
                                    <option value="IDR">IDR</option>
                                    <option value="ILS">ILS</option>
                                    <option value="INR">INR</option>
                                    <option value="ISK">ISK</option>
                                    <option value="JPY">JPY</option>
                                    <option value="KRW">KRW</option>
                                    <option value="KZT">KZT</option>
                                    <option value="MXN">MXN</option>
                                    <option value="MYR">MYR</option>
                                    <option value="NOK">NOK</option>
                                    <option value="NZD">NZD</option>
                                    <option value="PAB">PAB</option>
                                    <option value="PEN">PEN</option>
                                    <option value="PHP">PHP</option>
                                    <option value="PKR">PKR</option>
                                    <option value="PLN">PLN</option>
                                    <option value="PYG">PYG</option>
                                    <option value="RON">RON</option>
                                    <option value="RUB">RUB</option>
                                    <option value="SAR">SAR</option>
                                    <option value="SEK">SEK</option>
                                    <option value="SGD">SGD</option>
                                    <option value="THB">THB</option>
                                    <option value="TRY">TRY</option>
                                    <option value="TWD">TWD</option>
                                    <option value="UAH">UAH</option>
                                    <option value="USD">USD</option>
                                    <option value="UYU">UYU</option>
                                    <option value="VND">VND</option>
                                    <option value="ZAR">ZAR</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input 
                                    class="form-control"
                                type="number" 
                                id="cantidad-dos" 
                                placeholder="0"  
                                > 
                            </div>
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
