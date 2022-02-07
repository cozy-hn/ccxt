<?php

namespace ccxt\async;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use \ccxt\ExchangeError;
use \ccxt\ArgumentsRequired;
use \ccxt\AddressPending;
use \ccxt\NotSupported;
use \ccxt\Precise;

class buda extends Exchange {

    public function describe() {
        return $this->deep_extend(parent::describe (), array(
            'id' => 'buda',
            'name' => 'Buda',
            'countries' => array( 'AR', 'CL', 'CO', 'PE' ),
            'rateLimit' => 1000,
            'version' => 'v2',
            'has' => array(
                'CORS' => null,
                'spot' => true,
                'margin' => false,
                'swap' => false,
                'future' => false,
                'option' => false,
                'addMargin' => false,
                'cancelOrder' => true,
                'createDepositAddress' => true,
                'createOrder' => true,
                'createReduceOnlyOrder' => false,
                'fetchBalance' => true,
                'fetchBorrowRate' => false,
                'fetchBorrowRateHistories' => false,
                'fetchBorrowRateHistory' => false,
                'fetchBorrowRates' => false,
                'fetchBorrowRatesPerSymbol' => false,
                'fetchClosedOrders' => true,
                'fetchCurrencies' => true,
                'fetchDepositAddress' => true,
                'fetchDeposits' => true,
                'fetchFundingFees' => true,
                'fetchFundingHistory' => false,
                'fetchFundingRate' => false,
                'fetchFundingRateHistory' => false,
                'fetchFundingRates' => false,
                'fetchIndexOHLCV' => false,
                'fetchIsolatedPositions' => false,
                'fetchLeverage' => false,
                'fetchMarkets' => true,
                'fetchMarkOHLCV' => false,
                'fetchMyTrades' => null,
                'fetchOHLCV' => true,
                'fetchOpenOrders' => true,
                'fetchOrder' => true,
                'fetchOrderBook' => true,
                'fetchOrders' => true,
                'fetchPosition' => false,
                'fetchPositions' => false,
                'fetchPositionsRisk' => false,
                'fetchPremiumIndexOHLCV' => false,
                'fetchTicker' => true,
                'fetchTrades' => true,
                'fetchWithdrawals' => true,
                'reduceMargin' => false,
                'setLeverage' => false,
                'setMarginMode' => false,
                'setPositionMode' => false,
                'withdraw' => true,
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/1294454/47380619-8a029200-d706-11e8-91e0-8a391fe48de3.jpg',
                'api' => 'https://www.buda.com/api',
                'www' => 'https://www.buda.com',
                'doc' => 'https://api.buda.com',
                'fees' => 'https://www.buda.com/comisiones',
            ),
            'status' => array(
                'status' => 'error',
                'updated' => null,
                'eta' => null,
                'url' => null,
            ),
            'api' => array(
                'public' => array(
                    'get' => array(
                        'pairs',
                        'markets',
                        'currencies',
                        'markets/{market}',
                        'markets/{market}/ticker',
                        'markets/{market}/volume',
                        'markets/{market}/order_book',
                        'markets/{market}/trades',
                        'currencies/{currency}/fees/deposit',
                        'currencies/{currency}/fees/withdrawal',
                        'tv/history',
                    ),
                    'post' => array(
                        'markets/{market}/quotations',
                    ),
                ),
                'private' => array(
                    'get' => array(
                        'balances',
                        'balances/{currency}',
                        'currencies/{currency}/balances',
                        'orders',
                        'orders/{id}',
                        'markets/{market}/orders',
                        'deposits',
                        'currencies/{currency}/deposits',
                        'withdrawals',
                        'currencies/{currency}/withdrawals',
                        'currencies/{currency}/receive_addresses',
                        'currencies/{currency}/receive_addresses/{id}',
                    ),
                    'post' => array(
                        'markets/{market}/orders',
                        'currencies/{currency}/deposits',
                        'currencies/{currency}/withdrawals',
                        'currencies/{currency}/simulated_withdrawals',
                        'currencies/{currency}/receive_addresses',
                    ),
                    'put' => array(
                        'orders/{id}',
                    ),
                ),
            ),
            'timeframes' => array(
                '1m' => '1',
                '5m' => '5',
                '30m' => '30',
                '1h' => '60',
                '2h' => '120',
                '1d' => 'D',
                '1w' => 'W',
            ),
            'fees' => array(
                'trading' => array(
                    'tierBased' => true,
                    'percentage' => true,
                    'taker' => 0.008,  // 0.8%
                    'maker' => 0.004,  // 0.4%
                    'tiers' => array(
                        'taker' => array(
                            array( 0, 0.008 ),  // 0.8%
                            array( 2000, 0.007 ),  // 0.7%
                            array( 20000, 0.006 ),  // 0.6%
                            array( 100000, 0.005 ),  // 0.5%
                            array( 500000, 0.004 ),  // 0.4%
                            array( 2500000, 0.003 ),  // 0.3%
                            array( 12500000, 0.002 ),  // 0.2%
                        ),
                        'maker' => array(
                            array( 0, 0.004 ),  // 0.4%
                            array( 2000, 0.0035 ),  // 0.35%
                            array( 20000, 0.003 ),  // 0.3%
                            array( 100000, 0.0025 ),  // 0.25%
                            array( 500000, 0.002 ),  // 0.2%
                            array( 2500000, 0.0015 ),  // 0.15%
                            array( 12500000, 0.001 ),  // 0.1%
                        ),
                    ),
                ),
            ),
            'exceptions' => array(
                'not_authorized' => '\\ccxt\\AuthenticationError',  // array( message => 'Invalid credentials', code => 'not_authorized' )
                'forbidden' => '\\ccxt\\PermissionDenied',  // array( message => 'You dont have access to this resource', code => 'forbidden' )
                'invalid_record' => '\\ccxt\\ExchangeError',  // array( message => 'Validation Failed', code => 'invalid_record', errors => array() )
                'not_found' => '\\ccxt\\ExchangeError',  // array( message => 'Not found', code => 'not_found' )
                'parameter_missing' => '\\ccxt\\ExchangeError',  // array( message => 'Parameter missing', code => 'parameter_missing' )
                'bad_parameter' => '\\ccxt\\ExchangeError',  // array( message => 'Bad Parameter format', code => 'bad_parameter' )
            ),
        ));
    }

