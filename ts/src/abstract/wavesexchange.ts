// -------------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -------------------------------------------------------------------------------

import { implicitReturnType } from '../base/types.js';
import { Exchange as _Exchange } from '../base/Exchange.js';

interface Exchange {
    matcherGetMatcher (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherSettings (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherSettingsRates (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherBalanceReservedPublicKey (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherDebugAllSnashotOffsets (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherDebugCurrentOffset (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherDebugLastOffset (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherDebugOldestSnapshotOffset (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbook (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookAmountAssetPriceAsset (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookBaseIdQuoteIdPublicKeyPublicKey (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookBaseIdQuoteIdOrderId (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookBaseIdQuoteIdInfo (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookBaseIdQuoteIdStatus (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookBaseIdQuoteIdTradeableBalanceAddress (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookPublicKey (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrderbookPublicKeyOrderId (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrdersAddress (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherOrdersAddressOrderId (params?: {}): Promise<implicitReturnType>;
    matcherGetMatcherTransactionsOrderId (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrderbook (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrderbookMarket (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrderbookCancel (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrderbookBaseIdQuoteIdCancel (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrderbookAmountAssetPriceAssetCalculateFee (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherDebugSaveSnapshots (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrdersAddressCancel (params?: {}): Promise<implicitReturnType>;
    matcherPostMatcherOrdersCancelOrderId (params?: {}): Promise<implicitReturnType>;
    matcherDeleteMatcherOrderbookBaseIdQuoteId (params?: {}): Promise<implicitReturnType>;
    matcherDeleteMatcherSettingsRatesAssetId (params?: {}): Promise<implicitReturnType>;
    matcherPutMatcherSettingsRatesAssetId (params?: {}): Promise<implicitReturnType>;
    nodeGetAddresses (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesBalanceAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesBalanceAddressConfirmations (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesBalanceDetailsAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesDataAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesDataAddressKey (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesEffectiveBalanceAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesEffectiveBalanceAddressConfirmations (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesPublicKeyPublicKey (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesScriptInfoAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesScriptInfoAddressMeta (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesSeedAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesSeqFromTo (params?: {}): Promise<implicitReturnType>;
    nodeGetAddressesValidateAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAliasByAddressAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAliasByAliasAlias (params?: {}): Promise<implicitReturnType>;
    nodeGetAssetsAssetIdDistributionHeightLimit (params?: {}): Promise<implicitReturnType>;
    nodeGetAssetsBalanceAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetAssetsBalanceAddressAssetId (params?: {}): Promise<implicitReturnType>;
    nodeGetAssetsDetailsAssetId (params?: {}): Promise<implicitReturnType>;
    nodeGetAssetsNftAddressLimitLimit (params?: {}): Promise<implicitReturnType>;
    nodeGetBlockchainRewards (params?: {}): Promise<implicitReturnType>;
    nodeGetBlockchainRewardsHeight (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksAddressAddressFromTo (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksAtHeight (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksDelaySignatureBlockNum (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksFirst (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksHeadersLast (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksHeadersSeqFromTo (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksHeight (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksHeightSignature (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksLast (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksSeqFromTo (params?: {}): Promise<implicitReturnType>;
    nodeGetBlocksSignatureSignature (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusAlgo (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusBasetarget (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusBasetargetBlockId (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusGeneratingbalanceAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusGenerationsignature (params?: {}): Promise<implicitReturnType>;
    nodeGetConsensusGenerationsignatureBlockId (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugBalancesHistoryAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugBlocksHowMany (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugConfigInfo (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugHistoryInfo (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugInfo (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugMinerInfo (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugPortfoliosAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugState (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugStateChangesAddressAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugStateChangesInfoId (params?: {}): Promise<implicitReturnType>;
    nodeGetDebugStateWavesHeight (params?: {}): Promise<implicitReturnType>;
    nodeGetLeasingActiveAddress (params?: {}): Promise<implicitReturnType>;
    nodeGetNodeState (params?: {}): Promise<implicitReturnType>;
    nodeGetNodeVersion (params?: {}): Promise<implicitReturnType>;
    nodeGetPeersAll (params?: {}): Promise<implicitReturnType>;
    nodeGetPeersBlacklisted (params?: {}): Promise<implicitReturnType>;
    nodeGetPeersConnected (params?: {}): Promise<implicitReturnType>;
    nodeGetPeersSuspended (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsAddressAddressLimitLimit (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsInfoId (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsStatus (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsUnconfirmed (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsUnconfirmedInfoId (params?: {}): Promise<implicitReturnType>;
    nodeGetTransactionsUnconfirmedSize (params?: {}): Promise<implicitReturnType>;
    nodeGetUtilsSeed (params?: {}): Promise<implicitReturnType>;
    nodeGetUtilsSeedLength (params?: {}): Promise<implicitReturnType>;
    nodeGetUtilsTime (params?: {}): Promise<implicitReturnType>;
    nodeGetWalletSeed (params?: {}): Promise<implicitReturnType>;
    nodePostAddresses (params?: {}): Promise<implicitReturnType>;
    nodePostAddressesDataAddress (params?: {}): Promise<implicitReturnType>;
    nodePostAddressesSignAddress (params?: {}): Promise<implicitReturnType>;
    nodePostAddressesSignTextAddress (params?: {}): Promise<implicitReturnType>;
    nodePostAddressesVerifyAddress (params?: {}): Promise<implicitReturnType>;
    nodePostAddressesVerifyTextAddress (params?: {}): Promise<implicitReturnType>;
    nodePostDebugBlacklist (params?: {}): Promise<implicitReturnType>;
    nodePostDebugPrint (params?: {}): Promise<implicitReturnType>;
    nodePostDebugRollback (params?: {}): Promise<implicitReturnType>;
    nodePostDebugValidate (params?: {}): Promise<implicitReturnType>;
    nodePostNodeStop (params?: {}): Promise<implicitReturnType>;
    nodePostPeersClearblacklist (params?: {}): Promise<implicitReturnType>;
    nodePostPeersConnect (params?: {}): Promise<implicitReturnType>;
    nodePostTransactionsBroadcast (params?: {}): Promise<implicitReturnType>;
    nodePostTransactionsCalculateFee (params?: {}): Promise<implicitReturnType>;
    nodePostTranasctionsSign (params?: {}): Promise<implicitReturnType>;
    nodePostTransactionsSignSignerAddress (params?: {}): Promise<implicitReturnType>;
    nodePostTranasctionsStatus (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsHashFast (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsHashSecure (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsScriptCompileCode (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsScriptCompileWithImports (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsScriptDecompile (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsScriptEstimate (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsSignPrivateKey (params?: {}): Promise<implicitReturnType>;
    nodePostUtilsTransactionsSerialize (params?: {}): Promise<implicitReturnType>;
    nodeDeleteAddressesAddress (params?: {}): Promise<implicitReturnType>;
    nodeDeleteDebugRollbackToSignature (params?: {}): Promise<implicitReturnType>;
    publicGetAssets (params?: {}): Promise<implicitReturnType>;
    publicGetPairs (params?: {}): Promise<implicitReturnType>;
    publicGetCandlesBaseIdQuoteId (params?: {}): Promise<implicitReturnType>;
    publicGetTransactionsExchange (params?: {}): Promise<implicitReturnType>;
    privateGetDepositAddressesCurrency (params?: {}): Promise<implicitReturnType>;
    privateGetDepositAddressesCurrencyPlatform (params?: {}): Promise<implicitReturnType>;
    privateGetPlatforms (params?: {}): Promise<implicitReturnType>;
    privateGetDepositCurrencies (params?: {}): Promise<implicitReturnType>;
    privateGetWithdrawCurrencies (params?: {}): Promise<implicitReturnType>;
    privateGetWithdrawAddressesCurrencyAddress (params?: {}): Promise<implicitReturnType>;
    privatePostOauth2Token (params?: {}): Promise<implicitReturnType>;
    forwardGetMatcherOrdersAddress (params?: {}): Promise<implicitReturnType>;
    forwardGetMatcherOrdersAddressOrderId (params?: {}): Promise<implicitReturnType>;
    forwardPostMatcherOrdersWavesAddressCancel (params?: {}): Promise<implicitReturnType>;
    marketGetTickers (params?: {}): Promise<implicitReturnType>;
}
abstract class Exchange extends _Exchange {}

export default Exchange
