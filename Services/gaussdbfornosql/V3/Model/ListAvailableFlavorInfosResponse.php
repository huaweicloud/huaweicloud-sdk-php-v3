<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailableFlavorInfosResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailableFlavorInfosResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * currentFlavor  currentFlavor
    * optionalFlavors  optionalFlavors
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'currentFlavor' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ComputeFlavor',
            'optionalFlavors' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\OptionalFlavorsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * currentFlavor  currentFlavor
    * optionalFlavors  optionalFlavors
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'currentFlavor' => null,
        'optionalFlavors' => null
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * currentFlavor  currentFlavor
    * optionalFlavors  optionalFlavors
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'currentFlavor' => 'current_flavor',
            'optionalFlavors' => 'optional_flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id。
    * instanceName  实例名称。
    * currentFlavor  currentFlavor
    * optionalFlavors  optionalFlavors
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'currentFlavor' => 'setCurrentFlavor',
            'optionalFlavors' => 'setOptionalFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id。
    * instanceName  实例名称。
    * currentFlavor  currentFlavor
    * optionalFlavors  optionalFlavors
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'currentFlavor' => 'getCurrentFlavor',
            'optionalFlavors' => 'getOptionalFlavors'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['currentFlavor'] = isset($data['currentFlavor']) ? $data['currentFlavor'] : null;
        $this->container['optionalFlavors'] = isset($data['optionalFlavors']) ? $data['optionalFlavors'] : null;
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
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets currentFlavor
    *  currentFlavor
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ComputeFlavor|null
    */
    public function getCurrentFlavor()
    {
        return $this->container['currentFlavor'];
    }

    /**
    * Sets currentFlavor
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ComputeFlavor|null $currentFlavor currentFlavor
    *
    * @return $this
    */
    public function setCurrentFlavor($currentFlavor)
    {
        $this->container['currentFlavor'] = $currentFlavor;
        return $this;
    }

    /**
    * Gets optionalFlavors
    *  optionalFlavors
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\OptionalFlavorsInfo|null
    */
    public function getOptionalFlavors()
    {
        return $this->container['optionalFlavors'];
    }

    /**
    * Sets optionalFlavors
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\OptionalFlavorsInfo|null $optionalFlavors optionalFlavors
    *
    * @return $this
    */
    public function setOptionalFlavors($optionalFlavors)
    {
        $this->container['optionalFlavors'] = $optionalFlavors;
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
