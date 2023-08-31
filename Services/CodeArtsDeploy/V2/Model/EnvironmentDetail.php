<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  环境id
    * name  环境名称
    * description  环境描述
    * os  操作系统
    * nickName  用户昵称
    * deployType  部署类型：0表示主机, 1表示kubernetes
    * createdTime  创建时间
    * instanceCount  环境下主机实例数量
    * createdBy  createdBy
    * permission  permission
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'os' => 'string',
            'nickName' => 'string',
            'deployType' => 'int',
            'createdTime' => 'string',
            'instanceCount' => 'int',
            'createdBy' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentPermissionDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  环境id
    * name  环境名称
    * description  环境描述
    * os  操作系统
    * nickName  用户昵称
    * deployType  部署类型：0表示主机, 1表示kubernetes
    * createdTime  创建时间
    * instanceCount  环境下主机实例数量
    * createdBy  createdBy
    * permission  permission
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'os' => null,
        'nickName' => null,
        'deployType' => null,
        'createdTime' => null,
        'instanceCount' => null,
        'createdBy' => null,
        'permission' => null
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
    * id  环境id
    * name  环境名称
    * description  环境描述
    * os  操作系统
    * nickName  用户昵称
    * deployType  部署类型：0表示主机, 1表示kubernetes
    * createdTime  创建时间
    * instanceCount  环境下主机实例数量
    * createdBy  createdBy
    * permission  permission
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'os' => 'os',
            'nickName' => 'nick_name',
            'deployType' => 'deploy_type',
            'createdTime' => 'created_time',
            'instanceCount' => 'instance_count',
            'createdBy' => 'created_by',
            'permission' => 'permission'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  环境id
    * name  环境名称
    * description  环境描述
    * os  操作系统
    * nickName  用户昵称
    * deployType  部署类型：0表示主机, 1表示kubernetes
    * createdTime  创建时间
    * instanceCount  环境下主机实例数量
    * createdBy  createdBy
    * permission  permission
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'os' => 'setOs',
            'nickName' => 'setNickName',
            'deployType' => 'setDeployType',
            'createdTime' => 'setCreatedTime',
            'instanceCount' => 'setInstanceCount',
            'createdBy' => 'setCreatedBy',
            'permission' => 'setPermission'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  环境id
    * name  环境名称
    * description  环境描述
    * os  操作系统
    * nickName  用户昵称
    * deployType  部署类型：0表示主机, 1表示kubernetes
    * createdTime  创建时间
    * instanceCount  环境下主机实例数量
    * createdBy  createdBy
    * permission  permission
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'os' => 'getOs',
            'nickName' => 'getNickName',
            'deployType' => 'getDeployType',
            'createdTime' => 'getCreatedTime',
            'instanceCount' => 'getInstanceCount',
            'createdBy' => 'getCreatedBy',
            'permission' => 'getPermission'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['instanceCount'] = isset($data['instanceCount']) ? $data['instanceCount'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
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
    *  环境id
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
    * @param string|null $id 环境id
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
    *  环境名称
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
    * @param string|null $name 环境名称
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
    *  环境描述
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
    * @param string|null $description 环境描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets os
    *  操作系统
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets deployType
    *  部署类型：0表示主机, 1表示kubernetes
    *
    * @return int|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param int|null $deployType 部署类型：0表示主机, 1表示kubernetes
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets instanceCount
    *  环境下主机实例数量
    *
    * @return int|null
    */
    public function getInstanceCount()
    {
        return $this->container['instanceCount'];
    }

    /**
    * Sets instanceCount
    *
    * @param int|null $instanceCount 环境下主机实例数量
    *
    * @return $this
    */
    public function setInstanceCount($instanceCount)
    {
        $this->container['instanceCount'] = $instanceCount;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentPermissionDetail|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentPermissionDetail|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
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

