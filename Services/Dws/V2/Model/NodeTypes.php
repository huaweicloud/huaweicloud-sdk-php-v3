<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTypes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTypes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specName  节点类型名称。
    * detail  节点类型详细。
    * id  节点类型ID。
    * datastoreType  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    * availableZones  支持的可用区及状态信息。
    * ram  内存大小。
    * vcpus  CPU数量。
    * datastores  内核版本信息。
    * volume  volume
    * elasticVolumeSpecs  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specName' => 'string',
            'detail' => '\HuaweiCloud\SDK\Dws\V2\Model\Detail[]',
            'id' => 'string',
            'datastoreType' => 'string',
            'availableZones' => '\HuaweiCloud\SDK\Dws\V2\Model\NodeTypeAvailableZones[]',
            'ram' => 'int',
            'vcpus' => 'int',
            'datastores' => '\HuaweiCloud\SDK\Dws\V2\Model\NodeTypeDatastores[]',
            'volume' => '\HuaweiCloud\SDK\Dws\V2\Model\VolumeResp',
            'elasticVolumeSpecs' => '\HuaweiCloud\SDK\Dws\V2\Model\NodeTypeElasticVolumeSpecs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specName  节点类型名称。
    * detail  节点类型详细。
    * id  节点类型ID。
    * datastoreType  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    * availableZones  支持的可用区及状态信息。
    * ram  内存大小。
    * vcpus  CPU数量。
    * datastores  内核版本信息。
    * volume  volume
    * elasticVolumeSpecs  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specName' => null,
        'detail' => null,
        'id' => null,
        'datastoreType' => null,
        'availableZones' => null,
        'ram' => null,
        'vcpus' => null,
        'datastores' => null,
        'volume' => null,
        'elasticVolumeSpecs' => null
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
    * specName  节点类型名称。
    * detail  节点类型详细。
    * id  节点类型ID。
    * datastoreType  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    * availableZones  支持的可用区及状态信息。
    * ram  内存大小。
    * vcpus  CPU数量。
    * datastores  内核版本信息。
    * volume  volume
    * elasticVolumeSpecs  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specName' => 'spec_name',
            'detail' => 'detail',
            'id' => 'id',
            'datastoreType' => 'datastore_type',
            'availableZones' => 'available_zones',
            'ram' => 'ram',
            'vcpus' => 'vcpus',
            'datastores' => 'datastores',
            'volume' => 'volume',
            'elasticVolumeSpecs' => 'elastic_volume_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specName  节点类型名称。
    * detail  节点类型详细。
    * id  节点类型ID。
    * datastoreType  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    * availableZones  支持的可用区及状态信息。
    * ram  内存大小。
    * vcpus  CPU数量。
    * datastores  内核版本信息。
    * volume  volume
    * elasticVolumeSpecs  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'specName' => 'setSpecName',
            'detail' => 'setDetail',
            'id' => 'setId',
            'datastoreType' => 'setDatastoreType',
            'availableZones' => 'setAvailableZones',
            'ram' => 'setRam',
            'vcpus' => 'setVcpus',
            'datastores' => 'setDatastores',
            'volume' => 'setVolume',
            'elasticVolumeSpecs' => 'setElasticVolumeSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specName  节点类型名称。
    * detail  节点类型详细。
    * id  节点类型ID。
    * datastoreType  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    * availableZones  支持的可用区及状态信息。
    * ram  内存大小。
    * vcpus  CPU数量。
    * datastores  内核版本信息。
    * volume  volume
    * elasticVolumeSpecs  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'specName' => 'getSpecName',
            'detail' => 'getDetail',
            'id' => 'getId',
            'datastoreType' => 'getDatastoreType',
            'availableZones' => 'getAvailableZones',
            'ram' => 'getRam',
            'vcpus' => 'getVcpus',
            'datastores' => 'getDatastores',
            'volume' => 'getVolume',
            'elasticVolumeSpecs' => 'getElasticVolumeSpecs'
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
        $this->container['specName'] = isset($data['specName']) ? $data['specName'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['datastores'] = isset($data['datastores']) ? $data['datastores'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['elasticVolumeSpecs'] = isset($data['elasticVolumeSpecs']) ? $data['elasticVolumeSpecs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['specName'] === null) {
            $invalidProperties[] = "'specName' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['datastores'] === null) {
            $invalidProperties[] = "'datastores' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['elasticVolumeSpecs'] === null) {
            $invalidProperties[] = "'elasticVolumeSpecs' can't be null";
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
    * Gets specName
    *  节点类型名称。
    *
    * @return string
    */
    public function getSpecName()
    {
        return $this->container['specName'];
    }

    /**
    * Sets specName
    *
    * @param string $specName 节点类型名称。
    *
    * @return $this
    */
    public function setSpecName($specName)
    {
        $this->container['specName'] = $specName;
        return $this;
    }

    /**
    * Gets detail
    *  节点类型详细。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Detail[]
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Detail[] $detail 节点类型详细。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets id
    *  节点类型ID。
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
    * @param string $id 节点类型ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets datastoreType
    *  产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 产品类型 - dws：云数仓。 - hybrid：实时数仓。 - stream：IoT数仓。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets availableZones
    *  支持的可用区及状态信息。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeAvailableZones[]
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeAvailableZones[] $availableZones 支持的可用区及状态信息。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小。
    *
    * @return int
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int $ram 内存大小。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU数量。
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
    * @param int $vcpus CPU数量。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets datastores
    *  内核版本信息。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeDatastores[]
    */
    public function getDatastores()
    {
        return $this->container['datastores'];
    }

    /**
    * Sets datastores
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeDatastores[] $datastores 内核版本信息。
    *
    * @return $this
    */
    public function setDatastores($datastores)
    {
        $this->container['datastores'] = $datastores;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\VolumeResp
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\VolumeResp $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets elasticVolumeSpecs
    *  如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeElasticVolumeSpecs[]
    */
    public function getElasticVolumeSpecs()
    {
        return $this->container['elasticVolumeSpecs'];
    }

    /**
    * Sets elasticVolumeSpecs
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\NodeTypeElasticVolumeSpecs[] $elasticVolumeSpecs 如果规格为弹性容量规格，则该属性为规格典配的弹性容量信息，包括存储类型、最小容量、最大容量以及步长信息，如果为固定存储规格，则该属性为null。
    *
    * @return $this
    */
    public function setElasticVolumeSpecs($elasticVolumeSpecs)
    {
        $this->container['elasticVolumeSpecs'] = $elasticVolumeSpecs;
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

