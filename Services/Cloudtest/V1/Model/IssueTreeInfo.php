<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueTreeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueTreeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  过滤条件：处理人
    * issueId  需求ID
    * pageNo  页码
    * pageSize  每页展示条数
    * keyWord  关键字
    * iterationId  过滤条件：迭代ID
    * severityId  过滤条件：重要程度ID
    * statusId  过滤条件：状态ID
    * moduleId  过滤条件：模块ID
    * statusIds  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    * moduleIds  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    * piFilter  迭代、pi过滤条件
    * statusNames  状态名称列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'issueId' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'keyWord' => 'string',
            'iterationId' => 'string',
            'severityId' => 'string',
            'statusId' => 'string',
            'moduleId' => 'string',
            'statusIds' => 'string',
            'moduleIds' => 'string',
            'piFilter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]',
            'statusNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  过滤条件：处理人
    * issueId  需求ID
    * pageNo  页码
    * pageSize  每页展示条数
    * keyWord  关键字
    * iterationId  过滤条件：迭代ID
    * severityId  过滤条件：重要程度ID
    * statusId  过滤条件：状态ID
    * moduleId  过滤条件：模块ID
    * statusIds  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    * moduleIds  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    * piFilter  迭代、pi过滤条件
    * statusNames  状态名称列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'issueId' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'keyWord' => null,
        'iterationId' => null,
        'severityId' => null,
        'statusId' => null,
        'moduleId' => null,
        'statusIds' => null,
        'moduleIds' => null,
        'piFilter' => null,
        'statusNames' => null
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
    * owner  过滤条件：处理人
    * issueId  需求ID
    * pageNo  页码
    * pageSize  每页展示条数
    * keyWord  关键字
    * iterationId  过滤条件：迭代ID
    * severityId  过滤条件：重要程度ID
    * statusId  过滤条件：状态ID
    * moduleId  过滤条件：模块ID
    * statusIds  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    * moduleIds  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    * piFilter  迭代、pi过滤条件
    * statusNames  状态名称列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'issueId' => 'issue_id',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'keyWord' => 'key_word',
            'iterationId' => 'iteration_id',
            'severityId' => 'severity_id',
            'statusId' => 'status_id',
            'moduleId' => 'module_id',
            'statusIds' => 'status_ids',
            'moduleIds' => 'module_ids',
            'piFilter' => 'pi_filter',
            'statusNames' => 'status_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  过滤条件：处理人
    * issueId  需求ID
    * pageNo  页码
    * pageSize  每页展示条数
    * keyWord  关键字
    * iterationId  过滤条件：迭代ID
    * severityId  过滤条件：重要程度ID
    * statusId  过滤条件：状态ID
    * moduleId  过滤条件：模块ID
    * statusIds  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    * moduleIds  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    * piFilter  迭代、pi过滤条件
    * statusNames  状态名称列表
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'issueId' => 'setIssueId',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'keyWord' => 'setKeyWord',
            'iterationId' => 'setIterationId',
            'severityId' => 'setSeverityId',
            'statusId' => 'setStatusId',
            'moduleId' => 'setModuleId',
            'statusIds' => 'setStatusIds',
            'moduleIds' => 'setModuleIds',
            'piFilter' => 'setPiFilter',
            'statusNames' => 'setStatusNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  过滤条件：处理人
    * issueId  需求ID
    * pageNo  页码
    * pageSize  每页展示条数
    * keyWord  关键字
    * iterationId  过滤条件：迭代ID
    * severityId  过滤条件：重要程度ID
    * statusId  过滤条件：状态ID
    * moduleId  过滤条件：模块ID
    * statusIds  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    * moduleIds  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    * piFilter  迭代、pi过滤条件
    * statusNames  状态名称列表
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'issueId' => 'getIssueId',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'keyWord' => 'getKeyWord',
            'iterationId' => 'getIterationId',
            'severityId' => 'getSeverityId',
            'statusId' => 'getStatusId',
            'moduleId' => 'getModuleId',
            'statusIds' => 'getStatusIds',
            'moduleIds' => 'getModuleIds',
            'piFilter' => 'getPiFilter',
            'statusNames' => 'getStatusNames'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['severityId'] = isset($data['severityId']) ? $data['severityId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['statusIds'] = isset($data['statusIds']) ? $data['statusIds'] : null;
        $this->container['moduleIds'] = isset($data['moduleIds']) ? $data['moduleIds'] : null;
        $this->container['piFilter'] = isset($data['piFilter']) ? $data['piFilter'] : null;
        $this->container['statusNames'] = isset($data['statusNames']) ? $data['statusNames'] : null;
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
    * Gets owner
    *  过滤条件：处理人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 过滤条件：处理人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets issueId
    *  需求ID
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 需求ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
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
    * @param int|null $pageNo 页码
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
    *  每页展示条数
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
    * @param int|null $pageSize 每页展示条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets iterationId
    *  过滤条件：迭代ID
    *
    * @return string|null
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param string|null $iterationId 过滤条件：迭代ID
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
        return $this;
    }

    /**
    * Gets severityId
    *  过滤条件：重要程度ID
    *
    * @return string|null
    */
    public function getSeverityId()
    {
        return $this->container['severityId'];
    }

    /**
    * Sets severityId
    *
    * @param string|null $severityId 过滤条件：重要程度ID
    *
    * @return $this
    */
    public function setSeverityId($severityId)
    {
        $this->container['severityId'] = $severityId;
        return $this;
    }

    /**
    * Gets statusId
    *  过滤条件：状态ID
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 过滤条件：状态ID
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets moduleId
    *  过滤条件：模块ID
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
    * @param string|null $moduleId 过滤条件：模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets statusIds
    *  过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    *
    * @return string|null
    */
    public function getStatusIds()
    {
        return $this->container['statusIds'];
    }

    /**
    * Sets statusIds
    *
    * @param string|null $statusIds 过滤条件：状态ID多个条件，每个条件取或，-2代表搜索未设置
    *
    * @return $this
    */
    public function setStatusIds($statusIds)
    {
        $this->container['statusIds'] = $statusIds;
        return $this;
    }

    /**
    * Gets moduleIds
    *  过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    *
    * @return string|null
    */
    public function getModuleIds()
    {
        return $this->container['moduleIds'];
    }

    /**
    * Sets moduleIds
    *
    * @param string|null $moduleIds 过滤条件：模块ID多个，每个条件取或，-2代表搜索未设置
    *
    * @return $this
    */
    public function setModuleIds($moduleIds)
    {
        $this->container['moduleIds'] = $moduleIds;
        return $this;
    }

    /**
    * Gets piFilter
    *  迭代、pi过滤条件
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null
    */
    public function getPiFilter()
    {
        return $this->container['piFilter'];
    }

    /**
    * Sets piFilter
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null $piFilter 迭代、pi过滤条件
    *
    * @return $this
    */
    public function setPiFilter($piFilter)
    {
        $this->container['piFilter'] = $piFilter;
        return $this;
    }

    /**
    * Gets statusNames
    *  状态名称列表
    *
    * @return string[]|null
    */
    public function getStatusNames()
    {
        return $this->container['statusNames'];
    }

    /**
    * Sets statusNames
    *
    * @param string[]|null $statusNames 状态名称列表
    *
    * @return $this
    */
    public function setStatusNames($statusNames)
    {
        $this->container['statusNames'] = $statusNames;
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

