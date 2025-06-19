<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCaseResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCaseResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  结果URI
    * taskUri  测试任务URI
    * taskId  执行id
    * releaseDev  版本号
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'taskUri' => 'string',
            'taskId' => 'string',
            'releaseDev' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'sortField' => 'string',
            'sortType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  结果URI
    * taskUri  测试任务URI
    * taskId  执行id
    * releaseDev  版本号
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'taskUri' => null,
        'taskId' => null,
        'releaseDev' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'sortField' => null,
        'sortType' => null
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
    * uri  结果URI
    * taskUri  测试任务URI
    * taskId  执行id
    * releaseDev  版本号
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'taskUri' => 'task_uri',
            'taskId' => 'task_id',
            'releaseDev' => 'release_dev',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  结果URI
    * taskUri  测试任务URI
    * taskId  执行id
    * releaseDev  版本号
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序类型
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'taskUri' => 'setTaskUri',
            'taskId' => 'setTaskId',
            'releaseDev' => 'setReleaseDev',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  结果URI
    * taskUri  测试任务URI
    * taskId  执行id
    * releaseDev  版本号
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序类型
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'taskUri' => 'getTaskUri',
            'taskId' => 'getTaskId',
            'releaseDev' => 'getReleaseDev',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    * Gets uri
    *  结果URI
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 结果URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets taskUri
    *  测试任务URI
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 测试任务URI
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets taskId
    *  执行id
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
    * @param string|null $taskId 执行id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets releaseDev
    *  版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
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
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
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
    * @param string|null $sortField 排序字段
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
    *  排序类型
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序类型
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
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

