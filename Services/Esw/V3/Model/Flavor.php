<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Flavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Flavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    * id  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    * connections  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    * bandwidth  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    * pps  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    * availableZones  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'connections' => 'int',
            'bandwidth' => 'int',
            'pps' => 'int',
            'availableZones' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    * id  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    * connections  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    * bandwidth  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    * pps  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    * availableZones  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'connections' => 'int32',
        'bandwidth' => 'int32',
        'pps' => 'int32',
        'availableZones' => null
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
    * name  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    * id  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    * connections  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    * bandwidth  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    * pps  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    * availableZones  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'connections' => 'connections',
            'bandwidth' => 'bandwidth',
            'pps' => 'pps',
            'availableZones' => 'available_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    * id  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    * connections  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    * bandwidth  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    * pps  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    * availableZones  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'connections' => 'setConnections',
            'bandwidth' => 'setBandwidth',
            'pps' => 'setPps',
            'availableZones' => 'setAvailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    * id  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    * connections  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    * bandwidth  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    * pps  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    * availableZones  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'connections' => 'getConnections',
            'bandwidth' => 'getBandwidth',
            'pps' => 'getPps',
            'availableZones' => 'getAvailableZones'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['pps'] = isset($data['pps']) ? $data['pps'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['connections'] === null) {
            $invalidProperties[] = "'connections' can't be null";
        }
        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
        }
        if ($this->container['pps'] === null) {
            $invalidProperties[] = "'pps' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
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
    * Gets name
    *  - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
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
    * @param string $name - 参数解释：ESW实例规格名称。 - 约束限制：不涉及。 - 取值范围：  - l2cg.small.ha  - l2cg.medium.ha  - l2cg.large.ha - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
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
    * @param string $id - 参数解释：ESW实例规格的唯一标识。 - 约束限制：不涉及。 - 取值范围：1-3。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets connections
    *  - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    *
    * @return int
    */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
    * Sets connections
    *
    * @param int $connections - 参数解释：该规格ESW实例可承载的二层连接数量。 - 约束限制：不涉及。 - 取值范围：1、3、6。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;
        return $this;
    }

    /**
    * Gets bandwidth
    *  - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    *
    * @return int
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int $bandwidth - 参数解释：该规格ESW实例可承载的最大带宽。 - 约束限制：单位:Gbit/s。 - 取值范围：3、5、10。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets pps
    *  - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    *
    * @return int
    */
    public function getPps()
    {
        return $this->container['pps'];
    }

    /**
    * Sets pps
    *
    * @param int $pps - 参数解释：该规格ESW实例可承载的最大发包数。 - 约束限制：不涉及。 - 取值范围：500000、1000000、2000000。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setPps($pps)
    {
        $this->container['pps'] = $pps;
        return $this;
    }

    /**
    * Gets availableZones
    *  - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string[]
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[] $availableZones - 参数解释：可选用该规格的可用区列表。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
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

