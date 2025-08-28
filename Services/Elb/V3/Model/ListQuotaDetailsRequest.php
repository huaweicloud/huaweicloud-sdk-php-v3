<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotaDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotaDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaKey  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaKey' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaKey  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaKey' => null
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
    * quotaKey  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaKey' => 'quota_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaKey  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaKey' => 'setQuotaKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaKey  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaKey' => 'getQuotaKey'
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
        $this->container['quotaKey'] = isset($data['quotaKey']) ? $data['quotaKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets quotaKey
    *  **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getQuotaKey()
    {
        return $this->container['quotaKey'];
    }

    /**
    * Sets quotaKey
    *
    * @param string[]|null $quotaKey **参数解释**：配额类型。支持多值查询，查询条件格式：quota_key=xxx&quota_key=xxx。  **约束限制**：不涉及  **取值范围**： loadbalancer、listener、ipgroup、pool、member、healthmonitor、l7policy、certificate、security_policy、listeners_per_loadbalancer、listeners_per_pool、members_per_pool、condition_per_policy、ipgroup_bindings、ipgroup_max_length、ipgroups_per_listener、pools_per_l7policy、l7policies_per_listener、free_instance_members_per_pool、free_instance_listeners_per_loadbalancer。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setQuotaKey($quotaKey)
    {
        $this->container['quotaKey'] = $quotaKey;
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

