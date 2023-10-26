<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Instance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  集群的可用分区
    * nics  网卡列表，最多两个网卡。请参见•nics参数说明
    * flavorRef  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    * type  节点类型，当前只有“cdm”一种类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'nics' => '\HuaweiCloud\SDK\Cdm\V1\Model\Nics[]',
            'flavorRef' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  集群的可用分区
    * nics  网卡列表，最多两个网卡。请参见•nics参数说明
    * flavorRef  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    * type  节点类型，当前只有“cdm”一种类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'nics' => null,
        'flavorRef' => null,
        'type' => null
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
    * availabilityZone  集群的可用分区
    * nics  网卡列表，最多两个网卡。请参见•nics参数说明
    * flavorRef  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    * type  节点类型，当前只有“cdm”一种类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'nics' => 'nics',
            'flavorRef' => 'flavorRef',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  集群的可用分区
    * nics  网卡列表，最多两个网卡。请参见•nics参数说明
    * flavorRef  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    * type  节点类型，当前只有“cdm”一种类型
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'nics' => 'setNics',
            'flavorRef' => 'setFlavorRef',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  集群的可用分区
    * nics  网卡列表，最多两个网卡。请参见•nics参数说明
    * flavorRef  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    * type  节点类型，当前只有“cdm”一种类型
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'nics' => 'getNics',
            'flavorRef' => 'getFlavorRef',
            'type' => 'getType'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets availabilityZone
    *  集群的可用分区
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
    * @param string $availabilityZone 集群的可用分区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets nics
    *  网卡列表，最多两个网卡。请参见•nics参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Nics[] $nics 网卡列表，最多两个网卡。请参见•nics参数说明
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets flavorRef
    *  实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 实例规格： - a79fd5ae-1833-448a-88e8-3ea2b913e1f6：表示cdm.small规格，2核CPU、4G内存的虚拟机。适合PoC验证和开发测试。 - fb8fe666-6734-4b11-bc6c-43d11db3c745：表示cdm.medium规格，4核CPU、8G内存的虚拟机适合单张表规模<1000万条的场景。 - 5ddb1071-c5d7-40e0-a874-8a032e81a697：表示cdm.large规格，8核CPU、16G内存的虚拟机。适合单张表规模≥1000万条的场景。 - 6ddb1072-c5d7-40e0-a874-8a032e81a698：表示cdm.xlarge规格，16核CPU、32G内存的虚拟机。需要10GE高速带宽进行TB以上的数据量迁移时使用
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets type
    *  节点类型，当前只有“cdm”一种类型
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
    * @param string $type 节点类型，当前只有“cdm”一种类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

