<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberHealthCheckFailedReason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberHealthCheckFailedReason';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reasonCode  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    * expectedResponse  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    * healthcheckResponse  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reasonCode' => 'string',
            'expectedResponse' => 'string',
            'healthcheckResponse' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reasonCode  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    * expectedResponse  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    * healthcheckResponse  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reasonCode' => null,
        'expectedResponse' => null,
        'healthcheckResponse' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * reasonCode  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    * expectedResponse  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    * healthcheckResponse  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reasonCode' => 'reason_code',
            'expectedResponse' => 'expected_response',
            'healthcheckResponse' => 'healthcheck_response'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reasonCode  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    * expectedResponse  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    * healthcheckResponse  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'reasonCode' => 'setReasonCode',
            'expectedResponse' => 'setExpectedResponse',
            'healthcheckResponse' => 'setHealthcheckResponse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reasonCode  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    * expectedResponse  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    * healthcheckResponse  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'reasonCode' => 'getReasonCode',
            'expectedResponse' => 'getExpectedResponse',
            'healthcheckResponse' => 'getHealthcheckResponse'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['expectedResponse'] = isset($data['expectedResponse']) ? $data['expectedResponse'] : null;
        $this->container['healthcheckResponse'] = isset($data['healthcheckResponse']) ? $data['healthcheckResponse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reasonCode'] === null) {
            $invalidProperties[] = "'reasonCode' can't be null";
        }
        if ($this->container['expectedResponse'] === null) {
            $invalidProperties[] = "'expectedResponse' can't be null";
        }
        if ($this->container['healthcheckResponse'] === null) {
            $invalidProperties[] = "'healthcheckResponse' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets reasonCode
    *  参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    *
    * @return string
    */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
    * Sets reasonCode
    *
    * @param string $reasonCode 参数解释：健康检查异常原因码。 取值范围： - CONNECT_TIMEOUT: 负载均衡健康检查时向后端服务器建立连接超时。 - CONNECT_REFUSED: 负载均衡健康检查时向后端服务器拒绝连接。 - CONNECT_FAILED: 负载均衡健康检查时向后端服务器建立连接失败。 - CONNECT_INTERRUPT: 负载均衡健康检查与后端服务器连接中断。 - SSL_HANDSHAKE_ERROR: 负载均衡健康检查时与后端服务器SSL握手失败。 - RECV_RESPONSE_FAILED: 负载均衡健康检查时从后端服务器接收响应失败。 - RECV_RESPONSE_TIMEOUT: 负载均衡健康检查时从后端服务器接收响应超时。 - SEND_REQUEST_FAILED: 负载均衡健康检查时向后端服务器发送请求失败。 - SEND_REQUEST_TIMEOUT: 负载均衡健康检查时向后端服务器发送请求超时。 - RESPONSE_FORMAT_ERROR: 负载均衡健康检查时从后端服务器接收响应格式错误。 - RESPONSE_MISMATCH: 负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。
    *
    * @return $this
    */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;
        return $this;
    }

    /**
    * Gets expectedResponse
    *  参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    *
    * @return string
    */
    public function getExpectedResponse()
    {
        return $this->container['expectedResponse'];
    }

    /**
    * Sets expectedResponse
    *
    * @param string $expectedResponse 参数解释：健康检查预期响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单值：单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议是，取值范围为200-599。例如：\"0\"或\"200\"。 - 列表：多个特定返回码，逗号分隔，最多支持5个返回码。例如:\"200,202\"或\"0,1\"。 - 区间：一个返回码区间，区间内\"-\"分隔，区间之间逗号分隔，最多支持5个区间。例如\"200-204,300-399\"或\"0-5,10-12,20-30\"。
    *
    * @return $this
    */
    public function setExpectedResponse($expectedResponse)
    {
        $this->container['expectedResponse'] = $expectedResponse;
        return $this;
    }

    /**
    * Gets healthcheckResponse
    *  参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @return string
    */
    public function getHealthcheckResponse()
    {
        return $this->container['healthcheckResponse'];
    }

    /**
    * Sets healthcheckResponse
    *
    * @param string $healthcheckResponse 参数解释：健康检查探测实际响应状态码。 支持HTTP,HTTPS,GRPC健康检查。 只有reason_code为RESPONSE_MISMATCH时，支持非null取值。  取值范围： - 单个返回码。当type为GRPC时，取值范围为0-99；当type为其他协议时，取值范围为200-599。例如：\"0\"或\"200\"。
    *
    * @return $this
    */
    public function setHealthcheckResponse($healthcheckResponse)
    {
        $this->container['healthcheckResponse'] = $healthcheckResponse;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

