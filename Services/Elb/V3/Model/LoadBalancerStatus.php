<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  负载均衡器名称。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * listeners  负载均衡器关联的监听器列表。
    * pools  负载均衡器关联的后端服务器组列表。
    * id  负载均衡器ID。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'provisioningStatus' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusListener[]',
            'pools' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[]',
            'id' => 'string',
            'operatingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  负载均衡器名称。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * listeners  负载均衡器关联的监听器列表。
    * pools  负载均衡器关联的后端服务器组列表。
    * id  负载均衡器ID。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'provisioningStatus' => null,
        'listeners' => null,
        'pools' => null,
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
    * name  负载均衡器名称。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * listeners  负载均衡器关联的监听器列表。
    * pools  负载均衡器关联的后端服务器组列表。
    * id  负载均衡器ID。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'provisioningStatus' => 'provisioning_status',
            'listeners' => 'listeners',
            'pools' => 'pools',
            'id' => 'id',
            'operatingStatus' => 'operating_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  负载均衡器名称。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * listeners  负载均衡器关联的监听器列表。
    * pools  负载均衡器关联的后端服务器组列表。
    * id  负载均衡器ID。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'provisioningStatus' => 'setProvisioningStatus',
            'listeners' => 'setListeners',
            'pools' => 'setPools',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  负载均衡器名称。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * listeners  负载均衡器关联的监听器列表。
    * pools  负载均衡器关联的后端服务器组列表。
    * id  负载均衡器ID。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'provisioningStatus' => 'getProvisioningStatus',
            'listeners' => 'getListeners',
            'pools' => 'getPools',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
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
    *  负载均衡器名称。
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
    * @param string $name 负载均衡器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
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
    * @param string $provisioningStatus 负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets listeners
    *  负载均衡器关联的监听器列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusListener[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusListener[] $listeners 负载均衡器关联的监听器列表。
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
    *  负载均衡器关联的后端服务器组列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[] $pools 负载均衡器关联的后端服务器组列表。
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
        return $this;
    }

    /**
    * Gets id
    *  负载均衡器ID。
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
    * @param string $id 负载均衡器ID。
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
    *  负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
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
    * @param string $operatingStatus 负载均衡器的操作状态。  取值： - ONLINE：创建时默认状态，表示负载均衡器正常运行。 - FROZEN：已冻结。 - DEGRADED：负载均衡器下存在member的operating_status为OFFLINE时返回这个状态。 - DISABLED：负载均衡器的admin_state_up属性值为false。  说明：DEGRADED和DISABLED状态仅在当前接口中返回，LB详情等其他接口不返回这两个状态值。
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

