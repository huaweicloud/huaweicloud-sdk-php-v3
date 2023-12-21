<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetailHaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail_ha_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * haId  主备ID。
    * instanceType  实例类型。 - master：主 - slave：备
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'haId' => 'string',
            'instanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * haId  主备ID。
    * instanceType  实例类型。 - master：主 - slave：备
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'haId' => null,
        'instanceType' => null
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
    * haId  主备ID。
    * instanceType  实例类型。 - master：主 - slave：备
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'haId' => 'ha_id',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * haId  主备ID。
    * instanceType  实例类型。 - master：主 - slave：备
    *
    * @var string[]
    */
    protected static $setters = [
            'haId' => 'setHaId',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * haId  主备ID。
    * instanceType  实例类型。 - master：主 - slave：备
    *
    * @var string[]
    */
    protected static $getters = [
            'haId' => 'getHaId',
            'instanceType' => 'getInstanceType'
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
        $this->container['haId'] = isset($data['haId']) ? $data['haId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['haId'] === null) {
            $invalidProperties[] = "'haId' can't be null";
        }
            if ((mb_strlen($this->container['haId']) > 36)) {
                $invalidProperties[] = "invalid value for 'haId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['haId']) < 0)) {
                $invalidProperties[] = "invalid value for 'haId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            if ((mb_strlen($this->container['instanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
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
    * Gets haId
    *  主备ID。
    *
    * @return string
    */
    public function getHaId()
    {
        return $this->container['haId'];
    }

    /**
    * Sets haId
    *
    * @param string $haId 主备ID。
    *
    * @return $this
    */
    public function setHaId($haId)
    {
        $this->container['haId'] = $haId;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型。 - master：主 - slave：备
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 实例类型。 - master：主 - slave：备
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

