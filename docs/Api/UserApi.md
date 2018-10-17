# Swagger\Client\UserApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersGet**](UserApi.md#usersGet) | **GET** /users | List all Users
[**usersIdDelete**](UserApi.md#usersIdDelete) | **DELETE** /users/{id} | Delete a User
[**usersIdGet**](UserApi.md#usersIdGet) | **GET** /users/{id} | Find a User by ID
[**usersIdPut**](UserApi.md#usersIdPut) | **PUT** /users/{id} | Update a User
[**usersPost**](UserApi.md#usersPost) | **POST** /users | Create a new User on Yousign application


# **usersGet**
> \Swagger\Client\Model\UserOutput[] usersGet($authorization)

List all Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->usersGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\UserOutput[]**](../Model/UserOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdDelete**
> usersIdDelete($id, $authorization)

Delete a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $apiInstance->usersIdDelete($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdGet**
> \Swagger\Client\Model\UserOutput usersIdGet($id, $authorization)

Find a User by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->usersIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\UserOutput**](../Model/UserOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdPut**
> \Swagger\Client\Model\UserOutput usersIdPut($id, $content_type, $authorization, $body)

Update a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\UserUpdateInput(); // \Swagger\Client\Model\UserUpdateInput | 

try {
    $result = $apiInstance->usersIdPut($id, $content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\UserUpdateInput**](../Model/UserUpdateInput.md)|  |

### Return type

[**\Swagger\Client\Model\UserOutput**](../Model/UserOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPost**
> \Swagger\Client\Model\UserOutput usersPost($content_type, $authorization, $body)

Create a new User on Yousign application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\UserInput(); // \Swagger\Client\Model\UserInput | 

try {
    $result = $apiInstance->usersPost($content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\UserInput**](../Model/UserInput.md)|  |

### Return type

[**\Swagger\Client\Model\UserOutput**](../Model/UserOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

