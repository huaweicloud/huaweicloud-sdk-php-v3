<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatusPool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatusPool';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provisioningStatus  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    * name  后端服务器组名。
    * healthmonitor  healthmonitor
    * members  后端服务器状态信息。
    * id  后端服务器组ID。
    * operatingStatus  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provisioningStatus' => 'string',
            'name' => 'string',
            'healthmonitor' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusHealthMonitor',
            'members' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusMember[]',
            'id' => 'string',
            'operatingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provisioningStatus  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    * name  后端服务器组名。
    * healthmonitor  healthmonitor
    * members  后端服务器状态信息。
    * id  后端服务器组ID。
    * operatingStatus  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provisioningStatus' => null,
        'name' => null,
        'healthmonitor' => null,
        'members' => null,
        'id' => null,
        'operatingStatus' => null
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
    * provisioningStatus  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    * name  后端服务器组名。
    * healthmonitor  healthmonitor
    * members  后端服务器状态信息。
    * id  后端服务器组ID。
    * operatingStatus  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provisioningStatus' => 'provisioning_status',
            'name' => 'name',
            'healthmonitor' => 'healthmonitor',
            'members' => 'members',
            'id' => 'id',
            'operatingStatus' => 'operating_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provisioningStatus  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    * name  后端服务器组名。
    * healthmonitor  healthmonitor
    * members  后端服务器状态信息。
    * id  后端服务器组ID。
    * operatingStatus  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $setters = [
            'provisioningStatus' => 'setProvisioningStatus',
            'name' => 'setName',
            'healthmonitor' => 'setHealthmonitor',
            'members' => 'setMembers',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provisioningStatus  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    * name  后端服务器组名。
    * healthmonitor  healthmonitor
    * members  后端服务器状态信息。
    * id  后端服务器组ID。
    * operatingStatus  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $getters = [
            'provisioningStatus' => 'getProvisioningStatus',
            'name' => 'getName',
            'healthmonitor' => 'getHealthmonitor',
            'members' => 'getMembers',
            'id' => 'getId',
            'operatingStatus' => 'getOperatingStatus'
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
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets provisioningStatus
    *  后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus 后端服务器组的配置状态。  取值： - ACTIVE：使用中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets name
    *  后端服务器组名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 后端服务器组名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  healthmonitor
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusHealthMonitor|null
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusHealthMonitor|null $healthmonitor healthmonitor
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
        return $this;
    }

    /**
    * Gets members
    *  后端服务器状态信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusMember[]|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusMember[]|null $members 后端服务器状态信息。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets id
    *  后端服务器组ID。
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
    * @param string|null $id 后端服务器组ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @return string|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string|null $operatingStatus 后端服务器组的操作状态。  取值： - ONLINE：创建时默认状态，表后端服务器组正常。 - DEGRADED：该后端服务器组下存在member为的operating_status=OFFLINE。 - DISABLED：负载均衡器或后端服务器组的admin_state_up=false。  说明： DEGRADED和DISABLED仅在当前接口返回， 查询后端服务器组详情等其他接口返回的operating_status字段不存在这两个状态值。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
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

