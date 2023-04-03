import { implicitReturnType } from '../base/types.js';
import { Exchange as _Exchange } from '../base/Exchange.js';
interface Exchange {
    v1PublicGetPublicAuth(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetInstruments(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetBook(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetCandlestick(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetTrades(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetTickers(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetValuations(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetExpiredSettlementPrice(params?: {}): Promise<implicitReturnType>;
    v1PublicGetPublicGetInsurance(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateSetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateUserBalance(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateUserBalanceHistory(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetPositions(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCreateOrder(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCreateOrderList(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCancelOrder(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCancelOrderList(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCancelAllOrders(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateClosePosition(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetOrderHistory(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetOpenOrders(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetOrderDetail(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetTrades(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateChangeAccountLeverage(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetTransactions(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCreateSubaccountTransfer(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetSubaccountBalances(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetOrderList(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateCreateWithdrawal(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetCurrencyNetworks(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetDepositAddress(params?: {}): Promise<implicitReturnType>;
    v1PrivatePostPrivateGetAccounts(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicAuth(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicGetInstruments(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicGetBook(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicGetCandlestick(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicGetTicker(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicGetTrades(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicMarginGetTransferCurrencies(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicMarginGetLoadCurrenices(params?: {}): Promise<implicitReturnType>;
    v2PublicGetPublicRespondHeartbeat(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateSetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCreateWithdrawal(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetWithdrawalHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetCurrencyNetworks(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetDepositHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetDepositAddress(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetAccountSummary(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCreateOrder(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCancelOrder(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCancelAllOrders(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCreateOrderList(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetOrderHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetOpenOrders(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetOrderDetail(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetTrades(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetUserConfig(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetAccountSummary(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginTransfer(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginBorrow(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginRepay(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetTransferHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetBorrowHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetInterestHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetRepayHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetLiquidationHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetLiquidationOrders(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginCreateOrder(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginCancelOrder(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginCancelAllOrders(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetOrderHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetOpenOrders(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetOrderDetail(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateMarginGetTrades(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateDerivTransfer(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateDerivGetTransferHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetAccounts(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateGetSubaccountBalances(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateCreateSubaccountTransfer(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcGetOtcUser(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcGetInstruments(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcRequestQuote(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcAcceptQuote(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcGetQuoteHistory(params?: {}): Promise<implicitReturnType>;
    v2PrivatePostPrivateOtcGetTradeHistory(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicAuth(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetInstruments(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetBook(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetCandlestick(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetTrades(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetTickers(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetValuations(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetExpiredSettlementPrice(params?: {}): Promise<implicitReturnType>;
    derivativesPublicGetPublicGetInsurance(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateSetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetCancelOnDisconnect(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateUserBalance(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateUserBalanceHistory(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetPositions(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCreateOrder(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCreateOrderList(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCancelOrder(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCancelOrderList(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCancelAllOrders(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateClosePosition(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateConvertCollateral(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetOrderHistory(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetOpenOrders(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetOrderDetail(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetTrades(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateChangeAccountLeverage(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetTransactions(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateCreateSubaccountTransfer(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetSubaccountBalances(params?: {}): Promise<implicitReturnType>;
    derivativesPrivatePostPrivateGetOrderList(params?: {}): Promise<implicitReturnType>;
}
declare abstract class Exchange extends _Exchange {
}
export default Exchange;
