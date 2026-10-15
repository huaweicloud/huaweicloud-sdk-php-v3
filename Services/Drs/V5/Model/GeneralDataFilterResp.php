<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralDataFilterResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralDataFilterResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceFilterCondition  源数据库的过滤条件SQL表达式。
    * targetFilterCondition  目标数据库的过滤条件SQL表达式。
    * conditionSeparated  标记源库和目标库过滤条件是否分开配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceFilterCondition' => 'string',
            'targetFilterCondition' => 'string',
            'conditionSeparated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceFilterCondition  源数据库的过滤条件SQL表达式。
    * targetFilterCondition  目标数据库的过滤条件SQL表达式。
    * conditionSeparated  标记源库和目标库过滤条件是否分开配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceFilterCondition' => null,
        'targetFilterCondition' => null,
        'conditionSeparated' => null
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
    * sourceFilterCondition  源数据库的过滤条件SQL表达式。
    * targetFilterCondition  目标数据库的过滤条件SQL表达式。
    * conditionSeparated  标记源库和目标库过滤条件是否分开配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceFilterCondition' => 'source_filter_condition',
            'targetFilterCondition' => 'target_filter_condition',
            'conditionSeparated' => 'condition_separated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceFilterCondition  源数据库的过滤条件SQL表达式。
    * targetFilterCondition  目标数据库的过滤条件SQL表达式。
    * conditionSeparated  标记源库和目标库过滤条件是否分开配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceFilterCondition' => 'setSourceFilterCondition',
            'targetFilterCondition' => 'setTargetFilterCondition',
            'conditionSeparated' => 'setConditionSeparated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceFilterCondition  源数据库的过滤条件SQL表达式。
    * targetFilterCondition  目标数据库的过滤条件SQL表达式。
    * conditionSeparated  标记源库和目标库过滤条件是否分开配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceFilterCondition' => 'getSourceFilterCondition',
            'targetFilterCondition' => 'getTargetFilterCondition',
            'conditionSeparated' => 'getConditionSeparated'
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
        $this->container['sourceFilterCondition'] = isset($data['sourceFilterCondition']) ? $data['sourceFilterCondition'] : null;
        $this->container['targetFilterCondition'] = isset($data['targetFilterCondition']) ? $data['targetFilterCondition'] : null;
        $this->container['conditionSeparated'] = isset($data['conditionSeparated']) ? $data['conditionSeparated'] : null;
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
    * Gets sourceFilterCondition
    *  源数据库的过滤条件SQL表达式。
    *
    * @return string|null
    */
    public function getSourceFilterCondition()
    {
        return $this->container['sourceFilterCondition'];
    }

    /**
    * Sets sourceFilterCondition
    *
    * @param string|null $sourceFilterCondition 源数据库的过滤条件SQL表达式。
    *
    * @return $this
    */
    public function setSourceFilterCondition($sourceFilterCondition)
    {
        $this->container['sourceFilterCondition'] = $sourceFilterCondition;
        return $this;
    }

    /**
    * Gets targetFilterCondition
    *  目标数据库的过滤条件SQL表达式。
    *
    * @return string|null
    */
    public function getTargetFilterCondition()
    {
        return $this->container['targetFilterCondition'];
    }

    /**
    * Sets targetFilterCondition
    *
    * @param string|null $targetFilterCondition 目标数据库的过滤条件SQL表达式。
    *
    * @return $this
    */
    public function setTargetFilterCondition($targetFilterCondition)
    {
        $this->container['targetFilterCondition'] = $targetFilterCondition;
        return $this;
    }

    /**
    * Gets conditionSeparated
    *  标记源库和目标库过滤条件是否分开配置。
    *
    * @return string|null
    */
    public function getConditionSeparated()
    {
        return $this->container['conditionSeparated'];
    }

    /**
    * Sets conditionSeparated
    *
    * @param string|null $conditionSeparated 标记源库和目标库过滤条件是否分开配置。
    *
    * @return $this
    */
    public function setConditionSeparated($conditionSeparated)
    {
        $this->container['conditionSeparated'] = $conditionSeparated;
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

