<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DpeClassifyItemDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DpeClassifyItemDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  映射id
    * classifierId  映射id
    * classifierTypeId  映射id
    * mappingId  映射id
    * classifierOrder  分类优先级
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'classifierId' => 'string',
            'classifierTypeId' => 'string',
            'mappingId' => 'string',
            'classifierOrder' => 'int',
            'expression' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  映射id
    * classifierId  映射id
    * classifierTypeId  映射id
    * mappingId  映射id
    * classifierOrder  分类优先级
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'classifierId' => null,
        'classifierTypeId' => null,
        'mappingId' => null,
        'classifierOrder' => null,
        'expression' => null,
        'createTime' => null,
        'updateTime' => null
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
    * id  映射id
    * classifierId  映射id
    * classifierTypeId  映射id
    * mappingId  映射id
    * classifierOrder  分类优先级
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'classifierId' => 'classifier_id',
            'classifierTypeId' => 'classifier_type_id',
            'mappingId' => 'mapping_id',
            'classifierOrder' => 'classifier_order',
            'expression' => 'expression',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  映射id
    * classifierId  映射id
    * classifierTypeId  映射id
    * mappingId  映射id
    * classifierOrder  分类优先级
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'classifierId' => 'setClassifierId',
            'classifierTypeId' => 'setClassifierTypeId',
            'mappingId' => 'setMappingId',
            'classifierOrder' => 'setClassifierOrder',
            'expression' => 'setExpression',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  映射id
    * classifierId  映射id
    * classifierTypeId  映射id
    * mappingId  映射id
    * classifierOrder  分类优先级
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'classifierId' => 'getClassifierId',
            'classifierTypeId' => 'getClassifierTypeId',
            'mappingId' => 'getMappingId',
            'classifierOrder' => 'getClassifierOrder',
            'expression' => 'getExpression',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['classifierId'] = isset($data['classifierId']) ? $data['classifierId'] : null;
        $this->container['classifierTypeId'] = isset($data['classifierTypeId']) ? $data['classifierTypeId'] : null;
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['classifierOrder'] = isset($data['classifierOrder']) ? $data['classifierOrder'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['classifierId']) && (mb_strlen($this->container['classifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'classifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['classifierId']) && (mb_strlen($this->container['classifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'classifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['classifierTypeId']) && (mb_strlen($this->container['classifierTypeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'classifierTypeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['classifierTypeId']) && (mb_strlen($this->container['classifierTypeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'classifierTypeId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['classifierOrder']) && ($this->container['classifierOrder'] > 99999)) {
                $invalidProperties[] = "invalid value for 'classifierOrder', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['classifierOrder']) && ($this->container['classifierOrder'] < 0)) {
                $invalidProperties[] = "invalid value for 'classifierOrder', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 9999)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 0)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    *  映射id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 映射id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets classifierId
    *  映射id
    *
    * @return string|null
    */
    public function getClassifierId()
    {
        return $this->container['classifierId'];
    }

    /**
    * Sets classifierId
    *
    * @param string|null $classifierId 映射id
    *
    * @return $this
    */
    public function setClassifierId($classifierId)
    {
        $this->container['classifierId'] = $classifierId;
        return $this;
    }

    /**
    * Gets classifierTypeId
    *  映射id
    *
    * @return string|null
    */
    public function getClassifierTypeId()
    {
        return $this->container['classifierTypeId'];
    }

    /**
    * Sets classifierTypeId
    *
    * @param string|null $classifierTypeId 映射id
    *
    * @return $this
    */
    public function setClassifierTypeId($classifierTypeId)
    {
        $this->container['classifierTypeId'] = $classifierTypeId;
        return $this;
    }

    /**
    * Gets mappingId
    *  映射id
    *
    * @return string|null
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string|null $mappingId 映射id
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets classifierOrder
    *  分类优先级
    *
    * @return int|null
    */
    public function getClassifierOrder()
    {
        return $this->container['classifierOrder'];
    }

    /**
    * Sets classifierOrder
    *
    * @param int|null $classifierOrder 分类优先级
    *
    * @return $this
    */
    public function setClassifierOrder($classifierOrder)
    {
        $this->container['classifierOrder'] = $classifierOrder;
        return $this;
    }

    /**
    * Gets expression
    *  表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

