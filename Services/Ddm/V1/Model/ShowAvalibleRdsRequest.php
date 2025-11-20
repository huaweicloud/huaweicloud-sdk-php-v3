<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAvalibleRdsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAvalibleRdsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例 ID。
    * targetInstanceId  目标实例 ID。
    * sourceDnInstanceId  源DN实例 ID。
    * restoreTime  恢复时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'targetInstanceId' => 'string',
            'sourceDnInstanceId' => 'string',
            'restoreTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例 ID。
    * targetInstanceId  目标实例 ID。
    * sourceDnInstanceId  源DN实例 ID。
    * restoreTime  恢复时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'targetInstanceId' => null,
        'sourceDnInstanceId' => null,
        'restoreTime' => null
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
    * instanceId  实例 ID。
    * targetInstanceId  目标实例 ID。
    * sourceDnInstanceId  源DN实例 ID。
    * restoreTime  恢复时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'targetInstanceId' => 'target_instance_id',
            'sourceDnInstanceId' => 'source_dn_instance_id',
            'restoreTime' => 'restore_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例 ID。
    * targetInstanceId  目标实例 ID。
    * sourceDnInstanceId  源DN实例 ID。
    * restoreTime  恢复时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'targetInstanceId' => 'setTargetInstanceId',
            'sourceDnInstanceId' => 'setSourceDnInstanceId',
            'restoreTime' => 'setRestoreTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例 ID。
    * targetInstanceId  目标实例 ID。
    * sourceDnInstanceId  源DN实例 ID。
    * restoreTime  恢复时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'targetInstanceId' => 'getTargetInstanceId',
            'sourceDnInstanceId' => 'getSourceDnInstanceId',
            'restoreTime' => 'getRestoreTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['sourceDnInstanceId'] = isset($data['sourceDnInstanceId']) ? $data['sourceDnInstanceId'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetInstanceId'] === null) {
            $invalidProperties[] = "'targetInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['targetInstanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'targetInstanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['targetInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetInstanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sourceDnInstanceId'] === null) {
            $invalidProperties[] = "'sourceDnInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['sourceDnInstanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceDnInstanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['sourceDnInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceDnInstanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
        }
            if ((mb_strlen($this->container['restoreTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'restoreTime', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['restoreTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'restoreTime', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  实例 ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例 ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets targetInstanceId
    *  目标实例 ID。
    *
    * @return string
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string $targetInstanceId 目标实例 ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets sourceDnInstanceId
    *  源DN实例 ID。
    *
    * @return string
    */
    public function getSourceDnInstanceId()
    {
        return $this->container['sourceDnInstanceId'];
    }

    /**
    * Sets sourceDnInstanceId
    *
    * @param string $sourceDnInstanceId 源DN实例 ID。
    *
    * @return $this
    */
    public function setSourceDnInstanceId($sourceDnInstanceId)
    {
        $this->container['sourceDnInstanceId'] = $sourceDnInstanceId;
        return $this;
    }

    /**
    * Gets restoreTime
    *  恢复时间。
    *
    * @return string
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string $restoreTime 恢复时间。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
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

