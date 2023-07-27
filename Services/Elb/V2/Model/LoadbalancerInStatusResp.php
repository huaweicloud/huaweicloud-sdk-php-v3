<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadbalancerInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadbalancerInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  负载均衡器名称
    * id  负载均衡器ID
    * listeners  负载均衡器关联的监听器列表
    * pools  负载均衡器关联的后端云服务器组列表
    * operatingStatus  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V2\Model\ListenersInStatusResp[]',
            'pools' => '\HuaweiCloud\SDK\Elb\V2\Model\PoolsInStatusResp[]',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  负载均衡器名称
    * id  负载均衡器ID
    * listeners  负载均衡器关联的监听器列表
    * pools  负载均衡器关联的后端云服务器组列表
    * operatingStatus  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'listeners' => null,
        'pools' => null,
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
    * name  负载均衡器名称
    * id  负载均衡器ID
    * listeners  负载均衡器关联的监听器列表
    * pools  负载均衡器关联的后端云服务器组列表
    * operatingStatus  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'listeners' => 'listeners',
            'pools' => 'pools',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  负载均衡器名称
    * id  负载均衡器ID
    * listeners  负载均衡器关联的监听器列表
    * pools  负载均衡器关联的后端云服务器组列表
    * operatingStatus  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'listeners' => 'setListeners',
            'pools' => 'setPools',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  负载均衡器名称
    * id  负载均衡器ID
    * listeners  负载均衡器关联的监听器列表
    * pools  负载均衡器关联的后端云服务器组列表
    * operatingStatus  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'listeners' => 'getListeners',
            'pools' => 'getPools',
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
    const OPERATING_STATUS_ONLINE = 'ONLINE';
    const OPERATING_STATUS_OFFLINE = 'OFFLINE';
    const OPERATING_STATUS_DEGRADED = 'DEGRADED';
    const OPERATING_STATUS_DISABLED = 'DISABLED';
    const OPERATING_STATUS_NO_MONITOR = 'NO_MONITOR';
    const PROVISIONING_STATUS_ACTIVE = 'ACTIVE';
    const PROVISIONING_STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const PROVISIONING_STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatingStatusAllowableValues()
    {
        return [
            self::OPERATING_STATUS_ONLINE,
            self::OPERATING_STATUS_OFFLINE,
            self::OPERATING_STATUS_DEGRADED,
            self::OPERATING_STATUS_DISABLED,
            self::OPERATING_STATUS_NO_MONITOR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProvisioningStatusAllowableValues()
    {
        return [
            self::PROVISIONING_STATUS_ACTIVE,
            self::PROVISIONING_STATUS_PENDING_CREATE,
            self::PROVISIONING_STATUS_ERROR,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
            $allowedValues = $this->getOperatingStatusAllowableValues();
                if (!is_null($this->container['operatingStatus']) && !in_array($this->container['operatingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operatingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            $allowedValues = $this->getProvisioningStatusAllowableValues();
                if (!is_null($this->container['provisioningStatus']) && !in_array($this->container['provisioningStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'provisioningStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  负载均衡器名称
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
    * @param string $name 负载均衡器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  负载均衡器ID
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
    * @param string $id 负载均衡器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets listeners
    *  负载均衡器关联的监听器列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ListenersInStatusResp[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ListenersInStatusResp[] $listeners 负载均衡器关联的监听器列表
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets pools
    *  负载均衡器关联的后端云服务器组列表
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
    * @param \HuaweiCloud\SDK\Elb\V2\Model\PoolsInStatusResp[] $pools 负载均衡器关联的后端云服务器组列表
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
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
    * @param string $operatingStatus 负载均衡器的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
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
    *  负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
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
    * @param string $provisioningStatus 负载均衡器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
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

