<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnUserRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnUserRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupId  所属用户组ID
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'password' => 'string',
            'description' => 'string',
            'userGroupId' => 'string',
            'staticIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupId  所属用户组ID
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'password' => null,
        'description' => null,
        'userGroupId' => null,
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
    * userGroupId  所属用户组ID
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'password' => 'password',
            'description' => 'description',
            'userGroupId' => 'user_group_id',
            'staticIp' => 'static_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupId  所属用户组ID
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'password' => 'setPassword',
            'description' => 'setDescription',
            'userGroupId' => 'setUserGroupId',
            'staticIp' => 'setStaticIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  用户名
    * password  用户密码
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupId  所属用户组ID
    * staticIp  静态客户端IP地址，默认值disable，表示随机分配客户端IP
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'password' => 'getPassword',
            'description' => 'getDescription',
            'userGroupId' => 'getUserGroupId',
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
        $this->container['userGroupId'] = isset($data['userGroupId']) ? $data['userGroupId'] : null;
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
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/[A-Za-z0-9@._-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[A-Za-z0-9@._-]+/.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 32)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['password']) < 8)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>\\\\&\"']*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>\\\\&\"']*$/.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['userGroupId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['userGroupId'])) {
                $invalidProperties[] = "invalid value for 'userGroupId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['staticIp']) && (mb_strlen($this->container['staticIp']) > 18)) {
                $invalidProperties[] = "invalid value for 'staticIp', the character length must be smaller than or equal to 18.";
            }
            if (!is_null($this->container['staticIp']) && (mb_strlen($this->container['staticIp']) < 7)) {
                $invalidProperties[] = "invalid value for 'staticIp', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['staticIp']) && !preg_match("/^(((25[0-5]|(2[0-4]|1\\d|[1-9]|)\\d)\\.?\\b){4}|disable)$/", $this->container['staticIp'])) {
                $invalidProperties[] = "invalid value for 'staticIp', must be conform to the pattern /^(((25[0-5]|(2[0-4]|1\\d|[1-9]|)\\d)\\.?\\b){4}|disable)$/.";
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
    * Gets userGroupId
    *  所属用户组ID
    *
    * @return string|null
    */
    public function getUserGroupId()
    {
        return $this->container['userGroupId'];
    }

    /**
    * Sets userGroupId
    *
    * @param string|null $userGroupId 所属用户组ID
    *
    * @return $this
    */
    public function setUserGroupId($userGroupId)
    {
        $this->container['userGroupId'] = $userGroupId;
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

