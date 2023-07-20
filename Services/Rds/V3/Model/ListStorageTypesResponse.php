<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStorageTypesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStorageTypesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storageType  实例磁盘类型信息。
    * dsspoolInfo  实例专属存储信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storageType' => '\HuaweiCloud\SDK\Rds\V3\Model\Storage[]',
            'dsspoolInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\DssPoolInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storageType  实例磁盘类型信息。
    * dsspoolInfo  实例专属存储信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storageType' => null,
        'dsspoolInfo' => null
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
    * storageType  实例磁盘类型信息。
    * dsspoolInfo  实例专属存储信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storageType' => 'storage_type',
            'dsspoolInfo' => 'dsspool_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storageType  实例磁盘类型信息。
    * dsspoolInfo  实例专属存储信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'storageType' => 'setStorageType',
            'dsspoolInfo' => 'setDsspoolInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storageType  实例磁盘类型信息。
    * dsspoolInfo  实例专属存储信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'storageType' => 'getStorageType',
            'dsspoolInfo' => 'getDsspoolInfo'
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
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['dsspoolInfo'] = isset($data['dsspoolInfo']) ? $data['dsspoolInfo'] : null;
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
    * Gets storageType
    *  实例磁盘类型信息。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Storage[]|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Storage[]|null $storageType 实例磁盘类型信息。
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets dsspoolInfo
    *  实例专属存储信息。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DssPoolInfo[]|null
    */
    public function getDsspoolInfo()
    {
        return $this->container['dsspoolInfo'];
    }

    /**
    * Sets dsspoolInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DssPoolInfo[]|null $dsspoolInfo 实例专属存储信息。
    *
    * @return $this
    */
    public function setDsspoolInfo($dsspoolInfo)
    {
        $this->container['dsspoolInfo'] = $dsspoolInfo;
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

