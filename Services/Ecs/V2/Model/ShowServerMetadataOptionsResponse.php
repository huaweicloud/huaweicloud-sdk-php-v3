<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerMetadataOptionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerMetadataOptionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpEndpoint  是否禁用IMDS服务。
    * httpTokens  是否要求携带token。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpEndpoint' => 'string',
            'httpTokens' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpEndpoint  是否禁用IMDS服务。
    * httpTokens  是否要求携带token。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpEndpoint' => null,
        'httpTokens' => null
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
    * httpEndpoint  是否禁用IMDS服务。
    * httpTokens  是否要求携带token。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpEndpoint' => 'http_endpoint',
            'httpTokens' => 'http_tokens'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpEndpoint  是否禁用IMDS服务。
    * httpTokens  是否要求携带token。
    *
    * @var string[]
    */
    protected static $setters = [
            'httpEndpoint' => 'setHttpEndpoint',
            'httpTokens' => 'setHttpTokens'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpEndpoint  是否禁用IMDS服务。
    * httpTokens  是否要求携带token。
    *
    * @var string[]
    */
    protected static $getters = [
            'httpEndpoint' => 'getHttpEndpoint',
            'httpTokens' => 'getHttpTokens'
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
    const HTTP_ENDPOINT_ENABLED = 'enabled';
    const HTTP_ENDPOINT_DISABLED = 'disabled';
    const HTTP_TOKENS_OPTIONAL = 'optional';
    const HTTP_TOKENS_REQUIRED = 'required';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHttpEndpointAllowableValues()
    {
        return [
            self::HTTP_ENDPOINT_ENABLED,
            self::HTTP_ENDPOINT_DISABLED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHttpTokensAllowableValues()
    {
        return [
            self::HTTP_TOKENS_OPTIONAL,
            self::HTTP_TOKENS_REQUIRED,
        ];
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
        $this->container['httpEndpoint'] = isset($data['httpEndpoint']) ? $data['httpEndpoint'] : null;
        $this->container['httpTokens'] = isset($data['httpTokens']) ? $data['httpTokens'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getHttpEndpointAllowableValues();
                if (!is_null($this->container['httpEndpoint']) && !in_array($this->container['httpEndpoint'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'httpEndpoint', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHttpTokensAllowableValues();
                if (!is_null($this->container['httpTokens']) && !in_array($this->container['httpTokens'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'httpTokens', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets httpEndpoint
    *  是否禁用IMDS服务。
    *
    * @return string|null
    */
    public function getHttpEndpoint()
    {
        return $this->container['httpEndpoint'];
    }

    /**
    * Sets httpEndpoint
    *
    * @param string|null $httpEndpoint 是否禁用IMDS服务。
    *
    * @return $this
    */
    public function setHttpEndpoint($httpEndpoint)
    {
        $this->container['httpEndpoint'] = $httpEndpoint;
        return $this;
    }

    /**
    * Gets httpTokens
    *  是否要求携带token。
    *
    * @return string|null
    */
    public function getHttpTokens()
    {
        return $this->container['httpTokens'];
    }

    /**
    * Sets httpTokens
    *
    * @param string|null $httpTokens 是否要求携带token。
    *
    * @return $this
    */
    public function setHttpTokens($httpTokens)
    {
        $this->container['httpTokens'] = $httpTokens;
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

