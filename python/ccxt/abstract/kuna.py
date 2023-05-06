from ccxt.base.types import Entry


class ImplicitAPI:
    xreserve_get_nonce = xreserveGetNonce = Entry('nonce', 'xreserve', 'GET', {'cost': 1})
    xreserve_get_fee = xreserveGetFee = Entry('fee', 'xreserve', 'GET', {'cost': 1})
    xreserve_get_delegated_transactions = xreserveGetDelegatedTransactions = Entry('delegated-transactions', 'xreserve', 'GET', {'cost': 1})
    xreserve_post_delegate_transfer = xreservePostDelegateTransfer = Entry('delegate-transfer', 'xreserve', 'POST', {'cost': 1})
    v3_public_get_timestamp = v3PublicGetTimestamp = Entry('timestamp', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_currencies = v3PublicGetCurrencies = Entry('currencies', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_markets = v3PublicGetMarkets = Entry('markets', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_tickers = v3PublicGetTickers = Entry('tickers', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_k = v3PublicGetK = Entry('k', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_trades_history = v3PublicGetTradesHistory = Entry('trades_history', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_fees = v3PublicGetFees = Entry('fees', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_exchange_rates = v3PublicGetExchangeRates = Entry('exchange-rates', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_exchange_rates_currency = v3PublicGetExchangeRatesCurrency = Entry('exchange-rates/currency', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_book_market = v3PublicGetBookMarket = Entry('book/market', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_kuna_codes_code_check = v3PublicGetKunaCodesCodeCheck = Entry('kuna_codes/code/check', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_landing_page_statistic = v3PublicGetLandingPageStatistic = Entry('landing_page_statistic', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_translations_locale = v3PublicGetTranslationsLocale = Entry('translations/locale', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_get_trades_market_hist = v3PublicGetTradesMarketHist = Entry('trades/market/hist', ['v3', 'public'], 'GET', {'cost': 1})
    v3_public_post_http_test = v3PublicPostHttpTest = Entry('http_test', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_deposit_channels = v3PublicPostDepositChannels = Entry('deposit_channels', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_withdraw_channels = v3PublicPostWithdrawChannels = Entry('withdraw_channels', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_subscription_plans = v3PublicPostSubscriptionPlans = Entry('subscription_plans', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_send_to = v3PublicPostSendTo = Entry('send_to', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_confirm_token = v3PublicPostConfirmToken = Entry('confirm_token', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_kunaid = v3PublicPostKunaid = Entry('kunaid', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_withdraw_prerequest = v3PublicPostWithdrawPrerequest = Entry('withdraw/prerequest', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_deposit_prerequest = v3PublicPostDepositPrerequest = Entry('deposit/prerequest', ['v3', 'public'], 'POST', {'cost': 1})
    v3_public_post_deposit_exchange_rates = v3PublicPostDepositExchangeRates = Entry('deposit/exchange-rates', ['v3', 'public'], 'POST', {'cost': 1})
    v3_sign_get_reset_password_token = v3SignGetResetPasswordToken = Entry('reset_password/token', ['v3', 'sign'], 'GET', {'cost': 1})
    v3_sign_post_signup_google = v3SignPostSignupGoogle = Entry('signup/google', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signup_resend_confirmation = v3SignPostSignupResendConfirmation = Entry('signup/resend_confirmation', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signup = v3SignPostSignup = Entry('signup', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signin = v3SignPostSignin = Entry('signin', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signin_two_factor = v3SignPostSigninTwoFactor = Entry('signin/two_factor', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signin_resend_confirm_device = v3SignPostSigninResendConfirmDevice = Entry('signin/resend_confirm_device', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_signin_confirm_device = v3SignPostSigninConfirmDevice = Entry('signin/confirm_device', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_reset_password = v3SignPostResetPassword = Entry('reset_password', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_post_cool_signin = v3SignPostCoolSignin = Entry('cool-signin', ['v3', 'sign'], 'POST', {'cost': 1})
    v3_sign_put_reset_password_token = v3SignPutResetPasswordToken = Entry('reset_password/token', ['v3', 'sign'], 'PUT', {'cost': 1})
    v3_sign_put_signup_code_confirm = v3SignPutSignupCodeConfirm = Entry('signup/code/confirm', ['v3', 'sign'], 'PUT', {'cost': 1})
    v3_private_post_auth_w_order_submit = v3PrivatePostAuthWOrderSubmit = Entry('auth/w/order/submit', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders = v3PrivatePostAuthROrders = Entry('auth/r/orders', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_market = v3PrivatePostAuthROrdersMarket = Entry('auth/r/orders/market', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_markets = v3PrivatePostAuthROrdersMarkets = Entry('auth/r/orders/markets', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_api_tokens_delete = v3PrivatePostAuthApiTokensDelete = Entry('auth/api_tokens/delete', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_api_tokens_create = v3PrivatePostAuthApiTokensCreate = Entry('auth/api_tokens/create', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_api_tokens = v3PrivatePostAuthApiTokens = Entry('auth/api_tokens', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_signin_history_uniq = v3PrivatePostAuthSigninHistoryUniq = Entry('auth/signin_history/uniq', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_signin_history = v3PrivatePostAuthSigninHistory = Entry('auth/signin_history', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_disable_withdraw_confirmation = v3PrivatePostAuthDisableWithdrawConfirmation = Entry('auth/disable_withdraw_confirmation', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_change_password = v3PrivatePostAuthChangePassword = Entry('auth/change_password', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit_address = v3PrivatePostAuthDepositAddress = Entry('auth/deposit_address', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_announcements_accept = v3PrivatePostAuthAnnouncementsAccept = Entry('auth/announcements/accept', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_announcements_unaccepted = v3PrivatePostAuthAnnouncementsUnaccepted = Entry('auth/announcements/unaccepted', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_otp_deactivate = v3PrivatePostAuthOtpDeactivate = Entry('auth/otp/deactivate', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_otp_activate = v3PrivatePostAuthOtpActivate = Entry('auth/otp/activate', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_otp_secret = v3PrivatePostAuthOtpSecret = Entry('auth/otp/secret', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_order_market_order_id_trades = v3PrivatePostAuthROrderMarketOrderIdTrades = Entry('auth/r/order/market/:order_id/trades', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_market_hist = v3PrivatePostAuthROrdersMarketHist = Entry('auth/r/orders/market/hist', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_hist = v3PrivatePostAuthROrdersHist = Entry('auth/r/orders/hist', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_hist_markets = v3PrivatePostAuthROrdersHistMarkets = Entry('auth/r/orders/hist/markets', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_orders_details = v3PrivatePostAuthROrdersDetails = Entry('auth/r/orders/details', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_assets_history = v3PrivatePostAuthAssetsHistory = Entry('auth/assets-history', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_assets_history_withdraws = v3PrivatePostAuthAssetsHistoryWithdraws = Entry('auth/assets-history/withdraws', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_assets_history_deposits = v3PrivatePostAuthAssetsHistoryDeposits = Entry('auth/assets-history/deposits', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_r_wallets = v3PrivatePostAuthRWallets = Entry('auth/r/wallets', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_markets_favorites = v3PrivatePostAuthMarketsFavorites = Entry('auth/markets/favorites', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_markets_favorites_list = v3PrivatePostAuthMarketsFavoritesList = Entry('auth/markets/favorites/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_me_update = v3PrivatePostAuthMeUpdate = Entry('auth/me/update', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_me = v3PrivatePostAuthMe = Entry('auth/me', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_fund_sources = v3PrivatePostAuthFundSources = Entry('auth/fund_sources', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_fund_sources_list = v3PrivatePostAuthFundSourcesList = Entry('auth/fund_sources/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_withdraw_resend_confirmation = v3PrivatePostAuthWithdrawResendConfirmation = Entry('auth/withdraw/resend_confirmation', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_withdraw = v3PrivatePostAuthWithdraw = Entry('auth/withdraw', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_withdraw_details = v3PrivatePostAuthWithdrawDetails = Entry('auth/withdraw/details', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_withdraw_info = v3PrivatePostAuthWithdrawInfo = Entry('auth/withdraw/info', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_payment_addresses = v3PrivatePostAuthPaymentAddresses = Entry('auth/payment_addresses', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit_prerequest = v3PrivatePostAuthDepositPrerequest = Entry('auth/deposit/prerequest', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit_exchange_rates = v3PrivatePostAuthDepositExchangeRates = Entry('auth/deposit/exchange-rates', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit = v3PrivatePostAuthDeposit = Entry('auth/deposit', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit_details = v3PrivatePostAuthDepositDetails = Entry('auth/deposit/details', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_deposit_info = v3PrivatePostAuthDepositInfo = Entry('auth/deposit/info', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_count = v3PrivatePostAuthKunaCodesCount = Entry('auth/kuna_codes/count', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_details = v3PrivatePostAuthKunaCodesDetails = Entry('auth/kuna_codes/details', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_edit = v3PrivatePostAuthKunaCodesEdit = Entry('auth/kuna_codes/edit', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_send_pdf = v3PrivatePostAuthKunaCodesSendPdf = Entry('auth/kuna_codes/send-pdf', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes = v3PrivatePostAuthKunaCodes = Entry('auth/kuna_codes', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_redeemed_by_me = v3PrivatePostAuthKunaCodesRedeemedByMe = Entry('auth/kuna_codes/redeemed-by-me', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_codes_issued_by_me = v3PrivatePostAuthKunaCodesIssuedByMe = Entry('auth/kuna_codes/issued-by-me', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_payment_requests_invoice = v3PrivatePostAuthPaymentRequestsInvoice = Entry('auth/payment_requests/invoice', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_payment_requests_type = v3PrivatePostAuthPaymentRequestsType = Entry('auth/payment_requests/type', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_referral_program_weekly_earnings = v3PrivatePostAuthReferralProgramWeeklyEarnings = Entry('auth/referral_program/weekly_earnings', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_referral_program_stats = v3PrivatePostAuthReferralProgramStats = Entry('auth/referral_program/stats', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_merchant_payout_services = v3PrivatePostAuthMerchantPayoutServices = Entry('auth/merchant/payout_services', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_merchant_withdraw = v3PrivatePostAuthMerchantWithdraw = Entry('auth/merchant/withdraw', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_merchant_payment_services = v3PrivatePostAuthMerchantPaymentServices = Entry('auth/merchant/payment_services', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_merchant_deposit = v3PrivatePostAuthMerchantDeposit = Entry('auth/merchant/deposit', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_verification_auth_token = v3PrivatePostAuthVerificationAuthToken = Entry('auth/verification/auth_token', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kunaid_purchase_create = v3PrivatePostAuthKunaidPurchaseCreate = Entry('auth/kunaid_purchase/create', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_devices_list = v3PrivatePostAuthDevicesList = Entry('auth/devices/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_sessions_list = v3PrivatePostAuthSessionsList = Entry('auth/sessions/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_subscriptions_reactivate = v3PrivatePostAuthSubscriptionsReactivate = Entry('auth/subscriptions/reactivate', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_subscriptions_cancel = v3PrivatePostAuthSubscriptionsCancel = Entry('auth/subscriptions/cancel', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_subscriptions_prolong = v3PrivatePostAuthSubscriptionsProlong = Entry('auth/subscriptions/prolong', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_subscriptions_create = v3PrivatePostAuthSubscriptionsCreate = Entry('auth/subscriptions/create', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_subscriptions_list = v3PrivatePostAuthSubscriptionsList = Entry('auth/subscriptions/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_auth_kuna_ids_list = v3PrivatePostAuthKunaIdsList = Entry('auth/kuna_ids/list', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_order_cancel_multi = v3PrivatePostOrderCancelMulti = Entry('order/cancel/multi', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_post_order_cancel = v3PrivatePostOrderCancel = Entry('order/cancel', ['v3', 'private'], 'POST', {'cost': 1})
    v3_private_put_auth_fund_sources_id = v3PrivatePutAuthFundSourcesId = Entry('auth/fund_sources/id', ['v3', 'private'], 'PUT', {'cost': 1})
    v3_private_put_auth_kuna_codes_redeem = v3PrivatePutAuthKunaCodesRedeem = Entry('auth/kuna_codes/redeem', ['v3', 'private'], 'PUT', {'cost': 1})
    v3_private_delete_auth_markets_favorites = v3PrivateDeleteAuthMarketsFavorites = Entry('auth/markets/favorites', ['v3', 'private'], 'DELETE', {'cost': 1})
    v3_private_delete_auth_fund_sources = v3PrivateDeleteAuthFundSources = Entry('auth/fund_sources', ['v3', 'private'], 'DELETE', {'cost': 1})
    v3_private_delete_auth_devices = v3PrivateDeleteAuthDevices = Entry('auth/devices', ['v3', 'private'], 'DELETE', {'cost': 1})
    v3_private_delete_auth_devices_list = v3PrivateDeleteAuthDevicesList = Entry('auth/devices/list', ['v3', 'private'], 'DELETE', {'cost': 1})
    v3_private_delete_auth_sessions_list = v3PrivateDeleteAuthSessionsList = Entry('auth/sessions/list', ['v3', 'private'], 'DELETE', {'cost': 1})
    v3_private_delete_auth_sessions = v3PrivateDeleteAuthSessions = Entry('auth/sessions', ['v3', 'private'], 'DELETE', {'cost': 1})
    public_get_depth = publicGetDepth = Entry('depth', 'public', 'GET', {})
    public_get_k_with_pending_trades = publicGetKWithPendingTrades = Entry('k_with_pending_trades', 'public', 'GET', {})
    public_get_k = publicGetK = Entry('k', 'public', 'GET', {})
    public_get_markets = publicGetMarkets = Entry('markets', 'public', 'GET', {})
    public_get_order_book = publicGetOrderBook = Entry('order_book', 'public', 'GET', {})
    public_get_order_book_market = publicGetOrderBookMarket = Entry('order_book/{market}', 'public', 'GET', {})
    public_get_tickers = publicGetTickers = Entry('tickers', 'public', 'GET', {})
    public_get_tickers_market = publicGetTickersMarket = Entry('tickers/{market}', 'public', 'GET', {})
    public_get_timestamp = publicGetTimestamp = Entry('timestamp', 'public', 'GET', {})
    public_get_trades = publicGetTrades = Entry('trades', 'public', 'GET', {})
    public_get_trades_market = publicGetTradesMarket = Entry('trades/{market}', 'public', 'GET', {})
    private_get_members_me = privateGetMembersMe = Entry('members/me', 'private', 'GET', {})
    private_get_deposits = privateGetDeposits = Entry('deposits', 'private', 'GET', {})
    private_get_deposit = privateGetDeposit = Entry('deposit', 'private', 'GET', {})
    private_get_deposit_address = privateGetDepositAddress = Entry('deposit_address', 'private', 'GET', {})
    private_get_orders = privateGetOrders = Entry('orders', 'private', 'GET', {})
    private_get_order = privateGetOrder = Entry('order', 'private', 'GET', {})
    private_get_trades_my = privateGetTradesMy = Entry('trades/my', 'private', 'GET', {})
    private_get_withdraws = privateGetWithdraws = Entry('withdraws', 'private', 'GET', {})
    private_get_withdraw = privateGetWithdraw = Entry('withdraw', 'private', 'GET', {})
    private_post_orders = privatePostOrders = Entry('orders', 'private', 'POST', {})
    private_post_orders_multi = privatePostOrdersMulti = Entry('orders/multi', 'private', 'POST', {})
    private_post_orders_clear = privatePostOrdersClear = Entry('orders/clear', 'private', 'POST', {})
    private_post_order_delete = privatePostOrderDelete = Entry('order/delete', 'private', 'POST', {})
    private_post_withdraw = privatePostWithdraw = Entry('withdraw', 'private', 'POST', {})
