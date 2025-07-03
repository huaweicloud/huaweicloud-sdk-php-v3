<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFlowDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFlowDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flowId  流id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flowId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flowId  流id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flowId' => null
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
    * flowId  流id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flowId' => 'flow_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flowId  流id
    *
    * @var string[]
    */
    protected static $setters = [
            'flowId' => 'setFlowId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flowId  流id
    *
    * @var string[]
    */
    protected static $getters = [
            'flowId' => 'getFlowId'
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
        $this->container['flowId'] = isset($data['flowId']) ? $data['flowId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flowId'] === null) {
            $invalidProperties[] = "'flowId' can't be null";
        }
            if ((mb_strlen($this->container['flowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'flowId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['flowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'flowId', the character length must be bigger than or equal to 1.";
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
    * Gets flowId
    *  流id
    *
    * @return string
    */
    public function getFlowId()
    {
        return $this->container['flowId'];
    }

    /**
    * Sets flowId
    *
    * @param string $flowId 流id
    *
    * @return $this
    */
    public function setFlowId($flowId)
    {
        $this->container['flowId'] = $flowId;
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

