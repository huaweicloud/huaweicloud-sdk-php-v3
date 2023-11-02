<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomizedFieldsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomizedFieldsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码
    * nameCh  中文名称
    * nameEn  英文名称
    * notNull  是否必填
    * optionalValues  可选值。分号分隔
    * type  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    * ordinal  顺序
    * description  描述
    * createBy  创建人
    * updateBy  更新人
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'nameCh' => 'string',
            'nameEn' => 'string',
            'notNull' => 'bool',
            'optionalValues' => 'string',
            'type' => 'string',
            'ordinal' => 'int',
            'description' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码
    * nameCh  中文名称
    * nameEn  英文名称
    * notNull  是否必填
    * optionalValues  可选值。分号分隔
    * type  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    * ordinal  顺序
    * description  描述
    * createBy  创建人
    * updateBy  更新人
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'nameCh' => null,
        'nameEn' => null,
        'notNull' => null,
        'optionalValues' => null,
        'type' => null,
        'ordinal' => null,
        'description' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  编码
    * nameCh  中文名称
    * nameEn  英文名称
    * notNull  是否必填
    * optionalValues  可选值。分号分隔
    * type  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    * ordinal  顺序
    * description  描述
    * createBy  创建人
    * updateBy  更新人
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameCh' => 'name_ch',
            'nameEn' => 'name_en',
            'notNull' => 'not_null',
            'optionalValues' => 'optional_values',
            'type' => 'type',
            'ordinal' => 'ordinal',
            'description' => 'description',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码
    * nameCh  中文名称
    * nameEn  英文名称
    * notNull  是否必填
    * optionalValues  可选值。分号分隔
    * type  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    * ordinal  顺序
    * description  描述
    * createBy  创建人
    * updateBy  更新人
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameCh' => 'setNameCh',
            'nameEn' => 'setNameEn',
            'notNull' => 'setNotNull',
            'optionalValues' => 'setOptionalValues',
            'type' => 'setType',
            'ordinal' => 'setOrdinal',
            'description' => 'setDescription',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码
    * nameCh  中文名称
    * nameEn  英文名称
    * notNull  是否必填
    * optionalValues  可选值。分号分隔
    * type  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    * ordinal  顺序
    * description  描述
    * createBy  创建人
    * updateBy  更新人
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameCh' => 'getNameCh',
            'nameEn' => 'getNameEn',
            'notNull' => 'getNotNull',
            'optionalValues' => 'getOptionalValues',
            'type' => 'getType',
            'ordinal' => 'getOrdinal',
            'description' => 'getDescription',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
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
    const TYPE_TABLE = 'TABLE';
    const TYPE_ATTRIBUTE = 'ATTRIBUTE';
    const TYPE_SUBJECT = 'SUBJECT';
    const TYPE_METRIC = 'METRIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TABLE,
            self::TYPE_ATTRIBUTE,
            self::TYPE_SUBJECT,
            self::TYPE_METRIC,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['optionalValues'] = isset($data['optionalValues']) ? $data['optionalValues'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
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
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 100)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 100.";
            }
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 100)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9:_\\s\\-]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9:_\\s\\-]*$/.";
            }
        if ($this->container['notNull'] === null) {
            $invalidProperties[] = "'notNull' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
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
    *  编码
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
    * @param int|null $id 编码
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameCh
    *  中文名称
    *
    * @return string
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string $nameCh 中文名称
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 英文名称
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets notNull
    *  是否必填
    *
    * @return bool
    */
    public function getNotNull()
    {
        return $this->container['notNull'];
    }

    /**
    * Sets notNull
    *
    * @param bool $notNull 是否必填
    *
    * @return $this
    */
    public function setNotNull($notNull)
    {
        $this->container['notNull'] = $notNull;
        return $this;
    }

    /**
    * Gets optionalValues
    *  可选值。分号分隔
    *
    * @return string|null
    */
    public function getOptionalValues()
    {
        return $this->container['optionalValues'];
    }

    /**
    * Sets optionalValues
    *
    * @param string|null $optionalValues 可选值。分号分隔
    *
    * @return $this
    */
    public function setOptionalValues($optionalValues)
    {
        $this->container['optionalValues'] = $optionalValues;
        return $this;
    }

    /**
    * Gets type
    *  自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 自定义项类型：TABLE, ATTRIBUTE, SUBJECT, METRIC
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ordinal
    *  顺序
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 顺序
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
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
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
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

