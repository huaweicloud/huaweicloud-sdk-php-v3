<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerCertificateConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerCertificateConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ocspStaplingEnable  是否开启服务端OCSP装订
    * ocspServerCaId  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    * ocspSslEnable  访问ocsp服务器是否开启SSL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ocspStaplingEnable' => 'bool',
            'ocspServerCaId' => 'string',
            'ocspSslEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ocspStaplingEnable  是否开启服务端OCSP装订
    * ocspServerCaId  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    * ocspSslEnable  访问ocsp服务器是否开启SSL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ocspStaplingEnable' => null,
        'ocspServerCaId' => null,
        'ocspSslEnable' => null
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
    * ocspStaplingEnable  是否开启服务端OCSP装订
    * ocspServerCaId  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    * ocspSslEnable  访问ocsp服务器是否开启SSL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ocspStaplingEnable' => 'ocsp_stapling_enable',
            'ocspServerCaId' => 'ocsp_server_ca_id',
            'ocspSslEnable' => 'ocsp_ssl_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ocspStaplingEnable  是否开启服务端OCSP装订
    * ocspServerCaId  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    * ocspSslEnable  访问ocsp服务器是否开启SSL
    *
    * @var string[]
    */
    protected static $setters = [
            'ocspStaplingEnable' => 'setOcspStaplingEnable',
            'ocspServerCaId' => 'setOcspServerCaId',
            'ocspSslEnable' => 'setOcspSslEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ocspStaplingEnable  是否开启服务端OCSP装订
    * ocspServerCaId  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    * ocspSslEnable  访问ocsp服务器是否开启SSL
    *
    * @var string[]
    */
    protected static $getters = [
            'ocspStaplingEnable' => 'getOcspStaplingEnable',
            'ocspServerCaId' => 'getOcspServerCaId',
            'ocspSslEnable' => 'getOcspSslEnable'
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
        $this->container['ocspStaplingEnable'] = isset($data['ocspStaplingEnable']) ? $data['ocspStaplingEnable'] : null;
        $this->container['ocspServerCaId'] = isset($data['ocspServerCaId']) ? $data['ocspServerCaId'] : null;
        $this->container['ocspSslEnable'] = isset($data['ocspSslEnable']) ? $data['ocspSslEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ocspServerCaId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['ocspServerCaId'])) {
                $invalidProperties[] = "invalid value for 'ocspServerCaId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
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
    * Gets ocspStaplingEnable
    *  是否开启服务端OCSP装订
    *
    * @return bool|null
    */
    public function getOcspStaplingEnable()
    {
        return $this->container['ocspStaplingEnable'];
    }

    /**
    * Sets ocspStaplingEnable
    *
    * @param bool|null $ocspStaplingEnable 是否开启服务端OCSP装订
    *
    * @return $this
    */
    public function setOcspStaplingEnable($ocspStaplingEnable)
    {
        $this->container['ocspStaplingEnable'] = $ocspStaplingEnable;
        return $this;
    }

    /**
    * Gets ocspServerCaId
    *  ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    *
    * @return string|null
    */
    public function getOcspServerCaId()
    {
        return $this->container['ocspServerCaId'];
    }

    /**
    * Sets ocspServerCaId
    *
    * @param string|null $ocspServerCaId ocsp服务器端CA证书id，仅当ocsp服务器为https协议时支持配置。
    *
    * @return $this
    */
    public function setOcspServerCaId($ocspServerCaId)
    {
        $this->container['ocspServerCaId'] = $ocspServerCaId;
        return $this;
    }

    /**
    * Gets ocspSslEnable
    *  访问ocsp服务器是否开启SSL
    *
    * @return bool|null
    */
    public function getOcspSslEnable()
    {
        return $this->container['ocspSslEnable'];
    }

    /**
    * Sets ocspSslEnable
    *
    * @param bool|null $ocspSslEnable 访问ocsp服务器是否开启SSL
    *
    * @return $this
    */
    public function setOcspSslEnable($ocspSslEnable)
    {
        $this->container['ocspSslEnable'] = $ocspSslEnable;
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

