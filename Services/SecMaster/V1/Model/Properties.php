<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Properties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hwcEcs  hwcEcs
    * hwcEip  hwcEip
    * hwcVpc  hwcVpc
    * hwcSubnet  hwcSubnet
    * hwcRds  hwcRds
    * hwcDomain  hwcDomain
    * website  website
    * ocaIp  ocaIp
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hwcEcs' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcs',
            'hwcEip' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEip',
            'hwcVpc' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpc',
            'hwcSubnet' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcSubnet',
            'hwcRds' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRds',
            'hwcDomain' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomain',
            'website' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Website',
            'ocaIp' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OcaIp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hwcEcs  hwcEcs
    * hwcEip  hwcEip
    * hwcVpc  hwcVpc
    * hwcSubnet  hwcSubnet
    * hwcRds  hwcRds
    * hwcDomain  hwcDomain
    * website  website
    * ocaIp  ocaIp
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hwcEcs' => null,
        'hwcEip' => null,
        'hwcVpc' => null,
        'hwcSubnet' => null,
        'hwcRds' => null,
        'hwcDomain' => null,
        'website' => null,
        'ocaIp' => null
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
    * hwcEcs  hwcEcs
    * hwcEip  hwcEip
    * hwcVpc  hwcVpc
    * hwcSubnet  hwcSubnet
    * hwcRds  hwcRds
    * hwcDomain  hwcDomain
    * website  website
    * ocaIp  ocaIp
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hwcEcs' => 'hwc_ecs',
            'hwcEip' => 'hwc_eip',
            'hwcVpc' => 'hwc_vpc',
            'hwcSubnet' => 'hwc_subnet',
            'hwcRds' => 'hwc_rds',
            'hwcDomain' => 'hwc_domain',
            'website' => 'website',
            'ocaIp' => 'oca_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hwcEcs  hwcEcs
    * hwcEip  hwcEip
    * hwcVpc  hwcVpc
    * hwcSubnet  hwcSubnet
    * hwcRds  hwcRds
    * hwcDomain  hwcDomain
    * website  website
    * ocaIp  ocaIp
    *
    * @var string[]
    */
    protected static $setters = [
            'hwcEcs' => 'setHwcEcs',
            'hwcEip' => 'setHwcEip',
            'hwcVpc' => 'setHwcVpc',
            'hwcSubnet' => 'setHwcSubnet',
            'hwcRds' => 'setHwcRds',
            'hwcDomain' => 'setHwcDomain',
            'website' => 'setWebsite',
            'ocaIp' => 'setOcaIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hwcEcs  hwcEcs
    * hwcEip  hwcEip
    * hwcVpc  hwcVpc
    * hwcSubnet  hwcSubnet
    * hwcRds  hwcRds
    * hwcDomain  hwcDomain
    * website  website
    * ocaIp  ocaIp
    *
    * @var string[]
    */
    protected static $getters = [
            'hwcEcs' => 'getHwcEcs',
            'hwcEip' => 'getHwcEip',
            'hwcVpc' => 'getHwcVpc',
            'hwcSubnet' => 'getHwcSubnet',
            'hwcRds' => 'getHwcRds',
            'hwcDomain' => 'getHwcDomain',
            'website' => 'getWebsite',
            'ocaIp' => 'getOcaIp'
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
        $this->container['hwcEcs'] = isset($data['hwcEcs']) ? $data['hwcEcs'] : null;
        $this->container['hwcEip'] = isset($data['hwcEip']) ? $data['hwcEip'] : null;
        $this->container['hwcVpc'] = isset($data['hwcVpc']) ? $data['hwcVpc'] : null;
        $this->container['hwcSubnet'] = isset($data['hwcSubnet']) ? $data['hwcSubnet'] : null;
        $this->container['hwcRds'] = isset($data['hwcRds']) ? $data['hwcRds'] : null;
        $this->container['hwcDomain'] = isset($data['hwcDomain']) ? $data['hwcDomain'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['ocaIp'] = isset($data['ocaIp']) ? $data['ocaIp'] : null;
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
    * Gets hwcEcs
    *  hwcEcs
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcs|null
    */
    public function getHwcEcs()
    {
        return $this->container['hwcEcs'];
    }

    /**
    * Sets hwcEcs
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcs|null $hwcEcs hwcEcs
    *
    * @return $this
    */
    public function setHwcEcs($hwcEcs)
    {
        $this->container['hwcEcs'] = $hwcEcs;
        return $this;
    }

    /**
    * Gets hwcEip
    *  hwcEip
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEip|null
    */
    public function getHwcEip()
    {
        return $this->container['hwcEip'];
    }

    /**
    * Sets hwcEip
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEip|null $hwcEip hwcEip
    *
    * @return $this
    */
    public function setHwcEip($hwcEip)
    {
        $this->container['hwcEip'] = $hwcEip;
        return $this;
    }

    /**
    * Gets hwcVpc
    *  hwcVpc
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpc|null
    */
    public function getHwcVpc()
    {
        return $this->container['hwcVpc'];
    }

    /**
    * Sets hwcVpc
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpc|null $hwcVpc hwcVpc
    *
    * @return $this
    */
    public function setHwcVpc($hwcVpc)
    {
        $this->container['hwcVpc'] = $hwcVpc;
        return $this;
    }

    /**
    * Gets hwcSubnet
    *  hwcSubnet
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcSubnet|null
    */
    public function getHwcSubnet()
    {
        return $this->container['hwcSubnet'];
    }

    /**
    * Sets hwcSubnet
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcSubnet|null $hwcSubnet hwcSubnet
    *
    * @return $this
    */
    public function setHwcSubnet($hwcSubnet)
    {
        $this->container['hwcSubnet'] = $hwcSubnet;
        return $this;
    }

    /**
    * Gets hwcRds
    *  hwcRds
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRds|null
    */
    public function getHwcRds()
    {
        return $this->container['hwcRds'];
    }

    /**
    * Sets hwcRds
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRds|null $hwcRds hwcRds
    *
    * @return $this
    */
    public function setHwcRds($hwcRds)
    {
        $this->container['hwcRds'] = $hwcRds;
        return $this;
    }

    /**
    * Gets hwcDomain
    *  hwcDomain
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomain|null
    */
    public function getHwcDomain()
    {
        return $this->container['hwcDomain'];
    }

    /**
    * Sets hwcDomain
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomain|null $hwcDomain hwcDomain
    *
    * @return $this
    */
    public function setHwcDomain($hwcDomain)
    {
        $this->container['hwcDomain'] = $hwcDomain;
        return $this;
    }

    /**
    * Gets website
    *  website
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Website|null
    */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
    * Sets website
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Website|null $website website
    *
    * @return $this
    */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;
        return $this;
    }

    /**
    * Gets ocaIp
    *  ocaIp
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIp|null
    */
    public function getOcaIp()
    {
        return $this->container['ocaIp'];
    }

    /**
    * Sets ocaIp
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIp|null $ocaIp ocaIp
    *
    * @return $this
    */
    public function setOcaIp($ocaIp)
    {
        $this->container['ocaIp'] = $ocaIp;
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

