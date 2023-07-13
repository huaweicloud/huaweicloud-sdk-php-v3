<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListRoutersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListRoutersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routers  router对象列表
    * routersLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routers' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronRouter[]',
            'routersLinks' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routers  router对象列表
    * routersLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routers' => null,
        'routersLinks' => null
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
    * routers  router对象列表
    * routersLinks  分页信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routers' => 'routers',
            'routersLinks' => 'routers_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routers  router对象列表
    * routersLinks  分页信息
    *
    * @var string[]
    */
    protected static $setters = [
            'routers' => 'setRouters',
            'routersLinks' => 'setRoutersLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routers  router对象列表
    * routersLinks  分页信息
    *
    * @var string[]
    */
    protected static $getters = [
            'routers' => 'getRouters',
            'routersLinks' => 'getRoutersLinks'
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
        $this->container['routers'] = isset($data['routers']) ? $data['routers'] : null;
        $this->container['routersLinks'] = isset($data['routersLinks']) ? $data['routersLinks'] : null;
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
    * Gets routers
    *  router对象列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronRouter[]|null
    */
    public function getRouters()
    {
        return $this->container['routers'];
    }

    /**
    * Sets routers
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronRouter[]|null $routers router对象列表
    *
    * @return $this
    */
    public function setRouters($routers)
    {
        $this->container['routers'] = $routers;
        return $this;
    }

    /**
    * Gets routersLinks
    *  分页信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null
    */
    public function getRoutersLinks()
    {
        return $this->container['routersLinks'];
    }

    /**
    * Sets routersLinks
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null $routersLinks 分页信息
    *
    * @return $this
    */
    public function setRoutersLinks($routersLinks)
    {
        $this->container['routersLinks'] = $routersLinks;
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

