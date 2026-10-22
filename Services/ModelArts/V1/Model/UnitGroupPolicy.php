<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnitGroupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnitGroupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleScope  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleScope  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleScope' => null
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
    * scheduleScope  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleScope' => 'schedule_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleScope  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleScope' => 'setScheduleScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleScope  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleScope' => 'getScheduleScope'
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
        $this->container['scheduleScope'] = isset($data['scheduleScope']) ? $data['scheduleScope'] : null;
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
    * Gets scheduleScope
    *  **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getScheduleScope()
    {
        return $this->container['scheduleScope'];
    }

    /**
    * Sets scheduleScope
    *
    * @param string|null $scheduleScope **参数解释：** 调度范围，仅A5超节点规格生效。 **约束限制：** - 仅当资源池包含A5(snt9e)规格时有效，非A5规格不执行调度范围校验。 - A5规格仅支持LWS工作负载类型，不支持DEPLOYMENT。 - A5规格需要Volcano调度插件版本满足要求。 **取值范围：** - HYPERNODE：超节点调度 - SLICE：柜级调度 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setScheduleScope($scheduleScope)
    {
        $this->container['scheduleScope'] = $scheduleScope;
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

