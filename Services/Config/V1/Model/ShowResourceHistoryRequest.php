<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceHistoryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceHistoryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * limit  最大的返回数量
    * earlierTime  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    * laterTime  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    * chronologicalOrder  指定返回数据的时间顺序，默认为倒序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'marker' => 'string',
            'limit' => 'int',
            'earlierTime' => 'int',
            'laterTime' => 'int',
            'chronologicalOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * limit  最大的返回数量
    * earlierTime  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    * laterTime  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    * chronologicalOrder  指定返回数据的时间顺序，默认为倒序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'marker' => null,
        'limit' => 'int32',
        'earlierTime' => 'int64',
        'laterTime' => 'int64',
        'chronologicalOrder' => null
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
    * resourceId  资源ID
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * limit  最大的返回数量
    * earlierTime  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    * laterTime  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    * chronologicalOrder  指定返回数据的时间顺序，默认为倒序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'marker' => 'marker',
            'limit' => 'limit',
            'earlierTime' => 'earlier_time',
            'laterTime' => 'later_time',
            'chronologicalOrder' => 'chronological_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * limit  最大的返回数量
    * earlierTime  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    * laterTime  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    * chronologicalOrder  指定返回数据的时间顺序，默认为倒序
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'earlierTime' => 'setEarlierTime',
            'laterTime' => 'setLaterTime',
            'chronologicalOrder' => 'setChronologicalOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * limit  最大的返回数量
    * earlierTime  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    * laterTime  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    * chronologicalOrder  指定返回数据的时间顺序，默认为倒序
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'earlierTime' => 'getEarlierTime',
            'laterTime' => 'getLaterTime',
            'chronologicalOrder' => 'getChronologicalOrder'
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
    const CHRONOLOGICAL_ORDER_FORWARD = 'Forward';
    const CHRONOLOGICAL_ORDER_REVERSE = 'Reverse';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChronologicalOrderAllowableValues()
    {
        return [
            self::CHRONOLOGICAL_ORDER_FORWARD,
            self::CHRONOLOGICAL_ORDER_REVERSE,
        ];
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 200;
        $this->container['earlierTime'] = isset($data['earlierTime']) ? $data['earlierTime'] : null;
        $this->container['laterTime'] = isset($data['laterTime']) ? $data['laterTime'] : null;
        $this->container['chronologicalOrder'] = isset($data['chronologicalOrder']) ? $data['chronologicalOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 512.";
            }
            if (!preg_match("/[_.:\\w-]+/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[_.:\\w-]+/.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9+\/=%\\-_]+/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9+\/=%\\-_]+/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getChronologicalOrderAllowableValues();
                if (!is_null($this->container['chronologicalOrder']) && !in_array($this->container['chronologicalOrder'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chronologicalOrder', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets resourceId
    *  资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets earlierTime
    *  指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    *
    * @return int|null
    */
    public function getEarlierTime()
    {
        return $this->container['earlierTime'];
    }

    /**
    * Sets earlierTime
    *
    * @param int|null $earlierTime 指定查询范围的起始时间点，如果不设置此参数，默认为最早的时间
    *
    * @return $this
    */
    public function setEarlierTime($earlierTime)
    {
        $this->container['earlierTime'] = $earlierTime;
        return $this;
    }

    /**
    * Gets laterTime
    *  指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    *
    * @return int|null
    */
    public function getLaterTime()
    {
        return $this->container['laterTime'];
    }

    /**
    * Sets laterTime
    *
    * @param int|null $laterTime 指定查询范围的结束时间点，如果不设置此参数，默认为当前时间
    *
    * @return $this
    */
    public function setLaterTime($laterTime)
    {
        $this->container['laterTime'] = $laterTime;
        return $this;
    }

    /**
    * Gets chronologicalOrder
    *  指定返回数据的时间顺序，默认为倒序
    *
    * @return string|null
    */
    public function getChronologicalOrder()
    {
        return $this->container['chronologicalOrder'];
    }

    /**
    * Sets chronologicalOrder
    *
    * @param string|null $chronologicalOrder 指定返回数据的时间顺序，默认为倒序
    *
    * @return $this
    */
    public function setChronologicalOrder($chronologicalOrder)
    {
        $this->container['chronologicalOrder'] = $chronologicalOrder;
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

