<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnblockRecordResponseUnblockRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnblockRecordResponse_unblock_record';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  ip地址
    * executor  执行者
    * blockId  封堵id
    * blockingTime  封堵时间
    * unblockingTime  解封时间
    * unblockType  解封类型。manual：人工；automatic：自动
    * status  状态。unblocking：解封中；success：成功；failed：失败
    * sortTime  时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'executor' => 'string',
            'blockId' => 'int',
            'blockingTime' => 'int',
            'unblockingTime' => 'int',
            'unblockType' => 'string',
            'status' => 'string',
            'sortTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  ip地址
    * executor  执行者
    * blockId  封堵id
    * blockingTime  封堵时间
    * unblockingTime  解封时间
    * unblockType  解封类型。manual：人工；automatic：自动
    * status  状态。unblocking：解封中；success：成功；failed：失败
    * sortTime  时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'executor' => null,
        'blockId' => 'int64',
        'blockingTime' => 'int64',
        'unblockingTime' => 'int64',
        'unblockType' => null,
        'status' => null,
        'sortTime' => 'int64'
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
    * ip  ip地址
    * executor  执行者
    * blockId  封堵id
    * blockingTime  封堵时间
    * unblockingTime  解封时间
    * unblockType  解封类型。manual：人工；automatic：自动
    * status  状态。unblocking：解封中；success：成功；failed：失败
    * sortTime  时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'executor' => 'executor',
            'blockId' => 'block_id',
            'blockingTime' => 'blocking_time',
            'unblockingTime' => 'unblocking_time',
            'unblockType' => 'unblock_type',
            'status' => 'status',
            'sortTime' => 'sort_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  ip地址
    * executor  执行者
    * blockId  封堵id
    * blockingTime  封堵时间
    * unblockingTime  解封时间
    * unblockType  解封类型。manual：人工；automatic：自动
    * status  状态。unblocking：解封中；success：成功；failed：失败
    * sortTime  时间
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'executor' => 'setExecutor',
            'blockId' => 'setBlockId',
            'blockingTime' => 'setBlockingTime',
            'unblockingTime' => 'setUnblockingTime',
            'unblockType' => 'setUnblockType',
            'status' => 'setStatus',
            'sortTime' => 'setSortTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  ip地址
    * executor  执行者
    * blockId  封堵id
    * blockingTime  封堵时间
    * unblockingTime  解封时间
    * unblockType  解封类型。manual：人工；automatic：自动
    * status  状态。unblocking：解封中；success：成功；failed：失败
    * sortTime  时间
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'executor' => 'getExecutor',
            'blockId' => 'getBlockId',
            'blockingTime' => 'getBlockingTime',
            'unblockingTime' => 'getUnblockingTime',
            'unblockType' => 'getUnblockType',
            'status' => 'getStatus',
            'sortTime' => 'getSortTime'
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
    const UNBLOCK_TYPE_MANUAL = 'manual';
    const UNBLOCK_TYPE_AUTOMATIC = 'automatic';
    const STATUS_UNBLOCKING = 'unblocking';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnblockTypeAllowableValues()
    {
        return [
            self::UNBLOCK_TYPE_MANUAL,
            self::UNBLOCK_TYPE_AUTOMATIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNBLOCKING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['blockId'] = isset($data['blockId']) ? $data['blockId'] : null;
        $this->container['blockingTime'] = isset($data['blockingTime']) ? $data['blockingTime'] : null;
        $this->container['unblockingTime'] = isset($data['unblockingTime']) ? $data['unblockingTime'] : null;
        $this->container['unblockType'] = isset($data['unblockType']) ? $data['unblockType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortTime'] = isset($data['sortTime']) ? $data['sortTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 128)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 7)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) > 255)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) < 7)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['blockId']) && ($this->container['blockId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockId', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['blockId']) && ($this->container['blockId'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockingTime']) && ($this->container['blockingTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockingTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['blockingTime']) && ($this->container['blockingTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockingTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unblockingTime']) && ($this->container['unblockingTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'unblockingTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['unblockingTime']) && ($this->container['unblockingTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'unblockingTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUnblockTypeAllowableValues();
                if (!is_null($this->container['unblockType']) && !in_array($this->container['unblockType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unblockType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortTime']) && ($this->container['sortTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'sortTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['sortTime']) && ($this->container['sortTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'sortTime', must be bigger than or equal to 0.";
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
    * Gets ip
    *  ip地址
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip ip地址
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets executor
    *  执行者
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行者
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets blockId
    *  封堵id
    *
    * @return int|null
    */
    public function getBlockId()
    {
        return $this->container['blockId'];
    }

    /**
    * Sets blockId
    *
    * @param int|null $blockId 封堵id
    *
    * @return $this
    */
    public function setBlockId($blockId)
    {
        $this->container['blockId'] = $blockId;
        return $this;
    }

    /**
    * Gets blockingTime
    *  封堵时间
    *
    * @return int|null
    */
    public function getBlockingTime()
    {
        return $this->container['blockingTime'];
    }

    /**
    * Sets blockingTime
    *
    * @param int|null $blockingTime 封堵时间
    *
    * @return $this
    */
    public function setBlockingTime($blockingTime)
    {
        $this->container['blockingTime'] = $blockingTime;
        return $this;
    }

    /**
    * Gets unblockingTime
    *  解封时间
    *
    * @return int|null
    */
    public function getUnblockingTime()
    {
        return $this->container['unblockingTime'];
    }

    /**
    * Sets unblockingTime
    *
    * @param int|null $unblockingTime 解封时间
    *
    * @return $this
    */
    public function setUnblockingTime($unblockingTime)
    {
        $this->container['unblockingTime'] = $unblockingTime;
        return $this;
    }

    /**
    * Gets unblockType
    *  解封类型。manual：人工；automatic：自动
    *
    * @return string|null
    */
    public function getUnblockType()
    {
        return $this->container['unblockType'];
    }

    /**
    * Sets unblockType
    *
    * @param string|null $unblockType 解封类型。manual：人工；automatic：自动
    *
    * @return $this
    */
    public function setUnblockType($unblockType)
    {
        $this->container['unblockType'] = $unblockType;
        return $this;
    }

    /**
    * Gets status
    *  状态。unblocking：解封中；success：成功；failed：失败
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
    * @param string|null $status 状态。unblocking：解封中；success：成功；failed：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sortTime
    *  时间
    *
    * @return int|null
    */
    public function getSortTime()
    {
        return $this->container['sortTime'];
    }

    /**
    * Sets sortTime
    *
    * @param int|null $sortTime 时间
    *
    * @return $this
    */
    public function setSortTime($sortTime)
    {
        $this->container['sortTime'] = $sortTime;
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

