<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProgramRequestBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProgramRequestBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * programName  节目名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'programName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * programName  节目名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'programName' => null
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
    * programName  节目名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'programName' => 'programName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * programName  节目名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'programName' => 'setProgramName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * programName  节目名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'programName' => 'getProgramName'
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
        $this->container['programName'] = isset($data['programName']) ? $data['programName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['programName'] === null) {
            $invalidProperties[] = "'programName' can't be null";
        }
            if ((mb_strlen($this->container['programName']) > 96)) {
                $invalidProperties[] = "invalid value for 'programName', the character length must be smaller than or equal to 96.";
            }
            if ((mb_strlen($this->container['programName']) < 1)) {
                $invalidProperties[] = "invalid value for 'programName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z0-9\\-_(). ]+$/", $this->container['programName'])) {
                $invalidProperties[] = "invalid value for 'programName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z0-9\\-_(). ]+$/.";
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
    * Gets programName
    *  节目名称。
    *
    * @return string
    */
    public function getProgramName()
    {
        return $this->container['programName'];
    }

    /**
    * Sets programName
    *
    * @param string $programName 节目名称。
    *
    * @return $this
    */
    public function setProgramName($programName)
    {
        $this->container['programName'] = $programName;
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

