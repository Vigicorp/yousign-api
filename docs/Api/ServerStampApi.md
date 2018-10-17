# YouSign\Client\ServerStampApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serverStampsIdGet**](ServerStampApi.md#serverStampsIdGet) | **GET** /server_stamps/{id} | 
[**serverStampsPost**](ServerStampApi.md#serverStampsPost) | **POST** /server_stamps | 


# **serverStampsIdGet**
> \YouSign\Client\Model\ServerStampOutput serverStampsIdGet($id, $content_type, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\ServerStampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->serverStampsIdGet($id, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerStampApi->serverStampsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\ServerStampOutput**](../Model/ServerStampOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverStampsPost**
> \YouSign\Client\Model\ServerStampOutput serverStampsPost($content_type, $authorization, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\ServerStampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \YouSign\Client\Model\ServerStampInput(); // \YouSign\Client\Model\ServerStampInput | 

try {
    $result = $apiInstance->serverStampsPost($content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerStampApi->serverStampsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\YouSign\Client\Model\ServerStampInput**](../Model/ServerStampInput.md)|  |

### Return type

[**\YouSign\Client\Model\ServerStampOutput**](../Model/ServerStampOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

