<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

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
    protected static $openAPIModelName = 'Instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  集群所在可用区的ID。
    * cuNum  CloudTable集群计算单元节点数目，至少为2。
    * lemonNum  CloudTable集群Lemon节点数目。
    * nics  集群所在网络信息。
    * tsdNum  CloudTable集群TSD节点数目，至少为2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'cuNum' => 'int',
            'lemonNum' => 'int',
            'nics' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Nics[]',
            'tsdNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  集群所在可用区的ID。
    * cuNum  CloudTable集群计算单元节点数目，至少为2。
    * lemonNum  CloudTable集群Lemon节点数目。
    * nics  集群所在网络信息。
    * tsdNum  CloudTable集群TSD节点数目，至少为2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'cuNum' => 'int32',
        'lemonNum' => 'int32',
        'nics' => null,
        'tsdNum' => 'int32'
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
    * availabilityZone  集群所在可用区的ID。
    * cuNum  CloudTable集群计算单元节点数目，至少为2。
    * lemonNum  CloudTable集群Lemon节点数目。
    * nics  集群所在网络信息。
    * tsdNum  CloudTable集群TSD节点数目，至少为2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'cuNum' => 'cu_num',
            'lemonNum' => 'lemon_num',
            'nics' => 'nics',
            'tsdNum' => 'tsd_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  集群所在可用区的ID。
    * cuNum  CloudTable集群计算单元节点数目，至少为2。
    * lemonNum  CloudTable集群Lemon节点数目。
    * nics  集群所在网络信息。
    * tsdNum  CloudTable集群TSD节点数目，至少为2。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'cuNum' => 'setCuNum',
            'lemonNum' => 'setLemonNum',
            'nics' => 'setNics',
            'tsdNum' => 'setTsdNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  集群所在可用区的ID。
    * cuNum  CloudTable集群计算单元节点数目，至少为2。
    * lemonNum  CloudTable集群Lemon节点数目。
    * nics  集群所在网络信息。
    * tsdNum  CloudTable集群TSD节点数目，至少为2。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'cuNum' => 'getCuNum',
            'lemonNum' => 'getLemonNum',
            'nics' => 'getNics',
            'tsdNum' => 'getTsdNum'
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
        $this->container['cuNum'] = isset($data['cuNum']) ? $data['cuNum'] : null;
        $this->container['lemonNum'] = isset($data['lemonNum']) ? $data['lemonNum'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['tsdNum'] = isset($data['tsdNum']) ? $data['tsdNum'] : null;
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
        if ($this->container['cuNum'] === null) {
            $invalidProperties[] = "'cuNum' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['tsdNum'] === null) {
            $invalidProperties[] = "'tsdNum' can't be null";
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
    *  集群所在可用区的ID。
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
    * @param string $availabilityZone 集群所在可用区的ID。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets cuNum
    *  CloudTable集群计算单元节点数目，至少为2。
    *
    * @return int
    */
    public function getCuNum()
    {
        return $this->container['cuNum'];
    }

    /**
    * Sets cuNum
    *
    * @param int $cuNum CloudTable集群计算单元节点数目，至少为2。
    *
    * @return $this
    */
    public function setCuNum($cuNum)
    {
        $this->container['cuNum'] = $cuNum;
        return $this;
    }

    /**
    * Gets lemonNum
    *  CloudTable集群Lemon节点数目。
    *
    * @return int|null
    */
    public function getLemonNum()
    {
        return $this->container['lemonNum'];
    }

    /**
    * Sets lemonNum
    *
    * @param int|null $lemonNum CloudTable集群Lemon节点数目。
    *
    * @return $this
    */
    public function setLemonNum($lemonNum)
    {
        $this->container['lemonNum'] = $lemonNum;
        return $this;
    }

    /**
    * Gets nics
    *  集群所在网络信息。
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Nics[] $nics 集群所在网络信息。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets tsdNum
    *  CloudTable集群TSD节点数目，至少为2。
    *
    * @return int
    */
    public function getTsdNum()
    {
        return $this->container['tsdNum'];
    }

    /**
    * Sets tsdNum
    *
    * @param int $tsdNum CloudTable集群TSD节点数目，至少为2。
    *
    * @return $this
    */
    public function setTsdNum($tsdNum)
    {
        $this->container['tsdNum'] = $tsdNum;
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

