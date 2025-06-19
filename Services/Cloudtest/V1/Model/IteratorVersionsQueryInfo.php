<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IteratorVersionsQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IteratorVersionsQueryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  迭代计划名称（支持模糊搜索）
    * filter  filter
    * own  是否是我的
    * branchUri  分支URI
    * iteratorUri  迭代计划URI
    * ownerIds  迭代计划责任人集合
    * projectUuid  项目ID
    * currentStage  迭代计划所处节点
    * pageNo  当前页数
    * pageSize  每页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'filter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IteratorListFilterInfo',
            'own' => 'bool',
            'branchUri' => 'string',
            'iteratorUri' => 'string',
            'ownerIds' => 'string[]',
            'projectUuid' => 'string',
            'currentStage' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  迭代计划名称（支持模糊搜索）
    * filter  filter
    * own  是否是我的
    * branchUri  分支URI
    * iteratorUri  迭代计划URI
    * ownerIds  迭代计划责任人集合
    * projectUuid  项目ID
    * currentStage  迭代计划所处节点
    * pageNo  当前页数
    * pageSize  每页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'filter' => null,
        'own' => null,
        'branchUri' => null,
        'iteratorUri' => null,
        'ownerIds' => null,
        'projectUuid' => null,
        'currentStage' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32'
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
    * name  迭代计划名称（支持模糊搜索）
    * filter  filter
    * own  是否是我的
    * branchUri  分支URI
    * iteratorUri  迭代计划URI
    * ownerIds  迭代计划责任人集合
    * projectUuid  项目ID
    * currentStage  迭代计划所处节点
    * pageNo  当前页数
    * pageSize  每页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'filter' => 'filter',
            'own' => 'own',
            'branchUri' => 'branch_uri',
            'iteratorUri' => 'iterator_uri',
            'ownerIds' => 'owner_ids',
            'projectUuid' => 'project_uuid',
            'currentStage' => 'current_stage',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  迭代计划名称（支持模糊搜索）
    * filter  filter
    * own  是否是我的
    * branchUri  分支URI
    * iteratorUri  迭代计划URI
    * ownerIds  迭代计划责任人集合
    * projectUuid  项目ID
    * currentStage  迭代计划所处节点
    * pageNo  当前页数
    * pageSize  每页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'filter' => 'setFilter',
            'own' => 'setOwn',
            'branchUri' => 'setBranchUri',
            'iteratorUri' => 'setIteratorUri',
            'ownerIds' => 'setOwnerIds',
            'projectUuid' => 'setProjectUuid',
            'currentStage' => 'setCurrentStage',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  迭代计划名称（支持模糊搜索）
    * filter  filter
    * own  是否是我的
    * branchUri  分支URI
    * iteratorUri  迭代计划URI
    * ownerIds  迭代计划责任人集合
    * projectUuid  项目ID
    * currentStage  迭代计划所处节点
    * pageNo  当前页数
    * pageSize  每页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'filter' => 'getFilter',
            'own' => 'getOwn',
            'branchUri' => 'getBranchUri',
            'iteratorUri' => 'getIteratorUri',
            'ownerIds' => 'getOwnerIds',
            'projectUuid' => 'getProjectUuid',
            'currentStage' => 'getCurrentStage',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['own'] = isset($data['own']) ? $data['own'] : null;
        $this->container['branchUri'] = isset($data['branchUri']) ? $data['branchUri'] : null;
        $this->container['iteratorUri'] = isset($data['iteratorUri']) ? $data['iteratorUri'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
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
    * Gets name
    *  迭代计划名称（支持模糊搜索）
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
    * @param string|null $name 迭代计划名称（支持模糊搜索）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IteratorListFilterInfo|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IteratorListFilterInfo|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets own
    *  是否是我的
    *
    * @return bool|null
    */
    public function getOwn()
    {
        return $this->container['own'];
    }

    /**
    * Sets own
    *
    * @param bool|null $own 是否是我的
    *
    * @return $this
    */
    public function setOwn($own)
    {
        $this->container['own'] = $own;
        return $this;
    }

    /**
    * Gets branchUri
    *  分支URI
    *
    * @return string|null
    */
    public function getBranchUri()
    {
        return $this->container['branchUri'];
    }

    /**
    * Sets branchUri
    *
    * @param string|null $branchUri 分支URI
    *
    * @return $this
    */
    public function setBranchUri($branchUri)
    {
        $this->container['branchUri'] = $branchUri;
        return $this;
    }

    /**
    * Gets iteratorUri
    *  迭代计划URI
    *
    * @return string|null
    */
    public function getIteratorUri()
    {
        return $this->container['iteratorUri'];
    }

    /**
    * Sets iteratorUri
    *
    * @param string|null $iteratorUri 迭代计划URI
    *
    * @return $this
    */
    public function setIteratorUri($iteratorUri)
    {
        $this->container['iteratorUri'] = $iteratorUri;
        return $this;
    }

    /**
    * Gets ownerIds
    *  迭代计划责任人集合
    *
    * @return string[]|null
    */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
    * Sets ownerIds
    *
    * @param string[]|null $ownerIds 迭代计划责任人集合
    *
    * @return $this
    */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets currentStage
    *  迭代计划所处节点
    *
    * @return string|null
    */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
    * Sets currentStage
    *
    * @param string|null $currentStage 迭代计划所处节点
    *
    * @return $this
    */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;
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

