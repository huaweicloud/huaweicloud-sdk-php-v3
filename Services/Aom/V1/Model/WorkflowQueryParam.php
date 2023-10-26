<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowQueryParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowQueryParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * search  搜索内容，可以针对工作流名称和描述内容进行搜索。
    * type  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    * tags  工作流标签，最多支持10个。
    * page  查询当前的页数，默认值为0。
    * size  查询当前页的大小，默认值为10。
    * enterpriseProjectId  企业项目id。
    * createBy  工作流创建人。
    * sortField  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    * sortType  排序类型，取值[\"ASC\"，\"DESC\"]。
    * searchTimeStart  时间范围查询的开始时间。
    * searchTimeEnd  时间范围查询的结束时间。
    * status  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'search' => 'string',
            'type' => 'string',
            'tags' => 'map[string,string]',
            'page' => 'int',
            'size' => 'int',
            'enterpriseProjectId' => 'string',
            'createBy' => 'string',
            'sortField' => 'string',
            'sortType' => 'string',
            'searchTimeStart' => 'int',
            'searchTimeEnd' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * search  搜索内容，可以针对工作流名称和描述内容进行搜索。
    * type  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    * tags  工作流标签，最多支持10个。
    * page  查询当前的页数，默认值为0。
    * size  查询当前页的大小，默认值为10。
    * enterpriseProjectId  企业项目id。
    * createBy  工作流创建人。
    * sortField  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    * sortType  排序类型，取值[\"ASC\"，\"DESC\"]。
    * searchTimeStart  时间范围查询的开始时间。
    * searchTimeEnd  时间范围查询的结束时间。
    * status  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'search' => null,
        'type' => null,
        'tags' => null,
        'page' => null,
        'size' => null,
        'enterpriseProjectId' => null,
        'createBy' => null,
        'sortField' => null,
        'sortType' => null,
        'searchTimeStart' => 'int64',
        'searchTimeEnd' => 'int64',
        'status' => null
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
    * search  搜索内容，可以针对工作流名称和描述内容进行搜索。
    * type  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    * tags  工作流标签，最多支持10个。
    * page  查询当前的页数，默认值为0。
    * size  查询当前页的大小，默认值为10。
    * enterpriseProjectId  企业项目id。
    * createBy  工作流创建人。
    * sortField  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    * sortType  排序类型，取值[\"ASC\"，\"DESC\"]。
    * searchTimeStart  时间范围查询的开始时间。
    * searchTimeEnd  时间范围查询的结束时间。
    * status  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'search' => 'search',
            'type' => 'type',
            'tags' => 'tags',
            'page' => 'page',
            'size' => 'size',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createBy' => 'create_by',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'searchTimeStart' => 'search_time_start',
            'searchTimeEnd' => 'search_time_end',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * search  搜索内容，可以针对工作流名称和描述内容进行搜索。
    * type  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    * tags  工作流标签，最多支持10个。
    * page  查询当前的页数，默认值为0。
    * size  查询当前页的大小，默认值为10。
    * enterpriseProjectId  企业项目id。
    * createBy  工作流创建人。
    * sortField  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    * sortType  排序类型，取值[\"ASC\"，\"DESC\"]。
    * searchTimeStart  时间范围查询的开始时间。
    * searchTimeEnd  时间范围查询的结束时间。
    * status  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @var string[]
    */
    protected static $setters = [
            'search' => 'setSearch',
            'type' => 'setType',
            'tags' => 'setTags',
            'page' => 'setPage',
            'size' => 'setSize',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createBy' => 'setCreateBy',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'searchTimeStart' => 'setSearchTimeStart',
            'searchTimeEnd' => 'setSearchTimeEnd',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * search  搜索内容，可以针对工作流名称和描述内容进行搜索。
    * type  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    * tags  工作流标签，最多支持10个。
    * page  查询当前的页数，默认值为0。
    * size  查询当前页的大小，默认值为10。
    * enterpriseProjectId  企业项目id。
    * createBy  工作流创建人。
    * sortField  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    * sortType  排序类型，取值[\"ASC\"，\"DESC\"]。
    * searchTimeStart  时间范围查询的开始时间。
    * searchTimeEnd  时间范围查询的结束时间。
    * status  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @var string[]
    */
    protected static $getters = [
            'search' => 'getSearch',
            'type' => 'getType',
            'tags' => 'getTags',
            'page' => 'getPage',
            'size' => 'getSize',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createBy' => 'getCreateBy',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'searchTimeStart' => 'getSearchTimeStart',
            'searchTimeEnd' => 'getSearchTimeEnd',
            'status' => 'getStatus'
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
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['searchTimeStart'] = isset($data['searchTimeStart']) ? $data['searchTimeStart'] : null;
        $this->container['searchTimeEnd'] = isset($data['searchTimeEnd']) ? $data['searchTimeEnd'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 64)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 100)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sortField'] === null) {
            $invalidProperties[] = "'sortField' can't be null";
        }
            if ((mb_strlen($this->container['sortField']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortField', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['sortField']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortField', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sortType'] === null) {
            $invalidProperties[] = "'sortType' can't be null";
        }
            if ((mb_strlen($this->container['sortType']) > 16)) {
                $invalidProperties[] = "invalid value for 'sortType', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['sortType']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['searchTimeStart']) && ($this->container['searchTimeStart'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'searchTimeStart', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['searchTimeStart']) && ($this->container['searchTimeStart'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchTimeStart', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchTimeEnd']) && ($this->container['searchTimeEnd'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'searchTimeEnd', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['searchTimeEnd']) && ($this->container['searchTimeEnd'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchTimeEnd', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets search
    *  搜索内容，可以针对工作流名称和描述内容进行搜索。
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
    * @param string|null $search 搜索内容，可以针对工作流名称和描述内容进行搜索。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets type
    *  工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
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
    * @param string|null $type 工作流分类，可以取值[\"cron\",\"event\",\"manual\"]。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tags
    *  工作流标签，最多支持10个。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 工作流标签，最多支持10个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets page
    *  查询当前的页数，默认值为0。
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
    * @param int|null $page 查询当前的页数，默认值为0。
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
    *  查询当前页的大小，默认值为10。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 查询当前页的大小，默认值为10。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。
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
    * @param string|null $enterpriseProjectId 企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createBy
    *  工作流创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 工作流创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    *
    * @return string
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string $sortField 排序字段，取值[\"create_time\"，\"last_execution_start_time\"，\"update_time\"]。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortType
    *  排序类型，取值[\"ASC\"，\"DESC\"]。
    *
    * @return string
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string $sortType 排序类型，取值[\"ASC\"，\"DESC\"]。
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets searchTimeStart
    *  时间范围查询的开始时间。
    *
    * @return int|null
    */
    public function getSearchTimeStart()
    {
        return $this->container['searchTimeStart'];
    }

    /**
    * Sets searchTimeStart
    *
    * @param int|null $searchTimeStart 时间范围查询的开始时间。
    *
    * @return $this
    */
    public function setSearchTimeStart($searchTimeStart)
    {
        $this->container['searchTimeStart'] = $searchTimeStart;
        return $this;
    }

    /**
    * Gets searchTimeEnd
    *  时间范围查询的结束时间。
    *
    * @return int|null
    */
    public function getSearchTimeEnd()
    {
        return $this->container['searchTimeEnd'];
    }

    /**
    * Sets searchTimeEnd
    *
    * @param int|null $searchTimeEnd 时间范围查询的结束时间。
    *
    * @return $this
    */
    public function setSearchTimeEnd($searchTimeEnd)
    {
        $this->container['searchTimeEnd'] = $searchTimeEnd;
        return $this;
    }

    /**
    * Gets status
    *  任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
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
    * @param string|null $status 任务的状态 [\"success\",\"fail\",\"executing\",\"cancel\",\"waitExecute\",\"waitApproval\",\"approvalFailed\",\"pausing\",\"canceling\"]
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

