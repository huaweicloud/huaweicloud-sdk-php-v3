<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyComplianceSummaryUnit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyComplianceSummaryUnit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compliantCount  合规数量
    * nonCompliantCount  不合规数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compliantCount' => 'int',
            'nonCompliantCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compliantCount  合规数量
    * nonCompliantCount  不合规数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compliantCount' => null,
        'nonCompliantCount' => null
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
    * compliantCount  合规数量
    * nonCompliantCount  不合规数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compliantCount' => 'compliant_count',
            'nonCompliantCount' => 'non_compliant_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compliantCount  合规数量
    * nonCompliantCount  不合规数量
    *
    * @var string[]
    */
    protected static $setters = [
            'compliantCount' => 'setCompliantCount',
            'nonCompliantCount' => 'setNonCompliantCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compliantCount  合规数量
    * nonCompliantCount  不合规数量
    *
    * @var string[]
    */
    protected static $getters = [
            'compliantCount' => 'getCompliantCount',
            'nonCompliantCount' => 'getNonCompliantCount'
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
        $this->container['nonCompliantCount'] = isset($data['nonCompliantCount']) ? $data['nonCompliantCount'] : null;
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
    *  合规数量
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
    * @param int|null $compliantCount 合规数量
    *
    * @return $this
    */
    public function setCompliantCount($compliantCount)
    {
        $this->container['compliantCount'] = $compliantCount;
        return $this;
    }

    /**
    * Gets nonCompliantCount
    *  不合规数量
    *
    * @return int|null
    */
    public function getNonCompliantCount()
    {
        return $this->container['nonCompliantCount'];
    }

    /**
    * Sets nonCompliantCount
    *
    * @param int|null $nonCompliantCount 不合规数量
    *
    * @return $this
    */
    public function setNonCompliantCount($nonCompliantCount)
    {
        $this->container['nonCompliantCount'] = $nonCompliantCount;
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

