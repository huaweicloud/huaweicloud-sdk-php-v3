<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseSpecFlavorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseSpecFlavorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * mode  mode
    * version  version
    * vcpus  vcpus
    * ram  ram
    * specCode  specCode
    * groupType  groupType
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'mode' => 'string',
            'version' => 'string',
            'vcpus' => 'int',
            'ram' => 'int',
            'specCode' => 'string',
            'groupType' => 'string',
            'availabilityZones' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseSpecFlavorInfoAvailabilityZones[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * mode  mode
    * version  version
    * vcpus  vcpus
    * ram  ram
    * specCode  specCode
    * groupType  groupType
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'mode' => null,
        'version' => null,
        'vcpus' => null,
        'ram' => null,
        'specCode' => null,
        'groupType' => null,
        'availabilityZones' => null
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
    * id  id
    * mode  mode
    * version  version
    * vcpus  vcpus
    * ram  ram
    * specCode  specCode
    * groupType  groupType
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'mode' => 'mode',
            'version' => 'version',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'specCode' => 'spec_code',
            'groupType' => 'group_type',
            'availabilityZones' => 'availability_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * mode  mode
    * version  version
    * vcpus  vcpus
    * ram  ram
    * specCode  specCode
    * groupType  groupType
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'mode' => 'setMode',
            'version' => 'setVersion',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'specCode' => 'setSpecCode',
            'groupType' => 'setGroupType',
            'availabilityZones' => 'setAvailabilityZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * mode  mode
    * version  version
    * vcpus  vcpus
    * ram  ram
    * specCode  specCode
    * groupType  groupType
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'mode' => 'getMode',
            'version' => 'getVersion',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'specCode' => 'getSpecCode',
            'groupType' => 'getGroupType',
            'availabilityZones' => 'getAvailabilityZones'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
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
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mode
    *  mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode mode
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets vcpus
    *  vcpus
    *
    * @return int|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int|null $vcpus vcpus
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
    *  ram
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
    * @param int|null $ram ram
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets specCode
    *  specCode
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode specCode
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets groupType
    *  groupType
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType groupType
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  availabilityZones
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseSpecFlavorInfoAvailabilityZones[]|null
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseSpecFlavorInfoAvailabilityZones[]|null $availabilityZones availabilityZones
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
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

