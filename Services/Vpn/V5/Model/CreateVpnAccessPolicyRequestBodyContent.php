<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnAccessPolicyRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnAccessPolicyRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  访问策略名称
    * userGroupId  关联用户组ID
    * description  访问策略描述
    * destIpCidrs  目的IP网段列表，至少有一个网段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'userGroupId' => 'string',
            'description' => 'string',
            'destIpCidrs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  访问策略名称
    * userGroupId  关联用户组ID
    * description  访问策略描述
    * destIpCidrs  目的IP网段列表，至少有一个网段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'userGroupId' => null,
        'description' => null,
        'destIpCidrs' => null
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
    * name  访问策略名称
    * userGroupId  关联用户组ID
    * description  访问策略描述
    * destIpCidrs  目的IP网段列表，至少有一个网段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'userGroupId' => 'user_group_id',
            'description' => 'description',
            'destIpCidrs' => 'dest_ip_cidrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  访问策略名称
    * userGroupId  关联用户组ID
    * description  访问策略描述
    * destIpCidrs  目的IP网段列表，至少有一个网段
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'userGroupId' => 'setUserGroupId',
            'description' => 'setDescription',
            'destIpCidrs' => 'setDestIpCidrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  访问策略名称
    * userGroupId  关联用户组ID
    * description  访问策略描述
    * destIpCidrs  目的IP网段列表，至少有一个网段
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'userGroupId' => 'getUserGroupId',
            'description' => 'getDescription',
            'destIpCidrs' => 'getDestIpCidrs'
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
        $this->container['userGroupId'] = isset($data['userGroupId']) ? $data['userGroupId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destIpCidrs'] = isset($data['destIpCidrs']) ? $data['destIpCidrs'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[一-龥A-Za-z0-9_-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥A-Za-z0-9_-]+/.";
            }
        if ($this->container['userGroupId'] === null) {
            $invalidProperties[] = "'userGroupId' can't be null";
        }
            if ((mb_strlen($this->container['userGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['userGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['userGroupId'])) {
                $invalidProperties[] = "invalid value for 'userGroupId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
        if ($this->container['destIpCidrs'] === null) {
            $invalidProperties[] = "'destIpCidrs' can't be null";
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
    *  访问策略名称
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
    * @param string $name 访问策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userGroupId
    *  关联用户组ID
    *
    * @return string
    */
    public function getUserGroupId()
    {
        return $this->container['userGroupId'];
    }

    /**
    * Sets userGroupId
    *
    * @param string $userGroupId 关联用户组ID
    *
    * @return $this
    */
    public function setUserGroupId($userGroupId)
    {
        $this->container['userGroupId'] = $userGroupId;
        return $this;
    }

    /**
    * Gets description
    *  访问策略描述
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
    * @param string|null $description 访问策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets destIpCidrs
    *  目的IP网段列表，至少有一个网段
    *
    * @return string[]
    */
    public function getDestIpCidrs()
    {
        return $this->container['destIpCidrs'];
    }

    /**
    * Sets destIpCidrs
    *
    * @param string[] $destIpCidrs 目的IP网段列表，至少有一个网段
    *
    * @return $this
    */
    public function setDestIpCidrs($destIpCidrs)
    {
        $this->container['destIpCidrs'] = $destIpCidrs;
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

