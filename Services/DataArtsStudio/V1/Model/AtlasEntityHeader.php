<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtlasEntityHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtlasEntityHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * typeName  类型名称
    * guid  guid
    * name  名称
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classificationNames  classificationNames
    * classifications  分类信息
    * meaningNames  meaningNames
    * meanings  关联任务
    * children  实体map Map<String, AtlasEntityHeader>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'typeName' => 'string',
            'guid' => 'string',
            'name' => 'string',
            'displayText' => 'string',
            'status' => 'string',
            'classificationNames' => 'string[]',
            'classifications' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasClassificationInfo[]',
            'meaningNames' => 'string[]',
            'meanings' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TermAssignmentHeader[]',
            'children' => 'object',
            'attributes' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * typeName  类型名称
    * guid  guid
    * name  名称
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classificationNames  classificationNames
    * classifications  分类信息
    * meaningNames  meaningNames
    * meanings  关联任务
    * children  实体map Map<String, AtlasEntityHeader>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'typeName' => null,
        'guid' => null,
        'name' => null,
        'displayText' => null,
        'status' => null,
        'classificationNames' => null,
        'classifications' => null,
        'meaningNames' => null,
        'meanings' => null,
        'children' => null,
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
    * name  名称
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classificationNames  classificationNames
    * classifications  分类信息
    * meaningNames  meaningNames
    * meanings  关联任务
    * children  实体map Map<String, AtlasEntityHeader>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'typeName' => 'type_name',
            'guid' => 'guid',
            'name' => 'name',
            'displayText' => 'display_text',
            'status' => 'status',
            'classificationNames' => 'classification_names',
            'classifications' => 'classifications',
            'meaningNames' => 'meaning_names',
            'meanings' => 'meanings',
            'children' => 'children',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * typeName  类型名称
    * guid  guid
    * name  名称
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classificationNames  classificationNames
    * classifications  分类信息
    * meaningNames  meaningNames
    * meanings  关联任务
    * children  实体map Map<String, AtlasEntityHeader>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $setters = [
            'typeName' => 'setTypeName',
            'guid' => 'setGuid',
            'name' => 'setName',
            'displayText' => 'setDisplayText',
            'status' => 'setStatus',
            'classificationNames' => 'setClassificationNames',
            'classifications' => 'setClassifications',
            'meaningNames' => 'setMeaningNames',
            'meanings' => 'setMeanings',
            'children' => 'setChildren',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * typeName  类型名称
    * guid  guid
    * name  名称
    * displayText  展示
    * status  状态 枚举值：ACTIVE、DELETED
    * classificationNames  classificationNames
    * classifications  分类信息
    * meaningNames  meaningNames
    * meanings  关联任务
    * children  实体map Map<String, AtlasEntityHeader>
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $getters = [
            'typeName' => 'getTypeName',
            'guid' => 'getGuid',
            'name' => 'getName',
            'displayText' => 'getDisplayText',
            'status' => 'getStatus',
            'classificationNames' => 'getClassificationNames',
            'classifications' => 'getClassifications',
            'meaningNames' => 'getMeaningNames',
            'meanings' => 'getMeanings',
            'children' => 'getChildren',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['classificationNames'] = isset($data['classificationNames']) ? $data['classificationNames'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['meaningNames'] = isset($data['meaningNames']) ? $data['meaningNames'] : null;
        $this->container['meanings'] = isset($data['meanings']) ? $data['meanings'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 类型名称
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets classificationNames
    *  classificationNames
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
    * @param string[]|null $classificationNames classificationNames
    *
    * @return $this
    */
    public function setClassificationNames($classificationNames)
    {
        $this->container['classificationNames'] = $classificationNames;
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
    * Gets meaningNames
    *  meaningNames
    *
    * @return string[]|null
    */
    public function getMeaningNames()
    {
        return $this->container['meaningNames'];
    }

    /**
    * Sets meaningNames
    *
    * @param string[]|null $meaningNames meaningNames
    *
    * @return $this
    */
    public function setMeaningNames($meaningNames)
    {
        $this->container['meaningNames'] = $meaningNames;
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
    * Gets children
    *  实体map Map<String, AtlasEntityHeader>
    *
    * @return object|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param object|null $children 实体map Map<String, AtlasEntityHeader>
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets attributes
    *  实体map Map<String, Object>
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
    * @param object|null $attributes 实体map Map<String, Object>
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

