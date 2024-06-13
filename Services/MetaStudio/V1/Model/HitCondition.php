<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HitCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HitCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relation  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    * priority  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    * tags  匹配关系配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relation' => 'string',
            'priority' => 'int',
            'tags' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HitConditionTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relation  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    * priority  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    * tags  匹配关系配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relation' => null,
        'priority' => null,
        'tags' => null
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
    * relation  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    * priority  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    * tags  匹配关系配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relation' => 'relation',
            'priority' => 'priority',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relation  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    * priority  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    * tags  匹配关系配置
    *
    * @var string[]
    */
    protected static $setters = [
            'relation' => 'setRelation',
            'priority' => 'setPriority',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relation  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    * priority  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    * tags  匹配关系配置
    *
    * @var string[]
    */
    protected static $getters = [
            'relation' => 'getRelation',
            'priority' => 'getPriority',
            'tags' => 'getTags'
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
    const RELATION__AND = 'AND';
    const RELATION__OR = 'OR';
    const RELATION_RESERVED = 'RESERVED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRelationAllowableValues()
    {
        return [
            self::RELATION__AND,
            self::RELATION__OR,
            self::RELATION_RESERVED,
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
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRelationAllowableValues();
                if (!is_null($this->container['relation']) && !in_array($this->container['relation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'relation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['relation']) && (mb_strlen($this->container['relation']) > 16)) {
                $invalidProperties[] = "invalid value for 'relation', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['relation']) && (mb_strlen($this->container['relation']) < 0)) {
                $invalidProperties[] = "invalid value for 'relation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 999)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
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
    * Gets relation
    *  条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    *
    * @return string|null
    */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
    * Sets relation
    *
    * @param string|null $relation 条件关系；取值And或者Or RESERVED 为兜底回复不会去判断其他命中条件
    *
    * @return $this
    */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;
        return $this;
    }

    /**
    * Gets priority
    *  优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级，数值越低优先级越高；取值0-999，默认值为500，为可选值
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets tags
    *  匹配关系配置
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HitConditionTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HitConditionTag[]|null $tags 匹配关系配置
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

