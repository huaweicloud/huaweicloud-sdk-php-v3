<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMergeRequestValidAssignedCandidatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMergeRequestValidAssignedCandidatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    * searchByNameList  **参数解释：** Search user list by name list。
    * targetProjectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * view  **参数解释：** The type of assignee, merge user or approver
    * mode  **参数解释：** The type of assignee, merge user or approver
    * onlyDevelopers  **参数解释：** The type of memeber, developer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'targetBranch' => 'string',
            'mergeRequestIid' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'search' => 'string',
            'searchByNameList' => 'string',
            'targetProjectId' => 'string',
            'view' => 'string',
            'mode' => 'string',
            'onlyDevelopers' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    * searchByNameList  **参数解释：** Search user list by name list。
    * targetProjectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * view  **参数解释：** The type of assignee, merge user or approver
    * mode  **参数解释：** The type of assignee, merge user or approver
    * onlyDevelopers  **参数解释：** The type of memeber, developer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'targetBranch' => null,
        'mergeRequestIid' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'search' => null,
        'searchByNameList' => null,
        'targetProjectId' => null,
        'view' => null,
        'mode' => null,
        'onlyDevelopers' => null
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    * searchByNameList  **参数解释：** Search user list by name list。
    * targetProjectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * view  **参数解释：** The type of assignee, merge user or approver
    * mode  **参数解释：** The type of assignee, merge user or approver
    * onlyDevelopers  **参数解释：** The type of memeber, developer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'targetBranch' => 'target_branch',
            'mergeRequestIid' => 'merge_request_iid',
            'offset' => 'offset',
            'limit' => 'limit',
            'search' => 'search',
            'searchByNameList' => 'search_by_name_list',
            'targetProjectId' => 'target_project_id',
            'view' => 'view',
            'mode' => 'mode',
            'onlyDevelopers' => 'only_developers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    * searchByNameList  **参数解释：** Search user list by name list。
    * targetProjectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * view  **参数解释：** The type of assignee, merge user or approver
    * mode  **参数解释：** The type of assignee, merge user or approver
    * onlyDevelopers  **参数解释：** The type of memeber, developer
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'targetBranch' => 'setTargetBranch',
            'mergeRequestIid' => 'setMergeRequestIid',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'search' => 'setSearch',
            'searchByNameList' => 'setSearchByNameList',
            'targetProjectId' => 'setTargetProjectId',
            'view' => 'setView',
            'mode' => 'setMode',
            'onlyDevelopers' => 'setOnlyDevelopers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    * mergeRequestIid  **参数解释：**  合并请求 iid。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    * searchByNameList  **参数解释：** Search user list by name list。
    * targetProjectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * view  **参数解释：** The type of assignee, merge user or approver
    * mode  **参数解释：** The type of assignee, merge user or approver
    * onlyDevelopers  **参数解释：** The type of memeber, developer
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'targetBranch' => 'getTargetBranch',
            'mergeRequestIid' => 'getMergeRequestIid',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'search' => 'getSearch',
            'searchByNameList' => 'getSearchByNameList',
            'targetProjectId' => 'getTargetProjectId',
            'view' => 'getView',
            'mode' => 'getMode',
            'onlyDevelopers' => 'getOnlyDevelopers'
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
    const VIEW_APPROVER = 'approver';
    const VIEW_ASSIGNEE = 'assignee';
    const MODE_APPROVER = 'approver';
    const MODE_ASSIGNEE = 'assignee';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_APPROVER,
            self::VIEW_ASSIGNEE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_APPROVER,
            self::MODE_ASSIGNEE,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['mergeRequestIid'] = isset($data['mergeRequestIid']) ? $data['mergeRequestIid'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['searchByNameList'] = isset($data['searchByNameList']) ? $data['searchByNameList'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['onlyDevelopers'] = isset($data['onlyDevelopers']) ? $data['onlyDevelopers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestIid']) && ($this->container['mergeRequestIid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestIid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestIid']) && ($this->container['mergeRequestIid'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestIid', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch **参数解释：** 目标分支。创建MR时，代码将要合入的分支。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets mergeRequestIid
    *  **参数解释：**  合并请求 iid。
    *
    * @return int|null
    */
    public function getMergeRequestIid()
    {
        return $this->container['mergeRequestIid'];
    }

    /**
    * Sets mergeRequestIid
    *
    * @param int|null $mergeRequestIid **参数解释：**  合并请求 iid。
    *
    * @return $this
    */
    public function setMergeRequestIid($mergeRequestIid)
    {
        $this->container['mergeRequestIid'] = $mergeRequestIid;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
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
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
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
    *  **参数解释：** 返回数量。
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
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
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
    * @param string|null $search **参数解释：** 查询关键字，可模糊匹配用户名称、用户昵称、租户名称。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets searchByNameList
    *  **参数解释：** Search user list by name list。
    *
    * @return string|null
    */
    public function getSearchByNameList()
    {
        return $this->container['searchByNameList'];
    }

    /**
    * Sets searchByNameList
    *
    * @param string|null $searchByNameList **参数解释：** Search user list by name list。
    *
    * @return $this
    */
    public function setSearchByNameList($searchByNameList)
    {
        $this->container['searchByNameList'] = $searchByNameList;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** The type of assignee, merge user or approver
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view **参数解释：** The type of assignee, merge user or approver
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释：** The type of assignee, merge user or approver
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释：** The type of assignee, merge user or approver
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets onlyDevelopers
    *  **参数解释：** The type of memeber, developer
    *
    * @return bool|null
    */
    public function getOnlyDevelopers()
    {
        return $this->container['onlyDevelopers'];
    }

    /**
    * Sets onlyDevelopers
    *
    * @param bool|null $onlyDevelopers **参数解释：** The type of memeber, developer
    *
    * @return $this
    */
    public function setOnlyDevelopers($onlyDevelopers)
    {
        $this->container['onlyDevelopers'] = $onlyDevelopers;
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

