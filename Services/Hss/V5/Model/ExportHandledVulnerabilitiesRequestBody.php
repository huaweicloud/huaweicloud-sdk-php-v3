<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportHandledVulnerabilitiesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportHandledVulnerabilitiesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  漏洞名称
    * repairPriority  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    * hostName  主机名称
    * hostIp  主机ip
    * isAffectBusiness  是否影响业务
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * assetValue  资产重要性 important:重要 common：一般 test：测试
    * label  漏洞标签
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * groupName  服务器组名称
    * handleCycle  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    * specificVuls  指定要导出的漏洞数据
    * exportSize  导出数据条数
    * exportHeaders  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'repairPriority' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'isAffectBusiness' => 'bool',
            'status' => 'string',
            'assetValue' => 'string',
            'label' => 'string',
            'type' => 'string',
            'groupName' => 'string',
            'handleCycle' => 'string',
            'specificVuls' => '\HuaweiCloud\SDK\Hss\V5\Model\ExportHandledVulnerabilitiesRequestBodySpecificVuls[]',
            'exportSize' => 'int',
            'exportHeaders' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  漏洞名称
    * repairPriority  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    * hostName  主机名称
    * hostIp  主机ip
    * isAffectBusiness  是否影响业务
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * assetValue  资产重要性 important:重要 common：一般 test：测试
    * label  漏洞标签
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * groupName  服务器组名称
    * handleCycle  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    * specificVuls  指定要导出的漏洞数据
    * exportSize  导出数据条数
    * exportHeaders  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'repairPriority' => null,
        'hostName' => null,
        'hostIp' => null,
        'isAffectBusiness' => null,
        'status' => null,
        'assetValue' => null,
        'label' => null,
        'type' => null,
        'groupName' => null,
        'handleCycle' => null,
        'specificVuls' => null,
        'exportSize' => 'int32',
        'exportHeaders' => null
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
    * vulName  漏洞名称
    * repairPriority  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    * hostName  主机名称
    * hostIp  主机ip
    * isAffectBusiness  是否影响业务
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * assetValue  资产重要性 important:重要 common：一般 test：测试
    * label  漏洞标签
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * groupName  服务器组名称
    * handleCycle  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    * specificVuls  指定要导出的漏洞数据
    * exportSize  导出数据条数
    * exportHeaders  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'repairPriority' => 'repair_priority',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'isAffectBusiness' => 'is_affect_business',
            'status' => 'status',
            'assetValue' => 'asset_value',
            'label' => 'label',
            'type' => 'type',
            'groupName' => 'group_name',
            'handleCycle' => 'handle_cycle',
            'specificVuls' => 'specific_vuls',
            'exportSize' => 'export_size',
            'exportHeaders' => 'export_headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  漏洞名称
    * repairPriority  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    * hostName  主机名称
    * hostIp  主机ip
    * isAffectBusiness  是否影响业务
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * assetValue  资产重要性 important:重要 common：一般 test：测试
    * label  漏洞标签
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * groupName  服务器组名称
    * handleCycle  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    * specificVuls  指定要导出的漏洞数据
    * exportSize  导出数据条数
    * exportHeaders  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'repairPriority' => 'setRepairPriority',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'status' => 'setStatus',
            'assetValue' => 'setAssetValue',
            'label' => 'setLabel',
            'type' => 'setType',
            'groupName' => 'setGroupName',
            'handleCycle' => 'setHandleCycle',
            'specificVuls' => 'setSpecificVuls',
            'exportSize' => 'setExportSize',
            'exportHeaders' => 'setExportHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  漏洞名称
    * repairPriority  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    * hostName  主机名称
    * hostIp  主机ip
    * isAffectBusiness  是否影响业务
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * assetValue  资产重要性 important:重要 common：一般 test：测试
    * label  漏洞标签
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * groupName  服务器组名称
    * handleCycle  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    * specificVuls  指定要导出的漏洞数据
    * exportSize  导出数据条数
    * exportHeaders  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'repairPriority' => 'getRepairPriority',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'isAffectBusiness' => 'getIsAffectBusiness',
            'status' => 'getStatus',
            'assetValue' => 'getAssetValue',
            'label' => 'getLabel',
            'type' => 'getType',
            'groupName' => 'getGroupName',
            'handleCycle' => 'getHandleCycle',
            'specificVuls' => 'getSpecificVuls',
            'exportSize' => 'getExportSize',
            'exportHeaders' => 'getExportHeaders'
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
    const REPAIR_PRIORITY_CRITICAL = 'Critical';
    const REPAIR_PRIORITY_HIGH = 'High';
    const REPAIR_PRIORITY_MEDIUM = 'Medium';
    const REPAIR_PRIORITY_LOW = 'Low';
    const STATUS_VUL_STATUS_UNFIX = 'vul_status_unfix';
    const STATUS_VUL_STATUS_IGNORED = 'vul_status_ignored';
    const STATUS_VUL_STATUS_VERIFIED = 'vul_status_verified';
    const STATUS_VUL_STATUS_FIXING = 'vul_status_fixing';
    const STATUS_VUL_STATUS_FIXED = 'vul_status_fixed';
    const STATUS_VUL_STATUS_REBOOT = 'vul_status_reboot';
    const STATUS_VUL_STATUS_FAILED = 'vul_status_failed';
    const STATUS_VUL_STATUS_FIX_AFTER_REBOOT = 'vul_status_fix_after_reboot';
    const ASSET_VALUE_IMPORTANT = 'important';
    const ASSET_VALUE_COMMON = 'common';
    const ASSET_VALUE_TEST = 'test';
    const TYPE_LINUX_VUL = 'linux_vul';
    const TYPE_WINDOWS_VUL = 'windows_vul';
    const TYPE_WEB_CMS = 'web_cms';
    const TYPE_APP_VUL = 'app_vul';
    const TYPE_URGENT_VUL = 'urgent_vul';
    const HANDLE_CYCLE_TODAY = 'today';
    const HANDLE_CYCLE_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRepairPriorityAllowableValues()
    {
        return [
            self::REPAIR_PRIORITY_CRITICAL,
            self::REPAIR_PRIORITY_HIGH,
            self::REPAIR_PRIORITY_MEDIUM,
            self::REPAIR_PRIORITY_LOW,
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
            self::STATUS_VUL_STATUS_UNFIX,
            self::STATUS_VUL_STATUS_IGNORED,
            self::STATUS_VUL_STATUS_VERIFIED,
            self::STATUS_VUL_STATUS_FIXING,
            self::STATUS_VUL_STATUS_FIXED,
            self::STATUS_VUL_STATUS_REBOOT,
            self::STATUS_VUL_STATUS_FAILED,
            self::STATUS_VUL_STATUS_FIX_AFTER_REBOOT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetValueAllowableValues()
    {
        return [
            self::ASSET_VALUE_IMPORTANT,
            self::ASSET_VALUE_COMMON,
            self::ASSET_VALUE_TEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LINUX_VUL,
            self::TYPE_WINDOWS_VUL,
            self::TYPE_WEB_CMS,
            self::TYPE_APP_VUL,
            self::TYPE_URGENT_VUL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHandleCycleAllowableValues()
    {
        return [
            self::HANDLE_CYCLE_TODAY,
            self::HANDLE_CYCLE_ALL,
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
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['handleCycle'] = isset($data['handleCycle']) ? $data['handleCycle'] : null;
        $this->container['specificVuls'] = isset($data['specificVuls']) ? $data['specificVuls'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRepairPriorityAllowableValues();
                if (!is_null($this->container['repairPriority']) && !in_array($this->container['repairPriority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'repairPriority', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAssetValueAllowableValues();
                if (!is_null($this->container['assetValue']) && !in_array($this->container['assetValue'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetValue', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 128)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getHandleCycleAllowableValues();
                if (!is_null($this->container['handleCycle']) && !in_array($this->container['handleCycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'handleCycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
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
    * Gets vulName
    *  漏洞名称
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName 漏洞名称
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets repairPriority
    *  漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority 漏洞修复优先级,包含如下 - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  主机ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 主机ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets isAffectBusiness
    *  是否影响业务
    *
    * @return bool|null
    */
    public function getIsAffectBusiness()
    {
        return $this->container['isAffectBusiness'];
    }

    /**
    * Sets isAffectBusiness
    *
    * @param bool|null $isAffectBusiness 是否影响业务
    *
    * @return $this
    */
    public function setIsAffectBusiness($isAffectBusiness)
    {
        $this->container['isAffectBusiness'] = $isAffectBusiness;
        return $this;
    }

    /**
    * Gets status
    *  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
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
    * @param string|null $status 漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性 important:重要 common：一般 test：测试
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue 资产重要性 important:重要 common：一般 test：测试
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets label
    *  漏洞标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 漏洞标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets type
    *  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets groupName
    *  服务器组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 服务器组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets handleCycle
    *  需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    *
    * @return string|null
    */
    public function getHandleCycle()
    {
        return $this->container['handleCycle'];
    }

    /**
    * Sets handleCycle
    *
    * @param string|null $handleCycle 需要查询的漏洞处置周期：   - today：查询今日处理的数据   - all：查询所有已处理数据
    *
    * @return $this
    */
    public function setHandleCycle($handleCycle)
    {
        $this->container['handleCycle'] = $handleCycle;
        return $this;
    }

    /**
    * Gets specificVuls
    *  指定要导出的漏洞数据
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ExportHandledVulnerabilitiesRequestBodySpecificVuls[]|null
    */
    public function getSpecificVuls()
    {
        return $this->container['specificVuls'];
    }

    /**
    * Sets specificVuls
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ExportHandledVulnerabilitiesRequestBodySpecificVuls[]|null $specificVuls 指定要导出的漏洞数据
    *
    * @return $this
    */
    public function setSpecificVuls($specificVuls)
    {
        $this->container['specificVuls'] = $specificVuls;
        return $this;
    }

    /**
    * Gets exportSize
    *  导出数据条数
    *
    * @return int|null
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int|null $exportSize 导出数据条数
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets exportHeaders
    *  导出漏洞数据的表头信息列表
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders 导出漏洞数据的表头信息列表
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
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

