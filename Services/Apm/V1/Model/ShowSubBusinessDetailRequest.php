<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubBusinessDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubBusinessDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subBusinessId  子应用id。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subBusinessId' => 'int',
            'xBusinessId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subBusinessId  子应用id。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subBusinessId' => 'int64',
        'xBusinessId' => 'int64'
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
    * subBusinessId  子应用id。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subBusinessId' => 'sub_business_id',
            'xBusinessId' => 'x-business-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subBusinessId  子应用id。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $setters = [
            'subBusinessId' => 'setSubBusinessId',
            'xBusinessId' => 'setXBusinessId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subBusinessId  子应用id。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $getters = [
            'subBusinessId' => 'getSubBusinessId',
            'xBusinessId' => 'getXBusinessId'
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
        $this->container['subBusinessId'] = isset($data['subBusinessId']) ? $data['subBusinessId'] : null;
        $this->container['xBusinessId'] = isset($data['xBusinessId']) ? $data['xBusinessId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subBusinessId'] === null) {
            $invalidProperties[] = "'subBusinessId' can't be null";
        }
        if ($this->container['xBusinessId'] === null) {
            $invalidProperties[] = "'xBusinessId' can't be null";
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
    * Gets subBusinessId
    *  子应用id。
    *
    * @return int
    */
    public function getSubBusinessId()
    {
        return $this->container['subBusinessId'];
    }

    /**
    * Sets subBusinessId
    *
    * @param int $subBusinessId 子应用id。
    *
    * @return $this
    */
    public function setSubBusinessId($subBusinessId)
    {
        $this->container['subBusinessId'] = $subBusinessId;
        return $this;
    }

    /**
    * Gets xBusinessId
    *  应用id。
    *
    * @return int
    */
    public function getXBusinessId()
    {
        return $this->container['xBusinessId'];
    }

    /**
    * Sets xBusinessId
    *
    * @param int $xBusinessId 应用id。
    *
    * @return $this
    */
    public function setXBusinessId($xBusinessId)
    {
        $this->container['xBusinessId'] = $xBusinessId;
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

