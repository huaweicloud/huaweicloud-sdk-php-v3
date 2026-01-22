<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IOSEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IOSEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableZones  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * unavailableZones  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ioSpec  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * type  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableZones' => 'string[]',
            'unavailableZones' => 'string[]',
            'ioSpec' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableZones  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * unavailableZones  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ioSpec  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * type  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableZones' => null,
        'unavailableZones' => null,
        'ioSpec' => null,
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
    * availableZones  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * unavailableZones  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ioSpec  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * type  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableZones' => 'available_zones',
            'unavailableZones' => 'unavailable_zones',
            'ioSpec' => 'io_spec',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableZones  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * unavailableZones  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ioSpec  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * type  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'availableZones' => 'setAvailableZones',
            'unavailableZones' => 'setUnavailableZones',
            'ioSpec' => 'setIoSpec',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableZones  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * unavailableZones  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ioSpec  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * type  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'availableZones' => 'getAvailableZones',
            'unavailableZones' => 'getUnavailableZones',
            'ioSpec' => 'getIoSpec',
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
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
        $this->container['ioSpec'] = isset($data['ioSpec']) ? $data['ioSpec'] : null;
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
    * Gets availableZones
    *  **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones **参数解释**： 可用分区列表。RocketMQ 5.X基础版部署架构为单机时，请选择1个可用区，为集群时可选择1个或2个可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets unavailableZones
    *  **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getUnavailableZones()
    {
        return $this->container['unavailableZones'];
    }

    /**
    * Sets unavailableZones
    *
    * @param string[]|null $unavailableZones **参数解释**： 不可用分区列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUnavailableZones($unavailableZones)
    {
        $this->container['unavailableZones'] = $unavailableZones;
        return $this;
    }

    /**
    * Gets ioSpec
    *  **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getIoSpec()
    {
        return $this->container['ioSpec'];
    }

    /**
    * Sets ioSpec
    *
    * @param string|null $ioSpec **参数解释**： 存储类型规格编码。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIoSpec($ioSpec)
    {
        $this->container['ioSpec'] = $ioSpec;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 存储所属服务类型。 **约束限制**： 不涉及。 **取值范围**： evs **默认取值**： 不涉及。
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

