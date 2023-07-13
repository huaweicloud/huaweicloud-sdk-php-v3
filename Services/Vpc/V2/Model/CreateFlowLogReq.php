<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFlowLogReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFlowLogReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * indexEnabled  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'trafficType' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string',
            'indexEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * indexEnabled  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'resourceType' => null,
        'resourceId' => null,
        'trafficType' => null,
        'logGroupId' => null,
        'logTopicId' => null,
        'indexEnabled' => null
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
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * indexEnabled  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'trafficType' => 'traffic_type',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id',
            'indexEnabled' => 'index_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * indexEnabled  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'trafficType' => 'setTrafficType',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId',
            'indexEnabled' => 'setIndexEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * indexEnabled  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'trafficType' => 'getTrafficType',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId',
            'indexEnabled' => 'getIndexEnabled'
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
    const RESOURCE_TYPE_PORT = 'port';
    const RESOURCE_TYPE_NETWORK = 'network';
    const RESOURCE_TYPE_VPC = 'vpc';
    const TRAFFIC_TYPE_ALL = 'all';
    const TRAFFIC_TYPE_ACCEPT = 'accept';
    const TRAFFIC_TYPE_REJECT = 'reject';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_PORT,
            self::RESOURCE_TYPE_NETWORK,
            self::RESOURCE_TYPE_VPC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTrafficTypeAllowableValues()
    {
        return [
            self::TRAFFIC_TYPE_ALL,
            self::TRAFFIC_TYPE_ACCEPT,
            self::TRAFFIC_TYPE_REJECT,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['trafficType'] = isset($data['trafficType']) ? $data['trafficType'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['indexEnabled'] = isset($data['indexEnabled']) ? $data['indexEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['trafficType'] === null) {
            $invalidProperties[] = "'trafficType' can't be null";
        }
            $allowedValues = $this->getTrafficTypeAllowableValues();
                if (!is_null($this->container['trafficType']) && !in_array($this->container['trafficType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trafficType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['logTopicId'] === null) {
            $invalidProperties[] = "'logTopicId' can't be null";
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
    * Gets name
    *  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets resourceType
    *  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  resource_type对应资源的唯一ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId resource_type对应资源的唯一ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets trafficType
    *  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    *
    * @return string
    */
    public function getTrafficType()
    {
        return $this->container['trafficType'];
    }

    /**
    * Sets trafficType
    *
    * @param string $trafficType 功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    *
    * @return $this
    */
    public function setTrafficType($trafficType)
    {
        $this->container['trafficType'] = $trafficType;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return string
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string $logTopicId 日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets indexEnabled
    *  功能说明：是否开启日志索引 取值范围：true，false
    *
    * @return bool|null
    */
    public function getIndexEnabled()
    {
        return $this->container['indexEnabled'];
    }

    /**
    * Sets indexEnabled
    *
    * @param bool|null $indexEnabled 功能说明：是否开启日志索引 取值范围：true，false
    *
    * @return $this
    */
    public function setIndexEnabled($indexEnabled)
    {
        $this->container['indexEnabled'] = $indexEnabled;
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

