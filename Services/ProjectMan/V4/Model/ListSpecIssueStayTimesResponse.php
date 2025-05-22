<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSpecIssueStayTimesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSpecIssueStayTimesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fails  计算失败的工作项id,一般指未关闭的工作项
    * data  工作项时间数据（创建时间-关闭时间）
    * totalStayTime  停留时间求和（单位：秒）
    * total  停留时间求和的工作项个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fails' => 'string[]',
            'data' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ListSpecIssueStayTimesResponseBodyData[]',
            'totalStayTime' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fails  计算失败的工作项id,一般指未关闭的工作项
    * data  工作项时间数据（创建时间-关闭时间）
    * totalStayTime  停留时间求和（单位：秒）
    * total  停留时间求和的工作项个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fails' => null,
        'data' => null,
        'totalStayTime' => 'int64',
        'total' => 'int32'
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
    * fails  计算失败的工作项id,一般指未关闭的工作项
    * data  工作项时间数据（创建时间-关闭时间）
    * totalStayTime  停留时间求和（单位：秒）
    * total  停留时间求和的工作项个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fails' => 'fails',
            'data' => 'data',
            'totalStayTime' => 'total_stay_time',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fails  计算失败的工作项id,一般指未关闭的工作项
    * data  工作项时间数据（创建时间-关闭时间）
    * totalStayTime  停留时间求和（单位：秒）
    * total  停留时间求和的工作项个数
    *
    * @var string[]
    */
    protected static $setters = [
            'fails' => 'setFails',
            'data' => 'setData',
            'totalStayTime' => 'setTotalStayTime',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fails  计算失败的工作项id,一般指未关闭的工作项
    * data  工作项时间数据（创建时间-关闭时间）
    * totalStayTime  停留时间求和（单位：秒）
    * total  停留时间求和的工作项个数
    *
    * @var string[]
    */
    protected static $getters = [
            'fails' => 'getFails',
            'data' => 'getData',
            'totalStayTime' => 'getTotalStayTime',
            'total' => 'getTotal'
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
        $this->container['fails'] = isset($data['fails']) ? $data['fails'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['totalStayTime'] = isset($data['totalStayTime']) ? $data['totalStayTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets fails
    *  计算失败的工作项id,一般指未关闭的工作项
    *
    * @return string[]|null
    */
    public function getFails()
    {
        return $this->container['fails'];
    }

    /**
    * Sets fails
    *
    * @param string[]|null $fails 计算失败的工作项id,一般指未关闭的工作项
    *
    * @return $this
    */
    public function setFails($fails)
    {
        $this->container['fails'] = $fails;
        return $this;
    }

    /**
    * Gets data
    *  工作项时间数据（创建时间-关闭时间）
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ListSpecIssueStayTimesResponseBodyData[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ListSpecIssueStayTimesResponseBodyData[]|null $data 工作项时间数据（创建时间-关闭时间）
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets totalStayTime
    *  停留时间求和（单位：秒）
    *
    * @return int|null
    */
    public function getTotalStayTime()
    {
        return $this->container['totalStayTime'];
    }

    /**
    * Sets totalStayTime
    *
    * @param int|null $totalStayTime 停留时间求和（单位：秒）
    *
    * @return $this
    */
    public function setTotalStayTime($totalStayTime)
    {
        $this->container['totalStayTime'] = $totalStayTime;
        return $this;
    }

    /**
    * Gets total
    *  停留时间求和的工作项个数
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
    * @param int|null $total 停留时间求和的工作项个数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

