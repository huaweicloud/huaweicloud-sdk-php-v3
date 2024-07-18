<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckClientCaCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckClientCaCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  证书名
    * issuer  颁发者
    * subject  主体
    * serialNumber  序列号
    * expirationTime  过期时间
    * signatureAlgorithm  客户端 CA 证书签名算法
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'issuer' => 'string',
            'subject' => 'string',
            'serialNumber' => 'string',
            'expirationTime' => '\DateTime',
            'signatureAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  证书名
    * issuer  颁发者
    * subject  主体
    * serialNumber  序列号
    * expirationTime  过期时间
    * signatureAlgorithm  客户端 CA 证书签名算法
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'issuer' => null,
        'subject' => null,
        'serialNumber' => null,
        'expirationTime' => 'date-time',
        'signatureAlgorithm' => null
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
    * name  证书名
    * issuer  颁发者
    * subject  主体
    * serialNumber  序列号
    * expirationTime  过期时间
    * signatureAlgorithm  客户端 CA 证书签名算法
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'issuer' => 'issuer',
            'subject' => 'subject',
            'serialNumber' => 'serial_number',
            'expirationTime' => 'expiration_time',
            'signatureAlgorithm' => 'signature_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  证书名
    * issuer  颁发者
    * subject  主体
    * serialNumber  序列号
    * expirationTime  过期时间
    * signatureAlgorithm  客户端 CA 证书签名算法
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'issuer' => 'setIssuer',
            'subject' => 'setSubject',
            'serialNumber' => 'setSerialNumber',
            'expirationTime' => 'setExpirationTime',
            'signatureAlgorithm' => 'setSignatureAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  证书名
    * issuer  颁发者
    * subject  主体
    * serialNumber  序列号
    * expirationTime  过期时间
    * signatureAlgorithm  客户端 CA 证书签名算法
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'issuer' => 'getIssuer',
            'subject' => 'getSubject',
            'serialNumber' => 'getSerialNumber',
            'expirationTime' => 'getExpirationTime',
            'signatureAlgorithm' => 'getSignatureAlgorithm'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
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
    * Gets name
    *  证书名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 证书名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets issuer
    *  颁发者
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer 颁发者
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets subject
    *  主体
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 主体
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets serialNumber
    *  序列号
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 序列号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets expirationTime
    *  过期时间
    *
    * @return \DateTime|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param \DateTime|null $expirationTime 过期时间
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  客户端 CA 证书签名算法
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 客户端 CA 证书签名算法
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
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

