<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetGroupMembershipIdReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetGroupMembershipIdReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    * memberId  memberId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'memberId' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\MemberIdDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    * memberId  memberId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'memberId' => null
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
    * groupId  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    * memberId  memberId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'memberId' => 'member_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    * memberId  memberId
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'memberId' => 'setMemberId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    * memberId  memberId
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'memberId' => 'getMemberId'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 47)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 47.";
            }
            if ((mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/.";
            }
        if ($this->container['memberId'] === null) {
            $invalidProperties[] = "'memberId' can't be null";
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
    * Gets groupId
    *  身份源中IdentityCenter用户组的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 身份源中IdentityCenter用户组的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets memberId
    *  memberId
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\MemberIdDto
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\MemberIdDto $memberId memberId
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
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

