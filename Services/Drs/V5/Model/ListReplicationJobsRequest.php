<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReplicationJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReplicationJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。 en-us：英文 zh-cn：中文
    * name  任务名称，支持模糊搜索。
    * status  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。
    * completedAt  完成时间。
    * enterpriseProjectId  企业项目ID。
    * tags  标签。
    * limit  查询返回记录的数量限制，默认值为10。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * sortKey  排序字段。
    * sortDir  排序方法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'name' => 'string',
            'status' => 'string',
            'dbsInstanceIds' => 'string[]',
            'description' => 'string',
            'createAt' => 'string',
            'completedAt' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。 en-us：英文 zh-cn：中文
    * name  任务名称，支持模糊搜索。
    * status  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。
    * completedAt  完成时间。
    * enterpriseProjectId  企业项目ID。
    * tags  标签。
    * limit  查询返回记录的数量限制，默认值为10。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * sortKey  排序字段。
    * sortDir  排序方法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'name' => null,
        'status' => null,
        'dbsInstanceIds' => null,
        'description' => null,
        'createAt' => null,
        'completedAt' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'sortKey' => null,
        'sortDir' => null
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
    * xLanguage  请求语言类型。 en-us：英文 zh-cn：中文
    * name  任务名称，支持模糊搜索。
    * status  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。
    * completedAt  完成时间。
    * enterpriseProjectId  企业项目ID。
    * tags  标签。
    * limit  查询返回记录的数量限制，默认值为10。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * sortKey  排序字段。
    * sortDir  排序方法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'name' => 'name',
            'status' => 'status',
            'dbsInstanceIds' => 'dbs_instance_ids',
            'description' => 'description',
            'createAt' => 'create_at',
            'completedAt' => 'completed_at',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。 en-us：英文 zh-cn：中文
    * name  任务名称，支持模糊搜索。
    * status  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。
    * completedAt  完成时间。
    * enterpriseProjectId  企业项目ID。
    * tags  标签。
    * limit  查询返回记录的数量限制，默认值为10。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * sortKey  排序字段。
    * sortDir  排序方法。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'name' => 'setName',
            'status' => 'setStatus',
            'dbsInstanceIds' => 'setDbsInstanceIds',
            'description' => 'setDescription',
            'createAt' => 'setCreateAt',
            'completedAt' => 'setCompletedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。 en-us：英文 zh-cn：中文
    * name  任务名称，支持模糊搜索。
    * status  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。
    * completedAt  完成时间。
    * enterpriseProjectId  企业项目ID。
    * tags  标签。
    * limit  查询返回记录的数量限制，默认值为10。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * sortKey  排序字段。
    * sortDir  排序方法。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'name' => 'getName',
            'status' => 'getStatus',
            'dbsInstanceIds' => 'getDbsInstanceIds',
            'description' => 'getDescription',
            'createAt' => 'getCreateAt',
            'completedAt' => 'getCompletedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const STATUS_TRANSFERRING = 'TRANSFERRING';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_PRECHECK_FAILED = 'PRECHECK FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_TRANSFERRING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_PRECHECK_FAILED,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dbsInstanceIds'] = isset($data['dbsInstanceIds']) ? $data['dbsInstanceIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['completedAt'] = isset($data['completedAt']) ? $data['completedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 128)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createAt']) && (mb_strlen($this->container['createAt']) > 128)) {
                $invalidProperties[] = "invalid value for 'createAt', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createAt']) && (mb_strlen($this->container['createAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['completedAt']) && (mb_strlen($this->container['completedAt']) > 128)) {
                $invalidProperties[] = "invalid value for 'completedAt', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['completedAt']) && (mb_strlen($this->container['completedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'completedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 512)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 0)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than 65535.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
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
    * Gets xLanguage
    *  请求语言类型。 en-us：英文 zh-cn：中文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。 en-us：英文 zh-cn：中文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets name
    *  任务名称，支持模糊搜索。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称，支持模糊搜索。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
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
    * @param string|null $status 备份迁移任务状态。 TRANSFERRING：恢复中 SUCCESS：成功 FAILED：失败 PRECHECK FAILED：预检查失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dbsInstanceIds
    *  数据库实例ID，最大数量为10。
    *
    * @return string[]|null
    */
    public function getDbsInstanceIds()
    {
        return $this->container['dbsInstanceIds'];
    }

    /**
    * Sets dbsInstanceIds
    *
    * @param string[]|null $dbsInstanceIds 数据库实例ID，最大数量为10。
    *
    * @return $this
    */
    public function setDbsInstanceIds($dbsInstanceIds)
    {
        $this->container['dbsInstanceIds'] = $dbsInstanceIds;
        return $this;
    }

    /**
    * Gets description
    *  描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets completedAt
    *  完成时间。
    *
    * @return string|null
    */
    public function getCompletedAt()
    {
        return $this->container['completedAt'];
    }

    /**
    * Sets completedAt
    *
    * @param string|null $completedAt 完成时间。
    *
    * @return $this
    */
    public function setCompletedAt($completedAt)
    {
        $this->container['completedAt'] = $completedAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制，默认值为10。
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
    * @param int|null $limit 查询返回记录的数量限制，默认值为10。
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
    *  偏移量，默认值为0，表示查询该偏移量后面的记录。
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
    * @param int|null $offset 偏移量，默认值为0，表示查询该偏移量后面的记录。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段。
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
    * @param string|null $sortKey 排序字段。
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
    *  排序方法。
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
    * @param string|null $sortDir 排序方法。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

