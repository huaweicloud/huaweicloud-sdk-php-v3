<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenPublicIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenPublicIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicBindType  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    * eipId  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicBindType' => 'string',
            'eipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicBindType  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    * eipId  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicBindType' => null,
        'eipId' => null
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
    * publicBindType  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    * eipId  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicBindType' => 'public_bind_type',
            'eipId' => 'eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicBindType  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    * eipId  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicBindType' => 'setPublicBindType',
            'eipId' => 'setEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicBindType  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    * eipId  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicBindType' => 'getPublicBindType',
            'eipId' => 'getEipId'
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
        $this->container['publicBindType'] = isset($data['publicBindType']) ? $data['publicBindType'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
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
    * Gets publicBindType
    *  **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicBindType()
    {
        return $this->container['publicBindType'];
    }

    /**
    * Sets publicBindType
    *
    * @param string|null $publicBindType **参数解释**： 弹性IP绑定类型。 **约束限制**： 不涉及。 **取值范围**： - auto_assign：自动绑定 - not_use：暂未使用 - bind_existing ：使用已有  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublicBindType($publicBindType)
    {
        $this->container['publicBindType'] = $publicBindType;
        return $this;
    }

    /**
    * Gets eipId
    *  **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId **参数解释**： 弹性IP的ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
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

