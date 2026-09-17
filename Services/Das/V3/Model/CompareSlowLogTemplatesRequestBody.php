<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareSlowLogTemplatesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareSlowLogTemplatesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * curPage  页码
    * perPage  每页记录数
    * comparativeStartTime  对比日期开始时间（Unix timestamp），单位：毫秒
    * comparativeEndTime  对比日期结束时间（Unix timestamp），单位：毫秒
    * baseLineStartTime  基线日期开始时间（Unix timestamp），单位：毫秒
    * baseLineEndTime  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'curPage' => 'int',
            'perPage' => 'int',
            'comparativeStartTime' => 'int',
            'comparativeEndTime' => 'int',
            'baseLineStartTime' => 'int',
            'baseLineEndTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * curPage  页码
    * perPage  每页记录数
    * comparativeStartTime  对比日期开始时间（Unix timestamp），单位：毫秒
    * comparativeEndTime  对比日期结束时间（Unix timestamp），单位：毫秒
    * baseLineStartTime  基线日期开始时间（Unix timestamp），单位：毫秒
    * baseLineEndTime  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'curPage' => 'int32',
        'perPage' => 'int32',
        'comparativeStartTime' => 'int64',
        'comparativeEndTime' => 'int64',
        'baseLineStartTime' => 'int64',
        'baseLineEndTime' => 'int64'
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
    * curPage  页码
    * perPage  每页记录数
    * comparativeStartTime  对比日期开始时间（Unix timestamp），单位：毫秒
    * comparativeEndTime  对比日期结束时间（Unix timestamp），单位：毫秒
    * baseLineStartTime  基线日期开始时间（Unix timestamp），单位：毫秒
    * baseLineEndTime  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'curPage' => 'cur_page',
            'perPage' => 'per_page',
            'comparativeStartTime' => 'comparative_start_time',
            'comparativeEndTime' => 'comparative_end_time',
            'baseLineStartTime' => 'base_line_start_time',
            'baseLineEndTime' => 'base_line_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * curPage  页码
    * perPage  每页记录数
    * comparativeStartTime  对比日期开始时间（Unix timestamp），单位：毫秒
    * comparativeEndTime  对比日期结束时间（Unix timestamp），单位：毫秒
    * baseLineStartTime  基线日期开始时间（Unix timestamp），单位：毫秒
    * baseLineEndTime  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage',
            'comparativeStartTime' => 'setComparativeStartTime',
            'comparativeEndTime' => 'setComparativeEndTime',
            'baseLineStartTime' => 'setBaseLineStartTime',
            'baseLineEndTime' => 'setBaseLineEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * curPage  页码
    * perPage  每页记录数
    * comparativeStartTime  对比日期开始时间（Unix timestamp），单位：毫秒
    * comparativeEndTime  对比日期结束时间（Unix timestamp），单位：毫秒
    * baseLineStartTime  基线日期开始时间（Unix timestamp），单位：毫秒
    * baseLineEndTime  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage',
            'comparativeStartTime' => 'getComparativeStartTime',
            'comparativeEndTime' => 'getComparativeEndTime',
            'baseLineStartTime' => 'getBaseLineStartTime',
            'baseLineEndTime' => 'getBaseLineEndTime'
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
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['comparativeStartTime'] = isset($data['comparativeStartTime']) ? $data['comparativeStartTime'] : null;
        $this->container['comparativeEndTime'] = isset($data['comparativeEndTime']) ? $data['comparativeEndTime'] : null;
        $this->container['baseLineStartTime'] = isset($data['baseLineStartTime']) ? $data['baseLineStartTime'] : null;
        $this->container['baseLineEndTime'] = isset($data['baseLineEndTime']) ? $data['baseLineEndTime'] : null;
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
    * Gets curPage
    *  页码
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  每页记录数
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 每页记录数
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets comparativeStartTime
    *  对比日期开始时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getComparativeStartTime()
    {
        return $this->container['comparativeStartTime'];
    }

    /**
    * Sets comparativeStartTime
    *
    * @param int|null $comparativeStartTime 对比日期开始时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setComparativeStartTime($comparativeStartTime)
    {
        $this->container['comparativeStartTime'] = $comparativeStartTime;
        return $this;
    }

    /**
    * Gets comparativeEndTime
    *  对比日期结束时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getComparativeEndTime()
    {
        return $this->container['comparativeEndTime'];
    }

    /**
    * Sets comparativeEndTime
    *
    * @param int|null $comparativeEndTime 对比日期结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setComparativeEndTime($comparativeEndTime)
    {
        $this->container['comparativeEndTime'] = $comparativeEndTime;
        return $this;
    }

    /**
    * Gets baseLineStartTime
    *  基线日期开始时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getBaseLineStartTime()
    {
        return $this->container['baseLineStartTime'];
    }

    /**
    * Sets baseLineStartTime
    *
    * @param int|null $baseLineStartTime 基线日期开始时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setBaseLineStartTime($baseLineStartTime)
    {
        $this->container['baseLineStartTime'] = $baseLineStartTime;
        return $this;
    }

    /**
    * Gets baseLineEndTime
    *  基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getBaseLineEndTime()
    {
        return $this->container['baseLineEndTime'];
    }

    /**
    * Sets baseLineEndTime
    *
    * @param int|null $baseLineEndTime 基线日期结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setBaseLineEndTime($baseLineEndTime)
    {
        $this->container['baseLineEndTime'] = $baseLineEndTime;
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

