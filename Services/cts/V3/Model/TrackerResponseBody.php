<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrackerResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrackerResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  追踪器唯一标识。
    * createTime  追踪器创建时间戳。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  是否打开事件文件校验。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * agencyName  云服务委托名称。
    * managementEventSelector  managementEventSelector
    * lts  lts
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    * domainId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * projectId  项目ID。
    * trackerName  标识追踪器名称，当前版本默认为“system”。
    * status  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    * detail  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    * groupId  LTS服务日志组的ID。
    * streamId  LTS服务日志流的ID。
    * obsInfo  obsInfo
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createTime' => 'int',
            'kmsId' => 'string',
            'isSupportValidate' => 'bool',
            'isOrganizationTracker' => 'bool',
            'agencyName' => 'string',
            'managementEventSelector' => '\HuaweiCloud\SDK\Cts\V3\Model\ManagementEventSelector',
            'lts' => '\HuaweiCloud\SDK\Cts\V3\Model\Lts',
            'trackerType' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'trackerName' => 'string',
            'status' => 'string',
            'detail' => 'string',
            'isSupportTraceFilesEncryption' => 'bool',
            'groupId' => 'string',
            'streamId' => 'string',
            'obsInfo' => '\HuaweiCloud\SDK\Cts\V3\Model\ObsInfo',
            'dataBucket' => '\HuaweiCloud\SDK\Cts\V3\Model\DataBucketQuery'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  追踪器唯一标识。
    * createTime  追踪器创建时间戳。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  是否打开事件文件校验。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * agencyName  云服务委托名称。
    * managementEventSelector  managementEventSelector
    * lts  lts
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    * domainId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * projectId  项目ID。
    * trackerName  标识追踪器名称，当前版本默认为“system”。
    * status  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    * detail  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    * groupId  LTS服务日志组的ID。
    * streamId  LTS服务日志流的ID。
    * obsInfo  obsInfo
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createTime' => 'int64',
        'kmsId' => null,
        'isSupportValidate' => null,
        'isOrganizationTracker' => null,
        'agencyName' => null,
        'managementEventSelector' => null,
        'lts' => null,
        'trackerType' => null,
        'domainId' => null,
        'projectId' => null,
        'trackerName' => null,
        'status' => null,
        'detail' => null,
        'isSupportTraceFilesEncryption' => null,
        'groupId' => null,
        'streamId' => null,
        'obsInfo' => null,
        'dataBucket' => null
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
    * id  追踪器唯一标识。
    * createTime  追踪器创建时间戳。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  是否打开事件文件校验。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * agencyName  云服务委托名称。
    * managementEventSelector  managementEventSelector
    * lts  lts
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    * domainId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * projectId  项目ID。
    * trackerName  标识追踪器名称，当前版本默认为“system”。
    * status  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    * detail  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    * groupId  LTS服务日志组的ID。
    * streamId  LTS服务日志流的ID。
    * obsInfo  obsInfo
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'kmsId' => 'kms_id',
            'isSupportValidate' => 'is_support_validate',
            'isOrganizationTracker' => 'is_organization_tracker',
            'agencyName' => 'agency_name',
            'managementEventSelector' => 'management_event_selector',
            'lts' => 'lts',
            'trackerType' => 'tracker_type',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'trackerName' => 'tracker_name',
            'status' => 'status',
            'detail' => 'detail',
            'isSupportTraceFilesEncryption' => 'is_support_trace_files_encryption',
            'groupId' => 'group_id',
            'streamId' => 'stream_id',
            'obsInfo' => 'obs_info',
            'dataBucket' => 'data_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  追踪器唯一标识。
    * createTime  追踪器创建时间戳。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  是否打开事件文件校验。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * agencyName  云服务委托名称。
    * managementEventSelector  managementEventSelector
    * lts  lts
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    * domainId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * projectId  项目ID。
    * trackerName  标识追踪器名称，当前版本默认为“system”。
    * status  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    * detail  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    * groupId  LTS服务日志组的ID。
    * streamId  LTS服务日志流的ID。
    * obsInfo  obsInfo
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'kmsId' => 'setKmsId',
            'isSupportValidate' => 'setIsSupportValidate',
            'isOrganizationTracker' => 'setIsOrganizationTracker',
            'agencyName' => 'setAgencyName',
            'managementEventSelector' => 'setManagementEventSelector',
            'lts' => 'setLts',
            'trackerType' => 'setTrackerType',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'trackerName' => 'setTrackerName',
            'status' => 'setStatus',
            'detail' => 'setDetail',
            'isSupportTraceFilesEncryption' => 'setIsSupportTraceFilesEncryption',
            'groupId' => 'setGroupId',
            'streamId' => 'setStreamId',
            'obsInfo' => 'setObsInfo',
            'dataBucket' => 'setDataBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  追踪器唯一标识。
    * createTime  追踪器创建时间戳。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  是否打开事件文件校验。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * agencyName  云服务委托名称。
    * managementEventSelector  managementEventSelector
    * lts  lts
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    * domainId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * projectId  项目ID。
    * trackerName  标识追踪器名称，当前版本默认为“system”。
    * status  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    * detail  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    * groupId  LTS服务日志组的ID。
    * streamId  LTS服务日志流的ID。
    * obsInfo  obsInfo
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'kmsId' => 'getKmsId',
            'isSupportValidate' => 'getIsSupportValidate',
            'isOrganizationTracker' => 'getIsOrganizationTracker',
            'agencyName' => 'getAgencyName',
            'managementEventSelector' => 'getManagementEventSelector',
            'lts' => 'getLts',
            'trackerType' => 'getTrackerType',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'trackerName' => 'getTrackerName',
            'status' => 'getStatus',
            'detail' => 'getDetail',
            'isSupportTraceFilesEncryption' => 'getIsSupportTraceFilesEncryption',
            'groupId' => 'getGroupId',
            'streamId' => 'getStreamId',
            'obsInfo' => 'getObsInfo',
            'dataBucket' => 'getDataBucket'
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
    const AGENCY_NAME_CTS_ADMIN_TRUST = 'cts_admin_trust';
    const TRACKER_TYPE_SYSTEM = 'system';
    const TRACKER_TYPE_DATA = 'data';
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgencyNameAllowableValues()
    {
        return [
            self::AGENCY_NAME_CTS_ADMIN_TRUST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTrackerTypeAllowableValues()
    {
        return [
            self::TRACKER_TYPE_SYSTEM,
            self::TRACKER_TYPE_DATA,
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
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['kmsId'] = isset($data['kmsId']) ? $data['kmsId'] : null;
        $this->container['isSupportValidate'] = isset($data['isSupportValidate']) ? $data['isSupportValidate'] : null;
        $this->container['isOrganizationTracker'] = isset($data['isOrganizationTracker']) ? $data['isOrganizationTracker'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['managementEventSelector'] = isset($data['managementEventSelector']) ? $data['managementEventSelector'] : null;
        $this->container['lts'] = isset($data['lts']) ? $data['lts'] : null;
        $this->container['trackerType'] = isset($data['trackerType']) ? $data['trackerType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['isSupportTraceFilesEncryption'] = isset($data['isSupportTraceFilesEncryption']) ? $data['isSupportTraceFilesEncryption'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
        $this->container['dataBucket'] = isset($data['dataBucket']) ? $data['dataBucket'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 200)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 946656000000.";
            }
            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) > 200)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAgencyNameAllowableValues();
                if (!is_null($this->container['agencyName']) && !in_array($this->container['agencyName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agencyName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTrackerTypeAllowableValues();
                if (!is_null($this->container['trackerType']) && !in_array($this->container['trackerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trackerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 40)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 15)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 40)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 15)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) > 32)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['detail']) && (mb_strlen($this->container['detail']) > 360)) {
                $invalidProperties[] = "invalid value for 'detail', the character length must be smaller than or equal to 360.";
            }
            if (!is_null($this->container['detail']) && (mb_strlen($this->container['detail']) < 0)) {
                $invalidProperties[] = "invalid value for 'detail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be bigger than or equal to 36.";
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
    *  追踪器唯一标识。
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
    * @param string|null $id 追踪器唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createTime
    *  追踪器创建时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 追踪器创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets kmsId
    *  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    *
    * @return string|null
    */
    public function getKmsId()
    {
        return $this->container['kmsId'];
    }

    /**
    * Sets kmsId
    *
    * @param string|null $kmsId 事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"和\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    *
    * @return $this
    */
    public function setKmsId($kmsId)
    {
        $this->container['kmsId'] = $kmsId;
        return $this;
    }

    /**
    * Gets isSupportValidate
    *  是否打开事件文件校验。
    *
    * @return bool|null
    */
    public function getIsSupportValidate()
    {
        return $this->container['isSupportValidate'];
    }

    /**
    * Sets isSupportValidate
    *
    * @param bool|null $isSupportValidate 是否打开事件文件校验。
    *
    * @return $this
    */
    public function setIsSupportValidate($isSupportValidate)
    {
        $this->container['isSupportValidate'] = $isSupportValidate;
        return $this;
    }

    /**
    * Gets isOrganizationTracker
    *  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    *
    * @return bool|null
    */
    public function getIsOrganizationTracker()
    {
        return $this->container['isOrganizationTracker'];
    }

    /**
    * Sets isOrganizationTracker
    *
    * @param bool|null $isOrganizationTracker 是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    *
    * @return $this
    */
    public function setIsOrganizationTracker($isOrganizationTracker)
    {
        $this->container['isOrganizationTracker'] = $isOrganizationTracker;
        return $this;
    }

    /**
    * Gets agencyName
    *  云服务委托名称。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 云服务委托名称。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets managementEventSelector
    *  managementEventSelector
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\ManagementEventSelector|null
    */
    public function getManagementEventSelector()
    {
        return $this->container['managementEventSelector'];
    }

    /**
    * Sets managementEventSelector
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\ManagementEventSelector|null $managementEventSelector managementEventSelector
    *
    * @return $this
    */
    public function setManagementEventSelector($managementEventSelector)
    {
        $this->container['managementEventSelector'] = $managementEventSelector;
        return $this;
    }

    /**
    * Gets lts
    *  lts
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\Lts|null
    */
    public function getLts()
    {
        return $this->container['lts'];
    }

    /**
    * Sets lts
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\Lts|null $lts lts
    *
    * @return $this
    */
    public function setLts($lts)
    {
        $this->container['lts'] = $lts;
        return $this;
    }

    /**
    * Gets trackerType
    *  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    *
    * @return string|null
    */
    public function getTrackerType()
    {
        return $this->container['trackerType'];
    }

    /**
    * Sets trackerType
    *
    * @param string|null $trackerType 标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器（system）和数据类追踪器（data）。
    *
    * @return $this
    */
    public function setTrackerType($trackerType)
    {
        $this->container['trackerType'] = $trackerType;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets trackerName
    *  标识追踪器名称，当前版本默认为“system”。
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 标识追踪器名称，当前版本默认为“system”。
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets status
    *  标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
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
    * @param string|null $status 标识追踪器状态，包括正常（enabled），停止（disabled）和异常（error）三种状态，状态为异常时需通过明细（detail）字段说明错误来源。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detail
    *  该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 该参数仅在追踪器状态异常时返回，用于标识追踪器异常的原因，包括桶策略异常（bucketPolicyError），桶不存在（noBucket）和欠费或冻结（arrears）三种原因。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets isSupportTraceFilesEncryption
    *  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    *
    * @return bool|null
    */
    public function getIsSupportTraceFilesEncryption()
    {
        return $this->container['isSupportTraceFilesEncryption'];
    }

    /**
    * Sets isSupportTraceFilesEncryption
    *
    * @param bool|null $isSupportTraceFilesEncryption 事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。 当前环境仅\"tracker_type\"参数值为\"system\"时支持该功能。
    *
    * @return $this
    */
    public function setIsSupportTraceFilesEncryption($isSupportTraceFilesEncryption)
    {
        $this->container['isSupportTraceFilesEncryption'] = $isSupportTraceFilesEncryption;
        return $this;
    }

    /**
    * Gets groupId
    *  LTS服务日志组的ID。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId LTS服务日志组的ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets streamId
    *  LTS服务日志流的ID。
    *
    * @return string|null
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string|null $streamId LTS服务日志流的ID。
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\ObsInfo|null
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\ObsInfo|null $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
        return $this;
    }

    /**
    * Gets dataBucket
    *  dataBucket
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\DataBucketQuery|null
    */
    public function getDataBucket()
    {
        return $this->container['dataBucket'];
    }

    /**
    * Sets dataBucket
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\DataBucketQuery|null $dataBucket dataBucket
    *
    * @return $this
    */
    public function setDataBucket($dataBucket)
    {
        $this->container['dataBucket'] = $dataBucket;
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

