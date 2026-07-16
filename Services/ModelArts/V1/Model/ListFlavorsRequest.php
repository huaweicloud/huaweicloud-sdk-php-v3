<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    * limit  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * type  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    * sortDir  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * flavorType  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    * feature  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'type' => 'string',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'flavorType' => 'string',
            'feature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    * limit  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * type  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    * sortDir  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * flavorType  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    * feature  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'limit' => null,
        'offset' => null,
        'type' => null,
        'sortDir' => null,
        'sortKey' => null,
        'flavorType' => null,
        'feature' => null
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
    * category  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    * limit  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * type  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    * sortDir  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * flavorType  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    * feature  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'limit' => 'limit',
            'offset' => 'offset',
            'type' => 'type',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'flavorType' => 'flavor_type',
            'feature' => 'feature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    * limit  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * type  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    * sortDir  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * flavorType  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    * feature  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'type' => 'setType',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'flavorType' => 'setFlavorType',
            'feature' => 'setFeature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    * limit  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * type  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    * sortDir  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * flavorType  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    * feature  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'type' => 'getType',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'flavorType' => 'getFlavorType',
            'feature' => 'getFeature'
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
    const CATEGORY_ASCEND = 'ASCEND';
    const CATEGORY_CPU = 'CPU';
    const CATEGORY_GPU = 'GPU';
    const TYPE_DEDICATED = 'DEDICATED';
    const TYPE_DEDICATED_ROMA = 'DEDICATED_ROMA';
    const TYPE_MANAGED = 'MANAGED';
    const TYPE_MANAGED_ROMA = 'MANAGED_ROMA';
    const SORT_DIR_ASC = 'ASC';
    const SORT_DIR_DESC = 'DESC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_ASCEND,
            self::CATEGORY_CPU,
            self::CATEGORY_GPU,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEDICATED,
            self::TYPE_DEDICATED_ROMA,
            self::TYPE_MANAGED,
            self::TYPE_MANAGED_ROMA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortKey']) && !preg_match("/^[-_a-zA-Z0-9,]{0,128}$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^[-_a-zA-Z0-9,]{0,128}$/.";
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
    * Gets category
    *  **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：规格处理器类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：每一页显示的有效规格数量，默认不限制。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
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
    * @param string|null $type **参数解释**：集群类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：公共集群 - DEDICATED：专属集群  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**：排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets flavorType
    *  **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType **参数解释**：资源类型 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature **参数解释**：特性名称。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。  **默认取值**：NOTEBOOK。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
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

