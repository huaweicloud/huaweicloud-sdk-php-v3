<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregatePolicyAssignmentDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregatePolicyAssignmentDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggregatorId  资源聚合器ID
    * accountId  租户ID
    * policyAssignmentId  合规规则ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggregatorId' => 'string',
            'accountId' => 'string',
            'policyAssignmentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggregatorId  资源聚合器ID
    * accountId  租户ID
    * policyAssignmentId  合规规则ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggregatorId' => null,
        'accountId' => null,
        'policyAssignmentId' => null
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
    * aggregatorId  资源聚合器ID
    * accountId  租户ID
    * policyAssignmentId  合规规则ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggregatorId' => 'aggregator_id',
            'accountId' => 'account_id',
            'policyAssignmentId' => 'policy_assignment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggregatorId  资源聚合器ID
    * accountId  租户ID
    * policyAssignmentId  合规规则ID
    *
    * @var string[]
    */
    protected static $setters = [
            'aggregatorId' => 'setAggregatorId',
            'accountId' => 'setAccountId',
            'policyAssignmentId' => 'setPolicyAssignmentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggregatorId  资源聚合器ID
    * accountId  租户ID
    * policyAssignmentId  合规规则ID
    *
    * @var string[]
    */
    protected static $getters = [
            'aggregatorId' => 'getAggregatorId',
            'accountId' => 'getAccountId',
            'policyAssignmentId' => 'getPolicyAssignmentId'
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
        $this->container['aggregatorId'] = isset($data['aggregatorId']) ? $data['aggregatorId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aggregatorId'] === null) {
            $invalidProperties[] = "'aggregatorId' can't be null";
        }
            if ((mb_strlen($this->container['aggregatorId']) > 256)) {
                $invalidProperties[] = "invalid value for 'aggregatorId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['aggregatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'aggregatorId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['aggregatorId'])) {
                $invalidProperties[] = "invalid value for 'aggregatorId', must be conform to the pattern /[\\w-]+/.";
            }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if ((mb_strlen($this->container['accountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /[\\w-]+/.";
            }
        if ($this->container['policyAssignmentId'] === null) {
            $invalidProperties[] = "'policyAssignmentId' can't be null";
        }
            if ((mb_strlen($this->container['policyAssignmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'policyAssignmentId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['policyAssignmentId'])) {
                $invalidProperties[] = "invalid value for 'policyAssignmentId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets aggregatorId
    *  资源聚合器ID
    *
    * @return string
    */
    public function getAggregatorId()
    {
        return $this->container['aggregatorId'];
    }

    /**
    * Sets aggregatorId
    *
    * @param string $aggregatorId 资源聚合器ID
    *
    * @return $this
    */
    public function setAggregatorId($aggregatorId)
    {
        $this->container['aggregatorId'] = $aggregatorId;
        return $this;
    }

    /**
    * Gets accountId
    *  租户ID
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId 租户ID
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets policyAssignmentId
    *  合规规则ID
    *
    * @return string
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string $policyAssignmentId 合规规则ID
    *
    * @return $this
    */
    public function setPolicyAssignmentId($policyAssignmentId)
    {
        $this->container['policyAssignmentId'] = $policyAssignmentId;
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

