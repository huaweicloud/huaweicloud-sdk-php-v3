<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GcbSlaLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GcbSlaLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'slaLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'slaLevel' => null
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
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'slaLevel' => 'sla_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @var string[]
    */
    protected static $setters = [
            'slaLevel' => 'setSlaLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @var string[]
    */
    protected static $getters = [
            'slaLevel' => 'getSlaLevel'
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
    const SLA_LEVEL_PT = 'Pt';
    const SLA_LEVEL_AU = 'Au';
    const SLA_LEVEL_AG = 'Ag';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaLevelAllowableValues()
    {
        return [
            self::SLA_LEVEL_PT,
            self::SLA_LEVEL_AU,
            self::SLA_LEVEL_AG,
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
        $this->container['slaLevel'] = isset($data['slaLevel']) ? $data['slaLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSlaLevelAllowableValues();
                if (!is_null($this->container['slaLevel']) && !in_array($this->container['slaLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'slaLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) > 36)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be bigger than or equal to 1.";
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
    * Gets slaLevel
    *  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return string|null
    */
    public function getSlaLevel()
    {
        return $this->container['slaLevel'];
    }

    /**
    * Sets slaLevel
    *
    * @param string|null $slaLevel 功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return $this
    */
    public function setSlaLevel($slaLevel)
    {
        $this->container['slaLevel'] = $slaLevel;
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

