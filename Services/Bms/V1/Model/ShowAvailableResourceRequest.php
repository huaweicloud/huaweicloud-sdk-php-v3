<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAvailableResourceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAvailableResourceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  availabilityZone
    * flavorId  flavorId
    * decProjectId  decProjectId
    * checkLimit  checkLimit
    * expectation  expectation
    * resourceType  resourceType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string[]',
            'flavorId' => 'string[]',
            'decProjectId' => 'string[]',
            'checkLimit' => 'string[]',
            'expectation' => 'string[]',
            'resourceType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  availabilityZone
    * flavorId  flavorId
    * decProjectId  decProjectId
    * checkLimit  checkLimit
    * expectation  expectation
    * resourceType  resourceType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'flavorId' => null,
        'decProjectId' => null,
        'checkLimit' => null,
        'expectation' => null,
        'resourceType' => null
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
    * availabilityZone  availabilityZone
    * flavorId  flavorId
    * decProjectId  decProjectId
    * checkLimit  checkLimit
    * expectation  expectation
    * resourceType  resourceType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'flavorId' => 'flavor_id',
            'decProjectId' => 'dec_project_id',
            'checkLimit' => 'check_limit',
            'expectation' => 'expectation',
            'resourceType' => 'resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  availabilityZone
    * flavorId  flavorId
    * decProjectId  decProjectId
    * checkLimit  checkLimit
    * expectation  expectation
    * resourceType  resourceType
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'flavorId' => 'setFlavorId',
            'decProjectId' => 'setDecProjectId',
            'checkLimit' => 'setCheckLimit',
            'expectation' => 'setExpectation',
            'resourceType' => 'setResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  availabilityZone
    * flavorId  flavorId
    * decProjectId  decProjectId
    * checkLimit  checkLimit
    * expectation  expectation
    * resourceType  resourceType
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'flavorId' => 'getFlavorId',
            'decProjectId' => 'getDecProjectId',
            'checkLimit' => 'getCheckLimit',
            'expectation' => 'getExpectation',
            'resourceType' => 'getResourceType'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['decProjectId'] = isset($data['decProjectId']) ? $data['decProjectId'] : null;
        $this->container['checkLimit'] = isset($data['checkLimit']) ? $data['checkLimit'] : null;
        $this->container['expectation'] = isset($data['expectation']) ? $data['expectation'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
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
    * Gets availabilityZone
    *  availabilityZone
    *
    * @return string[]
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string[] $availabilityZone availabilityZone
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets flavorId
    *  flavorId
    *
    * @return string[]|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string[]|null $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets decProjectId
    *  decProjectId
    *
    * @return string[]|null
    */
    public function getDecProjectId()
    {
        return $this->container['decProjectId'];
    }

    /**
    * Sets decProjectId
    *
    * @param string[]|null $decProjectId decProjectId
    *
    * @return $this
    */
    public function setDecProjectId($decProjectId)
    {
        $this->container['decProjectId'] = $decProjectId;
        return $this;
    }

    /**
    * Gets checkLimit
    *  checkLimit
    *
    * @return string[]|null
    */
    public function getCheckLimit()
    {
        return $this->container['checkLimit'];
    }

    /**
    * Sets checkLimit
    *
    * @param string[]|null $checkLimit checkLimit
    *
    * @return $this
    */
    public function setCheckLimit($checkLimit)
    {
        $this->container['checkLimit'] = $checkLimit;
        return $this;
    }

    /**
    * Gets expectation
    *  expectation
    *
    * @return string[]|null
    */
    public function getExpectation()
    {
        return $this->container['expectation'];
    }

    /**
    * Sets expectation
    *
    * @param string[]|null $expectation expectation
    *
    * @return $this
    */
    public function setExpectation($expectation)
    {
        $this->container['expectation'] = $expectation;
        return $this;
    }

    /**
    * Gets resourceType
    *  resourceType
    *
    * @return string[]|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string[]|null $resourceType resourceType
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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

