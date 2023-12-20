<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class coinone extends \ccxt\async\Exchange {
    public function public_get_orderbook($params = array()) {
        return $this->request('orderbook', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_ticker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_ticker_utc($params = array()) {
        return $this->request('ticker_utc', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_trades($params = array()) {
        return $this->request('trades', 'public', 'GET', $params, null, null, array());
    }
    public function v2public_get_range_units($params = array()) {
        return $this->request('range_units', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_markets_quote_currency($params = array()) {
        return $this->request('markets/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_markets_quote_currency_target_currency($params = array()) {
        return $this->request('markets/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_orderbook_quote_currency_target_currency($params = array()) {
        return $this->request('orderbook/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_trades_quote_currency_target_currency($params = array()) {
        return $this->request('trades/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_ticker_new_quote_currency($params = array()) {
        return $this->request('ticker_new/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_ticker_new_quote_currency_target_currency($params = array()) {
        return $this->request('ticker_new/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_ticker_utc_new_quote_currency($params = array()) {
        return $this->request('ticker_utc_new/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_ticker_utc_new_quote_currency_target_currency($params = array()) {
        return $this->request('ticker_utc_new/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_currencies($params = array()) {
        return $this->request('currencies', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_currencies_currency($params = array()) {
        return $this->request('currencies/{currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2public_get_chart_quote_currency_target_currency($params = array()) {
        return $this->request('chart/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function private_post_account_deposit_address($params = array()) {
        return $this->request('account/deposit_address', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_account_btc_deposit_address($params = array()) {
        return $this->request('account/btc_deposit_address', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_account_balance($params = array()) {
        return $this->request('account/balance', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_account_daily_balance($params = array()) {
        return $this->request('account/daily_balance', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_account_user_info($params = array()) {
        return $this->request('account/user_info', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_account_virtual_account($params = array()) {
        return $this->request('account/virtual_account', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_cancel_all($params = array()) {
        return $this->request('order/cancel_all', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_limit_buy($params = array()) {
        return $this->request('order/limit_buy', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_limit_sell($params = array()) {
        return $this->request('order/limit_sell', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_complete_orders($params = array()) {
        return $this->request('order/complete_orders', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_limit_orders($params = array()) {
        return $this->request('order/limit_orders', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_order_order_info($params = array()) {
        return $this->request('order/order_info', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transaction_auth_number($params = array()) {
        return $this->request('transaction/auth_number', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transaction_history($params = array()) {
        return $this->request('transaction/history', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transaction_krw_history($params = array()) {
        return $this->request('transaction/krw/history', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transaction_btc($params = array()) {
        return $this->request('transaction/btc', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_transaction_coin($params = array()) {
        return $this->request('transaction/coin', 'private', 'POST', $params, null, null, array());
    }
    public function v2private_post_account_balance($params = array()) {
        return $this->request('account/balance', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_account_deposit_address($params = array()) {
        return $this->request('account/deposit_address', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_account_user_info($params = array()) {
        return $this->request('account/user_info', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_account_virtual_account($params = array()) {
        return $this->request('account/virtual_account', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_limit_buy($params = array()) {
        return $this->request('order/limit_buy', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_limit_sell($params = array()) {
        return $this->request('order/limit_sell', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_limit_orders($params = array()) {
        return $this->request('order/limit_orders', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_complete_orders($params = array()) {
        return $this->request('order/complete_orders', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_order_query_order($params = array()) {
        return $this->request('order/query_order', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_transaction_auth_number($params = array()) {
        return $this->request('transaction/auth_number', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_transaction_btc($params = array()) {
        return $this->request('transaction/btc', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_transaction_history($params = array()) {
        return $this->request('transaction/history', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2private_post_transaction_krw_history($params = array()) {
        return $this->request('transaction/krw/history', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_account_balance_all($params = array()) {
        return $this->request('account/balance/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_account_balance($params = array()) {
        return $this->request('account/balance', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_account_trade_fee($params = array()) {
        return $this->request('account/trade_fee', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_account_trade_fee_quote_currency_target_currency($params = array()) {
        return $this->request('account/trade_fee/{quote_currency}/{target_currency}', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_limit($params = array()) {
        return $this->request('order/limit', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_cancel_all($params = array()) {
        return $this->request('order/cancel/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_open_orders($params = array()) {
        return $this->request('order/open_orders', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_open_orders_all($params = array()) {
        return $this->request('order/open_orders/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_complete_orders($params = array()) {
        return $this->request('order/complete_orders', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_complete_orders_all($params = array()) {
        return $this->request('order/complete_orders/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_order_info($params = array()) {
        return $this->request('order/info', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_transaction_krw_history($params = array()) {
        return $this->request('transaction/krw/history', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_transaction_coin_history($params = array()) {
        return $this->request('transaction/coin/history', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1private_post_transaction_coin_withdrawal_limit($params = array()) {
        return $this->request('transaction/coin/withdrawal/limit', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function publicGetOrderbook($params = array()) {
        return $this->request('orderbook', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetTicker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetTickerUtc($params = array()) {
        return $this->request('ticker_utc', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetTrades($params = array()) {
        return $this->request('trades', 'public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetRangeUnits($params = array()) {
        return $this->request('range_units', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetMarketsQuoteCurrency($params = array()) {
        return $this->request('markets/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetMarketsQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('markets/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetOrderbookQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('orderbook/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetTradesQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('trades/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetTickerNewQuoteCurrency($params = array()) {
        return $this->request('ticker_new/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetTickerNewQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('ticker_new/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetTickerUtcNewQuoteCurrency($params = array()) {
        return $this->request('ticker_utc_new/{quote_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetTickerUtcNewQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('ticker_utc_new/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetCurrencies($params = array()) {
        return $this->request('currencies', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetCurrenciesCurrency($params = array()) {
        return $this->request('currencies/{currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function v2PublicGetChartQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('chart/{quote_currency}/{target_currency}', 'v2Public', 'GET', $params, null, null, array());
    }
    public function privatePostAccountDepositAddress($params = array()) {
        return $this->request('account/deposit_address', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostAccountBtcDepositAddress($params = array()) {
        return $this->request('account/btc_deposit_address', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostAccountBalance($params = array()) {
        return $this->request('account/balance', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostAccountDailyBalance($params = array()) {
        return $this->request('account/daily_balance', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostAccountUserInfo($params = array()) {
        return $this->request('account/user_info', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostAccountVirtualAccount($params = array()) {
        return $this->request('account/virtual_account', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderCancelAll($params = array()) {
        return $this->request('order/cancel_all', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderCancel($params = array()) {
        return $this->request('order/cancel', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderLimitBuy($params = array()) {
        return $this->request('order/limit_buy', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderLimitSell($params = array()) {
        return $this->request('order/limit_sell', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderCompleteOrders($params = array()) {
        return $this->request('order/complete_orders', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderLimitOrders($params = array()) {
        return $this->request('order/limit_orders', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrderOrderInfo($params = array()) {
        return $this->request('order/order_info', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransactionAuthNumber($params = array()) {
        return $this->request('transaction/auth_number', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransactionHistory($params = array()) {
        return $this->request('transaction/history', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransactionKrwHistory($params = array()) {
        return $this->request('transaction/krw/history', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransactionBtc($params = array()) {
        return $this->request('transaction/btc', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostTransactionCoin($params = array()) {
        return $this->request('transaction/coin', 'private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostAccountBalance($params = array()) {
        return $this->request('account/balance', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostAccountDepositAddress($params = array()) {
        return $this->request('account/deposit_address', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostAccountUserInfo($params = array()) {
        return $this->request('account/user_info', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostAccountVirtualAccount($params = array()) {
        return $this->request('account/virtual_account', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderCancel($params = array()) {
        return $this->request('order/cancel', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderLimitBuy($params = array()) {
        return $this->request('order/limit_buy', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderLimitSell($params = array()) {
        return $this->request('order/limit_sell', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderLimitOrders($params = array()) {
        return $this->request('order/limit_orders', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderCompleteOrders($params = array()) {
        return $this->request('order/complete_orders', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostOrderQueryOrder($params = array()) {
        return $this->request('order/query_order', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostTransactionAuthNumber($params = array()) {
        return $this->request('transaction/auth_number', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostTransactionBtc($params = array()) {
        return $this->request('transaction/btc', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostTransactionHistory($params = array()) {
        return $this->request('transaction/history', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2PrivatePostTransactionKrwHistory($params = array()) {
        return $this->request('transaction/krw/history', 'v2Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostAccountBalanceAll($params = array()) {
        return $this->request('account/balance/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostAccountBalance($params = array()) {
        return $this->request('account/balance', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostAccountTradeFee($params = array()) {
        return $this->request('account/trade_fee', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostAccountTradeFeeQuoteCurrencyTargetCurrency($params = array()) {
        return $this->request('account/trade_fee/{quote_currency}/{target_currency}', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderLimit($params = array()) {
        return $this->request('order/limit', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderCancel($params = array()) {
        return $this->request('order/cancel', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderCancelAll($params = array()) {
        return $this->request('order/cancel/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderOpenOrders($params = array()) {
        return $this->request('order/open_orders', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderOpenOrdersAll($params = array()) {
        return $this->request('order/open_orders/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderCompleteOrders($params = array()) {
        return $this->request('order/complete_orders', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderCompleteOrdersAll($params = array()) {
        return $this->request('order/complete_orders/all', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostOrderInfo($params = array()) {
        return $this->request('order/info', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostTransactionKrwHistory($params = array()) {
        return $this->request('transaction/krw/history', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostTransactionCoinHistory($params = array()) {
        return $this->request('transaction/coin/history', 'v2_1Private', 'POST', $params, null, null, array());
    }
    public function v2_1PrivatePostTransactionCoinWithdrawalLimit($params = array()) {
        return $this->request('transaction/coin/withdrawal/limit', 'v2_1Private', 'POST', $params, null, null, array());
    }
}
