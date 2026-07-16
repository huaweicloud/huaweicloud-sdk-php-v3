<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteImageGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteImageGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isForce  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isForce' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isForce  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isForce' => null
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
    * isForce  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isForce' => 'is_force'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isForce  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $setters = [
            'isForce' => 'setIsForce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isForce  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @var string[]
    */
    protected static $getters = [
            'isForce' => 'getIsForce'
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
        $this->container['isForce'] = isset($data['isForce']) ? $data['isForce'] : null;
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
    * Gets isForce
    *  是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @return bool|null
    */
    public function getIsForce()
    {
        return $this->container['isForce'];
    }

    /**
    * Sets isForce
    *
    * @param bool|null $isForce 是否删除关联的swr镜像，默认为false  **参数解释**：是否删除关联的swr镜像。 **约束限制**：true或false。 **取值范围**：布尔类型。 **默认取值**：false。
    *
    * @return $this
    */
    public function setIsForce($isForce)
    {
        $this->container['isForce'] = $isForce;
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

