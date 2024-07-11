<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllAppRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllAppRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * sortName  排序字段的名称，当前仅支持name和startTime
    * sortBy  排序顺序，正序（ASC）或者逆序（DESC)
    * states  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    * groupId  应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'page' => 'int',
            'size' => 'int',
            'sortName' => 'string',
            'sortBy' => 'string',
            'states' => 'string[]',
            'groupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * sortName  排序字段的名称，当前仅支持name和startTime
    * sortBy  排序顺序，正序（ASC）或者逆序（DESC)
    * states  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    * groupId  应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'page' => 'int32',
        'size' => 'int32',
        'sortName' => null,
        'sortBy' => 'int32',
        'states' => null,
        'groupId' => null
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
    * projectId  项目id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * sortName  排序字段的名称，当前仅支持name和startTime
    * sortBy  排序顺序，正序（ASC）或者逆序（DESC)
    * states  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    * groupId  应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'page' => 'page',
            'size' => 'size',
            'sortName' => 'sort_name',
            'sortBy' => 'sort_by',
            'states' => 'states',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * sortName  排序字段的名称，当前仅支持name和startTime
    * sortBy  排序顺序，正序（ASC）或者逆序（DESC)
    * states  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    * groupId  应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'page' => 'setPage',
            'size' => 'setSize',
            'sortName' => 'setSortName',
            'sortBy' => 'setSortBy',
            'states' => 'setStates',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * page  分页页码， 表示从此页开始查询， page大于等于1
    * size  每页显示的条目数量，size小于等于100
    * sortName  排序字段的名称，当前仅支持name和startTime
    * sortBy  排序顺序，正序（ASC）或者逆序（DESC)
    * states  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    * groupId  应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'page' => 'getPage',
            'size' => 'getSize',
            'sortName' => 'getSortName',
            'sortBy' => 'getSortBy',
            'states' => 'getStates',
            'groupId' => 'getGroupId'
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
    const SORT_NAME_NAME = 'name';
    const SORT_NAME_START_TIME = 'startTime';
    const STATES_ABORT = 'abort';
    const STATES_FAILED = 'failed';
    const STATES_NOT_STARTED = 'not_started';
    const STATES_PENDING = 'pending';
    const STATES_RUNNING = 'running';
    const STATES_SUCCEEDED = 'succeeded';
    const STATES_TIMEOUT = 'timeout';
    const STATES_NOT_EXECUTED = 'not_executed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortNameAllowableValues()
    {
        return [
            self::SORT_NAME_NAME,
            self::SORT_NAME_START_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatesAllowableValues()
    {
        return [
            self::STATES_ABORT,
            self::STATES_FAILED,
            self::STATES_NOT_STARTED,
            self::STATES_PENDING,
            self::STATES_RUNNING,
            self::STATES_SUCCEEDED,
            self::STATES_TIMEOUT,
            self::STATES_NOT_EXECUTED,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sortName'] = isset($data['sortName']) ? $data['sortName'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            $allowedValues = $this->getSortNameAllowableValues();
                if (!is_null($this->container['sortName']) && !in_array($this->container['sortName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['groupId']) && !preg_match("/^[A-Za-z0-9]{32}|no_grouped$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[A-Za-z0-9]{32}|no_grouped$/.";
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets page
    *  分页页码， 表示从此页开始查询， page大于等于1
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 分页页码， 表示从此页开始查询， page大于等于1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页显示的条目数量，size小于等于100
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 每页显示的条目数量，size小于等于100
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets sortName
    *  排序字段的名称，当前仅支持name和startTime
    *
    * @return string|null
    */
    public function getSortName()
    {
        return $this->container['sortName'];
    }

    /**
    * Sets sortName
    *
    * @param string|null $sortName 排序字段的名称，当前仅支持name和startTime
    *
    * @return $this
    */
    public function setSortName($sortName)
    {
        $this->container['sortName'] = $sortName;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序顺序，正序（ASC）或者逆序（DESC)
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序顺序，正序（ASC）或者逆序（DESC)
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets states
    *  应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    *
    * @return string[]|null
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param string[]|null $states 应用状态列表，支持查询以下状态： abort: 部署中止 failed: 部署失败 not_started: 取消执行 pending: 排队中 running: 正在部署 succeeded: 部署成功 timeout: 部署超时 not_executed: 未执行
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
        return $this;
    }

    /**
    * Gets groupId
    *  应用的分组id，传入no_grouped为查询未分组的应用
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
    * @param string|null $groupId 应用的分组id，传入no_grouped为查询未分组的应用
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

