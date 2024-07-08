const errorHierarchy = {
    'BaseError': {
        'ExchangeError': {
            'AuthenticationError': {
                'PermissionDenied': {
                    'AccountNotEnabled': {},
                },
                'AccountSuspended': {},
            },
            'ArgumentsRequired': {},
            'BadRequest': {
                'BadSymbol': {},
            },
            'OperationRejected': {
                'NoChange': {
                    'MarginModeAlreadySet': {},
                },
                'MarketClosed': {},
            },
            'InsufficientFunds': {},
            'InvalidAddress': {
                'AddressPending': {},
            },
            'InvalidOrder': {
                'OrderNotFound': {},
                'OrderNotCached': {},
                'OrderImmediatelyFillable': {},
                'OrderNotFillable': {},
                'DuplicateOrderId': {},
                'ContractUnavailable': {},
            },
            'NotSupported': {},
            'ProxyError': {},
            'ExchangeClosedByUser': {},
        },
        'OperationFailed': {
            'NetworkError': {
                'DDoSProtection': {},
                'RateLimitExceeded': {},
                'ExchangeNotAvailable': {
                    'OnMaintenance': {},
                },
                'InvalidNonce': {},
                'RequestTimeout': {},
            },
            'BadResponse': {
                'NullResponse': {},
            },
            'CancelPending': {},
        },
    },
};

export default errorHierarchy;
