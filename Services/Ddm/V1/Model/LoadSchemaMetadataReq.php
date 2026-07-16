<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadSchemaMetadataReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadSchemaMetadataReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compressedDatabasesInfo' => 'string',
            'dnInstance' => '\HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compressedDatabasesInfo' => null,
        'dnInstance' => null
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
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compressedDatabasesInfo' => 'compressed_databases_info',
            'dnInstance' => 'dn_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'compressedDatabasesInfo' => 'setCompressedDatabasesInfo',
            'dnInstance' => 'setDnInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'compressedDatabasesInfo' => 'getCompressedDatabasesInfo',
            'dnInstance' => 'getDnInstance'
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
        $this->container['compressedDatabasesInfo'] = isset($data['compressedDatabasesInfo']) ? $data['compressedDatabasesInfo'] : null;
        $this->container['dnInstance'] = isset($data['dnInstance']) ? $data['dnInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['compressedDatabasesInfo'] === null) {
            $invalidProperties[] = "'compressedDatabasesInfo' can't be null";
        }
            if ((mb_strlen($this->container['compressedDatabasesInfo']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['compressedDatabasesInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dnInstance'] === null) {
            $invalidProperties[] = "'dnInstance' can't be null";
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
    * Gets compressedDatabasesInfo
    *  逻辑库信息。
    *
    * @return string
    */
    public function getCompressedDatabasesInfo()
    {
        return $this->container['compressedDatabasesInfo'];
    }

    /**
    * Sets compressedDatabasesInfo
    *
    * @param string $compressedDatabasesInfo 逻辑库信息。
    *
    * @return $this
    */
    public function setCompressedDatabasesInfo($compressedDatabasesInfo)
    {
        $this->container['compressedDatabasesInfo'] = $compressedDatabasesInfo;
        return $this;
    }

    /**
    * Gets dnInstance
    *  关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[]
    */
    public function getDnInstance()
    {
        return $this->container['dnInstance'];
    }

    /**
    * Sets dnInstance
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[] $dnInstance 关联的后端DN信息。
    *
    * @return $this
    */
    public function setDnInstance($dnInstance)
    {
        $this->container['dnInstance'] = $dnInstance;
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

