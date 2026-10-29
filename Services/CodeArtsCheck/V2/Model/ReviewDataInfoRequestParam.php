<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewDataInfoRequestParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewDataInfoRequestParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareType  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    * isCheck  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    * name  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
    * value  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareType' => 'string',
            'isCheck' => 'int',
            'name' => 'string',
            'value' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareType  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    * isCheck  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    * name  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
    * value  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareType' => null,
        'isCheck' => null,
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
    * compareType  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    * isCheck  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    * name  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
    * value  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareType' => 'compareType',
            'isCheck' => 'isCheck',
            'name' => 'name',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareType  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    * isCheck  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    * name  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
    * value  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareType' => 'setCompareType',
            'isCheck' => 'setIsCheck',
            'name' => 'setName',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareType  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    * isCheck  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    * name  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
    * value  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareType' => 'getCompareType',
            'isCheck' => 'getIsCheck',
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
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['isCheck'] = isset($data['isCheck']) ? $data['isCheck'] : null;
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
        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
        }
        if ($this->container['isCheck'] === null) {
            $invalidProperties[] = "'isCheck' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets compareType
    *  **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType **参数解释：** 运算逻辑。 **约束限制：** 不涉及。 **取值范围：** 取值为\"≤\"。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets isCheck
    *  **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getIsCheck()
    {
        return $this->container['isCheck'];
    }

    /**
    * Sets isCheck
    *
    * @param int $isCheck **参数解释：** 门禁开关。 **约束限制：** 不涉及。 **取值范围：** - 0：关闭门禁。 - 1：打开门禁。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIsCheck($isCheck)
    {
        $this->container['isCheck'] = $isCheck;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 门禁项。 **约束限制：** 不涉及。 **取值范围：** - 致命问题数。 - 严重问题数。 - 一般问题数。 - 提示问题数。 **默认取值：** 不涉及。
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
    *  **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int $value **参数解释：** 门禁阈值。 **约束限制：** 不涉及。 **取值范围：** ≥0 **默认取值：** 不涉及。
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

