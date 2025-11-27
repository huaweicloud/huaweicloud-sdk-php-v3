<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Toleration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Toleration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  表示要容忍的污点键名
    * operator  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    * value  表示要匹配的污点值，当Operator为Exists时，Value应为空
    * effect  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    * tolerationSeconds  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'operator' => 'string',
            'value' => 'string',
            'effect' => 'string',
            'tolerationSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  表示要容忍的污点键名
    * operator  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    * value  表示要匹配的污点值，当Operator为Exists时，Value应为空
    * effect  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    * tolerationSeconds  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'operator' => null,
        'value' => null,
        'effect' => null,
        'tolerationSeconds' => 'int32'
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
    * key  表示要容忍的污点键名
    * operator  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    * value  表示要匹配的污点值，当Operator为Exists时，Value应为空
    * effect  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    * tolerationSeconds  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'operator' => 'operator',
            'value' => 'value',
            'effect' => 'effect',
            'tolerationSeconds' => 'tolerationSeconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  表示要容忍的污点键名
    * operator  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    * value  表示要匹配的污点值，当Operator为Exists时，Value应为空
    * effect  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    * tolerationSeconds  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'operator' => 'setOperator',
            'value' => 'setValue',
            'effect' => 'setEffect',
            'tolerationSeconds' => 'setTolerationSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  表示要容忍的污点键名
    * operator  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    * value  表示要匹配的污点值，当Operator为Exists时，Value应为空
    * effect  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    * tolerationSeconds  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'operator' => 'getOperator',
            'value' => 'getValue',
            'effect' => 'getEffect',
            'tolerationSeconds' => 'getTolerationSeconds'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['tolerationSeconds'] = isset($data['tolerationSeconds']) ? $data['tolerationSeconds'] : null;
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
    * Gets key
    *  表示要容忍的污点键名
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 表示要容忍的污点键名
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets operator
    *  定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 定义Key与Value之间的关系，可选值为Exists或Equal，默认为Equal
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets value
    *  表示要匹配的污点值，当Operator为Exists时，Value应为空
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 表示要匹配的污点值，当Operator为Exists时，Value应为空
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets effect
    *  指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    *
    * @return string|null
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string|null $effect 指定要匹配的污点效果，可选值为 NoSchedule、PreferNoSchedule或NoExecute，如果为空，表示匹配所有效果
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets tolerationSeconds
    *  仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @return int|null
    */
    public function getTolerationSeconds()
    {
        return $this->container['tolerationSeconds'];
    }

    /**
    * Sets tolerationSeconds
    *
    * @param int|null $tolerationSeconds 仅对NoExecute效果有效，表示Pod能容忍污点的时间
    *
    * @return $this
    */
    public function setTolerationSeconds($tolerationSeconds)
    {
        $this->container['tolerationSeconds'] = $tolerationSeconds;
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

