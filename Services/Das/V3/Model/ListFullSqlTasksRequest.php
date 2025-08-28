<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFullSqlTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFullSqlTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * rangeLeft  最小任务起止时间（Unix timestamp），单位：毫秒。
    * rangeRight  最大任务起止时间（Unix timestamp），单位：毫秒。
    * createAtLeft  最小任务创建时间（Unix timestamp），单位：毫秒。
    * createAtRight  最大任务创建时间（Unix timestamp），单位：毫秒。
    * user  用户名。
    * keyword  关键字。
    * dbName  数据库名。
    * operation  操作类型。
    * threadId  线程ID。
    * trxId  事务ID。
    * status  执行状态（0:成功，1:失败）。
    * sqlTemplateId  SQL模板ID。
    * sortField  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'rangeLeft' => 'int',
            'rangeRight' => 'int',
            'createAtLeft' => 'int',
            'createAtRight' => 'int',
            'user' => 'string',
            'keyword' => 'string',
            'dbName' => 'string',
            'operation' => 'string',
            'threadId' => 'string',
            'trxId' => 'string',
            'status' => 'string',
            'sqlTemplateId' => 'string',
            'sortField' => 'string',
            'asc' => 'bool',
            'page' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * rangeLeft  最小任务起止时间（Unix timestamp），单位：毫秒。
    * rangeRight  最大任务起止时间（Unix timestamp），单位：毫秒。
    * createAtLeft  最小任务创建时间（Unix timestamp），单位：毫秒。
    * createAtRight  最大任务创建时间（Unix timestamp），单位：毫秒。
    * user  用户名。
    * keyword  关键字。
    * dbName  数据库名。
    * operation  操作类型。
    * threadId  线程ID。
    * trxId  事务ID。
    * status  执行状态（0:成功，1:失败）。
    * sqlTemplateId  SQL模板ID。
    * sortField  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'rangeLeft' => 'int64',
        'rangeRight' => 'int64',
        'createAtLeft' => 'int64',
        'createAtRight' => 'int64',
        'user' => null,
        'keyword' => null,
        'dbName' => null,
        'operation' => null,
        'threadId' => null,
        'trxId' => null,
        'status' => null,
        'sqlTemplateId' => null,
        'sortField' => null,
        'asc' => null,
        'page' => 'int32',
        'limit' => 'int32',
        'xLanguage' => null
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
    * instanceId  实例ID。
    * rangeLeft  最小任务起止时间（Unix timestamp），单位：毫秒。
    * rangeRight  最大任务起止时间（Unix timestamp），单位：毫秒。
    * createAtLeft  最小任务创建时间（Unix timestamp），单位：毫秒。
    * createAtRight  最大任务创建时间（Unix timestamp），单位：毫秒。
    * user  用户名。
    * keyword  关键字。
    * dbName  数据库名。
    * operation  操作类型。
    * threadId  线程ID。
    * trxId  事务ID。
    * status  执行状态（0:成功，1:失败）。
    * sqlTemplateId  SQL模板ID。
    * sortField  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'rangeLeft' => 'range_left',
            'rangeRight' => 'range_right',
            'createAtLeft' => 'create_at_left',
            'createAtRight' => 'create_at_right',
            'user' => 'user',
            'keyword' => 'keyword',
            'dbName' => 'db_name',
            'operation' => 'operation',
            'threadId' => 'thread_id',
            'trxId' => 'trx_id',
            'status' => 'status',
            'sqlTemplateId' => 'sql_template_id',
            'sortField' => 'sort_field',
            'asc' => 'asc',
            'page' => 'page',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * rangeLeft  最小任务起止时间（Unix timestamp），单位：毫秒。
    * rangeRight  最大任务起止时间（Unix timestamp），单位：毫秒。
    * createAtLeft  最小任务创建时间（Unix timestamp），单位：毫秒。
    * createAtRight  最大任务创建时间（Unix timestamp），单位：毫秒。
    * user  用户名。
    * keyword  关键字。
    * dbName  数据库名。
    * operation  操作类型。
    * threadId  线程ID。
    * trxId  事务ID。
    * status  执行状态（0:成功，1:失败）。
    * sqlTemplateId  SQL模板ID。
    * sortField  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'rangeLeft' => 'setRangeLeft',
            'rangeRight' => 'setRangeRight',
            'createAtLeft' => 'setCreateAtLeft',
            'createAtRight' => 'setCreateAtRight',
            'user' => 'setUser',
            'keyword' => 'setKeyword',
            'dbName' => 'setDbName',
            'operation' => 'setOperation',
            'threadId' => 'setThreadId',
            'trxId' => 'setTrxId',
            'status' => 'setStatus',
            'sqlTemplateId' => 'setSqlTemplateId',
            'sortField' => 'setSortField',
            'asc' => 'setAsc',
            'page' => 'setPage',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * rangeLeft  最小任务起止时间（Unix timestamp），单位：毫秒。
    * rangeRight  最大任务起止时间（Unix timestamp），单位：毫秒。
    * createAtLeft  最小任务创建时间（Unix timestamp），单位：毫秒。
    * createAtRight  最大任务创建时间（Unix timestamp），单位：毫秒。
    * user  用户名。
    * keyword  关键字。
    * dbName  数据库名。
    * operation  操作类型。
    * threadId  线程ID。
    * trxId  事务ID。
    * status  执行状态（0:成功，1:失败）。
    * sqlTemplateId  SQL模板ID。
    * sortField  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'rangeLeft' => 'getRangeLeft',
            'rangeRight' => 'getRangeRight',
            'createAtLeft' => 'getCreateAtLeft',
            'createAtRight' => 'getCreateAtRight',
            'user' => 'getUser',
            'keyword' => 'getKeyword',
            'dbName' => 'getDbName',
            'operation' => 'getOperation',
            'threadId' => 'getThreadId',
            'trxId' => 'getTrxId',
            'status' => 'getStatus',
            'sqlTemplateId' => 'getSqlTemplateId',
            'sortField' => 'getSortField',
            'asc' => 'getAsc',
            'page' => 'getPage',
            'limit' => 'getLimit',
            'xLanguage' => 'getXLanguage'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['rangeLeft'] = isset($data['rangeLeft']) ? $data['rangeLeft'] : null;
        $this->container['rangeRight'] = isset($data['rangeRight']) ? $data['rangeRight'] : null;
        $this->container['createAtLeft'] = isset($data['createAtLeft']) ? $data['createAtLeft'] : null;
        $this->container['createAtRight'] = isset($data['createAtRight']) ? $data['createAtRight'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['trxId'] = isset($data['trxId']) ? $data['trxId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets rangeLeft
    *  最小任务起止时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getRangeLeft()
    {
        return $this->container['rangeLeft'];
    }

    /**
    * Sets rangeLeft
    *
    * @param int|null $rangeLeft 最小任务起止时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setRangeLeft($rangeLeft)
    {
        $this->container['rangeLeft'] = $rangeLeft;
        return $this;
    }

    /**
    * Gets rangeRight
    *  最大任务起止时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getRangeRight()
    {
        return $this->container['rangeRight'];
    }

    /**
    * Sets rangeRight
    *
    * @param int|null $rangeRight 最大任务起止时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setRangeRight($rangeRight)
    {
        $this->container['rangeRight'] = $rangeRight;
        return $this;
    }

    /**
    * Gets createAtLeft
    *  最小任务创建时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getCreateAtLeft()
    {
        return $this->container['createAtLeft'];
    }

    /**
    * Sets createAtLeft
    *
    * @param int|null $createAtLeft 最小任务创建时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setCreateAtLeft($createAtLeft)
    {
        $this->container['createAtLeft'] = $createAtLeft;
        return $this;
    }

    /**
    * Gets createAtRight
    *  最大任务创建时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getCreateAtRight()
    {
        return $this->container['createAtRight'];
    }

    /**
    * Sets createAtRight
    *
    * @param int|null $createAtRight 最大任务创建时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setCreateAtRight($createAtRight)
    {
        $this->container['createAtRight'] = $createAtRight;
        return $this;
    }

    /**
    * Gets user
    *  用户名。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型。
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作类型。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID。
    *
    * @return string|null
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param string|null $threadId 线程ID。
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets trxId
    *  事务ID。
    *
    * @return string|null
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param string|null $trxId 事务ID。
    *
    * @return $this
    */
    public function setTrxId($trxId)
    {
        $this->container['trxId'] = $trxId;
        return $this;
    }

    /**
    * Gets status
    *  执行状态（0:成功，1:失败）。
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
    * @param string|null $status 执行状态（0:成功，1:失败）。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID。
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId SQL模板ID。
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
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
    * @param string|null $sortField 排序字段（create_at:任务创建时间, range_start_at,range_end_at:任务起止时间）。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets asc
    *  排序顺序（true:正序, false:逆序）。
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 排序顺序（true:正序, false:逆序）。
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets page
    *  页码。
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
    * @param int|null $page 页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数。最大为100。
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
    * @param int|null $limit 每页记录数。最大为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。
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
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

