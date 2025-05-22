<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionItemVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionItemVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemName  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    * subItems  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemName' => 'string',
            'subItems' => '\HuaweiCloud\SDK\Dws\V2\Model\ActionSubItemVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemName  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    * subItems  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemName' => null,
        'subItems' => null
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
    * itemName  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    * subItems  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemName' => 'item_name',
            'subItems' => 'sub_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemName  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    * subItems  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'itemName' => 'setItemName',
            'subItems' => 'setSubItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemName  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    * subItems  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'itemName' => 'getItemName',
            'subItems' => 'getSubItems'
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
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['subItems'] = isset($data['subItems']) ? $data['subItems'] : null;
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
    * Gets itemName
    *  **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
    * Sets itemName
    *
    * @param string|null $itemName **参数解释**： 任务详情子项，一级菜单。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;
        return $this;
    }

    /**
    * Gets subItems
    *  **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ActionSubItemVo[]|null
    */
    public function getSubItems()
    {
        return $this->container['subItems'];
    }

    /**
    * Sets subItems
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ActionSubItemVo[]|null $subItems **参数解释**： 任务详情子项，一级菜单详情。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubItems($subItems)
    {
        $this->container['subItems'] = $subItems;
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

