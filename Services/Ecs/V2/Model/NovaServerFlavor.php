<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaServerFlavor implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaServerFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]',
            'vcpus' => 'int',
            'ram' => 'int',
            'disk' => 'int',
            'ephemeral' => 'int',
            'swap' => 'int',
            'originalName' => 'string',
            'extraSpecs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'vcpus' => 'int32',
        'ram' => 'int32',
        'disk' => 'int32',
        'ephemeral' => 'int32',
        'swap' => 'int32',
        'originalName' => null,
        'extraSpecs' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'disk' => 'disk',
            'ephemeral' => 'ephemeral',
            'swap' => 'swap',
            'originalName' => 'original_name',
            'extraSpecs' => 'extra_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'disk' => 'setDisk',
            'ephemeral' => 'setEphemeral',
            'swap' => 'setSwap',
            'originalName' => 'setOriginalName',
            'extraSpecs' => 'setExtraSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'disk' => 'getDisk',
            'ephemeral' => 'getEphemeral',
            'swap' => 'getSwap',
            'originalName' => 'getOriginalName',
            'extraSpecs' => 'getExtraSpecs'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['ephemeral'] = isset($data['ephemeral']) ? $data['ephemeral'] : null;
        $this->container['swap'] = isset($data['swap']) ? $data['swap'] : null;
        $this->container['originalName'] = isset($data['originalName']) ? $data['originalName'] : null;
        $this->container['extraSpecs'] = isset($data['extraSpecs']) ? $data['extraSpecs'] : null;
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
    * @param string|null $id 云服务器类型ID。  微版本2.47后不支持。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]|null $links 云服务器类型相关标记快捷链接信息。  微版本2.47后不支持。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets vcpus
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
    * @param int|null $vcpus 该云服务器规格对应的CPU核数。  在微版本2.47后支持。
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
    * @param int|null $ram 该云服务器规格对应的内存大小，单位为MB。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets disk
    *
    * @return int|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param int|null $disk 该云服务器规格对应要求系统盘大小，0为不限制。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets ephemeral
    *
    * @return int|null
    */
    public function getEphemeral()
    {
        return $this->container['ephemeral'];
    }

    /**
    * Sets ephemeral
    *
    * @param int|null $ephemeral 未使用。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setEphemeral($ephemeral)
    {
        $this->container['ephemeral'] = $ephemeral;
        return $this;
    }

    /**
    * Gets swap
    *
    * @return int|null
    */
    public function getSwap()
    {
        return $this->container['swap'];
    }

    /**
    * Sets swap
    *
    * @param int|null $swap 未使用。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setSwap($swap)
    {
        $this->container['swap'] = $swap;
        return $this;
    }

    /**
    * Gets originalName
    *
    * @return string|null
    */
    public function getOriginalName()
    {
        return $this->container['originalName'];
    }

    /**
    * Sets originalName
    *
    * @param string|null $originalName 云服务器规格名称。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setOriginalName($originalName)
    {
        $this->container['originalName'] = $originalName;
        return $this;
    }

    /**
    * Gets extraSpecs
    *
    * @return map[string,string]|null
    */
    public function getExtraSpecs()
    {
        return $this->container['extraSpecs'];
    }

    /**
    * Sets extraSpecs
    *
    * @param map[string,string]|null $extraSpecs flavor扩展字段。  在微版本2.47后支持。
    *
    * @return $this
    */
    public function setExtraSpecs($extraSpecs)
    {
        $this->container['extraSpecs'] = $extraSpecs;
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

