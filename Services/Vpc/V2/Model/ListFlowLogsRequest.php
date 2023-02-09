<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlowLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlowLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * status  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    * limit  功能说明：每页返回的个数 取值范围：0 ~ intmax
    * marker  分页查询起始的资源ID，为空时为查询第一页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'tenantId' => 'string',
            'description' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'trafficType' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string',
            'logStoreType' => 'string',
            'status' => 'string',
            'limit' => 'string',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * status  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    * limit  功能说明：每页返回的个数 取值范围：0 ~ intmax
    * marker  分页查询起始的资源ID，为空时为查询第一页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'name' => null,
        'tenantId' => null,
        'description' => null,
        'resourceType' => null,
        'resourceId' => null,
        'trafficType' => null,
        'logGroupId' => null,
        'logTopicId' => null,
        'logStoreType' => null,
        'status' => null,
        'limit' => null,
        'marker' => null
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
    * projectId  项目ID
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * status  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    * limit  功能说明：每页返回的个数 取值范围：0 ~ intmax
    * marker  分页查询起始的资源ID，为空时为查询第一页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'name' => 'name',
            'tenantId' => 'tenant_id',
            'description' => 'description',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'trafficType' => 'traffic_type',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id',
            'logStoreType' => 'log_store_type',
            'status' => 'status',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * status  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    * limit  功能说明：每页返回的个数 取值范围：0 ~ intmax
    * marker  分页查询起始的资源ID，为空时为查询第一页
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'tenantId' => 'setTenantId',
            'description' => 'setDescription',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'trafficType' => 'setTrafficType',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId',
            'logStoreType' => 'setLogStoreType',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * status  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    * limit  功能说明：每页返回的个数 取值范围：0 ~ intmax
    * marker  分页查询起始的资源ID，为空时为查询第一页
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'tenantId' => 'getTenantId',
            'description' => 'getDescription',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'trafficType' => 'getTrafficType',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId',
            'logStoreType' => 'getLogStoreType',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
    const TRAFFIC_TYPE_REJECT = 'reject';
    const TRAFFIC_TYPE_ACCEPT = 'accept';
    const LOG_STORE_TYPE_LTS = 'lts';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ERROR = 'ERROR';
    

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
            self::TRAFFIC_TYPE_REJECT,
            self::TRAFFIC_TYPE_ACCEPT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogStoreTypeAllowableValues()
    {
        return [
            self::LOG_STORE_TYPE_LTS,
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
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_ERROR,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['trafficType'] = isset($data['trafficType']) ? $data['trafficType'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['logStoreType'] = isset($data['logStoreType']) ? $data['logStoreType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getTrafficTypeAllowableValues();
                if (!is_null($this->container['trafficType']) && !in_array($this->container['trafficType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trafficType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['logGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['logGroupId'])) {
                $invalidProperties[] = "invalid value for 'logGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['logTopicId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['logTopicId'])) {
                $invalidProperties[] = "invalid value for 'logTopicId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getLogStoreTypeAllowableValues();
                if (!is_null($this->container['logStoreType']) && !in_array($this->container['logStoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logStoreType', must be one of '%s'",
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

            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  流日志资源唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 流日志资源唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets tenantId
    *  项目ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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
    *  功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 功能说明：流日志所属资源类型 取值范围：支持port、network、vpc 3种类型。
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
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId resource_type对应资源的唯一ID
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
    * @return string|null
    */
    public function getTrafficType()
    {
        return $this->container['trafficType'];
    }

    /**
    * Sets trafficType
    *
    * @param string|null $trafficType 功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
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
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
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
    * @return string|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string|null $logTopicId 日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets logStoreType
    *  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    *
    * @return string|null
    */
    public function getLogStoreType()
    {
        return $this->container['logStoreType'];
    }

    /**
    * Sets logStoreType
    *
    * @param string|null $logStoreType 功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    *
    * @return $this
    */
    public function setLogStoreType($logStoreType)
    {
        $this->container['logStoreType'] = $logStoreType;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
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
    * @param string|null $status 功能说明：流日志状态 取值范围：     ACTIVE：开启     DOWN：关闭     ERROR：异常故障
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数 取值范围：0 ~ intmax
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 功能说明：每页返回的个数 取值范围：0 ~ intmax
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时为查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的资源ID，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

