<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoLaunchChangeHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoLaunchChangeHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * autoLaunchName  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    * variationType  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * startTime  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    * endTime  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string',
            'hostName' => 'string',
            'autoLaunchName' => 'string',
            'type' => 'int',
            'variationType' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * autoLaunchName  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    * variationType  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * startTime  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    * endTime  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'hostId' => null,
        'hostIp' => null,
        'hostName' => null,
        'autoLaunchName' => null,
        'type' => null,
        'variationType' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * autoLaunchName  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    * variationType  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * startTime  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    * endTime  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'hostName' => 'host_name',
            'autoLaunchName' => 'auto_launch_name',
            'type' => 'type',
            'variationType' => 'variation_type',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * autoLaunchName  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    * variationType  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * startTime  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    * endTime  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'hostName' => 'setHostName',
            'autoLaunchName' => 'setAutoLaunchName',
            'type' => 'setType',
            'variationType' => 'setVariationType',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * autoLaunchName  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    * variationType  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * startTime  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    * endTime  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'hostName' => 'getHostName',
            'autoLaunchName' => 'getAutoLaunchName',
            'type' => 'getType',
            'variationType' => 'getVariationType',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['autoLaunchName'] = isset($data['autoLaunchName']) ? $data['autoLaunchName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['variationType'] = isset($data['variationType']) ? $data['variationType'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && !preg_match("/^.*$/", $this->container['hostIp'])) {
                $invalidProperties[] = "invalid value for 'hostIp', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['autoLaunchName']) && (mb_strlen($this->container['autoLaunchName']) > 128)) {
                $invalidProperties[] = "invalid value for 'autoLaunchName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['autoLaunchName']) && (mb_strlen($this->container['autoLaunchName']) < 0)) {
                $invalidProperties[] = "invalid value for 'autoLaunchName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 100)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['variationType']) && (mb_strlen($this->container['variationType']) > 10)) {
                $invalidProperties[] = "invalid value for 'variationType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['variationType']) && (mb_strlen($this->container['variationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'variationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostIp **参数解释**: 主机IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
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
    * Gets autoLaunchName
    *  **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAutoLaunchName()
    {
        return $this->container['autoLaunchName'];
    }

    /**
    * Sets autoLaunchName
    *
    * @param string|null $autoLaunchName **参数解释**: 自启动项名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAutoLaunchName($autoLaunchName)
    {
        $this->container['autoLaunchName'] = $autoLaunchName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**: 自启动项类型 **约束限制**: 不涉及 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets variationType
    *  **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVariationType()
    {
        return $this->container['variationType'];
    }

    /**
    * Sets variationType
    *
    * @param string|null $variationType **参数解释**: 变更类型 **约束限制**: 不涉及 **取值范围**: - add：新建 - delete：删除 - modify：修改  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVariationType($variationType)
    {
        $this->container['variationType'] = $variationType;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**: 排序的key值，目前只支持按照recent_scan_time排序，按照recent_scan_time排序时，根据sort_dir的值决定升序还是降序 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**: 排序方式，默认为降序，当sort_key为按照recent_scan_time排序时，根据当前值决定升序还是降序，当sort_key为其他值时均为降序 **约束限制**: 不涉及 **取值范围**: - asc：升序 - desc：降序  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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
    * Gets startTime
    *  **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**: 开始时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
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
    * @param int|null $endTime **参数解释**: 结束时间，13位时间戳 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**:
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

