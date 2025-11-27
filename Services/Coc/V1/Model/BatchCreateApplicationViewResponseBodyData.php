<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewResponseBody_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationIds  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    * componentIds  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    * groupIds  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationIds' => 'string[]',
            'componentIds' => 'string[]',
            'groupIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationIds  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    * componentIds  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    * groupIds  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationIds' => null,
        'componentIds' => null,
        'groupIds' => null
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
    * applicationIds  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    * componentIds  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    * groupIds  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationIds' => 'application_ids',
            'componentIds' => 'component_ids',
            'groupIds' => 'group_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationIds  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    * componentIds  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    * groupIds  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationIds' => 'setApplicationIds',
            'componentIds' => 'setComponentIds',
            'groupIds' => 'setGroupIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationIds  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    * componentIds  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    * groupIds  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationIds' => 'getApplicationIds',
            'componentIds' => 'getComponentIds',
            'groupIds' => 'getGroupIds'
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
        $this->container['applicationIds'] = isset($data['applicationIds']) ? $data['applicationIds'] : null;
        $this->container['componentIds'] = isset($data['componentIds']) ? $data['componentIds'] : null;
        $this->container['groupIds'] = isset($data['groupIds']) ? $data['groupIds'] : null;
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
    * Gets applicationIds
    *  **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getApplicationIds()
    {
        return $this->container['applicationIds'];
    }

    /**
    * Sets applicationIds
    *
    * @param string[]|null $applicationIds **参数解释：** 应用id列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setApplicationIds($applicationIds)
    {
        $this->container['applicationIds'] = $applicationIds;
        return $this;
    }

    /**
    * Gets componentIds
    *  **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getComponentIds()
    {
        return $this->container['componentIds'];
    }

    /**
    * Sets componentIds
    *
    * @param string[]|null $componentIds **参数解释：** 组件id列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setComponentIds($componentIds)
    {
        $this->container['componentIds'] = $componentIds;
        return $this;
    }

    /**
    * Gets groupIds
    *  **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getGroupIds()
    {
        return $this->container['groupIds'];
    }

    /**
    * Sets groupIds
    *
    * @param string[]|null $groupIds **参数解释：** 分组id列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setGroupIds($groupIds)
    {
        $this->container['groupIds'] = $groupIds;
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

