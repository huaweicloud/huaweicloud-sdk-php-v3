<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportAntiVirusResultRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportAntiVirusResultRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * malwareName  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * filePath  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    * exportSize  导出条数
    * fileHash  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    * taskName  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * manualIsolate  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'handleStatus' => 'string',
            'severityList' => 'string[]',
            'assetValue' => 'string',
            'malwareName' => 'string',
            'filePath' => 'string',
            'exportSize' => 'int',
            'fileHash' => 'string',
            'taskName' => 'string',
            'manualIsolate' => 'bool',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\ExportAntiVirusResultRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * malwareName  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * filePath  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    * exportSize  导出条数
    * fileHash  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    * taskName  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * manualIsolate  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'handleStatus' => null,
        'severityList' => null,
        'assetValue' => null,
        'malwareName' => null,
        'filePath' => null,
        'exportSize' => 'int32',
        'fileHash' => null,
        'taskName' => null,
        'manualIsolate' => null,
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * malwareName  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * filePath  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    * exportSize  导出条数
    * fileHash  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    * taskName  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * manualIsolate  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'handleStatus' => 'handle_status',
            'severityList' => 'severity_list',
            'assetValue' => 'asset_value',
            'malwareName' => 'malware_name',
            'filePath' => 'file_path',
            'exportSize' => 'export_size',
            'fileHash' => 'file_hash',
            'taskName' => 'task_name',
            'manualIsolate' => 'manual_isolate',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * malwareName  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * filePath  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    * exportSize  导出条数
    * fileHash  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    * taskName  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * manualIsolate  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'handleStatus' => 'setHandleStatus',
            'severityList' => 'setSeverityList',
            'assetValue' => 'setAssetValue',
            'malwareName' => 'setMalwareName',
            'filePath' => 'setFilePath',
            'exportSize' => 'setExportSize',
            'fileHash' => 'setFileHash',
            'taskName' => 'setTaskName',
            'manualIsolate' => 'setManualIsolate',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * malwareName  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * filePath  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    * exportSize  导出条数
    * fileHash  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    * taskName  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * manualIsolate  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'handleStatus' => 'getHandleStatus',
            'severityList' => 'getSeverityList',
            'assetValue' => 'getAssetValue',
            'malwareName' => 'getMalwareName',
            'filePath' => 'getFilePath',
            'exportSize' => 'getExportSize',
            'fileHash' => 'getFileHash',
            'taskName' => 'getTaskName',
            'manualIsolate' => 'getManualIsolate',
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['severityList'] = isset($data['severityList']) ? $data['severityList'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['malwareName'] = isset($data['malwareName']) ? $data['malwareName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['manualIsolate'] = isset($data['manualIsolate']) ? $data['manualIsolate'] : null;
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
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['malwareName']) && (mb_strlen($this->container['malwareName']) > 128)) {
                $invalidProperties[] = "invalid value for 'malwareName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['malwareName']) && (mb_strlen($this->container['malwareName']) < 1)) {
                $invalidProperties[] = "invalid value for 'malwareName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['malwareName']) && !preg_match("/^.*$/", $this->container['malwareName'])) {
                $invalidProperties[] = "invalid value for 'malwareName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 512)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] > 500000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 500000.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileHash']) && (mb_strlen($this->container['fileHash']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileHash', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileHash']) && (mb_strlen($this->container['fileHash']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileHash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileHash']) && !preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && !preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostName **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $privateIp **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
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
    * @param string|null $publicIp **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
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
    * @param string|null $handleStatus **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets severityList
    *  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getSeverityList()
    {
        return $this->container['severityList'];
    }

    /**
    * Sets severityList
    *
    * @param string[]|null $severityList **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: 威胁等级，包含如下:   - Low：低危   - Medium：中危   - High：高危   - Critical：致命 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityList($severityList)
    {
        $this->container['severityList'] = $severityList;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
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
    * @param string|null $assetValue **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets malwareName
    *  **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getMalwareName()
    {
        return $this->container['malwareName'];
    }

    /**
    * Sets malwareName
    *
    * @param string|null $malwareName **参数解释**: 病毒名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMalwareName($malwareName)
    {
        $this->container['malwareName'] = $malwareName;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**： 文件路径 **约束限制**： 不涉及 **取值范围**： 字符数1-512位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets exportSize
    *  导出条数
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
    * @param int|null $exportSize 导出条数
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash **参数解释**： 文件hash，当前为sha256 **约束限制**： 需为合法的SHA256哈希值 **取值范围**： 字符长度64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**: 任务名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets manualIsolate
    *  **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getManualIsolate()
    {
        return $this->container['manualIsolate'];
    }

    /**
    * Sets manualIsolate
    *
    * @param bool|null $manualIsolate **参数解释**: 是否使用手动隔离按钮 **约束限制**: 不涉及 **取值范围**: true（已使用手动隔离）、false（未使用手动隔离） **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setManualIsolate($manualIsolate)
    {
        $this->container['manualIsolate'] = $manualIsolate;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ExportAntiVirusResultRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ExportAntiVirusResultRequestBody|null $body body
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

