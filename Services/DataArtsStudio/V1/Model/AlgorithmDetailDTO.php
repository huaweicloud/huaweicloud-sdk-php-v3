<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmDetailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmDetailDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  开始位数，该值需要大于0且小于end值。
    * end  结束位数，该值需要大于或等于start值。
    * intTarget  数值类型。
    * stringTarget  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'int',
            'end' => 'int',
            'intTarget' => 'int',
            'stringTarget' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  开始位数，该值需要大于0且小于end值。
    * end  结束位数，该值需要大于或等于start值。
    * intTarget  数值类型。
    * stringTarget  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => 'int32',
        'end' => 'int32',
        'intTarget' => 'int32',
        'stringTarget' => null
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
    * start  开始位数，该值需要大于0且小于end值。
    * end  结束位数，该值需要大于或等于start值。
    * intTarget  数值类型。
    * stringTarget  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'end' => 'end',
            'intTarget' => 'int_target',
            'stringTarget' => 'string_target'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  开始位数，该值需要大于0且小于end值。
    * end  结束位数，该值需要大于或等于start值。
    * intTarget  数值类型。
    * stringTarget  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'end' => 'setEnd',
            'intTarget' => 'setIntTarget',
            'stringTarget' => 'setStringTarget'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  开始位数，该值需要大于0且小于end值。
    * end  结束位数，该值需要大于或等于start值。
    * intTarget  数值类型。
    * stringTarget  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'end' => 'getEnd',
            'intTarget' => 'getIntTarget',
            'stringTarget' => 'getStringTarget'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['intTarget'] = isset($data['intTarget']) ? $data['intTarget'] : null;
        $this->container['stringTarget'] = isset($data['stringTarget']) ? $data['stringTarget'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['start']) && ($this->container['start'] > 9999)) {
                $invalidProperties[] = "invalid value for 'start', must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['start']) && ($this->container['start'] < 0)) {
                $invalidProperties[] = "invalid value for 'start', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['end']) && ($this->container['end'] > 9999)) {
                $invalidProperties[] = "invalid value for 'end', must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['end']) && ($this->container['end'] < 0)) {
                $invalidProperties[] = "invalid value for 'end', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intTarget']) && ($this->container['intTarget'] > 9)) {
                $invalidProperties[] = "invalid value for 'intTarget', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['intTarget']) && ($this->container['intTarget'] < 0)) {
                $invalidProperties[] = "invalid value for 'intTarget', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stringTarget']) && (mb_strlen($this->container['stringTarget']) > 1)) {
                $invalidProperties[] = "invalid value for 'stringTarget', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['stringTarget']) && (mb_strlen($this->container['stringTarget']) < 1)) {
                $invalidProperties[] = "invalid value for 'stringTarget', the character length must be bigger than or equal to 1.";
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
    * Gets start
    *  开始位数，该值需要大于0且小于end值。
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 开始位数，该值需要大于0且小于end值。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  结束位数，该值需要大于或等于start值。
    *
    * @return int|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int|null $end 结束位数，该值需要大于或等于start值。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets intTarget
    *  数值类型。
    *
    * @return int|null
    */
    public function getIntTarget()
    {
        return $this->container['intTarget'];
    }

    /**
    * Sets intTarget
    *
    * @param int|null $intTarget 数值类型。
    *
    * @return $this
    */
    public function setIntTarget($intTarget)
    {
        $this->container['intTarget'] = $intTarget;
        return $this;
    }

    /**
    * Gets stringTarget
    *  字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @return string|null
    */
    public function getStringTarget()
    {
        return $this->container['stringTarget'];
    }

    /**
    * Sets stringTarget
    *
    * @param string|null $stringTarget 字符串类型。可输入参数为\"*\"或者\"#\"。
    *
    * @return $this
    */
    public function setStringTarget($stringTarget)
    {
        $this->container['stringTarget'] = $stringTarget;
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

