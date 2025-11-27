<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEmailRecordRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEmailRecordRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'sendStatus' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'sendStatus' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'sendStatus' => 'send_status',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'sendStatus' => 'setSendStatus',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * sendStatus  发送状态
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'sendStatus' => 'getSendStatus',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['sendStatus'] = isset($data['sendStatus']) ? $data['sendStatus'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            if ((mb_strlen($this->container['datastoreType']) > 64)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['datastoreType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startAt']) && ($this->container['startAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'startAt', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['startAt']) && ($this->container['startAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endAt']) && ($this->container['endAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'endAt', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['endAt']) && ($this->container['endAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendStatus']) && ($this->container['sendStatus'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sendStatus', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sendStatus']) && ($this->container['sendStatus'] < -2147483648)) {
                $invalidProperties[] = "invalid value for 'sendStatus', must be bigger than or equal to -2147483648.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 5000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets datastoreType
    *  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets sendStatus
    *  发送状态
    *
    * @return int|null
    */
    public function getSendStatus()
    {
        return $this->container['sendStatus'];
    }

    /**
    * Sets sendStatus
    *
    * @param int|null $sendStatus 发送状态
    *
    * @return $this
    */
    public function setSendStatus($sendStatus)
    {
        $this->container['sendStatus'] = $sendStatus;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数
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
    * @param int|null $limit 每页记录数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

