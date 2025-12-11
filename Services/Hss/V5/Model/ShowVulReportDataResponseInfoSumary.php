<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulReportDataResponseInfoSumary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulReportDataResponseInfo_sumary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulNumRepairNecessity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulNumRepairNecessity' => 'int32'
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
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulNumRepairNecessity' => 'vul_num_repair_necessity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $setters = [
            'vulNumRepairNecessity' => 'setVulNumRepairNecessity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $getters = [
            'vulNumRepairNecessity' => 'getVulNumRepairNecessity'
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
        $this->container['vulNumRepairNecessity'] = isset($data['vulNumRepairNecessity']) ? $data['vulNumRepairNecessity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulNumRepairNecessity']) && ($this->container['vulNumRepairNecessity'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumRepairNecessity', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumRepairNecessity']) && ($this->container['vulNumRepairNecessity'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumRepairNecessity', must be bigger than or equal to 0.";
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
    * Gets vulNumRepairNecessity
    *  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumRepairNecessity()
    {
        return $this->container['vulNumRepairNecessity'];
    }

    /**
    * Sets vulNumRepairNecessity
    *
    * @param int|null $vulNumRepairNecessity **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumRepairNecessity($vulNumRepairNecessity)
    {
        $this->container['vulNumRepairNecessity'] = $vulNumRepairNecessity;
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

