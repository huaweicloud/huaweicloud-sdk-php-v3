<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsListenerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsListenerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defaultTlsContainerRef' => 'string',
            'clientCaTlsContainerRef' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defaultTlsContainerRef' => null,
        'clientCaTlsContainerRef' => null
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
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef'
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
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['defaultTlsContainerRef'] === null) {
            $invalidProperties[] = "'defaultTlsContainerRef' can't be null";
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
    * Gets defaultTlsContainerRef
    *  监听器使用的服务器证书ID。
    *
    * @return string
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string $defaultTlsContainerRef 监听器使用的服务器证书ID。
    *
    * @return $this
    */
    public function setDefaultTlsContainerRef($defaultTlsContainerRef)
    {
        $this->container['defaultTlsContainerRef'] = $defaultTlsContainerRef;
        return $this;
    }

    /**
    * Gets clientCaTlsContainerRef
    *  监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @return string|null
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string|null $clientCaTlsContainerRef 监听器使用的CA证书ID。如果更新双向认证，则该参数为必选。
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
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

