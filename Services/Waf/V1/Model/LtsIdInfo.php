<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsIdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsIdInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ltsGroupId  日志组id
    * ltsAccessStreamId  访问日志流id
    * ltsAttackStreamId  攻击日志流id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ltsGroupId' => 'string',
            'ltsAccessStreamId' => 'string',
            'ltsAttackStreamId' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ltsGroupId  日志组id
    * ltsAccessStreamId  访问日志流id
    * ltsAttackStreamId  攻击日志流id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ltsGroupId' => null,
        'ltsAccessStreamId' => null,
        'ltsAttackStreamId' => null
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
    * ltsGroupId  日志组id
    * ltsAccessStreamId  访问日志流id
    * ltsAttackStreamId  攻击日志流id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ltsGroupId' => 'ltsGroupId',
            'ltsAccessStreamId' => 'ltsAccessStreamID',
            'ltsAttackStreamId' => 'ltsAttackStreamID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ltsGroupId  日志组id
    * ltsAccessStreamId  访问日志流id
    * ltsAttackStreamId  攻击日志流id
    *
    * @var string[]
    */
    protected static $setters = [
            'ltsGroupId' => 'setLtsGroupId',
            'ltsAccessStreamId' => 'setLtsAccessStreamId',
            'ltsAttackStreamId' => 'setLtsAttackStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ltsGroupId  日志组id
    * ltsAccessStreamId  访问日志流id
    * ltsAttackStreamId  攻击日志流id
    *
    * @var string[]
    */
    protected static $getters = [
            'ltsGroupId' => 'getLtsGroupId',
            'ltsAccessStreamId' => 'getLtsAccessStreamId',
            'ltsAttackStreamId' => 'getLtsAttackStreamId'
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
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsAccessStreamId'] = isset($data['ltsAccessStreamId']) ? $data['ltsAccessStreamId'] : null;
        $this->container['ltsAttackStreamId'] = isset($data['ltsAttackStreamId']) ? $data['ltsAttackStreamId'] : null;
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
    * Gets ltsGroupId
    *  日志组id
    *
    * @return string|null
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string|null $ltsGroupId 日志组id
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsAccessStreamId
    *  访问日志流id
    *
    * @return string|null
    */
    public function getLtsAccessStreamId()
    {
        return $this->container['ltsAccessStreamId'];
    }

    /**
    * Sets ltsAccessStreamId
    *
    * @param string|null $ltsAccessStreamId 访问日志流id
    *
    * @return $this
    */
    public function setLtsAccessStreamId($ltsAccessStreamId)
    {
        $this->container['ltsAccessStreamId'] = $ltsAccessStreamId;
        return $this;
    }

    /**
    * Gets ltsAttackStreamId
    *  攻击日志流id
    *
    * @return object|null
    */
    public function getLtsAttackStreamId()
    {
        return $this->container['ltsAttackStreamId'];
    }

    /**
    * Sets ltsAttackStreamId
    *
    * @param object|null $ltsAttackStreamId 攻击日志流id
    *
    * @return $this
    */
    public function setLtsAttackStreamId($ltsAttackStreamId)
    {
        $this->container['ltsAttackStreamId'] = $ltsAttackStreamId;
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

