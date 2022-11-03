<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHealthCheckOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHealthCheckOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  protocol
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * enabled  是否开启健康检查。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => '\HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol',
            'port' => 'int',
            'interval' => 'int',
            'timeout' => 'int',
            'maxRetries' => 'int',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  protocol
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * enabled  是否开启健康检查。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'port' => 'int32',
        'interval' => 'int32',
        'timeout' => 'int32',
        'maxRetries' => 'int32',
        'enabled' => null
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
    * protocol  protocol
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * enabled  是否开启健康检查。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'port' => 'port',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'maxRetries' => 'max_retries',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  protocol
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * enabled  是否开启健康检查。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'maxRetries' => 'setMaxRetries',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  protocol
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * enabled  是否开启健康检查。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'maxRetries' => 'getMaxRetries',
            'enabled' => 'getEnabled'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 60)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 1)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 60)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxRetries']) && ($this->container['maxRetries'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['maxRetries']) && ($this->container['maxRetries'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be bigger than or equal to 1.";
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
    *  protocol
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol|null $protocol protocol
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets port
    *  健康检查的端口。
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
    * @param int|null $port 健康检查的端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets interval
    *  健康检查的时间间隔，单位为秒。
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 健康检查的时间间隔，单位为秒。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets timeout
    *  健康检查的超时时间，单位为秒。建议该值小于interval的值。
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
    * @param int|null $timeout 健康检查的超时时间，单位为秒。建议该值小于interval的值。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets maxRetries
    *  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    *
    * @return int|null
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int|null $maxRetries 最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启健康检查。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否开启健康检查。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

