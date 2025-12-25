<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资产id
    * name  资产名称
    * provider  资产来源，云服务名称(云上)，线下机房（IDC）
    * type  资产类型, 比如ECS/VPC/EVS/IP/URL等
    * checksum  资产详情校验码。
    * created  资产创建时间。
    * provisioningState  资产操作状态。
    * environment  environment
    * department  department
    * governanceUser  governanceUser
    * level  0: 测试 1： 一般   2： 关键资产
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'checksum' => 'string',
            'created' => '\DateTime',
            'provisioningState' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ResourceEnvironment',
            'department' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Department',
            'governanceUser' => '\HuaweiCloud\SDK\SecMaster\V1\Model\GovernanceUser',
            'level' => 'int',
            'properties' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Properties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资产id
    * name  资产名称
    * provider  资产来源，云服务名称(云上)，线下机房（IDC）
    * type  资产类型, 比如ECS/VPC/EVS/IP/URL等
    * checksum  资产详情校验码。
    * created  资产创建时间。
    * provisioningState  资产操作状态。
    * environment  environment
    * department  department
    * governanceUser  governanceUser
    * level  0: 测试 1： 一般   2： 关键资产
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'provider' => null,
        'type' => null,
        'checksum' => null,
        'created' => 'date',
        'provisioningState' => null,
        'environment' => null,
        'department' => null,
        'governanceUser' => null,
        'level' => 'int32',
        'properties' => null
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
    * id  资产id
    * name  资产名称
    * provider  资产来源，云服务名称(云上)，线下机房（IDC）
    * type  资产类型, 比如ECS/VPC/EVS/IP/URL等
    * checksum  资产详情校验码。
    * created  资产创建时间。
    * provisioningState  资产操作状态。
    * environment  environment
    * department  department
    * governanceUser  governanceUser
    * level  0: 测试 1： 一般   2： 关键资产
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'provider' => 'provider',
            'type' => 'type',
            'checksum' => 'checksum',
            'created' => 'created',
            'provisioningState' => 'provisioning_state',
            'environment' => 'environment',
            'department' => 'department',
            'governanceUser' => 'governance_user',
            'level' => 'level',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资产id
    * name  资产名称
    * provider  资产来源，云服务名称(云上)，线下机房（IDC）
    * type  资产类型, 比如ECS/VPC/EVS/IP/URL等
    * checksum  资产详情校验码。
    * created  资产创建时间。
    * provisioningState  资产操作状态。
    * environment  environment
    * department  department
    * governanceUser  governanceUser
    * level  0: 测试 1： 一般   2： 关键资产
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'provider' => 'setProvider',
            'type' => 'setType',
            'checksum' => 'setChecksum',
            'created' => 'setCreated',
            'provisioningState' => 'setProvisioningState',
            'environment' => 'setEnvironment',
            'department' => 'setDepartment',
            'governanceUser' => 'setGovernanceUser',
            'level' => 'setLevel',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资产id
    * name  资产名称
    * provider  资产来源，云服务名称(云上)，线下机房（IDC）
    * type  资产类型, 比如ECS/VPC/EVS/IP/URL等
    * checksum  资产详情校验码。
    * created  资产创建时间。
    * provisioningState  资产操作状态。
    * environment  environment
    * department  department
    * governanceUser  governanceUser
    * level  0: 测试 1： 一般   2： 关键资产
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'provider' => 'getProvider',
            'type' => 'getType',
            'checksum' => 'getChecksum',
            'created' => 'getCreated',
            'provisioningState' => 'getProvisioningState',
            'environment' => 'getEnvironment',
            'department' => 'getDepartment',
            'governanceUser' => 'getGovernanceUser',
            'level' => 'getLevel',
            'properties' => 'getProperties'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['provisioningState'] = isset($data['provisioningState']) ? $data['provisioningState'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['governanceUser'] = isset($data['governanceUser']) ? $data['governanceUser'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
            if ((mb_strlen($this->container['provider']) > 64)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['provider']) < 0)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checksum']) && (mb_strlen($this->container['checksum']) > 256)) {
                $invalidProperties[] = "invalid value for 'checksum', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checksum']) && (mb_strlen($this->container['checksum']) < 0)) {
                $invalidProperties[] = "invalid value for 'checksum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['provisioningState']) && (mb_strlen($this->container['provisioningState']) > 64)) {
                $invalidProperties[] = "invalid value for 'provisioningState', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['provisioningState']) && (mb_strlen($this->container['provisioningState']) < 0)) {
                $invalidProperties[] = "invalid value for 'provisioningState', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
            if (!is_null($this->container['level']) && ($this->container['level'] >= 2)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than 2.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] <= 0)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than 0.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    * Gets id
    *  资产id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 资产id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  资产名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 资产名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provider
    *  资产来源，云服务名称(云上)，线下机房（IDC）
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 资产来源，云服务名称(云上)，线下机房（IDC）
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  资产类型, 比如ECS/VPC/EVS/IP/URL等
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 资产类型, 比如ECS/VPC/EVS/IP/URL等
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets checksum
    *  资产详情校验码。
    *
    * @return string|null
    */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
    * Sets checksum
    *
    * @param string|null $checksum 资产详情校验码。
    *
    * @return $this
    */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;
        return $this;
    }

    /**
    * Gets created
    *  资产创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param \DateTime|null $created 资产创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets provisioningState
    *  资产操作状态。
    *
    * @return string|null
    */
    public function getProvisioningState()
    {
        return $this->container['provisioningState'];
    }

    /**
    * Sets provisioningState
    *
    * @param string|null $provisioningState 资产操作状态。
    *
    * @return $this
    */
    public function setProvisioningState($provisioningState)
    {
        $this->container['provisioningState'] = $provisioningState;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ResourceEnvironment
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ResourceEnvironment $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets department
    *  department
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Department|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Department|null $department department
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets governanceUser
    *  governanceUser
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\GovernanceUser|null
    */
    public function getGovernanceUser()
    {
        return $this->container['governanceUser'];
    }

    /**
    * Sets governanceUser
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\GovernanceUser|null $governanceUser governanceUser
    *
    * @return $this
    */
    public function setGovernanceUser($governanceUser)
    {
        $this->container['governanceUser'] = $governanceUser;
        return $this;
    }

    /**
    * Gets level
    *  0: 测试 1： 一般   2： 关键资产
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 0: 测试 1： 一般   2： 关键资产
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Properties
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Properties $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

