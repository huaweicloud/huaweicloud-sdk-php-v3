<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  受漏洞影响的服务器id
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  受影响主机名称
    * hostIp  受影响主机ip
    * agentId  主机对应的Agent ID
    * version  主机绑定的配额版本
    * cveNum  漏洞cve总数
    * cveIdList  漏洞对应的cve id列表
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairCmd  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    * regionName  地域
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * groupId  服务器组id
    * groupName  服务器组名称
    * osType  操作系统
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    * supportRestore  是否可以回滚到修复漏洞时创建的备份
    * disabledOperateTypes  漏洞在当前主机上不可进行的操作类型列表
    * repairPriority  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'severityLevel' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'agentId' => 'string',
            'version' => 'string',
            'cveNum' => 'int',
            'cveIdList' => 'string[]',
            'status' => 'string',
            'repairCmd' => 'string',
            'appPath' => 'string',
            'regionName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'osType' => 'string',
            'assetValue' => 'string',
            'isAffectBusiness' => 'bool',
            'firstScanTime' => 'int',
            'scanTime' => 'int',
            'supportRestore' => 'bool',
            'disabledOperateTypes' => '\HuaweiCloud\SDK\Hss\V5\Model\VulHostInfoDisabledOperateTypes[]',
            'repairPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  受漏洞影响的服务器id
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  受影响主机名称
    * hostIp  受影响主机ip
    * agentId  主机对应的Agent ID
    * version  主机绑定的配额版本
    * cveNum  漏洞cve总数
    * cveIdList  漏洞对应的cve id列表
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairCmd  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    * regionName  地域
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * groupId  服务器组id
    * groupName  服务器组名称
    * osType  操作系统
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    * supportRestore  是否可以回滚到修复漏洞时创建的备份
    * disabledOperateTypes  漏洞在当前主机上不可进行的操作类型列表
    * repairPriority  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'severityLevel' => null,
        'hostName' => null,
        'hostIp' => null,
        'agentId' => null,
        'version' => null,
        'cveNum' => null,
        'cveIdList' => null,
        'status' => null,
        'repairCmd' => null,
        'appPath' => null,
        'regionName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'groupId' => null,
        'groupName' => null,
        'osType' => null,
        'assetValue' => null,
        'isAffectBusiness' => null,
        'firstScanTime' => 'int64',
        'scanTime' => 'int64',
        'supportRestore' => null,
        'disabledOperateTypes' => null,
        'repairPriority' => null
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
    * hostId  受漏洞影响的服务器id
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  受影响主机名称
    * hostIp  受影响主机ip
    * agentId  主机对应的Agent ID
    * version  主机绑定的配额版本
    * cveNum  漏洞cve总数
    * cveIdList  漏洞对应的cve id列表
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairCmd  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    * regionName  地域
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * groupId  服务器组id
    * groupName  服务器组名称
    * osType  操作系统
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    * supportRestore  是否可以回滚到修复漏洞时创建的备份
    * disabledOperateTypes  漏洞在当前主机上不可进行的操作类型列表
    * repairPriority  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'severityLevel' => 'severity_level',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'agentId' => 'agent_id',
            'version' => 'version',
            'cveNum' => 'cve_num',
            'cveIdList' => 'cve_id_list',
            'status' => 'status',
            'repairCmd' => 'repair_cmd',
            'appPath' => 'app_path',
            'regionName' => 'region_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'osType' => 'os_type',
            'assetValue' => 'asset_value',
            'isAffectBusiness' => 'is_affect_business',
            'firstScanTime' => 'first_scan_time',
            'scanTime' => 'scan_time',
            'supportRestore' => 'support_restore',
            'disabledOperateTypes' => 'disabled_operate_types',
            'repairPriority' => 'repair_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  受漏洞影响的服务器id
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  受影响主机名称
    * hostIp  受影响主机ip
    * agentId  主机对应的Agent ID
    * version  主机绑定的配额版本
    * cveNum  漏洞cve总数
    * cveIdList  漏洞对应的cve id列表
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairCmd  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    * regionName  地域
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * groupId  服务器组id
    * groupName  服务器组名称
    * osType  操作系统
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    * supportRestore  是否可以回滚到修复漏洞时创建的备份
    * disabledOperateTypes  漏洞在当前主机上不可进行的操作类型列表
    * repairPriority  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'severityLevel' => 'setSeverityLevel',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'agentId' => 'setAgentId',
            'version' => 'setVersion',
            'cveNum' => 'setCveNum',
            'cveIdList' => 'setCveIdList',
            'status' => 'setStatus',
            'repairCmd' => 'setRepairCmd',
            'appPath' => 'setAppPath',
            'regionName' => 'setRegionName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'osType' => 'setOsType',
            'assetValue' => 'setAssetValue',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'firstScanTime' => 'setFirstScanTime',
            'scanTime' => 'setScanTime',
            'supportRestore' => 'setSupportRestore',
            'disabledOperateTypes' => 'setDisabledOperateTypes',
            'repairPriority' => 'setRepairPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  受漏洞影响的服务器id
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  受影响主机名称
    * hostIp  受影响主机ip
    * agentId  主机对应的Agent ID
    * version  主机绑定的配额版本
    * cveNum  漏洞cve总数
    * cveIdList  漏洞对应的cve id列表
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairCmd  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    * regionName  地域
    * publicIp  服务器公网ip
    * privateIp  服务器私网ip
    * groupId  服务器组id
    * groupName  服务器组名称
    * osType  操作系统
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    * supportRestore  是否可以回滚到修复漏洞时创建的备份
    * disabledOperateTypes  漏洞在当前主机上不可进行的操作类型列表
    * repairPriority  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'severityLevel' => 'getSeverityLevel',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'agentId' => 'getAgentId',
            'version' => 'getVersion',
            'cveNum' => 'getCveNum',
            'cveIdList' => 'getCveIdList',
            'status' => 'getStatus',
            'repairCmd' => 'getRepairCmd',
            'appPath' => 'getAppPath',
            'regionName' => 'getRegionName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'osType' => 'getOsType',
            'assetValue' => 'getAssetValue',
            'isAffectBusiness' => 'getIsAffectBusiness',
            'firstScanTime' => 'getFirstScanTime',
            'scanTime' => 'getScanTime',
            'supportRestore' => 'getSupportRestore',
            'disabledOperateTypes' => 'getDisabledOperateTypes',
            'repairPriority' => 'getRepairPriority'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['cveNum'] = isset($data['cveNum']) ? $data['cveNum'] : null;
        $this->container['cveIdList'] = isset($data['cveIdList']) ? $data['cveIdList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['repairCmd'] = isset($data['repairCmd']) ? $data['repairCmd'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['supportRestore'] = isset($data['supportRestore']) ? $data['supportRestore'] : null;
        $this->container['disabledOperateTypes'] = isset($data['disabledOperateTypes']) ? $data['disabledOperateTypes'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cveNum']) && ($this->container['cveNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'cveNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['cveNum']) && ($this->container['cveNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cveNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 10)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  受漏洞影响的服务器id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 受漏洞影响的服务器id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets severityLevel
    *  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel 危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets hostName
    *  受影响主机名称
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
    * @param string|null $hostName 受影响主机名称
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
    *  受影响主机ip
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
    * @param string|null $hostIp 受影响主机ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets agentId
    *  主机对应的Agent ID
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 主机对应的Agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets version
    *  主机绑定的配额版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 主机绑定的配额版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets cveNum
    *  漏洞cve总数
    *
    * @return int|null
    */
    public function getCveNum()
    {
        return $this->container['cveNum'];
    }

    /**
    * Sets cveNum
    *
    * @param int|null $cveNum 漏洞cve总数
    *
    * @return $this
    */
    public function setCveNum($cveNum)
    {
        $this->container['cveNum'] = $cveNum;
        return $this;
    }

    /**
    * Gets cveIdList
    *  漏洞对应的cve id列表
    *
    * @return string[]|null
    */
    public function getCveIdList()
    {
        return $this->container['cveIdList'];
    }

    /**
    * Sets cveIdList
    *
    * @param string[]|null $cveIdList 漏洞对应的cve id列表
    *
    * @return $this
    */
    public function setCveIdList($cveIdList)
    {
        $this->container['cveIdList'] = $cveIdList;
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
    * Gets repairCmd
    *  修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    *
    * @return string|null
    */
    public function getRepairCmd()
    {
        return $this->container['repairCmd'];
    }

    /**
    * Sets repairCmd
    *
    * @param string|null $repairCmd 修复漏洞需要执行的命令行（只有Linux漏洞有该字段）
    *
    * @return $this
    */
    public function setRepairCmd($repairCmd)
    {
        $this->container['repairCmd'] = $repairCmd;
        return $this;
    }

    /**
    * Gets appPath
    *  应用软件的路径（只有应用漏洞有该字段）
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath 应用软件的路径（只有应用漏洞有该字段）
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets regionName
    *  地域
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 地域
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets publicIp
    *  服务器公网ip
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 服务器公网ip
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  服务器私网ip
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 服务器私网ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets groupId
    *  服务器组id
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
    * @param string|null $groupId 服务器组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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
    * Gets osType
    *  操作系统
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    * @param string|null $assetValue 资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
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
    * Gets firstScanTime
    *  首次扫描时间
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime 首次扫描时间
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets scanTime
    *  扫描时间，时间戳单位：毫秒
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime 扫描时间，时间戳单位：毫秒
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets supportRestore
    *  是否可以回滚到修复漏洞时创建的备份
    *
    * @return bool|null
    */
    public function getSupportRestore()
    {
        return $this->container['supportRestore'];
    }

    /**
    * Sets supportRestore
    *
    * @param bool|null $supportRestore 是否可以回滚到修复漏洞时创建的备份
    *
    * @return $this
    */
    public function setSupportRestore($supportRestore)
    {
        $this->container['supportRestore'] = $supportRestore;
        return $this;
    }

    /**
    * Gets disabledOperateTypes
    *  漏洞在当前主机上不可进行的操作类型列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulHostInfoDisabledOperateTypes[]|null
    */
    public function getDisabledOperateTypes()
    {
        return $this->container['disabledOperateTypes'];
    }

    /**
    * Sets disabledOperateTypes
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulHostInfoDisabledOperateTypes[]|null $disabledOperateTypes 漏洞在当前主机上不可进行的操作类型列表
    *
    * @return $this
    */
    public function setDisabledOperateTypes($disabledOperateTypes)
    {
        $this->container['disabledOperateTypes'] = $disabledOperateTypes;
        return $this;
    }

    /**
    * Gets repairPriority
    *  修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
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
    * @param string|null $repairPriority 修复优先级,包含如下  - Critical 紧急  - High 高  - Medium 中  - Low 低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
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

