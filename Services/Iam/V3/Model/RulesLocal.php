<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RulesLocal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RulesLocal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  user
    * group  group
    * groups  联邦用户在本系统中所属用户组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => '\HuaweiCloud\SDK\Iam\V3\Model\RulesLocalUser',
            'group' => '\HuaweiCloud\SDK\Iam\V3\Model\RulesLocalGroup',
            'groups' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  user
    * group  group
    * groups  联邦用户在本系统中所属用户组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'group' => null,
        'groups' => null
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
    * user  user
    * group  group
    * groups  联邦用户在本系统中所属用户组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'group' => 'group',
            'groups' => 'groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  user
    * group  group
    * groups  联邦用户在本系统中所属用户组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'group' => 'setGroup',
            'groups' => 'setGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  user
    * group  group
    * groups  联邦用户在本系统中所属用户组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'group' => 'getGroup',
            'groups' => 'getGroups'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
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
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RulesLocalUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RulesLocalUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets group
    *  group
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RulesLocalGroup|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RulesLocalGroup|null $group group
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets groups
    *  联邦用户在本系统中所属用户组列表
    *
    * @return string|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param string|null $groups 联邦用户在本系统中所属用户组列表
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
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

