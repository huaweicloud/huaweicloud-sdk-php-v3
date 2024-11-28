<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateAliasRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateAliasRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alias  待关联别名
    * targetKeyId  待关联的密钥ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alias' => 'string',
            'targetKeyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alias  待关联别名
    * targetKeyId  待关联的密钥ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alias' => null,
        'targetKeyId' => null
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
    * alias  待关联别名
    * targetKeyId  待关联的密钥ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alias' => 'alias',
            'targetKeyId' => 'target_key_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alias  待关联别名
    * targetKeyId  待关联的密钥ID
    *
    * @var string[]
    */
    protected static $setters = [
            'alias' => 'setAlias',
            'targetKeyId' => 'setTargetKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alias  待关联别名
    * targetKeyId  待关联的密钥ID
    *
    * @var string[]
    */
    protected static $getters = [
            'alias' => 'getAlias',
            'targetKeyId' => 'getTargetKeyId'
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
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['targetKeyId'] = isset($data['targetKeyId']) ? $data['targetKeyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
        if ($this->container['targetKeyId'] === null) {
            $invalidProperties[] = "'targetKeyId' can't be null";
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
    * Gets alias
    *  待关联别名
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string $alias 待关联别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets targetKeyId
    *  待关联的密钥ID
    *
    * @return string
    */
    public function getTargetKeyId()
    {
        return $this->container['targetKeyId'];
    }

    /**
    * Sets targetKeyId
    *
    * @param string $targetKeyId 待关联的密钥ID
    *
    * @return $this
    */
    public function setTargetKeyId($targetKeyId)
    {
        $this->container['targetKeyId'] = $targetKeyId;
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

