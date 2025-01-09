<?php

namespace HuaweiCloud\SDK\SMSApi\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmsID implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmsID';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * from  发送短信号码
    * originTo  接收短信号码
    * smsMsgId  短信id
    * status  短信当前状态
    * countryId  国家码
    * total  短信拆分条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'from' => 'string',
            'originTo' => 'string',
            'smsMsgId' => 'string',
            'status' => 'string',
            'countryId' => 'string',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * from  发送短信号码
    * originTo  接收短信号码
    * smsMsgId  短信id
    * status  短信当前状态
    * countryId  国家码
    * total  短信拆分条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'from' => null,
        'originTo' => null,
        'smsMsgId' => null,
        'status' => null,
        'countryId' => null,
        'total' => null
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
    * createTime  创建时间
    * from  发送短信号码
    * originTo  接收短信号码
    * smsMsgId  短信id
    * status  短信当前状态
    * countryId  国家码
    * total  短信拆分条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'createTime',
            'from' => 'from',
            'originTo' => 'originTo',
            'smsMsgId' => 'smsMsgId',
            'status' => 'status',
            'countryId' => 'countryId',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * from  发送短信号码
    * originTo  接收短信号码
    * smsMsgId  短信id
    * status  短信当前状态
    * countryId  国家码
    * total  短信拆分条数
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'from' => 'setFrom',
            'originTo' => 'setOriginTo',
            'smsMsgId' => 'setSmsMsgId',
            'status' => 'setStatus',
            'countryId' => 'setCountryId',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * from  发送短信号码
    * originTo  接收短信号码
    * smsMsgId  短信id
    * status  短信当前状态
    * countryId  国家码
    * total  短信拆分条数
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'from' => 'getFrom',
            'originTo' => 'getOriginTo',
            'smsMsgId' => 'getSmsMsgId',
            'status' => 'getStatus',
            'countryId' => 'getCountryId',
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['originTo'] = isset($data['originTo']) ? $data['originTo'] : null;
        $this->container['smsMsgId'] = isset($data['smsMsgId']) ? $data['smsMsgId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['countryId'] = isset($data['countryId']) ? $data['countryId'] : null;
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
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 21)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 21.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 1)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['originTo']) && (mb_strlen($this->container['originTo']) > 21)) {
                $invalidProperties[] = "invalid value for 'originTo', the character length must be smaller than or equal to 21.";
            }
            if (!is_null($this->container['originTo']) && (mb_strlen($this->container['originTo']) < 1)) {
                $invalidProperties[] = "invalid value for 'originTo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['smsMsgId']) && (mb_strlen($this->container['smsMsgId']) > 50)) {
                $invalidProperties[] = "invalid value for 'smsMsgId', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['smsMsgId']) && (mb_strlen($this->container['smsMsgId']) < 1)) {
                $invalidProperties[] = "invalid value for 'smsMsgId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 7)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['countryId']) && (mb_strlen($this->container['countryId']) > 3)) {
                $invalidProperties[] = "invalid value for 'countryId', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['countryId']) && (mb_strlen($this->container['countryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'countryId', the character length must be bigger than or equal to 1.";
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
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets from
    *  发送短信号码
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from 发送短信号码
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets originTo
    *  接收短信号码
    *
    * @return string|null
    */
    public function getOriginTo()
    {
        return $this->container['originTo'];
    }

    /**
    * Sets originTo
    *
    * @param string|null $originTo 接收短信号码
    *
    * @return $this
    */
    public function setOriginTo($originTo)
    {
        $this->container['originTo'] = $originTo;
        return $this;
    }

    /**
    * Gets smsMsgId
    *  短信id
    *
    * @return string|null
    */
    public function getSmsMsgId()
    {
        return $this->container['smsMsgId'];
    }

    /**
    * Sets smsMsgId
    *
    * @param string|null $smsMsgId 短信id
    *
    * @return $this
    */
    public function setSmsMsgId($smsMsgId)
    {
        $this->container['smsMsgId'] = $smsMsgId;
        return $this;
    }

    /**
    * Gets status
    *  短信当前状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 短信当前状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets countryId
    *  国家码
    *
    * @return string|null
    */
    public function getCountryId()
    {
        return $this->container['countryId'];
    }

    /**
    * Sets countryId
    *
    * @param string|null $countryId 国家码
    *
    * @return $this
    */
    public function setCountryId($countryId)
    {
        $this->container['countryId'] = $countryId;
        return $this;
    }

    /**
    * Gets total
    *  短信拆分条数
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
    * @param int|null $total 短信拆分条数
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

