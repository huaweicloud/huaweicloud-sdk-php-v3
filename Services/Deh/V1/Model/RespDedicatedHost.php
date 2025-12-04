<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespDedicatedHost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespDedicatedHost';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dedicatedHostId  专属主机ID。
    * name  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    * availabilityZone  专属主机所属的可用区。
    * projectId  专属主机所属的租户ID。
    * hostProperties  hostProperties
    * state  专属主机状态。
    * availableVcpus  专属主机可用的vCPU核数。
    * availableMemory  专属主机可用的内存大小。
    * allocatedAt  专属主机的分配时间。
    * releasedAt  专属主机的释放时间。
    * instanceTotal  专属主机上的实例总数。
    * instanceUuids  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    * tags  专属主机标签。
    * sysTags  专属主机系统标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dedicatedHostId' => 'string',
            'name' => 'string',
            'autoPlacement' => 'string',
            'availabilityZone' => 'string',
            'projectId' => 'string',
            'hostProperties' => '\HuaweiCloud\SDK\DeH\V1\Model\RespHostProperty',
            'state' => 'string',
            'availableVcpus' => 'int',
            'availableMemory' => 'int',
            'allocatedAt' => 'string',
            'releasedAt' => 'string',
            'instanceTotal' => 'int',
            'instanceUuids' => 'string[]',
            'tags' => 'object',
            'sysTags' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dedicatedHostId  专属主机ID。
    * name  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    * availabilityZone  专属主机所属的可用区。
    * projectId  专属主机所属的租户ID。
    * hostProperties  hostProperties
    * state  专属主机状态。
    * availableVcpus  专属主机可用的vCPU核数。
    * availableMemory  专属主机可用的内存大小。
    * allocatedAt  专属主机的分配时间。
    * releasedAt  专属主机的释放时间。
    * instanceTotal  专属主机上的实例总数。
    * instanceUuids  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    * tags  专属主机标签。
    * sysTags  专属主机系统标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dedicatedHostId' => null,
        'name' => null,
        'autoPlacement' => null,
        'availabilityZone' => null,
        'projectId' => null,
        'hostProperties' => null,
        'state' => null,
        'availableVcpus' => 'int32',
        'availableMemory' => 'int32',
        'allocatedAt' => null,
        'releasedAt' => null,
        'instanceTotal' => 'int32',
        'instanceUuids' => null,
        'tags' => null,
        'sysTags' => null
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
    * dedicatedHostId  专属主机ID。
    * name  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    * availabilityZone  专属主机所属的可用区。
    * projectId  专属主机所属的租户ID。
    * hostProperties  hostProperties
    * state  专属主机状态。
    * availableVcpus  专属主机可用的vCPU核数。
    * availableMemory  专属主机可用的内存大小。
    * allocatedAt  专属主机的分配时间。
    * releasedAt  专属主机的释放时间。
    * instanceTotal  专属主机上的实例总数。
    * instanceUuids  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    * tags  专属主机标签。
    * sysTags  专属主机系统标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dedicatedHostId' => 'dedicated_host_id',
            'name' => 'name',
            'autoPlacement' => 'auto_placement',
            'availabilityZone' => 'availability_zone',
            'projectId' => 'project_id',
            'hostProperties' => 'host_properties',
            'state' => 'state',
            'availableVcpus' => 'available_vcpus',
            'availableMemory' => 'available_memory',
            'allocatedAt' => 'allocated_at',
            'releasedAt' => 'released_at',
            'instanceTotal' => 'instance_total',
            'instanceUuids' => 'instance_uuids',
            'tags' => 'tags',
            'sysTags' => 'sys_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dedicatedHostId  专属主机ID。
    * name  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    * availabilityZone  专属主机所属的可用区。
    * projectId  专属主机所属的租户ID。
    * hostProperties  hostProperties
    * state  专属主机状态。
    * availableVcpus  专属主机可用的vCPU核数。
    * availableMemory  专属主机可用的内存大小。
    * allocatedAt  专属主机的分配时间。
    * releasedAt  专属主机的释放时间。
    * instanceTotal  专属主机上的实例总数。
    * instanceUuids  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    * tags  专属主机标签。
    * sysTags  专属主机系统标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'dedicatedHostId' => 'setDedicatedHostId',
            'name' => 'setName',
            'autoPlacement' => 'setAutoPlacement',
            'availabilityZone' => 'setAvailabilityZone',
            'projectId' => 'setProjectId',
            'hostProperties' => 'setHostProperties',
            'state' => 'setState',
            'availableVcpus' => 'setAvailableVcpus',
            'availableMemory' => 'setAvailableMemory',
            'allocatedAt' => 'setAllocatedAt',
            'releasedAt' => 'setReleasedAt',
            'instanceTotal' => 'setInstanceTotal',
            'instanceUuids' => 'setInstanceUuids',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dedicatedHostId  专属主机ID。
    * name  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    * availabilityZone  专属主机所属的可用区。
    * projectId  专属主机所属的租户ID。
    * hostProperties  hostProperties
    * state  专属主机状态。
    * availableVcpus  专属主机可用的vCPU核数。
    * availableMemory  专属主机可用的内存大小。
    * allocatedAt  专属主机的分配时间。
    * releasedAt  专属主机的释放时间。
    * instanceTotal  专属主机上的实例总数。
    * instanceUuids  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    * tags  专属主机标签。
    * sysTags  专属主机系统标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'dedicatedHostId' => 'getDedicatedHostId',
            'name' => 'getName',
            'autoPlacement' => 'getAutoPlacement',
            'availabilityZone' => 'getAvailabilityZone',
            'projectId' => 'getProjectId',
            'hostProperties' => 'getHostProperties',
            'state' => 'getState',
            'availableVcpus' => 'getAvailableVcpus',
            'availableMemory' => 'getAvailableMemory',
            'allocatedAt' => 'getAllocatedAt',
            'releasedAt' => 'getReleasedAt',
            'instanceTotal' => 'getInstanceTotal',
            'instanceUuids' => 'getInstanceUuids',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags'
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
    const AUTO_PLACEMENT_ON = 'on';
    const AUTO_PLACEMENT_OFF = 'off';
    const STATE_AVAILABLE = 'available';
    const STATE_RELEASED = 'released';
    const STATE_FAULT = 'fault';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoPlacementAllowableValues()
    {
        return [
            self::AUTO_PLACEMENT_ON,
            self::AUTO_PLACEMENT_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AVAILABLE,
            self::STATE_RELEASED,
            self::STATE_FAULT,
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
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['autoPlacement'] = isset($data['autoPlacement']) ? $data['autoPlacement'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['hostProperties'] = isset($data['hostProperties']) ? $data['hostProperties'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['availableVcpus'] = isset($data['availableVcpus']) ? $data['availableVcpus'] : null;
        $this->container['availableMemory'] = isset($data['availableMemory']) ? $data['availableMemory'] : null;
        $this->container['allocatedAt'] = isset($data['allocatedAt']) ? $data['allocatedAt'] : null;
        $this->container['releasedAt'] = isset($data['releasedAt']) ? $data['releasedAt'] : null;
        $this->container['instanceTotal'] = isset($data['instanceTotal']) ? $data['instanceTotal'] : null;
        $this->container['instanceUuids'] = isset($data['instanceUuids']) ? $data['instanceUuids'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dedicatedHostId'] === null) {
            $invalidProperties[] = "'dedicatedHostId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['autoPlacement'] === null) {
            $invalidProperties[] = "'autoPlacement' can't be null";
        }
            $allowedValues = $this->getAutoPlacementAllowableValues();
                if (!is_null($this->container['autoPlacement']) && !in_array($this->container['autoPlacement'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoPlacement', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['hostProperties'] === null) {
            $invalidProperties[] = "'hostProperties' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['availableVcpus'] === null) {
            $invalidProperties[] = "'availableVcpus' can't be null";
        }
        if ($this->container['availableMemory'] === null) {
            $invalidProperties[] = "'availableMemory' can't be null";
        }
        if ($this->container['allocatedAt'] === null) {
            $invalidProperties[] = "'allocatedAt' can't be null";
        }
        if ($this->container['releasedAt'] === null) {
            $invalidProperties[] = "'releasedAt' can't be null";
        }
        if ($this->container['instanceTotal'] === null) {
            $invalidProperties[] = "'instanceTotal' can't be null";
        }
        if ($this->container['instanceUuids'] === null) {
            $invalidProperties[] = "'instanceUuids' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['sysTags'] === null) {
            $invalidProperties[] = "'sysTags' can't be null";
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
    * Gets dedicatedHostId
    *  专属主机ID。
    *
    * @return string
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string $dedicatedHostId 专属主机ID。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets name
    *  专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
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
    * @param string $name 专属主机的名称。  长度限制在255个字符以内，并且不能以空格开头或结尾。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets autoPlacement
    *  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    *
    * @return string
    */
    public function getAutoPlacement()
    {
        return $this->container['autoPlacement'];
    }

    /**
    * Sets autoPlacement
    *
    * @param string $autoPlacement 在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。
    *
    * @return $this
    */
    public function setAutoPlacement($autoPlacement)
    {
        $this->container['autoPlacement'] = $autoPlacement;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  专属主机所属的可用区。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 专属主机所属的可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets projectId
    *  专属主机所属的租户ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 专属主机所属的租户ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets hostProperties
    *  hostProperties
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\RespHostProperty
    */
    public function getHostProperties()
    {
        return $this->container['hostProperties'];
    }

    /**
    * Sets hostProperties
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\RespHostProperty $hostProperties hostProperties
    *
    * @return $this
    */
    public function setHostProperties($hostProperties)
    {
        $this->container['hostProperties'] = $hostProperties;
        return $this;
    }

    /**
    * Gets state
    *  专属主机状态。
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 专属主机状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets availableVcpus
    *  专属主机可用的vCPU核数。
    *
    * @return int
    */
    public function getAvailableVcpus()
    {
        return $this->container['availableVcpus'];
    }

    /**
    * Sets availableVcpus
    *
    * @param int $availableVcpus 专属主机可用的vCPU核数。
    *
    * @return $this
    */
    public function setAvailableVcpus($availableVcpus)
    {
        $this->container['availableVcpus'] = $availableVcpus;
        return $this;
    }

    /**
    * Gets availableMemory
    *  专属主机可用的内存大小。
    *
    * @return int
    */
    public function getAvailableMemory()
    {
        return $this->container['availableMemory'];
    }

    /**
    * Sets availableMemory
    *
    * @param int $availableMemory 专属主机可用的内存大小。
    *
    * @return $this
    */
    public function setAvailableMemory($availableMemory)
    {
        $this->container['availableMemory'] = $availableMemory;
        return $this;
    }

    /**
    * Gets allocatedAt
    *  专属主机的分配时间。
    *
    * @return string
    */
    public function getAllocatedAt()
    {
        return $this->container['allocatedAt'];
    }

    /**
    * Sets allocatedAt
    *
    * @param string $allocatedAt 专属主机的分配时间。
    *
    * @return $this
    */
    public function setAllocatedAt($allocatedAt)
    {
        $this->container['allocatedAt'] = $allocatedAt;
        return $this;
    }

    /**
    * Gets releasedAt
    *  专属主机的释放时间。
    *
    * @return string
    */
    public function getReleasedAt()
    {
        return $this->container['releasedAt'];
    }

    /**
    * Sets releasedAt
    *
    * @param string $releasedAt 专属主机的释放时间。
    *
    * @return $this
    */
    public function setReleasedAt($releasedAt)
    {
        $this->container['releasedAt'] = $releasedAt;
        return $this;
    }

    /**
    * Gets instanceTotal
    *  专属主机上的实例总数。
    *
    * @return int
    */
    public function getInstanceTotal()
    {
        return $this->container['instanceTotal'];
    }

    /**
    * Sets instanceTotal
    *
    * @param int $instanceTotal 专属主机上的实例总数。
    *
    * @return $this
    */
    public function setInstanceTotal($instanceTotal)
    {
        $this->container['instanceTotal'] = $instanceTotal;
        return $this;
    }

    /**
    * Gets instanceUuids
    *  专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    *
    * @return string[]
    */
    public function getInstanceUuids()
    {
        return $this->container['instanceUuids'];
    }

    /**
    * Sets instanceUuids
    *
    * @param string[] $instanceUuids 专属主机上的实例UUID。  查询专属主机列表接口不显示此参数。
    *
    * @return $this
    */
    public function setInstanceUuids($instanceUuids)
    {
        $this->container['instanceUuids'] = $instanceUuids;
        return $this;
    }

    /**
    * Gets tags
    *  专属主机标签。
    *
    * @return object
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object $tags 专属主机标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  专属主机系统标签。
    *
    * @return object
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param object $sysTags 专属主机系统标签。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
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

