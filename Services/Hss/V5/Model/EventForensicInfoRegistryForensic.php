<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoRegistryForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_registry_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regKey  **参数解释**： 注册表KEY **取值范围**： 不涉及
    * regValue  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    * regNewKey  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    * regOpType  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regKey' => 'string',
            'regValue' => 'string',
            'regNewKey' => 'string',
            'regOpType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regKey  **参数解释**： 注册表KEY **取值范围**： 不涉及
    * regValue  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    * regNewKey  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    * regOpType  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regKey' => null,
        'regValue' => null,
        'regNewKey' => null,
        'regOpType' => null
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
    * regKey  **参数解释**： 注册表KEY **取值范围**： 不涉及
    * regValue  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    * regNewKey  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    * regOpType  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regKey' => 'reg_key',
            'regValue' => 'reg_value',
            'regNewKey' => 'reg_new_key',
            'regOpType' => 'reg_op_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regKey  **参数解释**： 注册表KEY **取值范围**： 不涉及
    * regValue  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    * regNewKey  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    * regOpType  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'regKey' => 'setRegKey',
            'regValue' => 'setRegValue',
            'regNewKey' => 'setRegNewKey',
            'regOpType' => 'setRegOpType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regKey  **参数解释**： 注册表KEY **取值范围**： 不涉及
    * regValue  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    * regNewKey  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    * regOpType  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'regKey' => 'getRegKey',
            'regValue' => 'getRegValue',
            'regNewKey' => 'getRegNewKey',
            'regOpType' => 'getRegOpType'
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
        $this->container['regKey'] = isset($data['regKey']) ? $data['regKey'] : null;
        $this->container['regValue'] = isset($data['regValue']) ? $data['regValue'] : null;
        $this->container['regNewKey'] = isset($data['regNewKey']) ? $data['regNewKey'] : null;
        $this->container['regOpType'] = isset($data['regOpType']) ? $data['regOpType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regKey']) && !preg_match("/^.*$/", $this->container['regKey'])) {
                $invalidProperties[] = "invalid value for 'regKey', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['regValue']) && !preg_match("/^.*$/", $this->container['regValue'])) {
                $invalidProperties[] = "invalid value for 'regValue', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['regNewKey']) && !preg_match("/^.*$/", $this->container['regNewKey'])) {
                $invalidProperties[] = "invalid value for 'regNewKey', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['regOpType']) && !preg_match("/^.*$/", $this->container['regOpType'])) {
                $invalidProperties[] = "invalid value for 'regOpType', must be conform to the pattern /^.*$/.";
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
    * Gets regKey
    *  **参数解释**： 注册表KEY **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegKey()
    {
        return $this->container['regKey'];
    }

    /**
    * Sets regKey
    *
    * @param string|null $regKey **参数解释**： 注册表KEY **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegKey($regKey)
    {
        $this->container['regKey'] = $regKey;
        return $this;
    }

    /**
    * Gets regValue
    *  **参数解释**： 注册表VALUE **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegValue()
    {
        return $this->container['regValue'];
    }

    /**
    * Sets regValue
    *
    * @param string|null $regValue **参数解释**： 注册表VALUE **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegValue($regValue)
    {
        $this->container['regValue'] = $regValue;
        return $this;
    }

    /**
    * Gets regNewKey
    *  **参数解释**： 注册表新KEY **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegNewKey()
    {
        return $this->container['regNewKey'];
    }

    /**
    * Sets regNewKey
    *
    * @param string|null $regNewKey **参数解释**： 注册表新KEY **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegNewKey($regNewKey)
    {
        $this->container['regNewKey'] = $regNewKey;
        return $this;
    }

    /**
    * Gets regOpType
    *  **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegOpType()
    {
        return $this->container['regOpType'];
    }

    /**
    * Sets regOpType
    *
    * @param string|null $regOpType **参数解释**： 注册表KEY/VALUE操作类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegOpType($regOpType)
    {
        $this->container['regOpType'] = $regOpType;
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

