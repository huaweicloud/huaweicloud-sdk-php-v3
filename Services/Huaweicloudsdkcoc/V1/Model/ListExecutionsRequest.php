<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExecutionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExecutionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制 不传默认第一页查10个
    * offset  分页参数：从offset指定的下一条数据开始查询，不传默认0
    * creator  创建人，模糊查询
    * startTime  开始时间，大于
    * endTime  结束时间，小于
    * documentName  作业名称，模糊查询
    * documentId  作业id
    * tags  标签过滤条件，例：?tags=key1=value1,key2=value2
    * excludeChildExecutions  列表查询不返回子工单
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'creator' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'documentName' => 'string',
            'documentId' => 'string',
            'tags' => 'string',
            'excludeChildExecutions' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制 不传默认第一页查10个
    * offset  分页参数：从offset指定的下一条数据开始查询，不传默认0
    * creator  创建人，模糊查询
    * startTime  开始时间，大于
    * endTime  结束时间，小于
    * documentName  作业名称，模糊查询
    * documentId  作业id
    * tags  标签过滤条件，例：?tags=key1=value1,key2=value2
    * excludeChildExecutions  列表查询不返回子工单
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int64',
        'creator' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'documentName' => null,
        'documentId' => null,
        'tags' => null,
        'excludeChildExecutions' => null
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
    * limit  分页参数：每页返回记录个数限制 不传默认第一页查10个
    * offset  分页参数：从offset指定的下一条数据开始查询，不传默认0
    * creator  创建人，模糊查询
    * startTime  开始时间，大于
    * endTime  结束时间，小于
    * documentName  作业名称，模糊查询
    * documentId  作业id
    * tags  标签过滤条件，例：?tags=key1=value1,key2=value2
    * excludeChildExecutions  列表查询不返回子工单
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'creator' => 'creator',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'documentName' => 'document_name',
            'documentId' => 'document_id',
            'tags' => 'tags',
            'excludeChildExecutions' => 'exclude_child_executions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页参数：每页返回记录个数限制 不传默认第一页查10个
    * offset  分页参数：从offset指定的下一条数据开始查询，不传默认0
    * creator  创建人，模糊查询
    * startTime  开始时间，大于
    * endTime  结束时间，小于
    * documentName  作业名称，模糊查询
    * documentId  作业id
    * tags  标签过滤条件，例：?tags=key1=value1,key2=value2
    * excludeChildExecutions  列表查询不返回子工单
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'creator' => 'setCreator',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'documentName' => 'setDocumentName',
            'documentId' => 'setDocumentId',
            'tags' => 'setTags',
            'excludeChildExecutions' => 'setExcludeChildExecutions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页参数：每页返回记录个数限制 不传默认第一页查10个
    * offset  分页参数：从offset指定的下一条数据开始查询，不传默认0
    * creator  创建人，模糊查询
    * startTime  开始时间，大于
    * endTime  结束时间，小于
    * documentName  作业名称，模糊查询
    * documentId  作业id
    * tags  标签过滤条件，例：?tags=key1=value1,key2=value2
    * excludeChildExecutions  列表查询不返回子工单
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'creator' => 'getCreator',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'documentName' => 'getDocumentName',
            'documentId' => 'getDocumentId',
            'tags' => 'getTags',
            'excludeChildExecutions' => 'getExcludeChildExecutions'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['documentName'] = isset($data['documentName']) ? $data['documentName'] : null;
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['excludeChildExecutions'] = isset($data['excludeChildExecutions']) ? $data['excludeChildExecutions'] : null;
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
    * Gets limit
    *  分页参数：每页返回记录个数限制 不传默认第一页查10个
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
    * @param int|null $limit 分页参数：每页返回记录个数限制 不传默认第一页查10个
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
    *  分页参数：从offset指定的下一条数据开始查询，不传默认0
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
    * @param int|null $offset 分页参数：从offset指定的下一条数据开始查询，不传默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets creator
    *  创建人，模糊查询
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人，模糊查询
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，大于
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
    * @param int|null $startTime 开始时间，大于
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
    *  结束时间，小于
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
    * @param int|null $endTime 结束时间，小于
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets documentName
    *  作业名称，模糊查询
    *
    * @return string|null
    */
    public function getDocumentName()
    {
        return $this->container['documentName'];
    }

    /**
    * Sets documentName
    *
    * @param string|null $documentName 作业名称，模糊查询
    *
    * @return $this
    */
    public function setDocumentName($documentName)
    {
        $this->container['documentName'] = $documentName;
        return $this;
    }

    /**
    * Gets documentId
    *  作业id
    *
    * @return string|null
    */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
    * Sets documentId
    *
    * @param string|null $documentId 作业id
    *
    * @return $this
    */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }

    /**
    * Gets tags
    *  标签过滤条件，例：?tags=key1=value1,key2=value2
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
    * @param string|null $tags 标签过滤条件，例：?tags=key1=value1,key2=value2
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets excludeChildExecutions
    *  列表查询不返回子工单
    *
    * @return bool|null
    */
    public function getExcludeChildExecutions()
    {
        return $this->container['excludeChildExecutions'];
    }

    /**
    * Sets excludeChildExecutions
    *
    * @param bool|null $excludeChildExecutions 列表查询不返回子工单
    *
    * @return $this
    */
    public function setExcludeChildExecutions($excludeChildExecutions)
    {
        $this->container['excludeChildExecutions'] = $excludeChildExecutions;
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

