<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagPolicyServiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagPolicyServiceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  The service name of the service.
    * resourceTypes  resourceTypes
    * supportAll  resource_type是否支持全量选择，即*
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'resourceTypes' => 'string[]',
            'supportAll' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  The service name of the service.
    * resourceTypes  resourceTypes
    * supportAll  resource_type是否支持全量选择，即*
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'resourceTypes' => null,
        'supportAll' => null
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
    * serviceName  The service name of the service.
    * resourceTypes  resourceTypes
    * supportAll  resource_type是否支持全量选择，即*
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'resourceTypes' => 'resource_types',
            'supportAll' => 'support_all'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  The service name of the service.
    * resourceTypes  resourceTypes
    * supportAll  resource_type是否支持全量选择，即*
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'resourceTypes' => 'setResourceTypes',
            'supportAll' => 'setSupportAll'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  The service name of the service.
    * resourceTypes  resourceTypes
    * supportAll  resource_type是否支持全量选择，即*
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'resourceTypes' => 'getResourceTypes',
            'supportAll' => 'getSupportAll'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['supportAll'] = isset($data['supportAll']) ? $data['supportAll'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
            if ((mb_strlen($this->container['serviceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^\\w+$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^\\w+$/.";
            }
        if ($this->container['resourceTypes'] === null) {
            $invalidProperties[] = "'resourceTypes' can't be null";
        }
        if ($this->container['supportAll'] === null) {
            $invalidProperties[] = "'supportAll' can't be null";
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
    * Gets serviceName
    *  The service name of the service.
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName The service name of the service.
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  resourceTypes
    *
    * @return string[]
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[] $resourceTypes resourceTypes
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
        return $this;
    }

    /**
    * Gets supportAll
    *  resource_type是否支持全量选择，即*
    *
    * @return bool
    */
    public function getSupportAll()
    {
        return $this->container['supportAll'];
    }

    /**
    * Sets supportAll
    *
    * @param bool $supportAll resource_type是否支持全量选择，即*
    *
    * @return $this
    */
    public function setSupportAll($supportAll)
    {
        $this->container['supportAll'] = $supportAll;
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

