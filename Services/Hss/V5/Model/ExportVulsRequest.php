<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportVulsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportVulsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * vulId  漏洞ID
    * vulName  漏洞名称
    * hostId  主机id，导出单台主机漏洞时会用到
    * exportSize  导出数据条数
    * category  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    * limit  limit
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * repairPriority  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * cveId  漏洞编号
    * labelList  漏洞标签
    * status  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
    * assetValue  资产重要性 important common test
    * groupName  服务器组名称
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'hostId' => 'string',
            'exportSize' => 'int',
            'category' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'repairPriority' => 'string',
            'handleStatus' => 'string',
            'cveId' => 'string',
            'labelList' => 'string',
            'status' => 'string',
            'assetValue' => 'string',
            'groupName' => 'string',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\ExportVulRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * vulId  漏洞ID
    * vulName  漏洞名称
    * hostId  主机id，导出单台主机漏洞时会用到
    * exportSize  导出数据条数
    * category  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    * limit  limit
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * repairPriority  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * cveId  漏洞编号
    * labelList  漏洞标签
    * status  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
    * assetValue  资产重要性 important common test
    * groupName  服务器组名称
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'type' => null,
        'vulId' => null,
        'vulName' => null,
        'hostId' => null,
        'exportSize' => 'int32',
        'category' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'repairPriority' => null,
        'handleStatus' => null,
        'cveId' => null,
        'labelList' => null,
        'status' => null,
        'assetValue' => null,
        'groupName' => null,
        'body' => null
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
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * vulId  漏洞ID
    * vulName  漏洞名称
    * hostId  主机id，导出单台主机漏洞时会用到
    * exportSize  导出数据条数
    * category  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    * limit  limit
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * repairPriority  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * cveId  漏洞编号
    * labelList  漏洞标签
    * status  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
    * assetValue  资产重要性 important common test
    * groupName  服务器组名称
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'hostId' => 'host_id',
            'exportSize' => 'export_size',
            'category' => 'category',
            'limit' => 'limit',
            'offset' => 'offset',
            'repairPriority' => 'repair_priority',
            'handleStatus' => 'handle_status',
            'cveId' => 'cve_id',
            'labelList' => 'label_list',
            'status' => 'status',
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * vulId  漏洞ID
    * vulName  漏洞名称
    * hostId  主机id，导出单台主机漏洞时会用到
    * exportSize  导出数据条数
    * category  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    * limit  limit
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * repairPriority  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * cveId  漏洞编号
    * labelList  漏洞标签
    * status  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
    * assetValue  资产重要性 important common test
    * groupName  服务器组名称
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'hostId' => 'setHostId',
            'exportSize' => 'setExportSize',
            'category' => 'setCategory',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'repairPriority' => 'setRepairPriority',
            'handleStatus' => 'setHandleStatus',
            'cveId' => 'setCveId',
            'labelList' => 'setLabelList',
            'status' => 'setStatus',
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * vulId  漏洞ID
    * vulName  漏洞名称
    * hostId  主机id，导出单台主机漏洞时会用到
    * exportSize  导出数据条数
    * category  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    * limit  limit
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * repairPriority  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * cveId  漏洞编号
    * labelList  漏洞标签
    * status  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
    * assetValue  资产重要性 important common test
    * groupName  服务器组名称
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'hostId' => 'getHostId',
            'exportSize' => 'getExportSize',
            'category' => 'getCategory',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'repairPriority' => 'getRepairPriority',
            'handleStatus' => 'getHandleStatus',
            'cveId' => 'getCveId',
            'labelList' => 'getLabelList',
            'status' => 'getStatus',
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'body' => 'getBody'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['cveId'] = isset($data['cveId']) ? $data['cveId'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['exportSize'] === null) {
            $invalidProperties[] = "'exportSize' can't be null";
        }
            if (($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 256)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 256)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 128)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labelList']) && (mb_strlen($this->container['labelList']) > 128)) {
                $invalidProperties[] = "invalid value for 'labelList', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['labelList']) && (mb_strlen($this->container['labelList']) < 0)) {
                $invalidProperties[] = "invalid value for 'labelList', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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
    * Gets vulId
    *  漏洞ID
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId 漏洞ID
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
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
    * Gets hostId
    *  主机id，导出单台主机漏洞时会用到
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
    * @param string|null $hostId 主机id，导出单台主机漏洞时会用到
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets exportSize
    *  导出数据条数
    *
    * @return int
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int $exportSize 导出数据条数
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets category
    *  导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 导出漏洞数据类别:   - vul ：漏洞   - host: 主机漏洞
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets repairPriority
    *  修复优先级 Critical：紧急 High：高 Medium：中 Low：低
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
    * @param string|null $repairPriority 修复优先级 Critical：紧急 High：高 Medium：中 Low：低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets handleStatus
    *  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus 处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets cveId
    *  漏洞编号
    *
    * @return string|null
    */
    public function getCveId()
    {
        return $this->container['cveId'];
    }

    /**
    * Sets cveId
    *
    * @param string|null $cveId 漏洞编号
    *
    * @return $this
    */
    public function setCveId($cveId)
    {
        $this->container['cveId'] = $cveId;
        return $this;
    }

    /**
    * Gets labelList
    *  漏洞标签
    *
    * @return string|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string|null $labelList 漏洞标签
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets status
    *  漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
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
    * @param string|null $status 漏洞状态，包含如下：   - vul_status_unfix：未处理   - vul_status_ignored：已忽略   - vul_status_verified：验证中   - vul_status_fixing：修复中   - vul_status_fixed：修复成功   - vul_status_reboot：修复成功待重启   - vul_status_failed：修复失败   - vul_status_fix_after_reboot：请重启主机再次修复
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
    *  资产重要性 important common test
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
    * @param string|null $assetValue 资产重要性 important common test
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
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
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ExportVulRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ExportVulRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

