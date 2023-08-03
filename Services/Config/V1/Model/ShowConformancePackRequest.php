<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConformancePackRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConformancePackRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conformancePackId  合规规则包ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conformancePackId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conformancePackId  合规规则包ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conformancePackId' => null
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
    * conformancePackId  合规规则包ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conformancePackId' => 'conformance_pack_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conformancePackId  合规规则包ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'conformancePackId' => 'setConformancePackId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conformancePackId  合规规则包ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'conformancePackId' => 'getConformancePackId'
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
        $this->container['conformancePackId'] = isset($data['conformancePackId']) ? $data['conformancePackId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conformancePackId'] === null) {
            $invalidProperties[] = "'conformancePackId' can't be null";
        }
            if ((mb_strlen($this->container['conformancePackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'conformancePackId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['conformancePackId'])) {
                $invalidProperties[] = "invalid value for 'conformancePackId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets conformancePackId
    *  合规规则包ID。
    *
    * @return string
    */
    public function getConformancePackId()
    {
        return $this->container['conformancePackId'];
    }

    /**
    * Sets conformancePackId
    *
    * @param string $conformancePackId 合规规则包ID。
    *
    * @return $this
    */
    public function setConformancePackId($conformancePackId)
    {
        $this->container['conformancePackId'] = $conformancePackId;
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

