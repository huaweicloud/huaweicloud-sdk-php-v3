<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTrackerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTrackerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    * trackerName  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    * status  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * managementEventSelector  managementEventSelector
    * isLtsEnabled  是否打开事件分析。
    * obsInfo  obsInfo
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trackerType' => 'string',
            'trackerName' => 'string',
            'status' => 'string',
            'isOrganizationTracker' => 'bool',
            'managementEventSelector' => '\HuaweiCloud\SDK\Cts\v3\Model\ManagementEventSelector',
            'isLtsEnabled' => 'bool',
            'obsInfo' => '\HuaweiCloud\SDK\Cts\v3\Model\TrackerObsInfo',
            'isSupportTraceFilesEncryption' => 'bool',
            'kmsId' => 'string',
            'isSupportValidate' => 'bool',
            'dataBucket' => '\HuaweiCloud\SDK\Cts\v3\Model\DataBucket'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    * trackerName  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    * status  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * managementEventSelector  managementEventSelector
    * isLtsEnabled  是否打开事件分析。
    * obsInfo  obsInfo
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trackerType' => null,
        'trackerName' => null,
        'status' => null,
        'isOrganizationTracker' => null,
        'managementEventSelector' => null,
        'isLtsEnabled' => null,
        'obsInfo' => null,
        'isSupportTraceFilesEncryption' => null,
        'kmsId' => null,
        'isSupportValidate' => null,
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
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    * trackerName  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    * status  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * managementEventSelector  managementEventSelector
    * isLtsEnabled  是否打开事件分析。
    * obsInfo  obsInfo
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trackerType' => 'tracker_type',
            'trackerName' => 'tracker_name',
            'status' => 'status',
            'isOrganizationTracker' => 'is_organization_tracker',
            'managementEventSelector' => 'management_event_selector',
            'isLtsEnabled' => 'is_lts_enabled',
            'obsInfo' => 'obs_info',
            'isSupportTraceFilesEncryption' => 'is_support_trace_files_encryption',
            'kmsId' => 'kms_id',
            'isSupportValidate' => 'is_support_validate',
            'dataBucket' => 'data_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    * trackerName  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    * status  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * managementEventSelector  managementEventSelector
    * isLtsEnabled  是否打开事件分析。
    * obsInfo  obsInfo
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $setters = [
            'trackerType' => 'setTrackerType',
            'trackerName' => 'setTrackerName',
            'status' => 'setStatus',
            'isOrganizationTracker' => 'setIsOrganizationTracker',
            'managementEventSelector' => 'setManagementEventSelector',
            'isLtsEnabled' => 'setIsLtsEnabled',
            'obsInfo' => 'setObsInfo',
            'isSupportTraceFilesEncryption' => 'setIsSupportTraceFilesEncryption',
            'kmsId' => 'setKmsId',
            'isSupportValidate' => 'setIsSupportValidate',
            'dataBucket' => 'setDataBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trackerType  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    * trackerName  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    * status  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    * isOrganizationTracker  是否应用到我的组织。 只针对管理类追踪器。设置为true时，ORG组织下所有成员当前区域的审计日志会转储到该追踪器配置的OBS桶或者LTS日志流，但是事件列表界面不支持查看其它组织成员的审计日志。
    * managementEventSelector  managementEventSelector
    * isLtsEnabled  是否打开事件分析。
    * obsInfo  obsInfo
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    * kmsId  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportValidate  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    * dataBucket  dataBucket
    *
    * @var string[]
    */
    protected static $getters = [
            'trackerType' => 'getTrackerType',
            'trackerName' => 'getTrackerName',
            'status' => 'getStatus',
            'isOrganizationTracker' => 'getIsOrganizationTracker',
            'managementEventSelector' => 'getManagementEventSelector',
            'isLtsEnabled' => 'getIsLtsEnabled',
            'obsInfo' => 'getObsInfo',
            'isSupportTraceFilesEncryption' => 'getIsSupportTraceFilesEncryption',
            'kmsId' => 'getKmsId',
            'isSupportValidate' => 'getIsSupportValidate',
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
    const TRACKER_TYPE_SYSTEM = 'system';
    const TRACKER_TYPE_DATA = 'data';
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    

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
        $this->container['trackerType'] = isset($data['trackerType']) ? $data['trackerType'] : null;
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isOrganizationTracker'] = isset($data['isOrganizationTracker']) ? $data['isOrganizationTracker'] : null;
        $this->container['managementEventSelector'] = isset($data['managementEventSelector']) ? $data['managementEventSelector'] : null;
        $this->container['isLtsEnabled'] = isset($data['isLtsEnabled']) ? $data['isLtsEnabled'] : null;
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
        $this->container['isSupportTraceFilesEncryption'] = isset($data['isSupportTraceFilesEncryption']) ? $data['isSupportTraceFilesEncryption'] : null;
        $this->container['kmsId'] = isset($data['kmsId']) ? $data['kmsId'] : null;
        $this->container['isSupportValidate'] = isset($data['isSupportValidate']) ? $data['isSupportValidate'] : null;
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
        if ($this->container['trackerType'] === null) {
            $invalidProperties[] = "'trackerType' can't be null";
        }
            $allowedValues = $this->getTrackerTypeAllowableValues();
                if (!is_null($this->container['trackerType']) && !in_array($this->container['trackerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trackerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['trackerName'] === null) {
            $invalidProperties[] = "'trackerName' can't be null";
        }
            if ((mb_strlen($this->container['trackerName']) > 32)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['trackerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) > 200)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be bigger than or equal to 0.";
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
    * Gets trackerType
    *  标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    *
    * @return string
    */
    public function getTrackerType()
    {
        return $this->container['trackerType'];
    }

    /**
    * Sets trackerType
    *
    * @param string $trackerType 标识追踪器类型。 目前支持系统追踪器类型有管理类追踪器(system)和数据类追踪器(data)。 数据类追踪器和管理类追踪器共同参数有：is_lts_enabled, obs_info; 管理类追踪器参数：is_support_trace_files_encryption, kms_id, is_support_validate, is_support_validate; 数据类追踪器参数：tracker_name, data_bucket。
    *
    * @return $this
    */
    public function setTrackerType($trackerType)
    {
        $this->container['trackerType'] = $trackerType;
        return $this;
    }

    /**
    * Gets trackerName
    *  标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
    *
    * @return string
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string $trackerName 标识追踪器名称。 当\"tracker_type\"参数值为\"system\"时该参数为默认值\"system\"。 当\"tracker_type\"参数值为\"data\"时该参数需要指定追踪器名称\"。
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
    *  标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
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
    * @param string|null $status 标识追踪器状态，该接口中可修改的状态包括正常（enabled）和停止（disabled）。如果选择修改状态为停止，则修改成功后追踪器停止记录事件。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets managementEventSelector
    *  managementEventSelector
    *
    * @return \HuaweiCloud\SDK\Cts\v3\Model\ManagementEventSelector|null
    */
    public function getManagementEventSelector()
    {
        return $this->container['managementEventSelector'];
    }

    /**
    * Sets managementEventSelector
    *
    * @param \HuaweiCloud\SDK\Cts\v3\Model\ManagementEventSelector|null $managementEventSelector managementEventSelector
    *
    * @return $this
    */
    public function setManagementEventSelector($managementEventSelector)
    {
        $this->container['managementEventSelector'] = $managementEventSelector;
        return $this;
    }

    /**
    * Gets isLtsEnabled
    *  是否打开事件分析。
    *
    * @return bool|null
    */
    public function getIsLtsEnabled()
    {
        return $this->container['isLtsEnabled'];
    }

    /**
    * Sets isLtsEnabled
    *
    * @param bool|null $isLtsEnabled 是否打开事件分析。
    *
    * @return $this
    */
    public function setIsLtsEnabled($isLtsEnabled)
    {
        $this->container['isLtsEnabled'] = $isLtsEnabled;
        return $this;
    }

    /**
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Cts\v3\Model\TrackerObsInfo|null
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Cts\v3\Model\TrackerObsInfo|null $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
        return $this;
    }

    /**
    * Gets isSupportTraceFilesEncryption
    *  事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
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
    * @param bool|null $isSupportTraceFilesEncryption 事件文件转储加密功能开关。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 该参数必须与kms_id参数同时使用。
    *
    * @return $this
    */
    public function setIsSupportTraceFilesEncryption($isSupportTraceFilesEncryption)
    {
        $this->container['isSupportTraceFilesEncryption'] = $isSupportTraceFilesEncryption;
        return $this;
    }

    /**
    * Gets kmsId
    *  事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
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
    * @param string|null $kmsId 事件文件转储加密所采用的秘钥id（从KMS获取）。 当\"tracker_type\"参数值为\"system\"时该参数值有效。 当\"is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
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
    *  事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
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
    * @param bool|null $isSupportValidate 事件文件转储时是否打开事件文件校验。 当\"tracker_type\"参数值为\"system\"时该参数值有效。
    *
    * @return $this
    */
    public function setIsSupportValidate($isSupportValidate)
    {
        $this->container['isSupportValidate'] = $isSupportValidate;
        return $this;
    }

    /**
    * Gets dataBucket
    *  dataBucket
    *
    * @return \HuaweiCloud\SDK\Cts\v3\Model\DataBucket|null
    */
    public function getDataBucket()
    {
        return $this->container['dataBucket'];
    }

    /**
    * Sets dataBucket
    *
    * @param \HuaweiCloud\SDK\Cts\v3\Model\DataBucket|null $dataBucket dataBucket
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

