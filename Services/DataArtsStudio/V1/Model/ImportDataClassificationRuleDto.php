<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportDataClassificationRuleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportDataClassificationRuleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  数据识别规则id。
    * classificationType  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    * secrecyLevel  数据密级id。
    * name  数据识别规则名称。
    * enable  是否启用。
    * method  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    * description  描述。
    * categoryId  数据分类id。
    * builtinRuleId  预置规则id。
    * updatedBy  更新人。
    * updateAt  更新时间。
    * createdBy  创建人。
    * createAt  创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'classificationType' => 'string',
            'secrecyLevel' => 'string',
            'name' => 'string',
            'enable' => 'bool',
            'method' => 'string',
            'description' => 'string',
            'categoryId' => 'string',
            'builtinRuleId' => 'string',
            'updatedBy' => 'string',
            'updateAt' => 'int',
            'createdBy' => 'string',
            'createAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  数据识别规则id。
    * classificationType  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    * secrecyLevel  数据密级id。
    * name  数据识别规则名称。
    * enable  是否启用。
    * method  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    * description  描述。
    * categoryId  数据分类id。
    * builtinRuleId  预置规则id。
    * updatedBy  更新人。
    * updateAt  更新时间。
    * createdBy  创建人。
    * createAt  创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'classificationType' => null,
        'secrecyLevel' => null,
        'name' => null,
        'enable' => null,
        'method' => null,
        'description' => null,
        'categoryId' => null,
        'builtinRuleId' => null,
        'updatedBy' => null,
        'updateAt' => 'int64',
        'createdBy' => null,
        'createAt' => 'int64'
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
    * uuid  数据识别规则id。
    * classificationType  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    * secrecyLevel  数据密级id。
    * name  数据识别规则名称。
    * enable  是否启用。
    * method  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    * description  描述。
    * categoryId  数据分类id。
    * builtinRuleId  预置规则id。
    * updatedBy  更新人。
    * updateAt  更新时间。
    * createdBy  创建人。
    * createAt  创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'classificationType' => 'classification_type',
            'secrecyLevel' => 'secrecy_level',
            'name' => 'name',
            'enable' => 'enable',
            'method' => 'method',
            'description' => 'description',
            'categoryId' => 'category_id',
            'builtinRuleId' => 'builtin_rule_id',
            'updatedBy' => 'updated_by',
            'updateAt' => 'update_at',
            'createdBy' => 'created_by',
            'createAt' => 'create_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  数据识别规则id。
    * classificationType  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    * secrecyLevel  数据密级id。
    * name  数据识别规则名称。
    * enable  是否启用。
    * method  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    * description  描述。
    * categoryId  数据分类id。
    * builtinRuleId  预置规则id。
    * updatedBy  更新人。
    * updateAt  更新时间。
    * createdBy  创建人。
    * createAt  创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'classificationType' => 'setClassificationType',
            'secrecyLevel' => 'setSecrecyLevel',
            'name' => 'setName',
            'enable' => 'setEnable',
            'method' => 'setMethod',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId',
            'builtinRuleId' => 'setBuiltinRuleId',
            'updatedBy' => 'setUpdatedBy',
            'updateAt' => 'setUpdateAt',
            'createdBy' => 'setCreatedBy',
            'createAt' => 'setCreateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  数据识别规则id。
    * classificationType  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    * secrecyLevel  数据密级id。
    * name  数据识别规则名称。
    * enable  是否启用。
    * method  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    * description  描述。
    * categoryId  数据分类id。
    * builtinRuleId  预置规则id。
    * updatedBy  更新人。
    * updateAt  更新时间。
    * createdBy  创建人。
    * createAt  创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'classificationType' => 'getClassificationType',
            'secrecyLevel' => 'getSecrecyLevel',
            'name' => 'getName',
            'enable' => 'getEnable',
            'method' => 'getMethod',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId',
            'builtinRuleId' => 'getBuiltinRuleId',
            'updatedBy' => 'getUpdatedBy',
            'updateAt' => 'getUpdateAt',
            'createdBy' => 'getCreatedBy',
            'createAt' => 'getCreateAt'
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
    const CLASSIFICATION_TYPE_BUILTIN = 'BUILTIN';
    const CLASSIFICATION_TYPE_CUSTOM = 'CUSTOM';
    const METHOD_NONE = 'NONE';
    const METHOD_REGULAR = 'REGULAR';
    const METHOD__DEFAULT = 'DEFAULT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClassificationTypeAllowableValues()
    {
        return [
            self::CLASSIFICATION_TYPE_BUILTIN,
            self::CLASSIFICATION_TYPE_CUSTOM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_NONE,
            self::METHOD_REGULAR,
            self::METHOD__DEFAULT,
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['classificationType'] = isset($data['classificationType']) ? $data['classificationType'] : null;
        $this->container['secrecyLevel'] = isset($data['secrecyLevel']) ? $data['secrecyLevel'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['builtinRuleId'] = isset($data['builtinRuleId']) ? $data['builtinRuleId'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 128)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getClassificationTypeAllowableValues();
                if (!is_null($this->container['classificationType']) && !in_array($this->container['classificationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'classificationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMethodAllowableValues();
                if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateAt']) && ($this->container['updateAt'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['updateAt']) && ($this->container['updateAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
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
    * Gets uuid
    *  数据识别规则id。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 数据识别规则id。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets classificationType
    *  识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    *
    * @return string|null
    */
    public function getClassificationType()
    {
        return $this->container['classificationType'];
    }

    /**
    * Sets classificationType
    *
    * @param string|null $classificationType 识别规则类型 * BUILTIN 内置 * CUSTOM 自定义
    *
    * @return $this
    */
    public function setClassificationType($classificationType)
    {
        $this->container['classificationType'] = $classificationType;
        return $this;
    }

    /**
    * Gets secrecyLevel
    *  数据密级id。
    *
    * @return string|null
    */
    public function getSecrecyLevel()
    {
        return $this->container['secrecyLevel'];
    }

    /**
    * Sets secrecyLevel
    *
    * @param string|null $secrecyLevel 数据密级id。
    *
    * @return $this
    */
    public function setSecrecyLevel($secrecyLevel)
    {
        $this->container['secrecyLevel'] = $secrecyLevel;
        return $this;
    }

    /**
    * Gets name
    *  数据识别规则名称。
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
    * @param string|null $name 数据识别规则名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enable
    *  是否启用。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否启用。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets method
    *  识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 识别规则类型 * NONE 无 * REGULAR 正则表达式 * DEFAULT 默认
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets categoryId
    *  数据分类id。
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 数据分类id。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets builtinRuleId
    *  预置规则id。
    *
    * @return string|null
    */
    public function getBuiltinRuleId()
    {
        return $this->container['builtinRuleId'];
    }

    /**
    * Sets builtinRuleId
    *
    * @param string|null $builtinRuleId 预置规则id。
    *
    * @return $this
    */
    public function setBuiltinRuleId($builtinRuleId)
    {
        $this->container['builtinRuleId'] = $builtinRuleId;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新人。
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
    * @param string|null $updatedBy 更新人。
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建人。
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
    * @param string|null $createdBy 创建人。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
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

