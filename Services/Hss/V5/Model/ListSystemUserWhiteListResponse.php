<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSystemUserWhiteListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSystemUserWhiteListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  总数
    * remainNum  可继续添加的白名单数量
    * limitNum  白名单数量上限
    * dataList  系统用户白名单详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'remainNum' => 'int',
            'limitNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\SystemUserWhiteListResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  总数
    * remainNum  可继续添加的白名单数量
    * limitNum  白名单数量上限
    * dataList  系统用户白名单详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'remainNum' => 'int32',
        'limitNum' => 'int32',
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
    * totalNum  总数
    * remainNum  可继续添加的白名单数量
    * limitNum  白名单数量上限
    * dataList  系统用户白名单详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'remainNum' => 'remain_num',
            'limitNum' => 'limit_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  总数
    * remainNum  可继续添加的白名单数量
    * limitNum  白名单数量上限
    * dataList  系统用户白名单详情
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'remainNum' => 'setRemainNum',
            'limitNum' => 'setLimitNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  总数
    * remainNum  可继续添加的白名单数量
    * limitNum  白名单数量上限
    * dataList  系统用户白名单详情
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'remainNum' => 'getRemainNum',
            'limitNum' => 'getLimitNum',
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['remainNum'] = isset($data['remainNum']) ? $data['remainNum'] : null;
        $this->container['limitNum'] = isset($data['limitNum']) ? $data['limitNum'] : null;
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
    *  总数
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
    * @param int|null $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets remainNum
    *  可继续添加的白名单数量
    *
    * @return int|null
    */
    public function getRemainNum()
    {
        return $this->container['remainNum'];
    }

    /**
    * Sets remainNum
    *
    * @param int|null $remainNum 可继续添加的白名单数量
    *
    * @return $this
    */
    public function setRemainNum($remainNum)
    {
        $this->container['remainNum'] = $remainNum;
        return $this;
    }

    /**
    * Gets limitNum
    *  白名单数量上限
    *
    * @return int|null
    */
    public function getLimitNum()
    {
        return $this->container['limitNum'];
    }

    /**
    * Sets limitNum
    *
    * @param int|null $limitNum 白名单数量上限
    *
    * @return $this
    */
    public function setLimitNum($limitNum)
    {
        $this->container['limitNum'] = $limitNum;
        return $this;
    }

    /**
    * Gets dataList
    *  系统用户白名单详情
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SystemUserWhiteListResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SystemUserWhiteListResponseInfo[]|null $dataList 系统用户白名单详情
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

