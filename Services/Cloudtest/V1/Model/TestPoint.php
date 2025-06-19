<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * deleteTime  删除时间
    * deleted  逻辑删除字段
    * groupId  分组id
    * id  id 主键
    * mindmapId  脑图id
    * name  名称
    * nodeId  节点id
    * requirementId  需求id
    * requirementName  需求名称
    * serviceId  服务id
    * status  状态
    * statusType  状体类型
    * tcCounts  tc数量
    * testCases  测试用例
    * updateName  更新人名称
    * updateNum  更新人工号
    * updateTime  更新时间
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'deleteTime' => 'string',
            'deleted' => 'string',
            'groupId' => 'string',
            'id' => 'string',
            'mindmapId' => 'string',
            'name' => 'string',
            'nodeId' => 'string',
            'requirementId' => 'string',
            'requirementName' => 'string',
            'serviceId' => 'string',
            'status' => 'string',
            'statusType' => 'string',
            'tcCounts' => 'string',
            'testCases' => 'string',
            'updateName' => 'string',
            'updateNum' => 'string',
            'updateTime' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * deleteTime  删除时间
    * deleted  逻辑删除字段
    * groupId  分组id
    * id  id 主键
    * mindmapId  脑图id
    * name  名称
    * nodeId  节点id
    * requirementId  需求id
    * requirementName  需求名称
    * serviceId  服务id
    * status  状态
    * statusType  状体类型
    * tcCounts  tc数量
    * testCases  测试用例
    * updateName  更新人名称
    * updateNum  更新人工号
    * updateTime  更新时间
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'createTime' => null,
        'creatorName' => null,
        'creatorNum' => null,
        'deleteTime' => null,
        'deleted' => null,
        'groupId' => null,
        'id' => null,
        'mindmapId' => null,
        'name' => null,
        'nodeId' => null,
        'requirementId' => null,
        'requirementName' => null,
        'serviceId' => null,
        'status' => null,
        'statusType' => null,
        'tcCounts' => null,
        'testCases' => null,
        'updateName' => null,
        'updateNum' => null,
        'updateTime' => null,
        'version' => null
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
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * deleteTime  删除时间
    * deleted  逻辑删除字段
    * groupId  分组id
    * id  id 主键
    * mindmapId  脑图id
    * name  名称
    * nodeId  节点id
    * requirementId  需求id
    * requirementName  需求名称
    * serviceId  服务id
    * status  状态
    * statusType  状体类型
    * tcCounts  tc数量
    * testCases  测试用例
    * updateName  更新人名称
    * updateNum  更新人工号
    * updateTime  更新时间
    * version  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'deleteTime' => 'delete_time',
            'deleted' => 'deleted',
            'groupId' => 'group_id',
            'id' => 'id',
            'mindmapId' => 'mindmap_id',
            'name' => 'name',
            'nodeId' => 'node_id',
            'requirementId' => 'requirement_id',
            'requirementName' => 'requirement_name',
            'serviceId' => 'service_id',
            'status' => 'status',
            'statusType' => 'status_type',
            'tcCounts' => 'tc_counts',
            'testCases' => 'test_cases',
            'updateName' => 'update_name',
            'updateNum' => 'update_num',
            'updateTime' => 'update_time',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * deleteTime  删除时间
    * deleted  逻辑删除字段
    * groupId  分组id
    * id  id 主键
    * mindmapId  脑图id
    * name  名称
    * nodeId  节点id
    * requirementId  需求id
    * requirementName  需求名称
    * serviceId  服务id
    * status  状态
    * statusType  状体类型
    * tcCounts  tc数量
    * testCases  测试用例
    * updateName  更新人名称
    * updateNum  更新人工号
    * updateTime  更新时间
    * version  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'deleteTime' => 'setDeleteTime',
            'deleted' => 'setDeleted',
            'groupId' => 'setGroupId',
            'id' => 'setId',
            'mindmapId' => 'setMindmapId',
            'name' => 'setName',
            'nodeId' => 'setNodeId',
            'requirementId' => 'setRequirementId',
            'requirementName' => 'setRequirementName',
            'serviceId' => 'setServiceId',
            'status' => 'setStatus',
            'statusType' => 'setStatusType',
            'tcCounts' => 'setTcCounts',
            'testCases' => 'setTestCases',
            'updateName' => 'setUpdateName',
            'updateNum' => 'setUpdateNum',
            'updateTime' => 'setUpdateTime',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * deleteTime  删除时间
    * deleted  逻辑删除字段
    * groupId  分组id
    * id  id 主键
    * mindmapId  脑图id
    * name  名称
    * nodeId  节点id
    * requirementId  需求id
    * requirementName  需求名称
    * serviceId  服务id
    * status  状态
    * statusType  状体类型
    * tcCounts  tc数量
    * testCases  测试用例
    * updateName  更新人名称
    * updateNum  更新人工号
    * updateTime  更新时间
    * version  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'deleteTime' => 'getDeleteTime',
            'deleted' => 'getDeleted',
            'groupId' => 'getGroupId',
            'id' => 'getId',
            'mindmapId' => 'getMindmapId',
            'name' => 'getName',
            'nodeId' => 'getNodeId',
            'requirementId' => 'getRequirementId',
            'requirementName' => 'getRequirementName',
            'serviceId' => 'getServiceId',
            'status' => 'getStatus',
            'statusType' => 'getStatusType',
            'tcCounts' => 'getTcCounts',
            'testCases' => 'getTestCases',
            'updateName' => 'getUpdateName',
            'updateNum' => 'getUpdateNum',
            'updateTime' => 'getUpdateTime',
            'version' => 'getVersion'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['requirementId'] = isset($data['requirementId']) ? $data['requirementId'] : null;
        $this->container['requirementName'] = isset($data['requirementName']) ? $data['requirementName'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusType'] = isset($data['statusType']) ? $data['statusType'] : null;
        $this->container['tcCounts'] = isset($data['tcCounts']) ? $data['tcCounts'] : null;
        $this->container['testCases'] = isset($data['testCases']) ? $data['testCases'] : null;
        $this->container['updateName'] = isset($data['updateName']) ? $data['updateName'] : null;
        $this->container['updateNum'] = isset($data['updateNum']) ? $data['updateNum'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    * Gets app
    *  app
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app app
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorNum
    *  创建人工号
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum 创建人工号
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
        return $this;
    }

    /**
    * Gets deleteTime
    *  删除时间
    *
    * @return string|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param string|null $deleteTime 删除时间
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets deleted
    *  逻辑删除字段
    *
    * @return string|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string|null $deleted 逻辑删除字段
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets groupId
    *  分组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets id
    *  id 主键
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
    * @param string|null $id id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mindmapId
    *  脑图id
    *
    * @return string|null
    */
    public function getMindmapId()
    {
        return $this->container['mindmapId'];
    }

    /**
    * Sets mindmapId
    *
    * @param string|null $mindmapId 脑图id
    *
    * @return $this
    */
    public function setMindmapId($mindmapId)
    {
        $this->container['mindmapId'] = $mindmapId;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets requirementId
    *  需求id
    *
    * @return string|null
    */
    public function getRequirementId()
    {
        return $this->container['requirementId'];
    }

    /**
    * Sets requirementId
    *
    * @param string|null $requirementId 需求id
    *
    * @return $this
    */
    public function setRequirementId($requirementId)
    {
        $this->container['requirementId'] = $requirementId;
        return $this;
    }

    /**
    * Gets requirementName
    *  需求名称
    *
    * @return string|null
    */
    public function getRequirementName()
    {
        return $this->container['requirementName'];
    }

    /**
    * Sets requirementName
    *
    * @param string|null $requirementName 需求名称
    *
    * @return $this
    */
    public function setRequirementName($requirementName)
    {
        $this->container['requirementName'] = $requirementName;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务id
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusType
    *  状体类型
    *
    * @return string|null
    */
    public function getStatusType()
    {
        return $this->container['statusType'];
    }

    /**
    * Sets statusType
    *
    * @param string|null $statusType 状体类型
    *
    * @return $this
    */
    public function setStatusType($statusType)
    {
        $this->container['statusType'] = $statusType;
        return $this;
    }

    /**
    * Gets tcCounts
    *  tc数量
    *
    * @return string|null
    */
    public function getTcCounts()
    {
        return $this->container['tcCounts'];
    }

    /**
    * Sets tcCounts
    *
    * @param string|null $tcCounts tc数量
    *
    * @return $this
    */
    public function setTcCounts($tcCounts)
    {
        $this->container['tcCounts'] = $tcCounts;
        return $this;
    }

    /**
    * Gets testCases
    *  测试用例
    *
    * @return string|null
    */
    public function getTestCases()
    {
        return $this->container['testCases'];
    }

    /**
    * Sets testCases
    *
    * @param string|null $testCases 测试用例
    *
    * @return $this
    */
    public function setTestCases($testCases)
    {
        $this->container['testCases'] = $testCases;
        return $this;
    }

    /**
    * Gets updateName
    *  更新人名称
    *
    * @return string|null
    */
    public function getUpdateName()
    {
        return $this->container['updateName'];
    }

    /**
    * Sets updateName
    *
    * @param string|null $updateName 更新人名称
    *
    * @return $this
    */
    public function setUpdateName($updateName)
    {
        $this->container['updateName'] = $updateName;
        return $this;
    }

    /**
    * Gets updateNum
    *  更新人工号
    *
    * @return string|null
    */
    public function getUpdateNum()
    {
        return $this->container['updateNum'];
    }

    /**
    * Sets updateNum
    *
    * @param string|null $updateNum 更新人工号
    *
    * @return $this
    */
    public function setUpdateNum($updateNum)
    {
        $this->container['updateNum'] = $updateNum;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

