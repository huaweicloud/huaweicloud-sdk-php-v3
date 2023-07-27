<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListenersInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListenersInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  监听器ID
    * name  监听器名称
    * pools  监听器关联的后端云服务器组列表
    * l7policies  监听器关联的转发策略列表
    * operatingStatus  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'pools' => '\HuaweiCloud\SDK\Elb\V2\Model\PoolsInStatusResp[]',
            'l7policies' => '\HuaweiCloud\SDK\Elb\V2\Model\L7policiesInStatusResp[]',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  监听器ID
    * name  监听器名称
    * pools  监听器关联的后端云服务器组列表
    * l7policies  监听器关联的转发策略列表
    * operatingStatus  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'pools' => null,
        'l7policies' => null,
        'operatingStatus' => null,
        'provisioningStatus' => null
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
    * id  监听器ID
    * name  监听器名称
    * pools  监听器关联的后端云服务器组列表
    * l7policies  监听器关联的转发策略列表
    * operatingStatus  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'pools' => 'pools',
            'l7policies' => 'l7policies',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  监听器ID
    * name  监听器名称
    * pools  监听器关联的后端云服务器组列表
    * l7policies  监听器关联的转发策略列表
    * operatingStatus  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'pools' => 'setPools',
            'l7policies' => 'setL7policies',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  监听器ID
    * name  监听器名称
    * pools  监听器关联的后端云服务器组列表
    * l7policies  监听器关联的转发策略列表
    * operatingStatus  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'pools' => 'getPools',
            'l7policies' => 'getL7policies',
            'operatingStatus' => 'getOperatingStatus',
            'provisioningStatus' => 'getProvisioningStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
        $this->container['l7policies'] = isset($data['l7policies']) ? $data['l7policies'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
        }
        if ($this->container['l7policies'] === null) {
            $invalidProperties[] = "'l7policies' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
            if ((mb_strlen($this->container['operatingStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['operatingStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
            if ((mb_strlen($this->container['provisioningStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['provisioningStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be bigger than or equal to 0.";
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
    *  监听器ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 监听器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  监听器名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 监听器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pools
    *  监听器关联的后端云服务器组列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\PoolsInStatusResp[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\PoolsInStatusResp[] $pools 监听器关联的后端云服务器组列表
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
        return $this;
    }

    /**
    * Gets l7policies
    *  监听器关联的转发策略列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\L7policiesInStatusResp[]
    */
    public function getL7policies()
    {
        return $this->container['l7policies'];
    }

    /**
    * Sets l7policies
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\L7policiesInStatusResp[] $l7policies 监听器关联的转发策略列表
    *
    * @return $this
    */
    public function setL7policies($l7policies)
    {
        $this->container['l7policies'] = $l7policies;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    *
    * @return string
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string $operatingStatus 监听器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

