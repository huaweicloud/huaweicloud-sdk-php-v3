<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBandwidthPkgResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBandwidthPkgResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthpkgs  bandwidthpkg对象列表
    * bandwidthpkgsLinks  翻页展示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthpkgs' => '\HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgResp[]',
            'bandwidthpkgsLinks' => '\HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgPage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthpkgs  bandwidthpkg对象列表
    * bandwidthpkgsLinks  翻页展示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthpkgs' => null,
        'bandwidthpkgsLinks' => null
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
    * bandwidthpkgs  bandwidthpkg对象列表
    * bandwidthpkgsLinks  翻页展示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthpkgs' => 'bandwidthpkgs',
            'bandwidthpkgsLinks' => 'bandwidthpkgs_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthpkgs  bandwidthpkg对象列表
    * bandwidthpkgsLinks  翻页展示
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthpkgs' => 'setBandwidthpkgs',
            'bandwidthpkgsLinks' => 'setBandwidthpkgsLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthpkgs  bandwidthpkg对象列表
    * bandwidthpkgsLinks  翻页展示
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthpkgs' => 'getBandwidthpkgs',
            'bandwidthpkgsLinks' => 'getBandwidthpkgsLinks'
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
        $this->container['bandwidthpkgs'] = isset($data['bandwidthpkgs']) ? $data['bandwidthpkgs'] : null;
        $this->container['bandwidthpkgsLinks'] = isset($data['bandwidthpkgsLinks']) ? $data['bandwidthpkgsLinks'] : null;
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
    * Gets bandwidthpkgs
    *  bandwidthpkg对象列表
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgResp[]|null
    */
    public function getBandwidthpkgs()
    {
        return $this->container['bandwidthpkgs'];
    }

    /**
    * Sets bandwidthpkgs
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgResp[]|null $bandwidthpkgs bandwidthpkg对象列表
    *
    * @return $this
    */
    public function setBandwidthpkgs($bandwidthpkgs)
    {
        $this->container['bandwidthpkgs'] = $bandwidthpkgs;
        return $this;
    }

    /**
    * Gets bandwidthpkgsLinks
    *  翻页展示
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgPage[]|null
    */
    public function getBandwidthpkgsLinks()
    {
        return $this->container['bandwidthpkgsLinks'];
    }

    /**
    * Sets bandwidthpkgsLinks
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\BandwidthPkgPage[]|null $bandwidthpkgsLinks 翻页展示
    *
    * @return $this
    */
    public function setBandwidthpkgsLinks($bandwidthpkgsLinks)
    {
        $this->container['bandwidthpkgsLinks'] = $bandwidthpkgsLinks;
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

