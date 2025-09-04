<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProbeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProbeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * execCommand  执行探测的命令行命令
    * tcpSocket  tcpSocket
    * httpGet  httpGet
    * initialDelaySeconds  表示从工作负载启动后从多久开始探测
    * timeoutSeconds  表示探测超时时间
    * periodSeconds  检查周期
    * failureThreshold  失败多少次算不健康
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'execCommand' => 'string',
            'tcpSocket' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\TcpSocketDTO',
            'httpGet' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\HttpGetDTO',
            'initialDelaySeconds' => 'int',
            'timeoutSeconds' => 'int',
            'periodSeconds' => 'int',
            'failureThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * execCommand  执行探测的命令行命令
    * tcpSocket  tcpSocket
    * httpGet  httpGet
    * initialDelaySeconds  表示从工作负载启动后从多久开始探测
    * timeoutSeconds  表示探测超时时间
    * periodSeconds  检查周期
    * failureThreshold  失败多少次算不健康
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'execCommand' => null,
        'tcpSocket' => null,
        'httpGet' => null,
        'initialDelaySeconds' => 'int32',
        'timeoutSeconds' => 'int32',
        'periodSeconds' => 'int32',
        'failureThreshold' => 'int32'
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
    * execCommand  执行探测的命令行命令
    * tcpSocket  tcpSocket
    * httpGet  httpGet
    * initialDelaySeconds  表示从工作负载启动后从多久开始探测
    * timeoutSeconds  表示探测超时时间
    * periodSeconds  检查周期
    * failureThreshold  失败多少次算不健康
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'execCommand' => 'exec_command',
            'tcpSocket' => 'tcp_socket',
            'httpGet' => 'http_get',
            'initialDelaySeconds' => 'initial_delay_seconds',
            'timeoutSeconds' => 'timeout_seconds',
            'periodSeconds' => 'period_seconds',
            'failureThreshold' => 'failure_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * execCommand  执行探测的命令行命令
    * tcpSocket  tcpSocket
    * httpGet  httpGet
    * initialDelaySeconds  表示从工作负载启动后从多久开始探测
    * timeoutSeconds  表示探测超时时间
    * periodSeconds  检查周期
    * failureThreshold  失败多少次算不健康
    *
    * @var string[]
    */
    protected static $setters = [
            'execCommand' => 'setExecCommand',
            'tcpSocket' => 'setTcpSocket',
            'httpGet' => 'setHttpGet',
            'initialDelaySeconds' => 'setInitialDelaySeconds',
            'timeoutSeconds' => 'setTimeoutSeconds',
            'periodSeconds' => 'setPeriodSeconds',
            'failureThreshold' => 'setFailureThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * execCommand  执行探测的命令行命令
    * tcpSocket  tcpSocket
    * httpGet  httpGet
    * initialDelaySeconds  表示从工作负载启动后从多久开始探测
    * timeoutSeconds  表示探测超时时间
    * periodSeconds  检查周期
    * failureThreshold  失败多少次算不健康
    *
    * @var string[]
    */
    protected static $getters = [
            'execCommand' => 'getExecCommand',
            'tcpSocket' => 'getTcpSocket',
            'httpGet' => 'getHttpGet',
            'initialDelaySeconds' => 'getInitialDelaySeconds',
            'timeoutSeconds' => 'getTimeoutSeconds',
            'periodSeconds' => 'getPeriodSeconds',
            'failureThreshold' => 'getFailureThreshold'
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
        $this->container['execCommand'] = isset($data['execCommand']) ? $data['execCommand'] : null;
        $this->container['tcpSocket'] = isset($data['tcpSocket']) ? $data['tcpSocket'] : null;
        $this->container['httpGet'] = isset($data['httpGet']) ? $data['httpGet'] : null;
        $this->container['initialDelaySeconds'] = isset($data['initialDelaySeconds']) ? $data['initialDelaySeconds'] : null;
        $this->container['timeoutSeconds'] = isset($data['timeoutSeconds']) ? $data['timeoutSeconds'] : null;
        $this->container['periodSeconds'] = isset($data['periodSeconds']) ? $data['periodSeconds'] : null;
        $this->container['failureThreshold'] = isset($data['failureThreshold']) ? $data['failureThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['execCommand']) && (mb_strlen($this->container['execCommand']) > 256)) {
                $invalidProperties[] = "invalid value for 'execCommand', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['execCommand']) && (mb_strlen($this->container['execCommand']) < 0)) {
                $invalidProperties[] = "invalid value for 'execCommand', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['execCommand']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\/\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['execCommand'])) {
                $invalidProperties[] = "invalid value for 'execCommand', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\/\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['initialDelaySeconds'] === null) {
            $invalidProperties[] = "'initialDelaySeconds' can't be null";
        }
            if (($this->container['initialDelaySeconds'] > 3600)) {
                $invalidProperties[] = "invalid value for 'initialDelaySeconds', must be smaller than or equal to 3600.";
            }
            if (($this->container['initialDelaySeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'initialDelaySeconds', must be bigger than or equal to 0.";
            }
        if ($this->container['timeoutSeconds'] === null) {
            $invalidProperties[] = "'timeoutSeconds' can't be null";
        }
            if (($this->container['timeoutSeconds'] > 3600)) {
                $invalidProperties[] = "invalid value for 'timeoutSeconds', must be smaller than or equal to 3600.";
            }
            if (($this->container['timeoutSeconds'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeoutSeconds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['periodSeconds']) && ($this->container['periodSeconds'] > 3600)) {
                $invalidProperties[] = "invalid value for 'periodSeconds', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['periodSeconds']) && ($this->container['periodSeconds'] < 5)) {
                $invalidProperties[] = "invalid value for 'periodSeconds', must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['failureThreshold']) && ($this->container['failureThreshold'] > 3600)) {
                $invalidProperties[] = "invalid value for 'failureThreshold', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['failureThreshold']) && ($this->container['failureThreshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'failureThreshold', must be bigger than or equal to 1.";
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
    * Gets execCommand
    *  执行探测的命令行命令
    *
    * @return string|null
    */
    public function getExecCommand()
    {
        return $this->container['execCommand'];
    }

    /**
    * Sets execCommand
    *
    * @param string|null $execCommand 执行探测的命令行命令
    *
    * @return $this
    */
    public function setExecCommand($execCommand)
    {
        $this->container['execCommand'] = $execCommand;
        return $this;
    }

    /**
    * Gets tcpSocket
    *  tcpSocket
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\TcpSocketDTO|null
    */
    public function getTcpSocket()
    {
        return $this->container['tcpSocket'];
    }

    /**
    * Sets tcpSocket
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\TcpSocketDTO|null $tcpSocket tcpSocket
    *
    * @return $this
    */
    public function setTcpSocket($tcpSocket)
    {
        $this->container['tcpSocket'] = $tcpSocket;
        return $this;
    }

    /**
    * Gets httpGet
    *  httpGet
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\HttpGetDTO|null
    */
    public function getHttpGet()
    {
        return $this->container['httpGet'];
    }

    /**
    * Sets httpGet
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\HttpGetDTO|null $httpGet httpGet
    *
    * @return $this
    */
    public function setHttpGet($httpGet)
    {
        $this->container['httpGet'] = $httpGet;
        return $this;
    }

    /**
    * Gets initialDelaySeconds
    *  表示从工作负载启动后从多久开始探测
    *
    * @return int
    */
    public function getInitialDelaySeconds()
    {
        return $this->container['initialDelaySeconds'];
    }

    /**
    * Sets initialDelaySeconds
    *
    * @param int $initialDelaySeconds 表示从工作负载启动后从多久开始探测
    *
    * @return $this
    */
    public function setInitialDelaySeconds($initialDelaySeconds)
    {
        $this->container['initialDelaySeconds'] = $initialDelaySeconds;
        return $this;
    }

    /**
    * Gets timeoutSeconds
    *  表示探测超时时间
    *
    * @return int
    */
    public function getTimeoutSeconds()
    {
        return $this->container['timeoutSeconds'];
    }

    /**
    * Sets timeoutSeconds
    *
    * @param int $timeoutSeconds 表示探测超时时间
    *
    * @return $this
    */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->container['timeoutSeconds'] = $timeoutSeconds;
        return $this;
    }

    /**
    * Gets periodSeconds
    *  检查周期
    *
    * @return int|null
    */
    public function getPeriodSeconds()
    {
        return $this->container['periodSeconds'];
    }

    /**
    * Sets periodSeconds
    *
    * @param int|null $periodSeconds 检查周期
    *
    * @return $this
    */
    public function setPeriodSeconds($periodSeconds)
    {
        $this->container['periodSeconds'] = $periodSeconds;
        return $this;
    }

    /**
    * Gets failureThreshold
    *  失败多少次算不健康
    *
    * @return int|null
    */
    public function getFailureThreshold()
    {
        return $this->container['failureThreshold'];
    }

    /**
    * Sets failureThreshold
    *
    * @param int|null $failureThreshold 失败多少次算不健康
    *
    * @return $this
    */
    public function setFailureThreshold($failureThreshold)
    {
        $this->container['failureThreshold'] = $failureThreshold;
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

