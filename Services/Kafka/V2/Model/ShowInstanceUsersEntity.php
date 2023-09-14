<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceUsersEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceUsersEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * userDesc  用户描述。
    * role  用户角色。
    * defaultApp  是否为默认应用。
    * createdTime  创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'userDesc' => 'string',
            'role' => 'string',
            'defaultApp' => 'bool',
            'createdTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * userDesc  用户描述。
    * role  用户角色。
    * defaultApp  是否为默认应用。
    * createdTime  创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'userDesc' => null,
        'role' => null,
        'defaultApp' => null,
        'createdTime' => 'int64'
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
    * userName  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * userDesc  用户描述。
    * role  用户角色。
    * defaultApp  是否为默认应用。
    * createdTime  创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'userDesc' => 'user_desc',
            'role' => 'role',
            'defaultApp' => 'default_app',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * userDesc  用户描述。
    * role  用户角色。
    * defaultApp  是否为默认应用。
    * createdTime  创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'userDesc' => 'setUserDesc',
            'role' => 'setRole',
            'defaultApp' => 'setDefaultApp',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * userDesc  用户描述。
    * role  用户角色。
    * defaultApp  是否为默认应用。
    * createdTime  创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'userDesc' => 'getUserDesc',
            'role' => 'getRole',
            'defaultApp' => 'getDefaultApp',
            'createdTime' => 'getCreatedTime'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userDesc'] = isset($data['userDesc']) ? $data['userDesc'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['defaultApp'] = isset($data['defaultApp']) ? $data['defaultApp'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
    * Gets userName
    *  用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
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
    * @param string|null $userName 用户名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userDesc
    *  用户描述。
    *
    * @return string|null
    */
    public function getUserDesc()
    {
        return $this->container['userDesc'];
    }

    /**
    * Sets userDesc
    *
    * @param string|null $userDesc 用户描述。
    *
    * @return $this
    */
    public function setUserDesc($userDesc)
    {
        $this->container['userDesc'] = $userDesc;
        return $this;
    }

    /**
    * Gets role
    *  用户角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 用户角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets defaultApp
    *  是否为默认应用。
    *
    * @return bool|null
    */
    public function getDefaultApp()
    {
        return $this->container['defaultApp'];
    }

    /**
    * Sets defaultApp
    *
    * @param bool|null $defaultApp 是否为默认应用。
    *
    * @return $this
    */
    public function setDefaultApp($defaultApp)
    {
        $this->container['defaultApp'] = $defaultApp;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

