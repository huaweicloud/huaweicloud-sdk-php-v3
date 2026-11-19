<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionEnabledTypes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionEnabledTypes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectType  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectType  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectType' => null
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
    * protectType  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectType' => 'protect_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectType  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @var string[]
    */
    protected static $setters = [
            'protectType' => 'setProtectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectType  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @var string[]
    */
    protected static $getters = [
            'protectType' => 'getProtectType'
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
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectType']) && (mb_strlen($this->container['protectType']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectType']) && (mb_strlen($this->container['protectType']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectType']) && !preg_match("/^(host|container|application|serverless)$/", $this->container['protectType'])) {
                $invalidProperties[] = "invalid value for 'protectType', must be conform to the pattern /^(host|container|application|serverless)$/.";
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
    * Gets protectType
    *  **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @return string|null
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string|null $protectType **参数解释**: 防护类型 **取值范围**: - host：主机 - container：容器 - application：应用 - serverless：Serverless
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
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

