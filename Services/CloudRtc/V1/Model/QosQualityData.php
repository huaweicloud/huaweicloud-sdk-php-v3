<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosQualityData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosQualityData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  用户id
    * peerid  对端的用户ID，为0时表示本端上行数据
    * mid  指标ID
    * data  时间戳及相应时间的指标数值列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'peerid' => 'string',
            'mid' => 'string',
            'data' => '\HuaweiCloud\SDK\CloudRTC\V1\Model\TimeFloatValueData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  用户id
    * peerid  对端的用户ID，为0时表示本端上行数据
    * mid  指标ID
    * data  时间戳及相应时间的指标数值列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'peerid' => null,
        'mid' => null,
        'data' => null
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
    * uid  用户id
    * peerid  对端的用户ID，为0时表示本端上行数据
    * mid  指标ID
    * data  时间戳及相应时间的指标数值列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'peerid' => 'peerid',
            'mid' => 'mid',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  用户id
    * peerid  对端的用户ID，为0时表示本端上行数据
    * mid  指标ID
    * data  时间戳及相应时间的指标数值列表
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'peerid' => 'setPeerid',
            'mid' => 'setMid',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  用户id
    * peerid  对端的用户ID，为0时表示本端上行数据
    * mid  指标ID
    * data  时间戳及相应时间的指标数值列表
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'peerid' => 'getPeerid',
            'mid' => 'getMid',
            'data' => 'getData'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['peerid'] = isset($data['peerid']) ? $data['peerid'] : null;
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) > 256)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['peerid']) && (mb_strlen($this->container['peerid']) > 256)) {
                $invalidProperties[] = "invalid value for 'peerid', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['peerid']) && (mb_strlen($this->container['peerid']) < 1)) {
                $invalidProperties[] = "invalid value for 'peerid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mid']) && (mb_strlen($this->container['mid']) > 256)) {
                $invalidProperties[] = "invalid value for 'mid', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mid']) && (mb_strlen($this->container['mid']) < 1)) {
                $invalidProperties[] = "invalid value for 'mid', the character length must be bigger than or equal to 1.";
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
    * Gets uid
    *  用户id
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 用户id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets peerid
    *  对端的用户ID，为0时表示本端上行数据
    *
    * @return string|null
    */
    public function getPeerid()
    {
        return $this->container['peerid'];
    }

    /**
    * Sets peerid
    *
    * @param string|null $peerid 对端的用户ID，为0时表示本端上行数据
    *
    * @return $this
    */
    public function setPeerid($peerid)
    {
        $this->container['peerid'] = $peerid;
        return $this;
    }

    /**
    * Gets mid
    *  指标ID
    *
    * @return string|null
    */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
    * Sets mid
    *
    * @param string|null $mid 指标ID
    *
    * @return $this
    */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;
        return $this;
    }

    /**
    * Gets data
    *  时间戳及相应时间的指标数值列表
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V1\Model\TimeFloatValueData[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V1\Model\TimeFloatValueData[]|null $data 时间戳及相应时间的指标数值列表
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

