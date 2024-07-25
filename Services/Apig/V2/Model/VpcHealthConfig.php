<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcHealthConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcHealthConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    * path  健康检查时的目标路径。protocol = http或https时必选
    * method  健康检查时的请求方法
    * port  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    * thresholdNormal  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    * thresholdAbnormal  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    * timeInterval  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    * httpCode  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    * enableClientSsl  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    * status  健康检查状态   - 1：可用   - 2：不可用
    * timeout  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'path' => 'string',
            'method' => 'string',
            'port' => 'int',
            'thresholdNormal' => 'int',
            'thresholdAbnormal' => 'int',
            'timeInterval' => 'int',
            'httpCode' => 'string',
            'enableClientSsl' => 'bool',
            'status' => 'int',
            'timeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    * path  健康检查时的目标路径。protocol = http或https时必选
    * method  健康检查时的请求方法
    * port  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    * thresholdNormal  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    * thresholdAbnormal  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    * timeInterval  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    * httpCode  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    * enableClientSsl  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    * status  健康检查状态   - 1：可用   - 2：不可用
    * timeout  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'path' => null,
        'method' => null,
        'port' => 'int32',
        'thresholdNormal' => 'int32',
        'thresholdAbnormal' => 'int32',
        'timeInterval' => 'int32',
        'httpCode' => null,
        'enableClientSsl' => null,
        'status' => 'int32',
        'timeout' => 'int32'
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
    * protocol  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    * path  健康检查时的目标路径。protocol = http或https时必选
    * method  健康检查时的请求方法
    * port  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    * thresholdNormal  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    * thresholdAbnormal  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    * timeInterval  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    * httpCode  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    * enableClientSsl  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    * status  健康检查状态   - 1：可用   - 2：不可用
    * timeout  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'path' => 'path',
            'method' => 'method',
            'port' => 'port',
            'thresholdNormal' => 'threshold_normal',
            'thresholdAbnormal' => 'threshold_abnormal',
            'timeInterval' => 'time_interval',
            'httpCode' => 'http_code',
            'enableClientSsl' => 'enable_client_ssl',
            'status' => 'status',
            'timeout' => 'timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    * path  健康检查时的目标路径。protocol = http或https时必选
    * method  健康检查时的请求方法
    * port  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    * thresholdNormal  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    * thresholdAbnormal  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    * timeInterval  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    * httpCode  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    * enableClientSsl  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    * status  健康检查状态   - 1：可用   - 2：不可用
    * timeout  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'path' => 'setPath',
            'method' => 'setMethod',
            'port' => 'setPort',
            'thresholdNormal' => 'setThresholdNormal',
            'thresholdAbnormal' => 'setThresholdAbnormal',
            'timeInterval' => 'setTimeInterval',
            'httpCode' => 'setHttpCode',
            'enableClientSsl' => 'setEnableClientSsl',
            'status' => 'setStatus',
            'timeout' => 'setTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    * path  健康检查时的目标路径。protocol = http或https时必选
    * method  健康检查时的请求方法
    * port  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    * thresholdNormal  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    * thresholdAbnormal  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    * timeInterval  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    * httpCode  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    * enableClientSsl  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    * status  健康检查状态   - 1：可用   - 2：不可用
    * timeout  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'path' => 'getPath',
            'method' => 'getMethod',
            'port' => 'getPort',
            'thresholdNormal' => 'getThresholdNormal',
            'thresholdAbnormal' => 'getThresholdAbnormal',
            'timeInterval' => 'getTimeInterval',
            'httpCode' => 'getHttpCode',
            'enableClientSsl' => 'getEnableClientSsl',
            'status' => 'getStatus',
            'timeout' => 'getTimeout'
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
    const PROTOCOL_TCP = 'TCP';
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const METHOD_GET = 'GET';
    const METHOD_HEAD = 'HEAD';
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_GET,
            self::METHOD_HEAD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
        ];
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['thresholdNormal'] = isset($data['thresholdNormal']) ? $data['thresholdNormal'] : null;
        $this->container['thresholdAbnormal'] = isset($data['thresholdAbnormal']) ? $data['thresholdAbnormal'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['httpCode'] = isset($data['httpCode']) ? $data['httpCode'] : null;
        $this->container['enableClientSsl'] = isset($data['enableClientSsl']) ? $data['enableClientSsl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMethodAllowableValues();
                if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
        if ($this->container['thresholdNormal'] === null) {
            $invalidProperties[] = "'thresholdNormal' can't be null";
        }
            if (($this->container['thresholdNormal'] > 10)) {
                $invalidProperties[] = "invalid value for 'thresholdNormal', must be smaller than or equal to 10.";
            }
            if (($this->container['thresholdNormal'] < 1)) {
                $invalidProperties[] = "invalid value for 'thresholdNormal', must be bigger than or equal to 1.";
            }
        if ($this->container['thresholdAbnormal'] === null) {
            $invalidProperties[] = "'thresholdAbnormal' can't be null";
        }
            if (($this->container['thresholdAbnormal'] > 10)) {
                $invalidProperties[] = "invalid value for 'thresholdAbnormal', must be smaller than or equal to 10.";
            }
            if (($this->container['thresholdAbnormal'] < 1)) {
                $invalidProperties[] = "invalid value for 'thresholdAbnormal', must be bigger than or equal to 1.";
            }
        if ($this->container['timeInterval'] === null) {
            $invalidProperties[] = "'timeInterval' can't be null";
        }
            if (($this->container['timeInterval'] > 300)) {
                $invalidProperties[] = "invalid value for 'timeInterval', must be smaller than or equal to 300.";
            }
            if (($this->container['timeInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeInterval', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 30)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
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
    * Gets protocol
    *  使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 使用以下协议，对VPC中主机执行健康检查： - TCP - HTTP - HTTPS
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets path
    *  健康检查时的目标路径。protocol = http或https时必选
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 健康检查时的目标路径。protocol = http或https时必选
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets method
    *  健康检查时的请求方法
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 健康检查时的请求方法
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets port
    *  健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 健康检查的目标端口，缺少或port = 0时为VPC中主机的端口号。  如果此端口存在非0值，则使用此端口进行健康检查。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets thresholdNormal
    *  正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    *
    * @return int
    */
    public function getThresholdNormal()
    {
        return $this->container['thresholdNormal'];
    }

    /**
    * Sets thresholdNormal
    *
    * @param int $thresholdNormal 正常阈值。判定VPC通道中主机正常的依据为：连续检查x成功，x为您设置的正常阈值。
    *
    * @return $this
    */
    public function setThresholdNormal($thresholdNormal)
    {
        $this->container['thresholdNormal'] = $thresholdNormal;
        return $this;
    }

    /**
    * Gets thresholdAbnormal
    *  异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    *
    * @return int
    */
    public function getThresholdAbnormal()
    {
        return $this->container['thresholdAbnormal'];
    }

    /**
    * Sets thresholdAbnormal
    *
    * @param int $thresholdAbnormal 异常阈值。判定VPC通道中主机异常的依据为：连续检查x失败，x为您设置的异常阈值。
    *
    * @return $this
    */
    public function setThresholdAbnormal($thresholdAbnormal)
    {
        $this->container['thresholdAbnormal'] = $thresholdAbnormal;
        return $this;
    }

    /**
    * Gets timeInterval
    *  间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    *
    * @return int
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int $timeInterval 间隔时间：连续两次检查的间隔时间，单位为秒。必须大于timeout字段取值。
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets httpCode
    *  检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    *
    * @return string|null
    */
    public function getHttpCode()
    {
        return $this->container['httpCode'];
    }

    /**
    * Sets httpCode
    *
    * @param string|null $httpCode 检查目标HTTP响应时，判断成功使用的HTTP响应码。取值范围为100到599之前的任意整数值，支持如下三种格式： - 多个值，如：200,201,202 - 一系列值，如：200-299 - 组合值，如：201,202,210-299 protocol = http时必选
    *
    * @return $this
    */
    public function setHttpCode($httpCode)
    {
        $this->container['httpCode'] = $httpCode;
        return $this;
    }

    /**
    * Gets enableClientSsl
    *  是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    *
    * @return bool|null
    */
    public function getEnableClientSsl()
    {
        return $this->container['enableClientSsl'];
    }

    /**
    * Sets enableClientSsl
    *
    * @param bool|null $enableClientSsl 是否开启双向认证。如果开启，则使用实例配置中的backend_client_certificate配置项的证书
    *
    * @return $this
    */
    public function setEnableClientSsl($enableClientSsl)
    {
        $this->container['enableClientSsl'] = $enableClientSsl;
        return $this;
    }

    /**
    * Gets status
    *  健康检查状态   - 1：可用   - 2：不可用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 健康检查状态   - 1：可用   - 2：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 超时时间：检查期间，无响应的时间，单位为秒。必须小于time_interval字段取值。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
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

