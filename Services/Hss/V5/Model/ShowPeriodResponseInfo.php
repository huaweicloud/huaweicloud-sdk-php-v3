<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPeriodResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPeriodResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodVals  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    * periodUnit  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodVals' => 'string',
            'periodUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodVals  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    * periodUnit  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodVals' => null,
        'periodUnit' => null
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
    * periodVals  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    * periodUnit  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodVals' => 'period_vals',
            'periodUnit' => 'period_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodVals  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    * periodUnit  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @var string[]
    */
    protected static $setters = [
            'periodVals' => 'setPeriodVals',
            'periodUnit' => 'setPeriodUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodVals  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    * periodUnit  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @var string[]
    */
    protected static $getters = [
            'periodVals' => 'getPeriodVals',
            'periodUnit' => 'getPeriodUnit'
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
        $this->container['periodVals'] = isset($data['periodVals']) ? $data['periodVals'] : null;
        $this->container['periodUnit'] = isset($data['periodUnit']) ? $data['periodUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['periodVals']) && (mb_strlen($this->container['periodVals']) > 32)) {
                $invalidProperties[] = "invalid value for 'periodVals', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['periodVals']) && (mb_strlen($this->container['periodVals']) < 1)) {
                $invalidProperties[] = "invalid value for 'periodVals', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['periodUnit']) && (mb_strlen($this->container['periodUnit']) > 32)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['periodUnit']) && (mb_strlen($this->container['periodUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be bigger than or equal to 1.";
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
    * Gets periodVals
    *  购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    *
    * @return string|null
    */
    public function getPeriodVals()
    {
        return $this->container['periodVals'];
    }

    /**
    * Sets periodVals
    *
    * @param string|null $periodVals 购买时长数值串，多个用逗号分隔，如1,2,3,4,5,6,7,8,9
    *
    * @return $this
    */
    public function setPeriodVals($periodVals)
    {
        $this->container['periodVals'] = $periodVals;
        return $this;
    }

    /**
    * Gets periodUnit
    *  购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @return string|null
    */
    public function getPeriodUnit()
    {
        return $this->container['periodUnit'];
    }

    /**
    * Sets periodUnit
    *
    * @param string|null $periodUnit 购买时长单位   - year ：年   - month ：月   - day ：日
    *
    * @return $this
    */
    public function setPeriodUnit($periodUnit)
    {
        $this->container['periodUnit'] = $periodUnit;
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

