<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncAddPersonnelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncAddPersonnelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addedIds  添加成功的ID
    * errorIds  添加失败的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addedIds' => 'string[]',
            'errorIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addedIds  添加成功的ID
    * errorIds  添加失败的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addedIds' => null,
        'errorIds' => null
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
    * addedIds  添加成功的ID
    * errorIds  添加失败的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addedIds' => 'added_ids',
            'errorIds' => 'error_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addedIds  添加成功的ID
    * errorIds  添加失败的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'addedIds' => 'setAddedIds',
            'errorIds' => 'setErrorIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addedIds  添加成功的ID
    * errorIds  添加失败的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'addedIds' => 'getAddedIds',
            'errorIds' => 'getErrorIds'
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
        $this->container['addedIds'] = isset($data['addedIds']) ? $data['addedIds'] : null;
        $this->container['errorIds'] = isset($data['errorIds']) ? $data['errorIds'] : null;
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
    * Gets addedIds
    *  添加成功的ID
    *
    * @return string[]|null
    */
    public function getAddedIds()
    {
        return $this->container['addedIds'];
    }

    /**
    * Sets addedIds
    *
    * @param string[]|null $addedIds 添加成功的ID
    *
    * @return $this
    */
    public function setAddedIds($addedIds)
    {
        $this->container['addedIds'] = $addedIds;
        return $this;
    }

    /**
    * Gets errorIds
    *  添加失败的ID
    *
    * @return string[]|null
    */
    public function getErrorIds()
    {
        return $this->container['errorIds'];
    }

    /**
    * Sets errorIds
    *
    * @param string[]|null $errorIds 添加失败的ID
    *
    * @return $this
    */
    public function setErrorIds($errorIds)
    {
        $this->container['errorIds'] = $errorIds;
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

