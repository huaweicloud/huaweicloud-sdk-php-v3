<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckScriptRiskResData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckScriptRiskRes_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskLevel  风险等级。
    * blacklistCommands  黑名单列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskLevel' => 'string',
            'blacklistCommands' => '\HuaweiCloud\SDK\Coc\V1\Model\CheckScriptRiskResDataBlacklistCommands[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskLevel  风险等级。
    * blacklistCommands  黑名单列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskLevel' => null,
        'blacklistCommands' => null
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
    * riskLevel  风险等级。
    * blacklistCommands  黑名单列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskLevel' => 'risk_level',
            'blacklistCommands' => 'blacklist_commands'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskLevel  风险等级。
    * blacklistCommands  黑名单列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'riskLevel' => 'setRiskLevel',
            'blacklistCommands' => 'setBlacklistCommands'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskLevel  风险等级。
    * blacklistCommands  黑名单列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'riskLevel' => 'getRiskLevel',
            'blacklistCommands' => 'getBlacklistCommands'
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
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['blacklistCommands'] = isset($data['blacklistCommands']) ? $data['blacklistCommands'] : null;
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
            if ((mb_strlen($this->container['riskLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
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
    *  风险等级。
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
    * @param string $riskLevel 风险等级。
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets blacklistCommands
    *  黑名单列表。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CheckScriptRiskResDataBlacklistCommands[]|null
    */
    public function getBlacklistCommands()
    {
        return $this->container['blacklistCommands'];
    }

    /**
    * Sets blacklistCommands
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CheckScriptRiskResDataBlacklistCommands[]|null $blacklistCommands 黑名单列表。
    *
    * @return $this
    */
    public function setBlacklistCommands($blacklistCommands)
    {
        $this->container['blacklistCommands'] = $blacklistCommands;
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

