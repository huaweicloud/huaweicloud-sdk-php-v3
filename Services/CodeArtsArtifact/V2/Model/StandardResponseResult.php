<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandardResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandardResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  符合条件的结果列表
    * totalRecords  符合条件的结果总数
    * totalPages  符合条件的结果总页数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ReleaseFileVersionDo[]',
            'totalRecords' => 'int',
            'totalPages' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  符合条件的结果列表
    * totalRecords  符合条件的结果总数
    * totalPages  符合条件的结果总页数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'totalRecords' => null,
        'totalPages' => null
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
    * data  符合条件的结果列表
    * totalRecords  符合条件的结果总数
    * totalPages  符合条件的结果总页数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'totalRecords' => 'total_records',
            'totalPages' => 'total_pages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  符合条件的结果列表
    * totalRecords  符合条件的结果总数
    * totalPages  符合条件的结果总页数
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'totalRecords' => 'setTotalRecords',
            'totalPages' => 'setTotalPages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  符合条件的结果列表
    * totalRecords  符合条件的结果总数
    * totalPages  符合条件的结果总页数
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'totalRecords' => 'getTotalRecords',
            'totalPages' => 'getTotalPages'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['totalPages'] = isset($data['totalPages']) ? $data['totalPages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalRecords']) && ($this->container['totalRecords'] > 1000)) {
                $invalidProperties[] = "invalid value for 'totalRecords', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['totalRecords']) && ($this->container['totalRecords'] < 1)) {
                $invalidProperties[] = "invalid value for 'totalRecords', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['totalPages']) && ($this->container['totalPages'] > 10000)) {
                $invalidProperties[] = "invalid value for 'totalPages', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['totalPages']) && ($this->container['totalPages'] < 1)) {
                $invalidProperties[] = "invalid value for 'totalPages', must be bigger than or equal to 1.";
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
    * Gets data
    *  符合条件的结果列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ReleaseFileVersionDo[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\ReleaseFileVersionDo[]|null $data 符合条件的结果列表
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets totalRecords
    *  符合条件的结果总数
    *
    * @return int|null
    */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
    * Sets totalRecords
    *
    * @param int|null $totalRecords 符合条件的结果总数
    *
    * @return $this
    */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
    * Gets totalPages
    *  符合条件的结果总页数
    *
    * @return int|null
    */
    public function getTotalPages()
    {
        return $this->container['totalPages'];
    }

    /**
    * Sets totalPages
    *
    * @param int|null $totalPages 符合条件的结果总页数
    *
    * @return $this
    */
    public function setTotalPages($totalPages)
    {
        $this->container['totalPages'] = $totalPages;
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

