<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePeerLinkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePeerLinkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dryRun  空运行 - true 是 - false 否
    * peerLink  peerLink
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dryRun' => 'bool',
            'peerLink' => '\HuaweiCloud\SDK\Dc\V3\Model\UpdatePeerLinkRequestBodyPeerLink'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dryRun  空运行 - true 是 - false 否
    * peerLink  peerLink
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dryRun' => null,
        'peerLink' => null
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
    * dryRun  空运行 - true 是 - false 否
    * peerLink  peerLink
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dryRun' => 'dry_run',
            'peerLink' => 'peer_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dryRun  空运行 - true 是 - false 否
    * peerLink  peerLink
    *
    * @var string[]
    */
    protected static $setters = [
            'dryRun' => 'setDryRun',
            'peerLink' => 'setPeerLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dryRun  空运行 - true 是 - false 否
    * peerLink  peerLink
    *
    * @var string[]
    */
    protected static $getters = [
            'dryRun' => 'getDryRun',
            'peerLink' => 'getPeerLink'
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
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['peerLink'] = isset($data['peerLink']) ? $data['peerLink'] : null;
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
    * Gets dryRun
    *  空运行 - true 是 - false 否
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 空运行 - true 是 - false 否
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets peerLink
    *  peerLink
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\UpdatePeerLinkRequestBodyPeerLink|null
    */
    public function getPeerLink()
    {
        return $this->container['peerLink'];
    }

    /**
    * Sets peerLink
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\UpdatePeerLinkRequestBodyPeerLink|null $peerLink peerLink
    *
    * @return $this
    */
    public function setPeerLink($peerLink)
    {
        $this->container['peerLink'] = $peerLink;
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

