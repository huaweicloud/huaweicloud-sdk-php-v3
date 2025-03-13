<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportRuleSecrecyLevelDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportRuleSecrecyLevelDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * builtinRuleId  内置规则模板id。
    * secrecyLevel  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'builtinRuleId' => 'string',
            'secrecyLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * builtinRuleId  内置规则模板id。
    * secrecyLevel  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'builtinRuleId' => null,
        'secrecyLevel' => null
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
    * builtinRuleId  内置规则模板id。
    * secrecyLevel  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'builtinRuleId' => 'builtin_rule_id',
            'secrecyLevel' => 'secrecy_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * builtinRuleId  内置规则模板id。
    * secrecyLevel  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'builtinRuleId' => 'setBuiltinRuleId',
            'secrecyLevel' => 'setSecrecyLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * builtinRuleId  内置规则模板id。
    * secrecyLevel  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'builtinRuleId' => 'getBuiltinRuleId',
            'secrecyLevel' => 'getSecrecyLevel'
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
        $this->container['builtinRuleId'] = isset($data['builtinRuleId']) ? $data['builtinRuleId'] : null;
        $this->container['secrecyLevel'] = isset($data['secrecyLevel']) ? $data['secrecyLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be bigger than or equal to 1.";
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
    * Gets builtinRuleId
    *  内置规则模板id。
    *
    * @return string|null
    */
    public function getBuiltinRuleId()
    {
        return $this->container['builtinRuleId'];
    }

    /**
    * Sets builtinRuleId
    *
    * @param string|null $builtinRuleId 内置规则模板id。
    *
    * @return $this
    */
    public function setBuiltinRuleId($builtinRuleId)
    {
        $this->container['builtinRuleId'] = $builtinRuleId;
        return $this;
    }

    /**
    * Gets secrecyLevel
    *  密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @return string|null
    */
    public function getSecrecyLevel()
    {
        return $this->container['secrecyLevel'];
    }

    /**
    * Sets secrecyLevel
    *
    * @param string|null $secrecyLevel 密级id，获取方法请参见[获取数据密级](ListSecuritySecrecyLevels.xml)。
    *
    * @return $this
    */
    public function setSecrecyLevel($secrecyLevel)
    {
        $this->container['secrecyLevel'] = $secrecyLevel;
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

