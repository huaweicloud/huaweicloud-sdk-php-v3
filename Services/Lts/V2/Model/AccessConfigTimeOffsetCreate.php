<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessConfigTimeOffsetCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessConfigTimeOffsetCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    * unit  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    * unit  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int64',
        'unit' => null
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
    * offset  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    * unit  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    * unit  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    * unit  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'unit' => 'getUnit'
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
    const UNIT_DAY = 'day';
    const UNIT_HOUR = 'hour';
    const UNIT_SEC = 'sec';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_DAY,
            self::UNIT_HOUR,
            self::UNIT_SEC,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 604800)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 604800.";
            }
            if (($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
            $allowedValues = $this->getUnitAllowableValues();
                if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets offset
    *  偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移时间。 当\"unit\"选择\"day\"时，范围为1~7天。 当\"unit\"选择\"hour\"时，范围为1~168小时。 当\"unit\"选择\"sec\"时，范围为1~604800秒。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets unit
    *  偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 偏移时间单位。day ：天，hour：小时，sec：秒
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

