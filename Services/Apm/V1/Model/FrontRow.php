<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrontRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrontRow';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cellList  数据单元集合。
    * filter  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    * header  是否是header信息。
    * txId  Url跟踪id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cellList' => '\HuaweiCloud\SDK\Apm\V1\Model\FrontCell[]',
            'filter' => 'string',
            'header' => 'bool',
            'txId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cellList  数据单元集合。
    * filter  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    * header  是否是header信息。
    * txId  Url跟踪id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cellList' => null,
        'filter' => null,
        'header' => null,
        'txId' => 'int64'
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
    * cellList  数据单元集合。
    * filter  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    * header  是否是header信息。
    * txId  Url跟踪id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cellList' => 'cell_list',
            'filter' => 'filter',
            'header' => 'header',
            'txId' => 'tx_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cellList  数据单元集合。
    * filter  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    * header  是否是header信息。
    * txId  Url跟踪id。
    *
    * @var string[]
    */
    protected static $setters = [
            'cellList' => 'setCellList',
            'filter' => 'setFilter',
            'header' => 'setHeader',
            'txId' => 'setTxId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cellList  数据单元集合。
    * filter  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    * header  是否是header信息。
    * txId  Url跟踪id。
    *
    * @var string[]
    */
    protected static $getters = [
            'cellList' => 'getCellList',
            'filter' => 'getFilter',
            'header' => 'getHeader',
            'txId' => 'getTxId'
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
        $this->container['cellList'] = isset($data['cellList']) ? $data['cellList'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['txId'] = isset($data['txId']) ? $data['txId'] : null;
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
    * Gets cellList
    *  数据单元集合。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\FrontCell[]|null
    */
    public function getCellList()
    {
        return $this->container['cellList'];
    }

    /**
    * Sets cellList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\FrontCell[]|null $cellList 数据单元集合。
    *
    * @return $this
    */
    public function setCellList($cellList)
    {
        $this->container['cellList'] = $cellList;
        return $this;
    }

    /**
    * Gets filter
    *  将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 将group by的字段拼接成过滤字符串，用于后续点网格点击使用。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets header
    *  是否是header信息。
    *
    * @return bool|null
    */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
    * Sets header
    *
    * @param bool|null $header 是否是header信息。
    *
    * @return $this
    */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }

    /**
    * Gets txId
    *  Url跟踪id。
    *
    * @return int|null
    */
    public function getTxId()
    {
        return $this->container['txId'];
    }

    /**
    * Sets txId
    *
    * @param int|null $txId Url跟踪id。
    *
    * @return $this
    */
    public function setTxId($txId)
    {
        $this->container['txId'] = $txId;
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

