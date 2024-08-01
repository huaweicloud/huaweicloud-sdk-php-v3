<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FindingFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FindingFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * criterion  criterion
    * key  过滤键。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'criterion' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Criterion',
            'key' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * criterion  criterion
    * key  过滤键。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'criterion' => null,
        'key' => null
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
    * criterion  criterion
    * key  过滤键。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'criterion' => 'criterion',
            'key' => 'key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * criterion  criterion
    * key  过滤键。
    *
    * @var string[]
    */
    protected static $setters = [
            'criterion' => 'setCriterion',
            'key' => 'setKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * criterion  criterion
    * key  过滤键。
    *
    * @var string[]
    */
    protected static $getters = [
            'criterion' => 'getCriterion',
            'key' => 'getKey'
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
    const KEY_RESOURCE = 'resource';
    const KEY_RESOURCE_TYPE = 'resource_type';
    const KEY_RESOURCE_OWNER_ACCOUNT = 'resource_owner_account';
    const KEY_IS_PUBLIC = 'is_public';
    const KEY_ID = 'id';
    const KEY_STATUS = 'status';
    const KEY_PRINCIPAL_TYPE = 'principal_type';
    const KEY_PRINCIPAL_IDENTIFIER = 'principal_identifier';
    const KEY_CHANGE_TYPE = 'change_type';
    const KEY_EXISTING_FINDING_ID = 'existing_finding_id';
    const KEY_EXISTING_FINDING_STATUS = 'existing_finding_status';
    const KEY_CONDITION_GPRINCIPAL_URN = 'condition.g:PrincipalUrn';
    const KEY_CONDITION_GPRINCIPAL_ID = 'condition.g:PrincipalId';
    const KEY_CONDITION_GPRINCIPAL_ACCOUNT = 'condition.g:PrincipalAccount';
    const KEY_CONDITION_GPRINCIPAL_ORG_ID = 'condition.g:PrincipalOrgId';
    const KEY_CONDITION_GPRINCIPAL_ORG_PATH = 'condition.g:PrincipalOrgPath';
    const KEY_CONDITION_GPRINCIPAL_ORG_MANAGEMENT_ACCOUNT_ID = 'condition.g:PrincipalOrgManagementAccountId';
    const KEY_CONDITION_GSOURCE_IP = 'condition.g:SourceIp';
    const KEY_CONDITION_GSOURCE_VPC = 'condition.g:SourceVpc';
    const KEY_CONDITION_GSOURCE_VPCE = 'condition.g:SourceVpce';
    const KEY_FINDING_TYPE = 'finding_type';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_RESOURCE,
            self::KEY_RESOURCE_TYPE,
            self::KEY_RESOURCE_OWNER_ACCOUNT,
            self::KEY_IS_PUBLIC,
            self::KEY_ID,
            self::KEY_STATUS,
            self::KEY_PRINCIPAL_TYPE,
            self::KEY_PRINCIPAL_IDENTIFIER,
            self::KEY_CHANGE_TYPE,
            self::KEY_EXISTING_FINDING_ID,
            self::KEY_EXISTING_FINDING_STATUS,
            self::KEY_CONDITION_GPRINCIPAL_URN,
            self::KEY_CONDITION_GPRINCIPAL_ID,
            self::KEY_CONDITION_GPRINCIPAL_ACCOUNT,
            self::KEY_CONDITION_GPRINCIPAL_ORG_ID,
            self::KEY_CONDITION_GPRINCIPAL_ORG_PATH,
            self::KEY_CONDITION_GPRINCIPAL_ORG_MANAGEMENT_ACCOUNT_ID,
            self::KEY_CONDITION_GSOURCE_IP,
            self::KEY_CONDITION_GSOURCE_VPC,
            self::KEY_CONDITION_GSOURCE_VPCE,
            self::KEY_FINDING_TYPE,
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
        $this->container['criterion'] = isset($data['criterion']) ? $data['criterion'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['criterion'] === null) {
            $invalidProperties[] = "'criterion' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            $allowedValues = $this->getKeyAllowableValues();
                if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'key', must be one of '%s'",
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
    * Gets criterion
    *  criterion
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Criterion
    */
    public function getCriterion()
    {
        return $this->container['criterion'];
    }

    /**
    * Sets criterion
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Criterion $criterion criterion
    *
    * @return $this
    */
    public function setCriterion($criterion)
    {
        $this->container['criterion'] = $criterion;
        return $this;
    }

    /**
    * Gets key
    *  过滤键。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 过滤键。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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

