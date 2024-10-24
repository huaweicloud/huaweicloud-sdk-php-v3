<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostedCloud implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostedCloud';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostedCloud' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostedCloud' => null
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
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostedCloud' => 'hosted_cloud'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $setters = [
            'hostedCloud' => 'setHostedCloud'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $getters = [
            'hostedCloud' => 'getHostedCloud'
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
    const HOSTED_CLOUD_HW_CLOUD = 'HWCloud';
    const HOSTED_CLOUD_IRELAND = 'Ireland';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostedCloudAllowableValues()
    {
        return [
            self::HOSTED_CLOUD_HW_CLOUD,
            self::HOSTED_CLOUD_IRELAND,
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
        $this->container['hostedCloud'] = isset($data['hostedCloud']) ? $data['hostedCloud'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostedCloud'] === null) {
            $invalidProperties[] = "'hostedCloud' can't be null";
        }
            $allowedValues = $this->getHostedCloudAllowableValues();
                if (!is_null($this->container['hostedCloud']) && !in_array($this->container['hostedCloud'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostedCloud', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets hostedCloud
    *  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @return string
    */
    public function getHostedCloud()
    {
        return $this->container['hostedCloud'];
    }

    /**
    * Sets hostedCloud
    *
    * @param string $hostedCloud - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @return $this
    */
    public function setHostedCloud($hostedCloud)
    {
        $this->container['hostedCloud'] = $hostedCloud;
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