    public function fetch_currency_info($currency, $currencies = null) {
        if (!$currencies) {
            $response = yield $this->publicGetCurrencies ();
            //
            //     {
            //         "currencies":[
            //             {
            //                 "id":"BTC",
            //                 "symbol":"฿",
            //                 "managed":true,
            //                 "input_decimals":8,
            //                 "display_decimals":8,
            //                 "timezone":"UTC",
            //                 "deposit_minimum":["0.0","BTC"],
            //                 "withdrawal_minimum":["0.00001","BTC"],
            //                 "max_digits_for_decimals":6,
            //                 "crypto":true,
            //                 "address_explorer":"https://blockchair.com/bitcoin/address/",
            //                 "tx_explorer":"https://blockchair.com/bitcoin/transaction/",
            //                 "amount_to_micro_multiplier":1000000000000
            //             }
            //         ]
            //     }
            //
            $currencies = $this->safe_value($response, 'currencies');
        }
        for ($i = 0; $i < count($currencies); $i++) {
            $currencyInfo = $currencies[$i];
            if ($currencyInfo['id'] === $currency) {
                return $currencyInfo;
            }
        }
        return null;
    }

    public function fetch_markets($params = array ()) {
        $marketsResponse = yield $this->publicGetMarkets ($params);
        $markets = $this->safe_value($marketsResponse, 'markets');
        $currenciesResponse = yield $this->publicGetCurrencies ();
        $currencies = $this->safe_value($currenciesResponse, 'currencies');
        $result = array();
        for ($i = 0; $i < count($markets); $i++) {
            $market = $markets[$i];
            $id = $this->safe_string($market, 'id');
            $baseId = $this->safe_string($market, 'base_currency');
            $quoteId = $this->safe_string($market, 'quote_currency');
            $base = $this->safe_currency_code($baseId);
            $quote = $this->safe_currency_code($quoteId);
            $baseInfo = yield $this->fetch_currency_info($baseId, $currencies);
            $quoteInfo = yield $this->fetch_currency_info($quoteId, $currencies);
            $symbol = $base . '/' . $quote;
            $pricePrecisionString = $this->safe_string($quoteInfo, 'input_decimals');
            $priceLimit = $this->parse_precision($pricePrecisionString);
            $precision = array(
                'amount' => $this->safe_integer($baseInfo, 'input_decimals'),
                'price' => intval($pricePrecisionString),
            );
            $minimumOrderAmount = $this->safe_value($market, 'minimum_order_amount', array());
            $limits = array(
                'amount' => array(
                    'min' => $this->safe_number($minimumOrderAmount, 0),
                    'max' => null,
                ),
                'price' => array(
                    'min' => $priceLimit,
                    'max' => null,
                ),
                'cost' => array(
                    'min' => null,
                    'max' => null,
                ),
            );
            $result[] = array(
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'type' => 'spot',
                'spot' => true,
                'active' => true,
                'precision' => $precision,
                'limits' => $limits,
                'info' => $market,
            );
        }
        return $result;
    }

