<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityGroupPolicyResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityGroupPolicyResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略Id
    * policyName  策略名称
    * podSelector  选择器
    * securityGroups  安全组列表
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * namespaceId  命名空间id
    * namespace  命名空间
    * createTime  创建时间
    * policyContent  策略yaml格式内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'podSelector' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[]',
            'workloadId' => 'string',
            'workloadName' => 'string',
            'workloadType' => 'string',
            'namespaceId' => 'string',
            'namespace' => 'string',
            'createTime' => 'string',
            'policyContent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略Id
    * policyName  策略名称
    * podSelector  选择器
    * securityGroups  安全组列表
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * namespaceId  命名空间id
    * namespace  命名空间
    * createTime  创建时间
    * policyContent  策略yaml格式内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'podSelector' => null,
        'securityGroups' => null,
        'workloadId' => null,
        'workloadName' => null,
        'workloadType' => null,
        'namespaceId' => null,
        'namespace' => null,
        'createTime' => null,
        'policyContent' => null
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
    * policyId  策略Id
    * policyName  策略名称
    * podSelector  选择器
    * securityGroups  安全组列表
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * namespaceId  命名空间id
    * namespace  命名空间
    * createTime  创建时间
    * policyContent  策略yaml格式内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'podSelector' => 'pod_selector',
            'securityGroups' => 'security_groups',
            'workloadId' => 'workload_id',
            'workloadName' => 'workload_name',
            'workloadType' => 'workload_type',
            'namespaceId' => 'namespace_id',
            'namespace' => 'namespace',
            'createTime' => 'create_time',
            'policyContent' => 'policy_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略Id
    * policyName  策略名称
    * podSelector  选择器
    * securityGroups  安全组列表
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * namespaceId  命名空间id
    * namespace  命名空间
    * createTime  创建时间
    * policyContent  策略yaml格式内容
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'podSelector' => 'setPodSelector',
            'securityGroups' => 'setSecurityGroups',
            'workloadId' => 'setWorkloadId',
            'workloadName' => 'setWorkloadName',
            'workloadType' => 'setWorkloadType',
            'namespaceId' => 'setNamespaceId',
            'namespace' => 'setNamespace',
            'createTime' => 'setCreateTime',
            'policyContent' => 'setPolicyContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略Id
    * policyName  策略名称
    * podSelector  选择器
    * securityGroups  安全组列表
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型
    * namespaceId  命名空间id
    * namespace  命名空间
    * createTime  创建时间
    * policyContent  策略yaml格式内容
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'podSelector' => 'getPodSelector',
            'securityGroups' => 'getSecurityGroups',
            'workloadId' => 'getWorkloadId',
            'workloadName' => 'getWorkloadName',
            'workloadType' => 'getWorkloadType',
            'namespaceId' => 'getNamespaceId',
            'namespace' => 'getNamespace',
            'createTime' => 'getCreateTime',
            'policyContent' => 'getPolicyContent'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['podSelector'] = isset($data['podSelector']) ? $data['podSelector'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['policyContent'] = isset($data['policyContent']) ? $data['policyContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['podSelector'] === null) {
            $invalidProperties[] = "'podSelector' can't be null";
        }
            if ((mb_strlen($this->container['podSelector']) > 65535)) {
                $invalidProperties[] = "invalid value for 'podSelector', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['podSelector']) < 0)) {
                $invalidProperties[] = "invalid value for 'podSelector', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
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
            if (!is_null($this->container['namespaceId']) && (mb_strlen($this->container['namespaceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespaceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespaceId']) && (mb_strlen($this->container['namespaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if ((mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyContent'] === null) {
            $invalidProperties[] = "'policyContent' can't be null";
        }
            if ((mb_strlen($this->container['policyContent']) > 65535)) {
                $invalidProperties[] = "invalid value for 'policyContent', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['policyContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyContent', the character length must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略Id
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId 策略Id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
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
    * Gets podSelector
    *  选择器
    *
    * @return string
    */
    public function getPodSelector()
    {
        return $this->container['podSelector'];
    }

    /**
    * Sets podSelector
    *
    * @param string $podSelector 选择器
    *
    * @return $this
    */
    public function setPodSelector($podSelector)
    {
        $this->container['podSelector'] = $podSelector;
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
    * Gets namespaceId
    *  命名空间id
    *
    * @return string|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param string|null $namespaceId 命名空间id
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets policyContent
    *  策略yaml格式内容
    *
    * @return string
    */
    public function getPolicyContent()
    {
        return $this->container['policyContent'];
    }

    /**
    * Sets policyContent
    *
    * @param string $policyContent 策略yaml格式内容
    *
    * @return $this
    */
    public function setPolicyContent($policyContent)
    {
        $this->container['policyContent'] = $policyContent;
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

