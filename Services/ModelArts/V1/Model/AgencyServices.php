<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyServices implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyServices';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    * actions  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'actions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    * actions  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'actions' => null
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
    * serviceId  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    * actions  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    * actions  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    * actions  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'actions' => 'getActions'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 1.";
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
    * Gets serviceId
    *  **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId **参数解释**：服务ID。服务ID，标识目标云服务（如 \"19\" 代表 EVS） **约束限制**：不涉及。 **取值范围**：长度限制为64个字符。 **默认取值**：空。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions **参数解释**：该服务下的细粒度权限操作列表，格式为 服务:资源:操作，如 \"evs:volumes:delete\" **约束限制**：不涉及。 **取值范围**：长度限制为256个字符。 **默认取值**：空。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

