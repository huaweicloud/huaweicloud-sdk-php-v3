<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IAMAgency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IAMAgency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trustPolicy  此策略的json格式策略文档。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trustPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trustPolicy  此策略的json格式策略文档。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trustPolicy' => null
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
    * trustPolicy  此策略的json格式策略文档。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trustPolicy' => 'trust_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trustPolicy  此策略的json格式策略文档。
    *
    * @var string[]
    */
    protected static $setters = [
            'trustPolicy' => 'setTrustPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trustPolicy  此策略的json格式策略文档。
    *
    * @var string[]
    */
    protected static $getters = [
            'trustPolicy' => 'getTrustPolicy'
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
        $this->container['trustPolicy'] = isset($data['trustPolicy']) ? $data['trustPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trustPolicy'] === null) {
            $invalidProperties[] = "'trustPolicy' can't be null";
        }
            if ((mb_strlen($this->container['trustPolicy']) > 131072)) {
                $invalidProperties[] = "invalid value for 'trustPolicy', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['trustPolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'trustPolicy', the character length must be bigger than or equal to 0.";
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
    * Gets trustPolicy
    *  此策略的json格式策略文档。
    *
    * @return string
    */
    public function getTrustPolicy()
    {
        return $this->container['trustPolicy'];
    }

    /**
    * Sets trustPolicy
    *
    * @param string $trustPolicy 此策略的json格式策略文档。
    *
    * @return $this
    */
    public function setTrustPolicy($trustPolicy)
    {
        $this->container['trustPolicy'] = $trustPolicy;
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

