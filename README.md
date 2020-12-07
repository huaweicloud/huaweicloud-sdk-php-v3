English | [简体中文](./README_CN.md)

# HuaweiCloud PHP Software Development Kit (PHP SDK)

The HuaweiCloud PHP SDK allows you to easily work with Huawei Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud(VPC) without the need to handle API related tasks.

This document introduces how to obtain and use HuaweiCloud PHP SDK.

## Getting Started

- To use HuaweiCloud PHP SDK, you must have Huawei Cloud account as well as the Access Key and Secret key of the HuaweiCloud account.

    The accessKey is required when initializing `{Service}Client`. You can create an AccessKey in the Huawei Cloud console. For more information, see [My Credentials](https://support.huaweicloud.com/en-us/usermanual-ca/en-us_topic_0046606340.html).

- HuaweiCloud PHP SDK requires PHP 5.6 or later.


## Install PHP SDK

HuaweiCloud PHP SDK supports PHP 5.6 or later. Run ``PHP --version`` to check the version of PHP.

- Use composer

    The recommended way to install SDK is with [Composer](https://getcomposer.org/). Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project. 

    ``` powershell
    # Install Composer
    curl -sS https://getcomposer.org/installer | php
     
    # Install the PHP SDK
    composer require huaweicloud/huaweicloud-sdk-php
    ```
    After installing, you need to require Composer's autoloader: 

    ```php
    require 'path/to/vendor/autoload.php';
    ```
    


## Use PHP SDK

1. Import the required modules as follows:

    ```php
    use HuaweiCloud\SDK\Core\Auth\GlobalCredentials;
    use HuaweiCloud\SDK\Core\Http\HttpConfig;
    use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
    use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
    use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
    use HuaweiCloud\SDK\Iam\V3\IamClient;
    use HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysRequest;
    use Monolog\Logger;
    ```

2. Config `{Service}Client` Configurations

    2.1 Use default configuration

    ``` php
    #  Use default configuration
    $config = HttpConfig::getDefaultConfig();
    ```

    2.2 Proxy(Optional)

    ``` php
    # Use Proxy if needed
    $config->setProxyProtocol('http');
    $config->setProxyHost('proxy.huawei.com');
    $config->setProxyPort(8080);
    $config->setProxyUser('username');
    $config->setProxyPassword('password');
    ```

    2.3 Connection(Optional)

    ``` php
    # seconds to wait for the server to send data before giving up, as a float, or (connect timeout, read timeout)
    $config->setTimeout(3);
    ```

    2.4 SSL Certification(Optional)

    ``` php
    # Skip ssl certification checking while using https protocol if needed
    $config->setIgnoreSslVerification(true);
    # Server ca certification if needed
    $config->setCertFile($yourCertFile);
    ```

3. Initialize Credentials

    **Notice:**
    There are two types of HUAWEI CLOUD services, regional services and global services. 
    Global services currently only support IAM.

    For Regional services' authentication, projectId is required. 
    For global services' authentication, domainId is required. 

    - `ak` is the access key ID for your account.
    - `sk` is the secret access key for your account.
    - `project_id` is the ID of your project depending on your region which you want to operate.
    - `domain_id` is the account ID of HUAWEI CLOUD.
    - `security_token` is the security token when using temporary AK/SK.

    3.1 Use permanent AK/SK

    ``` php
    # Region services
    $credentials = new BasicCredentials($ak,$sk,$projectId);
       
    # Global services
    $credentials = new GlobalCredentials($ak,$sk,$domainId);
    ```

    3.2 Use temporary AK/SK

    It's preferred to obtain temporary access key, security key and security token first, which could be obtained through permanent access key and security key or through an agency.

    Obtaining a temporary access key token through permanent access key and security key, you could refer to document: https://support.huaweicloud.com/en-us/api-iam/iam_04_0002.html . The API mentioned in the document above corresponds to the method of createTemporaryAccessKeyByToken in IAM SDK.

    Obtaining a temporary access key and security token through an agency, you could refer to document: https://support.huaweicloud.com/en-us/api-iam/iam_04_0101.html . The API mentioned in the document above corresponds to the method of createTemporaryAccessKeyByAgency in IAM SDK.

    ``` php
    # Regional services
    $credentials = BasicCredentials(ak, sk, projectId).withSecurityToken(securityToken);
       
    # Global services
    $credentials = GlobalCredentials(ak, sk, domainId).withSecurityToken(securityToken);
    ```

4. Initialize the `{Service}Client` instance:

    ``` php
    # Initialize specified service client instance, take IamClient for example
    $iamClient = IamClient::newBuilder(new IamClient)
        ->withHttpConfig($config)
        ->withEndpoint($endpoint)
        ->withCredentials(null)
        ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO)  // Write log files
        ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO)  // Write log to console
        ->build();
    ```

    **where:**

    - $`endpoint`: service specific endpoints, see [Regions and Endpoints](https://developer.huaweicloud.com/intl/en-us/endpoint).
    - `withFileLogger`:
        - `$logPath`: log file path.
        - `$logLevel`: log level, default is INFO.
        - `$logMaxFiles`: count of log file, default is 5.
    - `withStreamLogger`:
        - `$stream`: stream object, default is sys.stdout.
        - `$logLevel`: log level, default is INFO.

    After enabled log, the SDK will print the access log by default, every request will be recorded in console like: `"{httpMethod} {uri}" {httpStatusCode} {responseContentLength} {requestId}`

    ``` shell
    [2020-10-16 03:10:29][INFO] "GET https://iam.cn-north-1.myhuaweicloud.com/v3.0/OS-CREDENTIAL/credentials/W8VHHFEFPIJV6TFOUOQO"  200 244 7a68399eb8ed63fc91018426a7c4b8a0
    ```

5. Send a request and print response.

    ``` php
    # Initialize a request and print response, take interface of listPermanentAccessKeys for example
    $request = new ListPermanentAccessKeysRequest(array(userId=>"{your user id}"));
    $response = $iamClient->listPermanentAccessKeys($request);
    echo response;
    ```

6. Exceptions

    | Level 1 | Notice | Level 2 | Notice |
    | :---- | :---- | :---- | :---- |
    | ConnectionException | Connection error | HostUnreachableException | Host is not reachable |
    | | | SslHandShakeException | SSL certification error |
    | RequestTimeoutException | Request timeout | CallTimeoutException | timeout for single request |
    | | | RetryOutageException | no response after retrying |
    | ServiceResponseException | service response error | ServerResponseException | server inner error, http status code: [500,] |
    | | | ClientRequestException | invalid request, http status code: [400? 500) |

    ``` php
    # handle exceptions
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
        echo $e->getErrorCode() . "\n";
        echo $e->getErrorMsg() . "\n";
    }
    ```

7. Asynchronous Requests

    ``` php
    # Initialize asynchronous client, take IAMAsyncClient for example
    $iamClient = IamAsyncClient::newBuilder(new IamAsyncClient)
        ->withHttpConfig($config)
        ->withEndpoint($endpoint)
        ->withCredentials($credentials)
        ->build();
    
    # send asynchronous request
    $request = new ShowPermanentAccessKeyRequest(array('accessKey' => "{your access key}"));
    $promise = $iamClient->showPermanentAccessKeyAsync($request);
    
    # get asynchronous response
    $response = $promise->wait();
    ```

8. Troubleshooting

    In some situation, you may need to debug your http requests, original http request and response information will be needed. The SDK provides a listener function to obtain the original encrypted http request and response information.

    **Warning:** The original http log can only be used in troubleshooting scenarios, please do not print the original http header or body in the production environment. The log content is not encrypted and may contain sensitive information such as the password of your ECS or the password of your IAM user account, etc. When the response body is binary content, the body will be printed as "***" without detailed information.

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
    
    $iamClient = IamClient::newBuilder(new IamClient)
        ->withHttpConfig($config)
        ->withEndpoint($endpoint)
        ->withCredentials(null)
        ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO) // 日志打印至控制台
        ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO) // 日志打印至文件
        ->withHttpHandler($httpHandler)
        ->build();
    ```

    **where:**

    HttpHandler supports addRequestHandlers and addResponseHandlers.


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
    
    $ak = "{your ak string}";
    $sk = "{your sk string}";
    $endpoint = "{your endpoint}";
    $domainId = "{your domain id}";
    
    $config = HttpConfig::getDefaultConfig();
    $config->setIgnoreSslVerification(true);
    $credentials = new GlobalCredentials($ak,$sk,$domainId);
    
    $iamClient = IamClient::newBuilder(new IamClient)
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
            echo $e->getErrorCode() . "\n";
            echo $e->getErrorMsg() . "\n";
        }
    }
    listPermanentAccessKeys($iamClient);
    ```
    
