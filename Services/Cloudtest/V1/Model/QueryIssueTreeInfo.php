<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryIssueTreeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryIssueTreeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * parentId  父节点id
    * pageNumber  页码
    * pageSize  每页数量
    * filter  filter
    * trackerId  trackerId
    * moduleId  模块id
    * taskUri  任务udi
    * includeSubIssue  是否统计子需求的用例数，默认true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceType' => 'int',
            'serviceTypes' => 'int[]',
            'parentId' => 'string',
            'pageNumber' => 'int',
            'pageSize' => 'int',
            'filter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListFilterInfo',
            'trackerId' => 'string',
            'moduleId' => 'string',
            'taskUri' => 'string',
            'includeSubIssue' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * parentId  父节点id
    * pageNumber  页码
    * pageSize  每页数量
    * filter  filter
    * trackerId  trackerId
    * moduleId  模块id
    * taskUri  任务udi
    * includeSubIssue  是否统计子需求的用例数，默认true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceType' => 'int32',
        'serviceTypes' => 'int32',
        'parentId' => null,
        'pageNumber' => 'int32',
        'pageSize' => 'int32',
        'filter' => null,
        'trackerId' => null,
        'moduleId' => null,
        'taskUri' => null,
        'includeSubIssue' => null
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
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * parentId  父节点id
    * pageNumber  页码
    * pageSize  每页数量
    * filter  filter
    * trackerId  trackerId
    * moduleId  模块id
    * taskUri  任务udi
    * includeSubIssue  是否统计子需求的用例数，默认true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceType' => 'service_type',
            'serviceTypes' => 'service_types',
            'parentId' => 'parent_id',
            'pageNumber' => 'page_number',
            'pageSize' => 'page_size',
            'filter' => 'filter',
            'trackerId' => 'tracker_id',
            'moduleId' => 'module_id',
            'taskUri' => 'task_uri',
            'includeSubIssue' => 'include_sub_issue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * parentId  父节点id
    * pageNumber  页码
    * pageSize  每页数量
    * filter  filter
    * trackerId  trackerId
    * moduleId  模块id
    * taskUri  任务udi
    * includeSubIssue  是否统计子需求的用例数，默认true
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceType' => 'setServiceType',
            'serviceTypes' => 'setServiceTypes',
            'parentId' => 'setParentId',
            'pageNumber' => 'setPageNumber',
            'pageSize' => 'setPageSize',
            'filter' => 'setFilter',
            'trackerId' => 'setTrackerId',
            'moduleId' => 'setModuleId',
            'taskUri' => 'setTaskUri',
            'includeSubIssue' => 'setIncludeSubIssue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * parentId  父节点id
    * pageNumber  页码
    * pageSize  每页数量
    * filter  filter
    * trackerId  trackerId
    * moduleId  模块id
    * taskUri  任务udi
    * includeSubIssue  是否统计子需求的用例数，默认true
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceType' => 'getServiceType',
            'serviceTypes' => 'getServiceTypes',
            'parentId' => 'getParentId',
            'pageNumber' => 'getPageNumber',
            'pageSize' => 'getPageSize',
            'filter' => 'getFilter',
            'trackerId' => 'getTrackerId',
            'moduleId' => 'getModuleId',
            'taskUri' => 'getTaskUri',
            'includeSubIssue' => 'getIncludeSubIssue'
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
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serviceTypes'] = isset($data['serviceTypes']) ? $data['serviceTypes'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['includeSubIssue'] = isset($data['includeSubIssue']) ? $data['includeSubIssue'] : null;
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
    * Gets serviceType
    *  服务类型
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets serviceTypes
    *  服务类型集合
    *
    * @return int[]|null
    */
    public function getServiceTypes()
    {
        return $this->container['serviceTypes'];
    }

    /**
    * Sets serviceTypes
    *
    * @param int[]|null $serviceTypes 服务类型集合
    *
    * @return $this
    */
    public function setServiceTypes($serviceTypes)
    {
        $this->container['serviceTypes'] = $serviceTypes;
        return $this;
    }

    /**
    * Gets parentId
    *  父节点id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets pageNumber
    *  页码
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 页码
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量
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
    * @param int|null $pageSize 每页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListFilterInfo|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListFilterInfo|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets trackerId
    *  trackerId
    *
    * @return string|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param string|null $trackerId trackerId
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务udi
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
    * @param string|null $taskUri 任务udi
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets includeSubIssue
    *  是否统计子需求的用例数，默认true
    *
    * @return bool|null
    */
    public function getIncludeSubIssue()
    {
        return $this->container['includeSubIssue'];
    }

    /**
    * Sets includeSubIssue
    *
    * @param bool|null $includeSubIssue 是否统计子需求的用例数，默认true
    *
    * @return $this
    */
    public function setIncludeSubIssue($includeSubIssue)
    {
        $this->container['includeSubIssue'] = $includeSubIssue;
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

