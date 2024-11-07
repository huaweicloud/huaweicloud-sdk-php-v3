<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateP2PSiteNetworkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateP2PSiteNetworkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * p2pSiteNetwork  p2pSiteNetwork
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'p2pSiteNetwork' => '\HuaweiCloud\SDK\Cc\V3\Model\CreateP2PSiteNetwork'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * p2pSiteNetwork  p2pSiteNetwork
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'p2pSiteNetwork' => null
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
    * p2pSiteNetwork  p2pSiteNetwork
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'p2pSiteNetwork' => 'p2p_site_network'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * p2pSiteNetwork  p2pSiteNetwork
    *
    * @var string[]
    */
    protected static $setters = [
            'p2pSiteNetwork' => 'setP2pSiteNetwork'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * p2pSiteNetwork  p2pSiteNetwork
    *
    * @var string[]
    */
    protected static $getters = [
            'p2pSiteNetwork' => 'getP2pSiteNetwork'
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
        $this->container['p2pSiteNetwork'] = isset($data['p2pSiteNetwork']) ? $data['p2pSiteNetwork'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['p2pSiteNetwork'] === null) {
            $invalidProperties[] = "'p2pSiteNetwork' can't be null";
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
    * Gets p2pSiteNetwork
    *  p2pSiteNetwork
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CreateP2PSiteNetwork
    */
    public function getP2pSiteNetwork()
    {
        return $this->container['p2pSiteNetwork'];
    }

    /**
    * Sets p2pSiteNetwork
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CreateP2PSiteNetwork $p2pSiteNetwork p2pSiteNetwork
    *
    * @return $this
    */
    public function setP2pSiteNetwork($p2pSiteNetwork)
    {
        $this->container['p2pSiteNetwork'] = $p2pSiteNetwork;
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

