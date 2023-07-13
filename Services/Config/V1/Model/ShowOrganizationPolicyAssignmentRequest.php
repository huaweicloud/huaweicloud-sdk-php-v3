<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrganizationPolicyAssignmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrganizationPolicyAssignmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationId  组织ID。
    * organizationPolicyAssignmentId  组织合规规则ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationId' => 'string',
            'organizationPolicyAssignmentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationId  组织ID。
    * organizationPolicyAssignmentId  组织合规规则ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationId' => null,
        'organizationPolicyAssignmentId' => null
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
    * organizationId  组织ID。
    * organizationPolicyAssignmentId  组织合规规则ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationId' => 'organization_id',
            'organizationPolicyAssignmentId' => 'organization_policy_assignment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationId  组织ID。
    * organizationPolicyAssignmentId  组织合规规则ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationId' => 'setOrganizationId',
            'organizationPolicyAssignmentId' => 'setOrganizationPolicyAssignmentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationId  组织ID。
    * organizationPolicyAssignmentId  组织合规规则ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationId' => 'getOrganizationId',
            'organizationPolicyAssignmentId' => 'getOrganizationPolicyAssignmentId'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['organizationPolicyAssignmentId'] = isset($data['organizationPolicyAssignmentId']) ? $data['organizationPolicyAssignmentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 34)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
        if ($this->container['organizationPolicyAssignmentId'] === null) {
            $invalidProperties[] = "'organizationPolicyAssignmentId' can't be null";
        }
            if ((mb_strlen($this->container['organizationPolicyAssignmentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentId', the character length must be smaller than or equal to 32.";
            }
            if (!preg_match("/^[a-zA-Z\\d]+/", $this->container['organizationPolicyAssignmentId'])) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentId', must be conform to the pattern /^[a-zA-Z\\d]+/.";
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
    * Gets organizationId
    *  组织ID。
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织ID。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentId
    *  组织合规规则ID。
    *
    * @return string
    */
    public function getOrganizationPolicyAssignmentId()
    {
        return $this->container['organizationPolicyAssignmentId'];
    }

    /**
    * Sets organizationPolicyAssignmentId
    *
    * @param string $organizationPolicyAssignmentId 组织合规规则ID。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentId($organizationPolicyAssignmentId)
    {
        $this->container['organizationPolicyAssignmentId'] = $organizationPolicyAssignmentId;
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

