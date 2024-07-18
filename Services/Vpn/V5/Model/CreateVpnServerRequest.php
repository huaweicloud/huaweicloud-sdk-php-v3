<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnServerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnServerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * p2cVgwId  P2C VPN网关实例ID
    * xClientToken  幂等性标识
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'p2cVgwId' => 'string',
            'xClientToken' => 'string',
            'body' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * p2cVgwId  P2C VPN网关实例ID
    * xClientToken  幂等性标识
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'p2cVgwId' => null,
        'xClientToken' => null,
        'body' => null
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
    * p2cVgwId  P2C VPN网关实例ID
    * xClientToken  幂等性标识
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'p2cVgwId' => 'p2c_vgw_id',
            'xClientToken' => 'X-Client-Token',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * p2cVgwId  P2C VPN网关实例ID
    * xClientToken  幂等性标识
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'p2cVgwId' => 'setP2cVgwId',
            'xClientToken' => 'setXClientToken',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * p2cVgwId  P2C VPN网关实例ID
    * xClientToken  幂等性标识
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'p2cVgwId' => 'getP2cVgwId',
            'xClientToken' => 'getXClientToken',
            'body' => 'getBody'
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
        $this->container['p2cVgwId'] = isset($data['p2cVgwId']) ? $data['p2cVgwId'] : null;
        $this->container['xClientToken'] = isset($data['xClientToken']) ? $data['xClientToken'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['p2cVgwId'] === null) {
            $invalidProperties[] = "'p2cVgwId' can't be null";
        }
            if (!is_null($this->container['xClientToken']) && (mb_strlen($this->container['xClientToken']) > 36)) {
                $invalidProperties[] = "invalid value for 'xClientToken', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['xClientToken']) && (mb_strlen($this->container['xClientToken']) < 36)) {
                $invalidProperties[] = "invalid value for 'xClientToken', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['xClientToken']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['xClientToken'])) {
                $invalidProperties[] = "invalid value for 'xClientToken', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets p2cVgwId
    *  P2C VPN网关实例ID
    *
    * @return string
    */
    public function getP2cVgwId()
    {
        return $this->container['p2cVgwId'];
    }

    /**
    * Sets p2cVgwId
    *
    * @param string $p2cVgwId P2C VPN网关实例ID
    *
    * @return $this
    */
    public function setP2cVgwId($p2cVgwId)
    {
        $this->container['p2cVgwId'] = $p2cVgwId;
        return $this;
    }

    /**
    * Gets xClientToken
    *  幂等性标识
    *
    * @return string|null
    */
    public function getXClientToken()
    {
        return $this->container['xClientToken'];
    }

    /**
    * Sets xClientToken
    *
    * @param string|null $xClientToken 幂等性标识
    *
    * @return $this
    */
    public function setXClientToken($xClientToken)
    {
        $this->container['xClientToken'] = $xClientToken;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

