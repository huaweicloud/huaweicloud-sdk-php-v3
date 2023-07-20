<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DedicatedComputeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DedicatedComputeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vcpusTotal  专属资源池中cpu总数。
    * vcpusUsed  专属资源池已使用的cpu数。
    * ramTotal  专属资源池计算内存大小, 单位GB。
    * ramUsed  专属资源池已使用的计算内存大小，单位GB。
    * specCode  专属资源池计算资源规格码。
    * hostNum  专属资源池计算主机数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vcpusTotal' => 'int',
            'vcpusUsed' => 'int',
            'ramTotal' => 'int',
            'ramUsed' => 'int',
            'specCode' => 'string',
            'hostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vcpusTotal  专属资源池中cpu总数。
    * vcpusUsed  专属资源池已使用的cpu数。
    * ramTotal  专属资源池计算内存大小, 单位GB。
    * ramUsed  专属资源池已使用的计算内存大小，单位GB。
    * specCode  专属资源池计算资源规格码。
    * hostNum  专属资源池计算主机数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vcpusTotal' => 'int32',
        'vcpusUsed' => 'int32',
        'ramTotal' => 'int32',
        'ramUsed' => 'int32',
        'specCode' => null,
        'hostNum' => 'int32'
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
    * vcpusTotal  专属资源池中cpu总数。
    * vcpusUsed  专属资源池已使用的cpu数。
    * ramTotal  专属资源池计算内存大小, 单位GB。
    * ramUsed  专属资源池已使用的计算内存大小，单位GB。
    * specCode  专属资源池计算资源规格码。
    * hostNum  专属资源池计算主机数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vcpusTotal' => 'vcpus_total',
            'vcpusUsed' => 'vcpus_used',
            'ramTotal' => 'ram_total',
            'ramUsed' => 'ram_used',
            'specCode' => 'spec_code',
            'hostNum' => 'host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vcpusTotal  专属资源池中cpu总数。
    * vcpusUsed  专属资源池已使用的cpu数。
    * ramTotal  专属资源池计算内存大小, 单位GB。
    * ramUsed  专属资源池已使用的计算内存大小，单位GB。
    * specCode  专属资源池计算资源规格码。
    * hostNum  专属资源池计算主机数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'vcpusTotal' => 'setVcpusTotal',
            'vcpusUsed' => 'setVcpusUsed',
            'ramTotal' => 'setRamTotal',
            'ramUsed' => 'setRamUsed',
            'specCode' => 'setSpecCode',
            'hostNum' => 'setHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vcpusTotal  专属资源池中cpu总数。
    * vcpusUsed  专属资源池已使用的cpu数。
    * ramTotal  专属资源池计算内存大小, 单位GB。
    * ramUsed  专属资源池已使用的计算内存大小，单位GB。
    * specCode  专属资源池计算资源规格码。
    * hostNum  专属资源池计算主机数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'vcpusTotal' => 'getVcpusTotal',
            'vcpusUsed' => 'getVcpusUsed',
            'ramTotal' => 'getRamTotal',
            'ramUsed' => 'getRamUsed',
            'specCode' => 'getSpecCode',
            'hostNum' => 'getHostNum'
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
        $this->container['vcpusTotal'] = isset($data['vcpusTotal']) ? $data['vcpusTotal'] : null;
        $this->container['vcpusUsed'] = isset($data['vcpusUsed']) ? $data['vcpusUsed'] : null;
        $this->container['ramTotal'] = isset($data['ramTotal']) ? $data['ramTotal'] : null;
        $this->container['ramUsed'] = isset($data['ramUsed']) ? $data['ramUsed'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vcpusTotal'] === null) {
            $invalidProperties[] = "'vcpusTotal' can't be null";
        }
        if ($this->container['vcpusUsed'] === null) {
            $invalidProperties[] = "'vcpusUsed' can't be null";
        }
        if ($this->container['ramTotal'] === null) {
            $invalidProperties[] = "'ramTotal' can't be null";
        }
        if ($this->container['ramUsed'] === null) {
            $invalidProperties[] = "'ramUsed' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['hostNum'] === null) {
            $invalidProperties[] = "'hostNum' can't be null";
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
    * Gets vcpusTotal
    *  专属资源池中cpu总数。
    *
    * @return int
    */
    public function getVcpusTotal()
    {
        return $this->container['vcpusTotal'];
    }

    /**
    * Sets vcpusTotal
    *
    * @param int $vcpusTotal 专属资源池中cpu总数。
    *
    * @return $this
    */
    public function setVcpusTotal($vcpusTotal)
    {
        $this->container['vcpusTotal'] = $vcpusTotal;
        return $this;
    }

    /**
    * Gets vcpusUsed
    *  专属资源池已使用的cpu数。
    *
    * @return int
    */
    public function getVcpusUsed()
    {
        return $this->container['vcpusUsed'];
    }

    /**
    * Sets vcpusUsed
    *
    * @param int $vcpusUsed 专属资源池已使用的cpu数。
    *
    * @return $this
    */
    public function setVcpusUsed($vcpusUsed)
    {
        $this->container['vcpusUsed'] = $vcpusUsed;
        return $this;
    }

    /**
    * Gets ramTotal
    *  专属资源池计算内存大小, 单位GB。
    *
    * @return int
    */
    public function getRamTotal()
    {
        return $this->container['ramTotal'];
    }

    /**
    * Sets ramTotal
    *
    * @param int $ramTotal 专属资源池计算内存大小, 单位GB。
    *
    * @return $this
    */
    public function setRamTotal($ramTotal)
    {
        $this->container['ramTotal'] = $ramTotal;
        return $this;
    }

    /**
    * Gets ramUsed
    *  专属资源池已使用的计算内存大小，单位GB。
    *
    * @return int
    */
    public function getRamUsed()
    {
        return $this->container['ramUsed'];
    }

    /**
    * Sets ramUsed
    *
    * @param int $ramUsed 专属资源池已使用的计算内存大小，单位GB。
    *
    * @return $this
    */
    public function setRamUsed($ramUsed)
    {
        $this->container['ramUsed'] = $ramUsed;
        return $this;
    }

    /**
    * Gets specCode
    *  专属资源池计算资源规格码。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 专属资源池计算资源规格码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets hostNum
    *  专属资源池计算主机数量。
    *
    * @return int
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int $hostNum 专属资源池计算主机数量。
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
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

