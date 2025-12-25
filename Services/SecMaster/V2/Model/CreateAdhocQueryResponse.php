<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAdhocQueryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAdhocQueryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateId  操作ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateId  操作ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateId' => null
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
    * operateId  操作ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateId' => 'operate_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateId  操作ID
    *
    * @var string[]
    */
    protected static $setters = [
            'operateId' => 'setOperateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateId  操作ID
    *
    * @var string[]
    */
    protected static $getters = [
            'operateId' => 'getOperateId'
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
        $this->container['operateId'] = isset($data['operateId']) ? $data['operateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operateId']) && (mb_strlen($this->container['operateId']) > 63)) {
                $invalidProperties[] = "invalid value for 'operateId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['operateId']) && (mb_strlen($this->container['operateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateId', the character length must be bigger than or equal to 1.";
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
    * Gets operateId
    *  操作ID
    *
    * @return string|null
    */
    public function getOperateId()
    {
        return $this->container['operateId'];
    }

    /**
    * Sets operateId
    *
    * @param string|null $operateId 操作ID
    *
    * @return $this
    */
    public function setOperateId($operateId)
    {
        $this->container['operateId'] = $operateId;
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

