# Swagger\Client\ProceduresApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportProceduresGet**](ProceduresApi.md#exportProceduresGet) | **GET** /export/procedures | Export Procedure list
[**proceduresGet**](ProceduresApi.md#proceduresGet) | **GET** /procedures | Get Procedure list
[**proceduresIdDelete**](ProceduresApi.md#proceduresIdDelete) | **DELETE** /procedures/{id} | Delete a Procedure
[**proceduresIdDuplicatePost**](ProceduresApi.md#proceduresIdDuplicatePost) | **POST** /procedures/{id}/duplicate | Duplicate a Procedure
[**proceduresIdGet**](ProceduresApi.md#proceduresIdGet) | **GET** /procedures/{id} | Find a Procedure by ID
[**proceduresIdProofGet**](ProceduresApi.md#proceduresIdProofGet) | **GET** /procedures/{id}/proof | Get a Procedure proof file
[**proceduresIdPut**](ProceduresApi.md#proceduresIdPut) | **PUT** /procedures/{id} | Update a Procedure
[**proceduresIdRemindPost**](ProceduresApi.md#proceduresIdRemindPost) | **POST** /procedures/{id}/remind | Remind a Procedure
[**proceduresPost**](ProceduresApi.md#proceduresPost) | **POST** /procedures | Create a new Procedure


# **exportProceduresGet**
> string exportProceduresGet($authorization, $status, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order)

Export Procedure list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$status = "status_example"; // string | Return Procedure list based on the status for each Procedure
$name = "\"name=test\""; // string | Filter by name (contains)
$members_firstname = "\"members.firstname=test\""; // string | Filter by member firstname (contains)
$members_lastname = "\"members.lastname=test\""; // string | Filter by member lastname (contains)
$members_phone = "\"members.phone=0102030405\""; // string | Filter by member phone (contains)
$members_email = "\"members.email=test@test.fr\""; // string | Filter by member email (contains)
$files_name = "\"files.name=test\""; // string | Filter by file name (contains)
$created_at = array(new \DateTime("\"createdAt[after]=2017-09-18\"")); // \DateTime[] | Filter by creation date  createdAt[after]=2017-09-18 createdAt[before]=2017-09-18 createdAt[strictly_after]=2017-09-18 createdAt[strictly_before]=2017-09-18
$updated_at = array(new \DateTime("\"updatedAt[after]=2017-09-18\"")); // \DateTime[] | Filter by update date  updatedAt[after]=2017-09-18 updatedAt[before]=2017-09-18 updatedAt[strictly_after]=2017-09-18 updatedAt[strictly_before]=2017-09-18
$expires_at = array(new \DateTime("\"expiresAt[after]=2017-09-18\"")); // \DateTime[] | Filter by expire date  expiresAt[after]=2017-09-18 expiresAt[before]=2017-09-18 expiresAt[strictly_after]=2017-09-18 expiresAt[strictly_before]=2017-09-18
$deleted_at = array(new \DateTime("\"deletedAt[after]=2017-09-18\"")); // \DateTime[] | Filter by delete date  deletedAt[after]=2017-09-18 deletedAt[before]=2017-09-18 deletedAt[strictly_after]=2017-09-18 deletedAt[strictly_before]=2017-09-18
$order = array("\"order[createdAt]=asc\""); // string[] | Order by attribut

try {
    $result = $apiInstance->exportProceduresGet($authorization, $status, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->exportProceduresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **status** | **string**| Return Procedure list based on the status for each Procedure | [optional]
 **name** | **string**| Filter by name (contains) | [optional]
 **members_firstname** | **string**| Filter by member firstname (contains) | [optional]
 **members_lastname** | **string**| Filter by member lastname (contains) | [optional]
 **members_phone** | **string**| Filter by member phone (contains) | [optional]
 **members_email** | **string**| Filter by member email (contains) | [optional]
 **files_name** | **string**| Filter by file name (contains) | [optional]
 **created_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by creation date  createdAt[after]&#x3D;2017-09-18 createdAt[before]&#x3D;2017-09-18 createdAt[strictly_after]&#x3D;2017-09-18 createdAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **updated_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by update date  updatedAt[after]&#x3D;2017-09-18 updatedAt[before]&#x3D;2017-09-18 updatedAt[strictly_after]&#x3D;2017-09-18 updatedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **expires_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by expire date  expiresAt[after]&#x3D;2017-09-18 expiresAt[before]&#x3D;2017-09-18 expiresAt[strictly_after]&#x3D;2017-09-18 expiresAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **deleted_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by delete date  deletedAt[after]&#x3D;2017-09-18 deletedAt[before]&#x3D;2017-09-18 deletedAt[strictly_after]&#x3D;2017-09-18 deletedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **order** | [**string[]**](../Model/string.md)| Order by attribut | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresGet**
> \Swagger\Client\Model\ProcedureOutput[] proceduresGet($authorization, $status, $template, $members, $items_per_page, $pagination, $page, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order)

Get Procedure list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$status = "status_example"; // string | Return Procedure list based on the status for each Procedure
$template = false; // bool | Used to get Procedure template list
$members = array("members_example"); // string[] | Get Procedure list for given members (paraph mode)
$items_per_page = "\"itemsPerPage=20\""; // string | Number of items per page for the pagination
$pagination = "pagination=true"; // bool | Disable the pagination
$page = "page=2"; // int | Page of the pagination
$name = "\"name=test\""; // string | Filter by name (contains)
$members_firstname = "\"members.firstname=test\""; // string | Filter by member firstname (contains)
$members_lastname = "\"members.lastname=test\""; // string | Filter by member lastname (contains)
$members_phone = "\"members.phone=0102030405\""; // string | Filter by member phone (contains)
$members_email = "\"members.email=test@test.fr\""; // string | Filter by member email (contains)
$files_name = "\"files.name=test\""; // string | Filter by file name (contains)
$created_at = array(new \DateTime("\"createdAt[after]=2017-09-18\"")); // \DateTime[] | Filter by creation date  createdAt[after]=2017-09-18 createdAt[before]=2017-09-18 createdAt[strictly_after]=2017-09-18 createdAt[strictly_before]=2017-09-18
$updated_at = array(new \DateTime("\"updatedAt[after]=2017-09-18\"")); // \DateTime[] | Filter by update date  updatedAt[after]=2017-09-18 updatedAt[before]=2017-09-18 updatedAt[strictly_after]=2017-09-18 updatedAt[strictly_before]=2017-09-18
$expires_at = array(new \DateTime("\"expiresAt[after]=2017-09-18\"")); // \DateTime[] | Filter by expire date  expiresAt[after]=2017-09-18 expiresAt[before]=2017-09-18 expiresAt[strictly_after]=2017-09-18 expiresAt[strictly_before]=2017-09-18
$deleted_at = array(new \DateTime("\"deletedAt[after]=2017-09-18\"")); // \DateTime[] | Filter by delete date  deletedAt[after]=2017-09-18 deletedAt[before]=2017-09-18 deletedAt[strictly_after]=2017-09-18 deletedAt[strictly_before]=2017-09-18
$order = array("\"order[createdAt]=asc\""); // string[] | Order by attribut

try {
    $result = $apiInstance->proceduresGet($authorization, $status, $template, $members, $items_per_page, $pagination, $page, $name, $members_firstname, $members_lastname, $members_phone, $members_email, $files_name, $created_at, $updated_at, $expires_at, $deleted_at, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **status** | **string**| Return Procedure list based on the status for each Procedure | [optional]
 **template** | **bool**| Used to get Procedure template list | [optional] [default to false]
 **members** | [**string[]**](../Model/string.md)| Get Procedure list for given members (paraph mode) | [optional]
 **items_per_page** | **string**| Number of items per page for the pagination | [optional]
 **pagination** | **bool**| Disable the pagination | [optional]
 **page** | **int**| Page of the pagination | [optional]
 **name** | **string**| Filter by name (contains) | [optional]
 **members_firstname** | **string**| Filter by member firstname (contains) | [optional]
 **members_lastname** | **string**| Filter by member lastname (contains) | [optional]
 **members_phone** | **string**| Filter by member phone (contains) | [optional]
 **members_email** | **string**| Filter by member email (contains) | [optional]
 **files_name** | **string**| Filter by file name (contains) | [optional]
 **created_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by creation date  createdAt[after]&#x3D;2017-09-18 createdAt[before]&#x3D;2017-09-18 createdAt[strictly_after]&#x3D;2017-09-18 createdAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **updated_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by update date  updatedAt[after]&#x3D;2017-09-18 updatedAt[before]&#x3D;2017-09-18 updatedAt[strictly_after]&#x3D;2017-09-18 updatedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **expires_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by expire date  expiresAt[after]&#x3D;2017-09-18 expiresAt[before]&#x3D;2017-09-18 expiresAt[strictly_after]&#x3D;2017-09-18 expiresAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **deleted_at** | [**\DateTime[]**](../Model/\DateTime.md)| Filter by delete date  deletedAt[after]&#x3D;2017-09-18 deletedAt[before]&#x3D;2017-09-18 deletedAt[strictly_after]&#x3D;2017-09-18 deletedAt[strictly_before]&#x3D;2017-09-18 | [optional]
 **order** | [**string[]**](../Model/string.md)| Order by attribut | [optional]

### Return type

[**\Swagger\Client\Model\ProcedureOutput[]**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdDelete**
> proceduresIdDelete($id, $authorization)

Delete a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $apiInstance->proceduresIdDelete($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **proceduresIdDuplicatePost**
> \Swagger\Client\Model\ProcedureOutput proceduresIdDuplicatePost($id, $authorization, $body)

Duplicate a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\ProcedureDuplicateInput(); // \Swagger\Client\Model\ProcedureDuplicateInput | 

try {
    $result = $apiInstance->proceduresIdDuplicatePost($id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\ProcedureDuplicateInput**](../Model/ProcedureDuplicateInput.md)|  |

### Return type

[**\Swagger\Client\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdGet**
> \Swagger\Client\Model\ProcedureOutput proceduresIdGet($id, $authorization)

Find a Procedure by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->proceduresIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\Swagger\Client\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdProofGet**
> string proceduresIdProofGet($id, $authorization)

Get a Procedure proof file

Get a Procedure proof file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->proceduresIdProofGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdProofGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdPut**
> \Swagger\Client\Model\ProcedureOutput proceduresIdPut($id, $content_type, $authorization, $body)

Update a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\ProcedureInput(); // \Swagger\Client\Model\ProcedureInput | 

try {
    $result = $apiInstance->proceduresIdPut($id, $content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\ProcedureInput**](../Model/ProcedureInput.md)|  |

### Return type

[**\Swagger\Client\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresIdRemindPost**
> \Swagger\Client\Model\ProcedureOutput proceduresIdRemindPost($id, $authorization, $body)

Remind a Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\ProcedureRemindInput(); // \Swagger\Client\Model\ProcedureRemindInput | 

try {
    $result = $apiInstance->proceduresIdRemindPost($id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresIdRemindPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\ProcedureRemindInput**](../Model/ProcedureRemindInput.md)|  |

### Return type

[**\Swagger\Client\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proceduresPost**
> \Swagger\Client\Model\ProcedureOutput proceduresPost($content_type, $authorization, $body)

Create a new Procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProceduresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "\"application/json\""; // string | The MIME type of the body of the request
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication
$body = new \Swagger\Client\Model\ProcedureInput(); // \Swagger\Client\Model\ProcedureInput | 

try {
    $result = $apiInstance->proceduresPost($content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProceduresApi->proceduresPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| The MIME type of the body of the request |
 **authorization** | **string**| Authentication credentials for HTTP authentication |
 **body** | [**\Swagger\Client\Model\ProcedureInput**](../Model/ProcedureInput.md)|  |

### Return type

[**\Swagger\Client\Model\ProcedureOutput**](../Model/ProcedureOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

