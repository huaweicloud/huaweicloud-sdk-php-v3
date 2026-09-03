<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFullSqlSwitchRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFullSqlSwitchRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * openSwitch  开关。取值范围：1（开启）、0（关闭）
    * engineType  数据库引擎类型
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'openSwitch' => 'int',
            'engineType' => 'string',
            'retentionHours' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * openSwitch  开关。取值范围：1（开启）、0（关闭）
    * engineType  数据库引擎类型
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'openSwitch' => 'int32',
        'engineType' => null,
        'retentionHours' => 'int64'
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
    * instanceId  实例ID，实例的唯一标识
    * openSwitch  开关。取值范围：1（开启）、0（关闭）
    * engineType  数据库引擎类型
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'openSwitch' => 'open_switch',
            'engineType' => 'engine_type',
            'retentionHours' => 'retention_hours'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，实例的唯一标识
    * openSwitch  开关。取值范围：1（开启）、0（关闭）
    * engineType  数据库引擎类型
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'openSwitch' => 'setOpenSwitch',
            'engineType' => 'setEngineType',
            'retentionHours' => 'setRetentionHours'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，实例的唯一标识
    * openSwitch  开关。取值范围：1（开启）、0（关闭）
    * engineType  数据库引擎类型
    * retentionHours  保存时长
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'openSwitch' => 'getOpenSwitch',
            'engineType' => 'getEngineType',
            'retentionHours' => 'getRetentionHours'
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
        $this->container['openSwitch'] = isset($data['openSwitch']) ? $data['openSwitch'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['retentionHours'] = isset($data['retentionHours']) ? $data['retentionHours'] : null;
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
        if ($this->container['openSwitch'] === null) {
            $invalidProperties[] = "'openSwitch' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
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
    *  实例ID，实例的唯一标识
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
    * @param string $instanceId 实例ID，实例的唯一标识
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets openSwitch
    *  开关。取值范围：1（开启）、0（关闭）
    *
    * @return int
    */
    public function getOpenSwitch()
    {
        return $this->container['openSwitch'];
    }

    /**
    * Sets openSwitch
    *
    * @param int $openSwitch 开关。取值范围：1（开启）、0（关闭）
    *
    * @return $this
    */
    public function setOpenSwitch($openSwitch)
    {
        $this->container['openSwitch'] = $openSwitch;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets retentionHours
    *  保存时长
    *
    * @return int|null
    */
    public function getRetentionHours()
    {
        return $this->container['retentionHours'];
    }

    /**
    * Sets retentionHours
    *
    * @param int|null $retentionHours 保存时长
    *
    * @return $this
    */
    public function setRetentionHours($retentionHours)
    {
        $this->container['retentionHours'] = $retentionHours;
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

