<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLtsConfigRequestBodyLtsConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLtsConfigRequestBody_lts_configs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * logType  logType
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'logType' => '\HuaweiCloud\SDK\Dds\V3\Model\LtsLogType',
            'ltsGroupId' => 'string',
            'ltsStreamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * logType  logType
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
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
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * logType  logType
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'logType' => 'log_type',
            'ltsGroupId' => 'lts_group_id',
            'ltsStreamId' => 'lts_stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * logType  logType
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'logType' => 'setLogType',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsStreamId' => 'setLtsStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * logType  logType
    * ltsGroupId  LTS日志组ID。可通过云日志服务-“查询账号下所有日志组”API接口获取。
    * ltsStreamId  LTS日志流ID。可通过云日志服务-“查询指定日志组下的所有日志流”API接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
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
    * Gets instanceId
    *  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
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
    * @param string $instanceId 实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets logType
    *  logType
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\LtsLogType
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\LtsLogType $logType logType
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

