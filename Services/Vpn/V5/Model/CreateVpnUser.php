<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'password' => 'string',
            'description' => 'string',
            'userGroupName' => 'string',
            'staticIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'password' => null,
        'description' => null,
        'userGroupName' => null,
        'staticIp' => null
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
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'password' => 'password',
            'description' => 'description',
            'userGroupName' => 'user_group_name',
            'staticIp' => 'static_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'password' => 'setPassword',
            'description' => 'setDescription',
            'userGroupName' => 'setUserGroupName',
            'staticIp' => 'setStaticIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'password' => 'getPassword',
            'description' => 'getDescription',
            'userGroupName' => 'getUserGroupName',
            'staticIp' => 'getStaticIp'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['staticIp'] = isset($data['staticIp']) ? $data['staticIp'] : null;
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
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
    *  用户名
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
    * @param string $name 用户名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets password
    *  用户密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 用户密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets description
    *  用户描述，0-64字符，中文、英文、数字包含下划线
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
    * @param string|null $description 用户描述，0-64字符，中文、英文、数字包含下划线
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets userGroupName
    *  所属用户组名称
    *
    * @return string|null
    */
    public function getUserGroupName()
    {
        return $this->container['userGroupName'];
    }

    /**
    * Sets userGroupName
    *
    * @param string|null $userGroupName 所属用户组名称
    *
    * @return $this
    */
    public function setUserGroupName($userGroupName)
    {
        $this->container['userGroupName'] = $userGroupName;
        return $this;
    }

    /**
    * Gets staticIp
    *  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @return string|null
    */
    public function getStaticIp()
    {
        return $this->container['staticIp'];
    }

    /**
    * Sets staticIp
    *
    * @param string|null $staticIp 静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @return $this
    */
    public function setStaticIp($staticIp)
    {
        $this->container['staticIp'] = $staticIp;
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

