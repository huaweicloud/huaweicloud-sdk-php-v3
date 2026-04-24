<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClaimMatchValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClaimMatchValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matchValueString  The string value to match for.
    * matchValueStringList  matchValueStringList
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matchValueString' => 'string',
            'matchValueStringList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matchValueString  The string value to match for.
    * matchValueStringList  matchValueStringList
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matchValueString' => null,
        'matchValueStringList' => null
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
    * matchValueString  The string value to match for.
    * matchValueStringList  matchValueStringList
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matchValueString' => 'match_value_string',
            'matchValueStringList' => 'match_value_string_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matchValueString  The string value to match for.
    * matchValueStringList  matchValueStringList
    *
    * @var string[]
    */
    protected static $setters = [
            'matchValueString' => 'setMatchValueString',
            'matchValueStringList' => 'setMatchValueStringList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matchValueString  The string value to match for.
    * matchValueStringList  matchValueStringList
    *
    * @var string[]
    */
    protected static $getters = [
            'matchValueString' => 'getMatchValueString',
            'matchValueStringList' => 'getMatchValueStringList'
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
        $this->container['matchValueString'] = isset($data['matchValueString']) ? $data['matchValueString'] : null;
        $this->container['matchValueStringList'] = isset($data['matchValueStringList']) ? $data['matchValueStringList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['matchValueString']) && (mb_strlen($this->container['matchValueString']) > 255)) {
                $invalidProperties[] = "invalid value for 'matchValueString', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['matchValueString']) && (mb_strlen($this->container['matchValueString']) < 1)) {
                $invalidProperties[] = "invalid value for 'matchValueString', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['matchValueString']) && !preg_match("/^[A-Za-z0-9_.\\-]+$/", $this->container['matchValueString'])) {
                $invalidProperties[] = "invalid value for 'matchValueString', must be conform to the pattern /^[A-Za-z0-9_.\\-]+$/.";
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
    * Gets matchValueString
    *  The string value to match for.
    *
    * @return string|null
    */
    public function getMatchValueString()
    {
        return $this->container['matchValueString'];
    }

    /**
    * Sets matchValueString
    *
    * @param string|null $matchValueString The string value to match for.
    *
    * @return $this
    */
    public function setMatchValueString($matchValueString)
    {
        $this->container['matchValueString'] = $matchValueString;
        return $this;
    }

    /**
    * Gets matchValueStringList
    *  matchValueStringList
    *
    * @return string[]|null
    */
    public function getMatchValueStringList()
    {
        return $this->container['matchValueStringList'];
    }

    /**
    * Sets matchValueStringList
    *
    * @param string[]|null $matchValueStringList matchValueStringList
    *
    * @return $this
    */
    public function setMatchValueStringList($matchValueStringList)
    {
        $this->container['matchValueStringList'] = $matchValueStringList;
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

