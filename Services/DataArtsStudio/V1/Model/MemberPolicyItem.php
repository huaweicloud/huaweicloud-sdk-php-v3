<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberPolicyItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberPolicyItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * memberId  成员id
    * memberName  成员名称
    * memberType  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'memberId' => 'string',
            'memberName' => 'string',
            'memberType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * memberId  成员id
    * memberName  成员名称
    * memberType  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'memberId' => null,
        'memberName' => null,
        'memberType' => null
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
    * memberId  成员id
    * memberName  成员名称
    * memberType  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'memberId' => 'member_id',
            'memberName' => 'member_name',
            'memberType' => 'member_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * memberId  成员id
    * memberName  成员名称
    * memberType  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @var string[]
    */
    protected static $setters = [
            'memberId' => 'setMemberId',
            'memberName' => 'setMemberName',
            'memberType' => 'setMemberType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * memberId  成员id
    * memberName  成员名称
    * memberType  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @var string[]
    */
    protected static $getters = [
            'memberId' => 'getMemberId',
            'memberName' => 'getMemberName',
            'memberType' => 'getMemberType'
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
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['memberId'] === null) {
            $invalidProperties[] = "'memberId' can't be null";
        }
            if ((mb_strlen($this->container['memberId']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['memberId']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['memberName'] === null) {
            $invalidProperties[] = "'memberName' can't be null";
        }
            if ((mb_strlen($this->container['memberName']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMemberTypeAllowableValues();
                if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
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
    * Gets memberId
    *  成员id
    *
    * @return string
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string $memberId 成员id
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
    * @return string
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets memberType
    *  成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
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
    * @param string|null $memberType 成员类型:USER,USER_GROUP,WORKSPACE_ROLE，分别代表空间用户、空间用户组、空间角色
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
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

