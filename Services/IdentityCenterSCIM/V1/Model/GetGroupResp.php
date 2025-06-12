<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetGroupResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetGroupResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户组的全局唯一标识符（ID）
    * externalId  外部标识符
    * meta  meta
    * schemas  概要
    * displayName  包含用户显示名称的字符串
    * members  用户组中的成员对象列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'externalId' => 'string',
            'meta' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MetaDto',
            'schemas' => 'string[]',
            'displayName' => 'string',
            'members' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MemberItemDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户组的全局唯一标识符（ID）
    * externalId  外部标识符
    * meta  meta
    * schemas  概要
    * displayName  包含用户显示名称的字符串
    * members  用户组中的成员对象列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'externalId' => null,
        'meta' => null,
        'schemas' => null,
        'displayName' => null,
        'members' => null
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
    * id  用户组的全局唯一标识符（ID）
    * externalId  外部标识符
    * meta  meta
    * schemas  概要
    * displayName  包含用户显示名称的字符串
    * members  用户组中的成员对象列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'externalId' => 'externalId',
            'meta' => 'meta',
            'schemas' => 'schemas',
            'displayName' => 'displayName',
            'members' => 'members'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户组的全局唯一标识符（ID）
    * externalId  外部标识符
    * meta  meta
    * schemas  概要
    * displayName  包含用户显示名称的字符串
    * members  用户组中的成员对象列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'externalId' => 'setExternalId',
            'meta' => 'setMeta',
            'schemas' => 'setSchemas',
            'displayName' => 'setDisplayName',
            'members' => 'setMembers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户组的全局唯一标识符（ID）
    * externalId  外部标识符
    * meta  meta
    * schemas  概要
    * displayName  包含用户显示名称的字符串
    * members  用户组中的成员对象列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'externalId' => 'getExternalId',
            'meta' => 'getMeta',
            'schemas' => 'getSchemas',
            'displayName' => 'getDisplayName',
            'members' => 'getMembers'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  用户组的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 用户组的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets meta
    *  meta
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MetaDto|null
    */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
    * Sets meta
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\MetaDto|null $meta meta
    *
    * @return $this
    */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;
        return $this;
    }

    /**
    * Gets schemas
    *  概要
    *
    * @return string[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[]|null $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets displayName
    *  包含用户显示名称的字符串
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 包含用户显示名称的字符串
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

