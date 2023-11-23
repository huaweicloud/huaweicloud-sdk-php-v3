<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SaveLtsConfigsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SaveLtsConfigsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  需要建立关联的实例ID列表。
    * logType  日志类型。slow_log表示慢日志。
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'logType' => 'string',
            'ltsGroupId' => 'string',
            'ltsStreamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  需要建立关联的实例ID列表。
    * logType  日志类型。slow_log表示慢日志。
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'logType' => null,
        'ltsGroupId' => null,
        'ltsStreamId' => null
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
    * instanceIds  需要建立关联的实例ID列表。
    * logType  日志类型。slow_log表示慢日志。
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'logType' => 'log_type',
            'ltsGroupId' => 'lts_group_id',
            'ltsStreamId' => 'lts_stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  需要建立关联的实例ID列表。
    * logType  日志类型。slow_log表示慢日志。
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'logType' => 'setLogType',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsStreamId' => 'setLtsStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  需要建立关联的实例ID列表。
    * logType  日志类型。slow_log表示慢日志。
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'logType' => 'getLogType',
            'ltsGroupId' => 'getLtsGroupId',
            'ltsStreamId' => 'getLtsStreamId'
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
    const LOG_TYPE_SLOW_LOG = 'slow_log';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTypeAllowableValues()
    {
        return [
            self::LOG_TYPE_SLOW_LOG,
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsStreamId'] = isset($data['ltsStreamId']) ? $data['ltsStreamId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
        }
            $allowedValues = $this->getLogTypeAllowableValues();
                if (!is_null($this->container['logType']) && !in_array($this->container['logType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ltsGroupId'] === null) {
            $invalidProperties[] = "'ltsGroupId' can't be null";
        }
        if ($this->container['ltsStreamId'] === null) {
            $invalidProperties[] = "'ltsStreamId' can't be null";
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
    * Gets instanceIds
    *  需要建立关联的实例ID列表。
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds 需要建立关联的实例ID列表。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets logType
    *  日志类型。slow_log表示慢日志。
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType 日志类型。slow_log表示慢日志。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    *
    * @return string
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string $ltsGroupId LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsStreamId
    *  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @return string
    */
    public function getLtsStreamId()
    {
        return $this->container['ltsStreamId'];
    }

    /**
    * Sets ltsStreamId
    *
    * @param string $ltsStreamId LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @return $this
    */
    public function setLtsStreamId($ltsStreamId)
    {
        $this->container['ltsStreamId'] = $ltsStreamId;
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

