<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApiDashboardRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApiDashboardRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * startTime  开始时间（13位时间戳）。
    * endTime  结束时间（13位时间戳）。
    * timeUnit  时间单位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'dlmType' => 'string',
            'contentType' => 'string',
            'apiId' => 'string',
            'instanceId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'timeUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * startTime  开始时间（13位时间戳）。
    * endTime  结束时间（13位时间戳）。
    * timeUnit  时间单位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'dlmType' => null,
        'contentType' => null,
        'apiId' => null,
        'instanceId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'timeUnit' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * startTime  开始时间（13位时间戳）。
    * endTime  结束时间（13位时间戳）。
    * timeUnit  时间单位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'dlmType' => 'Dlm-Type',
            'contentType' => 'Content-Type',
            'apiId' => 'api_id',
            'instanceId' => 'instance_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'timeUnit' => 'time_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * startTime  开始时间（13位时间戳）。
    * endTime  结束时间（13位时间戳）。
    * timeUnit  时间单位。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'dlmType' => 'setDlmType',
            'contentType' => 'setContentType',
            'apiId' => 'setApiId',
            'instanceId' => 'setInstanceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'timeUnit' => 'setTimeUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * startTime  开始时间（13位时间戳）。
    * endTime  结束时间（13位时间戳）。
    * timeUnit  时间单位。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'dlmType' => 'getDlmType',
            'contentType' => 'getContentType',
            'apiId' => 'getApiId',
            'instanceId' => 'getInstanceId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'timeUnit' => 'getTimeUnit'
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
    const DLM_TYPE_SHARED = 'SHARED';
    const DLM_TYPE_EXCLUSIVE = 'EXCLUSIVE';
    const TIME_UNIT_HOUR = 'HOUR';
    const TIME_UNIT_DAY = 'DAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDlmTypeAllowableValues()
    {
        return [
            self::DLM_TYPE_SHARED,
            self::DLM_TYPE_EXCLUSIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeUnitAllowableValues()
    {
        return [
            self::TIME_UNIT_HOUR,
            self::TIME_UNIT_DAY,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['dlmType'] = isset($data['dlmType']) ? $data['dlmType'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            $allowedValues = $this->getDlmTypeAllowableValues();
                if (!is_null($this->container['dlmType']) && !in_array($this->container['dlmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dlmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['apiId'] === null) {
            $invalidProperties[] = "'apiId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['timeUnit'] === null) {
            $invalidProperties[] = "'timeUnit' can't be null";
        }
            $allowedValues = $this->getTimeUnitAllowableValues();
                if (!is_null($this->container['timeUnit']) && !in_array($this->container['timeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeUnit', must be one of '%s'",
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets dlmType
    *  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return string|null
    */
    public function getDlmType()
    {
        return $this->container['dlmType'];
    }

    /**
    * Sets dlmType
    *
    * @param string|null $dlmType 数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return $this
    */
    public function setDlmType($dlmType)
    {
        $this->container['dlmType'] = $dlmType;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets apiId
    *  api编号。
    *
    * @return string
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string $apiId api编号。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets instanceId
    *  集群编号。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 集群编号。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（13位时间戳）。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间（13位时间戳）。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间（13位时间戳）。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间（13位时间戳）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets timeUnit
    *  时间单位。
    *
    * @return string
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string $timeUnit 时间单位。
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
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

