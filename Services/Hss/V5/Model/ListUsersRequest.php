<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUsersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUsersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机ID
    * userName  账号名称
    * hostName  主机名称
    * privateIp  服务器私有IP
    * loginPermission  是否允许登录
    * rootPermission  是否有root权限
    * userGroup  主机用户组
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    * partMatch  是否模糊匹配，默认false表示精确匹配
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'userName' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'loginPermission' => 'bool',
            'rootPermission' => 'bool',
            'userGroup' => 'string',
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'category' => 'string',
            'partMatch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机ID
    * userName  账号名称
    * hostName  主机名称
    * privateIp  服务器私有IP
    * loginPermission  是否允许登录
    * rootPermission  是否有root权限
    * userGroup  主机用户组
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    * partMatch  是否模糊匹配，默认false表示精确匹配
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'userName' => null,
        'hostName' => null,
        'privateIp' => null,
        'loginPermission' => null,
        'rootPermission' => null,
        'userGroup' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'category' => null,
        'partMatch' => null
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
    * hostId  主机ID
    * userName  账号名称
    * hostName  主机名称
    * privateIp  服务器私有IP
    * loginPermission  是否允许登录
    * rootPermission  是否有root权限
    * userGroup  主机用户组
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    * partMatch  是否模糊匹配，默认false表示精确匹配
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'userName' => 'user_name',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'loginPermission' => 'login_permission',
            'rootPermission' => 'root_permission',
            'userGroup' => 'user_group',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'category' => 'category',
            'partMatch' => 'part_match'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机ID
    * userName  账号名称
    * hostName  主机名称
    * privateIp  服务器私有IP
    * loginPermission  是否允许登录
    * rootPermission  是否有root权限
    * userGroup  主机用户组
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    * partMatch  是否模糊匹配，默认false表示精确匹配
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'userName' => 'setUserName',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'loginPermission' => 'setLoginPermission',
            'rootPermission' => 'setRootPermission',
            'userGroup' => 'setUserGroup',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'category' => 'setCategory',
            'partMatch' => 'setPartMatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机ID
    * userName  账号名称
    * hostName  主机名称
    * privateIp  服务器私有IP
    * loginPermission  是否允许登录
    * rootPermission  是否有root权限
    * userGroup  主机用户组
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    * partMatch  是否模糊匹配，默认false表示精确匹配
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'userName' => 'getUserName',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'loginPermission' => 'getLoginPermission',
            'rootPermission' => 'getRootPermission',
            'userGroup' => 'getUserGroup',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'category' => 'getCategory',
            'partMatch' => 'getPartMatch'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginPermission'] = isset($data['loginPermission']) ? $data['loginPermission'] : null;
        $this->container['rootPermission'] = isset($data['rootPermission']) ? $data['rootPermission'] : null;
        $this->container['userGroup'] = isset($data['userGroup']) ? $data['userGroup'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['partMatch'] = isset($data['partMatch']) ? $data['partMatch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 32)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userGroup']) && (mb_strlen($this->container['userGroup']) > 128)) {
                $invalidProperties[] = "invalid value for 'userGroup', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userGroup']) && (mb_strlen($this->container['userGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'userGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  主机ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets userName
    *  账号名称
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
    * @param string|null $userName 账号名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  服务器私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 服务器私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets loginPermission
    *  是否允许登录
    *
    * @return bool|null
    */
    public function getLoginPermission()
    {
        return $this->container['loginPermission'];
    }

    /**
    * Sets loginPermission
    *
    * @param bool|null $loginPermission 是否允许登录
    *
    * @return $this
    */
    public function setLoginPermission($loginPermission)
    {
        $this->container['loginPermission'] = $loginPermission;
        return $this;
    }

    /**
    * Gets rootPermission
    *  是否有root权限
    *
    * @return bool|null
    */
    public function getRootPermission()
    {
        return $this->container['rootPermission'];
    }

    /**
    * Sets rootPermission
    *
    * @param bool|null $rootPermission 是否有root权限
    *
    * @return $this
    */
    public function setRootPermission($rootPermission)
    {
        $this->container['rootPermission'] = $rootPermission;
        return $this;
    }

    /**
    * Gets userGroup
    *  主机用户组
    *
    * @return string|null
    */
    public function getUserGroup()
    {
        return $this->container['userGroup'];
    }

    /**
    * Sets userGroup
    *
    * @param string|null $userGroup 主机用户组
    *
    * @return $this
    */
    public function setUserGroup($userGroup)
    {
        $this->container['userGroup'] = $userGroup;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，查询所有企业项目时填写：all_granted_eps
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
    * @param string|null $enterpriseProjectId 企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets category
    *  类别，默认为host，包含如下： - host：主机 - container：容器
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
    * @param string|null $category 类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets partMatch
    *  是否模糊匹配，默认false表示精确匹配
    *
    * @return bool|null
    */
    public function getPartMatch()
    {
        return $this->container['partMatch'];
    }

    /**
    * Sets partMatch
    *
    * @param bool|null $partMatch 是否模糊匹配，默认false表示精确匹配
    *
    * @return $this
    */
    public function setPartMatch($partMatch)
    {
        $this->container['partMatch'] = $partMatch;
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

