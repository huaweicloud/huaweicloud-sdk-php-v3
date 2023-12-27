<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceSslDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceSslDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  开启或关闭SSL。true：开启/false：关闭
    * ip  SSL连接IP。
    * port  SSL连接端口。
    * domainName  SSL连接域名。
    * sslExpiredAt  SSL证书有效期（UTC时间）。
    * sslValidated  SSL证书是否有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'ip' => 'string',
            'port' => 'string',
            'domainName' => 'string',
            'sslExpiredAt' => 'string',
            'sslValidated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  开启或关闭SSL。true：开启/false：关闭
    * ip  SSL连接IP。
    * port  SSL连接端口。
    * domainName  SSL连接域名。
    * sslExpiredAt  SSL证书有效期（UTC时间）。
    * sslValidated  SSL证书是否有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'ip' => null,
        'port' => null,
        'domainName' => null,
        'sslExpiredAt' => null,
        'sslValidated' => null
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
    * enabled  开启或关闭SSL。true：开启/false：关闭
    * ip  SSL连接IP。
    * port  SSL连接端口。
    * domainName  SSL连接域名。
    * sslExpiredAt  SSL证书有效期（UTC时间）。
    * sslValidated  SSL证书是否有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'ip' => 'ip',
            'port' => 'port',
            'domainName' => 'domain_name',
            'sslExpiredAt' => 'ssl_expired_at',
            'sslValidated' => 'ssl_validated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  开启或关闭SSL。true：开启/false：关闭
    * ip  SSL连接IP。
    * port  SSL连接端口。
    * domainName  SSL连接域名。
    * sslExpiredAt  SSL证书有效期（UTC时间）。
    * sslValidated  SSL证书是否有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'ip' => 'setIp',
            'port' => 'setPort',
            'domainName' => 'setDomainName',
            'sslExpiredAt' => 'setSslExpiredAt',
            'sslValidated' => 'setSslValidated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  开启或关闭SSL。true：开启/false：关闭
    * ip  SSL连接IP。
    * port  SSL连接端口。
    * domainName  SSL连接域名。
    * sslExpiredAt  SSL证书有效期（UTC时间）。
    * sslValidated  SSL证书是否有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'ip' => 'getIp',
            'port' => 'getPort',
            'domainName' => 'getDomainName',
            'sslExpiredAt' => 'getSslExpiredAt',
            'sslValidated' => 'getSslValidated'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['sslExpiredAt'] = isset($data['sslExpiredAt']) ? $data['sslExpiredAt'] : null;
        $this->container['sslValidated'] = isset($data['sslValidated']) ? $data['sslValidated'] : null;
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
    * Gets enabled
    *  开启或关闭SSL。true：开启/false：关闭
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 开启或关闭SSL。true：开启/false：关闭
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets ip
    *  SSL连接IP。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip SSL连接IP。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  SSL连接端口。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port SSL连接端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets domainName
    *  SSL连接域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName SSL连接域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets sslExpiredAt
    *  SSL证书有效期（UTC时间）。
    *
    * @return string|null
    */
    public function getSslExpiredAt()
    {
        return $this->container['sslExpiredAt'];
    }

    /**
    * Sets sslExpiredAt
    *
    * @param string|null $sslExpiredAt SSL证书有效期（UTC时间）。
    *
    * @return $this
    */
    public function setSslExpiredAt($sslExpiredAt)
    {
        $this->container['sslExpiredAt'] = $sslExpiredAt;
        return $this;
    }

    /**
    * Gets sslValidated
    *  SSL证书是否有效。
    *
    * @return bool|null
    */
    public function getSslValidated()
    {
        return $this->container['sslValidated'];
    }

    /**
    * Sets sslValidated
    *
    * @param bool|null $sslValidated SSL证书是否有效。
    *
    * @return $this
    */
    public function setSslValidated($sslValidated)
    {
        $this->container['sslValidated'] = $sslValidated;
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

