<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompliantSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompliantSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compliantCount  合规补丁数量
    * severitySummary  severitySummary
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compliantCount' => 'int',
            'severitySummary' => '\HuaweiCloud\SDK\Coc\V1\Model\SeveritySummary'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compliantCount  合规补丁数量
    * severitySummary  severitySummary
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compliantCount' => 'int32',
        'severitySummary' => null
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
    * compliantCount  合规补丁数量
    * severitySummary  severitySummary
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compliantCount' => 'compliant_count',
            'severitySummary' => 'severity_summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compliantCount  合规补丁数量
    * severitySummary  severitySummary
    *
    * @var string[]
    */
    protected static $setters = [
            'compliantCount' => 'setCompliantCount',
            'severitySummary' => 'setSeveritySummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compliantCount  合规补丁数量
    * severitySummary  severitySummary
    *
    * @var string[]
    */
    protected static $getters = [
            'compliantCount' => 'getCompliantCount',
            'severitySummary' => 'getSeveritySummary'
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
        $this->container['compliantCount'] = isset($data['compliantCount']) ? $data['compliantCount'] : null;
        $this->container['severitySummary'] = isset($data['severitySummary']) ? $data['severitySummary'] : null;
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
    * Gets compliantCount
    *  合规补丁数量
    *
    * @return int|null
    */
    public function getCompliantCount()
    {
        return $this->container['compliantCount'];
    }

    /**
    * Sets compliantCount
    *
    * @param int|null $compliantCount 合规补丁数量
    *
    * @return $this
    */
    public function setCompliantCount($compliantCount)
    {
        $this->container['compliantCount'] = $compliantCount;
        return $this;
    }

    /**
    * Gets severitySummary
    *  severitySummary
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SeveritySummary|null
    */
    public function getSeveritySummary()
    {
        return $this->container['severitySummary'];
    }

    /**
    * Sets severitySummary
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SeveritySummary|null $severitySummary severitySummary
    *
    * @return $this
    */
    public function setSeveritySummary($severitySummary)
    {
        $this->container['severitySummary'] = $severitySummary;
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

