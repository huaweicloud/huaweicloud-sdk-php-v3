<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExecutionResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExecutionResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * executionId  工单唯一id
    * documentName  作业名称
    * documentId  作业id
    * documentVersionId  作业版本id
    * documentVersion  作业版本号
    * startTime  工单执行开始时间
    * endTime  工单执行结束时间
    * updateTime  工单更新时间
    * creator  工单创建时间
    * status  工单状态
    * description  工单执行描述
    * parameters  工单执行全局参数
    * sysTags  系统标签列表
    * tags  自定义标签列表
    * type  工单类型：BATCH、RATE_CONTROL、NORMAL
    * targetParameterName  速率模式执行指定参数
    * targets  速率模式执行指定元素
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'executionId' => 'string',
            'documentName' => 'string',
            'documentId' => 'string',
            'documentVersionId' => 'string',
            'documentVersion' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'updateTime' => 'int',
            'creator' => 'string',
            'status' => 'string',
            'description' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Coc\V1\Model\ListExecutionResponseParameters[]',
            'sysTags' => '\HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]',
            'tags' => '\HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]',
            'type' => 'string',
            'targetParameterName' => 'string',
            'targets' => '\HuaweiCloud\SDK\Coc\V1\Model\Target[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * executionId  工单唯一id
    * documentName  作业名称
    * documentId  作业id
    * documentVersionId  作业版本id
    * documentVersion  作业版本号
    * startTime  工单执行开始时间
    * endTime  工单执行结束时间
    * updateTime  工单更新时间
    * creator  工单创建时间
    * status  工单状态
    * description  工单执行描述
    * parameters  工单执行全局参数
    * sysTags  系统标签列表
    * tags  自定义标签列表
    * type  工单类型：BATCH、RATE_CONTROL、NORMAL
    * targetParameterName  速率模式执行指定参数
    * targets  速率模式执行指定元素
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'executionId' => null,
        'documentName' => null,
        'documentId' => null,
        'documentVersionId' => null,
        'documentVersion' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'updateTime' => 'int64',
        'creator' => null,
        'status' => null,
        'description' => null,
        'parameters' => null,
        'sysTags' => null,
        'tags' => null,
        'type' => null,
        'targetParameterName' => null,
        'targets' => null
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
    * id  id
    * executionId  工单唯一id
    * documentName  作业名称
    * documentId  作业id
    * documentVersionId  作业版本id
    * documentVersion  作业版本号
    * startTime  工单执行开始时间
    * endTime  工单执行结束时间
    * updateTime  工单更新时间
    * creator  工单创建时间
    * status  工单状态
    * description  工单执行描述
    * parameters  工单执行全局参数
    * sysTags  系统标签列表
    * tags  自定义标签列表
    * type  工单类型：BATCH、RATE_CONTROL、NORMAL
    * targetParameterName  速率模式执行指定参数
    * targets  速率模式执行指定元素
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'executionId' => 'execution_id',
            'documentName' => 'document_name',
            'documentId' => 'document_id',
            'documentVersionId' => 'document_version_id',
            'documentVersion' => 'document_version',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'updateTime' => 'update_time',
            'creator' => 'creator',
            'status' => 'status',
            'description' => 'description',
            'parameters' => 'parameters',
            'sysTags' => 'sys_tags',
            'tags' => 'tags',
            'type' => 'type',
            'targetParameterName' => 'target_parameter_name',
            'targets' => 'targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * executionId  工单唯一id
    * documentName  作业名称
    * documentId  作业id
    * documentVersionId  作业版本id
    * documentVersion  作业版本号
    * startTime  工单执行开始时间
    * endTime  工单执行结束时间
    * updateTime  工单更新时间
    * creator  工单创建时间
    * status  工单状态
    * description  工单执行描述
    * parameters  工单执行全局参数
    * sysTags  系统标签列表
    * tags  自定义标签列表
    * type  工单类型：BATCH、RATE_CONTROL、NORMAL
    * targetParameterName  速率模式执行指定参数
    * targets  速率模式执行指定元素
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'executionId' => 'setExecutionId',
            'documentName' => 'setDocumentName',
            'documentId' => 'setDocumentId',
            'documentVersionId' => 'setDocumentVersionId',
            'documentVersion' => 'setDocumentVersion',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'updateTime' => 'setUpdateTime',
            'creator' => 'setCreator',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'parameters' => 'setParameters',
            'sysTags' => 'setSysTags',
            'tags' => 'setTags',
            'type' => 'setType',
            'targetParameterName' => 'setTargetParameterName',
            'targets' => 'setTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * executionId  工单唯一id
    * documentName  作业名称
    * documentId  作业id
    * documentVersionId  作业版本id
    * documentVersion  作业版本号
    * startTime  工单执行开始时间
    * endTime  工单执行结束时间
    * updateTime  工单更新时间
    * creator  工单创建时间
    * status  工单状态
    * description  工单执行描述
    * parameters  工单执行全局参数
    * sysTags  系统标签列表
    * tags  自定义标签列表
    * type  工单类型：BATCH、RATE_CONTROL、NORMAL
    * targetParameterName  速率模式执行指定参数
    * targets  速率模式执行指定元素
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'executionId' => 'getExecutionId',
            'documentName' => 'getDocumentName',
            'documentId' => 'getDocumentId',
            'documentVersionId' => 'getDocumentVersionId',
            'documentVersion' => 'getDocumentVersion',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'updateTime' => 'getUpdateTime',
            'creator' => 'getCreator',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'parameters' => 'getParameters',
            'sysTags' => 'getSysTags',
            'tags' => 'getTags',
            'type' => 'getType',
            'targetParameterName' => 'getTargetParameterName',
            'targets' => 'getTargets'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['documentName'] = isset($data['documentName']) ? $data['documentName'] : null;
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['documentVersionId'] = isset($data['documentVersionId']) ? $data['documentVersionId'] : null;
        $this->container['documentVersion'] = isset($data['documentVersion']) ? $data['documentVersion'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['targetParameterName'] = isset($data['targetParameterName']) ? $data['targetParameterName'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
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
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets executionId
    *  工单唯一id
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 工单唯一id
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets documentName
    *  作业名称
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
    * @param string|null $documentName 作业名称
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
    * Gets documentVersionId
    *  作业版本id
    *
    * @return string|null
    */
    public function getDocumentVersionId()
    {
        return $this->container['documentVersionId'];
    }

    /**
    * Sets documentVersionId
    *
    * @param string|null $documentVersionId 作业版本id
    *
    * @return $this
    */
    public function setDocumentVersionId($documentVersionId)
    {
        $this->container['documentVersionId'] = $documentVersionId;
        return $this;
    }

    /**
    * Gets documentVersion
    *  作业版本号
    *
    * @return string|null
    */
    public function getDocumentVersion()
    {
        return $this->container['documentVersion'];
    }

    /**
    * Sets documentVersion
    *
    * @param string|null $documentVersion 作业版本号
    *
    * @return $this
    */
    public function setDocumentVersion($documentVersion)
    {
        $this->container['documentVersion'] = $documentVersion;
        return $this;
    }

    /**
    * Gets startTime
    *  工单执行开始时间
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
    * @param int|null $startTime 工单执行开始时间
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
    *  工单执行结束时间
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
    * @param int|null $endTime 工单执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  工单更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 工单更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets creator
    *  工单创建时间
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
    * @param string|null $creator 工单创建时间
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets status
    *  工单状态
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
    * @param string|null $status 工单状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  工单执行描述
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
    * @param string|null $description 工单执行描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parameters
    *  工单执行全局参数
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ListExecutionResponseParameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ListExecutionResponseParameters[]|null $parameters 工单执行全局参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null $sysTags 系统标签列表
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null $tags 自定义标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  工单类型：BATCH、RATE_CONTROL、NORMAL
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
    * @param string|null $type 工单类型：BATCH、RATE_CONTROL、NORMAL
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets targetParameterName
    *  速率模式执行指定参数
    *
    * @return string|null
    */
    public function getTargetParameterName()
    {
        return $this->container['targetParameterName'];
    }

    /**
    * Sets targetParameterName
    *
    * @param string|null $targetParameterName 速率模式执行指定参数
    *
    * @return $this
    */
    public function setTargetParameterName($targetParameterName)
    {
        $this->container['targetParameterName'] = $targetParameterName;
        return $this;
    }

    /**
    * Gets targets
    *  速率模式执行指定元素
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\Target[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\Target[]|null $targets 速率模式执行指定元素
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
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

