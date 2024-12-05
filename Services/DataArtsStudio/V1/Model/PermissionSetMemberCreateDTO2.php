<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionSetMemberCreateDTO2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionSetMemberCreateDTO2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * memberType  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    * memberId  成员id
    * memberName  成员名称
    * workspace  工作空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'memberType' => 'string',
            'memberId' => 'string',
            'memberName' => 'string',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * memberType  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    * memberId  成员id
    * memberName  成员名称
    * workspace  工作空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'memberType' => null,
        'memberId' => null,
        'memberName' => null,
        'workspace' => null
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
    * memberType  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    * memberId  成员id
    * memberName  成员名称
    * workspace  工作空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'memberType' => 'member_type',
            'memberId' => 'member_id',
            'memberName' => 'member_name',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * memberType  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    * memberId  成员id
    * memberName  成员名称
    * workspace  工作空间
    *
    * @var string[]
    */
    protected static $setters = [
            'memberType' => 'setMemberType',
            'memberId' => 'setMemberId',
            'memberName' => 'setMemberName',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * memberType  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    * memberId  成员id
    * memberName  成员名称
    * workspace  工作空间
    *
    * @var string[]
    */
    protected static $getters = [
            'memberType' => 'getMemberType',
            'memberId' => 'getMemberId',
            'memberName' => 'getMemberName',
            'workspace' => 'getWorkspace'
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
    const MEMBER_TYPE_USER = 'USER';
    const MEMBER_TYPE_USER_GROUP = 'USER_GROUP';
    const MEMBER_TYPE_WORKSPACE_ROLE = 'WORKSPACE_ROLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberTypeAllowableValues()
    {
        return [
            self::MEMBER_TYPE_USER,
            self::MEMBER_TYPE_USER_GROUP,
            self::MEMBER_TYPE_WORKSPACE_ROLE,
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
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMemberTypeAllowableValues();
                if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
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
    * Gets memberType
    *  成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    *
    * @return string|null
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string|null $memberType 成员类型, 用户/用户组/工作空间角色, USER, USER_GROUP, WORKSPACE_ROLE
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets memberId
    *  成员id
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 成员id
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets memberName
    *  成员名称
    *
    * @return string|null
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string|null $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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

