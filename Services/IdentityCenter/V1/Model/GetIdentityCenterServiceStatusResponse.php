<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetIdentityCenterServiceStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetIdentityCenterServiceStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceStatus  IAM身份中心服务实例状态
    * serviceStatusReasons  IAM身份中心服务实例状态呈现原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceStatus' => 'string',
            'serviceStatusReasons' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceStatus  IAM身份中心服务实例状态
    * serviceStatusReasons  IAM身份中心服务实例状态呈现原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceStatus' => null,
        'serviceStatusReasons' => null
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
    * serviceStatus  IAM身份中心服务实例状态
    * serviceStatusReasons  IAM身份中心服务实例状态呈现原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceStatus' => 'serviceStatus',
            'serviceStatusReasons' => 'serviceStatusReasons'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceStatus  IAM身份中心服务实例状态
    * serviceStatusReasons  IAM身份中心服务实例状态呈现原因
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceStatus' => 'setServiceStatus',
            'serviceStatusReasons' => 'setServiceStatusReasons'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceStatus  IAM身份中心服务实例状态
    * serviceStatusReasons  IAM身份中心服务实例状态呈现原因
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceStatus' => 'getServiceStatus',
            'serviceStatusReasons' => 'getServiceStatusReasons'
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
    const SERVICE_STATUS_ENABLED = 'ENABLED';
    const SERVICE_STATUS_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceStatusAllowableValues()
    {
        return [
            self::SERVICE_STATUS_ENABLED,
            self::SERVICE_STATUS_DISABLED,
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
        $this->container['serviceStatus'] = isset($data['serviceStatus']) ? $data['serviceStatus'] : null;
        $this->container['serviceStatusReasons'] = isset($data['serviceStatusReasons']) ? $data['serviceStatusReasons'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getServiceStatusAllowableValues();
                if (!is_null($this->container['serviceStatus']) && !in_array($this->container['serviceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceStatus', must be one of '%s'",
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
    * Gets serviceStatus
    *  IAM身份中心服务实例状态
    *
    * @return string|null
    */
    public function getServiceStatus()
    {
        return $this->container['serviceStatus'];
    }

    /**
    * Sets serviceStatus
    *
    * @param string|null $serviceStatus IAM身份中心服务实例状态
    *
    * @return $this
    */
    public function setServiceStatus($serviceStatus)
    {
        $this->container['serviceStatus'] = $serviceStatus;
        return $this;
    }

    /**
    * Gets serviceStatusReasons
    *  IAM身份中心服务实例状态呈现原因
    *
    * @return string[]|null
    */
    public function getServiceStatusReasons()
    {
        return $this->container['serviceStatusReasons'];
    }

    /**
    * Sets serviceStatusReasons
    *
    * @param string[]|null $serviceStatusReasons IAM身份中心服务实例状态呈现原因
    *
    * @return $this
    */
    public function setServiceStatusReasons($serviceStatusReasons)
    {
        $this->container['serviceStatusReasons'] = $serviceStatusReasons;
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

