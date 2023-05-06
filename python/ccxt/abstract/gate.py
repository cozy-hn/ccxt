from ccxt.base.types import Entry


class ImplicitAPI:
    public_wallet_get_currency_chains = publicWalletGetCurrencyChains = Entry('currency_chains', ['public', 'wallet'], 'GET', {'cost': 1.5})
    public_spot_get_currencies = publicSpotGetCurrencies = Entry('currencies', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_currencies_currency = publicSpotGetCurrenciesCurrency = Entry('currencies/{currency}', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_currency_pairs = publicSpotGetCurrencyPairs = Entry('currency_pairs', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_currency_pairs_currency_pair = publicSpotGetCurrencyPairsCurrencyPair = Entry('currency_pairs/{currency_pair}', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_tickers = publicSpotGetTickers = Entry('tickers', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_order_book = publicSpotGetOrderBook = Entry('order_book', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_trades = publicSpotGetTrades = Entry('trades', ['public', 'spot'], 'GET', {'cost': 1})
    public_spot_get_candlesticks = publicSpotGetCandlesticks = Entry('candlesticks', ['public', 'spot'], 'GET', {'cost': 1})
    public_margin_get_currency_pairs = publicMarginGetCurrencyPairs = Entry('currency_pairs', ['public', 'margin'], 'GET', {'cost': 1})
    public_margin_get_currency_pairs_currency_pair = publicMarginGetCurrencyPairsCurrencyPair = Entry('currency_pairs/{currency_pair}', ['public', 'margin'], 'GET', {'cost': 1})
    public_margin_get_cross_currencies = publicMarginGetCrossCurrencies = Entry('cross/currencies', ['public', 'margin'], 'GET', {'cost': 1})
    public_margin_get_cross_currencies_currency = publicMarginGetCrossCurrenciesCurrency = Entry('cross/currencies/{currency}', ['public', 'margin'], 'GET', {'cost': 1})
    public_margin_get_funding_book = publicMarginGetFundingBook = Entry('funding_book', ['public', 'margin'], 'GET', {'cost': 1})
    public_futures_get_settle_contracts = publicFuturesGetSettleContracts = Entry('{settle}/contracts', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_contracts_contract = publicFuturesGetSettleContractsContract = Entry('{settle}/contracts/{contract}', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_order_book = publicFuturesGetSettleOrderBook = Entry('{settle}/order_book', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_trades = publicFuturesGetSettleTrades = Entry('{settle}/trades', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_candlesticks = publicFuturesGetSettleCandlesticks = Entry('{settle}/candlesticks', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_tickers = publicFuturesGetSettleTickers = Entry('{settle}/tickers', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_funding_rate = publicFuturesGetSettleFundingRate = Entry('{settle}/funding_rate', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_insurance = publicFuturesGetSettleInsurance = Entry('{settle}/insurance', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_contract_stats = publicFuturesGetSettleContractStats = Entry('{settle}/contract_stats', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_futures_get_settle_liq_orders = publicFuturesGetSettleLiqOrders = Entry('{settle}/liq_orders', ['public', 'futures'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_contracts = publicDeliveryGetSettleContracts = Entry('{settle}/contracts', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_contracts_contract = publicDeliveryGetSettleContractsContract = Entry('{settle}/contracts/{contract}', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_order_book = publicDeliveryGetSettleOrderBook = Entry('{settle}/order_book', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_trades = publicDeliveryGetSettleTrades = Entry('{settle}/trades', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_candlesticks = publicDeliveryGetSettleCandlesticks = Entry('{settle}/candlesticks', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_tickers = publicDeliveryGetSettleTickers = Entry('{settle}/tickers', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_delivery_get_settle_insurance = publicDeliveryGetSettleInsurance = Entry('{settle}/insurance', ['public', 'delivery'], 'GET', {'cost': 1.5})
    public_options_get_underlyings = publicOptionsGetUnderlyings = Entry('underlyings', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_expirations = publicOptionsGetExpirations = Entry('expirations', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_contracts = publicOptionsGetContracts = Entry('contracts', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_contracts_contract = publicOptionsGetContractsContract = Entry('contracts/{contract}', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_settlements = publicOptionsGetSettlements = Entry('settlements', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_settlements_contract = publicOptionsGetSettlementsContract = Entry('settlements/{contract}', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_order_book = publicOptionsGetOrderBook = Entry('order_book', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_tickers = publicOptionsGetTickers = Entry('tickers', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_underlying_tickers_underlying = publicOptionsGetUnderlyingTickersUnderlying = Entry('underlying/tickers/{underlying}', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_candlesticks = publicOptionsGetCandlesticks = Entry('candlesticks', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_underlying_candlesticks = publicOptionsGetUnderlyingCandlesticks = Entry('underlying/candlesticks', ['public', 'options'], 'GET', {'cost': 1.5})
    public_options_get_trades = publicOptionsGetTrades = Entry('trades', ['public', 'options'], 'GET', {'cost': 1.5})
    public_earn_get_uni_currencies = publicEarnGetUniCurrencies = Entry('uni/currencies', ['public', 'earn'], 'GET', {'cost': 1.5})
    public_earn_get_uni_currencies_currency = publicEarnGetUniCurrenciesCurrency = Entry('uni/currencies/{currency}', ['public', 'earn'], 'GET', {'cost': 1.5})
    private_withdrawals_post_withdrawals = privateWithdrawalsPostWithdrawals = Entry('withdrawals', ['private', 'withdrawals'], 'POST', {'cost': 3000})
    private_withdrawals_delete_withdrawals_withdrawal_id = privateWithdrawalsDeleteWithdrawalsWithdrawalId = Entry('withdrawals/{withdrawal_id}', ['private', 'withdrawals'], 'DELETE', {'cost': 300})
    private_wallet_get_deposit_address = privateWalletGetDepositAddress = Entry('deposit_address', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_withdrawals = privateWalletGetWithdrawals = Entry('withdrawals', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_deposits = privateWalletGetDeposits = Entry('deposits', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_sub_account_transfers = privateWalletGetSubAccountTransfers = Entry('sub_account_transfers', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_withdraw_status = privateWalletGetWithdrawStatus = Entry('withdraw_status', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_sub_account_balances = privateWalletGetSubAccountBalances = Entry('sub_account_balances', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_fee = privateWalletGetFee = Entry('fee', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_get_total_balance = privateWalletGetTotalBalance = Entry('total_balance', ['private', 'wallet'], 'GET', {'cost': 300})
    private_wallet_post_transfers = privateWalletPostTransfers = Entry('transfers', ['private', 'wallet'], 'POST', {'cost': 300})
    private_wallet_post_sub_account_transfers = privateWalletPostSubAccountTransfers = Entry('sub_account_transfers', ['private', 'wallet'], 'POST', {'cost': 300})
    private_subaccounts_get_sub_accounts = privateSubAccountsGetSubAccounts = Entry('sub_accounts', ['private', 'subAccounts'], 'GET', {'cost': 1})
    private_subaccounts_get_sub_accounts_user_id = privateSubAccountsGetSubAccountsUserId = Entry('sub_accounts/{user_id}', ['private', 'subAccounts'], 'GET', {'cost': 1})
    private_subaccounts_get_sub_accounts_user_id_keys = privateSubAccountsGetSubAccountsUserIdKeys = Entry('sub_accounts/{user_id}/keys', ['private', 'subAccounts'], 'GET', {'cost': 1})
    private_subaccounts_get_sub_accounts_user_id_keys_key = privateSubAccountsGetSubAccountsUserIdKeysKey = Entry('sub_accounts/{user_id}/keys/{key}', ['private', 'subAccounts'], 'GET', {'cost': 1})
    private_subaccounts_post_sub_accounts = privateSubAccountsPostSubAccounts = Entry('sub_accounts', ['private', 'subAccounts'], 'POST', {'cost': 1})
    private_subaccounts_post_sub_accounts_user_id_keys = privateSubAccountsPostSubAccountsUserIdKeys = Entry('sub_accounts/{user_id}/keys', ['private', 'subAccounts'], 'POST', {'cost': 1})
    private_subaccounts_post_sub_accounts_user_id_lock = privateSubAccountsPostSubAccountsUserIdLock = Entry('sub_accounts/{user_id}/lock', ['private', 'subAccounts'], 'POST', {'cost': 1})
    private_subaccounts_post_sub_accounts_user_id_unlock = privateSubAccountsPostSubAccountsUserIdUnlock = Entry('sub_accounts/{user_id}/unlock', ['private', 'subAccounts'], 'POST', {'cost': 1})
    private_subaccounts_put_sub_accounts_user_id_keys_key = privateSubAccountsPutSubAccountsUserIdKeysKey = Entry('sub_accounts/{user_id}/keys/{key}', ['private', 'subAccounts'], 'PUT', {'cost': 1})
    private_subaccounts_delete_sub_accounts_user_id_keys_key = privateSubAccountsDeleteSubAccountsUserIdKeysKey = Entry('sub_accounts/{user_id}/keys/{key}', ['private', 'subAccounts'], 'DELETE', {'cost': 1})
    private_spot_get_accounts = privateSpotGetAccounts = Entry('accounts', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_open_orders = privateSpotGetOpenOrders = Entry('open_orders', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_orders = privateSpotGetOrders = Entry('orders', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_orders_order_id = privateSpotGetOrdersOrderId = Entry('orders/{order_id}', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_my_trades = privateSpotGetMyTrades = Entry('my_trades', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_price_orders = privateSpotGetPriceOrders = Entry('price_orders', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_get_price_orders_order_id = privateSpotGetPriceOrdersOrderId = Entry('price_orders/{order_id}', ['private', 'spot'], 'GET', {'cost': 1})
    private_spot_post_batch_orders = privateSpotPostBatchOrders = Entry('batch_orders', ['private', 'spot'], 'POST', {'cost': 1})
    private_spot_post_orders = privateSpotPostOrders = Entry('orders', ['private', 'spot'], 'POST', {'cost': 1})
    private_spot_post_cancel_batch_orders = privateSpotPostCancelBatchOrders = Entry('cancel_batch_orders', ['private', 'spot'], 'POST', {'cost': 1})
    private_spot_post_price_orders = privateSpotPostPriceOrders = Entry('price_orders', ['private', 'spot'], 'POST', {'cost': 1})
    private_spot_delete_orders = privateSpotDeleteOrders = Entry('orders', ['private', 'spot'], 'DELETE', {'cost': 1})
    private_spot_delete_orders_order_id = privateSpotDeleteOrdersOrderId = Entry('orders/{order_id}', ['private', 'spot'], 'DELETE', {'cost': 1})
    private_spot_delete_price_orders = privateSpotDeletePriceOrders = Entry('price_orders', ['private', 'spot'], 'DELETE', {'cost': 1})
    private_spot_delete_price_orders_order_id = privateSpotDeletePriceOrdersOrderId = Entry('price_orders/{order_id}', ['private', 'spot'], 'DELETE', {'cost': 1})
    private_spot_patch_orders_order_id = privateSpotPatchOrdersOrderId = Entry('orders/{order_id}', ['private', 'spot'], 'PATCH', {'cost': 1})
    private_margin_get_accounts = privateMarginGetAccounts = Entry('accounts', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_account_book = privateMarginGetAccountBook = Entry('account_book', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_funding_accounts = privateMarginGetFundingAccounts = Entry('funding_accounts', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loans = privateMarginGetLoans = Entry('loans', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loans_loan_id = privateMarginGetLoansLoanId = Entry('loans/{loan_id}', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loans_loan_id_repayment = privateMarginGetLoansLoanIdRepayment = Entry('loans/{loan_id}/repayment', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loan_records = privateMarginGetLoanRecords = Entry('loan_records', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loan_records_load_record_id = privateMarginGetLoanRecordsLoadRecordId = Entry('loan_records/{load_record_id}', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_auto_repay = privateMarginGetAutoRepay = Entry('auto_repay', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_transferable = privateMarginGetTransferable = Entry('transferable', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_accounts = privateMarginGetCrossAccounts = Entry('cross/accounts', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_account_book = privateMarginGetCrossAccountBook = Entry('cross/account_book', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_loans = privateMarginGetCrossLoans = Entry('cross/loans', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_loans_loan_id = privateMarginGetCrossLoansLoanId = Entry('cross/loans/{loan_id}', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_loans_repayments = privateMarginGetCrossLoansRepayments = Entry('cross/loans/repayments', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_transferable = privateMarginGetCrossTransferable = Entry('cross/transferable', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_loan_records_loan_record_id = privateMarginGetLoanRecordsLoanRecordId = Entry('loan_records/{loan_record_id}', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_borrowable = privateMarginGetBorrowable = Entry('borrowable', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_repayments = privateMarginGetCrossRepayments = Entry('cross/repayments', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_get_cross_borrowable = privateMarginGetCrossBorrowable = Entry('cross/borrowable', ['private', 'margin'], 'GET', {'cost': 1.5})
    private_margin_post_loans = privateMarginPostLoans = Entry('loans', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_merged_loans = privateMarginPostMergedLoans = Entry('merged_loans', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_loans_loan_id_repayment = privateMarginPostLoansLoanIdRepayment = Entry('loans/{loan_id}/repayment', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_auto_repay = privateMarginPostAutoRepay = Entry('auto_repay', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_cross_loans = privateMarginPostCrossLoans = Entry('cross/loans', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_cross_loans_repayments = privateMarginPostCrossLoansRepayments = Entry('cross/loans/repayments', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_post_cross_repayments = privateMarginPostCrossRepayments = Entry('cross/repayments', ['private', 'margin'], 'POST', {'cost': 1.5})
    private_margin_patch_loans_loan_id = privateMarginPatchLoansLoanId = Entry('loans/{loan_id}', ['private', 'margin'], 'PATCH', {'cost': 1.5})
    private_margin_patch_loan_records_loan_record_id = privateMarginPatchLoanRecordsLoanRecordId = Entry('loan_records/{loan_record_id}', ['private', 'margin'], 'PATCH', {'cost': 1.5})
    private_margin_delete_loans_loan_id = privateMarginDeleteLoansLoanId = Entry('loans/{loan_id}', ['private', 'margin'], 'DELETE', {'cost': 1.5})
    private_futures_get_settle_accounts = privateFuturesGetSettleAccounts = Entry('{settle}/accounts', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_account_book = privateFuturesGetSettleAccountBook = Entry('{settle}/account_book', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_positions = privateFuturesGetSettlePositions = Entry('{settle}/positions', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_positions_contract = privateFuturesGetSettlePositionsContract = Entry('{settle}/positions/{contract}', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_orders = privateFuturesGetSettleOrders = Entry('{settle}/orders', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_orders_order_id = privateFuturesGetSettleOrdersOrderId = Entry('{settle}/orders/{order_id}', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_my_trades = privateFuturesGetSettleMyTrades = Entry('{settle}/my_trades', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_position_close = privateFuturesGetSettlePositionClose = Entry('{settle}/position_close', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_liquidates = privateFuturesGetSettleLiquidates = Entry('{settle}/liquidates', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_price_orders = privateFuturesGetSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_price_orders_order_id = privateFuturesGetSettlePriceOrdersOrderId = Entry('{settle}/price_orders/{order_id}', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_dual_comp_positions_contract = privateFuturesGetSettleDualCompPositionsContract = Entry('{settle}/dual_comp/positions/{contract}', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_get_settle_auto_deleverages = privateFuturesGetSettleAutoDeleverages = Entry('{settle}/auto_deleverages', ['private', 'futures'], 'GET', {'cost': 1.5})
    private_futures_post_settle_positions_contract_margin = privateFuturesPostSettlePositionsContractMargin = Entry('{settle}/positions/{contract}/margin', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_positions_contract_leverage = privateFuturesPostSettlePositionsContractLeverage = Entry('{settle}/positions/{contract}/leverage', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_positions_contract_risk_limit = privateFuturesPostSettlePositionsContractRiskLimit = Entry('{settle}/positions/{contract}/risk_limit', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_dual_mode = privateFuturesPostSettleDualMode = Entry('{settle}/dual_mode', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_dual_comp_positions_contract = privateFuturesPostSettleDualCompPositionsContract = Entry('{settle}/dual_comp/positions/{contract}', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_dual_comp_positions_contract_margin = privateFuturesPostSettleDualCompPositionsContractMargin = Entry('{settle}/dual_comp/positions/{contract}/margin', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_dual_comp_positions_contract_leverage = privateFuturesPostSettleDualCompPositionsContractLeverage = Entry('{settle}/dual_comp/positions/{contract}/leverage', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_dual_comp_positions_contract_risk_limit = privateFuturesPostSettleDualCompPositionsContractRiskLimit = Entry('{settle}/dual_comp/positions/{contract}/risk_limit', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_orders = privateFuturesPostSettleOrders = Entry('{settle}/orders', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_post_settle_price_orders = privateFuturesPostSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'futures'], 'POST', {'cost': 1.5})
    private_futures_delete_settle_orders = privateFuturesDeleteSettleOrders = Entry('{settle}/orders', ['private', 'futures'], 'DELETE', {'cost': 1.5})
    private_futures_delete_settle_orders_order_id = privateFuturesDeleteSettleOrdersOrderId = Entry('{settle}/orders/{order_id}', ['private', 'futures'], 'DELETE', {'cost': 1.5})
    private_futures_delete_settle_price_orders = privateFuturesDeleteSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'futures'], 'DELETE', {'cost': 1.5})
    private_futures_delete_settle_price_orders_order_id = privateFuturesDeleteSettlePriceOrdersOrderId = Entry('{settle}/price_orders/{order_id}', ['private', 'futures'], 'DELETE', {'cost': 1.5})
    private_delivery_get_settle_accounts = privateDeliveryGetSettleAccounts = Entry('{settle}/accounts', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_account_book = privateDeliveryGetSettleAccountBook = Entry('{settle}/account_book', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_positions = privateDeliveryGetSettlePositions = Entry('{settle}/positions', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_positions_contract = privateDeliveryGetSettlePositionsContract = Entry('{settle}/positions/{contract}', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_orders = privateDeliveryGetSettleOrders = Entry('{settle}/orders', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_orders_order_id = privateDeliveryGetSettleOrdersOrderId = Entry('{settle}/orders/{order_id}', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_my_trades = privateDeliveryGetSettleMyTrades = Entry('{settle}/my_trades', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_position_close = privateDeliveryGetSettlePositionClose = Entry('{settle}/position_close', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_liquidates = privateDeliveryGetSettleLiquidates = Entry('{settle}/liquidates', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_price_orders = privateDeliveryGetSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_price_orders_order_id = privateDeliveryGetSettlePriceOrdersOrderId = Entry('{settle}/price_orders/{order_id}', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_get_settle_settlements = privateDeliveryGetSettleSettlements = Entry('{settle}/settlements', ['private', 'delivery'], 'GET', {'cost': 1.5})
    private_delivery_post_settle_positions_contract_margin = privateDeliveryPostSettlePositionsContractMargin = Entry('{settle}/positions/{contract}/margin', ['private', 'delivery'], 'POST', {'cost': 1.5})
    private_delivery_post_settle_positions_contract_leverage = privateDeliveryPostSettlePositionsContractLeverage = Entry('{settle}/positions/{contract}/leverage', ['private', 'delivery'], 'POST', {'cost': 1.5})
    private_delivery_post_settle_positions_contract_risk_limit = privateDeliveryPostSettlePositionsContractRiskLimit = Entry('{settle}/positions/{contract}/risk_limit', ['private', 'delivery'], 'POST', {'cost': 1.5})
    private_delivery_post_settle_orders = privateDeliveryPostSettleOrders = Entry('{settle}/orders', ['private', 'delivery'], 'POST', {'cost': 1.5})
    private_delivery_post_settle_price_orders = privateDeliveryPostSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'delivery'], 'POST', {'cost': 1.5})
    private_delivery_delete_settle_orders = privateDeliveryDeleteSettleOrders = Entry('{settle}/orders', ['private', 'delivery'], 'DELETE', {'cost': 1.5})
    private_delivery_delete_settle_orders_order_id = privateDeliveryDeleteSettleOrdersOrderId = Entry('{settle}/orders/{order_id}', ['private', 'delivery'], 'DELETE', {'cost': 1.5})
    private_delivery_delete_settle_price_orders = privateDeliveryDeleteSettlePriceOrders = Entry('{settle}/price_orders', ['private', 'delivery'], 'DELETE', {'cost': 1.5})
    private_delivery_delete_settle_price_orders_order_id = privateDeliveryDeleteSettlePriceOrdersOrderId = Entry('{settle}/price_orders/{order_id}', ['private', 'delivery'], 'DELETE', {'cost': 1.5})
    private_options_get_accounts = privateOptionsGetAccounts = Entry('accounts', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_account_book = privateOptionsGetAccountBook = Entry('account_book', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_positions = privateOptionsGetPositions = Entry('positions', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_positions_contract = privateOptionsGetPositionsContract = Entry('positions/{contract}', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_position_close = privateOptionsGetPositionClose = Entry('position_close', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_orders = privateOptionsGetOrders = Entry('orders', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_orders_order_id = privateOptionsGetOrdersOrderId = Entry('orders/{order_id}', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_get_my_trades = privateOptionsGetMyTrades = Entry('my_trades', ['private', 'options'], 'GET', {'cost': 1.5})
    private_options_post_orders = privateOptionsPostOrders = Entry('orders', ['private', 'options'], 'POST', {'cost': 1.5})
    private_options_delete_orders = privateOptionsDeleteOrders = Entry('orders', ['private', 'options'], 'DELETE', {'cost': 1.5})
    private_options_delete_orders_order_id = privateOptionsDeleteOrdersOrderId = Entry('orders/{order_id}', ['private', 'options'], 'DELETE', {'cost': 1.5})
    private_rebate_get_agency_transaction_history = privateRebateGetAgencyTransactionHistory = Entry('agency/transaction_history', ['private', 'rebate'], 'GET', {'cost': 1.5})
    private_rebate_get_agency_commission_history = privateRebateGetAgencyCommissionHistory = Entry('agency/commission_history', ['private', 'rebate'], 'GET', {'cost': 1.5})
    private_earn_get_uni_lends = privateEarnGetUniLends = Entry('uni/lends', ['private', 'earn'], 'GET', {'cost': 1.5})
    private_earn_get_uni_lend_records = privateEarnGetUniLendRecords = Entry('uni/lend_records', ['private', 'earn'], 'GET', {'cost': 1.5})
    private_earn_get_uni_interests_currency = privateEarnGetUniInterestsCurrency = Entry('uni/interests/{currency}', ['private', 'earn'], 'GET', {'cost': 1.5})
    private_earn_get_uni_interest_records = privateEarnGetUniInterestRecords = Entry('uni/interest_records', ['private', 'earn'], 'GET', {'cost': 1.5})
    private_earn_post_uni_lends = privateEarnPostUniLends = Entry('uni/lends', ['private', 'earn'], 'POST', {'cost': 1.5})
    private_earn_patch_uni_lends = privateEarnPatchUniLends = Entry('uni/lends', ['private', 'earn'], 'PATCH', {'cost': 1.5})