    public function fetch_currencies($params = array ()) {
        $response = yield $this->publicGetCurrencies ();
        //
        //     {
        //         "currencies":[
        //             {
        //                 "id":"BTC",
        //                 "symbol":"฿",
        //                 "managed":true,
        //                 "input_decimals":8,
        //                 "display_decimals":8,
        //                 "timezone":"UTC",
        //                 "deposit_minimum":["0.0","BTC"],
        //                 "withdrawal_minimum":["0.00001","BTC"],
        //                 "max_digits_for_decimals":6,
        //                 "crypto":true,
        //                 "address_explorer":"https://blockchair.com/bitcoin/address/",
        //                 "tx_explorer":"https://blockchair.com/bitcoin/transaction/",
        //                 "amount_to_micro_multiplier":1000000000000
        //             }
        //         ]
        //     }
        //
        $currencies = $response['currencies'];
        $result = array();
        for ($i = 0; $i < count($currencies); $i++) {
            $currency = $currencies[$i];
            $managed = $this->safe_value($currency, 'managed', false);
            if (!$managed) {
                continue;
            }
            $id = $this->safe_string($currency, 'id');
            $code = $this->safe_currency_code($id);
            $precision = $this->safe_number($currency, 'input_decimals');
            $minimum = pow(10, -$precision);
            $depositMinimum = $this->safe_value($currency, 'deposit_minimum', array());
            $withdrawalMinimum = $this->safe_value($currency, 'withdrawal_minimum', array());
            $minDeposit = $this->safe_number($depositMinimum, 0);
            $minWithdraw = $this->safe_number($withdrawalMinimum, 0);
            $result[$code] = array(
                'id' => $id,
                'code' => $code,
                'info' => $currency,
                'name' => null,
                'active' => true,
                'deposit' => null,
                'withdraw' => null,
                'fee' => null,
                'precision' => $precision,
                'limits' => array(
                    'amount' => array(
                        'min' => $minimum,
                        'max' => null,
                    ),
                    'deposit' => array(
                        'min' => $minDeposit,
                        'max' => null,
                    ),
                    'withdraw' => array(
                        'min' => $minWithdraw,
                    ),
                ),
            );
        }
        return $result;
    }

