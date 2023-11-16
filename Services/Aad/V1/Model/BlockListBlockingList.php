<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlockListBlockingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlockList_blocking_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  ip地址
    * blockingTime  封堵时间
    * estimatedUnblockingTime  预计解封时间
    * status  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'blockingTime' => 'int',
            'estimatedUnblockingTime' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  ip地址
    * blockingTime  封堵时间
    * estimatedUnblockingTime  预计解封时间
    * status  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'blockingTime' => 'int64',
        'estimatedUnblockingTime' => 'int64',
        'status' => null
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
    * blockingTime  封堵时间
    * estimatedUnblockingTime  预计解封时间
    * status  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'blockingTime' => 'blocking_time',
            'estimatedUnblockingTime' => 'estimated_unblocking_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  ip地址
    * blockingTime  封堵时间
    * estimatedUnblockingTime  预计解封时间
    * status  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'blockingTime' => 'setBlockingTime',
            'estimatedUnblockingTime' => 'setEstimatedUnblockingTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  ip地址
    * blockingTime  封堵时间
    * estimatedUnblockingTime  预计解封时间
    * status  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'blockingTime' => 'getBlockingTime',
            'estimatedUnblockingTime' => 'getEstimatedUnblockingTime',
            'status' => 'getStatus'
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
    const STATUS_FAILED = 'failed';
    const STATUS_SUCCESS = 'success';
    const STATUS_UNBLOCKING = 'unblocking';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FAILED,
            self::STATUS_SUCCESS,
            self::STATUS_UNBLOCKING,
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
        $this->container['blockingTime'] = isset($data['blockingTime']) ? $data['blockingTime'] : null;
        $this->container['estimatedUnblockingTime'] = isset($data['estimatedUnblockingTime']) ? $data['estimatedUnblockingTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 128)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ip']) < 7)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['blockingTime'] === null) {
            $invalidProperties[] = "'blockingTime' can't be null";
        }
            if (($this->container['blockingTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockingTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['blockingTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockingTime', must be bigger than or equal to 0.";
            }
        if ($this->container['estimatedUnblockingTime'] === null) {
            $invalidProperties[] = "'estimatedUnblockingTime' can't be null";
        }
            if (($this->container['estimatedUnblockingTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'estimatedUnblockingTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['estimatedUnblockingTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'estimatedUnblockingTime', must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets ip
    *  ip地址
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip ip地址
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets blockingTime
    *  封堵时间
    *
    * @return int
    */
    public function getBlockingTime()
    {
        return $this->container['blockingTime'];
    }

    /**
    * Sets blockingTime
    *
    * @param int $blockingTime 封堵时间
    *
    * @return $this
    */
    public function setBlockingTime($blockingTime)
    {
        $this->container['blockingTime'] = $blockingTime;
        return $this;
    }

    /**
    * Gets estimatedUnblockingTime
    *  预计解封时间
    *
    * @return int
    */
    public function getEstimatedUnblockingTime()
    {
        return $this->container['estimatedUnblockingTime'];
    }

    /**
    * Sets estimatedUnblockingTime
    *
    * @param int $estimatedUnblockingTime 预计解封时间
    *
    * @return $this
    */
    public function setEstimatedUnblockingTime($estimatedUnblockingTime)
    {
        $this->container['estimatedUnblockingTime'] = $estimatedUnblockingTime;
        return $this;
    }

    /**
    * Gets status
    *  状态。unblocking：解封中；success：成功；failed：失败
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态。unblocking：解封中；success：成功；failed：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

