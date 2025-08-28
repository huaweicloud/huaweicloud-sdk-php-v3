<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

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
    * id  规格id。
    * specCode  资源规格编码。
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位:GB。
    * azInfos  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'specCode' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'azInfos' => '\HuaweiCloud\SDK\Ddm\V1\Model\AvailableZone[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规格id。
    * specCode  资源规格编码。
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位:GB。
    * azInfos  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'specCode' => null,
        'vcpus' => null,
        'ram' => null,
        'azInfos' => null
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
    * id  规格id。
    * specCode  资源规格编码。
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位:GB。
    * azInfos  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'specCode' => 'spec_code',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'azInfos' => 'az_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规格id。
    * specCode  资源规格编码。
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位:GB。
    * azInfos  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'specCode' => 'setSpecCode',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'azInfos' => 'setAzInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规格id。
    * specCode  资源规格编码。
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位:GB。
    * azInfos  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'specCode' => 'getSpecCode',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'azInfos' => 'getAzInfos'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['azInfos'] = isset($data['azInfos']) ? $data['azInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['azInfos'] === null) {
            $invalidProperties[] = "'azInfos' can't be null";
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
    * Gets id
    *  规格id。
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
    * @param string $id 规格id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specCode
    *  资源规格编码。
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
    * @param string $specCode 资源规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU大小。例如：1表示1U。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus CPU大小。例如：1表示1U。
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
    *  内存大小，单位:GB。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 内存大小，单位:GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets azInfos
    *  可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\AvailableZone[]
    */
    public function getAzInfos()
    {
        return $this->container['azInfos'];
    }

    /**
    * Sets azInfos
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\AvailableZone[] $azInfos 可用区信息  normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。
    *
    * @return $this
    */
    public function setAzInfos($azInfos)
    {
        $this->container['azInfos'] = $azInfos;
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

