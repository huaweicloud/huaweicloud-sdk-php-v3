<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableFlavorInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableFlavorInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCpde  资源规格编码。
    * vcpus  CPU核数。
    * ram  内存大小，单位：GB。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCpde' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'azStatus' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCpde  资源规格编码。
    * vcpus  CPU核数。
    * ram  内存大小，单位：GB。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCpde' => null,
        'vcpus' => null,
        'ram' => null,
        'azStatus' => null
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
    * specCpde  资源规格编码。
    * vcpus  CPU核数。
    * ram  内存大小，单位：GB。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCpde' => 'spec_cpde',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'azStatus' => 'az_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCpde  资源规格编码。
    * vcpus  CPU核数。
    * ram  内存大小，单位：GB。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'specCpde' => 'setSpecCpde',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'azStatus' => 'setAzStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCpde  资源规格编码。
    * vcpus  CPU核数。
    * ram  内存大小，单位：GB。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'specCpde' => 'getSpecCpde',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'azStatus' => 'getAzStatus'
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
        $this->container['specCpde'] = isset($data['specCpde']) ? $data['specCpde'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
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
    * Gets specCpde
    *  资源规格编码。
    *
    * @return string|null
    */
    public function getSpecCpde()
    {
        return $this->container['specCpde'];
    }

    /**
    * Sets specCpde
    *
    * @param string|null $specCpde 资源规格编码。
    *
    * @return $this
    */
    public function setSpecCpde($specCpde)
    {
        $this->container['specCpde'] = $specCpde;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU核数。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus CPU核数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位：GB。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram 内存大小，单位：GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets azStatus
    *  其中key是可用区编号，value是规格所在az的状态。
    *
    * @return map[string,string]|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string]|null $azStatus 其中key是可用区编号，value是规格所在az的状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
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

