<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecordsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecords_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pagination  pagination
    * data  工程构建记录列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pagination' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsResultPagination',
            'data' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pagination  pagination
    * data  工程构建记录列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pagination' => null,
        'data' => null
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
    * pagination  pagination
    * data  工程构建记录列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pagination' => 'pagination',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pagination  pagination
    * data  工程构建记录列表
    *
    * @var string[]
    */
    protected static $setters = [
            'pagination' => 'setPagination',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pagination  pagination
    * data  工程构建记录列表
    *
    * @var string[]
    */
    protected static $getters = [
            'pagination' => 'getPagination',
            'data' => 'getData'
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
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    * Gets pagination
    *  pagination
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsResultPagination|null
    */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
    * Sets pagination
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListRecordsResultPagination|null $pagination pagination
    *
    * @return $this
    */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;
        return $this;
    }

    /**
    * Gets data
    *  工程构建记录列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecord[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecord[]|null $data 工程构建记录列表
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