    public function fetch_funding_fees($codes = null, $params = array ()) {
        //  by default it will try load withdrawal fees of all currencies (with separate requests)
        //  however if you define $codes = array( 'ETH', 'BTC' ) in args it will only load those
        yield $this->load_markets();
        $withdrawFees = array();
        $depositFees = array();
        $info = array();
        if ($codes === null) {
            $codes = is_array($this->currencies) ? array_keys($this->currencies) : array();
        }
        for ($i = 0; $i < count($codes); $i++) {
            $code = $codes[$i];
            $currency = $this->currency($code);
            $request = array( 'currency' => $currency['id'] );
            $withdrawResponse = yield $this->publicGetCurrenciesCurrencyFeesWithdrawal ($request);
            $depositResponse = yield $this->publicGetCurrenciesCurrencyFeesDeposit ($request);
            $withdrawFees[$code] = $this->parse_funding_fee($withdrawResponse['fee']);
            $depositFees[$code] = $this->parse_funding_fee($depositResponse['fee']);
            $info[$code] = array(
                'withdraw' => $withdrawResponse,
                'deposit' => $depositResponse,
            );
        }
        return array(
            'withdraw' => $withdrawFees,
            'deposit' => $depositFees,
            'info' => $info,
        );
    }

    public function parse_funding_fee($fee, $type = null) {
        if ($type === null) {
            $type = $fee['name'];
        }
        if ($type === 'withdrawal') {
            $type = 'withdraw';
        }
        return array(
            'type' => $type,
            'currency' => $fee['base'][1],
            'rate' => $fee['percent'],
            'cost' => floatval($fee['base'][0]),
        );
    }

