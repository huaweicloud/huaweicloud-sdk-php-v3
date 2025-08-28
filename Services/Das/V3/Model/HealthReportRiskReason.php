<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportRiskReason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportRiskReason';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reasonCode  可能原因编码。
    * reasonContent  可能原因内容。
    * suggestions  建议优化措施列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reasonCode' => 'string',
            'reasonContent' => 'string',
            'suggestions' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskSuggestion[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reasonCode  可能原因编码。
    * reasonContent  可能原因内容。
    * suggestions  建议优化措施列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reasonCode' => null,
        'reasonContent' => null,
        'suggestions' => null
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
    * reasonCode  可能原因编码。
    * reasonContent  可能原因内容。
    * suggestions  建议优化措施列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reasonCode' => 'reason_code',
            'reasonContent' => 'reason_content',
            'suggestions' => 'suggestions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reasonCode  可能原因编码。
    * reasonContent  可能原因内容。
    * suggestions  建议优化措施列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'reasonCode' => 'setReasonCode',
            'reasonContent' => 'setReasonContent',
            'suggestions' => 'setSuggestions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reasonCode  可能原因编码。
    * reasonContent  可能原因内容。
    * suggestions  建议优化措施列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'reasonCode' => 'getReasonCode',
            'reasonContent' => 'getReasonContent',
            'suggestions' => 'getSuggestions'
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
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['reasonContent'] = isset($data['reasonContent']) ? $data['reasonContent'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reasonCode'] === null) {
            $invalidProperties[] = "'reasonCode' can't be null";
        }
        if ($this->container['reasonContent'] === null) {
            $invalidProperties[] = "'reasonContent' can't be null";
        }
        if ($this->container['suggestions'] === null) {
            $invalidProperties[] = "'suggestions' can't be null";
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
    * Gets reasonCode
    *  可能原因编码。
    *
    * @return string
    */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
    * Sets reasonCode
    *
    * @param string $reasonCode 可能原因编码。
    *
    * @return $this
    */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;
        return $this;
    }

    /**
    * Gets reasonContent
    *  可能原因内容。
    *
    * @return string
    */
    public function getReasonContent()
    {
        return $this->container['reasonContent'];
    }

    /**
    * Sets reasonContent
    *
    * @param string $reasonContent 可能原因内容。
    *
    * @return $this
    */
    public function setReasonContent($reasonContent)
    {
        $this->container['reasonContent'] = $reasonContent;
        return $this;
    }

    /**
    * Gets suggestions
    *  建议优化措施列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskSuggestion[]
    */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
    * Sets suggestions
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportRiskSuggestion[] $suggestions 建议优化措施列表。
    *
    * @return $this
    */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;
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

