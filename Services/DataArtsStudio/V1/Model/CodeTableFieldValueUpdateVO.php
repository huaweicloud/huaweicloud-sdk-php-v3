<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CodeTableFieldValueUpdateVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CodeTableFieldValueUpdateVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * toAdd  新增码表属性、属性值列表。
    * toModify  编辑码表属性值列表。
    * toRemove  删除码表属性ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'toAdd' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]',
            'toModify' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]',
            'toRemove' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * toAdd  新增码表属性、属性值列表。
    * toModify  编辑码表属性值列表。
    * toRemove  删除码表属性ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'toAdd' => null,
        'toModify' => null,
        'toRemove' => null
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
    * toAdd  新增码表属性、属性值列表。
    * toModify  编辑码表属性值列表。
    * toRemove  删除码表属性ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'toAdd' => 'to_add',
            'toModify' => 'to_modify',
            'toRemove' => 'to_remove'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * toAdd  新增码表属性、属性值列表。
    * toModify  编辑码表属性值列表。
    * toRemove  删除码表属性ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'toAdd' => 'setToAdd',
            'toModify' => 'setToModify',
            'toRemove' => 'setToRemove'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * toAdd  新增码表属性、属性值列表。
    * toModify  编辑码表属性值列表。
    * toRemove  删除码表属性ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'toAdd' => 'getToAdd',
            'toModify' => 'getToModify',
            'toRemove' => 'getToRemove'
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
        $this->container['toAdd'] = isset($data['toAdd']) ? $data['toAdd'] : null;
        $this->container['toModify'] = isset($data['toModify']) ? $data['toModify'] : null;
        $this->container['toRemove'] = isset($data['toRemove']) ? $data['toRemove'] : null;
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
    * Gets toAdd
    *  新增码表属性、属性值列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null
    */
    public function getToAdd()
    {
        return $this->container['toAdd'];
    }

    /**
    * Sets toAdd
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null $toAdd 新增码表属性、属性值列表。
    *
    * @return $this
    */
    public function setToAdd($toAdd)
    {
        $this->container['toAdd'] = $toAdd;
        return $this;
    }

    /**
    * Gets toModify
    *  编辑码表属性值列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null
    */
    public function getToModify()
    {
        return $this->container['toModify'];
    }

    /**
    * Sets toModify
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null $toModify 编辑码表属性值列表。
    *
    * @return $this
    */
    public function setToModify($toModify)
    {
        $this->container['toModify'] = $toModify;
        return $this;
    }

    /**
    * Gets toRemove
    *  删除码表属性ID列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null
    */
    public function getToRemove()
    {
        return $this->container['toRemove'];
    }

    /**
    * Sets toRemove
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CodeTableFieldVO[]|null $toRemove 删除码表属性ID列表。
    *
    * @return $this
    */
    public function setToRemove($toRemove)
    {
        $this->container['toRemove'] = $toRemove;
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

