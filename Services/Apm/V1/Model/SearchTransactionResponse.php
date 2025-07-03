<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchTransactionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchTransactionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * txItemList  URL跟踪视图列表。
    * latestTime  最后响应时间。
    * totalCount  总数据条数。
    * resultId  请求id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'txItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\TxItemVo[]',
            'latestTime' => 'int',
            'totalCount' => 'int',
            'resultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * txItemList  URL跟踪视图列表。
    * latestTime  最后响应时间。
    * totalCount  总数据条数。
    * resultId  请求id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'txItemList' => null,
        'latestTime' => 'int64',
        'totalCount' => 'int32',
        'resultId' => null
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
    * txItemList  URL跟踪视图列表。
    * latestTime  最后响应时间。
    * totalCount  总数据条数。
    * resultId  请求id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'txItemList' => 'tx_item_list',
            'latestTime' => 'latest_time',
            'totalCount' => 'total_count',
            'resultId' => 'result_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * txItemList  URL跟踪视图列表。
    * latestTime  最后响应时间。
    * totalCount  总数据条数。
    * resultId  请求id。
    *
    * @var string[]
    */
    protected static $setters = [
            'txItemList' => 'setTxItemList',
            'latestTime' => 'setLatestTime',
            'totalCount' => 'setTotalCount',
            'resultId' => 'setResultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * txItemList  URL跟踪视图列表。
    * latestTime  最后响应时间。
    * totalCount  总数据条数。
    * resultId  请求id。
    *
    * @var string[]
    */
    protected static $getters = [
            'txItemList' => 'getTxItemList',
            'latestTime' => 'getLatestTime',
            'totalCount' => 'getTotalCount',
            'resultId' => 'getResultId'
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
        $this->container['txItemList'] = isset($data['txItemList']) ? $data['txItemList'] : null;
        $this->container['latestTime'] = isset($data['latestTime']) ? $data['latestTime'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
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
    * Gets txItemList
    *  URL跟踪视图列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TxItemVo[]|null
    */
    public function getTxItemList()
    {
        return $this->container['txItemList'];
    }

    /**
    * Sets txItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TxItemVo[]|null $txItemList URL跟踪视图列表。
    *
    * @return $this
    */
    public function setTxItemList($txItemList)
    {
        $this->container['txItemList'] = $txItemList;
        return $this;
    }

    /**
    * Gets latestTime
    *  最后响应时间。
    *
    * @return int|null
    */
    public function getLatestTime()
    {
        return $this->container['latestTime'];
    }

    /**
    * Sets latestTime
    *
    * @param int|null $latestTime 最后响应时间。
    *
    * @return $this
    */
    public function setLatestTime($latestTime)
    {
        $this->container['latestTime'] = $latestTime;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数据条数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数据条数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets resultId
    *  请求id。
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId 请求id。
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
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

