<?php
namespace ccxt;
include_once (__DIR__.'/../../ccxt.php');
// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------

error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('UTC');

use ccxt\Precise;
use React\Async;
use React\Promise;


function example() {
    return Async\async(function () {
        $myex = new \ccxt\async\okx(array());
        $from_timestamp = $myex->milliseconds() - 86400 * 1000; // last 24 hrs
        $ohlcv = Async\await($myex->fetch_ohlcv('BTC/USDT', '1m', $from_timestamp, 3, array(
    'whatever' => 123,
)));
        $length = count($ohlcv);
        if ($length > 0) {
            $last_price = $ohlcv[$length - 1][4];
            var_dump('Fetched ' . $length . ' candles for ' . $myex->id . ':  last close ' . $last_price);
        } else {
            var_dump('No candles have been fetched');
        }
    }) ();
}


Async\await(example());
