<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attributes  属性Map<String, Object>
    * connection  connection
    * createTime  创建时间
    * createdBy  创建人
    * displayText  资产的名称
    * guid  资产guid
    * relationshipAttributes  相关的属性 Map<String, Object>
    * typeName  资产类型
    * updatedBy  更新人
    * updateTime  更新时间
    * tags  标签
    * classificationNames  分类 List<String> classificationNames
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attributes' => 'object',
            'connection' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection',
            'createTime' => 'float',
            'createdBy' => 'string',
            'displayText' => 'string',
            'guid' => 'string',
            'relationshipAttributes' => 'object',
            'typeName' => 'string',
            'updatedBy' => 'string',
            'updateTime' => 'float',
            'tags' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]',
            'classificationNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attributes  属性Map<String, Object>
    * connection  connection
    * createTime  创建时间
    * createdBy  创建人
    * displayText  资产的名称
    * guid  资产guid
    * relationshipAttributes  相关的属性 Map<String, Object>
    * typeName  资产类型
    * updatedBy  更新人
    * updateTime  更新时间
    * tags  标签
    * classificationNames  分类 List<String> classificationNames
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attributes' => null,
        'connection' => null,
        'createTime' => null,
        'createdBy' => null,
        'displayText' => null,
        'guid' => null,
        'relationshipAttributes' => null,
        'typeName' => null,
        'updatedBy' => null,
        'updateTime' => null,
        'tags' => null,
        'classificationNames' => null
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
    * attributes  属性Map<String, Object>
    * connection  connection
    * createTime  创建时间
    * createdBy  创建人
    * displayText  资产的名称
    * guid  资产guid
    * relationshipAttributes  相关的属性 Map<String, Object>
    * typeName  资产类型
    * updatedBy  更新人
    * updateTime  更新时间
    * tags  标签
    * classificationNames  分类 List<String> classificationNames
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attributes' => 'attributes',
            'connection' => 'connection',
            'createTime' => 'create_time',
            'createdBy' => 'created_by',
            'displayText' => 'display_text',
            'guid' => 'guid',
            'relationshipAttributes' => 'relationship_attributes',
            'typeName' => 'type_name',
            'updatedBy' => 'updated_by',
            'updateTime' => 'update_time',
            'tags' => 'tags',
            'classificationNames' => 'classification_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attributes  属性Map<String, Object>
    * connection  connection
    * createTime  创建时间
    * createdBy  创建人
    * displayText  资产的名称
    * guid  资产guid
    * relationshipAttributes  相关的属性 Map<String, Object>
    * typeName  资产类型
    * updatedBy  更新人
    * updateTime  更新时间
    * tags  标签
    * classificationNames  分类 List<String> classificationNames
    *
    * @var string[]
    */
    protected static $setters = [
            'attributes' => 'setAttributes',
            'connection' => 'setConnection',
            'createTime' => 'setCreateTime',
            'createdBy' => 'setCreatedBy',
            'displayText' => 'setDisplayText',
            'guid' => 'setGuid',
            'relationshipAttributes' => 'setRelationshipAttributes',
            'typeName' => 'setTypeName',
            'updatedBy' => 'setUpdatedBy',
            'updateTime' => 'setUpdateTime',
            'tags' => 'setTags',
            'classificationNames' => 'setClassificationNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attributes  属性Map<String, Object>
    * connection  connection
    * createTime  创建时间
    * createdBy  创建人
    * displayText  资产的名称
    * guid  资产guid
    * relationshipAttributes  相关的属性 Map<String, Object>
    * typeName  资产类型
    * updatedBy  更新人
    * updateTime  更新时间
    * tags  标签
    * classificationNames  分类 List<String> classificationNames
    *
    * @var string[]
    */
    protected static $getters = [
            'attributes' => 'getAttributes',
            'connection' => 'getConnection',
            'createTime' => 'getCreateTime',
            'createdBy' => 'getCreatedBy',
            'displayText' => 'getDisplayText',
            'guid' => 'getGuid',
            'relationshipAttributes' => 'getRelationshipAttributes',
            'typeName' => 'getTypeName',
            'updatedBy' => 'getUpdatedBy',
            'updateTime' => 'getUpdateTime',
            'tags' => 'getTags',
            'classificationNames' => 'getClassificationNames'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['relationshipAttributes'] = isset($data['relationshipAttributes']) ? $data['relationshipAttributes'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['classificationNames'] = isset($data['classificationNames']) ? $data['classificationNames'] : null;
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
    * Gets attributes
    *  属性Map<String, Object>
    *
    * @return object|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object|null $attributes 属性Map<String, Object>
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets connection
    *  connection
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection|null $connection connection
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
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
    * Gets createdBy
    *  创建人
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
    * @param string|null $createdBy 创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets displayText
    *  资产的名称
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
    * @param string|null $displayText 资产的名称
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid
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
    * @param string|null $guid 资产guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets relationshipAttributes
    *  相关的属性 Map<String, Object>
    *
    * @return object|null
    */
    public function getRelationshipAttributes()
    {
        return $this->container['relationshipAttributes'];
    }

    /**
    * Sets relationshipAttributes
    *
    * @param object|null $relationshipAttributes 相关的属性 Map<String, Object>
    *
    * @return $this
    */
    public function setRelationshipAttributes($relationshipAttributes)
    {
        $this->container['relationshipAttributes'] = $relationshipAttributes;
        return $this;
    }

    /**
    * Gets typeName
    *  资产类型
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 资产类型
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新人
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
    * @param string|null $updatedBy 更新人
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param float|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets classificationNames
    *  分类 List<String> classificationNames
    *
    * @return string[]|null
    */
    public function getClassificationNames()
    {
        return $this->container['classificationNames'];
    }

    /**
    * Sets classificationNames
    *
    * @param string[]|null $classificationNames 分类 List<String> classificationNames
    *
    * @return $this
    */
    public function setClassificationNames($classificationNames)
    {
        $this->container['classificationNames'] = $classificationNames;
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

