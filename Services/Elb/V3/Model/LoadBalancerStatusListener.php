<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatusListener implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatusListener';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：监听器的名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    * pools  **参数解释**：监听器下的所有后端服务器组的状态信息。
    * l7policies  **参数解释**：监听器下的7层转发策略的状态信息。
    * id  **参数解释**：监听器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'provisioningStatus' => 'string',
            'pools' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[]',
            'l7policies' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPolicy[]',
            'id' => 'string',
            'operatingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：监听器的名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    * pools  **参数解释**：监听器下的所有后端服务器组的状态信息。
    * l7policies  **参数解释**：监听器下的7层转发策略的状态信息。
    * id  **参数解释**：监听器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'provisioningStatus' => null,
        'pools' => null,
        'l7policies' => null,
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
    * name  **参数解释**：监听器的名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    * pools  **参数解释**：监听器下的所有后端服务器组的状态信息。
    * l7policies  **参数解释**：监听器下的7层转发策略的状态信息。
    * id  **参数解释**：监听器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'provisioningStatus' => 'provisioning_status',
            'pools' => 'pools',
            'l7policies' => 'l7policies',
            'id' => 'id',
            'operatingStatus' => 'operating_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：监听器的名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    * pools  **参数解释**：监听器下的所有后端服务器组的状态信息。
    * l7policies  **参数解释**：监听器下的7层转发策略的状态信息。
    * id  **参数解释**：监听器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'provisioningStatus' => 'setProvisioningStatus',
            'pools' => 'setPools',
            'l7policies' => 'setL7policies',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：监听器的名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    * pools  **参数解释**：监听器下的所有后端服务器组的状态信息。
    * l7policies  **参数解释**：监听器下的7层转发策略的状态信息。
    * id  **参数解释**：监听器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'provisioningStatus' => 'getProvisioningStatus',
            'pools' => 'getPools',
            'l7policies' => 'getL7policies',
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
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
        $this->container['l7policies'] = isset($data['l7policies']) ? $data['l7policies'] : null;
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
    * Gets name
    *  **参数解释**：监听器的名称。  **取值范围**：不涉及
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
    * @param string|null $name **参数解释**：监听器的名称。  **取值范围**：不涉及
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
    *  **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
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
    * @param string|null $provisioningStatus **参数解释**：监听器的配置状态。  **取值范围**： - ACTIVE：使用中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets pools
    *  **参数解释**：监听器下的所有后端服务器组的状态信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[]|null
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPool[]|null $pools **参数解释**：监听器下的所有后端服务器组的状态信息。
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
    *  **参数解释**：监听器下的7层转发策略的状态信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPolicy[]|null
    */
    public function getL7policies()
    {
        return $this->container['l7policies'];
    }

    /**
    * Sets l7policies
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatusPolicy[]|null $l7policies **参数解释**：监听器下的7层转发策略的状态信息。
    *
    * @return $this
    */
    public function setL7policies($l7policies)
    {
        $this->container['l7policies'] = $l7policies;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：监听器ID。  **取值范围**：不涉及
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
    * @param string|null $id **参数解释**：监听器ID。  **取值范围**：不涉及
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
    *  **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
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
    * @param string|null $operatingStatus **参数解释**：监听器的操作状态。  **取值范围**： - ONLINE：创建时默认状态，表示监听器正常运行。 - DEGRADED：该监听器下存在l7policy或l7rule的Provisioning_status=ERROR时返回这个状态。或者状态树该监听器下存在member的operating_status=OFFLINE。 - DISABLED：负载均衡器或监听器的admin_state_up=false。  > DEGRADED和DISABLED状态仅在当前接口返回，查询监听器详情等其他接口返回字段operating_status不存在这两个状态值。
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

