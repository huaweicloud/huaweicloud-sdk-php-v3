<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateKeypairRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateKeypairRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keypairName  SSH密钥对的名称
    * server  server
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keypairName' => 'string',
            'server' => '\HuaweiCloud\SDK\Kps\v3\Model\EcsServerInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keypairName  SSH密钥对的名称
    * server  server
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keypairName' => null,
        'server' => null
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
    * keypairName  SSH密钥对的名称
    * server  server
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keypairName' => 'keypair_name',
            'server' => 'server'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keypairName  SSH密钥对的名称
    * server  server
    *
    * @var string[]
    */
    protected static $setters = [
            'keypairName' => 'setKeypairName',
            'server' => 'setServer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keypairName  SSH密钥对的名称
    * server  server
    *
    * @var string[]
    */
    protected static $getters = [
            'keypairName' => 'getKeypairName',
            'server' => 'getServer'
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
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keypairName'] === null) {
            $invalidProperties[] = "'keypairName' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9_-]{1,255}$/", $this->container['keypairName'])) {
                $invalidProperties[] = "invalid value for 'keypairName', must be conform to the pattern /^[A-Za-z0-9_-]{1,255}$/.";
            }
        if ($this->container['server'] === null) {
            $invalidProperties[] = "'server' can't be null";
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
    * Gets keypairName
    *  SSH密钥对的名称
    *
    * @return string
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string $keypairName SSH密钥对的名称
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets server
    *  server
    *
    * @return \HuaweiCloud\SDK\Kps\v3\Model\EcsServerInfo
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Kps\v3\Model\EcsServerInfo $server server
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
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

