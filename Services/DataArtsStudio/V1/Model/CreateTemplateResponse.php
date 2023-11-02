<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * categoryId  目录ID
    * dimension  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    * type  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    * systemTemplate  是否为系统模板
    * sqlInfo  定义关系
    * abnormalTableTemplate  异常表模板
    * resultDescription  结果说明
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * creator  创建者,System代表系统自带
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'categoryId' => 'int',
            'dimension' => 'string',
            'type' => 'string',
            'systemTemplate' => 'bool',
            'sqlInfo' => 'string',
            'abnormalTableTemplate' => 'string',
            'resultDescription' => 'string',
            'createTime' => 'int',
            'creator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * categoryId  目录ID
    * dimension  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    * type  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    * systemTemplate  是否为系统模板
    * sqlInfo  定义关系
    * abnormalTableTemplate  异常表模板
    * resultDescription  结果说明
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * creator  创建者,System代表系统自带
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'categoryId' => 'int64',
        'dimension' => null,
        'type' => null,
        'systemTemplate' => null,
        'sqlInfo' => null,
        'abnormalTableTemplate' => null,
        'resultDescription' => null,
        'createTime' => 'int64',
        'creator' => null
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
    * id  id
    * name  name
    * categoryId  目录ID
    * dimension  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    * type  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    * systemTemplate  是否为系统模板
    * sqlInfo  定义关系
    * abnormalTableTemplate  异常表模板
    * resultDescription  结果说明
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * creator  创建者,System代表系统自带
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'categoryId' => 'category_id',
            'dimension' => 'dimension',
            'type' => 'type',
            'systemTemplate' => 'system_template',
            'sqlInfo' => 'sql_info',
            'abnormalTableTemplate' => 'abnormal_table_template',
            'resultDescription' => 'result_description',
            'createTime' => 'create_time',
            'creator' => 'creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * categoryId  目录ID
    * dimension  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    * type  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    * systemTemplate  是否为系统模板
    * sqlInfo  定义关系
    * abnormalTableTemplate  异常表模板
    * resultDescription  结果说明
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * creator  创建者,System代表系统自带
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'categoryId' => 'setCategoryId',
            'dimension' => 'setDimension',
            'type' => 'setType',
            'systemTemplate' => 'setSystemTemplate',
            'sqlInfo' => 'setSqlInfo',
            'abnormalTableTemplate' => 'setAbnormalTableTemplate',
            'resultDescription' => 'setResultDescription',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * categoryId  目录ID
    * dimension  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    * type  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    * systemTemplate  是否为系统模板
    * sqlInfo  定义关系
    * abnormalTableTemplate  异常表模板
    * resultDescription  结果说明
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * creator  创建者,System代表系统自带
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'categoryId' => 'getCategoryId',
            'dimension' => 'getDimension',
            'type' => 'getType',
            'systemTemplate' => 'getSystemTemplate',
            'sqlInfo' => 'getSqlInfo',
            'abnormalTableTemplate' => 'getAbnormalTableTemplate',
            'resultDescription' => 'getResultDescription',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['systemTemplate'] = isset($data['systemTemplate']) ? $data['systemTemplate'] : null;
        $this->container['sqlInfo'] = isset($data['sqlInfo']) ? $data['sqlInfo'] : null;
        $this->container['abnormalTableTemplate'] = isset($data['abnormalTableTemplate']) ? $data['abnormalTableTemplate'] : null;
        $this->container['resultDescription'] = isset($data['resultDescription']) ? $data['resultDescription'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets categoryId
    *  目录ID
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 目录ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets dimension
    *  Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension Completeness:完整性,Uniqueness:唯一性,Timeliness:及时性,Validity:有效性,Accuracy:准确性,Consistency:一致性
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets type
    *  规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 规则类型，Field:字段级规则,Table:表级规则,Database:库级规则,Cross-field:跨字段级规则,Customize:自定义规则
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets systemTemplate
    *  是否为系统模板
    *
    * @return bool|null
    */
    public function getSystemTemplate()
    {
        return $this->container['systemTemplate'];
    }

    /**
    * Sets systemTemplate
    *
    * @param bool|null $systemTemplate 是否为系统模板
    *
    * @return $this
    */
    public function setSystemTemplate($systemTemplate)
    {
        $this->container['systemTemplate'] = $systemTemplate;
        return $this;
    }

    /**
    * Gets sqlInfo
    *  定义关系
    *
    * @return string|null
    */
    public function getSqlInfo()
    {
        return $this->container['sqlInfo'];
    }

    /**
    * Sets sqlInfo
    *
    * @param string|null $sqlInfo 定义关系
    *
    * @return $this
    */
    public function setSqlInfo($sqlInfo)
    {
        $this->container['sqlInfo'] = $sqlInfo;
        return $this;
    }

    /**
    * Gets abnormalTableTemplate
    *  异常表模板
    *
    * @return string|null
    */
    public function getAbnormalTableTemplate()
    {
        return $this->container['abnormalTableTemplate'];
    }

    /**
    * Sets abnormalTableTemplate
    *
    * @param string|null $abnormalTableTemplate 异常表模板
    *
    * @return $this
    */
    public function setAbnormalTableTemplate($abnormalTableTemplate)
    {
        $this->container['abnormalTableTemplate'] = $abnormalTableTemplate;
        return $this;
    }

    /**
    * Gets resultDescription
    *  结果说明
    *
    * @return string|null
    */
    public function getResultDescription()
    {
        return $this->container['resultDescription'];
    }

    /**
    * Sets resultDescription
    *
    * @param string|null $resultDescription 结果说明
    *
    * @return $this
    */
    public function setResultDescription($resultDescription)
    {
        $this->container['resultDescription'] = $resultDescription;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建者,System代表系统自带
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者,System代表系统自带
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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

