<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobBasicInfoV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobBasicInfoV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * ruleSets  **参数解释：** 规则集配置列表。
    * source  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    * sourceRepoUrl  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * subJobIds  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    * subJobStatuses  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    * targetRepoUrl  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    * totalExecuteTime  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executor' => 'string',
            'finishTime' => 'string',
            'id' => 'string',
            'jobResult' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo',
            'jobType' => 'string',
            'process' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo',
            'reviewResult' => 'string',
            'ruleSets' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]',
            'source' => 'string',
            'sourceRepoUrl' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'subJobIds' => 'string[]',
            'subJobStatuses' => 'string[]',
            'targetRepoUrl' => 'string',
            'taskId' => 'string',
            'totalExecuteTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * ruleSets  **参数解释：** 规则集配置列表。
    * source  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    * sourceRepoUrl  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * subJobIds  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    * subJobStatuses  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    * targetRepoUrl  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    * totalExecuteTime  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executor' => null,
        'finishTime' => null,
        'id' => null,
        'jobResult' => null,
        'jobType' => null,
        'process' => null,
        'reviewResult' => null,
        'ruleSets' => null,
        'source' => null,
        'sourceRepoUrl' => null,
        'startTime' => null,
        'status' => null,
        'subJobIds' => null,
        'subJobStatuses' => null,
        'targetRepoUrl' => null,
        'taskId' => null,
        'totalExecuteTime' => null
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
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * ruleSets  **参数解释：** 规则集配置列表。
    * source  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    * sourceRepoUrl  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * subJobIds  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    * subJobStatuses  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    * targetRepoUrl  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    * totalExecuteTime  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executor' => 'executor',
            'finishTime' => 'finishTime',
            'id' => 'id',
            'jobResult' => 'jobResult',
            'jobType' => 'jobType',
            'process' => 'process',
            'reviewResult' => 'reviewResult',
            'ruleSets' => 'ruleSets',
            'source' => 'source',
            'sourceRepoUrl' => 'sourceRepoUrl',
            'startTime' => 'startTime',
            'status' => 'status',
            'subJobIds' => 'subJobIds',
            'subJobStatuses' => 'subJobStatuses',
            'targetRepoUrl' => 'targetRepoUrl',
            'taskId' => 'taskId',
            'totalExecuteTime' => 'totalExecuteTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * ruleSets  **参数解释：** 规则集配置列表。
    * source  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    * sourceRepoUrl  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * subJobIds  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    * subJobStatuses  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    * targetRepoUrl  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    * totalExecuteTime  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'executor' => 'setExecutor',
            'finishTime' => 'setFinishTime',
            'id' => 'setId',
            'jobResult' => 'setJobResult',
            'jobType' => 'setJobType',
            'process' => 'setProcess',
            'reviewResult' => 'setReviewResult',
            'ruleSets' => 'setRuleSets',
            'source' => 'setSource',
            'sourceRepoUrl' => 'setSourceRepoUrl',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'subJobIds' => 'setSubJobIds',
            'subJobStatuses' => 'setSubJobStatuses',
            'targetRepoUrl' => 'setTargetRepoUrl',
            'taskId' => 'setTaskId',
            'totalExecuteTime' => 'setTotalExecuteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * reviewResult  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    * ruleSets  **参数解释：** 规则集配置列表。
    * source  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    * sourceRepoUrl  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * subJobIds  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    * subJobStatuses  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    * targetRepoUrl  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * taskId  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    * totalExecuteTime  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'executor' => 'getExecutor',
            'finishTime' => 'getFinishTime',
            'id' => 'getId',
            'jobResult' => 'getJobResult',
            'jobType' => 'getJobType',
            'process' => 'getProcess',
            'reviewResult' => 'getReviewResult',
            'ruleSets' => 'getRuleSets',
            'source' => 'getSource',
            'sourceRepoUrl' => 'getSourceRepoUrl',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'subJobIds' => 'getSubJobIds',
            'subJobStatuses' => 'getSubJobStatuses',
            'targetRepoUrl' => 'getTargetRepoUrl',
            'taskId' => 'getTaskId',
            'totalExecuteTime' => 'getTotalExecuteTime'
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
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobResult'] = isset($data['jobResult']) ? $data['jobResult'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['reviewResult'] = isset($data['reviewResult']) ? $data['reviewResult'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceRepoUrl'] = isset($data['sourceRepoUrl']) ? $data['sourceRepoUrl'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subJobIds'] = isset($data['subJobIds']) ? $data['subJobIds'] : null;
        $this->container['subJobStatuses'] = isset($data['subJobStatuses']) ? $data['subJobStatuses'] : null;
        $this->container['targetRepoUrl'] = isset($data['targetRepoUrl']) ? $data['targetRepoUrl'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['totalExecuteTime'] = isset($data['totalExecuteTime']) ? $data['totalExecuteTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets executor
    *  **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor **参数解释：** 执行人用户名。 **取值范围：** 长度为[1~255]个字符。
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets finishTime
    *  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
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
    * @param string|null $id **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobResult
    *  jobResult
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null
    */
    public function getJobResult()
    {
        return $this->container['jobResult'];
    }

    /**
    * Sets jobResult
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null $jobResult jobResult
    *
    * @return $this
    */
    public function setJobResult($jobResult)
    {
        $this->container['jobResult'] = $jobResult;
        return $this;
    }

    /**
    * Gets jobType
    *  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets process
    *  process
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo|null $process process
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets reviewResult
    *  **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    *
    * @return string|null
    */
    public function getReviewResult()
    {
        return $this->container['reviewResult'];
    }

    /**
    * Sets reviewResult
    *
    * @param string|null $reviewResult **参数解释：** 门禁结果。 **取值范围：** - success：门禁通过。 - error：门禁未通过。
    *
    * @return $this
    */
    public function setReviewResult($reviewResult)
    {
        $this->container['reviewResult'] = $reviewResult;
        return $this;
    }

    /**
    * Gets ruleSets
    *  **参数解释：** 规则集配置列表。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null
    */
    public function getRuleSets()
    {
        return $this->container['ruleSets'];
    }

    /**
    * Sets ruleSets
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null $ruleSets **参数解释：** 规则集配置列表。
    *
    * @return $this
    */
    public function setRuleSets($ruleSets)
    {
        $this->container['ruleSets'] = $ruleSets;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释：** 执行来源。 **取值范围：** - customer：来自页面点击。 - Scheduled：来自定时任务。 - CodeCheckEdge：来自Edge服务。 - CodeArtsPipeline：来自流水线。 - DevCloudWebhook：来自CodeArtsRepo的Webhook。 - GitCodeActionPipeline：来自流水线的GitCodeAction插件。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sourceRepoUrl
    *  **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return string|null
    */
    public function getSourceRepoUrl()
    {
        return $this->container['sourceRepoUrl'];
    }

    /**
    * Sets sourceRepoUrl
    *
    * @param string|null $sourceRepoUrl **参数解释：** 源分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return $this
    */
    public function setSourceRepoUrl($sourceRepoUrl)
    {
        $this->container['sourceRepoUrl'] = $sourceRepoUrl;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
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
    * @param string|null $status **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subJobIds
    *  **参数解释：** 子任务ID，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getSubJobIds()
    {
        return $this->container['subJobIds'];
    }

    /**
    * Sets subJobIds
    *
    * @param string[]|null $subJobIds **参数解释：** 子任务ID，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setSubJobIds($subJobIds)
    {
        $this->container['subJobIds'] = $subJobIds;
        return $this;
    }

    /**
    * Gets subJobStatuses
    *  **参数解释：** 子任务状态，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getSubJobStatuses()
    {
        return $this->container['subJobStatuses'];
    }

    /**
    * Sets subJobStatuses
    *
    * @param string[]|null $subJobStatuses **参数解释：** 子任务状态，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setSubJobStatuses($subJobStatuses)
    {
        $this->container['subJobStatuses'] = $subJobStatuses;
        return $this;
    }

    /**
    * Gets targetRepoUrl
    *  **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return string|null
    */
    public function getTargetRepoUrl()
    {
        return $this->container['targetRepoUrl'];
    }

    /**
    * Sets targetRepoUrl
    *
    * @param string|null $targetRepoUrl **参数解释：** 目标分支的代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return $this
    */
    public function setTargetRepoUrl($targetRepoUrl)
    {
        $this->container['targetRepoUrl'] = $targetRepoUrl;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
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
    * @param string|null $taskId **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets totalExecuteTime
    *  **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTotalExecuteTime()
    {
        return $this->container['totalExecuteTime'];
    }

    /**
    * Sets totalExecuteTime
    *
    * @param string|null $totalExecuteTime **参数解释：** 任务总执行时长，格式为%dm%ds，例如\"6m6s\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTotalExecuteTime($totalExecuteTime)
    {
        $this->container['totalExecuteTime'] = $totalExecuteTime;
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

