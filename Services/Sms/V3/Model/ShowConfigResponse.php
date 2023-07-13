<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * config  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    * regions  region数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'config' => 'map[string,string]',
            'regions' => '\HuaweiCloud\SDK\Sms\V3\Model\map[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * config  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    * regions  region数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'config' => null,
        'regions' => null
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
    * config  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    * regions  region数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'config' => 'config',
            'regions' => 'regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * config  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    * regions  region数组
    *
    * @var string[]
    */
    protected static $setters = [
            'config' => 'setConfig',
            'regions' => 'setRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * config  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    * regions  region数组
    *
    * @var string[]
    */
    protected static $getters = [
            'config' => 'getConfig',
            'regions' => 'getRegions'
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
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
    * Gets config
    *  mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    *
    * @return map[string,string]|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param map[string,string]|null $config mainRegion,obs_domain,disktype,process_and_it及以后增加的信息
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets regions
    *  region数组
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\map[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\map[]|null $regions region数组
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
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

