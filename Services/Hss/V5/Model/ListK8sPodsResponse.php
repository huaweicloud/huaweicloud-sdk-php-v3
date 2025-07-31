<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListK8sPodsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListK8sPodsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  pod总数
    * dataList  pod列表
    * podInfoList  实例基本信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\PodBaseInfo[]',
            'podInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerlessPodInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  pod总数
    * dataList  pod列表
    * podInfoList  实例基本信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int64',
        'dataList' => null,
        'podInfoList' => null
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
    * totalNum  pod总数
    * dataList  pod列表
    * podInfoList  实例基本信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'dataList' => 'data_list',
            'podInfoList' => 'pod_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  pod总数
    * dataList  pod列表
    * podInfoList  实例基本信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'dataList' => 'setDataList',
            'podInfoList' => 'setPodInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  pod总数
    * dataList  pod列表
    * podInfoList  实例基本信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'dataList' => 'getDataList',
            'podInfoList' => 'getPodInfoList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['podInfoList'] = isset($data['podInfoList']) ? $data['podInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  pod总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum pod总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets dataList
    *  pod列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PodBaseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PodBaseInfo[]|null $dataList pod列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets podInfoList
    *  实例基本信息列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerlessPodInfo[]|null
    */
    public function getPodInfoList()
    {
        return $this->container['podInfoList'];
    }

    /**
    * Sets podInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerlessPodInfo[]|null $podInfoList 实例基本信息列表
    *
    * @return $this
    */
    public function setPodInfoList($podInfoList)
    {
        $this->container['podInfoList'] = $podInfoList;
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

