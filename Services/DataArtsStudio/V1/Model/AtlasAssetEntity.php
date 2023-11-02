<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtlasAssetEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtlasAssetEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * typeName  类型名称
    * guid  guid
    * version  版本
    * updateTime  修改时间
    * updateUser  修改人
    * createTime  创建时间
    * createUser  创建人
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classifications  分类信息
    * meanings  关联任务
    * relationShipAttributes  实体map Map<String, Object>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'typeName' => 'string',
            'guid' => 'string',
            'version' => 'int',
            'updateTime' => 'float',
            'updateUser' => 'string',
            'createTime' => 'float',
            'createUser' => 'string',
            'displayText' => 'string',
            'status' => 'string',
            'classifications' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasClassificationInfo[]',
            'meanings' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TermAssignmentHeader[]',
            'relationShipAttributes' => 'object',
            'attributes' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * typeName  类型名称
    * guid  guid
    * version  版本
    * updateTime  修改时间
    * updateUser  修改人
    * createTime  创建时间
    * createUser  创建人
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classifications  分类信息
    * meanings  关联任务
    * relationShipAttributes  实体map Map<String, Object>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'typeName' => null,
        'guid' => null,
        'version' => null,
        'updateTime' => null,
        'updateUser' => null,
        'createTime' => null,
        'createUser' => null,
        'displayText' => null,
        'status' => null,
        'classifications' => null,
        'meanings' => null,
        'relationShipAttributes' => null,
        'attributes' => null
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
    * typeName  类型名称
    * guid  guid
    * version  版本
    * updateTime  修改时间
    * updateUser  修改人
    * createTime  创建时间
    * createUser  创建人
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classifications  分类信息
    * meanings  关联任务
    * relationShipAttributes  实体map Map<String, Object>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'typeName' => 'type_name',
            'guid' => 'guid',
            'version' => 'version',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'displayText' => 'display_text',
            'status' => 'status',
            'classifications' => 'classifications',
            'meanings' => 'meanings',
            'relationShipAttributes' => 'relation_ship_attributes',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * typeName  类型名称
    * guid  guid
    * version  版本
    * updateTime  修改时间
    * updateUser  修改人
    * createTime  创建时间
    * createUser  创建人
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classifications  分类信息
    * meanings  关联任务
    * relationShipAttributes  实体map Map<String, Object>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $setters = [
            'typeName' => 'setTypeName',
            'guid' => 'setGuid',
            'version' => 'setVersion',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'displayText' => 'setDisplayText',
            'status' => 'setStatus',
            'classifications' => 'setClassifications',
            'meanings' => 'setMeanings',
            'relationShipAttributes' => 'setRelationShipAttributes',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * typeName  类型名称
    * guid  guid
    * version  版本
    * updateTime  修改时间
    * updateUser  修改人
    * createTime  创建时间
    * createUser  创建人
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classifications  分类信息
    * meanings  关联任务
    * relationShipAttributes  实体map Map<String, Object>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $getters = [
            'typeName' => 'getTypeName',
            'guid' => 'getGuid',
            'version' => 'getVersion',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'displayText' => 'getDisplayText',
            'status' => 'getStatus',
            'classifications' => 'getClassifications',
            'meanings' => 'getMeanings',
            'relationShipAttributes' => 'getRelationShipAttributes',
            'attributes' => 'getAttributes'
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
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['meanings'] = isset($data['meanings']) ? $data['meanings'] : null;
        $this->container['relationShipAttributes'] = isset($data['relationShipAttributes']) ? $data['relationShipAttributes'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['typeName'] === null) {
            $invalidProperties[] = "'typeName' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
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
    * Gets typeName
    *  类型名称
    *
    * @return string
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string $typeName 类型名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets guid
    *  guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return float|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param float|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  修改人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 修改人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return float|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param float|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets displayText
    *  展示
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 展示
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets status
    *  状态 枚举值：ACTIVE、DELETED
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态 枚举值：ACTIVE、DELETED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets classifications
    *  分类信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasClassificationInfo[]|null
    */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
    * Sets classifications
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasClassificationInfo[]|null $classifications 分类信息
    *
    * @return $this
    */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;
        return $this;
    }

    /**
    * Gets meanings
    *  关联任务
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TermAssignmentHeader[]|null
    */
    public function getMeanings()
    {
        return $this->container['meanings'];
    }

    /**
    * Sets meanings
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TermAssignmentHeader[]|null $meanings 关联任务
    *
    * @return $this
    */
    public function setMeanings($meanings)
    {
        $this->container['meanings'] = $meanings;
        return $this;
    }

    /**
    * Gets relationShipAttributes
    *  实体map Map<String, Object>
    *
    * @return object|null
    */
    public function getRelationShipAttributes()
    {
        return $this->container['relationShipAttributes'];
    }

    /**
    * Sets relationShipAttributes
    *
    * @param object|null $relationShipAttributes 实体map Map<String, Object>
    *
    * @return $this
    */
    public function setRelationShipAttributes($relationShipAttributes)
    {
        $this->container['relationShipAttributes'] = $relationShipAttributes;
        return $this;
    }

    /**
    * Gets attributes
    *  实体map Map<String, Object>
    *
    * @return object
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object $attributes 实体map Map<String, Object>
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

