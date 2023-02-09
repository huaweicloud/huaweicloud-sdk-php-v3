<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowLogResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowLogResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * createdAt  资源创建时间
    * updatedAt  最近一次更新资源的时间
    * adminState  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    * status  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
    *
    * @var string[]
    */
    protected static $openAPITypes = [
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
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'adminState' => 'bool',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * createdAt  资源创建时间
    * updatedAt  最近一次更新资源的时间
    * adminState  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    * status  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
        'createdAt' => null,
        'updatedAt' => null,
        'adminState' => null,
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
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * createdAt  资源创建时间
    * updatedAt  最近一次更新资源的时间
    * adminState  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    * status  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
    *
    * @var string[]
    */
    protected static $attributeMap = [
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
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'adminState' => 'admin_state',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * createdAt  资源创建时间
    * updatedAt  最近一次更新资源的时间
    * adminState  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    * status  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
    *
    * @var string[]
    */
    protected static $setters = [
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
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'adminState' => 'setAdminState',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流日志资源唯一标识
    * name  功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
    * tenantId  项目ID
    * description  功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
    * resourceType  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
    * resourceId  resource_type对应资源的唯一ID
    * trafficType  功能说明：流日志采集类型 取值范围：     1）all：采集指定资源的全部流量。     2）accept：采集指定资源允许传入、传出的流量。     3）reject：采集指定资源拒绝传入、传出的流量。
    * logGroupId  日志组ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logTopicId  日志主题ID 请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    * createdAt  资源创建时间
    * updatedAt  最近一次更新资源的时间
    * adminState  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    * status  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
    *
    * @var string[]
    */
    protected static $getters = [
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
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'adminState' => 'getAdminState',
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
    const RESOURCE_TYPE_PORT = 'port';
    const RESOURCE_TYPE_NETWORK = 'network';
    const RESOURCE_TYPE_VPC = 'vpc';
    const TRAFFIC_TYPE_ALL = 'all';
    const TRAFFIC_TYPE_ACCEPT = 'accept';
    const TRAFFIC_TYPE_REJECT = 'reject';
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
            self::TRAFFIC_TYPE_ACCEPT,
            self::TRAFFIC_TYPE_REJECT,
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
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
        if ($this->container['logStoreType'] === null) {
            $invalidProperties[] = "'logStoreType' can't be null";
        }
            $allowedValues = $this->getLogStoreTypeAllowableValues();
                if (!is_null($this->container['logStoreType']) && !in_array($this->container['logStoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logStoreType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['adminState'] === null) {
            $invalidProperties[] = "'adminState' can't be null";
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
    * Gets id
    *  流日志资源唯一标识
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 流日志资源唯一标识
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 功能说明：流日志名称 取值范围：0-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）
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
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID
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
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：流日志描述 取值范围：0-255个字符，不能包含“<”和“>”
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
    *  功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
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
    * @param string $resourceType 功能说明：流日志所属资源类型 取值范围：支持Port、Network、VPC 类型。 约束：当resource_type为Port时，Port资源必须是C3、S3、M3三种虚拟机的网卡。
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
    * Gets logStoreType
    *  功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    *
    * @return string
    */
    public function getLogStoreType()
    {
        return $this->container['logStoreType'];
    }

    /**
    * Sets logStoreType
    *
    * @param string $logStoreType 功能说明：流日志存储类型 取值范围：     lts：存储类型为云日志服务（LTS）。
    *
    * @return $this
    */
    public function setLogStoreType($logStoreType)
    {
        $this->container['logStoreType'] = $logStoreType;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 资源创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  最近一次更新资源的时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 最近一次更新资源的时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets adminState
    *  功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    *
    * @return bool
    */
    public function getAdminState()
    {
        return $this->container['adminState'];
    }

    /**
    * Sets adminState
    *
    * @param bool $adminState 功能说明：流日志管理 取值范围：若为true，表明开启流日志。若为false，则关闭流日志
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
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
    * @param string $status 功能说明：流日志状态 取值范围：ACTIVE、DOWN、ERROR
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

