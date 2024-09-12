<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicScriptPropertiesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicScriptPropertiesModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskLevel' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskLevel' => null,
        'version' => null
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
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskLevel' => 'risk_level',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'riskLevel' => 'setRiskLevel',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'riskLevel' => 'getRiskLevel',
            'version' => 'getVersion'
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
    const RISK_LEVEL_LOW = 'LOW';
    const RISK_LEVEL_MEDIUM = 'MEDIUM';
    const RISK_LEVEL_HIGH = 'HIGH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_LOW,
            self::RISK_LEVEL_MEDIUM,
            self::RISK_LEVEL_HIGH,
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
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 10)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets riskLevel
    *  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets version
    *  脚本版本号
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 脚本版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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
