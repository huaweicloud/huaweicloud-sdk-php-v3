[English](./README.md) | 简体中文

<p align="center">
  <a href="https://www.huaweicloud.com/"><img width="270px" height="90px" src="https://console-static.huaweicloud.com/static/authui/20210202115135/public/custom/images/logo.svg"></a>
</p>

<h1 align="center">华为云开发者 Php 软件开发工具包（Php SDK）</h1>

欢迎使用华为云 Php SDK 。

华为云 Php SDK 让您无需关心请求细节即可快速使用弹性云服务器（ECS）、虚拟私有云（VPC）等多个华为云服务。

这里将向您介绍如何获取并使用华为云 Php SDK 。

## 使用前提

- 要使用华为云 Php SDK，您需要拥有华为云账号以及该账号对应的 Access Key（AK）和 Secret Access Key（SK）。请在华为云控制台 “我的凭证-访问密钥” 页面上创建和查看您的 AK&SK
  。更多信息请查看 [访问密钥](https://support.huaweicloud.com/usermanual-ca/zh-cn_topic_0046606340.html) 。

- 要使用华为云 Php SDK 访问指定服务的 API
  ，您需要确认已在 [华为云控制台](https://console.huaweicloud.com/console/?locale=zh-cn&region=cn-north-4#/home) 开通当前服务。

- 华为云 Php SDK 支持 **PHP 5.6** 及以上版本，可执行 `php --version` 检查当前 Php 的版本信息。

## SDK 获取和安装

推荐使用 [Composer](http://getcomposer.org/) 安装 SDK 。

Composer 是 Php 的依赖管理工具，允许您在项目中声明依赖关系并安装这些依赖：

``` bash
# 安装 Composer
curl -sS https://getcomposer.org/installer | php
# 安装 PHP SDK
composer require huaweicloud/huaweicloud-sdk-php
```

安装完毕后，你需要引入 Composer 的自动加载文件：

``` php
require 'path/to/vendor/autoload.php';
```

## 代码示例

- 使用如下代码同步查询当前账号下已创建的永久 AK 信息，实际使用中请将 `IamClient` 替换为您使用的产品/服务相应的 `{Service}Client` 。
- 认证用的ak和sk硬编码到代码中或者明文存储都有很大的安全风险，建议在配置文件或者环境变量中密文存放，使用时解密，确保安全。
- 本示例中的ak和sk保存在环境变量中，运行本示例前请先配置环境变量`HUAWEICLOUD_SDK_AK`和`HUAWEICLOUD_SDK_SK`。

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

// 请勿将认证信息硬编码到代码中，有安全风险，可通过环境变量等方式配置认证信息
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
        echo $e->getErrorCode(). "\n";
        echo $e->getErrorMsg(). "\n";
    }
}

listPermanentAccessKeys($iamClient);
```

## 变更日志

每个版本的详细更改记录可在 [变更日志](https://github.com/huaweicloud/huaweicloud-sdk-php-v3/blob/master/CHANGELOG_CN.md) 中查看。

## 用户手册 [:top:](#华为云开发者-php-软件开发工具包php-sdk)

* [1. 客户端连接参数](#1-客户端连接参数-top)
    * [1.1 默认配置](#11-默认配置-top)
    * [1.2 网络代理](#12-网络代理-top)
    * [1.3 超时配置](#13-超时配置-top)
    * [1.4 SSL 配置](#14-ssl-配置-top)
* [2. 认证信息配置](#2-认证信息配置-top)
    * [2.1 使用永久 AK 和 SK](#21-使用永久-ak-和-sk-top)
    * [2.2 使用临时 AK 和 SK](#22-使用临时-ak-和-sk-top)
* [3. 客户端初始化](#3-客户端初始化-top)
    * [3.1 指定云服务 Endpoint 方式](#31-指定云服务-endpoint-方式-top)
* [4. 发送请求并查看响应](#4-发送请求并查看响应-top)
    * [4.1 异常处理](#41-异常处理-top)
* [5. 异步客户端使用](#5-异步客户端使用-top)
* [6. 故障处理](#6-故障处理-top)
    * [6.1 访问日志](#61-访问日志-top)
    * [6.2 HTTP 监听器](#62-http-监听器-top)

### 1. 客户端连接参数 [:top:](#用户手册-top)

#### 1.1 默认配置 [:top:](#用户手册-top)

``` php
// 使用默认配置
$config = HttpConfig::getDefaultConfig();
```

#### 1.2 网络代理 [:top:](#用户手册-top)

``` php
// 使用代理服务器（可选）
$config->setProxyProtocol('http');
$config->setProxyHost('proxy.huawei.com');
$config->setProxyPort(8080);
$config->setProxyUser('username');
$config->setProxyPassword('password');
```

#### 1.3 超时配置 [:top:](#用户手册-top)

``` php
// 默认连接超时时间为60秒，读取超时时间为120秒。可根据需要修改默认值。
$config->setTimeout(120);
$config->setConnectionTimeout(60);
```

#### 1.4 SSL 配置 [:top:](#用户手册-top)

``` php
# 配置跳过服务端证书验证（可选）
$config->setIgnoreSslVerification(true);
# 配置服务器端CA证书，用于SDK验证服务端证书合法性
$config->setCertFile("{yourCertFile}");
```

### 2. 认证信息配置 [:top:](#用户手册-top)

华为云服务存在两种部署方式，Region 级服务和 Global 级服务。

Global 级服务当前仅支持 IAM 。

Region 级服务需要提供 projectId 。

Global 级服务需要提供 domainId 。

**认证参数说明**：

- `ak` - 华为云账号 Access Key
- `sk` - 华为云账号 Secret Access Key
- `projectId` - 云服务所在项目 ID ，根据你想操作的项目所属区域选择对应的项目 ID
- `domainId` - 华为云账号 ID
- `securityToken` - 采用临时 AK&SK 认证场景下的安全票据

客户端认证可以使用永久 AK&SK 认证，也可以使用临时 AK&SK&SecurityToken 认证。

#### 2.1 使用永久 AK 和 SK [:top:](#用户手册-top)

``` php
// Region级服务
$basicCredentials = new BasicCredentials($ak,$sk,$projectId);
    
// Global级服务
$globalCredentials = new GlobalCredentials($ak,$sk,$domainId);
```

#### 2.2 使用临时 AK 和 SK [:top:](#用户手册-top)

首先需要获得临时 AK、SK 和 SecurityToken ，可以从永久 AK&SK 获得，或者通过委托授权获得。

- 通过永久 AK&SK 获得可以参考文档：https://support.huaweicloud.com/api-iam/iam_04_0002.html ，对应 IAM SDK
  中的 `CreateTemporaryAccessKeyByToken` 方法。

- 通过委托授权获得可以参考文档：https://support.huaweicloud.com/api-iam/iam_04_0101.html ，对应 IAM SDK
  中的 `CreateTemporaryAccessKeyByAgency` 方法。

临时 AK&SK&SecurityToken 获取成功后，可使用如下方式初始化认证信息：

``` php
// Region级服务
$basicCredentials = BasicCredentials(ak, sk, projectId).withSecurityToken(securityToken);
// Global级服务
$globalCredentials = GlobalCredentials(ak, sk, domainId).withSecurityToken(securityToken);
```

### 3. 客户端初始化 [:top:](#用户手册-top)

#### 3.1 指定云服务 Endpoint 方式 [:top:](#用户手册-top)

``` php
# 初始化指定云服务的客户端 {Service}Client ，以初始化 IamClient 为例
$iamClient = IamClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($globalCredentials)
    ->build();
```

**说明：**

- `endpoint` 是华为云各服务应用区域和各服务的终端节点，详情请查看 [地区和终端节点](https://developer.huaweicloud.com/endpoint) 。

### 4. 发送请求并查看响应 [:top:](#用户手册-top)

``` php
// 初始化请求，以调用接口 ListPermanentAccessKeys 为例
$request = new ListPermanentAccessKeysRequest(array(userId=>"{your user id}"));
$response = $iamClient->listPermanentAccessKeys($request);
echo response;
```

#### 4.1 异常处理 [:top:](#用户手册-top)

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
    echo $e->getRequestId(). "\n";
    echo $e->getErrorCode() . "\n";
    echo $e->getErrorMsg() . "\n";
}
```

### 5. 异步客户端使用 [:top:](#用户手册-top)

``` php
// 初始化异步客户端，以初始化 IamAsyncClient 为例
$iamClient = IamAsyncClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($globalCredentials)
    ->build();

// 发送异步请求
$request = new ShowPermanentAccessKeyRequest(array('accessKey' => "{your access key}"));
$promise = $iamClient->showPermanentAccessKeyAsync($request);

// 获取异步请求结果
$response = $promise->wait();
```

### 6. 故障处理 [:top:](#用户手册-top)

SDK 提供 Access 级别的访问日志及 Debug 级别的原始 HTTP 监听器日志，用户可根据需要进行配置。

#### 6.1 访问日志 [:top:](#用户手册-top)

SDK 支持打印 Access 级别的访问日志，需要用户手动打开日志开关，支持打印到控制台或者指定的文件。示例如下：

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

**说明**：

- `withFileLogger` 支持如下配置：
    - `$logPath`：日志文件路径
    - `$logLevel`：日志级别，默认INFO
    - `$logMaxFiles`：日志文件个数，默认为5个
- `withStreamLogger` 支持如下配置：
    - `$stream`：流对象，默认 'php://stdout'
    - `$logLevel`：日志级别，默认INFO

打开日志开关后，每次请求都会有一条记录，如：

``` text
[2020-10-16 03:10:29][INFO] "GET https://iam.cn-north-1.myhuaweicloud.com/v3.0/OS-CREDENTIAL/credentials/W8VHHFEFPIJV6TFOUOQO"  200 244 7a68399eb8ed63fc91018426a7c4b8a0
```

日志格式为：

``` text
"{httpMethod} {uri}" {httpStatusCode} {responseContentLength} {requestId}
```

#### 6.2 HTTP 监听器 [:top:](#用户手册-top)

在某些场景下可能对业务发出的 HTTP 请求进行 Debug ，需要看到原始的 HTTP 请求和返回信息， SDK 提供监听器功能来获取原始的为加密的 HTTP 请求和返回信息。

> :warning:  Warning: 原始信息打印仅在 Debug 阶段使用，请不要在生产系统中将原始的 HTTP 头和 Body 信息打印到日志，这些信息并未加密且其中包含敏感数据，例如所创建虚拟机的密码，IAM 用户的密码等；当 Body 体为二进制内容，即 Content-Type 标识为二进制时，Body 为"***"，详细内容不输出。

``` php
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

HttpHandler 支持如下方法 `addRequestHandlers`、 `addResponseHandlers` 。
