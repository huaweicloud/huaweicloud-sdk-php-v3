<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClustersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClustersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    * pageSize  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    * currentPage  当前查询页码。
    * clusterName  集群名称。
    * clusterState  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    * enterpriseProjectId  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => 'string',
            'pageSize' => 'string',
            'currentPage' => 'string',
            'clusterName' => 'string',
            'clusterState' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    * pageSize  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    * currentPage  当前查询页码。
    * clusterName  集群名称。
    * clusterState  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    * enterpriseProjectId  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'pageSize' => null,
        'currentPage' => null,
        'clusterName' => null,
        'clusterState' => null,
        'enterpriseProjectId' => null
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
    * tags  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    * pageSize  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    * currentPage  当前查询页码。
    * clusterName  集群名称。
    * clusterState  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    * enterpriseProjectId  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'pageSize' => 'pageSize',
            'currentPage' => 'currentPage',
            'clusterName' => 'clusterName',
            'clusterState' => 'clusterState',
            'enterpriseProjectId' => 'enterpriseProjectId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    * pageSize  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    * currentPage  当前查询页码。
    * clusterName  集群名称。
    * clusterState  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    * enterpriseProjectId  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'pageSize' => 'setPageSize',
            'currentPage' => 'setCurrentPage',
            'clusterName' => 'setClusterName',
            'clusterState' => 'setClusterState',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    * pageSize  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    * currentPage  当前查询页码。
    * clusterName  集群名称。
    * clusterState  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    * enterpriseProjectId  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'pageSize' => 'getPageSize',
            'currentPage' => 'getCurrentPage',
            'clusterName' => 'getClusterName',
            'clusterState' => 'getClusterState',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterState'] = isset($data['clusterState']) ? $data['clusterState'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets tags
    *  可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
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
    * @param string|null $tags 可以通过集群的标签来搜索指定标签的集群，当指定多个tag进行查询时，标签之间是与的关系。  - tags参数的格式为tags=k1*v1,k2*v2,k3*v3 - 当标签的value为空时，格式为tags=k1,k2,k3*v3
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    *
    * @return string|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param string|null $pageSize 分页查询每页返回的最大集群数量。  取值范围：[1～2147483646]
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets currentPage
    *  当前查询页码。
    *
    * @return string|null
    */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
    * Sets currentPage
    *
    * @param string|null $currentPage 当前查询页码。
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterState
    *  根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    *
    * @return string|null
    */
    public function getClusterState()
    {
        return $this->container['clusterState'];
    }

    /**
    * Sets clusterState
    *
    * @param string|null $clusterState 根据集群状态查询集群列表。 - existing：查询现有集群列表，包括除“已删除”、包周期集群的“订单处理中”和“准备中”状态外的所有集群。 - history：查询历史集群列表，包括所有“已删除”、删除集群失败、集群删除虚拟机失败、删除集群更新数据库失败等状态的集群。 - starting：查询启动中的集群列表。 - running：查询运行中的集群列表。 - terminated：查询已删除的集群列表。 - failed：查询失败的集群列表。 - abnormal：查询异常的集群列表。 - terminating：查询删除中的集群列表。 - frozen：查询已冻结的集群列表。 - scaling-out：查询扩容中的集群列表。 - scaling-in：查询缩容中的集群列表。
    *
    * @return $this
    */
    public function setClusterState($clusterState)
    {
        $this->container['clusterState'] = $clusterState;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
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
    * @param string|null $enterpriseProjectId 通过企业项目ID来搜索指定项目的集群。  该参数默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

