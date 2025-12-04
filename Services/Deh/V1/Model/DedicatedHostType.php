<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DedicatedHostType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DedicatedHostType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostType  专属主机类型。
    * vcpus  专属主机类型的vCPU数量。
    * cores  专属主机类型的核心数量。
    * sockets  专属主机类型的物理套接字数量。
    * memory  专属主机类型的内存大小。
    * supportedFlavors  专属主机规格列表。
    * category  专属主机类型的类别。
    * availabilityZoneOfferings  availabilityZoneOfferings
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostType' => 'string',
            'vcpus' => 'int',
            'cores' => 'int',
            'sockets' => 'int',
            'memory' => 'int',
            'supportedFlavors' => 'string[]',
            'category' => 'string',
            'availabilityZoneOfferings' => '\HuaweiCloud\SDK\DeH\V1\Model\DedicatedHostTypeOffering[]',
            'pageInfo' => '\HuaweiCloud\SDK\DeH\V1\Model\PageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostType  专属主机类型。
    * vcpus  专属主机类型的vCPU数量。
    * cores  专属主机类型的核心数量。
    * sockets  专属主机类型的物理套接字数量。
    * memory  专属主机类型的内存大小。
    * supportedFlavors  专属主机规格列表。
    * category  专属主机类型的类别。
    * availabilityZoneOfferings  availabilityZoneOfferings
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostType' => null,
        'vcpus' => 'int32',
        'cores' => 'int32',
        'sockets' => 'int32',
        'memory' => 'int32',
        'supportedFlavors' => null,
        'category' => null,
        'availabilityZoneOfferings' => null,
        'pageInfo' => null
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
    * hostType  专属主机类型。
    * vcpus  专属主机类型的vCPU数量。
    * cores  专属主机类型的核心数量。
    * sockets  专属主机类型的物理套接字数量。
    * memory  专属主机类型的内存大小。
    * supportedFlavors  专属主机规格列表。
    * category  专属主机类型的类别。
    * availabilityZoneOfferings  availabilityZoneOfferings
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostType' => 'host_type',
            'vcpus' => 'vcpus',
            'cores' => 'cores',
            'sockets' => 'sockets',
            'memory' => 'memory',
            'supportedFlavors' => 'supported_flavors',
            'category' => 'category',
            'availabilityZoneOfferings' => 'availability_zone_offerings',
            'pageInfo' => 'page_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostType  专属主机类型。
    * vcpus  专属主机类型的vCPU数量。
    * cores  专属主机类型的核心数量。
    * sockets  专属主机类型的物理套接字数量。
    * memory  专属主机类型的内存大小。
    * supportedFlavors  专属主机规格列表。
    * category  专属主机类型的类别。
    * availabilityZoneOfferings  availabilityZoneOfferings
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'hostType' => 'setHostType',
            'vcpus' => 'setVcpus',
            'cores' => 'setCores',
            'sockets' => 'setSockets',
            'memory' => 'setMemory',
            'supportedFlavors' => 'setSupportedFlavors',
            'category' => 'setCategory',
            'availabilityZoneOfferings' => 'setAvailabilityZoneOfferings',
            'pageInfo' => 'setPageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostType  专属主机类型。
    * vcpus  专属主机类型的vCPU数量。
    * cores  专属主机类型的核心数量。
    * sockets  专属主机类型的物理套接字数量。
    * memory  专属主机类型的内存大小。
    * supportedFlavors  专属主机规格列表。
    * category  专属主机类型的类别。
    * availabilityZoneOfferings  availabilityZoneOfferings
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'hostType' => 'getHostType',
            'vcpus' => 'getVcpus',
            'cores' => 'getCores',
            'sockets' => 'getSockets',
            'memory' => 'getMemory',
            'supportedFlavors' => 'getSupportedFlavors',
            'category' => 'getCategory',
            'availabilityZoneOfferings' => 'getAvailabilityZoneOfferings',
            'pageInfo' => 'getPageInfo'
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
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['cores'] = isset($data['cores']) ? $data['cores'] : null;
        $this->container['sockets'] = isset($data['sockets']) ? $data['sockets'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['supportedFlavors'] = isset($data['supportedFlavors']) ? $data['supportedFlavors'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['availabilityZoneOfferings'] = isset($data['availabilityZoneOfferings']) ? $data['availabilityZoneOfferings'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostType'] === null) {
            $invalidProperties[] = "'hostType' can't be null";
        }
            if ((mb_strlen($this->container['hostType']) > 255)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['hostType']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['cores'] === null) {
            $invalidProperties[] = "'cores' can't be null";
        }
        if ($this->container['sockets'] === null) {
            $invalidProperties[] = "'sockets' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['supportedFlavors'] === null) {
            $invalidProperties[] = "'supportedFlavors' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 255)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pageInfo'] === null) {
            $invalidProperties[] = "'pageInfo' can't be null";
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
    * Gets hostType
    *  专属主机类型。
    *
    * @return string
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string $hostType 专属主机类型。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets vcpus
    *  专属主机类型的vCPU数量。
    *
    * @return int
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int $vcpus 专属主机类型的vCPU数量。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets cores
    *  专属主机类型的核心数量。
    *
    * @return int
    */
    public function getCores()
    {
        return $this->container['cores'];
    }

    /**
    * Sets cores
    *
    * @param int $cores 专属主机类型的核心数量。
    *
    * @return $this
    */
    public function setCores($cores)
    {
        $this->container['cores'] = $cores;
        return $this;
    }

    /**
    * Gets sockets
    *  专属主机类型的物理套接字数量。
    *
    * @return int
    */
    public function getSockets()
    {
        return $this->container['sockets'];
    }

    /**
    * Sets sockets
    *
    * @param int $sockets 专属主机类型的物理套接字数量。
    *
    * @return $this
    */
    public function setSockets($sockets)
    {
        $this->container['sockets'] = $sockets;
        return $this;
    }

    /**
    * Gets memory
    *  专属主机类型的内存大小。
    *
    * @return int
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int $memory 专属主机类型的内存大小。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets supportedFlavors
    *  专属主机规格列表。
    *
    * @return string[]
    */
    public function getSupportedFlavors()
    {
        return $this->container['supportedFlavors'];
    }

    /**
    * Sets supportedFlavors
    *
    * @param string[] $supportedFlavors 专属主机规格列表。
    *
    * @return $this
    */
    public function setSupportedFlavors($supportedFlavors)
    {
        $this->container['supportedFlavors'] = $supportedFlavors;
        return $this;
    }

    /**
    * Gets category
    *  专属主机类型的类别。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 专属主机类型的类别。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets availabilityZoneOfferings
    *  availabilityZoneOfferings
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\DedicatedHostTypeOffering[]|null
    */
    public function getAvailabilityZoneOfferings()
    {
        return $this->container['availabilityZoneOfferings'];
    }

    /**
    * Sets availabilityZoneOfferings
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\DedicatedHostTypeOffering[]|null $availabilityZoneOfferings availabilityZoneOfferings
    *
    * @return $this
    */
    public function setAvailabilityZoneOfferings($availabilityZoneOfferings)
    {
        $this->container['availabilityZoneOfferings'] = $availabilityZoneOfferings;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\PageInfo
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\PageInfo $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
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

