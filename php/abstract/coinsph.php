<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class coinsph extends \ccxt\Exchange {
    public function public_get_openapi_v1_ping($params = array()) {
        return $this->request('openapi/v1/ping', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_openapi_v1_time($params = array()) {
        return $this->request('openapi/v1/time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_openapi_quote_v1_ticker_24hr($params = array()) {
        return $this->request('openapi/quote/v1/ticker/24hr', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbolAndNoSymbols" => 40, "byNumberOfSymbols" => [[101, 40], [21, 20], [0, 1]]));
    }
    public function public_get_openapi_quote_v1_ticker_price($params = array()) {
        return $this->request('openapi/quote/v1/ticker/price', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbol" => 2));
    }
    public function public_get_openapi_quote_v1_ticker_bookticker($params = array()) {
        return $this->request('openapi/quote/v1/ticker/bookTicker', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbol" => 2));
    }
    public function public_get_openapi_v1_exchangeinfo($params = array()) {
        return $this->request('openapi/v1/exchangeInfo', 'public', 'GET', $params, null, null, array("cost" => 10));
    }
    public function public_get_openapi_quote_v1_depth($params = array()) {
        return $this->request('openapi/quote/v1/depth', 'public', 'GET', $params, null, null, array("cost" => 1, "byLimit" => [[101, 5], [0, 1]]));
    }
    public function public_get_openapi_quote_v1_klines($params = array()) {
        return $this->request('openapi/quote/v1/klines', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_openapi_quote_v1_trades($params = array()) {
        return $this->request('openapi/quote/v1/trades', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_openapi_v1_pairs($params = array()) {
        return $this->request('openapi/v1/pairs', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_openapi_quote_v1_avgprice($params = array()) {
        return $this->request('openapi/quote/v1/avgPrice', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_openapi_v1_account($params = array()) {
        return $this->request('openapi/v1/account', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function private_get_openapi_v1_openorders($params = array()) {
        return $this->request('openapi/v1/openOrders', 'private', 'GET', $params, null, null, array("cost" => 3, "noSymbol" => 40));
    }
    public function private_get_openapi_v1_asset_tradefee($params = array()) {
        return $this->request('openapi/v1/asset/tradeFee', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_openapi_v1_order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'GET', $params, null, null, array("cost" => 2));
    }
    public function private_get_openapi_v1_historyorders($params = array()) {
        return $this->request('openapi/v1/historyOrders', 'private', 'GET', $params, null, null, array("cost" => 10, "noSymbol" => 40));
    }
    public function private_get_openapi_v1_mytrades($params = array()) {
        return $this->request('openapi/v1/myTrades', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function private_get_openapi_v1_capital_deposit_history($params = array()) {
        return $this->request('openapi/v1/capital/deposit/history', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_openapi_v1_capital_withdraw_history($params = array()) {
        return $this->request('openapi/v1/capital/withdraw/history', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_post_openapi_v1_order_test($params = array()) {
        return $this->request('openapi/v1/order/test', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_openapi_v1_order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_openapi_v1_capital_withdraw_apply($params = array()) {
        return $this->request('openapi/v1/capital/withdraw/apply', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_openapi_v1_capital_deposit_apply($params = array()) {
        return $this->request('openapi/v1/capital/deposit/apply', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_delete_openapi_v1_order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_openapi_v1_openorders($params = array()) {
        return $this->request('openapi/v1/openOrders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiV1Ping($params = array()) {
        return $this->request('openapi/v1/ping', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiV1Time($params = array()) {
        return $this->request('openapi/v1/time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiQuoteV1Ticker24hr($params = array()) {
        return $this->request('openapi/quote/v1/ticker/24hr', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbolAndNoSymbols" => 40, "byNumberOfSymbols" => [[101, 40], [21, 20], [0, 1]]));
    }
    public function publicGetOpenapiQuoteV1TickerPrice($params = array()) {
        return $this->request('openapi/quote/v1/ticker/price', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbol" => 2));
    }
    public function publicGetOpenapiQuoteV1TickerBookTicker($params = array()) {
        return $this->request('openapi/quote/v1/ticker/bookTicker', 'public', 'GET', $params, null, null, array("cost" => 1, "noSymbol" => 2));
    }
    public function publicGetOpenapiV1ExchangeInfo($params = array()) {
        return $this->request('openapi/v1/exchangeInfo', 'public', 'GET', $params, null, null, array("cost" => 10));
    }
    public function publicGetOpenapiQuoteV1Depth($params = array()) {
        return $this->request('openapi/quote/v1/depth', 'public', 'GET', $params, null, null, array("cost" => 1, "byLimit" => [[101, 5], [0, 1]]));
    }
    public function publicGetOpenapiQuoteV1Klines($params = array()) {
        return $this->request('openapi/quote/v1/klines', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiQuoteV1Trades($params = array()) {
        return $this->request('openapi/quote/v1/trades', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiV1Pairs($params = array()) {
        return $this->request('openapi/v1/pairs', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetOpenapiQuoteV1AvgPrice($params = array()) {
        return $this->request('openapi/quote/v1/avgPrice', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetOpenapiV1Account($params = array()) {
        return $this->request('openapi/v1/account', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function privateGetOpenapiV1OpenOrders($params = array()) {
        return $this->request('openapi/v1/openOrders', 'private', 'GET', $params, null, null, array("cost" => 3, "noSymbol" => 40));
    }
    public function privateGetOpenapiV1AssetTradeFee($params = array()) {
        return $this->request('openapi/v1/asset/tradeFee', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetOpenapiV1Order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'GET', $params, null, null, array("cost" => 2));
    }
    public function privateGetOpenapiV1HistoryOrders($params = array()) {
        return $this->request('openapi/v1/historyOrders', 'private', 'GET', $params, null, null, array("cost" => 10, "noSymbol" => 40));
    }
    public function privateGetOpenapiV1MyTrades($params = array()) {
        return $this->request('openapi/v1/myTrades', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function privateGetOpenapiV1CapitalDepositHistory($params = array()) {
        return $this->request('openapi/v1/capital/deposit/history', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetOpenapiV1CapitalWithdrawHistory($params = array()) {
        return $this->request('openapi/v1/capital/withdraw/history', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privatePostOpenapiV1OrderTest($params = array()) {
        return $this->request('openapi/v1/order/test', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostOpenapiV1Order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostOpenapiV1CapitalWithdrawApply($params = array()) {
        return $this->request('openapi/v1/capital/withdraw/apply', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostOpenapiV1CapitalDepositApply($params = array()) {
        return $this->request('openapi/v1/capital/deposit/apply', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteOpenapiV1Order($params = array()) {
        return $this->request('openapi/v1/order', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteOpenapiV1OpenOrders($params = array()) {
        return $this->request('openapi/v1/openOrders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
}