    public function fetch_ticker($symbol, $params = array ()) {
        yield $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'market' => $market['id'],
        );
        $response = yield $this->publicGetMarketsMarketTicker (array_merge($request, $params));
        //
        //     {
        //         "ticker":{
        //             "market_id":"ETH-BTC",
        //             "last_price":["0.07300001","BTC"],
        //             "min_ask":["0.07716895","BTC"],
        //             "max_bid":["0.0754966","BTC"],
        //             "volume":["0.168965697","ETH"],
        //             "price_variation_24h":"-0.046",
        //             "price_variation_7d":"-0.085"
        //         }
        //     }
        //
        $ticker = $this->safe_value($response, 'ticker');
        return $this->parse_ticker($ticker, $market);
    }

    public function parse_ticker($ticker, $market = null) {
        //
        // fetchTicker
        //
        //     {
        //         "market_id":"ETH-BTC",
        //         "last_price":["0.07300001","BTC"],
        //         "min_ask":["0.07716895","BTC"],
        //         "max_bid":["0.0754966","BTC"],
        //         "volume":["0.168965697","ETH"],
        //         "price_variation_24h":"-0.046",
        //         "price_variation_7d":"-0.085"
        //     }
        //
        $timestamp = $this->milliseconds();
        $marketId = $this->safe_string($ticker, 'market_id');
        $symbol = $this->safe_symbol($marketId, $market, '-');
        $lastPrice = $this->safe_value($ticker, 'last_price', array());
        $last = $this->safe_string($lastPrice, 0);
        $percentage = $this->safe_string($ticker, 'price_variation_24h');
        $percentage = Precise::string_mul($percentage, '100');
        $maxBid = $this->safe_value($ticker, 'max_bid', array());
        $minAsk = $this->safe_value($ticker, 'min_ask', array());
        $baseVolume = $this->safe_value($ticker, 'volume', array());
        return $this->safe_ticker(array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'high' => null,
            'low' => null,
            'bid' => $this->safe_string($maxBid, 0),
            'bidVolume' => null,
            'ask' => $this->safe_string($minAsk, 0),
            'askVolume' => null,
            'vwap' => null,
            'open' => null,
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => $percentage,
            'average' => null,
            'baseVolume' => $this->safe_string($baseVolume, 0),
            'quoteVolume' => null,
            'info' => $ticker,
        ), $market, false);
    }

    public function fetch_trades($symbol, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'market' => $market['id'],
        );
        // the $since argument works backwards – returns trades up to the specified timestamp
        // therefore not implemented here
        // the method is still available for users to be able to traverse backwards in time
        // by using the timestamp from the first received trade upon each iteration
        if ($limit !== null) {
            $request['limit'] = $limit; // 50 max
        }
        $response = yield $this->publicGetMarketsMarketTrades (array_merge($request, $params));
        //
        //     { trades => {      market_id =>   "ETH-BTC",
        //                      timestamp =>    null,
        //                 last_timestamp =>   "1536901277302",
        //                        entries => array( array( "1540077456791", "0.0063767", "0.03", "sell", 479842 ),
        //                                   array( "1539916642772", "0.01888263", "0.03019563", "sell", 479438 ),
        //                                   array( "1539834081787", "0.023718648", "0.031001", "sell", 479069 ),
        //                                   ... )
        //
        return $this->parse_trades($response['trades']['entries'], $market, $since, $limit);
    }

    public function parse_trade($trade, $market = null) {
        //
        // fetchTrades (public)
        //  array( "1540077456791", "0.0063767", "0.03", "sell", 479842 )
        //
        $timestamp = null;
        $side = null;
        $type = null;
        $priceString = null;
        $amountString = null;
        $id = null;
        $order = null;
        $fee = null;
        $symbol = null;
        if ($market) {
            $symbol = $market['symbol'];
        }
        if (gettype($trade) === 'array' && count(array_filter(array_keys($trade), 'is_string')) == 0) {
            $timestamp = $this->safe_integer($trade, 0);
            $priceString = $this->safe_string($trade, 1);
            $amountString = $this->safe_string($trade, 2);
            $side = $this->safe_string($trade, 3);
            $id = $this->safe_string($trade, 4);
        }
        return $this->safe_trade(array(
            'id' => $id,
            'order' => $order,
            'info' => $trade,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'symbol' => $symbol,
            'type' => $type,
            'side' => $side,
            'takerOrMaker' => null,
            'price' => $priceString,
            'amount' => $amountString,
            'cost' => null,
            'fee' => $fee,
        ), $market);
    }

    public function fetch_order_book($symbol, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'market' => $market['id'],
        );
        $response = yield $this->publicGetMarketsMarketOrderBook (array_merge($request, $params));
        $orderbook = $this->safe_value($response, 'order_book');
        return $this->parse_order_book($orderbook, $symbol);
    }

    public function fetch_ohlcv($symbol, $timeframe = '1m', $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $market = $this->market($symbol);
        if ($since === null) {
            $since = $this->milliseconds() - 86400000;
        }
        $request = array(
            'symbol' => $market['id'],
            'resolution' => $this->timeframes[$timeframe],
            'from' => $since / 1000,
            'to' => $this->seconds(),
        );
        $response = yield $this->publicGetTvHistory (array_merge($request, $params));
        return $this->parse_trading_view_ohlcv($response, $market, $timeframe, $since, $limit);
    }

    public function parse_balance($response) {
        $result = array( 'info' => $response );
        $balances = $this->safe_value($response, 'balances');
        for ($i = 0; $i < count($balances); $i++) {
            $balance = $balances[$i];
            $currencyId = $this->safe_string($balance, 'id');
            $code = $this->safe_currency_code($currencyId);
            $account = $this->account();
            $account['free'] = $this->safe_string($balance['available_amount'], 0);
            $account['total'] = $this->safe_string($balance['amount'], 0);
            $result[$code] = $account;
        }
        return $this->safe_balance($result);
    }

    public function fetch_balance($params = array ()) {
        yield $this->load_markets();
        $response = yield $this->privateGetBalances ($params);
        return $this->parse_balance($response);
    }

    public function fetch_order($id, $symbol = null, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'id' => intval($id),
        );
        $response = yield $this->privateGetOrdersId (array_merge($request, $params));
        $order = $this->safe_value($response, 'order');
        return $this->parse_order($order);
    }

    public function fetch_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        $market = null;
        if ($symbol !== null) {
            $market = $this->market($symbol);
        }
        $request = array(
            'market' => $market['id'],
            'per' => $limit,
        );
        $response = yield $this->privateGetMarketsMarketOrders (array_merge($request, $params));
        $orders = $this->safe_value($response, 'orders');
        return $this->parse_orders($orders, $market, $since, $limit);
    }

    public function fetch_open_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        $request = array(
            'state' => 'pending',
        );
        return yield $this->fetch_orders($symbol, $since, $limit, array_merge($request, $params));
    }

    public function fetch_closed_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        $request = array(
            'state' => 'traded',
        );
        return yield $this->fetch_orders($symbol, $since, $limit, array_merge($request, $params));
    }

    public function create_order($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        yield $this->load_markets();
        $side = ($side === 'buy') ? 'Bid' : 'Ask';
        $request = array(
            'market' => $this->market_id($symbol),
            'price_type' => $type,
            'type' => $side,
            'amount' => $this->amount_to_precision($symbol, $amount),
        );
        if ($type === 'limit') {
            $request['limit'] = $this->price_to_precision($symbol, $price);
        }
        $response = yield $this->privatePostMarketsMarketOrders (array_merge($request, $params));
        $order = $this->safe_value($response, 'order');
        return $this->parse_order($order);
    }

    public function cancel_order($id, $symbol = null, $params = array ()) {
        yield $this->load_markets();
        $request = array(
            'id' => intval($id),
            'state' => 'canceling',
        );
        $response = yield $this->privatePutOrdersId (array_merge($request, $params));
        $order = $this->safe_value($response, 'order');
        return $this->parse_order($order);
    }

    public function parse_order_status($status) {
        $statuses = array(
            'traded' => 'closed',
            'received' => 'open',
            'canceling' => 'canceled',
        );
        return $this->safe_string($statuses, $status, $status);
    }

    public function parse_order($order, $market = null) {
        //
        //     {
        //         'id' => 63679183,
        //         'uuid' => 'f9697bee-627e-4175-983f-0d5a41963fec',
        //         'market_id' => 'ETH-CLP',
        //         'account_id' => 51590,
        //         'type' => 'Ask',
        //         'state' => 'received',
        //         'created_at' => '2021-01-04T08:29:52.730Z',
        //         'fee_currency' => 'CLP',
        //         'price_type' => 'limit',
        //         'source' => None,
        //         'limit' => ['741000.0', 'CLP'],
        //         'amount' => ['0.001', 'ETH'],
        //         'original_amount' => ['0.001', 'ETH'],
        //         'traded_amount' => ['0.0', 'ETH'],
        //         'total_exchanged' => ['0.0', 'CLP'],
        //         'paid_fee' => ['0.0', 'CLP']
        //     }
        //
        $id = $this->safe_string($order, 'id');
        $timestamp = $this->parse8601($this->safe_string($order, 'created_at'));
        $datetime = $this->iso8601($timestamp);
        $marketId = $this->safe_string($order, 'market_id');
        $symbol = $this->safe_symbol($marketId, $market, '-');
        $type = $this->safe_string($order, 'price_type');
        $side = $this->safe_string_lower($order, 'type');
        $status = $this->parse_order_status($this->safe_string($order, 'state'));
        $originalAmount = $this->safe_value($order, 'original_amount', array());
        $amount = $this->safe_string($originalAmount, 0);
        $remainingAmount = $this->safe_value($order, 'amount', array());
        $remaining = $this->safe_string($remainingAmount, 0);
        $tradedAmount = $this->safe_value($order, 'traded_amount', array());
        $filled = $this->safe_string($tradedAmount, 0);
        $totalExchanged = $this->safe_value($order, 'totalExchanged', array());
        $cost = $this->safe_string($totalExchanged, 0);
        $limitPrice = $this->safe_value($order, 'limit', array());
        $price = $this->safe_string($limitPrice, 0);
        if ($price === null) {
            if ($limitPrice !== null) {
                $price = $limitPrice;
            }
        }
        $paidFee = $this->safe_value($order, 'paid_fee', array());
        $feeCost = $this->safe_string($paidFee, 0);
        $fee = null;
        if ($feeCost !== null) {
            $feeCurrencyId = $this->safe_string($paidFee, 1);
            $feeCurrencyCode = $this->safe_currency_code($feeCurrencyId);
            $fee = array(
                'cost' => $feeCost,
                'code' => $feeCurrencyCode,
            );
        }
        return $this->safe_order(array(
            'info' => $order,
            'id' => $id,
            'clientOrderId' => null,
            'datetime' => $datetime,
            'timestamp' => $timestamp,
            'lastTradeTimestamp' => null,
            'status' => $status,
            'symbol' => $symbol,
            'type' => $type,
            'timeInForce' => null,
            'postOnly' => null,
            'side' => $side,
            'price' => $price,
            'stopPrice' => null,
            'average' => null,
            'cost' => $cost,
            'amount' => $amount,
            'filled' => $filled,
            'remaining' => $remaining,
            'trades' => null,
            'fee' => $fee,
        ), $market);
    }

    public function is_fiat($code) {
        $fiats = array(
            'ARS' => true,
            'CLP' => true,
            'COP' => true,
            'PEN' => true,
        );
        return $this->safe_value($fiats, $code, false);
    }

    public function fetch_deposit_address($code, $params = array ()) {
        yield $this->load_markets();
        $currency = $this->currency($code);
        if ($this->is_fiat($code)) {
            throw new NotSupported($this->id . ' fetchDepositAddress() for fiat ' . $code . ' is not supported');
        }
        $request = array(
            'currency' => $currency['id'],
        );
        $response = yield $this->privateGetCurrenciesCurrencyReceiveAddresses (array_merge($request, $params));
        $receiveAddresses = $this->safe_value($response, 'receive_addresses');
        $addressPool = array();
        for ($i = 1; $i < count($receiveAddresses); $i++) {
            $receiveAddress = $receiveAddresses[$i];
            if ($receiveAddress['ready']) {
                $address = $receiveAddress['address'];
                $this->check_address($address);
                $addressPool[] = $address;
            }
        }
        $addressPoolLength = is_array($addressPool) ? count($addressPool) : 0;
        if ($addressPoolLength < 1) {
            throw new AddressPending($this->id . ' => there are no addresses ready for receiving ' . $code . ', retry again later)');
        }
        $address = $addressPool[0];
        return array(
            'currency' => $code,
            'address' => $address,
            'tag' => null,
            'network' => null,
            'info' => $receiveAddresses,
        );
    }

    public function create_deposit_address($code, $params = array ()) {
        yield $this->load_markets();
        $currency = $this->currency($code);
        if ($this->is_fiat($code)) {
            throw new NotSupported($this->id . ' => fiat fetchDepositAddress() for ' . $code . ' is not supported');
        }
        $request = array(
            'currency' => $currency['id'],
        );
        $response = yield $this->privatePostCurrenciesCurrencyReceiveAddresses (array_merge($request, $params));
        $address = $this->safe_string($response['receive_address'], 'address');  // the creation is async and returns a null $address, returns only the id
        return array(
            'currency' => $code,
            'address' => $address,
            'tag' => null,
            'info' => $response,
        );
    }

    public function parse_transaction_status($status) {
        $statuses = array(
            'rejected' => 'failed',
            'confirmed' => 'ok',
            'anulled' => 'canceled',
            'retained' => 'canceled',
            'pending_confirmation' => 'pending',
        );
        return $this->safe_string($statuses, $status, $status);
    }

    public function parse_transaction($transaction, $currency = null) {
        $id = $this->safe_string($transaction, 'id');
        $timestamp = $this->parse8601($this->safe_string($transaction, 'created_at'));
        $currencyId = $this->safe_string($transaction, 'currency');
        $code = $this->safe_currency_code($currencyId, $currency);
        $amount = floatval($transaction['amount'][0]);
        $fee = floatval($transaction['fee'][0]);
        $feeCurrency = $transaction['fee'][1];
        $status = $this->parse_transaction_status($this->safe_string($transaction, 'state'));
        $type = (is_array($transaction) && array_key_exists('deposit_data', $transaction)) ? 'deposit' : 'withdrawal';
        $data = $this->safe_value($transaction, $type . '_data', array());
        $address = $this->safe_value($data, 'target_address');
        $txid = $this->safe_string($data, 'tx_hash');
        $updated = $this->parse8601($this->safe_string($data, 'updated_at'));
        return array(
            'info' => $transaction,
            'id' => $id,
            'txid' => $txid,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'network' => null,
            'address' => $address,
            'addressTo' => null,
            'addressFrom' => null,
            'tag' => null,
            'tagTo' => null,
            'tagFrom' => null,
            'type' => $type,
            'amount' => $amount,
            'currency' => $code,
            'status' => $status,
            'updated' => $updated,
            'fee' => array(
                'cost' => $fee,
                'rate' => $feeCurrency,
            ),
        );
    }

    public function fetch_deposits($code = null, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        if ($code === null) {
            throw new ArgumentsRequired($this->id . ' => fetchDeposits() requires a $currency $code argument');
        }
        $currency = $this->currency($code);
        $request = array(
            'currency' => $currency['id'],
            'per' => $limit,
        );
        $response = yield $this->privateGetCurrenciesCurrencyDeposits (array_merge($request, $params));
        $deposits = $this->safe_value($response, 'deposits');
        return $this->parse_transactions($deposits, $currency, $since, $limit);
    }

    public function fetch_withdrawals($code = null, $since = null, $limit = null, $params = array ()) {
        yield $this->load_markets();
        if ($code === null) {
            throw new ArgumentsRequired($this->id . ' => fetchDeposits() requires a $currency $code argument');
        }
        $currency = $this->currency($code);
        $request = array(
            'currency' => $currency['id'],
            'per' => $limit,
        );
        $response = yield $this->privateGetCurrenciesCurrencyWithdrawals (array_merge($request, $params));
        $withdrawals = $this->safe_value($response, 'withdrawals');
        return $this->parse_transactions($withdrawals, $currency, $since, $limit);
    }

    public function withdraw($code, $amount, $address, $tag = null, $params = array ()) {
        list($tag, $params) = $this->handle_withdraw_tag_and_params($tag, $params);
        $this->check_address($address);
        yield $this->load_markets();
        $currency = $this->currency($code);
        $request = array(
            'currency' => $currency['id'],
            'amount' => $amount,
            'withdrawal_data' => array(
                'target_address' => $address,
            ),
        );
        $response = yield $this->privatePostCurrenciesCurrencyWithdrawals (array_merge($request, $params));
        $withdrawal = $this->safe_value($response, 'withdrawal');
        return $this->parse_transaction($withdrawal);
    }

    public function nonce() {
        return $this->microseconds();
    }

    public function sign($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = $this->implode_params($path, $params);
        $query = $this->omit($params, $this->extract_params($path));
        if ($query) {
            if ($method === 'GET') {
                $request .= '?' . $this->urlencode($query);
            } else {
                $body = $this->json($query);
            }
        }
        $url = $this->urls['api'] . '/' . $this->version . '/' . $request;
        if ($api === 'private') {
            $this->check_required_credentials();
            $nonce = (string) $this->nonce();
            $components = array( $method, '/api/' . $this->version . '/' . $request );
            if ($body) {
                $base64Body = base64_encode($body);
                $components[] = $this->decode($base64Body);
            }
            $components[] = $nonce;
            $message = implode(' ', $components);
            $signature = $this->hmac($this->encode($message), $this->encode($this->secret), 'sha384');
            $headers = array(
                'X-SBTC-APIKEY' => $this->apiKey,
                'X-SBTC-SIGNATURE' => $signature,
                'X-SBTC-NONCE' => $nonce,
                'Content-Type' => 'application/json',
            );
        }
        return array( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors($code, $reason, $url, $method, $headers, $body, $response, $requestHeaders, $requestBody) {
        if ($response === null) {
            return; // fallback to default error handler
        }
        if ($code >= 400) {
            $errorCode = $this->safe_string($response, 'code');
            $message = $this->safe_string($response, 'message', $body);
            $feedback = $this->id . ' ' . $message;
            if ($errorCode !== null) {
                $this->throw_exactly_matched_exception($this->exceptions, $errorCode, $feedback);
                throw new ExchangeError($feedback);
            }
        }
    }
}
