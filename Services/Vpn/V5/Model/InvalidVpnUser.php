<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvalidVpnUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvalidVpnUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  用户名
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * cause  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'userGroupName' => 'string',
            'cause' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  用户名
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * cause  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'userGroupName' => null,
        'cause' => null
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
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * cause  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'userGroupName' => 'user_group_name',
            'cause' => 'cause'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  用户名
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * cause  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'userGroupName' => 'setUserGroupName',
            'cause' => 'setCause'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  用户名
    * description  用户描述，0-64字符，中文、英文、数字包含下划线
    * userGroupName  所属用户组名称
    * cause  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'userGroupName' => 'getUserGroupName',
            'cause' => 'getCause'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['cause'] = isset($data['cause']) ? $data['cause'] : null;
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
    * Gets name
    *  用户名
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
    * @param string|null $name 用户名
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
    * Gets cause
    *  失败原因
    *
    * @return string|null
    */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
    * Sets cause
    *
    * @param string|null $cause 失败原因
    *
    * @return $this
    */
    public function setCause($cause)
    {
        $this->container['cause'] = $cause;
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

