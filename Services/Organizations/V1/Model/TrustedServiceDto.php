<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrustedServiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrustedServiceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * servicePrincipal  可信服务的名称。
    * enabledAt  可信服务与组织集成的日期。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'servicePrincipal' => 'string',
            'enabledAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * servicePrincipal  可信服务的名称。
    * enabledAt  可信服务与组织集成的日期。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'servicePrincipal' => null,
        'enabledAt' => 'date-time'
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
    * servicePrincipal  可信服务的名称。
    * enabledAt  可信服务与组织集成的日期。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'servicePrincipal' => 'service_principal',
            'enabledAt' => 'enabled_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * servicePrincipal  可信服务的名称。
    * enabledAt  可信服务与组织集成的日期。
    *
    * @var string[]
    */
    protected static $setters = [
            'servicePrincipal' => 'setServicePrincipal',
            'enabledAt' => 'setEnabledAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * servicePrincipal  可信服务的名称。
    * enabledAt  可信服务与组织集成的日期。
    *
    * @var string[]
    */
    protected static $getters = [
            'servicePrincipal' => 'getServicePrincipal',
            'enabledAt' => 'getEnabledAt'
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
        $this->container['servicePrincipal'] = isset($data['servicePrincipal']) ? $data['servicePrincipal'] : null;
        $this->container['enabledAt'] = isset($data['enabledAt']) ? $data['enabledAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['servicePrincipal'] === null) {
            $invalidProperties[] = "'servicePrincipal' can't be null";
        }
            if ((mb_strlen($this->container['servicePrincipal']) > 100)) {
                $invalidProperties[] = "invalid value for 'servicePrincipal', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['servicePrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'servicePrincipal', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enabledAt'] === null) {
            $invalidProperties[] = "'enabledAt' can't be null";
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
    * Gets servicePrincipal
    *  可信服务的名称。
    *
    * @return string
    */
    public function getServicePrincipal()
    {
        return $this->container['servicePrincipal'];
    }

    /**
    * Sets servicePrincipal
    *
    * @param string $servicePrincipal 可信服务的名称。
    *
    * @return $this
    */
    public function setServicePrincipal($servicePrincipal)
    {
        $this->container['servicePrincipal'] = $servicePrincipal;
        return $this;
    }

    /**
    * Gets enabledAt
    *  可信服务与组织集成的日期。
    *
    * @return \DateTime
    */
    public function getEnabledAt()
    {
        return $this->container['enabledAt'];
    }

    /**
    * Sets enabledAt
    *
    * @param \DateTime $enabledAt 可信服务与组织集成的日期。
    *
    * @return $this
    */
    public function setEnabledAt($enabledAt)
    {
        $this->container['enabledAt'] = $enabledAt;
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

