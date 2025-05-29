<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RenewResourceConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RenewResourceConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    * configValue  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'configValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    * configValue  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'configValue' => null
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
    * configName  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    * configValue  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'configValue' => 'config_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    * configValue  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'configValue' => 'setConfigValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    * configValue  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'configValue' => 'getConfigValue'
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
    const CONFIG_NAME_DEDUCTION_DATE = 'DEDUCTION_DATE';
    const CONFIG_NAME_EXPIRE_DATE = 'EXPIRE_DATE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigNameAllowableValues()
    {
        return [
            self::CONFIG_NAME_DEDUCTION_DATE,
            self::CONFIG_NAME_EXPIRE_DATE,
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configName'] === null) {
            $invalidProperties[] = "'configName' can't be null";
        }
            $allowedValues = $this->getConfigNameAllowableValues();
                if (!is_null($this->container['configName']) && !in_array($this->container['configName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['configValue'] === null) {
            $invalidProperties[] = "'configValue' can't be null";
        }
            if ((mb_strlen($this->container['configValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['configValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'configValue', the character length must be bigger than or equal to 1.";
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
    * Gets configName
    *  |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    *
    * @return string
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string $configName |参数名称：续订资源设置属性类型| |参数的约束及描述：该参数必填，设置类型，支持枚举| |DEDUCTION_DATE：设置自动续费扣款日，EXPIRE_DATE：设置续费后资源统一到期日|
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets configValue
    *  |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @return string
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string $configValue |参数名称：续订资源设置属性值| |参数约束及描述：该参数必填，当config_name值为DEDUCTION_DATE时，支持设置资源到期前2天至前7天自动扣款，config_value范围：2，3，4，5，6，7。 当config_name值为EXPIRE_DATE时，支持设置统一到期日为每个月的同一天（1~28号及每个月最后一天），config_value范围：1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23，24，25，26，27，28，-1|
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
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

