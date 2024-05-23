<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BigKeysInfoResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BigKeysInfoResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  大Key所在的DB。
    * keyType  大Key类型。
    * keyName  大Key名。
    * keySize  大Key的长度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'int',
            'keyType' => 'string',
            'keyName' => 'string',
            'keySize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  大Key所在的DB。
    * keyType  大Key类型。
    * keyName  大Key名。
    * keySize  大Key的长度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => 'int32',
        'keyType' => null,
        'keyName' => null,
        'keySize' => null
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
    * dbId  大Key所在的DB。
    * keyType  大Key类型。
    * keyName  大Key名。
    * keySize  大Key的长度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'keyType' => 'key_type',
            'keyName' => 'key_name',
            'keySize' => 'key_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  大Key所在的DB。
    * keyType  大Key类型。
    * keyName  大Key名。
    * keySize  大Key的长度。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'keyType' => 'setKeyType',
            'keyName' => 'setKeyName',
            'keySize' => 'setKeySize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  大Key所在的DB。
    * keyType  大Key类型。
    * keyName  大Key名。
    * keySize  大Key的长度。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'keyType' => 'getKeyType',
            'keyName' => 'getKeyName',
            'keySize' => 'getKeySize'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['keySize'] = isset($data['keySize']) ? $data['keySize'] : null;
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
    * Gets dbId
    *  大Key所在的DB。
    *
    * @return int|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param int|null $dbId 大Key所在的DB。
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets keyType
    *  大Key类型。
    *
    * @return string|null
    */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
    * Sets keyType
    *
    * @param string|null $keyType 大Key类型。
    *
    * @return $this
    */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;
        return $this;
    }

    /**
    * Gets keyName
    *  大Key名。
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 大Key名。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets keySize
    *  大Key的长度。
    *
    * @return int|null
    */
    public function getKeySize()
    {
        return $this->container['keySize'];
    }

    /**
    * Sets keySize
    *
    * @param int|null $keySize 大Key的长度。
    *
    * @return $this
    */
    public function setKeySize($keySize)
    {
        $this->container['keySize'] = $keySize;
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

