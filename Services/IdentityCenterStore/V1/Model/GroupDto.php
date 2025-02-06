<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  包含用户组描述的字符串
    * displayName  包含用户组显示名称的字符串
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  包含外部身份提供商颁发给此资源的标识符的对象列表
    * groupId  身份源中IAM身份中心用户组的全局唯一标识符（ID）
    * identityStoreId  身份源的全局唯一标识符（ID）
    * createdAt  创建时的时间戳
    * createdBy  创建者
    * updatedAt  更新时的时间戳
    * updatedBy  更新者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'displayName' => 'string',
            'externalId' => 'string',
            'externalIds' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]',
            'groupId' => 'string',
            'identityStoreId' => 'string',
            'createdAt' => 'int',
            'createdBy' => 'string',
            'updatedAt' => 'int',
            'updatedBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  包含用户组描述的字符串
    * displayName  包含用户组显示名称的字符串
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  包含外部身份提供商颁发给此资源的标识符的对象列表
    * groupId  身份源中IAM身份中心用户组的全局唯一标识符（ID）
    * identityStoreId  身份源的全局唯一标识符（ID）
    * createdAt  创建时的时间戳
    * createdBy  创建者
    * updatedAt  更新时的时间戳
    * updatedBy  更新者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'displayName' => null,
        'externalId' => null,
        'externalIds' => null,
        'groupId' => null,
        'identityStoreId' => null,
        'createdAt' => 'int64',
        'createdBy' => null,
        'updatedAt' => 'int64',
        'updatedBy' => null
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
    * description  包含用户组描述的字符串
    * displayName  包含用户组显示名称的字符串
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  包含外部身份提供商颁发给此资源的标识符的对象列表
    * groupId  身份源中IAM身份中心用户组的全局唯一标识符（ID）
    * identityStoreId  身份源的全局唯一标识符（ID）
    * createdAt  创建时的时间戳
    * createdBy  创建者
    * updatedAt  更新时的时间戳
    * updatedBy  更新者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'displayName' => 'display_name',
            'externalId' => 'external_id',
            'externalIds' => 'external_ids',
            'groupId' => 'group_id',
            'identityStoreId' => 'identity_store_id',
            'createdAt' => 'created_at',
            'createdBy' => 'created_by',
            'updatedAt' => 'updated_at',
            'updatedBy' => 'updated_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  包含用户组描述的字符串
    * displayName  包含用户组显示名称的字符串
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  包含外部身份提供商颁发给此资源的标识符的对象列表
    * groupId  身份源中IAM身份中心用户组的全局唯一标识符（ID）
    * identityStoreId  身份源的全局唯一标识符（ID）
    * createdAt  创建时的时间戳
    * createdBy  创建者
    * updatedAt  更新时的时间戳
    * updatedBy  更新者
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'displayName' => 'setDisplayName',
            'externalId' => 'setExternalId',
            'externalIds' => 'setExternalIds',
            'groupId' => 'setGroupId',
            'identityStoreId' => 'setIdentityStoreId',
            'createdAt' => 'setCreatedAt',
            'createdBy' => 'setCreatedBy',
            'updatedAt' => 'setUpdatedAt',
            'updatedBy' => 'setUpdatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  包含用户组描述的字符串
    * displayName  包含用户组显示名称的字符串
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  包含外部身份提供商颁发给此资源的标识符的对象列表
    * groupId  身份源中IAM身份中心用户组的全局唯一标识符（ID）
    * identityStoreId  身份源的全局唯一标识符（ID）
    * createdAt  创建时的时间戳
    * createdBy  创建者
    * updatedAt  更新时的时间戳
    * updatedBy  更新者
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'displayName' => 'getDisplayName',
            'externalId' => 'getExternalId',
            'externalIds' => 'getExternalIds',
            'groupId' => 'getGroupId',
            'identityStoreId' => 'getIdentityStoreId',
            'createdAt' => 'getCreatedAt',
            'createdBy' => 'getCreatedBy',
            'updatedAt' => 'getUpdatedAt',
            'updatedBy' => 'getUpdatedBy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['externalIds'] = isset($data['externalIds']) ? $data['externalIds'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]+/", $this->container['displayName'])) {
                $invalidProperties[] = "invalid value for 'displayName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]+/.";
            }
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
        if ($this->container['identityStoreId'] === null) {
            $invalidProperties[] = "'identityStoreId' can't be null";
        }
            if ((mb_strlen($this->container['identityStoreId']) > 36)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['identityStoreId']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['identityStoreId'])) {
                $invalidProperties[] = "invalid value for 'identityStoreId', must be conform to the pattern /d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets description
    *  包含用户组描述的字符串
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
    * @param string|null $description 包含用户组描述的字符串
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets displayName
    *  包含用户组显示名称的字符串
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
    * @param string|null $displayName 包含用户组显示名称的字符串
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets externalId
    *  外部身份源分配给此资源的标识符
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
    * @param string|null $externalId 外部身份源分配给此资源的标识符
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets externalIds
    *  包含外部身份提供商颁发给此资源的标识符的对象列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]|null
    */
    public function getExternalIds()
    {
        return $this->container['externalIds'];
    }

    /**
    * Sets externalIds
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]|null $externalIds 包含外部身份提供商颁发给此资源的标识符的对象列表
    *
    * @return $this
    */
    public function setExternalIds($externalIds)
    {
        $this->container['externalIds'] = $externalIds;
        return $this;
    }

    /**
    * Gets groupId
    *  身份源中IAM身份中心用户组的全局唯一标识符（ID）
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
    * @param string $groupId 身份源中IAM身份中心用户组的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets identityStoreId
    *  身份源的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string $identityStoreId 身份源的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时的时间戳
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt 创建时的时间戳
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建者
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时的时间戳
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 更新时的时间戳
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新者
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 更新者
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
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

