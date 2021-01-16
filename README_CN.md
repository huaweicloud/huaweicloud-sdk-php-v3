[English](./README.md) | 简体中文


# 华为云开发者 PHP 软件开发工具包 （PHP SDK）

欢迎使用华为云 PHP SDK。

华为云 PHP SDK让您无需关心请求细节即可快速使用云服务器、虚拟私有云等多个华为云服务。

这里将向您介绍如何获取并使用华为云 PHP SDK。

## 在线示例

[API Explorer](https://apiexplorer.developer.huaweicloud.com/apiexplorer/overview) 提供API检索及平台调试，支持全量快速检索、可视化调试、帮助文档查看、在线咨询。

## 现在开始

- 要使用华为云 PHP SDK，您需要拥有云账号以及该账号对应的 Access Key（AK）和 Secret Access Key（SK）。 请在华为云控制台“我的凭证-访问密钥”页面上创建和查看您的 AK SK 。更多信息请查看[访问密钥](https://support.huaweicloud.com/usermanual-ca/zh-cn_topic_0046606340.html)。

- 华为云 PHP SDK 支持 PHP5.6 及以上版本。

## SDK 获取和安装

华为云 PHP SDK 支持 PHP5.6 及以上版本。执行 ``PHP --version`` 检查当前PHP的版本信息。

- 使用 composer 从仓库安装

    强烈推荐使用 [Composer](http://getcomposer.org/) 安装SDK ，Composer是PHP的依赖管理工具，允许你在项目中声明依赖关系，并安装这些依赖：

    ``` powershell
    # 安装 Composer
    curl -sS https://getcomposer.org/installer | php
    # 安装 PHP SDK
    composer require huaweicloud/huaweicloud-sdk-php:3.0.3-beta
    ```

    安装完毕后，你需要引入Composer的自动加载文件：

    ``` php
    require 'path/to/vendor/autoload.php';
    ```

## 开始使用

1. 导入依赖模块:

    ``` php
    use HuaweiCloud\SDK\Core\Auth\GlobalCredentials;
    use HuaweiCloud\SDK\Core\Http\HttpConfig;
    use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
    use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
    use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
    use HuaweiCloud\SDK\Iam\V3\IamClient;
    use HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysRequest;
    use Monolog\Logger;
    ```

2. 配置客户端属性

    2.1 默认配置

    ``` php
    # 使用默认配置
    $config = HttpConfig::getDefaultConfig();
    ```

    2.2 代理配置(可选)

    ``` PHP
    # 使用代理服务器（可选）
    $config->setProxyProtocol('http');
    $config->setProxyHost('proxy.huawei.com');
    $config->setProxyPort(8080);
    $config->setProxyUser('username');
    $config->setProxyPassword('password');
    ```

    2.3 连接配置(可选)

    ``` php
    # 配置连接超时（可选），支持统一指定超时时长timeout=timeout，或分别指定超时时长timeout=(connect timeout, read timeout)
    $config->setTimeout(3);
    ```

    2.4 SSL配置(可选)

    ``` php
    # 配置跳过服务端证书验证（可选）
    $config->setIgnoreSslVerification(true);
    # 配置服务器端CA证书，用于SDK验证服务端证书合法性
    $config->setCertFile("{yourCertFile}");
    ```

3. 初始化认证信息

    **说明**：
    华为云服务存在两种部署方式，Region级服务和Global级服务。Global级服务当前仅支持IAM。

    Region级服务仅需要提供 projectId。Global级服务需要提供domainId。

    - `ak` 华为云账号 Access Key 。
    - `sk` 华为云账号 Secret Access Key 。
    - `project_id` 云服务所在项目 ID ，根据你想操作的项目所属区域选择对应的项目 ID 。
    - `domain_id` 华为云账号ID 。
    - `security_token` 采用临时AK/SK认证场景下的安全票据。

    3.1 使用永久AK/SK

    ``` php
    # Region级服务
    $credentials = new BasicCredentials($ak,$sk,$projectId);
       
    # Global级服务
    $credentials = new GlobalCredentials($ak,$sk,$domainId);
    ```

    3.2 使用临时AK/SK

    首选需要获得临时AK、SK和SecurityToken，获取可以从永久AK/SK获得，或者通过委托授权首选获得。

    通过永久AK/SK获得可以参考文档：https://support.huaweicloud.com/api-iam/iam_04_0002.html, 对应IAM SDK 中的createTemporaryAccessKeyByToken方法。

    通过委托授权获得可以参考文档：https://support.huaweicloud.com/api-iam/iam_04_0101.html, 对应IAM SDK 中的createTemporaryAccessKeyByAgency方法。

    ``` php
    # Region级服务
    $credentials = BasicCredentials(ak, sk, projectId).withSecurityToken(securityToken);
    # Global级服务
    $credentials = GlobalCredentials(ak, sk, domainId).withSecurityToken(securityToken);
    ```

4. 初始化客户端:

    ``` php
    # 初始化指定云服务的客户端 {Service}Client ，以初始化 IamClient 为例
    $iamClient = IamClient::newBuilder()
        ->withHttpConfig($config)
        ->withEndpoint($endpoint)
        ->withCredentials(null)
        ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO) // 日志打印至控制台
        ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO) // 日志打印至文件
        ->build();
    ```

    **说明:**

    - `$endpoint` 华为云各服务应用区域和各服务的终端节点，详情请查看[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    - `withFileLogger`支持如下配置：
      - `$logPath`: 日志文件路径。
      - `$logLevel`: 日志级别，默认INFO。
      - `$logMaxFiles`: 日志文件个数，默认为5个。
    - `withStreamLogger`支持如下配置：
      - `$stream`: 流对象，默认 'php://stdout'。
      - `$logLevel`: 日志级别，默认INFO。

    打开日志开关后，每次请求将打印访问日志，格式如下：`"{httpMethod} {uri}" {httpStatusCode} {responseContentLength} {requestId}`

    ``` shell
    [2020-10-16 03:10:29][INFO] "GET https://iam.cn-north-1.myhuaweicloud.com/v3.0/OS-CREDENTIAL/credentials/W8VHHFEFPIJV6TFOUOQO"  200 244 7a68399eb8ed63fc91018426a7c4b8a0
    ```

5. 发送请求并查看响应.

    ``` php
    # 初始化请求，以调用接口 listPermanentAccessKeys 为例
    $request = new ListPermanentAccessKeysRequest(array(userId=>"{your user id}"));
    $response = $iamClient->listPermanentAccessKeys($request);
    echo response;
    ```

6. 异常处理

    | 一级分类 | 一级分类说明 | 二级分类 | 二级分类说明 |
    | :---- | :---- | :---- | :---- |
    | ConnectionException | 连接类异常 | HostUnreachableException | 网络不可达、被拒绝 |
    | | | SslHandShakeException | SSL认证异常 |
    | RequestTimeoutException | 响应超时异常 | CallTimeoutException | 单次请求，服务器处理超时未返回 |
    | | | RetryOutageException | 在重试策略消耗完成已后，仍无有效的响应 |
    | ServiceResponseException | 服务器响应异常 | ServerResponseException | 服务端内部错误，Http响应码：[500,] |
    | | | ClientRequestException | 请求参数不合法，Http响应码：[400， 500) |

    ``` php
    # 异常处理
    try {
        $request = new ListPermanentAccessKeysRequest(array(userId=>"{your userId}"));
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

7. 异步场景

    ``` php
    # 初始化异步客户端，以初始化 IamAsyncClient 为例
    $iamClient = IamAsyncClient::newBuilder(new IamAsyncClient)
        ->withHttpConfig($config)
        ->withEndpoint($endpoint)
        ->withCredentials($credentials)
        ->build();
    
    # 发送异步请求
    $request = new ShowPermanentAccessKeyRequest(array('accessKey' => "{your access key}"));
    $promise = $iamClient->showPermanentAccessKeyAsync($request);
    
    # 获取异步请求结果
    $response = $promise->wait();
    ```

8. 问题定位

    在某些场景下可能对业务发出的Http请求进行Debug，需要看到原始的Http请求和返回信息，SDK提供侦听器功能来获取原始的为加密的Http请求和返回信息。

    **注意：** 原始信息打印仅在debug阶段使用，请不要在生产系统中将原始的Http头和Body信息打印到日志，这些信息并未加密且其中包含敏感数据，例如所创建虚拟机的密码，IAM用户的密码等;
    当Body体为二进制内容,即Content-Type标识为二进制时 body为"***",详细内容不输出。

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
        ->withStreamLogger($stream = 'php://stdout',$logLevel =Logger::INFO) // 日志打印至控制台
        ->withFileLogger($logPath='./test_log.txt', $logLevel = Logger::INFO) // 日志打印至文件
        ->withHttpHandler($httpHandler)
        ->build();
    ```

       **说明:**

    HttpHandler 支持如下方法 addRequestHandlers 、 addResponseHandlers 。

## 代码实例

- 使用如下代码完成Credential管理中的增删改查接口，实际使用中请将 `IamClient` 替换为您使用的产品/服务相应的 `{Service}Client`。
- 调用前请根据实际情况替换如下变量：`{your ak string}`、 `{your sk string}`、 `{your endpoint}` 以及 `{your domain id}`。

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
            echo $e->getErrorCode() . "\n";
            echo $e->getErrorMsg() . "\n";
        }
    }
    listPermanentAccessKeys($iamClient);
    ```



