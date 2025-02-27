<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relativeResourceId  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    * relativeType  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relativeResourceId' => 'string',
            'relativeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relativeResourceId  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    * relativeType  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relativeResourceId' => null,
        'relativeType' => null
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
    * relativeResourceId  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    * relativeType  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relativeResourceId' => 'relative_resource_id',
            'relativeType' => 'relative_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relativeResourceId  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    * relativeType  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @var string[]
    */
    protected static $setters = [
            'relativeResourceId' => 'setRelativeResourceId',
            'relativeType' => 'setRelativeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relativeResourceId  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    * relativeType  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @var string[]
    */
    protected static $getters = [
            'relativeResourceId' => 'getRelativeResourceId',
            'relativeType' => 'getRelativeType'
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
        $this->container['relativeResourceId'] = isset($data['relativeResourceId']) ? $data['relativeResourceId'] : null;
        $this->container['relativeType'] = isset($data['relativeType']) ? $data['relativeType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['relativeResourceId']) && (mb_strlen($this->container['relativeResourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'relativeResourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['relativeResourceId']) && (mb_strlen($this->container['relativeResourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'relativeResourceId', the character length must be bigger than or equal to 0.";
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
    * Gets relativeResourceId
    *  |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    *
    * @return string|null
    */
    public function getRelativeResourceId()
    {
        return $this->container['relativeResourceId'];
    }

    /**
    * Sets relativeResourceId
    *
    * @param string|null $relativeResourceId |参数名称：关联资源ID。| |参数约束及描述：关联资源ID。|
    *
    * @return $this
    */
    public function setRelativeResourceId($relativeResourceId)
    {
        $this->container['relativeResourceId'] = $relativeResourceId;
        return $this;
    }

    /**
    * Gets relativeType
    *  |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @return string|null
    */
    public function getRelativeType()
    {
        return $this->container['relativeType'];
    }

    /**
    * Sets relativeType
    *
    * @param string|null $relativeType |参数名称：关联资源类型。| |参数约束及描述：关联资源类型，父资源：PARENT；根资源：ROOT|
    *
    * @return $this
    */
    public function setRelativeType($relativeType)
    {
        $this->container['relativeType'] = $relativeType;
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

