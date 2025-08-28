<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageScanTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageScanTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * globalImageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    * taskType  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    * taskName  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * taskId  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * createTime  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * endTime  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * taskStatus  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'globalImageType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'type' => 'string',
            'taskType' => 'string',
            'taskName' => 'string',
            'taskId' => 'string',
            'createTime' => 'int',
            'endTime' => 'int',
            'taskStatus' => 'string',
            'scanScope' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * globalImageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    * taskType  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    * taskName  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * taskId  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * createTime  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * endTime  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * taskStatus  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'globalImageType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'type' => null,
        'taskType' => null,
        'taskName' => null,
        'taskId' => null,
        'createTime' => 'int64',
        'endTime' => 'int64',
        'taskStatus' => null,
        'scanScope' => 'int32'
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
    * globalImageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    * taskType  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    * taskName  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * taskId  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * createTime  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * endTime  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * taskStatus  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'globalImageType' => 'global_image_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'type' => 'type',
            'taskType' => 'task_type',
            'taskName' => 'task_name',
            'taskId' => 'task_id',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'taskStatus' => 'task_status',
            'scanScope' => 'scan_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * globalImageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    * taskType  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    * taskName  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * taskId  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * createTime  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * endTime  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * taskStatus  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'globalImageType' => 'setGlobalImageType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'type' => 'setType',
            'taskType' => 'setTaskType',
            'taskName' => 'setTaskName',
            'taskId' => 'setTaskId',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'taskStatus' => 'setTaskStatus',
            'scanScope' => 'setScanScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * globalImageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    * taskType  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    * taskName  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * taskId  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * createTime  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * endTime  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    * taskStatus  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'globalImageType' => 'getGlobalImageType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'type' => 'getType',
            'taskType' => 'getTaskType',
            'taskName' => 'getTaskName',
            'taskId' => 'getTaskId',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'taskStatus' => 'getTaskStatus',
            'scanScope' => 'getScanScope'
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
        $this->container['globalImageType'] = isset($data['globalImageType']) ? $data['globalImageType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['scanScope'] = isset($data['scanScope']) ? $data['scanScope'] : null;
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
            if (!is_null($this->container['globalImageType']) && (mb_strlen($this->container['globalImageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'globalImageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['globalImageType']) && (mb_strlen($this->container['globalImageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'globalImageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['globalImageType']) && !preg_match("/^local|registry$/", $this->container['globalImageType'])) {
                $invalidProperties[] = "invalid value for 'globalImageType', must be conform to the pattern /^local|registry$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskType']) && !preg_match("/^.*$/", $this->container['taskType'])) {
                $invalidProperties[] = "invalid value for 'taskType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && !preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskStatus']) && !preg_match("/^.*$/", $this->container['taskStatus'])) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be bigger than or equal to 0.";
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
    * Gets globalImageType
    *  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getGlobalImageType()
    {
        return $this->container['globalImageType'];
    }

    /**
    * Sets globalImageType
    *
    * @param string|null $globalImageType **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像。 - registry：仓库镜像。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGlobalImageType($globalImageType)
    {
        $this->container['globalImageType'] = $globalImageType;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**: 任务总类型 **约束限制**: 不涉及 **取值范围**: - image_sync：镜像同步。 - image_scan：镜像扫描。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType **参数解释**: 任务细分类型 **约束限制**: 不涉及 **取值范围**: - cycle：定时扫描。 - manual：手动扫描。 - autoSync：定时同步。 - manualSync：手动同步。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
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
    * @param string|null $taskName **参数解释**： 模糊匹配任务名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务id **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
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
    * @param int|null $createTime **参数解释**： 任务创建时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 任务结束时间，时间单位毫秒（ms） **约束限制**： 不涉及 **取值范围**： 最小值0，最大值4070880000000 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets taskStatus
    *  **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus **参数解释**: 任务情况 **约束限制**: 不涉及 **取值范围**: - scanning：扫描中。 - finished：完成。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets scanScope
    *  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getScanScope()
    {
        return $this->container['scanScope'];
    }

    /**
    * Sets scanScope
    *
    * @param int|null $scanScope **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanScope($scanScope)
    {
        $this->container['scanScope'] = $scanScope;
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

