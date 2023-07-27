<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolsInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolsInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端云服务器组ID
    * name  后端云服务器组名称
    * members  后端云服务器组关联的后端云服务器列表
    * operatingStatus  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'members' => '\HuaweiCloud\SDK\Elb\V2\Model\MembersInStatusResp[]',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string',
            'healthmonitor' => '\HuaweiCloud\SDK\Elb\V2\Model\HealthmonitorsInStatusResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端云服务器组ID
    * name  后端云服务器组名称
    * members  后端云服务器组关联的后端云服务器列表
    * operatingStatus  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'members' => null,
        'operatingStatus' => null,
        'provisioningStatus' => null,
        'healthmonitor' => null
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
    * id  后端云服务器组ID
    * name  后端云服务器组名称
    * members  后端云服务器组关联的后端云服务器列表
    * operatingStatus  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'members' => 'members',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status',
            'healthmonitor' => 'healthmonitor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端云服务器组ID
    * name  后端云服务器组名称
    * members  后端云服务器组关联的后端云服务器列表
    * operatingStatus  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'members' => 'setMembers',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus',
            'healthmonitor' => 'setHealthmonitor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端云服务器组ID
    * name  后端云服务器组名称
    * members  后端云服务器组关联的后端云服务器列表
    * operatingStatus  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
    * provisioningStatus  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'members' => 'getMembers',
            'operatingStatus' => 'getOperatingStatus',
            'provisioningStatus' => 'getProvisioningStatus',
            'healthmonitor' => 'getHealthmonitor'
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
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
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
        if ($this->container['members'] === null) {
            $invalidProperties[] = "'members' can't be null";
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
        if ($this->container['healthmonitor'] === null) {
            $invalidProperties[] = "'healthmonitor' can't be null";
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
    *  后端云服务器组ID
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
    * @param string $id 后端云服务器组ID
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
    *  后端云服务器组名称
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
    * @param string $name 后端云服务器组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets members
    *  后端云服务器组关联的后端云服务器列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\MembersInStatusResp[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\MembersInStatusResp[] $members 后端云服务器组关联的后端云服务器列表
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
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
    * @param string $operatingStatus 后端云服务器组的操作状态；该字段为预留字段，暂未启用。默认为ONLINE。
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
    *  后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
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
    * @param string $provisioningStatus 后端云服务器组的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  healthmonitor
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\HealthmonitorsInStatusResp
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\HealthmonitorsInStatusResp $healthmonitor healthmonitor
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
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

