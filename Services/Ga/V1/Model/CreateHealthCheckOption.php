<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHealthCheckOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHealthCheckOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpointGroupId  终端节点组ID。
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
            'endpointGroupId' => 'string',
            'protocol' => '\HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol',
            'port' => 'int',
            'interval' => 'int',
            'timeout' => 'int',
            'maxRetries' => 'int',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpointGroupId  终端节点组ID。
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
        'endpointGroupId' => null,
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
    * endpointGroupId  终端节点组ID。
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
            'endpointGroupId' => 'endpoint_group_id',
            'protocol' => 'protocol',
            'port' => 'port',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'maxRetries' => 'max_retries',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpointGroupId  终端节点组ID。
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
            'endpointGroupId' => 'setEndpointGroupId',
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'maxRetries' => 'setMaxRetries',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpointGroupId  终端节点组ID。
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
            'endpointGroupId' => 'getEndpointGroupId',
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
        $this->container['endpointGroupId'] = isset($data['endpointGroupId']) ? $data['endpointGroupId'] : null;
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
        if ($this->container['endpointGroupId'] === null) {
            $invalidProperties[] = "'endpointGroupId' can't be null";
        }
            if ((mb_strlen($this->container['endpointGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['endpointGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['endpointGroupId'])) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
            if (($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
            if (($this->container['interval'] > 60)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 60.";
            }
            if (($this->container['interval'] < 1)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
            }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] > 60)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 60.";
            }
            if (($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
        if ($this->container['maxRetries'] === null) {
            $invalidProperties[] = "'maxRetries' can't be null";
        }
            if (($this->container['maxRetries'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be smaller than or equal to 10.";
            }
            if (($this->container['maxRetries'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be bigger than or equal to 1.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets endpointGroupId
    *  终端节点组ID。
    *
    * @return string
    */
    public function getEndpointGroupId()
    {
        return $this->container['endpointGroupId'];
    }

    /**
    * Sets endpointGroupId
    *
    * @param string $endpointGroupId 终端节点组ID。
    *
    * @return $this
    */
    public function setEndpointGroupId($endpointGroupId)
    {
        $this->container['endpointGroupId'] = $endpointGroupId;
        return $this;
    }

    /**
    * Gets protocol
    *  protocol
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol $protocol protocol
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
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 健康检查的端口。
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
    * @return int
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int $interval 健康检查的时间间隔，单位为秒。
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
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 健康检查的超时时间，单位为秒。建议该值小于interval的值。
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
    * @return int
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int $maxRetries 最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
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
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否开启健康检查。
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

