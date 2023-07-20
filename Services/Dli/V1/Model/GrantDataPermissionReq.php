<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantDataPermissionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantDataPermissionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    * action  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    * privileges  赋权信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'action' => 'string',
            'privileges' => '\HuaweiCloud\SDK\Dli\V1\Model\GrantDataPermissionRespPrivilege[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    * action  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    * privileges  赋权信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'action' => null,
        'privileges' => null
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
    * userName  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    * action  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    * privileges  赋权信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'action' => 'action',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    * action  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    * privileges  赋权信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'action' => 'setAction',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    * action  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    * privileges  赋权信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'action' => 'getAction',
            'privileges' => 'getPrivileges'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['privileges'] === null) {
            $invalidProperties[] = "'privileges' can't be null";
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
    * Gets userName
    *  被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
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
    * @param string $userName 被赋权的用户名称，该用户将有权访问指定的数据库或数据表，被收回或者更新访问权限。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets action
    *  指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 指定赋权或回收。值为：grant，revoke或update。 说明： 当用户同时拥有grant和revoke权限的时候才有权限使用update操作。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets privileges
    *  赋权信息。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\GrantDataPermissionRespPrivilege[]
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\GrantDataPermissionRespPrivilege[] $privileges 赋权信息。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

