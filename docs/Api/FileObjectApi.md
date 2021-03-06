# YouSign\Client\FileObjectApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileObjectsIdDelete**](FileObjectApi.md#fileObjectsIdDelete) | **DELETE** /file_objects/{id} | Delete a File Object
[**fileObjectsIdGet**](FileObjectApi.md#fileObjectsIdGet) | **GET** /file_objects/{id} | Find a File Object by ID
[**fileObjectsIdPut**](FileObjectApi.md#fileObjectsIdPut) | **PUT** /file_objects/{id} | Update a File Object
[**fileObjectsPost**](FileObjectApi.md#fileObjectsPost) | **POST** /file_objects | Create a new File Object


# **fileObjectsIdDelete**
> fileObjectsIdDelete($id)

Delete a File Object

Delete a File Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\FileObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $apiInstance->fileObjectsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectApi->fileObjectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileObjectsIdGet**
> \YouSign\Client\Model\FileObjectOutput fileObjectsIdGet($id)

Find a File Object by ID

Get a File Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\FileObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->fileObjectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectApi->fileObjectsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\YouSign\Client\Model\FileObjectOutput**](../Model/FileObjectOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileObjectsIdPut**
> \YouSign\Client\Model\FileObjectOutput fileObjectsIdPut($id, $body)

Update a File Object

Update a File Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\FileObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \YouSign\Client\Model\FileObjectInput(); // \YouSign\Client\Model\FileObjectInput | 

try {
    $result = $apiInstance->fileObjectsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectApi->fileObjectsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\YouSign\Client\Model\FileObjectInput**](../Model/FileObjectInput.md)|  |

### Return type

[**\YouSign\Client\Model\FileObjectOutput**](../Model/FileObjectOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileObjectsPost**
> \YouSign\Client\Model\FileObjectOutput fileObjectsPost($body)

Create a new File Object

Create a new fileObject

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\FileObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \YouSign\Client\Model\FileObjectInput(); // \YouSign\Client\Model\FileObjectInput | 

try {
    $result = $apiInstance->fileObjectsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectApi->fileObjectsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YouSign\Client\Model\FileObjectInput**](../Model/FileObjectInput.md)|  |

### Return type

[**\YouSign\Client\Model\FileObjectOutput**](../Model/FileObjectOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

