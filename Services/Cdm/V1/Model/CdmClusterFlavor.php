<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmClusterFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmClusterFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  CPU。
    * ram  内存。
    * name  规格名称。
    * region  region。
    * typename  类型名称。
    * clusterMode  集群模式。
    * status  规格状态。
    * strId  规格ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'int',
            'ram' => 'int',
            'name' => 'string',
            'region' => 'string',
            'typename' => 'string',
            'clusterMode' => 'string',
            'status' => 'string',
            'strId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  CPU。
    * ram  内存。
    * name  规格名称。
    * region  region。
    * typename  类型名称。
    * clusterMode  集群模式。
    * status  规格状态。
    * strId  规格ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'ram' => null,
        'name' => null,
        'region' => null,
        'typename' => null,
        'clusterMode' => null,
        'status' => null,
        'strId' => null
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
    * cpu  CPU。
    * ram  内存。
    * name  规格名称。
    * region  region。
    * typename  类型名称。
    * clusterMode  集群模式。
    * status  规格状态。
    * strId  规格ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'ram' => 'ram',
            'name' => 'name',
            'region' => 'region',
            'typename' => 'typename',
            'clusterMode' => 'clusterMode',
            'status' => 'status',
            'strId' => 'str_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  CPU。
    * ram  内存。
    * name  规格名称。
    * region  region。
    * typename  类型名称。
    * clusterMode  集群模式。
    * status  规格状态。
    * strId  规格ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'ram' => 'setRam',
            'name' => 'setName',
            'region' => 'setRegion',
            'typename' => 'setTypename',
            'clusterMode' => 'setClusterMode',
            'status' => 'setStatus',
            'strId' => 'setStrId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  CPU。
    * ram  内存。
    * name  规格名称。
    * region  region。
    * typename  类型名称。
    * clusterMode  集群模式。
    * status  规格状态。
    * strId  规格ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'ram' => 'getRam',
            'name' => 'getName',
            'region' => 'getRegion',
            'typename' => 'getTypename',
            'clusterMode' => 'getClusterMode',
            'status' => 'getStatus',
            'strId' => 'getStrId'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['typename'] = isset($data['typename']) ? $data['typename'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['strId'] = isset($data['strId']) ? $data['strId'] : null;
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
    * Gets cpu
    *  CPU。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu CPU。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ram
    *  内存。
    *
    * @return int|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int|null $ram 内存。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets name
    *  规格名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  region。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets typename
    *  类型名称。
    *
    * @return string|null
    */
    public function getTypename()
    {
        return $this->container['typename'];
    }

    /**
    * Sets typename
    *
    * @param string|null $typename 类型名称。
    *
    * @return $this
    */
    public function setTypename($typename)
    {
        $this->container['typename'] = $typename;
        return $this;
    }

    /**
    * Gets clusterMode
    *  集群模式。
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode 集群模式。
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets status
    *  规格状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 规格状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets strId
    *  规格ID。
    *
    * @return string|null
    */
    public function getStrId()
    {
        return $this->container['strId'];
    }

    /**
    * Sets strId
    *
    * @param string|null $strId 规格ID。
    *
    * @return $this
    */
    public function setStrId($strId)
    {
        $this->container['strId'] = $strId;
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

