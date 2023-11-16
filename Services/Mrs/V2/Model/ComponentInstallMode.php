<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentInstallMode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentInstallMode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * component  组件名称
    * nodeGroups  该组件的角色部署信息
    * componentUserPassword  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * componentDefaultPassword  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'component' => 'string',
            'nodeGroups' => '\HuaweiCloud\SDK\Mrs\V2\Model\AssignedNodeGroup[]',
            'componentUserPassword' => 'string',
            'componentDefaultPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * component  组件名称
    * nodeGroups  该组件的角色部署信息
    * componentUserPassword  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * componentDefaultPassword  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'component' => null,
        'nodeGroups' => null,
        'componentUserPassword' => null,
        'componentDefaultPassword' => null
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
    * component  组件名称
    * nodeGroups  该组件的角色部署信息
    * componentUserPassword  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * componentDefaultPassword  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'component' => 'component',
            'nodeGroups' => 'node_groups',
            'componentUserPassword' => 'component_user_password',
            'componentDefaultPassword' => 'component_default_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * component  组件名称
    * nodeGroups  该组件的角色部署信息
    * componentUserPassword  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * componentDefaultPassword  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @var string[]
    */
    protected static $setters = [
            'component' => 'setComponent',
            'nodeGroups' => 'setNodeGroups',
            'componentUserPassword' => 'setComponentUserPassword',
            'componentDefaultPassword' => 'setComponentDefaultPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * component  组件名称
    * nodeGroups  该组件的角色部署信息
    * componentUserPassword  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * componentDefaultPassword  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @var string[]
    */
    protected static $getters = [
            'component' => 'getComponent',
            'nodeGroups' => 'getNodeGroups',
            'componentUserPassword' => 'getComponentUserPassword',
            'componentDefaultPassword' => 'getComponentDefaultPassword'
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
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        $this->container['nodeGroups'] = isset($data['nodeGroups']) ? $data['nodeGroups'] : null;
        $this->container['componentUserPassword'] = isset($data['componentUserPassword']) ? $data['componentUserPassword'] : null;
        $this->container['componentDefaultPassword'] = isset($data['componentDefaultPassword']) ? $data['componentDefaultPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['component'] === null) {
            $invalidProperties[] = "'component' can't be null";
        }
            if ((mb_strlen($this->container['component']) > 64)) {
                $invalidProperties[] = "invalid value for 'component', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['component']) < 1)) {
                $invalidProperties[] = "invalid value for 'component', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['component'])) {
                $invalidProperties[] = "invalid value for 'component', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
        if ($this->container['nodeGroups'] === null) {
            $invalidProperties[] = "'nodeGroups' can't be null";
        }
            if (!is_null($this->container['componentUserPassword']) && (mb_strlen($this->container['componentUserPassword']) > 26)) {
                $invalidProperties[] = "invalid value for 'componentUserPassword', the character length must be smaller than or equal to 26.";
            }
            if (!is_null($this->container['componentUserPassword']) && (mb_strlen($this->container['componentUserPassword']) < 8)) {
                $invalidProperties[] = "invalid value for 'componentUserPassword', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['componentDefaultPassword']) && (mb_strlen($this->container['componentDefaultPassword']) > 26)) {
                $invalidProperties[] = "invalid value for 'componentDefaultPassword', the character length must be smaller than or equal to 26.";
            }
            if (!is_null($this->container['componentDefaultPassword']) && (mb_strlen($this->container['componentDefaultPassword']) < 8)) {
                $invalidProperties[] = "invalid value for 'componentDefaultPassword', the character length must be bigger than or equal to 8.";
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
    * Gets component
    *  组件名称
    *
    * @return string
    */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
    * Sets component
    *
    * @param string $component 组件名称
    *
    * @return $this
    */
    public function setComponent($component)
    {
        $this->container['component'] = $component;
        return $this;
    }

    /**
    * Gets nodeGroups
    *  该组件的角色部署信息
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\AssignedNodeGroup[]
    */
    public function getNodeGroups()
    {
        return $this->container['nodeGroups'];
    }

    /**
    * Sets nodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\AssignedNodeGroup[] $nodeGroups 该组件的角色部署信息
    *
    * @return $this
    */
    public function setNodeGroups($nodeGroups)
    {
        $this->container['nodeGroups'] = $nodeGroups;
        return $this;
    }

    /**
    * Gets componentUserPassword
    *  配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return string|null
    */
    public function getComponentUserPassword()
    {
        return $this->container['componentUserPassword'];
    }

    /**
    * Sets componentUserPassword
    *
    * @param string|null $componentUserPassword 配置组件用户密码，该密码用于ClickHouse组件机机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return $this
    */
    public function setComponentUserPassword($componentUserPassword)
    {
        $this->container['componentUserPassword'] = $componentUserPassword;
        return $this;
    }

    /**
    * Gets componentDefaultPassword
    *  配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return string|null
    */
    public function getComponentDefaultPassword()
    {
        return $this->container['componentDefaultPassword'];
    }

    /**
    * Sets componentDefaultPassword
    *
    * @param string|null $componentDefaultPassword 配置组件default用户密码，该密码用于ClickHouse组件人机用户连接使用。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合 - 至少一个小写字母 - 至少一个大写字母 - 至少一个数字 - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return $this
    */
    public function setComponentDefaultPassword($componentDefaultPassword)
    {
        $this->container['componentDefaultPassword'] = $componentDefaultPassword;
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

