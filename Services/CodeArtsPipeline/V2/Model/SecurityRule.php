<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  severity
    * cve  cve
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleSeverity',
            'cve' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleCve'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  severity
    * cve  cve
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'cve' => null
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
    * severity  severity
    * cve  cve
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'cve' => 'cve'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  severity
    * cve  cve
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'cve' => 'setCve'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  severity
    * cve  cve
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'cve' => 'getCve'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['cve'] = isset($data['cve']) ? $data['cve'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleSeverity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleSeverity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets cve
    *  cve
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleCve|null
    */
    public function getCve()
    {
        return $this->container['cve'];
    }

    /**
    * Sets cve
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityRuleCve|null $cve cve
    *
    * @return $this
    */
    public function setCve($cve)
    {
        $this->container['cve'] = $cve;
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

