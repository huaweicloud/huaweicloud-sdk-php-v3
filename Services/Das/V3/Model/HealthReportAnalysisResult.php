<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportAnalysisResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportAnalysisResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskCode  风险点编码。
    * riskLevel  风险点级别。
    * riskContent  风险点内容。
    * reasons  可能原因列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskCode' => 'string',
            'riskLevel' => 'string',
            'riskContent' => 'string',
            'reasons' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskReason[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskCode  风险点编码。
    * riskLevel  风险点级别。
    * riskContent  风险点内容。
    * reasons  可能原因列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskCode' => null,
        'riskLevel' => null,
        'riskContent' => null,
        'reasons' => null
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
    * riskCode  风险点编码。
    * riskLevel  风险点级别。
    * riskContent  风险点内容。
    * reasons  可能原因列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskCode' => 'risk_code',
            'riskLevel' => 'risk_level',
            'riskContent' => 'risk_content',
            'reasons' => 'reasons'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskCode  风险点编码。
    * riskLevel  风险点级别。
    * riskContent  风险点内容。
    * reasons  可能原因列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'riskCode' => 'setRiskCode',
            'riskLevel' => 'setRiskLevel',
            'riskContent' => 'setRiskContent',
            'reasons' => 'setReasons'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskCode  风险点编码。
    * riskLevel  风险点级别。
    * riskContent  风险点内容。
    * reasons  可能原因列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'riskCode' => 'getRiskCode',
            'riskLevel' => 'getRiskLevel',
            'riskContent' => 'getRiskContent',
            'reasons' => 'getReasons'
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
        $this->container['riskCode'] = isset($data['riskCode']) ? $data['riskCode'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['riskContent'] = isset($data['riskContent']) ? $data['riskContent'] : null;
        $this->container['reasons'] = isset($data['reasons']) ? $data['reasons'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskCode'] === null) {
            $invalidProperties[] = "'riskCode' can't be null";
        }
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
        if ($this->container['riskContent'] === null) {
            $invalidProperties[] = "'riskContent' can't be null";
        }
        if ($this->container['reasons'] === null) {
            $invalidProperties[] = "'reasons' can't be null";
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
    * Gets riskCode
    *  风险点编码。
    *
    * @return string
    */
    public function getRiskCode()
    {
        return $this->container['riskCode'];
    }

    /**
    * Sets riskCode
    *
    * @param string $riskCode 风险点编码。
    *
    * @return $this
    */
    public function setRiskCode($riskCode)
    {
        $this->container['riskCode'] = $riskCode;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险点级别。
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
    * @param string $riskLevel 风险点级别。
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets riskContent
    *  风险点内容。
    *
    * @return string
    */
    public function getRiskContent()
    {
        return $this->container['riskContent'];
    }

    /**
    * Sets riskContent
    *
    * @param string $riskContent 风险点内容。
    *
    * @return $this
    */
    public function setRiskContent($riskContent)
    {
        $this->container['riskContent'] = $riskContent;
        return $this;
    }

    /**
    * Gets reasons
    *  可能原因列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskReason[]
    */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
    * Sets reasons
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskReason[] $reasons 可能原因列表。
    *
    * @return $this
    */
    public function setReasons($reasons)
    {
        $this->container['reasons'] = $reasons;
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

