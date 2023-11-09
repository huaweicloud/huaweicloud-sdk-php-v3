English | [简体中文](./README_CN.md)

<p align="center">
<a href="https://www.huaweicloud.com/"><img width="450px" height="102px" src="https://console-static.huaweicloud.com/static/authui/20210202115135/public/custom/images/logo-en.svg"></a>
</p>

<h1 align="center">Huawei Cloud Php Software Development Kit (Php SDK)</h1>

The Huawei Cloud Php SDK allows you to easily work with Huawei Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud(VPC) without the need to handle API related tasks.

This document introduces how to obtain and use Huawei Cloud Php SDK.

## Requirements

- To use Huawei Cloud Php SDK, you must have Huawei Cloud account as well as the Access Key (AK) and Secret key (SK) of the Huawei Cloud account. You can create an Access Key in the Huawei Cloud console. For more information,
  see [My Credentials](https://support.huaweicloud.com/en-us/usermanual-ca/en-us_topic_0046606340.html).

- To use Huawei Cloud Php SDK to access the APIs of specific service, please make sure you do have activated the
  service in [Huawei Cloud console](https://console.huaweicloud.com/?locale=en-us) if needed.

- Huawei Cloud Php SDK requires **PHP 5.6** or later, run command `php --version` to check the version of Php.

## Install Php SDK

The recommended way to install SDK is with [Composer](https://getcomposer.org/). 

Composer is a dependency management tool for Php which allows you to declare the dependencies your project needs and installs them into your project. 

``` bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
    
# Install the Php SDK
composer require huaweicloud/huaweicloud-sdk-php:3.0.3-beta
```
After installing, you need to require Composer's autoloader: 

``` php
require 'path/to/vendor/autoload.php';
```
    
## Code example

- The following example shows how to query a list of IAM in a specific region, you need to substitute your real `{Service}Client` for `IamClient` in actual use.
- Substitute the values for `{your ak string}`, `{your sk string}`, `{your endpoint string}` and `{your domain id}`.

``` php
<?php

require_once ".\\vendor\autoload.php";

use HuaweiCloud\SDK\Core\Auth\GlobalCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Iam\V3\IamClient;
use HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysRequest;
use Monolog\Logger;

//Do not hard-code authentication information into the code, as this may pose a security risk
$ak = getenv("HUAWEICLOUD_SDK_AK");
$sk = getenv("HUAWEICLOUD_SDK_SK");
$endpoint = "{your endpoint}";
$domainId = "{your domain id}";

$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);
$credentials = new GlobalCredentials($ak,$sk,$domainId);

$iamClient = IamClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($credentials)
    ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO)
    ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO)
    ->build();

function listPermanentAccessKeys($iamClient)
{
    $listPermanentAccessKeysRequest = new ListPermanentAccessKeysRequest(array('userId'=>"{your user id}"));
    try {
        $response = $iamClient->listPermanentAccessKeys($listPermanentAccessKeysRequest);
        echo "\n";
        echo $response;
    } catch (ConnectionException $e) {
        $msg = $e->getMessage();
        echo "\n". $msg ."\n";
    } catch (RequestTimeoutException $e) {
        $msg = $e->getMessage();
        echo "\n". $msg ."\n";
    } catch (ServiceResponseException $e) {
        echo "\n";
        echo $e->getHttpStatusCode(). "\n";
        echo $e->getRequestId(). "\n";        
        echo $e->getErrorCode() . "\n";
        echo $e->getErrorMsg() . "\n";
    }
}
listPermanentAccessKeys($iamClient);
```

## Online Debugging

[API Explorer](https://apiexplorer.developer.intl.huaweicloud.com/apiexplorer/overview) provides api retrieval and online debugging, supports full fast retrieval, visual debugging, help document viewing, and online consultation.

## Changelog

Detailed changes for each released version are documented in
the [CHANGELOG.md](https://github.com/huaweicloud/huaweicloud-sdk-php-v3/blob/master/CHANGELOG.md).

## User Manual [:top:](#huawei-cloud-php-software-development-kit-php-sdk)

* [1. Client Configuration](#1-client-configuration-top)
    * [1.1 Default Configuration](#11-default-configuration-top)
    * [1.2 Network Proxy](#12-network-proxy-top)
    * [1.3 Timeout Configuration](#13-timeout-configuration-top)
    * [1.4 SSL Certification](#14-ssl-certification-top)
* [2. Credentials Configuration](#2-credentials-configuration-top)
    * [2.1 Use Permanent AK&SK](#21-use-permanent-aksk-top)
    * [2.2 Use Temporary AK&SK](#22-use-temporary-aksk-top)
* [3. Client Initialization](#3-client-initialization-top)
    * [3.1 Initialize the client with specified Endpoint](#31-initialize-the-serviceclient-with-specified-endpoint-top)
* [4. Send Requests and Handle Responses](#4-send-requests-and-handle-responses-top)
    * [4.1 Exceptions](#41-exceptions-top)
* [5. Use Asynchronous Client](#5-use-asynchronous-client-top)
* [6. Troubleshooting](#6-troubleshooting-top)
    * [6.1 Access Log](#61-access-log-top)
    * [6.2 Original HTTP Listener](#62-original-http-listener-top)


### 1. Client Configuration [:top:](#user-manual-top)

#### 1.1 Default Configuration [:top:](#user-manual-top)
``` php
// Use default configuration
$config = HttpConfig::getDefaultConfig();
```

#### 1.2 Network Proxy [:top:](#user-manual-top)

``` php
// Use network proxy if needed
$config->setProxyProtocol('http');
$config->setProxyHost('proxy.huawei.com');
$config->setProxyPort(8080);
$config->setProxyUser('username');
$config->setProxyPassword('password');
```

#### 1.3 Timeout Configuration [:top:](#user-manual-top)

``` php
// The default connection timeout is 60 seconds, the default read timeout is 120 seconds. You could change it if needed.
$config->setTimeout(120);
$config->setConnectionTimeout(60);
```

#### 1.4 SSL Certification [:top:](#user-manual-top)

``` php
// Skip SSL certification checking while using https protocol if needed
$config->setIgnoreSslVerification(true);
// Server ca certification if needed
$config->setCertFile($yourCertFile);
```

### 2. Credentials Configuration [:top:](#user-manual-top)

There are two types of Huawei Cloud services, `regional` services and `global` services.

Global services only contain IAM.

For `regional` services' authentication, project_id is required. 

For `global` services' authentication, domain_id is required.

**Parameter description**:

- `ak` is the access key ID for your account.
- `sk` is the secret access key for your account.
- `project_id` is the ID of your project depending on your region which you want to operate.
- `domain_id` is the account ID of Huawei Cloud.
- `security_token` is the security token when using temporary AK/SK.

#### 2.1 Use Permanent AK&SK [:top:](#user-manual-top)

``` php
// Regional services
$basicCredentials = new BasicCredentials($ak,$sk,$projectId);
    
// Global services
$globalCredentials = new GlobalCredentials($ak,$sk,$domainId);
```

#### 2.2 Use Temporary AK&SK [:top:](#user-manual-top)

It's required to obtain temporary AK&SK and security token first, which could be obtained through
permanent AK&SK or through an agency.

- Obtaining a temporary access key and security token through token, you could refer to
document: https://support.huaweicloud.com/en-us/api-iam/iam_04_0002.html . The API mentioned in the document above
corresponds to the method of `CreateTemporaryAccessKeyByToken` in IAM SDK.

- Obtaining a temporary access key and security token through an agency, you could refer to
document: https://support.huaweicloud.com/en-us/api-iam/iam_04_0101.html . The API mentioned in the document above
corresponds to the method of `CreateTemporaryAccessKeyByAgency` in IAM SDK.

``` php
// Regional services
$basicCredentials = BasicCredentials(ak, sk, projectId).withSecurityToken(securityToken);
    
// Global services
$globalCredentials = GlobalCredentials(ak, sk, domainId).withSecurityToken(securityToken);
```

### 3. Client Initialization [:top:](#user-manual-top)

#### 3.1 Initialize the {Service}Client with specified Endpoint [:top:](#user-manual-top)

``` php
// Initialize specified service client instance, take IamClient for example
$iamClient = IamClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($globalCredentials)
    ->build();
```

**where:**

- `$endpoint`: varies by services and regions,
  see [Regions and Endpoints](https://developer.huaweicloud.com/intl/en-us/endpoint) to obtain correct endpoint.

### 4. Send Requests and Handle Responses [:top:](#user-manual-top)

``` php
// Initialize a request and print response, take interface of listPermanentAccessKeys for example
$request = new ListPermanentAccessKeysRequest(array(userId=>"{your user id}"));
$response = $iamClient->listPermanentAccessKeys($request);
echo response;
```

#### 4.1 Exceptions [:top:](#user-manual-top)

| Level 1                  | Notice                 | Level 2                  | Notice                                        |
| :----------------------- | :--------------------- | :----------------------- | :-------------------------------------------- |
| ConnectionException      | Connection error       | HostUnreachableException | Host is not reachable                         |
|                          |                        | SslHandShakeException    | SSL certification error                       |
| RequestTimeoutException  | Request timeout        | CallTimeoutException     | timeout for single request                    |
|                          |                        | RetryOutageException     | no response after retrying                    |
| ServiceResponseException | service response error | ServerResponseException  | server inner error, http status code: [500,]  |
|                          |                        | ClientRequestException   | invalid request, http status code: [400? 500) |

``` php
// handle exceptions
try {
    $request = new ListPermanentAccessKeysRequest(array(userId=>"{your user id}"));
    $response = $iamClient->listPermanentAccessKeys($request);
} catch (ConnectionException $e) {
    $msg = $e->getMessage();
    echo "\n". $msg ."\n";
} catch (RequestTimeoutException $e) {
    $msg = $e->getMessage();
    echo "\n". $msg ."\n";
} catch (ServiceResponseException $e) {
    echo "\n";
    echo $e->getHttpStatusCode(). "\n";
    echo $e->getRequestId(). "\n";    
    echo $e->getErrorCode(). "\n";
    echo $e->getErrorMsg(). "\n";
}
```

### 5. Use Asynchronous Client [:top:](#user-manual-top)

``` php
// Initialize asynchronous client, take IAMAsyncClient for example
$iamClient = IamAsyncClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($credentials)
    ->build();

// send asynchronous request
$request = new ShowPermanentAccessKeyRequest(array('accessKey' => "{your access key}"));
$promise = $iamClient->showPermanentAccessKeyAsync($request);

// get asynchronous response
$response = $promise->wait();
```

### 6. Troubleshooting [:top:](#user-manual-top)

SDK supports `Access` log and `Debug` log which could be configured manually.

#### 6.1 Access Log [:top:](#user-manual-top)

SDK supports print access log which could be enabled by manual configuration, the log could be output to the console or 
specified files.

For example:

``` php
$iamClient = IamClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($globalCredentials)
    ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO) // Write log to files
    ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO) // Write log to console
    ->build();
```

**where:**
- `withFileLogger`:
    - `$logPath`: log file path.
    - `$logLevel`: log level, default is INFO.
    - `$logMaxFiles`: count of log file, default is 5.
- `withStreamLogger`:
    - `$stream`: stream object, default is sys.stdout.
    - `$logLevel`: log level, default is INFO.

After enabled log, the SDK will print the access log by default, every request will be recorded to the console like: 

``` text
[2020-10-16 03:10:29][INFO] "GET https://iam.cn-north-1.myhuaweicloud.com/v3.0/OS-CREDENTIAL/credentials/W8VHHFEFPIJV6TFOUOQO" 200 244 7a68399eb8ed63fc91018426a7c4b8a0
```

The format of access log is:

``` text
"{httpMethod} {uri}" {httpStatusCode} {responseContentLength} {requestId}
```

#### 6.2 Original HTTP Listener [:top:](#user-manual-top)

In some situation, you may need to debug your http requests, original http request and response information will be
needed. The SDK provides a listener function to obtain the original encrypted http request and response information.

> :warning:  Warning: The original http log information is used in debugging stage only, please do not print the original http header or body in the production environment. These log information is not encrypted and contains sensitive data such as the password of your ECS virtual machine, or the password of your IAM user account, etc. When the response body is binary content, the body will be printed as "***" without detailed information.

```php
$requestHandler = function ($argsMap) {
    if (isset($argsMap['request'])) {
        $sdkRequest = $argsMap['request'];
        $requestHeaders = $sdkRequest->headerParams;
        $requestBase = "> Request " . $sdkRequest->method . ' ' .
            $sdkRequest->url . "\n";
        if (count($requestHeaders) > 0) {
            $requestBase = $requestBase . '> Headers:' . "\n";
            foreach ($requestHeaders as $key => $value) {
                $requestBase = $requestBase . '    ' . $key . ' : ' .
                    $value . "\n";
            }
            $requestBase = $requestBase . '> Body: ' .
                $sdkRequest->body . "\n\n";
        }
        if (isset($argsMap['logger'])) {
            $logger = $argsMap['logger'];
            $logger->addDebug($requestBase);
        }
    }
};

$responseHandler = function ($argsMap) {
    if (isset($argsMap['response'])) {
        $response = $argsMap['response'];
        $responseBase = "> Response HTTP/1.1 " .
            $response->getStatusCode() . "\n";
        $responseHeaders = $response->getHeaders();
        if (count($responseHeaders) > 0) {
            $responseBase = $responseBase . '> Headers:' . "\n";
            foreach ($responseHeaders as $key => $value) {
                $valueToString = '';
                if (is_array($value)) {
                    $valueToString = ''.join($value);
                }
                $responseBase = $responseBase . '    ' . $key . ' : '
                    . $valueToString . "\n";
            }
            $responseBody = $response->getBody();
            $responseBase = $responseBase . '> Body: ' . (string)
                $responseBody . "\n\n";
        }
        if (isset($argsMap['logger'])) {
            $logger = $argsMap['logger'];
            $logger->addDebug($responseBase);
        }
    }
};

$httpHandler = new HttpHandler();
$httpHandler->addRequestHandlers($requestHandler);
$httpHandler->addResponseHandlers($responseHandler);

$iamClient = IamClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials(null)
    ->withStreamLogger($stream='php://stdout',$logLevel=Logger::INFO)
    ->withFileLogger($logPath='./test_log.txt', $logLevel=Logger::INFO)
    ->withHttpHandler($httpHandler)
    ->build();
```

**where:**

HttpHandler supports method `addRequestHandlers` and `addResponseHandlers`.
