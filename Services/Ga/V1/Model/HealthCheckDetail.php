<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthCheckDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthCheckDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  健康检查ID。
    * endpointGroupId  终端节点组ID。
    * protocol  protocol
    * status  status
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enabled  是否开启健康检查。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'endpointGroupId' => 'string',
            'protocol' => '\HuaweiCloud\SDK\Ga\V1\Model\HealthCheckProtocol',
            'status' => '\HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus',
            'port' => 'int',
            'interval' => 'int',
            'timeout' => 'int',
            'maxRetries' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'domainId' => 'string',
            'enabled' => 'bool',
            'frozenInfo' => '\HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  健康检查ID。
    * endpointGroupId  终端节点组ID。
    * protocol  protocol
    * status  status
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enabled  是否开启健康检查。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'endpointGroupId' => null,
        'protocol' => null,
        'status' => null,
        'port' => 'int32',
        'interval' => 'int32',
        'timeout' => 'int32',
        'maxRetries' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'domainId' => null,
        'enabled' => null,
        'frozenInfo' => null
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
    * id  健康检查ID。
    * endpointGroupId  终端节点组ID。
    * protocol  protocol
    * status  status
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enabled  是否开启健康检查。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'endpointGroupId' => 'endpoint_group_id',
            'protocol' => 'protocol',
            'status' => 'status',
            'port' => 'port',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'maxRetries' => 'max_retries',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'enabled' => 'enabled',
            'frozenInfo' => 'frozen_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  健康检查ID。
    * endpointGroupId  终端节点组ID。
    * protocol  protocol
    * status  status
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enabled  是否开启健康检查。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'endpointGroupId' => 'setEndpointGroupId',
            'protocol' => 'setProtocol',
            'status' => 'setStatus',
            'port' => 'setPort',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'maxRetries' => 'setMaxRetries',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'enabled' => 'setEnabled',
            'frozenInfo' => 'setFrozenInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  健康检查ID。
    * endpointGroupId  终端节点组ID。
    * protocol  protocol
    * status  status
    * port  健康检查的端口。
    * interval  健康检查的时间间隔，单位为秒。
    * timeout  健康检查的超时时间，单位为秒。建议该值小于interval的值。
    * maxRetries  最大重试次数。将终端节点的状态从“健康”设置为“不健康”或从“不健康”设置为“健康”所需的连续健康检查次数。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enabled  是否开启健康检查。
    * frozenInfo  frozenInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'endpointGroupId' => 'getEndpointGroupId',
            'protocol' => 'getProtocol',
            'status' => 'getStatus',
            'port' => 'getPort',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'maxRetries' => 'getMaxRetries',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
            'enabled' => 'getEnabled',
            'frozenInfo' => 'getFrozenInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['endpointGroupId'] = isset($data['endpointGroupId']) ? $data['endpointGroupId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['frozenInfo'] = isset($data['frozenInfo']) ? $data['frozenInfo'] : null;
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
    * Gets id
    *  健康检查ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 健康检查ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets endpointGroupId
    *  终端节点组ID。
    *
    * @return string|null
    */
    public function getEndpointGroupId()
    {
        return $this->container['endpointGroupId'];
    }

    /**
    * Sets endpointGroupId
    *
    * @param string|null $endpointGroupId 终端节点组ID。
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
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets createdAt
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets frozenInfo
    *  frozenInfo
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null
    */
    public function getFrozenInfo()
    {
        return $this->container['frozenInfo'];
    }

    /**
    * Sets frozenInfo
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null $frozenInfo frozenInfo
    *
    * @return $this
    */
    public function setFrozenInfo($frozenInfo)
    {
        $this->container['frozenInfo'] = $frozenInfo;
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

