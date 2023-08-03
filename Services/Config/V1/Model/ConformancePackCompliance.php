<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConformancePackCompliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConformancePackCompliance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * policyAssignmentCompliance  合规规则合规结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyAssignmentId' => 'string',
            'policyAssignmentName' => 'string',
            'policyAssignmentCompliance' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * policyAssignmentCompliance  合规规则合规结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyAssignmentId' => null,
        'policyAssignmentName' => null,
        'policyAssignmentCompliance' => null
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
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * policyAssignmentCompliance  合规规则合规结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyAssignmentId' => 'policy_assignment_id',
            'policyAssignmentName' => 'policy_assignment_name',
            'policyAssignmentCompliance' => 'policy_assignment_compliance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * policyAssignmentCompliance  合规规则合规结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'policyAssignmentId' => 'setPolicyAssignmentId',
            'policyAssignmentName' => 'setPolicyAssignmentName',
            'policyAssignmentCompliance' => 'setPolicyAssignmentCompliance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * policyAssignmentCompliance  合规规则合规结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'policyAssignmentId' => 'getPolicyAssignmentId',
            'policyAssignmentName' => 'getPolicyAssignmentName',
            'policyAssignmentCompliance' => 'getPolicyAssignmentCompliance'
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
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
        $this->container['policyAssignmentCompliance'] = isset($data['policyAssignmentCompliance']) ? $data['policyAssignmentCompliance'] : null;
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
    * Gets policyAssignmentId
    *  合规规则ID。
    *
    * @return string|null
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string|null $policyAssignmentId 合规规则ID。
    *
    * @return $this
    */
    public function setPolicyAssignmentId($policyAssignmentId)
    {
        $this->container['policyAssignmentId'] = $policyAssignmentId;
        return $this;
    }

    /**
    * Gets policyAssignmentName
    *  合规规则名称。
    *
    * @return string|null
    */
    public function getPolicyAssignmentName()
    {
        return $this->container['policyAssignmentName'];
    }

    /**
    * Sets policyAssignmentName
    *
    * @param string|null $policyAssignmentName 合规规则名称。
    *
    * @return $this
    */
    public function setPolicyAssignmentName($policyAssignmentName)
    {
        $this->container['policyAssignmentName'] = $policyAssignmentName;
        return $this;
    }

    /**
    * Gets policyAssignmentCompliance
    *  合规规则合规结果。
    *
    * @return string|null
    */
    public function getPolicyAssignmentCompliance()
    {
        return $this->container['policyAssignmentCompliance'];
    }

    /**
    * Sets policyAssignmentCompliance
    *
    * @param string|null $policyAssignmentCompliance 合规规则合规结果。
    *
    * @return $this
    */
    public function setPolicyAssignmentCompliance($policyAssignmentCompliance)
    {
        $this->container['policyAssignmentCompliance'] = $policyAssignmentCompliance;
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

