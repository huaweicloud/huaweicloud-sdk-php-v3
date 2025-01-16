<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeSrKernelVersionRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeSrKernelVersionRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delay  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    * isSkipValidate  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delay' => 'string',
            'isSkipValidate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delay  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    * isSkipValidate  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delay' => null,
        'isSkipValidate' => null
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
    * delay  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    * isSkipValidate  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delay' => 'delay',
            'isSkipValidate' => 'is_skip_validate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delay  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    * isSkipValidate  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @var string[]
    */
    protected static $setters = [
            'delay' => 'setDelay',
            'isSkipValidate' => 'setIsSkipValidate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delay  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    * isSkipValidate  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @var string[]
    */
    protected static $getters = [
            'delay' => 'getDelay',
            'isSkipValidate' => 'getIsSkipValidate'
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
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['isSkipValidate'] = isset($data['isSkipValidate']) ? $data['isSkipValidate'] : null;
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
    * Gets delay
    *  **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @return string|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param string|null $delay **参数解释**： 是否延时升级。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets isSkipValidate
    *  **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @return string|null
    */
    public function getIsSkipValidate()
    {
        return $this->container['isSkipValidate'];
    }

    /**
    * Sets isSkipValidate
    *
    * @param string|null $isSkipValidate **参数解释**： 是否跳过升级校验。  **约束限制**： 不涉及  **取值范围**： - true - false  **默认取值**： false。
    *
    * @return $this
    */
    public function setIsSkipValidate($isSkipValidate)
    {
        $this->container['isSkipValidate'] = $isSkipValidate;
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

