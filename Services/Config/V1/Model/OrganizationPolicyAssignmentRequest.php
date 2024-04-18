<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicyAssignmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicyAssignmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * excludedAccounts  需要排除配置规则的帐号。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * managedPolicyAssignmentMetadata  managedPolicyAssignmentMetadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'excludedAccounts' => 'string[]',
            'organizationPolicyAssignmentName' => 'string',
            'managedPolicyAssignmentMetadata' => '\HuaweiCloud\SDK\Config\V1\Model\ManagedPolicyAssignmentMetadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * excludedAccounts  需要排除配置规则的帐号。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * managedPolicyAssignmentMetadata  managedPolicyAssignmentMetadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'excludedAccounts' => null,
        'organizationPolicyAssignmentName' => null,
        'managedPolicyAssignmentMetadata' => null
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
    * excludedAccounts  需要排除配置规则的帐号。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * managedPolicyAssignmentMetadata  managedPolicyAssignmentMetadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'excludedAccounts' => 'excluded_accounts',
            'organizationPolicyAssignmentName' => 'organization_policy_assignment_name',
            'managedPolicyAssignmentMetadata' => 'managed_policy_assignment_metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * excludedAccounts  需要排除配置规则的帐号。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * managedPolicyAssignmentMetadata  managedPolicyAssignmentMetadata
    *
    * @var string[]
    */
    protected static $setters = [
            'excludedAccounts' => 'setExcludedAccounts',
            'organizationPolicyAssignmentName' => 'setOrganizationPolicyAssignmentName',
            'managedPolicyAssignmentMetadata' => 'setManagedPolicyAssignmentMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * excludedAccounts  需要排除配置规则的帐号。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * managedPolicyAssignmentMetadata  managedPolicyAssignmentMetadata
    *
    * @var string[]
    */
    protected static $getters = [
            'excludedAccounts' => 'getExcludedAccounts',
            'organizationPolicyAssignmentName' => 'getOrganizationPolicyAssignmentName',
            'managedPolicyAssignmentMetadata' => 'getManagedPolicyAssignmentMetadata'
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
        $this->container['excludedAccounts'] = isset($data['excludedAccounts']) ? $data['excludedAccounts'] : null;
        $this->container['organizationPolicyAssignmentName'] = isset($data['organizationPolicyAssignmentName']) ? $data['organizationPolicyAssignmentName'] : null;
        $this->container['managedPolicyAssignmentMetadata'] = isset($data['managedPolicyAssignmentMetadata']) ? $data['managedPolicyAssignmentMetadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationPolicyAssignmentName'] === null) {
            $invalidProperties[] = "'organizationPolicyAssignmentName' can't be null";
        }
            if ((mb_strlen($this->container['organizationPolicyAssignmentName']) > 60)) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentName', the character length must be smaller than or equal to 60.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/", $this->container['organizationPolicyAssignmentName'])) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/.";
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
    * Gets excludedAccounts
    *  需要排除配置规则的帐号。
    *
    * @return string[]|null
    */
    public function getExcludedAccounts()
    {
        return $this->container['excludedAccounts'];
    }

    /**
    * Sets excludedAccounts
    *
    * @param string[]|null $excludedAccounts 需要排除配置规则的帐号。
    *
    * @return $this
    */
    public function setExcludedAccounts($excludedAccounts)
    {
        $this->container['excludedAccounts'] = $excludedAccounts;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentName
    *  组织合规规则名称。
    *
    * @return string
    */
    public function getOrganizationPolicyAssignmentName()
    {
        return $this->container['organizationPolicyAssignmentName'];
    }

    /**
    * Sets organizationPolicyAssignmentName
    *
    * @param string $organizationPolicyAssignmentName 组织合规规则名称。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentName($organizationPolicyAssignmentName)
    {
        $this->container['organizationPolicyAssignmentName'] = $organizationPolicyAssignmentName;
        return $this;
    }

    /**
    * Gets managedPolicyAssignmentMetadata
    *  managedPolicyAssignmentMetadata
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ManagedPolicyAssignmentMetadata|null
    */
    public function getManagedPolicyAssignmentMetadata()
    {
        return $this->container['managedPolicyAssignmentMetadata'];
    }

    /**
    * Sets managedPolicyAssignmentMetadata
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ManagedPolicyAssignmentMetadata|null $managedPolicyAssignmentMetadata managedPolicyAssignmentMetadata
    *
    * @return $this
    */
    public function setManagedPolicyAssignmentMetadata($managedPolicyAssignmentMetadata)
    {
        $this->container['managedPolicyAssignmentMetadata'] = $managedPolicyAssignmentMetadata;
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

