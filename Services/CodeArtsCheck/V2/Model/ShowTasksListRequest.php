<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTasksListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTasksListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * page  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    * pageSize  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    * search  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * reviewResultTypes  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    * jobStatusTypes  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    * orderByExecuteTime  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    * taskClassificationId  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * offset  列表类接口参数
    * limit  列表类接口参数
    * sortField  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    * sortOrder  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    * operator  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branch  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * repoUrlFullMatch  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'page' => 'int',
            'pageSize' => 'int',
            'search' => 'string',
            'projectId' => 'string',
            'reviewResultTypes' => 'string',
            'jobStatusTypes' => 'string',
            'orderByExecuteTime' => 'string',
            'taskClassificationId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortField' => 'string',
            'sortOrder' => 'string',
            'operator' => 'string',
            'repoUrl' => 'string',
            'branch' => 'string',
            'repoUrlFullMatch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * page  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    * pageSize  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    * search  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * reviewResultTypes  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    * jobStatusTypes  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    * orderByExecuteTime  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    * taskClassificationId  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * offset  列表类接口参数
    * limit  列表类接口参数
    * sortField  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    * sortOrder  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    * operator  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branch  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * repoUrlFullMatch  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'page' => 'int32',
        'pageSize' => 'int32',
        'search' => null,
        'projectId' => null,
        'reviewResultTypes' => null,
        'jobStatusTypes' => null,
        'orderByExecuteTime' => null,
        'taskClassificationId' => null,
        'offset' => null,
        'limit' => null,
        'sortField' => null,
        'sortOrder' => null,
        'operator' => null,
        'repoUrl' => null,
        'branch' => null,
        'repoUrlFullMatch' => null
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
    * page  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    * pageSize  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    * search  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * reviewResultTypes  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    * jobStatusTypes  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    * orderByExecuteTime  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    * taskClassificationId  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * offset  列表类接口参数
    * limit  列表类接口参数
    * sortField  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    * sortOrder  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    * operator  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branch  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * repoUrlFullMatch  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'page' => 'page',
            'pageSize' => 'page_size',
            'search' => 'search',
            'projectId' => 'project_id',
            'reviewResultTypes' => 'review_result_types',
            'jobStatusTypes' => 'job_status_types',
            'orderByExecuteTime' => 'order_by_execute_time',
            'taskClassificationId' => 'task_classification_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortField' => 'sort_field',
            'sortOrder' => 'sort_order',
            'operator' => 'operator',
            'repoUrl' => 'repo_url',
            'branch' => 'branch',
            'repoUrlFullMatch' => 'repo_url_full_match'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * page  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    * pageSize  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    * search  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * reviewResultTypes  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    * jobStatusTypes  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    * orderByExecuteTime  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    * taskClassificationId  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * offset  列表类接口参数
    * limit  列表类接口参数
    * sortField  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    * sortOrder  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    * operator  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branch  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * repoUrlFullMatch  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $setters = [
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'search' => 'setSearch',
            'projectId' => 'setProjectId',
            'reviewResultTypes' => 'setReviewResultTypes',
            'jobStatusTypes' => 'setJobStatusTypes',
            'orderByExecuteTime' => 'setOrderByExecuteTime',
            'taskClassificationId' => 'setTaskClassificationId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortField' => 'setSortField',
            'sortOrder' => 'setSortOrder',
            'operator' => 'setOperator',
            'repoUrl' => 'setRepoUrl',
            'branch' => 'setBranch',
            'repoUrlFullMatch' => 'setRepoUrlFullMatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * page  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    * pageSize  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    * search  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    * reviewResultTypes  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    * jobStatusTypes  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    * orderByExecuteTime  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    * taskClassificationId  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * offset  列表类接口参数
    * limit  列表类接口参数
    * sortField  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    * sortOrder  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    * operator  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branch  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * repoUrlFullMatch  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $getters = [
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'search' => 'getSearch',
            'projectId' => 'getProjectId',
            'reviewResultTypes' => 'getReviewResultTypes',
            'jobStatusTypes' => 'getJobStatusTypes',
            'orderByExecuteTime' => 'getOrderByExecuteTime',
            'taskClassificationId' => 'getTaskClassificationId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortField' => 'getSortField',
            'sortOrder' => 'getSortOrder',
            'operator' => 'getOperator',
            'repoUrl' => 'getRepoUrl',
            'branch' => 'getBranch',
            'repoUrlFullMatch' => 'getRepoUrlFullMatch'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['reviewResultTypes'] = isset($data['reviewResultTypes']) ? $data['reviewResultTypes'] : null;
        $this->container['jobStatusTypes'] = isset($data['jobStatusTypes']) ? $data['jobStatusTypes'] : null;
        $this->container['orderByExecuteTime'] = isset($data['orderByExecuteTime']) ? $data['orderByExecuteTime'] : null;
        $this->container['taskClassificationId'] = isset($data['taskClassificationId']) ? $data['taskClassificationId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['repoUrlFullMatch'] = isset($data['repoUrlFullMatch']) ? $data['repoUrlFullMatch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['page']) && ($this->container['page'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 200)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 50)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 128)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
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
    * Gets page
    *  **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page **参数解释：** 分页页码。 **约束限制：** 分页页码≥1。 **取值范围:** 1-2147483647 **默认取值：**  不涉及。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize **参数解释：** 分页大小。 **约束限制：** 数字1-200之间。 **取值范围:** 1-200 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search **参数解释：** 需要搜索的任务名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
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
    * @param string|null $projectId **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束条件：** 不涉及。 **取值范围：** 长度为[1~32]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets reviewResultTypes
    *  **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getReviewResultTypes()
    {
        return $this->container['reviewResultTypes'];
    }

    /**
    * Sets reviewResultTypes
    *
    * @param string|null $reviewResultTypes **参数解释：** 门禁结果。 **约束限制：** 不涉及。 **取值范围：** - success：门禁通过。 - error：门禁不通过。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setReviewResultTypes($reviewResultTypes)
    {
        $this->container['reviewResultTypes'] = $reviewResultTypes;
        return $this;
    }

    /**
    * Gets jobStatusTypes
    *  **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getJobStatusTypes()
    {
        return $this->container['jobStatusTypes'];
    }

    /**
    * Sets jobStatusTypes
    *
    * @param string|null $jobStatusTypes **参数解释：** 检查状态。 **约束限制：** 不涉及。 **取值范围：** - success：检查成功。 - failed：检查失败。 - aborted：检查终止。 - executing：检查中。 - never_execute：未检查。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setJobStatusTypes($jobStatusTypes)
    {
        $this->container['jobStatusTypes'] = $jobStatusTypes;
        return $this;
    }

    /**
    * Gets orderByExecuteTime
    *  **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOrderByExecuteTime()
    {
        return $this->container['orderByExecuteTime'];
    }

    /**
    * Sets orderByExecuteTime
    *
    * @param string|null $orderByExecuteTime **参数解释：** 是否按照执行时间排序。 **约束限制：** 不涉及。 **取值范围：** - up：按照执行时间升序排序。 - down：按照执行时间降序排序。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOrderByExecuteTime($orderByExecuteTime)
    {
        $this->container['orderByExecuteTime'] = $orderByExecuteTime;
        return $this;
    }

    /**
    * Gets taskClassificationId
    *  **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTaskClassificationId()
    {
        return $this->container['taskClassificationId'];
    }

    /**
    * Sets taskClassificationId
    *
    * @param string|null $taskClassificationId **参数解释：** 任务的分组ID，可通过列出项目下的分组信息接口获取任务的分组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTaskClassificationId($taskClassificationId)
    {
        $this->container['taskClassificationId'] = $taskClassificationId;
        return $this;
    }

    /**
    * Gets offset
    *  列表类接口参数
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
    * @param int|null $offset 列表类接口参数
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
    *  列表类接口参数
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
    * @param int|null $limit 列表类接口参数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortField
    *  **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField **参数解释：** 排序字段,任务列表每次只能根据一个字段进行排序。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortOrder
    *  **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder **参数解释：** 排序顺序，取值范围：\"up\"（升序）、\"down\"（降序） **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator **参数解释：** 操作人，填写账号用户名。 **约束限制：** 不涉及。 **取值范围：** 长度为[1~128]个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets repoUrl
    *  **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRepoUrl()
    {
        return $this->container['repoUrl'];
    }

    /**
    * Sets repoUrl
    *
    * @param string|null $repoUrl **参数解释：** 代码仓地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
        return $this;
    }

    /**
    * Gets branch
    *  **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch **参数解释：** 分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets repoUrlFullMatch
    *  **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @return string|null
    */
    public function getRepoUrlFullMatch()
    {
        return $this->container['repoUrlFullMatch'];
    }

    /**
    * Sets repoUrlFullMatch
    *
    * @param string|null $repoUrlFullMatch **参数解释：** 和repo_url配合使用，查询任务时是否完全匹配repo_url。 **约束限制：** 不涉及。 **取值范围：** - true：只查询代码仓地址为repo_url的任务。 - false：查询ssh协议的代码仓地址或http协议的代码仓地址和repo_url匹配的任务。 **默认取值：** false。
    *
    * @return $this
    */
    public function setRepoUrlFullMatch($repoUrlFullMatch)
    {
        $this->container['repoUrlFullMatch'] = $repoUrlFullMatch;
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

