<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use ccxt\abstract\bl3p as Exchange;

class bl3p extends Exchange {

    public function describe() {
        return $this->deep_extend(parent::describe(), array(
            'id' => 'bl3p',
            'name' => 'BL3P',
            'countries' => array( 'NL' ), // Netherlands
            'rateLimit' => 1000,
            'version' => '1',
            'comment' => 'An exchange market by BitonicNL',
            'pro' => false,
            'has' => array(
                'CORS' => null,
                'spot' => true,
                'margin' => false,
                'swap' => false,
                'future' => false,
                'option' => false,
                'addMargin' => false,
                'cancelOrder' => true,
                'createOrder' => true,
                'createReduceOnlyOrder' => false,
                'createStopLimitOrder' => false,
                'createStopMarketOrder' => false,
                'createStopOrder' => false,
                'fetchBalance' => true,
                'fetchBorrowRate' => false,
                'fetchBorrowRateHistories' => false,
                'fetchBorrowRateHistory' => false,
                'fetchBorrowRates' => false,
                'fetchBorrowRatesPerSymbol' => false,
                'fetchFundingHistory' => false,
                'fetchFundingRate' => false,
                'fetchFundingRateHistory' => false,
                'fetchFundingRates' => false,
                'fetchIndexOHLCV' => false,
                'fetchLeverage' => false,
                'fetchMarginMode' => false,
                'fetchMarkOHLCV' => false,
                'fetchOpenInterestHistory' => false,
                'fetchOrderBook' => true,
                'fetchPosition' => false,
                'fetchPositionMode' => false,
                'fetchPositions' => false,
                'fetchPositionsRisk' => false,
                'fetchPremiumIndexOHLCV' => false,
                'fetchTicker' => true,
                'fetchTrades' => true,
                'fetchTradingFee' => false,
                'fetchTradingFees' => true,
                'fetchTransfer' => false,
                'fetchTransfers' => false,
                'reduceMargin' => false,
                'setLeverage' => false,
                'setMarginMode' => false,
                'setPositionMode' => false,
                'transfer' => false,
                'ws' => false,
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/1294454/28501752-60c21b82-6feb-11e7-818b-055ee6d0e754.jpg',
                'api' => array(
                    'rest' => 'https://api.bl3p.eu',
                ),
                'www' => 'https://bl3p.eu', // 'https://bitonic.nl'
                'doc' => array(
                    'https://github.com/BitonicNL/bl3p-api/tree/master/docs',
                    'https://bl3p.eu/api',
                    'https://bitonic.nl/en/api',
                ),
            ),
            'api' => array(
                'public' => array(
                    'get' => array(
                        '{market}/ticker',
                        '{market}/orderbook',
                        '{market}/trades',
                    ),
                ),
                'private' => array(
                    'post' => array(
                        '{market}/money/depth/full',
                        '{market}/money/order/add',
                        '{market}/money/order/cancel',
                        '{market}/money/order/result',
                        '{market}/money/orders',
                        '{market}/money/orders/history',
                        '{market}/money/trades/fetch',
                        'GENMKT/money/info',
                        'GENMKT/money/deposit_address',
                        'GENMKT/money/new_deposit_address',
                        'GENMKT/money/wallet/history',
                        'GENMKT/money/withdraw',
                    ),
                ),
            ),
            'markets' => array(
                'BTC/EUR' => $this->safe_market_structure(array( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR', 'baseId' => 'BTC', 'quoteId' => 'EUR', 'maker' => 0.0025, 'taker' => 0.0025, 'type' => 'spot', 'spot' => true )),
            ),
            'precisionMode' => TICK_SIZE,
        ));
    }

    public function parse_balance($response): array {
        $data = $this->safe_value($response, 'data', array());
        $wallets = $this->safe_value($data, 'wallets', array());
        $result = array( 'info' => $data );
        $codes = is_array($this->currencies) ? array_keys($this->currencies) : array();
        for ($i = 0; $i < count($codes); $i++) {
            $code = $codes[$i];
            $currency = $this->currency($code);
            $currencyId = $currency['id'];
            $wallet = $this->safe_value($wallets, $currencyId, array());
            $available = $this->safe_value($wallet, 'available', array());
            $balance = $this->safe_value($wallet, 'balance', array());
            $account = $this->account();
            $account['free'] = $this->safe_string($available, 'value');
            $account['total'] = $this->safe_string($balance, 'value');
            $result[$code] = $account;
        }
        return $this->safe_balance($result);
    }

    public function fetch_balance($params = array ()): array {
        /**
         * query for balance and get the amount of funds available for trading or funds locked in orders
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {array} a {@link https://github.com/ccxt/ccxt/wiki/Manual#balance-structure balance structure}
         */
        $this->load_markets();
        $response = $this->privatePostGENMKTMoneyInfo ($params);
        return $this->parse_balance($response);
    }

    public function parse_bid_ask($bidask, $priceKey = 0, $amountKey = 1) {
        $price = $this->safe_string($bidask, $priceKey);
        $size = $this->safe_string($bidask, $amountKey);
        return array(
            $this->parse_number(Precise::string_div($price, '100000.0')),
            $this->parse_number(Precise::string_div($size, '100000000.0')),
        );
    }

    public function fetch_order_book(string $symbol, ?int $limit = null, $params = array ()): array {
        /**
         * fetches information on open orders with bid (buy) and ask (sell) prices, volumes and other data
         * @param {string} $symbol unified $symbol of the $market to fetch the order book for
         * @param {int} [$limit] the maximum amount of order book entries to return
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {array} A dictionary of {@link https://github.com/ccxt/ccxt/wiki/Manual#order-book-structure order book structures} indexed by $market symbols
         */
        $market = $this->market($symbol);
        $request = array(
            'market' => $market['id'],
        );
        $response = $this->publicGetMarketOrderbook (array_merge($request, $params));
        $orderbook = $this->safe_value($response, 'data');
        return $this->parse_order_book($orderbook, $market['symbol'], null, 'bids', 'asks', 'price_int', 'amount_int');
    }

    public function parse_ticker($ticker, ?array $market = null): array {
        //
        // {
        //     "currency":"BTC",
        //     "last":32654.55595,
        //     "bid":32552.3642,
        //     "ask":32703.58231,
        //     "high":33500,
        //     "low":31943,
        //     "timestamp":1643372789,
        //     "volume":{
        //         "24h":2.27372413,
        //         "30d":320.79375456
        //     }
        // }
        //
        $symbol = $this->safe_symbol(null, $market);
        $timestamp = $this->safe_timestamp($ticker, 'timestamp');
        $last = $this->safe_string($ticker, 'last');
        $volume = $this->safe_value($ticker, 'volume', array());
        return $this->safe_ticker(array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'high' => $this->safe_string($ticker, 'high'),
            'low' => $this->safe_string($ticker, 'low'),
            'bid' => $this->safe_string($ticker, 'bid'),
            'bidVolume' => null,
            'ask' => $this->safe_string($ticker, 'ask'),
            'askVolume' => null,
            'vwap' => null,
            'open' => null,
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $this->safe_string($volume, '24h'),
            'quoteVolume' => null,
            'info' => $ticker,
        ), $market);
    }

    public function fetch_ticker(string $symbol, $params = array ()): array {
        /**
         * fetches a price $ticker, a statistical calculation with the information calculated over the past 24 hours for a specific $market
         * @param {string} $symbol unified $symbol of the $market to fetch the $ticker for
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {array} a {@link https://github.com/ccxt/ccxt/wiki/Manual#$ticker-structure $ticker structure}
         */
        $market = $this->market($symbol);
        $request = array(
            'market' => $market['id'],
        );
        $ticker = $this->publicGetMarketTicker (array_merge($request, $params));
        //
        // {
        //     "currency":"BTC",
        //     "last":32654.55595,
        //     "bid":32552.3642,
        //     "ask":32703.58231,
        //     "high":33500,
        //     "low":31943,
        //     "timestamp":1643372789,
        //     "volume":{
        //         "24h":2.27372413,
        //         "30d":320.79375456
        //     }
        // }
        //
        return $this->parse_ticker($ticker, $market);
    }

    public function parse_trade($trade, ?array $market = null): array {
        //
        // fetchTrades
        //
        //     {
        //         "trade_id" => "2518789",
        //         "date" => "1694348697745",
        //         "amount_int" => "2959153",
        //         "price_int" => "2416231440"
        //     }
        //
        $id = $this->safe_string($trade, 'trade_id');
        $timestamp = $this->safe_integer($trade, 'date');
        $price = $this->safe_string($trade, 'price_int');
        $amount = $this->safe_string($trade, 'amount_int');
        $market = $this->safe_market(null, $market);
        return $this->safe_trade(array(
            'id' => $id,
            'info' => $trade,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'symbol' => $market['symbol'],
            'type' => null,
            'side' => null,
            'order' => null,
            'takerOrMaker' => null,
            'price' => Precise::string_div($price, '100000'),
            'amount' => Precise::string_div($amount, '100000000'),
            'cost' => null,
            'fee' => null,
        ), $market);
    }

    public function fetch_trades(string $symbol, ?int $since = null, ?int $limit = null, $params = array ()): array {
        /**
         * get the list of most recent trades for a particular $symbol
         * @param {string} $symbol unified $symbol of the $market to fetch trades for
         * @param {int} [$since] timestamp in ms of the earliest trade to fetch
         * @param {int} [$limit] the maximum amount of trades to fetch
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {Trade[]} a list of {@link https://github.com/ccxt/ccxt/wiki/Manual#public-trades trade structures}
         */
        $market = $this->market($symbol);
        $response = $this->publicGetMarketTrades (array_merge(array(
            'market' => $market['id'],
        ), $params));
        //
        //    {
        //        "result" => "success",
        //        "data" => {
        //            "trades" => array(
        //                array(
        //                    "trade_id" => "2518789",
        //                    "date" => "1694348697745",
        //                    "amount_int" => "2959153",
        //                    "price_int" => "2416231440"
        //                ),
        //            )
        //        }
        //     }
        $result = $this->parse_trades($response['data']['trades'], $market, $since, $limit);
        return $result;
    }

    public function fetch_trading_fees($params = array ()) {
        /**
         * fetch the trading fees for multiple markets
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {array} a dictionary of {@link https://github.com/ccxt/ccxt/wiki/Manual#$fee-structure $fee structures} indexed by market symbols
         */
        $this->load_markets();
        $response = $this->privatePostGENMKTMoneyInfo ($params);
        //
        //     {
        //         "result" => "success",
        //         "data" => {
        //             "user_id" => "13396",
        //             "wallets" => {
        //                 "BTC" => array(
        //                     "balance" => array(
        //                         "value_int" => "0",
        //                         "display" => "0.00000000 BTC",
        //                         "currency" => "BTC",
        //                         "value" => "0.00000000",
        //                         "display_short" => "0.00 BTC"
        //                     ),
        //                     "available" => array(
        //                         "value_int" => "0",
        //                         "display" => "0.00000000 BTC",
        //                         "currency" => "BTC",
        //                         "value" => "0.00000000",
        //                         "display_short" => "0.00 BTC"
        //                     }
        //                 ),
        //                 ...
        //             ),
        //             "trade_fee" => "0.25"
        //         }
        //     }
        //
        $data = $this->safe_value($response, 'data', array());
        $feeString = $this->safe_string($data, 'trade_fee');
        $fee = $this->parse_number(Precise::string_div($feeString, '100'));
        $result = array();
        for ($i = 0; $i < count($this->symbols); $i++) {
            $symbol = $this->symbols[$i];
            $result[$symbol] = array(
                'info' => $data,
                'symbol' => $symbol,
                'maker' => $fee,
                'taker' => $fee,
                'percentage' => true,
                'tierBased' => false,
            );
        }
        return $result;
    }

    public function create_order(string $symbol, string $type, string $side, $amount, $price = null, $params = array ()) {
        /**
         * create a trade $order
         * @see https://github.com/BitonicNL/bl3p-api/blob/master/examples/nodejs/example.md#21---create-an-$order
         * @param {string} $symbol unified $symbol of the $market to create an $order in
         * @param {string} $type 'market' or 'limit'
         * @param {string} $side 'buy' or 'sell'
         * @param {float} $amount how much of currency you want to trade in units of base currency
         * @param {float} [$price] the $price at which the $order is to be fullfilled, in units of the quote currency, ignored in $market orders
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         *
         * EXCHANGE SPECIFIC PARAMETERS
         * @param {int} [$params->amount_funds] maximal EUR $amount to spend (*1e5)
         * @param {string} [$params->fee_currency] 'EUR' or 'BTC'
         * @return {array} an {@link https://github.com/ccxt/ccxt/wiki/Manual#$order-structure $order structure}
         */
        $market = $this->market($symbol);
        $amountString = $this->number_to_string($amount);
        $priceString = $this->number_to_string($price);
        $order = array(
            'market' => $market['id'],
            'amount_int' => intval(Precise::string_mul($amountString, '100000000')),
            'fee_currency' => $market['quote'],
            'type' => ($side === 'buy') ? 'bid' : 'ask',
        );
        if ($type === 'limit') {
            $order['price_int'] = intval(Precise::string_mul($priceString, '100000.0'));
        }
        $response = $this->privatePostMarketMoneyOrderAdd (array_merge($order, $params));
        $orderId = $this->safe_string($response['data'], 'order_id');
        return $this->safe_order(array(
            'info' => $response,
            'id' => $orderId,
        ), $market);
    }

    public function cancel_order(string $id, ?string $symbol = null, $params = array ()) {
        /**
         * cancels an open order
         * @param {string} $id order $id
         * @param {string} $symbol unified $symbol of the market the order was made in
         * @param {array} [$params] extra parameters specific to the bl3p api endpoint
         * @return {array} An {@link https://github.com/ccxt/ccxt/wiki/Manual#order-structure order structure}
         */
        $request = array(
            'order_id' => $id,
        );
        return $this->privatePostMarketMoneyOrderCancel (array_merge($request, $params));
    }

    public function sign($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = $this->implode_params($path, $params);
        $url = $this->urls['api']['rest'] . '/' . $this->version . '/' . $request;
        $query = $this->omit($params, $this->extract_params($path));
        if ($api === 'public') {
            if ($query) {
                $url .= '?' . $this->urlencode($query);
            }
        } else {
            $this->check_required_credentials();
            $nonce = $this->nonce();
            $body = $this->urlencode(array_merge(array( 'nonce' => $nonce ), $query));
            $secret = base64_decode($this->secret);
            // eslint-disable-next-line quotes
            $auth = $request . "\0" . $body;
            $signature = $this->hmac($this->encode($auth), $secret, 'sha512', 'base64');
            $headers = array(
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Rest-Key' => $this->apiKey,
                'Rest-Sign' => $signature,
            );
        }
        return array( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }
}
