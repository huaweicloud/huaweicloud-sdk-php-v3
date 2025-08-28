<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组ID。
    * name  组名称。
    * role  组角色类型。
    * endpoint  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    * ipv6Endpoint  组ipv6连接地址。
    * isLoadBalance  是否开启负载均衡。
    * isDefaultGroup  是否默认组。
    * cpuNumPerNode  单节点CPU核数。
    * memNumPerNode  单节点内存大小,单位G。
    * architecture  CPU架构。
    * nodeList  节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'role' => 'string',
            'endpoint' => 'string',
            'ipv6Endpoint' => 'string',
            'isLoadBalance' => 'bool',
            'isDefaultGroup' => 'bool',
            'cpuNumPerNode' => 'int',
            'memNumPerNode' => 'int',
            'architecture' => 'string',
            'nodeList' => '\HuaweiCloud\SDK\Ddm\V1\Model\GroupNodeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组ID。
    * name  组名称。
    * role  组角色类型。
    * endpoint  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    * ipv6Endpoint  组ipv6连接地址。
    * isLoadBalance  是否开启负载均衡。
    * isDefaultGroup  是否默认组。
    * cpuNumPerNode  单节点CPU核数。
    * memNumPerNode  单节点内存大小,单位G。
    * architecture  CPU架构。
    * nodeList  节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'role' => null,
        'endpoint' => null,
        'ipv6Endpoint' => null,
        'isLoadBalance' => null,
        'isDefaultGroup' => null,
        'cpuNumPerNode' => 'int32',
        'memNumPerNode' => 'int32',
        'architecture' => null,
        'nodeList' => null
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
    * id  组ID。
    * name  组名称。
    * role  组角色类型。
    * endpoint  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    * ipv6Endpoint  组ipv6连接地址。
    * isLoadBalance  是否开启负载均衡。
    * isDefaultGroup  是否默认组。
    * cpuNumPerNode  单节点CPU核数。
    * memNumPerNode  单节点内存大小,单位G。
    * architecture  CPU架构。
    * nodeList  节点信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'role' => 'role',
            'endpoint' => 'endpoint',
            'ipv6Endpoint' => 'ipv6_endpoint',
            'isLoadBalance' => 'is_load_balance',
            'isDefaultGroup' => 'is_default_group',
            'cpuNumPerNode' => 'cpu_num_per_node',
            'memNumPerNode' => 'mem_num_per_node',
            'architecture' => 'architecture',
            'nodeList' => 'node_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组ID。
    * name  组名称。
    * role  组角色类型。
    * endpoint  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    * ipv6Endpoint  组ipv6连接地址。
    * isLoadBalance  是否开启负载均衡。
    * isDefaultGroup  是否默认组。
    * cpuNumPerNode  单节点CPU核数。
    * memNumPerNode  单节点内存大小,单位G。
    * architecture  CPU架构。
    * nodeList  节点信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'role' => 'setRole',
            'endpoint' => 'setEndpoint',
            'ipv6Endpoint' => 'setIpv6Endpoint',
            'isLoadBalance' => 'setIsLoadBalance',
            'isDefaultGroup' => 'setIsDefaultGroup',
            'cpuNumPerNode' => 'setCpuNumPerNode',
            'memNumPerNode' => 'setMemNumPerNode',
            'architecture' => 'setArchitecture',
            'nodeList' => 'setNodeList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组ID。
    * name  组名称。
    * role  组角色类型。
    * endpoint  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    * ipv6Endpoint  组ipv6连接地址。
    * isLoadBalance  是否开启负载均衡。
    * isDefaultGroup  是否默认组。
    * cpuNumPerNode  单节点CPU核数。
    * memNumPerNode  单节点内存大小,单位G。
    * architecture  CPU架构。
    * nodeList  节点信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'role' => 'getRole',
            'endpoint' => 'getEndpoint',
            'ipv6Endpoint' => 'getIpv6Endpoint',
            'isLoadBalance' => 'getIsLoadBalance',
            'isDefaultGroup' => 'getIsDefaultGroup',
            'cpuNumPerNode' => 'getCpuNumPerNode',
            'memNumPerNode' => 'getMemNumPerNode',
            'architecture' => 'getArchitecture',
            'nodeList' => 'getNodeList'
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
    const ROLE_RW = 'rw';
    const ROLE_R = 'r';
    const ARCHITECTURE_X86 = 'X86';
    const ARCHITECTURE_ARM = 'ARM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_RW,
            self::ROLE_R,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchitectureAllowableValues()
    {
        return [
            self::ARCHITECTURE_X86,
            self::ARCHITECTURE_ARM,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['ipv6Endpoint'] = isset($data['ipv6Endpoint']) ? $data['ipv6Endpoint'] : null;
        $this->container['isLoadBalance'] = isset($data['isLoadBalance']) ? $data['isLoadBalance'] : null;
        $this->container['isDefaultGroup'] = isset($data['isDefaultGroup']) ? $data['isDefaultGroup'] : null;
        $this->container['cpuNumPerNode'] = isset($data['cpuNumPerNode']) ? $data['cpuNumPerNode'] : null;
        $this->container['memNumPerNode'] = isset($data['memNumPerNode']) ? $data['memNumPerNode'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
            $allowedValues = $this->getRoleAllowableValues();
                if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['isLoadBalance'] === null) {
            $invalidProperties[] = "'isLoadBalance' can't be null";
        }
        if ($this->container['isDefaultGroup'] === null) {
            $invalidProperties[] = "'isDefaultGroup' can't be null";
        }
        if ($this->container['cpuNumPerNode'] === null) {
            $invalidProperties[] = "'cpuNumPerNode' can't be null";
        }
        if ($this->container['memNumPerNode'] === null) {
            $invalidProperties[] = "'memNumPerNode' can't be null";
        }
        if ($this->container['architecture'] === null) {
            $invalidProperties[] = "'architecture' can't be null";
        }
            $allowedValues = $this->getArchitectureAllowableValues();
                if (!is_null($this->container['architecture']) && !in_array($this->container['architecture'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'architecture', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nodeList'] === null) {
            $invalidProperties[] = "'nodeList' can't be null";
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
    *  组ID。
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
    * @param string $id 组ID。
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
    *  组名称。
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
    * @param string $name 组名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  组角色类型。
    *
    * @return string
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string $role 组角色类型。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets endpoint
    *  组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 组连接地址，如未开启负载均衡，则返回的是组内节点连接地址串。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets ipv6Endpoint
    *  组ipv6连接地址。
    *
    * @return string|null
    */
    public function getIpv6Endpoint()
    {
        return $this->container['ipv6Endpoint'];
    }

    /**
    * Sets ipv6Endpoint
    *
    * @param string|null $ipv6Endpoint 组ipv6连接地址。
    *
    * @return $this
    */
    public function setIpv6Endpoint($ipv6Endpoint)
    {
        $this->container['ipv6Endpoint'] = $ipv6Endpoint;
        return $this;
    }

    /**
    * Gets isLoadBalance
    *  是否开启负载均衡。
    *
    * @return bool
    */
    public function getIsLoadBalance()
    {
        return $this->container['isLoadBalance'];
    }

    /**
    * Sets isLoadBalance
    *
    * @param bool $isLoadBalance 是否开启负载均衡。
    *
    * @return $this
    */
    public function setIsLoadBalance($isLoadBalance)
    {
        $this->container['isLoadBalance'] = $isLoadBalance;
        return $this;
    }

    /**
    * Gets isDefaultGroup
    *  是否默认组。
    *
    * @return bool
    */
    public function getIsDefaultGroup()
    {
        return $this->container['isDefaultGroup'];
    }

    /**
    * Sets isDefaultGroup
    *
    * @param bool $isDefaultGroup 是否默认组。
    *
    * @return $this
    */
    public function setIsDefaultGroup($isDefaultGroup)
    {
        $this->container['isDefaultGroup'] = $isDefaultGroup;
        return $this;
    }

    /**
    * Gets cpuNumPerNode
    *  单节点CPU核数。
    *
    * @return int
    */
    public function getCpuNumPerNode()
    {
        return $this->container['cpuNumPerNode'];
    }

    /**
    * Sets cpuNumPerNode
    *
    * @param int $cpuNumPerNode 单节点CPU核数。
    *
    * @return $this
    */
    public function setCpuNumPerNode($cpuNumPerNode)
    {
        $this->container['cpuNumPerNode'] = $cpuNumPerNode;
        return $this;
    }

    /**
    * Gets memNumPerNode
    *  单节点内存大小,单位G。
    *
    * @return int
    */
    public function getMemNumPerNode()
    {
        return $this->container['memNumPerNode'];
    }

    /**
    * Sets memNumPerNode
    *
    * @param int $memNumPerNode 单节点内存大小,单位G。
    *
    * @return $this
    */
    public function setMemNumPerNode($memNumPerNode)
    {
        $this->container['memNumPerNode'] = $memNumPerNode;
        return $this;
    }

    /**
    * Gets architecture
    *  CPU架构。
    *
    * @return string
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string $architecture CPU架构。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets nodeList
    *  节点信息列表。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GroupNodeInfo[]
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GroupNodeInfo[] $nodeList 节点信息列表。
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
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

