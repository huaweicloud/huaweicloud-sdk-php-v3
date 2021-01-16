<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

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
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vcpus' => 'string',
            'ram' => 'int',
            'disk' => 'string',
            'swap' => 'string',
            'osFlvExtDatAephemeral' => 'int',
            'osFlvDisableDdisabled' => 'bool',
            'rxtxFactor' => 'float',
            'rxtxQuota' => 'string',
            'rxtxCap' => 'string',
            'osFlavorAccessisPublic' => 'bool',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\FlavorLink[]',
            'osExtraSpecs' => '\HuaweiCloud\SDK\Ecs\V2\Model\FlavorExtraSpec',
            'attachableQuantity' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerAttachableQuantity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vcpus' => null,
        'ram' => 'int32',
        'disk' => null,
        'swap' => null,
        'osFlvExtDatAephemeral' => 'int32',
        'osFlvDisableDdisabled' => null,
        'rxtxFactor' => 'float',
        'rxtxQuota' => null,
        'rxtxCap' => null,
        'osFlavorAccessisPublic' => null,
        'links' => null,
        'osExtraSpecs' => null,
        'attachableQuantity' => null
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
            'name' => 'name',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'disk' => 'disk',
            'swap' => 'swap',
            'osFlvExtDatAephemeral' => 'OS-FLV-EXT-DATA:ephemeral',
            'osFlvDisableDdisabled' => 'OS-FLV-DISABLED:disabled',
            'rxtxFactor' => 'rxtx_factor',
            'rxtxQuota' => 'rxtx_quota',
            'rxtxCap' => 'rxtx_cap',
            'osFlavorAccessisPublic' => 'os-flavor-access:is_public',
            'links' => 'links',
            'osExtraSpecs' => 'os_extra_specs',
            'attachableQuantity' => 'attachableQuantity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'disk' => 'setDisk',
            'swap' => 'setSwap',
            'osFlvExtDatAephemeral' => 'setOsFlvExtDatAephemeral',
            'osFlvDisableDdisabled' => 'setOsFlvDisableDdisabled',
            'rxtxFactor' => 'setRxtxFactor',
            'rxtxQuota' => 'setRxtxQuota',
            'rxtxCap' => 'setRxtxCap',
            'osFlavorAccessisPublic' => 'setOsFlavorAccessisPublic',
            'links' => 'setLinks',
            'osExtraSpecs' => 'setOsExtraSpecs',
            'attachableQuantity' => 'setAttachableQuantity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'disk' => 'getDisk',
            'swap' => 'getSwap',
            'osFlvExtDatAephemeral' => 'getOsFlvExtDatAephemeral',
            'osFlvDisableDdisabled' => 'getOsFlvDisableDdisabled',
            'rxtxFactor' => 'getRxtxFactor',
            'rxtxQuota' => 'getRxtxQuota',
            'rxtxCap' => 'getRxtxCap',
            'osFlavorAccessisPublic' => 'getOsFlavorAccessisPublic',
            'links' => 'getLinks',
            'osExtraSpecs' => 'getOsExtraSpecs',
            'attachableQuantity' => 'getAttachableQuantity'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : '0';
        $this->container['swap'] = isset($data['swap']) ? $data['swap'] : null;
        $this->container['osFlvExtDatAephemeral'] = isset($data['osFlvExtDatAephemeral']) ? $data['osFlvExtDatAephemeral'] : null;
        $this->container['osFlvDisableDdisabled'] = isset($data['osFlvDisableDdisabled']) ? $data['osFlvDisableDdisabled'] : false;
        $this->container['rxtxFactor'] = isset($data['rxtxFactor']) ? $data['rxtxFactor'] : null;
        $this->container['rxtxQuota'] = isset($data['rxtxQuota']) ? $data['rxtxQuota'] : null;
        $this->container['rxtxCap'] = isset($data['rxtxCap']) ? $data['rxtxCap'] : null;
        $this->container['osFlavorAccessisPublic'] = isset($data['osFlavorAccessisPublic']) ? $data['osFlavorAccessisPublic'] : true;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['osExtraSpecs'] = isset($data['osExtraSpecs']) ? $data['osExtraSpecs'] : null;
        $this->container['attachableQuantity'] = isset($data['attachableQuantity']) ? $data['attachableQuantity'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['disk'] === null) {
            $invalidProperties[] = "'disk' can't be null";
        }
        if ($this->container['swap'] === null) {
            $invalidProperties[] = "'swap' can't be null";
        }
        if ($this->container['osFlvExtDatAephemeral'] === null) {
            $invalidProperties[] = "'osFlvExtDatAephemeral' can't be null";
        }
        if ($this->container['osFlvDisableDdisabled'] === null) {
            $invalidProperties[] = "'osFlvDisableDdisabled' can't be null";
        }
        if ($this->container['rxtxFactor'] === null) {
            $invalidProperties[] = "'rxtxFactor' can't be null";
        }
        if ($this->container['rxtxQuota'] === null) {
            $invalidProperties[] = "'rxtxQuota' can't be null";
        }
        if ($this->container['rxtxCap'] === null) {
            $invalidProperties[] = "'rxtxCap' can't be null";
        }
        if ($this->container['osFlavorAccessisPublic'] === null) {
            $invalidProperties[] = "'osFlavorAccessisPublic' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['osExtraSpecs'] === null) {
            $invalidProperties[] = "'osExtraSpecs' can't be null";
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
    * @param string $id 云服务器规格的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
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
    * @param string $name 云服务器规格的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vcpus
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
    * @param string $vcpus 云服务器规格对应的CPU核数。
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
    * @return int
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int $ram 云服务器规格对应的内存大小，单位为MB。
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
    * @return string
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param string $disk 云服务器规格对应要求的系统盘大小。  当前未使用该参数，缺省值为0。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets swap
    *
    * @return string
    */
    public function getSwap()
    {
        return $this->container['swap'];
    }

    /**
    * Sets swap
    *
    * @param string $swap 云服务器规格对应要求的交换分区大小。  当前未使用该参数，缺省值为\"\"。
    *
    * @return $this
    */
    public function setSwap($swap)
    {
        $this->container['swap'] = $swap;
        return $this;
    }

    /**
    * Gets osFlvExtDatAephemeral
    *
    * @return int
    */
    public function getOsFlvExtDatAephemeral()
    {
        return $this->container['osFlvExtDatAephemeral'];
    }

    /**
    * Sets osFlvExtDatAephemeral
    *
    * @param int $osFlvExtDatAephemeral 扩展属性，临时盘大小。  当前未使用该参数，缺省值为0
    *
    * @return $this
    */
    public function setOsFlvExtDatAephemeral($osFlvExtDatAephemeral)
    {
        $this->container['osFlvExtDatAephemeral'] = $osFlvExtDatAephemeral;
        return $this;
    }

    /**
    * Gets osFlvDisableDdisabled
    *
    * @return bool
    */
    public function getOsFlvDisableDdisabled()
    {
        return $this->container['osFlvDisableDdisabled'];
    }

    /**
    * Sets osFlvDisableDdisabled
    *
    * @param bool $osFlvDisableDdisabled 扩展属性，该云服务器规格是否禁用。  当前未使用该参数，缺省值为false。
    *
    * @return $this
    */
    public function setOsFlvDisableDdisabled($osFlvDisableDdisabled)
    {
        $this->container['osFlvDisableDdisabled'] = $osFlvDisableDdisabled;
        return $this;
    }

    /**
    * Gets rxtxFactor
    *
    * @return float
    */
    public function getRxtxFactor()
    {
        return $this->container['rxtxFactor'];
    }

    /**
    * Sets rxtxFactor
    *
    * @param float $rxtxFactor 云服务器可使用网络带宽与网络硬件带宽的比例。  当前未使用该参数，缺省值为1.0。
    *
    * @return $this
    */
    public function setRxtxFactor($rxtxFactor)
    {
        $this->container['rxtxFactor'] = $rxtxFactor;
        return $this;
    }

    /**
    * Gets rxtxQuota
    *
    * @return string
    */
    public function getRxtxQuota()
    {
        return $this->container['rxtxQuota'];
    }

    /**
    * Sets rxtxQuota
    *
    * @param string $rxtxQuota 云服务器可使用网络带宽的软限制。  当前未使用该参数，缺省值为null。
    *
    * @return $this
    */
    public function setRxtxQuota($rxtxQuota)
    {
        $this->container['rxtxQuota'] = $rxtxQuota;
        return $this;
    }

    /**
    * Gets rxtxCap
    *
    * @return string
    */
    public function getRxtxCap()
    {
        return $this->container['rxtxCap'];
    }

    /**
    * Sets rxtxCap
    *
    * @param string $rxtxCap 云服务器可使用网络带宽的硬限制。  当前未使用该参数，缺省值为null。
    *
    * @return $this
    */
    public function setRxtxCap($rxtxCap)
    {
        $this->container['rxtxCap'] = $rxtxCap;
        return $this;
    }

    /**
    * Gets osFlavorAccessisPublic
    *
    * @return bool
    */
    public function getOsFlavorAccessisPublic()
    {
        return $this->container['osFlavorAccessisPublic'];
    }

    /**
    * Sets osFlavorAccessisPublic
    *
    * @param bool $osFlavorAccessisPublic 扩展属性，flavor是否给所有租户使用。  - true：表示给所有租户使用。 - false：表示给指定租户使用。  缺省值为true。
    *
    * @return $this
    */
    public function setOsFlavorAccessisPublic($osFlavorAccessisPublic)
    {
        $this->container['osFlavorAccessisPublic'] = $osFlavorAccessisPublic;
        return $this;
    }

    /**
    * Gets links
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\FlavorLink[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\FlavorLink[] $links 规格相关快捷链接地址。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets osExtraSpecs
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\FlavorExtraSpec
    */
    public function getOsExtraSpecs()
    {
        return $this->container['osExtraSpecs'];
    }

    /**
    * Sets osExtraSpecs
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\FlavorExtraSpec $osExtraSpecs osExtraSpecs
    *
    * @return $this
    */
    public function setOsExtraSpecs($osExtraSpecs)
    {
        $this->container['osExtraSpecs'] = $osExtraSpecs;
        return $this;
    }

    /**
    * Gets attachableQuantity
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerAttachableQuantity|null
    */
    public function getAttachableQuantity()
    {
        return $this->container['attachableQuantity'];
    }

    /**
    * Sets attachableQuantity
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerAttachableQuantity|null $attachableQuantity attachableQuantity
    *
    * @return $this
    */
    public function setAttachableQuantity($attachableQuantity)
    {
        $this->container['attachableQuantity'] = $attachableQuantity;
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

