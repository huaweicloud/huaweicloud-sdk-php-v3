<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  权限uuid
    * permission  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    * permissionType  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    * createdAt  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'permission' => 'string',
            'permissionType' => 'string',
            'createdAt' => 'string',
            'protected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  权限uuid
    * permission  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    * permissionType  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    * createdAt  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'permission' => null,
        'permissionType' => null,
        'createdAt' => null,
        'protected' => null
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
    * id  权限uuid
    * permission  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    * permissionType  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    * createdAt  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'permission' => 'permission',
            'permissionType' => 'permission_type',
            'createdAt' => 'created_at',
            'protected' => 'protected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  权限uuid
    * permission  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    * permissionType  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    * createdAt  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'permission' => 'setPermission',
            'permissionType' => 'setPermissionType',
            'createdAt' => 'setCreatedAt',
            'protected' => 'setProtected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  权限uuid
    * permission  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    * permissionType  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    * createdAt  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'permission' => 'getPermission',
            'permissionType' => 'getPermissionType',
            'createdAt' => 'getCreatedAt',
            'protected' => 'getProtected'
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
    const PERMISSION_TYPE_DOMAIN_ID = 'domainId';
    const PERMISSION_TYPE_ORG_PATH = 'orgPath';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionTypeAllowableValues()
    {
        return [
            self::PERMISSION_TYPE_DOMAIN_ID,
            self::PERMISSION_TYPE_ORG_PATH,
        ];
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
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPermissionTypeAllowableValues();
                if (!is_null($this->container['permissionType']) && !in_array($this->container['permissionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  权限uuid
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
    * @param string|null $id 权限uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets permission
    *  权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限内容。权限格式为： - iam:domain::domain_id。其中：\"iam:domain::\"为固定格式，\"domain_id\"为可连接用户的账号ID。domain_id类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\"或者\"*\"，最大长度可以传64。 - iam:domainName::domain_name_reg。其中：\"iam:domainName::\"为固定格式，\"domain_name_reg\"为可连接用户的账号名。domain_name_reg类型支持输入包括\"a~z\"、\"A~Z\"、\"0~9\", \"_+*.-?{},\"，最大长度可以传80。 - organizations:orgPath::org_path。其中: \"organizations:orgPath::\"为固定格式，org_path为可连接用户的组织路径。 org_path类型支持\"a~z\"、\"A~Z\"、\"0~9\"、\"/-?\"或者\"*\"，最大长度可以传1024。 - \"*\" (表示所有终端节点可连接)  示例： - iam:domain::6e9dfd51d1124e8d8498dce894923a0dd - iam:domainName::op_svc_vpcep.* - organizations:orgPath::o-3j59d1231uprgk9yuvlidra7zbzfi578/r-rldbu1vmxdw5ahdkknxnvd5rgag77m2z/ou-7tuddd8nh99rebxltawsm6qct5z7rklv/_* - \"*\" (表示所有终端节点可连接)
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets permissionType
    *  权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 权限类型。取值范围： - domainId：基于账户ID配置终端节点服务白名单 - orgPath：基于账户所在组织路径配置终端节点服务白名单
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
        return $this;
    }

    /**
    * Gets createdAt
    *  白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 白名单的添加时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets protected
    *  是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 是否为保护内网访问白名单；如果为true则不允许添加或者移除
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
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

