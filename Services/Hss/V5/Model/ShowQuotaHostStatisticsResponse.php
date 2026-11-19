<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQuotaHostStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQuotaHostStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostTotalNum  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostTotalNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\QuotaHostStatistics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostTotalNum  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostTotalNum' => 'int32',
        'dataList' => null
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
    * hostTotalNum  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostTotalNum' => 'host_total_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostTotalNum  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @var string[]
    */
    protected static $setters = [
            'hostTotalNum' => 'setHostTotalNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostTotalNum  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    * dataList  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @var string[]
    */
    protected static $getters = [
            'hostTotalNum' => 'getHostTotalNum',
            'dataList' => 'getDataList'
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
        $this->container['hostTotalNum'] = isset($data['hostTotalNum']) ? $data['hostTotalNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
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
    * Gets hostTotalNum
    *  **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHostTotalNum()
    {
        return $this->container['hostTotalNum'];
    }

    /**
    * Sets hostTotalNum
    *
    * @param int|null $hostTotalNum **参数解释**: 主机总数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHostTotalNum($hostTotalNum)
    {
        $this->container['hostTotalNum'] = $hostTotalNum;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\QuotaHostStatistics[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\QuotaHostStatistics[]|null $dataList **参数解释**: 配额信息列表，包含各版本的配额统计 **取值范围**: 0-200个QuotaHostStatistics对象
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

