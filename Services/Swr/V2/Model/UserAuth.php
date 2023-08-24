<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserAuth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户id，需要从IAM服务获取
    * userName  用户名，需要从IAM服务获取
    * auth  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userName' => 'string',
            'auth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户id，需要从IAM服务获取
    * userName  用户名，需要从IAM服务获取
    * auth  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userName' => null,
        'auth' => 'int64'
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
    * userId  用户id，需要从IAM服务获取
    * userName  用户名，需要从IAM服务获取
    * auth  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userName' => 'user_name',
            'auth' => 'auth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户id，需要从IAM服务获取
    * userName  用户名，需要从IAM服务获取
    * auth  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'auth' => 'setAuth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户id，需要从IAM服务获取
    * userName  用户名，需要从IAM服务获取
    * auth  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'auth' => 'getAuth'
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
    const AUTH_7 = 7;
    const AUTH_3 = 3;
    const AUTH_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthAllowableValues()
    {
        return [
            self::AUTH_7,
            self::AUTH_3,
            self::AUTH_1,
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['auth'] === null) {
            $invalidProperties[] = "'auth' can't be null";
        }
            $allowedValues = $this->getAuthAllowableValues();
                if (!is_null($this->container['auth']) && !in_array($this->container['auth'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'auth', must be one of '%s'",
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
    * Gets userId
    *  用户id，需要从IAM服务获取
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户id，需要从IAM服务获取
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名，需要从IAM服务获取
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名，需要从IAM服务获取
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets auth
    *  用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @return int
    */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
    * Sets auth
    *
    * @param int $auth 用户权限，7表示管理权限，3表示编辑权限，1表示读取权限
    *
    * @return $this
    */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;
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

