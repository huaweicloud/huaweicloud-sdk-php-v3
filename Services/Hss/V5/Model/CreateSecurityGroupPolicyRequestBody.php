<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecurityGroupPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecurityGroupPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * securityGroups  安全组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'workloadId' => 'string',
            'workloadName' => 'string',
            'workloadType' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * securityGroups  安全组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'workloadId' => null,
        'workloadName' => null,
        'workloadType' => null,
        'securityGroups' => null
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
    * policyName  策略名称
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * securityGroups  安全组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'workloadId' => 'workload_id',
            'workloadName' => 'workload_name',
            'workloadType' => 'workload_type',
            'securityGroups' => 'security_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * securityGroups  安全组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'workloadId' => 'setWorkloadId',
            'workloadName' => 'setWorkloadName',
            'workloadType' => 'setWorkloadType',
            'securityGroups' => 'setSecurityGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * securityGroups  安全组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'workloadId' => 'getWorkloadId',
            'workloadName' => 'getWorkloadName',
            'workloadType' => 'getWorkloadType',
            'securityGroups' => 'getSecurityGroups'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workloadId'] === null) {
            $invalidProperties[] = "'workloadId' can't be null";
        }
            if ((mb_strlen($this->container['workloadId']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workloadName'] === null) {
            $invalidProperties[] = "'workloadName' can't be null";
        }
            if ((mb_strlen($this->container['workloadName']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workloadType'] === null) {
            $invalidProperties[] = "'workloadType' can't be null";
        }
            if ((mb_strlen($this->container['workloadType']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadType']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
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
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets workloadId
    *  工作负载ID
    *
    * @return string
    */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
    * Sets workloadId
    *
    * @param string $workloadId 工作负载ID
    *
    * @return $this
    */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;
        return $this;
    }

    /**
    * Gets workloadName
    *  工作负载名称
    *
    * @return string
    */
    public function getWorkloadName()
    {
        return $this->container['workloadName'];
    }

    /**
    * Sets workloadName
    *
    * @param string $workloadName 工作负载名称
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
        return $this;
    }

    /**
    * Gets workloadType
    *  工作负载类型
    *
    * @return string
    */
    public function getWorkloadType()
    {
        return $this->container['workloadType'];
    }

    /**
    * Sets workloadType
    *
    * @param string $workloadType 工作负载类型
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[] $securityGroups 安全组列表
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
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

