<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClientCaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClientCaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientCaCertificate  clientCaCertificate
    * requestId  请求id
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientCaCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody',
            'requestId' => 'string',
            'headerResponseToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientCaCertificate  clientCaCertificate
    * requestId  请求id
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientCaCertificate' => null,
        'requestId' => null,
        'headerResponseToken' => null
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
    * clientCaCertificate  clientCaCertificate
    * requestId  请求id
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientCaCertificate' => 'client_ca_certificate',
            'requestId' => 'request_id',
            'headerResponseToken' => 'header-response-token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientCaCertificate  clientCaCertificate
    * requestId  请求id
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $setters = [
            'clientCaCertificate' => 'setClientCaCertificate',
            'requestId' => 'setRequestId',
            'headerResponseToken' => 'setHeaderResponseToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientCaCertificate  clientCaCertificate
    * requestId  请求id
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $getters = [
            'clientCaCertificate' => 'getClientCaCertificate',
            'requestId' => 'getRequestId',
            'headerResponseToken' => 'getHeaderResponseToken'
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
        $this->container['clientCaCertificate'] = isset($data['clientCaCertificate']) ? $data['clientCaCertificate'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['headerResponseToken'] = isset($data['headerResponseToken']) ? $data['headerResponseToken'] : null;
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
    * Gets clientCaCertificate
    *  clientCaCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody|null
    */
    public function getClientCaCertificate()
    {
        return $this->container['clientCaCertificate'];
    }

    /**
    * Sets clientCaCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody|null $clientCaCertificate clientCaCertificate
    *
    * @return $this
    */
    public function setClientCaCertificate($clientCaCertificate)
    {
        $this->container['clientCaCertificate'] = $clientCaCertificate;
        return $this;
    }

    /**
    * Gets requestId
    *  请求id
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求id
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets headerResponseToken
    *  headerResponseToken
    *
    * @return string|null
    */
    public function getHeaderResponseToken()
    {
        return $this->container['headerResponseToken'];
    }

    /**
    * Sets headerResponseToken
    *
    * @param string|null $headerResponseToken headerResponseToken
    *
    * @return $this
    */
    public function setHeaderResponseToken($headerResponseToken)
    {
        $this->container['headerResponseToken'] = $headerResponseToken;
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

