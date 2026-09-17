<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMissingIndexDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMissingIndexDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * detailList  索引缺失明细列表
    * total  总数
    * collectTime  采集时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'detailList' => 'object[]',
            'total' => 'int',
            'collectTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * detailList  索引缺失明细列表
    * total  总数
    * collectTime  采集时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'detailList' => null,
        'total' => 'int64',
        'collectTime' => 'int64'
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
    * detailList  索引缺失明细列表
    * total  总数
    * collectTime  采集时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'detailList' => 'detail_list',
            'total' => 'total',
            'collectTime' => 'collect_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * detailList  索引缺失明细列表
    * total  总数
    * collectTime  采集时间
    *
    * @var string[]
    */
    protected static $setters = [
            'detailList' => 'setDetailList',
            'total' => 'setTotal',
            'collectTime' => 'setCollectTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * detailList  索引缺失明细列表
    * total  总数
    * collectTime  采集时间
    *
    * @var string[]
    */
    protected static $getters = [
            'detailList' => 'getDetailList',
            'total' => 'getTotal',
            'collectTime' => 'getCollectTime'
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
        $this->container['detailList'] = isset($data['detailList']) ? $data['detailList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
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
    * Gets detailList
    *  索引缺失明细列表
    *
    * @return object[]|null
    */
    public function getDetailList()
    {
        return $this->container['detailList'];
    }

    /**
    * Sets detailList
    *
    * @param object[]|null $detailList 索引缺失明细列表
    *
    * @return $this
    */
    public function setDetailList($detailList)
    {
        $this->container['detailList'] = $detailList;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets collectTime
    *  采集时间
    *
    * @return int|null
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int|null $collectTime 采集时间
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
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

