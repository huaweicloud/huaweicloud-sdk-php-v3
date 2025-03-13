<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationCombineRuleDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationCombineRuleDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * secrecyLevelId  密级ID
    * combineExpression  条件表达式
    * description  规则描述
    * categoryId  分类ID
    * enable  使能状态。
    * singleExpressions  条件单规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'secrecyLevelId' => 'string',
            'combineExpression' => 'string',
            'description' => 'string',
            'categoryId' => 'string',
            'enable' => 'bool',
            'singleExpressions' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * secrecyLevelId  密级ID
    * combineExpression  条件表达式
    * description  规则描述
    * categoryId  分类ID
    * enable  使能状态。
    * singleExpressions  条件单规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'secrecyLevelId' => null,
        'combineExpression' => null,
        'description' => null,
        'categoryId' => null,
        'enable' => null,
        'singleExpressions' => null
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
    * name  规则名称
    * secrecyLevelId  密级ID
    * combineExpression  条件表达式
    * description  规则描述
    * categoryId  分类ID
    * enable  使能状态。
    * singleExpressions  条件单规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'secrecyLevelId' => 'secrecy_level_id',
            'combineExpression' => 'combine_expression',
            'description' => 'description',
            'categoryId' => 'category_id',
            'enable' => 'enable',
            'singleExpressions' => 'single_expressions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * secrecyLevelId  密级ID
    * combineExpression  条件表达式
    * description  规则描述
    * categoryId  分类ID
    * enable  使能状态。
    * singleExpressions  条件单规则
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'secrecyLevelId' => 'setSecrecyLevelId',
            'combineExpression' => 'setCombineExpression',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId',
            'enable' => 'setEnable',
            'singleExpressions' => 'setSingleExpressions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * secrecyLevelId  密级ID
    * combineExpression  条件表达式
    * description  规则描述
    * categoryId  分类ID
    * enable  使能状态。
    * singleExpressions  条件单规则
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'secrecyLevelId' => 'getSecrecyLevelId',
            'combineExpression' => 'getCombineExpression',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId',
            'enable' => 'getEnable',
            'singleExpressions' => 'getSingleExpressions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
        $this->container['combineExpression'] = isset($data['combineExpression']) ? $data['combineExpression'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['singleExpressions'] = isset($data['singleExpressions']) ? $data['singleExpressions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['secrecyLevelId'] === null) {
            $invalidProperties[] = "'secrecyLevelId' can't be null";
        }
            if ((mb_strlen($this->container['secrecyLevelId']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['secrecyLevelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['combineExpression'] === null) {
            $invalidProperties[] = "'combineExpression' can't be null";
        }
            if ((mb_strlen($this->container['combineExpression']) > 128)) {
                $invalidProperties[] = "invalid value for 'combineExpression', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['combineExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'combineExpression', the character length must be bigger than or equal to 1.";
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
        if ($this->container['singleExpressions'] === null) {
            $invalidProperties[] = "'singleExpressions' can't be null";
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
    * Gets name
    *  规则名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets secrecyLevelId
    *  密级ID
    *
    * @return string
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string $secrecyLevelId 密级ID
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
        return $this;
    }

    /**
    * Gets combineExpression
    *  条件表达式
    *
    * @return string
    */
    public function getCombineExpression()
    {
        return $this->container['combineExpression'];
    }

    /**
    * Sets combineExpression
    *
    * @param string $combineExpression 条件表达式
    *
    * @return $this
    */
    public function setCombineExpression($combineExpression)
    {
        $this->container['combineExpression'] = $combineExpression;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
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
    * @param string|null $description 规则描述
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
    *  分类ID
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
    * @param string|null $categoryId 分类ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets enable
    *  使能状态。
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
    * @param bool|null $enable 使能状态。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets singleExpressions
    *  条件单规则
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[]
    */
    public function getSingleExpressions()
    {
        return $this->container['singleExpressions'];
    }

    /**
    * Sets singleExpressions
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[] $singleExpressions 条件单规则
    *
    * @return $this
    */
    public function setSingleExpressions($singleExpressions)
    {
        $this->container['singleExpressions'] = $singleExpressions;
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

