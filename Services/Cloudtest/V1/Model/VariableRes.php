<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VariableRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VariableRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * byOrder  byOrder
    * category  category
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * currentPermission  currentPermission
    * description  description
    * dynamicParamFlag  dynamicParamFlag
    * functionParams  functionParams
    * groupId  groupId
    * id  id
    * isSensitiveInfo  isSensitiveInfo
    * isSensitiveModified  isSensitiveModified
    * locked  locked
    * name  name
    * nodeId  nodeId
    * nodeType  nodeType
    * parentId  parentId
    * parentNodeId  parentNodeId
    * property  property
    * region  region
    * sensitiveInfoSetterTime  sensitiveInfoSetterTime
    * sensitiveInfoSetterUser  sensitiveInfoSetterUser
    * sourceId  sourceId
    * type  type
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * variableType  variableType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'byOrder' => 'int',
            'category' => 'string',
            'createTime' => 'string',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'currentPermission' => 'string',
            'description' => 'string',
            'dynamicParamFlag' => 'bool',
            'functionParams' => 'string',
            'groupId' => 'string',
            'id' => 'string',
            'isSensitiveInfo' => 'bool',
            'isSensitiveModified' => 'bool',
            'locked' => 'int',
            'name' => 'string',
            'nodeId' => 'string',
            'nodeType' => 'int',
            'parentId' => 'string',
            'parentNodeId' => 'string',
            'property' => 'string',
            'region' => 'string',
            'sensitiveInfoSetterTime' => 'string',
            'sensitiveInfoSetterUser' => 'string',
            'sourceId' => 'string',
            'type' => 'string',
            'updateTime' => 'string',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string',
            'variableType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * byOrder  byOrder
    * category  category
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * currentPermission  currentPermission
    * description  description
    * dynamicParamFlag  dynamicParamFlag
    * functionParams  functionParams
    * groupId  groupId
    * id  id
    * isSensitiveInfo  isSensitiveInfo
    * isSensitiveModified  isSensitiveModified
    * locked  locked
    * name  name
    * nodeId  nodeId
    * nodeType  nodeType
    * parentId  parentId
    * parentNodeId  parentNodeId
    * property  property
    * region  region
    * sensitiveInfoSetterTime  sensitiveInfoSetterTime
    * sensitiveInfoSetterUser  sensitiveInfoSetterUser
    * sourceId  sourceId
    * type  type
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * variableType  variableType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'byOrder' => 'int32',
        'category' => null,
        'createTime' => null,
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'currentPermission' => null,
        'description' => null,
        'dynamicParamFlag' => null,
        'functionParams' => null,
        'groupId' => null,
        'id' => null,
        'isSensitiveInfo' => null,
        'isSensitiveModified' => null,
        'locked' => 'int32',
        'name' => null,
        'nodeId' => null,
        'nodeType' => 'int32',
        'parentId' => null,
        'parentNodeId' => null,
        'property' => null,
        'region' => null,
        'sensitiveInfoSetterTime' => null,
        'sensitiveInfoSetterUser' => null,
        'sourceId' => null,
        'type' => null,
        'updateTime' => null,
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
        'updateUser' => null,
        'variableType' => 'int32'
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
    * byOrder  byOrder
    * category  category
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * currentPermission  currentPermission
    * description  description
    * dynamicParamFlag  dynamicParamFlag
    * functionParams  functionParams
    * groupId  groupId
    * id  id
    * isSensitiveInfo  isSensitiveInfo
    * isSensitiveModified  isSensitiveModified
    * locked  locked
    * name  name
    * nodeId  nodeId
    * nodeType  nodeType
    * parentId  parentId
    * parentNodeId  parentNodeId
    * property  property
    * region  region
    * sensitiveInfoSetterTime  sensitiveInfoSetterTime
    * sensitiveInfoSetterUser  sensitiveInfoSetterUser
    * sourceId  sourceId
    * type  type
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * variableType  variableType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'byOrder' => 'by_order',
            'category' => 'category',
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'currentPermission' => 'currentPermission',
            'description' => 'description',
            'dynamicParamFlag' => 'dynamicParamFlag',
            'functionParams' => 'functionParams',
            'groupId' => 'groupId',
            'id' => 'id',
            'isSensitiveInfo' => 'isSensitiveInfo',
            'isSensitiveModified' => 'isSensitiveModified',
            'locked' => 'locked',
            'name' => 'name',
            'nodeId' => 'node_id',
            'nodeType' => 'node_type',
            'parentId' => 'parent_id',
            'parentNodeId' => 'parent_node_id',
            'property' => 'property',
            'region' => 'region',
            'sensitiveInfoSetterTime' => 'sensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'sensitiveInfoSetterUser',
            'sourceId' => 'sourceId',
            'type' => 'type',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user',
            'variableType' => 'variableType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * byOrder  byOrder
    * category  category
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * currentPermission  currentPermission
    * description  description
    * dynamicParamFlag  dynamicParamFlag
    * functionParams  functionParams
    * groupId  groupId
    * id  id
    * isSensitiveInfo  isSensitiveInfo
    * isSensitiveModified  isSensitiveModified
    * locked  locked
    * name  name
    * nodeId  nodeId
    * nodeType  nodeType
    * parentId  parentId
    * parentNodeId  parentNodeId
    * property  property
    * region  region
    * sensitiveInfoSetterTime  sensitiveInfoSetterTime
    * sensitiveInfoSetterUser  sensitiveInfoSetterUser
    * sourceId  sourceId
    * type  type
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * variableType  variableType
    *
    * @var string[]
    */
    protected static $setters = [
            'byOrder' => 'setByOrder',
            'category' => 'setCategory',
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'currentPermission' => 'setCurrentPermission',
            'description' => 'setDescription',
            'dynamicParamFlag' => 'setDynamicParamFlag',
            'functionParams' => 'setFunctionParams',
            'groupId' => 'setGroupId',
            'id' => 'setId',
            'isSensitiveInfo' => 'setIsSensitiveInfo',
            'isSensitiveModified' => 'setIsSensitiveModified',
            'locked' => 'setLocked',
            'name' => 'setName',
            'nodeId' => 'setNodeId',
            'nodeType' => 'setNodeType',
            'parentId' => 'setParentId',
            'parentNodeId' => 'setParentNodeId',
            'property' => 'setProperty',
            'region' => 'setRegion',
            'sensitiveInfoSetterTime' => 'setSensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'setSensitiveInfoSetterUser',
            'sourceId' => 'setSourceId',
            'type' => 'setType',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser',
            'variableType' => 'setVariableType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * byOrder  byOrder
    * category  category
    * createTime  创建时间
    * createTimeStamp  createTimeStamp
    * createTimeString  createTimeString
    * createUser  创建人
    * currentPermission  currentPermission
    * description  description
    * dynamicParamFlag  dynamicParamFlag
    * functionParams  functionParams
    * groupId  groupId
    * id  id
    * isSensitiveInfo  isSensitiveInfo
    * isSensitiveModified  isSensitiveModified
    * locked  locked
    * name  name
    * nodeId  nodeId
    * nodeType  nodeType
    * parentId  parentId
    * parentNodeId  parentNodeId
    * property  property
    * region  region
    * sensitiveInfoSetterTime  sensitiveInfoSetterTime
    * sensitiveInfoSetterUser  sensitiveInfoSetterUser
    * sourceId  sourceId
    * type  type
    * updateTime  更新时间
    * updateTimeStamp  updateTimeStamp
    * updateTimeString  updateTimeString
    * updateUser  更新人
    * variableType  variableType
    *
    * @var string[]
    */
    protected static $getters = [
            'byOrder' => 'getByOrder',
            'category' => 'getCategory',
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'currentPermission' => 'getCurrentPermission',
            'description' => 'getDescription',
            'dynamicParamFlag' => 'getDynamicParamFlag',
            'functionParams' => 'getFunctionParams',
            'groupId' => 'getGroupId',
            'id' => 'getId',
            'isSensitiveInfo' => 'getIsSensitiveInfo',
            'isSensitiveModified' => 'getIsSensitiveModified',
            'locked' => 'getLocked',
            'name' => 'getName',
            'nodeId' => 'getNodeId',
            'nodeType' => 'getNodeType',
            'parentId' => 'getParentId',
            'parentNodeId' => 'getParentNodeId',
            'property' => 'getProperty',
            'region' => 'getRegion',
            'sensitiveInfoSetterTime' => 'getSensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'getSensitiveInfoSetterUser',
            'sourceId' => 'getSourceId',
            'type' => 'getType',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
            'updateUser' => 'getUpdateUser',
            'variableType' => 'getVariableType'
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
        $this->container['byOrder'] = isset($data['byOrder']) ? $data['byOrder'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['currentPermission'] = isset($data['currentPermission']) ? $data['currentPermission'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dynamicParamFlag'] = isset($data['dynamicParamFlag']) ? $data['dynamicParamFlag'] : null;
        $this->container['functionParams'] = isset($data['functionParams']) ? $data['functionParams'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isSensitiveInfo'] = isset($data['isSensitiveInfo']) ? $data['isSensitiveInfo'] : null;
        $this->container['isSensitiveModified'] = isset($data['isSensitiveModified']) ? $data['isSensitiveModified'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['parentNodeId'] = isset($data['parentNodeId']) ? $data['parentNodeId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sensitiveInfoSetterTime'] = isset($data['sensitiveInfoSetterTime']) ? $data['sensitiveInfoSetterTime'] : null;
        $this->container['sensitiveInfoSetterUser'] = isset($data['sensitiveInfoSetterUser']) ? $data['sensitiveInfoSetterUser'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['variableType'] = isset($data['variableType']) ? $data['variableType'] : null;
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
    * Gets byOrder
    *  byOrder
    *
    * @return int|null
    */
    public function getByOrder()
    {
        return $this->container['byOrder'];
    }

    /**
    * Sets byOrder
    *
    * @param int|null $byOrder byOrder
    *
    * @return $this
    */
    public function setByOrder($byOrder)
    {
        $this->container['byOrder'] = $byOrder;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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
    * Gets createTimeStamp
    *  createTimeStamp
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp createTimeStamp
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets createTimeString
    *  createTimeString
    *
    * @return string|null
    */
    public function getCreateTimeString()
    {
        return $this->container['createTimeString'];
    }

    /**
    * Sets createTimeString
    *
    * @param string|null $createTimeString createTimeString
    *
    * @return $this
    */
    public function setCreateTimeString($createTimeString)
    {
        $this->container['createTimeString'] = $createTimeString;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets currentPermission
    *  currentPermission
    *
    * @return string|null
    */
    public function getCurrentPermission()
    {
        return $this->container['currentPermission'];
    }

    /**
    * Sets currentPermission
    *
    * @param string|null $currentPermission currentPermission
    *
    * @return $this
    */
    public function setCurrentPermission($currentPermission)
    {
        $this->container['currentPermission'] = $currentPermission;
        return $this;
    }

    /**
    * Gets description
    *  description
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
    * @param string|null $description description
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dynamicParamFlag
    *  dynamicParamFlag
    *
    * @return bool|null
    */
    public function getDynamicParamFlag()
    {
        return $this->container['dynamicParamFlag'];
    }

    /**
    * Sets dynamicParamFlag
    *
    * @param bool|null $dynamicParamFlag dynamicParamFlag
    *
    * @return $this
    */
    public function setDynamicParamFlag($dynamicParamFlag)
    {
        $this->container['dynamicParamFlag'] = $dynamicParamFlag;
        return $this;
    }

    /**
    * Gets functionParams
    *  functionParams
    *
    * @return string|null
    */
    public function getFunctionParams()
    {
        return $this->container['functionParams'];
    }

    /**
    * Sets functionParams
    *
    * @param string|null $functionParams functionParams
    *
    * @return $this
    */
    public function setFunctionParams($functionParams)
    {
        $this->container['functionParams'] = $functionParams;
        return $this;
    }

    /**
    * Gets groupId
    *  groupId
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
    * @param string|null $groupId groupId
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
    * Gets isSensitiveInfo
    *  isSensitiveInfo
    *
    * @return bool|null
    */
    public function getIsSensitiveInfo()
    {
        return $this->container['isSensitiveInfo'];
    }

    /**
    * Sets isSensitiveInfo
    *
    * @param bool|null $isSensitiveInfo isSensitiveInfo
    *
    * @return $this
    */
    public function setIsSensitiveInfo($isSensitiveInfo)
    {
        $this->container['isSensitiveInfo'] = $isSensitiveInfo;
        return $this;
    }

    /**
    * Gets isSensitiveModified
    *  isSensitiveModified
    *
    * @return bool|null
    */
    public function getIsSensitiveModified()
    {
        return $this->container['isSensitiveModified'];
    }

    /**
    * Sets isSensitiveModified
    *
    * @param bool|null $isSensitiveModified isSensitiveModified
    *
    * @return $this
    */
    public function setIsSensitiveModified($isSensitiveModified)
    {
        $this->container['isSensitiveModified'] = $isSensitiveModified;
        return $this;
    }

    /**
    * Gets locked
    *  locked
    *
    * @return int|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param int|null $locked locked
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
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
    *  nodeId
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
    * @param string|null $nodeId nodeId
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeType
    *  nodeType
    *
    * @return int|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param int|null $nodeType nodeType
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets parentId
    *  parentId
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
    * @param string|null $parentId parentId
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets parentNodeId
    *  parentNodeId
    *
    * @return string|null
    */
    public function getParentNodeId()
    {
        return $this->container['parentNodeId'];
    }

    /**
    * Sets parentNodeId
    *
    * @param string|null $parentNodeId parentNodeId
    *
    * @return $this
    */
    public function setParentNodeId($parentNodeId)
    {
        $this->container['parentNodeId'] = $parentNodeId;
        return $this;
    }

    /**
    * Gets property
    *  property
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property property
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets region
    *  region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets sensitiveInfoSetterTime
    *  sensitiveInfoSetterTime
    *
    * @return string|null
    */
    public function getSensitiveInfoSetterTime()
    {
        return $this->container['sensitiveInfoSetterTime'];
    }

    /**
    * Sets sensitiveInfoSetterTime
    *
    * @param string|null $sensitiveInfoSetterTime sensitiveInfoSetterTime
    *
    * @return $this
    */
    public function setSensitiveInfoSetterTime($sensitiveInfoSetterTime)
    {
        $this->container['sensitiveInfoSetterTime'] = $sensitiveInfoSetterTime;
        return $this;
    }

    /**
    * Gets sensitiveInfoSetterUser
    *  sensitiveInfoSetterUser
    *
    * @return string|null
    */
    public function getSensitiveInfoSetterUser()
    {
        return $this->container['sensitiveInfoSetterUser'];
    }

    /**
    * Sets sensitiveInfoSetterUser
    *
    * @param string|null $sensitiveInfoSetterUser sensitiveInfoSetterUser
    *
    * @return $this
    */
    public function setSensitiveInfoSetterUser($sensitiveInfoSetterUser)
    {
        $this->container['sensitiveInfoSetterUser'] = $sensitiveInfoSetterUser;
        return $this;
    }

    /**
    * Gets sourceId
    *  sourceId
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId sourceId
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets type
    *  type
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
    * @param string|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets updateTimeStamp
    *  updateTimeStamp
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp updateTimeStamp
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeString
    *  updateTimeString
    *
    * @return string|null
    */
    public function getUpdateTimeString()
    {
        return $this->container['updateTimeString'];
    }

    /**
    * Sets updateTimeString
    *
    * @param string|null $updateTimeString updateTimeString
    *
    * @return $this
    */
    public function setUpdateTimeString($updateTimeString)
    {
        $this->container['updateTimeString'] = $updateTimeString;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets variableType
    *  variableType
    *
    * @return int|null
    */
    public function getVariableType()
    {
        return $this->container['variableType'];
    }

    /**
    * Sets variableType
    *
    * @param int|null $variableType variableType
    *
    * @return $this
    */
    public function setVariableType($variableType)
    {
        $this->container['variableType'] = $variableType;
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

