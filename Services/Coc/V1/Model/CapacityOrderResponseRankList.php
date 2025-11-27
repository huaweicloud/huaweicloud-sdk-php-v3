<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CapacityOrderResponseRankList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CapacityOrderResponse_rank_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
    * name  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    * value  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
    * name  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    * value  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'value' => null
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
    * id  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
    * name  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    * value  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
    * name  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    * value  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
    * name  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    * value  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'value' => 'getValue'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
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
    *  **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
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
    * @param string|null $id **参数解释：** 应用或组件或者分组id。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的id。
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
    *  **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
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
    * @param string|null $name **参数解释：** 应用或组件或者分组的名称。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释：** 应用或组件或者分组的容量值。 **取值范围：** 容量种类排名在前五个的应用或者组件或分组对应的容量值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

