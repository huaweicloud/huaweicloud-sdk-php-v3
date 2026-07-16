<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmResponseMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmResponse_metadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    * name  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * description  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * workspaceId  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    * aiProject  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    * userName  用户名称。
    * domainId  用户的domainID。
    * source  算法来源类型。
    * apiVersion  算法api版本，标识新旧版。
    * isValid  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    * state  算法状态。
    * tags  算法标签。
    * attrList  算法属性列表。
    * versionNum  算法版本数量，默认为0。
    * size  算法大小。
    * createTime  算法创建时间戳。
    * updateTime  算法更新时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'workspaceId' => 'string',
            'aiProject' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'source' => 'string',
            'apiVersion' => 'string',
            'isValid' => 'bool',
            'state' => 'string',
            'tags' => 'map[string,string][]',
            'attrList' => 'string[]',
            'versionNum' => 'int',
            'size' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    * name  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * description  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * workspaceId  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    * aiProject  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    * userName  用户名称。
    * domainId  用户的domainID。
    * source  算法来源类型。
    * apiVersion  算法api版本，标识新旧版。
    * isValid  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    * state  算法状态。
    * tags  算法标签。
    * attrList  算法属性列表。
    * versionNum  算法版本数量，默认为0。
    * size  算法大小。
    * createTime  算法创建时间戳。
    * updateTime  算法更新时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'workspaceId' => null,
        'aiProject' => null,
        'userName' => null,
        'domainId' => null,
        'source' => null,
        'apiVersion' => null,
        'isValid' => null,
        'state' => null,
        'tags' => null,
        'attrList' => null,
        'versionNum' => 'int32',
        'size' => 'int32',
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    * name  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * description  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * workspaceId  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    * aiProject  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    * userName  用户名称。
    * domainId  用户的domainID。
    * source  算法来源类型。
    * apiVersion  算法api版本，标识新旧版。
    * isValid  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    * state  算法状态。
    * tags  算法标签。
    * attrList  算法属性列表。
    * versionNum  算法版本数量，默认为0。
    * size  算法大小。
    * createTime  算法创建时间戳。
    * updateTime  算法更新时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'workspaceId' => 'workspace_id',
            'aiProject' => 'ai_project',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'source' => 'source',
            'apiVersion' => 'api_version',
            'isValid' => 'is_valid',
            'state' => 'state',
            'tags' => 'tags',
            'attrList' => 'attr_list',
            'versionNum' => 'version_num',
            'size' => 'size',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    * name  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * description  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * workspaceId  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    * aiProject  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    * userName  用户名称。
    * domainId  用户的domainID。
    * source  算法来源类型。
    * apiVersion  算法api版本，标识新旧版。
    * isValid  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    * state  算法状态。
    * tags  算法标签。
    * attrList  算法属性列表。
    * versionNum  算法版本数量，默认为0。
    * size  算法大小。
    * createTime  算法创建时间戳。
    * updateTime  算法更新时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'workspaceId' => 'setWorkspaceId',
            'aiProject' => 'setAiProject',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'source' => 'setSource',
            'apiVersion' => 'setApiVersion',
            'isValid' => 'setIsValid',
            'state' => 'setState',
            'tags' => 'setTags',
            'attrList' => 'setAttrList',
            'versionNum' => 'setVersionNum',
            'size' => 'setSize',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    * name  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * description  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * workspaceId  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    * aiProject  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    * userName  用户名称。
    * domainId  用户的domainID。
    * source  算法来源类型。
    * apiVersion  算法api版本，标识新旧版。
    * isValid  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    * state  算法状态。
    * tags  算法标签。
    * attrList  算法属性列表。
    * versionNum  算法版本数量，默认为0。
    * size  算法大小。
    * createTime  算法创建时间戳。
    * updateTime  算法更新时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'workspaceId' => 'getWorkspaceId',
            'aiProject' => 'getAiProject',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'source' => 'getSource',
            'apiVersion' => 'getApiVersion',
            'isValid' => 'getIsValid',
            'state' => 'getState',
            'tags' => 'getTags',
            'attrList' => 'getAttrList',
            'versionNum' => 'getVersionNum',
            'size' => 'getSize',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['aiProject'] = isset($data['aiProject']) ? $data['aiProject'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['attrList'] = isset($data['attrList']) ? $data['attrList'] : null;
        $this->container['versionNum'] = isset($data['versionNum']) ? $data['versionNum'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets id
    *  **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：算法id，创建算法时无需填写。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 算法名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
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
    * @param string|null $description 对算法的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets workspaceId
    *  指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 指定算法所处的工作空间，默认值为“0”。“0” 为默认的工作空间。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets aiProject
    *  指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    *
    * @return string|null
    */
    public function getAiProject()
    {
        return $this->container['aiProject'];
    }

    /**
    * Sets aiProject
    *
    * @param string|null $aiProject 指定算法所属的ai项目，默认值为\"default-ai-project\"。ai项目已下线，无需关注。
    *
    * @return $this
    */
    public function setAiProject($aiProject)
    {
        $this->container['aiProject'] = $aiProject;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainId
    *  用户的domainID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户的domainID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets source
    *  算法来源类型。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 算法来源类型。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets apiVersion
    *  算法api版本，标识新旧版。
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion 算法api版本，标识新旧版。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets isValid
    *  **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid **参数解释**：算法可用性。 **取值范围**： - true：可用 - false：不可用
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets state
    *  算法状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 算法状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets tags
    *  算法标签。
    *
    * @return map[string,string][]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string][]|null $tags 算法标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets attrList
    *  算法属性列表。
    *
    * @return string[]|null
    */
    public function getAttrList()
    {
        return $this->container['attrList'];
    }

    /**
    * Sets attrList
    *
    * @param string[]|null $attrList 算法属性列表。
    *
    * @return $this
    */
    public function setAttrList($attrList)
    {
        $this->container['attrList'] = $attrList;
        return $this;
    }

    /**
    * Gets versionNum
    *  算法版本数量，默认为0。
    *
    * @return int|null
    */
    public function getVersionNum()
    {
        return $this->container['versionNum'];
    }

    /**
    * Sets versionNum
    *
    * @param int|null $versionNum 算法版本数量，默认为0。
    *
    * @return $this
    */
    public function setVersionNum($versionNum)
    {
        $this->container['versionNum'] = $versionNum;
        return $this;
    }

    /**
    * Gets size
    *  算法大小。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 算法大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets createTime
    *  算法创建时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 算法创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  算法更新时间戳。
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
    * @param int|null $updateTime 算法更新时间戳。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

