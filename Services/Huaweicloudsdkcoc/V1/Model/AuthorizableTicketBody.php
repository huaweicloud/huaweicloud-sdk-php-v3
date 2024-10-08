<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizableTicketBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizableTicketBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  可授权单类型
    * scopeId  scope ID，一般为region id
    * targetId  目标 ID，一般为应用id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'scopeId' => 'string',
            'targetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  可授权单类型
    * scopeId  scope ID，一般为region id
    * targetId  目标 ID，一般为应用id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'scopeId' => null,
        'targetId' => null
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
    * type  可授权单类型
    * scopeId  scope ID，一般为region id
    * targetId  目标 ID，一般为应用id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'scopeId' => 'scope_id',
            'targetId' => 'target_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  可授权单类型
    * scopeId  scope ID，一般为region id
    * targetId  目标 ID，一般为应用id
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'scopeId' => 'setScopeId',
            'targetId' => 'setTargetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  可授权单类型
    * scopeId  scope ID，一般为region id
    * targetId  目标 ID，一般为应用id
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'scopeId' => 'getScopeId',
            'targetId' => 'getTargetId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) > 255)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  可授权单类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 可授权单类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scopeId
    *  scope ID，一般为region id
    *
    * @return string|null
    */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
    * Sets scopeId
    *
    * @param string|null $scopeId scope ID，一般为region id
    *
    * @return $this
    */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;
        return $this;
    }

    /**
    * Gets targetId
    *  目标 ID，一般为应用id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 目标 ID，一般为应用id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
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

