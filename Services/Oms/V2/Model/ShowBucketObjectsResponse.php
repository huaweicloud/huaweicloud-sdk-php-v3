<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBucketObjectsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBucketObjectsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nextPage  是否存在下一页
    * nextMarker  查询下一页所需要的标记（此页末尾对象名，偏移量）
    * records  查询桶信息返回的record
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextPage' => 'bool',
            'nextMarker' => 'string',
            'records' => '\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextPage  是否存在下一页
    * nextMarker  查询下一页所需要的标记（此页末尾对象名，偏移量）
    * records  查询桶信息返回的record
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nextPage' => null,
        'nextMarker' => null,
        'records' => null
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
    * nextPage  是否存在下一页
    * nextMarker  查询下一页所需要的标记（此页末尾对象名，偏移量）
    * records  查询桶信息返回的record
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextPage' => 'next_page',
            'nextMarker' => 'next_marker',
            'records' => 'records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextPage  是否存在下一页
    * nextMarker  查询下一页所需要的标记（此页末尾对象名，偏移量）
    * records  查询桶信息返回的record
    *
    * @var string[]
    */
    protected static $setters = [
            'nextPage' => 'setNextPage',
            'nextMarker' => 'setNextMarker',
            'records' => 'setRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextPage  是否存在下一页
    * nextMarker  查询下一页所需要的标记（此页末尾对象名，偏移量）
    * records  查询桶信息返回的record
    *
    * @var string[]
    */
    protected static $getters = [
            'nextPage' => 'getNextPage',
            'nextMarker' => 'getNextMarker',
            'records' => 'getRecords'
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
        $this->container['nextPage'] = isset($data['nextPage']) ? $data['nextPage'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) > 1024)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) < 0)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be bigger than or equal to 0.";
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
    * Gets nextPage
    *  是否存在下一页
    *
    * @return bool|null
    */
    public function getNextPage()
    {
        return $this->container['nextPage'];
    }

    /**
    * Sets nextPage
    *
    * @param bool|null $nextPage 是否存在下一页
    *
    * @return $this
    */
    public function setNextPage($nextPage)
    {
        $this->container['nextPage'] = $nextPage;
        return $this;
    }

    /**
    * Gets nextMarker
    *  查询下一页所需要的标记（此页末尾对象名，偏移量）
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 查询下一页所需要的标记（此页末尾对象名，偏移量）
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets records
    *  查询桶信息返回的record
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\ShowBucketRecord[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\ShowBucketRecord[]|null $records 查询桶信息返回的record
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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

