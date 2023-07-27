<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  裸金属服务器规格的ID
    * name  裸金属服务器规格的名称
    * vcpus  该裸金属服务器规格对应的CPU核数。
    * ram  该裸金属服务器规格对应的内存大小，单位为MB。
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * swap  未使用
    * osFlvExtDatAephemeral  未使用
    * osFlvDisableDdisabled  未使用
    * rxtxFactor  未使用
    * rxtxQuota  未使用
    * rxtxCap  未使用
    * osFlavorAccessisPublic  是否是公共规格。false：私有规格；true：公共规格
    * links  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    * osExtraSpecs  osExtraSpecs
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
            'links' => '\HuaweiCloud\SDK\Bms\V1\Model\LinksInfo[]',
            'osExtraSpecs' => '\HuaweiCloud\SDK\Bms\V1\Model\OsExtraSpecs'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  裸金属服务器规格的ID
    * name  裸金属服务器规格的名称
    * vcpus  该裸金属服务器规格对应的CPU核数。
    * ram  该裸金属服务器规格对应的内存大小，单位为MB。
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * swap  未使用
    * osFlvExtDatAephemeral  未使用
    * osFlvDisableDdisabled  未使用
    * rxtxFactor  未使用
    * rxtxQuota  未使用
    * rxtxCap  未使用
    * osFlavorAccessisPublic  是否是公共规格。false：私有规格；true：公共规格
    * links  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    * osExtraSpecs  osExtraSpecs
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
        'osFlvExtDatAephemeral' => null,
        'osFlvDisableDdisabled' => null,
        'rxtxFactor' => 'float',
        'rxtxQuota' => null,
        'rxtxCap' => null,
        'osFlavorAccessisPublic' => null,
        'links' => null,
        'osExtraSpecs' => null
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
    * id  裸金属服务器规格的ID
    * name  裸金属服务器规格的名称
    * vcpus  该裸金属服务器规格对应的CPU核数。
    * ram  该裸金属服务器规格对应的内存大小，单位为MB。
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * swap  未使用
    * osFlvExtDatAephemeral  未使用
    * osFlvDisableDdisabled  未使用
    * rxtxFactor  未使用
    * rxtxQuota  未使用
    * rxtxCap  未使用
    * osFlavorAccessisPublic  是否是公共规格。false：私有规格；true：公共规格
    * links  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    * osExtraSpecs  osExtraSpecs
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
            'osExtraSpecs' => 'os_extra_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  裸金属服务器规格的ID
    * name  裸金属服务器规格的名称
    * vcpus  该裸金属服务器规格对应的CPU核数。
    * ram  该裸金属服务器规格对应的内存大小，单位为MB。
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * swap  未使用
    * osFlvExtDatAephemeral  未使用
    * osFlvDisableDdisabled  未使用
    * rxtxFactor  未使用
    * rxtxQuota  未使用
    * rxtxCap  未使用
    * osFlavorAccessisPublic  是否是公共规格。false：私有规格；true：公共规格
    * links  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    * osExtraSpecs  osExtraSpecs
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
            'osExtraSpecs' => 'setOsExtraSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  裸金属服务器规格的ID
    * name  裸金属服务器规格的名称
    * vcpus  该裸金属服务器规格对应的CPU核数。
    * ram  该裸金属服务器规格对应的内存大小，单位为MB。
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * swap  未使用
    * osFlvExtDatAephemeral  未使用
    * osFlvDisableDdisabled  未使用
    * rxtxFactor  未使用
    * rxtxQuota  未使用
    * rxtxCap  未使用
    * osFlavorAccessisPublic  是否是公共规格。false：私有规格；true：公共规格
    * links  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    * osExtraSpecs  osExtraSpecs
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
            'osExtraSpecs' => 'getOsExtraSpecs'
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
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['swap'] = isset($data['swap']) ? $data['swap'] : null;
        $this->container['osFlvExtDatAephemeral'] = isset($data['osFlvExtDatAephemeral']) ? $data['osFlvExtDatAephemeral'] : null;
        $this->container['osFlvDisableDdisabled'] = isset($data['osFlvDisableDdisabled']) ? $data['osFlvDisableDdisabled'] : null;
        $this->container['rxtxFactor'] = isset($data['rxtxFactor']) ? $data['rxtxFactor'] : null;
        $this->container['rxtxQuota'] = isset($data['rxtxQuota']) ? $data['rxtxQuota'] : null;
        $this->container['rxtxCap'] = isset($data['rxtxCap']) ? $data['rxtxCap'] : null;
        $this->container['osFlavorAccessisPublic'] = isset($data['osFlavorAccessisPublic']) ? $data['osFlavorAccessisPublic'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['osExtraSpecs'] = isset($data['osExtraSpecs']) ? $data['osExtraSpecs'] : null;
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
    *  裸金属服务器规格的ID
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
    * @param string $id 裸金属服务器规格的ID
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
    *  裸金属服务器规格的名称
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
    * @param string $name 裸金属服务器规格的名称
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
    *  该裸金属服务器规格对应的CPU核数。
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
    * @param string|null $vcpus 该裸金属服务器规格对应的CPU核数。
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
    *  该裸金属服务器规格对应的内存大小，单位为MB。
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
    * @param int|null $ram 该裸金属服务器规格对应的内存大小，单位为MB。
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
    *  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    *
    * @return string|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param string|null $disk 该裸金属服务器规格对应要求系统盘大小，0为不限制。
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
    *  未使用
    *
    * @return string|null
    */
    public function getSwap()
    {
        return $this->container['swap'];
    }

    /**
    * Sets swap
    *
    * @param string|null $swap 未使用
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
    *  未使用
    *
    * @return int|null
    */
    public function getOsFlvExtDatAephemeral()
    {
        return $this->container['osFlvExtDatAephemeral'];
    }

    /**
    * Sets osFlvExtDatAephemeral
    *
    * @param int|null $osFlvExtDatAephemeral 未使用
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
    *  未使用
    *
    * @return bool|null
    */
    public function getOsFlvDisableDdisabled()
    {
        return $this->container['osFlvDisableDdisabled'];
    }

    /**
    * Sets osFlvDisableDdisabled
    *
    * @param bool|null $osFlvDisableDdisabled 未使用
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
    *  未使用
    *
    * @return float|null
    */
    public function getRxtxFactor()
    {
        return $this->container['rxtxFactor'];
    }

    /**
    * Sets rxtxFactor
    *
    * @param float|null $rxtxFactor 未使用
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
    *  未使用
    *
    * @return string|null
    */
    public function getRxtxQuota()
    {
        return $this->container['rxtxQuota'];
    }

    /**
    * Sets rxtxQuota
    *
    * @param string|null $rxtxQuota 未使用
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
    *  未使用
    *
    * @return string|null
    */
    public function getRxtxCap()
    {
        return $this->container['rxtxCap'];
    }

    /**
    * Sets rxtxCap
    *
    * @param string|null $rxtxCap 未使用
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
    *  是否是公共规格。false：私有规格；true：公共规格
    *
    * @return bool|null
    */
    public function getOsFlavorAccessisPublic()
    {
        return $this->container['osFlavorAccessisPublic'];
    }

    /**
    * Sets osFlavorAccessisPublic
    *
    * @param bool|null $osFlavorAccessisPublic 是否是公共规格。false：私有规格；true：公共规格
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
    *  规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\LinksInfo[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\LinksInfo[]|null $links 规格相关快捷链接地址，详情请参见表3 links字段数据结构说明。
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
    *  osExtraSpecs
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\OsExtraSpecs
    */
    public function getOsExtraSpecs()
    {
        return $this->container['osExtraSpecs'];
    }

    /**
    * Sets osExtraSpecs
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\OsExtraSpecs $osExtraSpecs osExtraSpecs
    *
    * @return $this
    */
    public function setOsExtraSpecs($osExtraSpecs)
    {
        $this->container['osExtraSpecs'] = $osExtraSpecs;
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

