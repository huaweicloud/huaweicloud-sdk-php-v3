<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Compliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Compliance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * complianceState  合规结果。
    * resourceDetails  resourceDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'complianceState' => 'string',
            'resourceDetails' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * complianceState  合规结果。
    * resourceDetails  resourceDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'complianceState' => null,
        'resourceDetails' => null
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
    * complianceState  合规结果。
    * resourceDetails  resourceDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'complianceState' => 'compliance_state',
            'resourceDetails' => 'resource_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * complianceState  合规结果。
    * resourceDetails  resourceDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'complianceState' => 'setComplianceState',
            'resourceDetails' => 'setResourceDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * complianceState  合规结果。
    * resourceDetails  resourceDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'complianceState' => 'getComplianceState',
            'resourceDetails' => 'getResourceDetails'
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
        $this->container['complianceState'] = isset($data['complianceState']) ? $data['complianceState'] : null;
        $this->container['resourceDetails'] = isset($data['resourceDetails']) ? $data['resourceDetails'] : null;
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
    * Gets complianceState
    *  合规结果。
    *
    * @return string|null
    */
    public function getComplianceState()
    {
        return $this->container['complianceState'];
    }

    /**
    * Sets complianceState
    *
    * @param string|null $complianceState 合规结果。
    *
    * @return $this
    */
    public function setComplianceState($complianceState)
    {
        $this->container['complianceState'] = $complianceState;
        return $this;
    }

    /**
    * Gets resourceDetails
    *  resourceDetails
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null
    */
    public function getResourceDetails()
    {
        return $this->container['resourceDetails'];
    }

    /**
    * Sets resourceDetails
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null $resourceDetails resourceDetails
    *
    * @return $this
    */
    public function setResourceDetails($resourceDetails)
    {
        $this->container['resourceDetails'] = $resourceDetails;
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

