<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmStatisticResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  日期
    * urgent  紧急
    * important  重要
    * minor  次要
    * prompt  提示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'urgent' => 'string',
            'important' => 'string',
            'minor' => 'string',
            'prompt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  日期
    * urgent  紧急
    * important  重要
    * minor  次要
    * prompt  提示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'urgent' => null,
        'important' => null,
        'minor' => null,
        'prompt' => null
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
    * date  日期
    * urgent  紧急
    * important  重要
    * minor  次要
    * prompt  提示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'urgent' => 'urgent',
            'important' => 'important',
            'minor' => 'minor',
            'prompt' => 'prompt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  日期
    * urgent  紧急
    * important  重要
    * minor  次要
    * prompt  提示
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'urgent' => 'setUrgent',
            'important' => 'setImportant',
            'minor' => 'setMinor',
            'prompt' => 'setPrompt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  日期
    * urgent  紧急
    * important  重要
    * minor  次要
    * prompt  提示
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'urgent' => 'getUrgent',
            'important' => 'getImportant',
            'minor' => 'getMinor',
            'prompt' => 'getPrompt'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['urgent'] = isset($data['urgent']) ? $data['urgent'] : null;
        $this->container['important'] = isset($data['important']) ? $data['important'] : null;
        $this->container['minor'] = isset($data['minor']) ? $data['minor'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
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
    * Gets date
    *  日期
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 日期
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets urgent
    *  紧急
    *
    * @return string|null
    */
    public function getUrgent()
    {
        return $this->container['urgent'];
    }

    /**
    * Sets urgent
    *
    * @param string|null $urgent 紧急
    *
    * @return $this
    */
    public function setUrgent($urgent)
    {
        $this->container['urgent'] = $urgent;
        return $this;
    }

    /**
    * Gets important
    *  重要
    *
    * @return string|null
    */
    public function getImportant()
    {
        return $this->container['important'];
    }

    /**
    * Sets important
    *
    * @param string|null $important 重要
    *
    * @return $this
    */
    public function setImportant($important)
    {
        $this->container['important'] = $important;
        return $this;
    }

    /**
    * Gets minor
    *  次要
    *
    * @return string|null
    */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
    * Sets minor
    *
    * @param string|null $minor 次要
    *
    * @return $this
    */
    public function setMinor($minor)
    {
        $this->container['minor'] = $minor;
        return $this;
    }

    /**
    * Gets prompt
    *  提示
    *
    * @return string|null
    */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
    * Sets prompt
    *
    * @param string|null $prompt 提示
    *
    * @return $this
    */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;
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

