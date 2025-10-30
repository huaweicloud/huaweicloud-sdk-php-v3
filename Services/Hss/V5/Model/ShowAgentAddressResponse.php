<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentAddressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentAddressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * anpAddress  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    * regionId  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    * agentAddress  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'anpAddress' => 'string',
            'regionId' => 'string',
            'agentAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * anpAddress  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    * regionId  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    * agentAddress  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'anpAddress' => null,
        'regionId' => null,
        'agentAddress' => null
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
    * anpAddress  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    * regionId  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    * agentAddress  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'anpAddress' => 'anp_address',
            'regionId' => 'region_id',
            'agentAddress' => 'agent_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * anpAddress  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    * regionId  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    * agentAddress  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'anpAddress' => 'setAnpAddress',
            'regionId' => 'setRegionId',
            'agentAddress' => 'setAgentAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * anpAddress  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    * regionId  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    * agentAddress  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'anpAddress' => 'getAnpAddress',
            'regionId' => 'getRegionId',
            'agentAddress' => 'getAgentAddress'
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
        $this->container['anpAddress'] = isset($data['anpAddress']) ? $data['anpAddress'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['agentAddress'] = isset($data['agentAddress']) ? $data['agentAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['anpAddress']) && (mb_strlen($this->container['anpAddress']) > 256)) {
                $invalidProperties[] = "invalid value for 'anpAddress', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['anpAddress']) && (mb_strlen($this->container['anpAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'anpAddress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentAddress']) && (mb_strlen($this->container['agentAddress']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentAddress', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentAddress']) && (mb_strlen($this->container['agentAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentAddress', the character length must be bigger than or equal to 1.";
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
    * Gets anpAddress
    *  **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAnpAddress()
    {
        return $this->container['anpAddress'];
    }

    /**
    * Sets anpAddress
    *
    * @param string|null $anpAddress **参数解释**： pod_lb地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAnpAddress($anpAddress)
    {
        $this->container['anpAddress'] = $anpAddress;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId **参数解释**： region_id标识 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets agentAddress
    *  **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAgentAddress()
    {
        return $this->container['agentAddress'];
    }

    /**
    * Sets agentAddress
    *
    * @param string|null $agentAddress **参数解释**： 公网接入agent地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAgentAddress($agentAddress)
    {
        $this->container['agentAddress'] = $agentAddress;
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

