<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerBudgetRecordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerBudgetRecordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    * measureId  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    * currency  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    * recordList  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'measureId' => 'int',
            'currency' => 'string',
            'recordList' => '\HuaweiCloud\SDK\Bssintl\V2\Model\BudgetRecordInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    * measureId  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    * currency  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    * recordList  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'measureId' => 'int32',
        'currency' => null,
        'recordList' => null
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
    * totalCount  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    * measureId  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    * currency  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    * recordList  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'recordList' => 'record_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    * measureId  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    * currency  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    * recordList  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'recordList' => 'setRecordList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    * measureId  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    * currency  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    * recordList  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'recordList' => 'getRecordList'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['recordList'] = isset($data['recordList']) ? $data['recordList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] > 3)) {
                $invalidProperties[] = "invalid value for 'measureId', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] < 0)) {
                $invalidProperties[] = "invalid value for 'measureId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 10)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
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
    * Gets totalCount
    *  |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
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
    * @param int|null $totalCount |参数名称：返回总条数。| |参数的约束及描述：范围限制：0-2147483647|
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets measureId
    *  |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId |参数名称：金额单位。||参数的约束及描述：范围限制：0-3。1：元|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets currency
    *  |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency |参数名称：币种。||参数的约束及描述：范围限制：0-10。CNY：人民币，USD：美元|
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets recordList
    *  |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\BudgetRecordInfo[]|null
    */
    public function getRecordList()
    {
        return $this->container['recordList'];
    }

    /**
    * Sets recordList
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\BudgetRecordInfo[]|null $recordList |参数名称：客户预算设置记录列表。||参数的约束及描述：客户预算设置记录列表|
    *
    * @return $this
    */
    public function setRecordList($recordList)
    {
        $this->container['recordList'] = $recordList;
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

