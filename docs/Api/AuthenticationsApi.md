# YouSign\Client\AuthenticationsApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationsEmailIdGet**](AuthenticationsApi.md#authenticationsEmailIdGet) | **GET** /authentications/email/{id} | Find an Authentication by ID
[**authenticationsEmailIdPut**](AuthenticationsApi.md#authenticationsEmailIdPut) | **PUT** /authentications/email/{id} | Update an Email Authentication
[**authenticationsInweboIdGet**](AuthenticationsApi.md#authenticationsInweboIdGet) | **GET** /authentications/inwebo/{id} | Get an Authentication
[**authenticationsInweboIdPut**](AuthenticationsApi.md#authenticationsInweboIdPut) | **PUT** /authentications/inwebo/{id} | Update an inwebo Authentication
[**authenticationsSmsIdGet**](AuthenticationsApi.md#authenticationsSmsIdGet) | **GET** /authentications/sms/{id} | Find an Authentication by ID
[**authenticationsSmsIdPut**](AuthenticationsApi.md#authenticationsSmsIdPut) | **PUT** /authentications/sms/{id} | Update an SMS Authentication


# **authenticationsEmailIdGet**
> \YouSign\Client\Model\AuthenticationEmailOutput authenticationsEmailIdGet($id, $authorization)

Find an Authentication by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsEmailIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsEmailIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\AuthenticationEmailOutput**](../Model/AuthenticationEmailOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsEmailIdPut**
> \YouSign\Client\Model\AuthenticationEmailOutput authenticationsEmailIdPut($id, $authorization, $content_type, $body)

Update an Email Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$body = new \YouSign\Client\Model\Body3(); // \YouSign\Client\Model\Body3 | 

try {
    $result = $apiInstance->authenticationsEmailIdPut($id, $authorization, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsEmailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **content_type** | **string**| The MIME type of the body of the request |
 **body** | [**\YouSign\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

[**\YouSign\Client\Model\AuthenticationEmailOutput**](../Model/AuthenticationEmailOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsInweboIdGet**
> \YouSign\Client\Model\AuthenticationInweboOutput authenticationsInweboIdGet($id, $authorization)

Get an Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsInweboIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsInweboIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\AuthenticationInweboOutput**](../Model/AuthenticationInweboOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsInweboIdPut**
> \YouSign\Client\Model\AuthenticationInweboOutput authenticationsInweboIdPut($id, $content_type, $authorization, $body)

Update an inwebo Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \YouSign\Client\Model\Body1(); // \YouSign\Client\Model\Body1 | 

try {
    $result = $apiInstance->authenticationsInweboIdPut($id, $content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsInweboIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\YouSign\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\YouSign\Client\Model\AuthenticationInweboOutput**](../Model/AuthenticationInweboOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsSmsIdGet**
> \YouSign\Client\Model\AuthenticationSmsOutput authenticationsSmsIdGet($id, $authorization)

Find an Authentication by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsSmsIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsSmsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\AuthenticationSmsOutput**](../Model/AuthenticationSmsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationsSmsIdPut**
> \YouSign\Client\Model\AuthenticationSmsOutput authenticationsSmsIdPut($id, $authorization, $content_type, $body)

Update an SMS Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$body = new \YouSign\Client\Model\Body2(); // \YouSign\Client\Model\Body2 | 

try {
    $result = $apiInstance->authenticationsSmsIdPut($id, $authorization, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsSmsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **content_type** | **string**| The MIME type of the body of the request |
 **body** | [**\YouSign\Client\Model\Body2**](../Model/Body2.md)|  |

### Return type

[**\YouSign\Client\Model\AuthenticationSmsOutput**](../Model/AuthenticationSmsOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

