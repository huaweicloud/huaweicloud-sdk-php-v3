<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleTaskInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleTaskInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * lastCheckTime  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * smLevel  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    * smLevelNameEn  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    * smLevelName  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'creatorId' => 'string',
            'gitUrl' => 'string',
            'gitBranch' => 'string',
            'createdAt' => 'string',
            'lastCheckTime' => 'string',
            'smLevel' => 'string',
            'smLevelNameEn' => 'string',
            'smLevelName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * lastCheckTime  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * smLevel  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    * smLevelNameEn  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    * smLevelName  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'creatorId' => null,
        'gitUrl' => null,
        'gitBranch' => null,
        'createdAt' => null,
        'lastCheckTime' => null,
        'smLevel' => null,
        'smLevelNameEn' => null,
        'smLevelName' => null
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
    * taskId  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * lastCheckTime  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * smLevel  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    * smLevelNameEn  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    * smLevelName  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'creatorId' => 'creator_id',
            'gitUrl' => 'git_url',
            'gitBranch' => 'git_branch',
            'createdAt' => 'created_at',
            'lastCheckTime' => 'last_check_time',
            'smLevel' => 'sm_level',
            'smLevelNameEn' => 'sm_level_name_en',
            'smLevelName' => 'sm_level_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * lastCheckTime  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * smLevel  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    * smLevelNameEn  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    * smLevelName  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'creatorId' => 'setCreatorId',
            'gitUrl' => 'setGitUrl',
            'gitBranch' => 'setGitBranch',
            'createdAt' => 'setCreatedAt',
            'lastCheckTime' => 'setLastCheckTime',
            'smLevel' => 'setSmLevel',
            'smLevelNameEn' => 'setSmLevelNameEn',
            'smLevelName' => 'setSmLevelName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * lastCheckTime  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    * smLevel  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    * smLevelNameEn  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    * smLevelName  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'creatorId' => 'getCreatorId',
            'gitUrl' => 'getGitUrl',
            'gitBranch' => 'getGitBranch',
            'createdAt' => 'getCreatedAt',
            'lastCheckTime' => 'getLastCheckTime',
            'smLevel' => 'getSmLevel',
            'smLevelNameEn' => 'getSmLevelNameEn',
            'smLevelName' => 'getSmLevelName'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['lastCheckTime'] = isset($data['lastCheckTime']) ? $data['lastCheckTime'] : null;
        $this->container['smLevel'] = isset($data['smLevel']) ? $data['smLevel'] : null;
        $this->container['smLevelNameEn'] = isset($data['smLevelNameEn']) ? $data['smLevelNameEn'] : null;
        $this->container['smLevelName'] = isset($data['smLevelName']) ? $data['smLevelName'] : null;
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
    * Gets taskId
    *  **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
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
    * @param string|null $taskId **参数解释：** 任务下的默认分支任务的ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释：** 任务名称。 **取值范围：** 不涉及。
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
    * @param string|null $taskName **参数解释：** 任务名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释：** 任务创建者的用户ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets gitUrl
    *  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitBranch
    *  **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
    * Sets gitBranch
    *
    * @param string|null $gitBranch **参数解释：** 任务的默认分支，非代码仓默认分支。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 任务创建时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets lastCheckTime
    *  **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    *
    * @return string|null
    */
    public function getLastCheckTime()
    {
        return $this->container['lastCheckTime'];
    }

    /**
    * Sets lastCheckTime
    *
    * @param string|null $lastCheckTime **参数解释：** 任务下所有分支任务、增量任务的最近检查时间。 **取值范围：** UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。
    *
    * @return $this
    */
    public function setLastCheckTime($lastCheckTime)
    {
        $this->container['lastCheckTime'] = $lastCheckTime;
        return $this;
    }

    /**
    * Gets smLevel
    *  **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    *
    * @return string|null
    */
    public function getSmLevel()
    {
        return $this->container['smLevel'];
    }

    /**
    * Sets smLevel
    *
    * @param string|null $smLevel **参数解释：** [密级ID,可见信息密级的ID，从页面接口GET https://{endpoint}/projects/v1/options的响应参数中获取，其中的code值即为密级ID。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** [不涉及,取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[不涉及。](tag:fcs)
    *
    * @return $this
    */
    public function setSmLevel($smLevel)
    {
        $this->container['smLevel'] = $smLevel;
        return $this;
    }

    /**
    * Gets smLevelNameEn
    *  **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSmLevelNameEn()
    {
        return $this->container['smLevelNameEn'];
    }

    /**
    * Sets smLevelNameEn
    *
    * @param string|null $smLevelNameEn **参数解释：** [密级英文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSmLevelNameEn($smLevelNameEn)
    {
        $this->container['smLevelNameEn'] = $smLevelNameEn;
        return $this;
    }

    /**
    * Gets smLevelName
    *  **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSmLevelName()
    {
        return $this->container['smLevelName'];
    }

    /**
    * Sets smLevelName
    *
    * @param string|null $smLevelName **参数解释：** [密级中文名称，取值根据用户配置的密级情况变化。](tag:hcs_sm,hcs_sitesm)[该参数暂无业务意义，忽略。](tag:fcs) **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSmLevelName($smLevelName)
    {
        $this->container['smLevelName'] = $smLevelName;
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

