<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAccessConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAccessConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessConfigId  日志接入ID
    * accessConfigDetail  accessConfigDetail
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  日志拆分
    * binaryCollect  二进制采集
    * clusterId  CCE集群ID，CCE类型时，为必填
    * incrementalCollect  是否增量采集 true为是 false为否（全量采集）
    * encodingFormat  编码格式，默认UTF-8
    * processorType  IC结构化解析类型
    * demoLog  示例日志
    * demoFields  示例日志解析字段
    * processors  IC结构化解析器
    * applicationId  ServiceStage应用ID
    * environmentId  ServiceStage环境ID
    * componentId  ServiceStage组件ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessConfigId' => 'string',
            'accessConfigDetail' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilUpdate',
            'hostGroupInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList',
            'accessConfigTag' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]',
            'logSplit' => 'bool',
            'binaryCollect' => 'bool',
            'clusterId' => 'string',
            'incrementalCollect' => 'bool',
            'encodingFormat' => 'string',
            'processorType' => 'string',
            'demoLog' => 'string',
            'demoFields' => '\HuaweiCloud\SDK\Lts\V2\Model\DemoFieldAccess[]',
            'processors' => '\HuaweiCloud\SDK\Lts\V2\Model\Processor[]',
            'applicationId' => 'string',
            'environmentId' => 'string',
            'componentId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessConfigId  日志接入ID
    * accessConfigDetail  accessConfigDetail
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  日志拆分
    * binaryCollect  二进制采集
    * clusterId  CCE集群ID，CCE类型时，为必填
    * incrementalCollect  是否增量采集 true为是 false为否（全量采集）
    * encodingFormat  编码格式，默认UTF-8
    * processorType  IC结构化解析类型
    * demoLog  示例日志
    * demoFields  示例日志解析字段
    * processors  IC结构化解析器
    * applicationId  ServiceStage应用ID
    * environmentId  ServiceStage环境ID
    * componentId  ServiceStage组件ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessConfigId' => null,
        'accessConfigDetail' => null,
        'hostGroupInfo' => null,
        'accessConfigTag' => null,
        'logSplit' => null,
        'binaryCollect' => null,
        'clusterId' => null,
        'incrementalCollect' => null,
        'encodingFormat' => null,
        'processorType' => null,
        'demoLog' => null,
        'demoFields' => null,
        'processors' => null,
        'applicationId' => null,
        'environmentId' => null,
        'componentId' => null
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
    * accessConfigId  日志接入ID
    * accessConfigDetail  accessConfigDetail
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  日志拆分
    * binaryCollect  二进制采集
    * clusterId  CCE集群ID，CCE类型时，为必填
    * incrementalCollect  是否增量采集 true为是 false为否（全量采集）
    * encodingFormat  编码格式，默认UTF-8
    * processorType  IC结构化解析类型
    * demoLog  示例日志
    * demoFields  示例日志解析字段
    * processors  IC结构化解析器
    * applicationId  ServiceStage应用ID
    * environmentId  ServiceStage环境ID
    * componentId  ServiceStage组件ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessConfigId' => 'access_config_id',
            'accessConfigDetail' => 'access_config_detail',
            'hostGroupInfo' => 'host_group_info',
            'accessConfigTag' => 'access_config_tag',
            'logSplit' => 'log_split',
            'binaryCollect' => 'binary_collect',
            'clusterId' => 'cluster_id',
            'incrementalCollect' => 'incremental_collect',
            'encodingFormat' => 'encoding_format',
            'processorType' => 'processor_type',
            'demoLog' => 'demo_log',
            'demoFields' => 'demo_fields',
            'processors' => 'processors',
            'applicationId' => 'application_id',
            'environmentId' => 'environment_id',
            'componentId' => 'component_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessConfigId  日志接入ID
    * accessConfigDetail  accessConfigDetail
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  日志拆分
    * binaryCollect  二进制采集
    * clusterId  CCE集群ID，CCE类型时，为必填
    * incrementalCollect  是否增量采集 true为是 false为否（全量采集）
    * encodingFormat  编码格式，默认UTF-8
    * processorType  IC结构化解析类型
    * demoLog  示例日志
    * demoFields  示例日志解析字段
    * processors  IC结构化解析器
    * applicationId  ServiceStage应用ID
    * environmentId  ServiceStage环境ID
    * componentId  ServiceStage组件ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accessConfigId' => 'setAccessConfigId',
            'accessConfigDetail' => 'setAccessConfigDetail',
            'hostGroupInfo' => 'setHostGroupInfo',
            'accessConfigTag' => 'setAccessConfigTag',
            'logSplit' => 'setLogSplit',
            'binaryCollect' => 'setBinaryCollect',
            'clusterId' => 'setClusterId',
            'incrementalCollect' => 'setIncrementalCollect',
            'encodingFormat' => 'setEncodingFormat',
            'processorType' => 'setProcessorType',
            'demoLog' => 'setDemoLog',
            'demoFields' => 'setDemoFields',
            'processors' => 'setProcessors',
            'applicationId' => 'setApplicationId',
            'environmentId' => 'setEnvironmentId',
            'componentId' => 'setComponentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessConfigId  日志接入ID
    * accessConfigDetail  accessConfigDetail
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  日志拆分
    * binaryCollect  二进制采集
    * clusterId  CCE集群ID，CCE类型时，为必填
    * incrementalCollect  是否增量采集 true为是 false为否（全量采集）
    * encodingFormat  编码格式，默认UTF-8
    * processorType  IC结构化解析类型
    * demoLog  示例日志
    * demoFields  示例日志解析字段
    * processors  IC结构化解析器
    * applicationId  ServiceStage应用ID
    * environmentId  ServiceStage环境ID
    * componentId  ServiceStage组件ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accessConfigId' => 'getAccessConfigId',
            'accessConfigDetail' => 'getAccessConfigDetail',
            'hostGroupInfo' => 'getHostGroupInfo',
            'accessConfigTag' => 'getAccessConfigTag',
            'logSplit' => 'getLogSplit',
            'binaryCollect' => 'getBinaryCollect',
            'clusterId' => 'getClusterId',
            'incrementalCollect' => 'getIncrementalCollect',
            'encodingFormat' => 'getEncodingFormat',
            'processorType' => 'getProcessorType',
            'demoLog' => 'getDemoLog',
            'demoFields' => 'getDemoFields',
            'processors' => 'getProcessors',
            'applicationId' => 'getApplicationId',
            'environmentId' => 'getEnvironmentId',
            'componentId' => 'getComponentId'
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
        $this->container['accessConfigId'] = isset($data['accessConfigId']) ? $data['accessConfigId'] : null;
        $this->container['accessConfigDetail'] = isset($data['accessConfigDetail']) ? $data['accessConfigDetail'] : null;
        $this->container['hostGroupInfo'] = isset($data['hostGroupInfo']) ? $data['hostGroupInfo'] : null;
        $this->container['accessConfigTag'] = isset($data['accessConfigTag']) ? $data['accessConfigTag'] : null;
        $this->container['logSplit'] = isset($data['logSplit']) ? $data['logSplit'] : null;
        $this->container['binaryCollect'] = isset($data['binaryCollect']) ? $data['binaryCollect'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['incrementalCollect'] = isset($data['incrementalCollect']) ? $data['incrementalCollect'] : null;
        $this->container['encodingFormat'] = isset($data['encodingFormat']) ? $data['encodingFormat'] : null;
        $this->container['processorType'] = isset($data['processorType']) ? $data['processorType'] : null;
        $this->container['demoLog'] = isset($data['demoLog']) ? $data['demoLog'] : null;
        $this->container['demoFields'] = isset($data['demoFields']) ? $data['demoFields'] : null;
        $this->container['processors'] = isset($data['processors']) ? $data['processors'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessConfigId'] === null) {
            $invalidProperties[] = "'accessConfigId' can't be null";
        }
            if ((mb_strlen($this->container['accessConfigId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accessConfigId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['accessConfigId']) < 36)) {
                $invalidProperties[] = "invalid value for 'accessConfigId', the character length must be bigger than or equal to 36.";
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
    * Gets accessConfigId
    *  日志接入ID
    *
    * @return string
    */
    public function getAccessConfigId()
    {
        return $this->container['accessConfigId'];
    }

    /**
    * Sets accessConfigId
    *
    * @param string $accessConfigId 日志接入ID
    *
    * @return $this
    */
    public function setAccessConfigId($accessConfigId)
    {
        $this->container['accessConfigId'] = $accessConfigId;
        return $this;
    }

    /**
    * Gets accessConfigDetail
    *  accessConfigDetail
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilUpdate|null
    */
    public function getAccessConfigDetail()
    {
        return $this->container['accessConfigDetail'];
    }

    /**
    * Sets accessConfigDetail
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilUpdate|null $accessConfigDetail accessConfigDetail
    *
    * @return $this
    */
    public function setAccessConfigDetail($accessConfigDetail)
    {
        $this->container['accessConfigDetail'] = $accessConfigDetail;
        return $this;
    }

    /**
    * Gets hostGroupInfo
    *  hostGroupInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList|null
    */
    public function getHostGroupInfo()
    {
        return $this->container['hostGroupInfo'];
    }

    /**
    * Sets hostGroupInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList|null $hostGroupInfo hostGroupInfo
    *
    * @return $this
    */
    public function setHostGroupInfo($hostGroupInfo)
    {
        $this->container['hostGroupInfo'] = $hostGroupInfo;
        return $this;
    }

    /**
    * Gets accessConfigTag
    *  标签信息。KEY不能重复,最多20个标签
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null
    */
    public function getAccessConfigTag()
    {
        return $this->container['accessConfigTag'];
    }

    /**
    * Sets accessConfigTag
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null $accessConfigTag 标签信息。KEY不能重复,最多20个标签
    *
    * @return $this
    */
    public function setAccessConfigTag($accessConfigTag)
    {
        $this->container['accessConfigTag'] = $accessConfigTag;
        return $this;
    }

    /**
    * Gets logSplit
    *  日志拆分
    *
    * @return bool|null
    */
    public function getLogSplit()
    {
        return $this->container['logSplit'];
    }

    /**
    * Sets logSplit
    *
    * @param bool|null $logSplit 日志拆分
    *
    * @return $this
    */
    public function setLogSplit($logSplit)
    {
        $this->container['logSplit'] = $logSplit;
        return $this;
    }

    /**
    * Gets binaryCollect
    *  二进制采集
    *
    * @return bool|null
    */
    public function getBinaryCollect()
    {
        return $this->container['binaryCollect'];
    }

    /**
    * Sets binaryCollect
    *
    * @param bool|null $binaryCollect 二进制采集
    *
    * @return $this
    */
    public function setBinaryCollect($binaryCollect)
    {
        $this->container['binaryCollect'] = $binaryCollect;
        return $this;
    }

    /**
    * Gets clusterId
    *  CCE集群ID，CCE类型时，为必填
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId CCE集群ID，CCE类型时，为必填
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets incrementalCollect
    *  是否增量采集 true为是 false为否（全量采集）
    *
    * @return bool|null
    */
    public function getIncrementalCollect()
    {
        return $this->container['incrementalCollect'];
    }

    /**
    * Sets incrementalCollect
    *
    * @param bool|null $incrementalCollect 是否增量采集 true为是 false为否（全量采集）
    *
    * @return $this
    */
    public function setIncrementalCollect($incrementalCollect)
    {
        $this->container['incrementalCollect'] = $incrementalCollect;
        return $this;
    }

    /**
    * Gets encodingFormat
    *  编码格式，默认UTF-8
    *
    * @return string|null
    */
    public function getEncodingFormat()
    {
        return $this->container['encodingFormat'];
    }

    /**
    * Sets encodingFormat
    *
    * @param string|null $encodingFormat 编码格式，默认UTF-8
    *
    * @return $this
    */
    public function setEncodingFormat($encodingFormat)
    {
        $this->container['encodingFormat'] = $encodingFormat;
        return $this;
    }

    /**
    * Gets processorType
    *  IC结构化解析类型
    *
    * @return string|null
    */
    public function getProcessorType()
    {
        return $this->container['processorType'];
    }

    /**
    * Sets processorType
    *
    * @param string|null $processorType IC结构化解析类型
    *
    * @return $this
    */
    public function setProcessorType($processorType)
    {
        $this->container['processorType'] = $processorType;
        return $this;
    }

    /**
    * Gets demoLog
    *  示例日志
    *
    * @return string|null
    */
    public function getDemoLog()
    {
        return $this->container['demoLog'];
    }

    /**
    * Sets demoLog
    *
    * @param string|null $demoLog 示例日志
    *
    * @return $this
    */
    public function setDemoLog($demoLog)
    {
        $this->container['demoLog'] = $demoLog;
        return $this;
    }

    /**
    * Gets demoFields
    *  示例日志解析字段
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\DemoFieldAccess[]|null
    */
    public function getDemoFields()
    {
        return $this->container['demoFields'];
    }

    /**
    * Sets demoFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\DemoFieldAccess[]|null $demoFields 示例日志解析字段
    *
    * @return $this
    */
    public function setDemoFields($demoFields)
    {
        $this->container['demoFields'] = $demoFields;
        return $this;
    }

    /**
    * Gets processors
    *  IC结构化解析器
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Processor[]|null
    */
    public function getProcessors()
    {
        return $this->container['processors'];
    }

    /**
    * Sets processors
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Processor[]|null $processors IC结构化解析器
    *
    * @return $this
    */
    public function setProcessors($processors)
    {
        $this->container['processors'] = $processors;
        return $this;
    }

    /**
    * Gets applicationId
    *  ServiceStage应用ID
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId ServiceStage应用ID
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets environmentId
    *  ServiceStage环境ID
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId ServiceStage环境ID
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets componentId
    *  ServiceStage组件ID
    *
    * @return string[]|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string[]|null $componentId ServiceStage组件ID
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
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

