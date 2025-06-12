<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGroupReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGroupReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalId  外部标识符
    * displayName  包含用户组显示名称的字符串
    * members  用户组中的成员对象列表
    * schemas  概要
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalId' => 'string',
            'displayName' => 'string',
            'members' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MemberItemDto[]',
            'schemas' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalId  外部标识符
    * displayName  包含用户组显示名称的字符串
    * members  用户组中的成员对象列表
    * schemas  概要
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalId' => null,
        'displayName' => null,
        'members' => null,
        'schemas' => null
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
    * externalId  外部标识符
    * displayName  包含用户组显示名称的字符串
    * members  用户组中的成员对象列表
    * schemas  概要
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalId' => 'externalId',
            'displayName' => 'displayName',
            'members' => 'members',
            'schemas' => 'schemas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalId  外部标识符
    * displayName  包含用户组显示名称的字符串
    * members  用户组中的成员对象列表
    * schemas  概要
    *
    * @var string[]
    */
    protected static $setters = [
            'externalId' => 'setExternalId',
            'displayName' => 'setDisplayName',
            'members' => 'setMembers',
            'schemas' => 'setSchemas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalId  外部标识符
    * displayName  包含用户组显示名称的字符串
    * members  用户组中的成员对象列表
    * schemas  概要
    *
    * @var string[]
    */
    protected static $getters = [
            'externalId' => 'getExternalId',
            'displayName' => 'getDisplayName',
            'members' => 'getMembers',
            'schemas' => 'getSchemas'
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
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['schemas'] === null) {
            $invalidProperties[] = "'schemas' can't be null";
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
    * Gets externalId
    *  外部标识符
    *
    * @return string|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string|null $externalId 外部标识符
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets displayName
    *  包含用户组显示名称的字符串
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 包含用户组显示名称的字符串
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets members
    *  用户组中的成员对象列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MemberItemDto[]|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MemberItemDto[]|null $members 用户组中的成员对象列表
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets schemas
    *  概要
    *
    * @return string[]
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[] $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
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

