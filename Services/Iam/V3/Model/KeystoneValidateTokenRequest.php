<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneValidateTokenRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneValidateTokenRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSubjectToken  待校验的token。
    * nocatalog  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSubjectToken' => 'string',
            'nocatalog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSubjectToken  待校验的token。
    * nocatalog  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSubjectToken' => null,
        'nocatalog' => null
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
    * xSubjectToken  待校验的token。
    * nocatalog  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSubjectToken' => 'X-Subject-Token',
            'nocatalog' => 'nocatalog'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSubjectToken  待校验的token。
    * nocatalog  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'xSubjectToken' => 'setXSubjectToken',
            'nocatalog' => 'setNocatalog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSubjectToken  待校验的token。
    * nocatalog  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'xSubjectToken' => 'getXSubjectToken',
            'nocatalog' => 'getNocatalog'
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
        $this->container['xSubjectToken'] = isset($data['xSubjectToken']) ? $data['xSubjectToken'] : null;
        $this->container['nocatalog'] = isset($data['nocatalog']) ? $data['nocatalog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xSubjectToken'] === null) {
            $invalidProperties[] = "'xSubjectToken' can't be null";
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
    * Gets xSubjectToken
    *  待校验的token。
    *
    * @return string
    */
    public function getXSubjectToken()
    {
        return $this->container['xSubjectToken'];
    }

    /**
    * Sets xSubjectToken
    *
    * @param string $xSubjectToken 待校验的token。
    *
    * @return $this
    */
    public function setXSubjectToken($xSubjectToken)
    {
        $this->container['xSubjectToken'] = $xSubjectToken;
        return $this;
    }

    /**
    * Gets nocatalog
    *  如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @return string|null
    */
    public function getNocatalog()
    {
        return $this->container['nocatalog'];
    }

    /**
    * Sets nocatalog
    *
    * @param string|null $nocatalog 如果设置该参数，返回的响应体中将不显示catalog信息。任何非空字符串都将解释为true，并使该字段生效。
    *
    * @return $this
    */
    public function setNocatalog($nocatalog)
    {
        $this->container['nocatalog'] = $nocatalog;
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

