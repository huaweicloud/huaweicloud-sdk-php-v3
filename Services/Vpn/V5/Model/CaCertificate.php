<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaCertificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaCertificate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书ID
    * serialNumber  证书序列号
    * signatureAlgorithm  签名算法
    * issuer  证书颁发者
    * subject  证书主题
    * expireTime  证书过期时间
    * isUpdatable  是否能更新内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'serialNumber' => 'string',
            'signatureAlgorithm' => 'string',
            'issuer' => 'string',
            'subject' => 'string',
            'expireTime' => '\DateTime',
            'isUpdatable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书ID
    * serialNumber  证书序列号
    * signatureAlgorithm  签名算法
    * issuer  证书颁发者
    * subject  证书主题
    * expireTime  证书过期时间
    * isUpdatable  是否能更新内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'serialNumber' => null,
        'signatureAlgorithm' => null,
        'issuer' => null,
        'subject' => null,
        'expireTime' => 'date-time',
        'isUpdatable' => null
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
    * id  证书ID
    * serialNumber  证书序列号
    * signatureAlgorithm  签名算法
    * issuer  证书颁发者
    * subject  证书主题
    * expireTime  证书过期时间
    * isUpdatable  是否能更新内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'serialNumber' => 'serial_number',
            'signatureAlgorithm' => 'signature_algorithm',
            'issuer' => 'issuer',
            'subject' => 'subject',
            'expireTime' => 'expire_time',
            'isUpdatable' => 'is_updatable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书ID
    * serialNumber  证书序列号
    * signatureAlgorithm  签名算法
    * issuer  证书颁发者
    * subject  证书主题
    * expireTime  证书过期时间
    * isUpdatable  是否能更新内容
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'serialNumber' => 'setSerialNumber',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'issuer' => 'setIssuer',
            'subject' => 'setSubject',
            'expireTime' => 'setExpireTime',
            'isUpdatable' => 'setIsUpdatable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书ID
    * serialNumber  证书序列号
    * signatureAlgorithm  签名算法
    * issuer  证书颁发者
    * subject  证书主题
    * expireTime  证书过期时间
    * isUpdatable  是否能更新内容
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'serialNumber' => 'getSerialNumber',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'issuer' => 'getIssuer',
            'subject' => 'getSubject',
            'expireTime' => 'getExpireTime',
            'isUpdatable' => 'getIsUpdatable'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['isUpdatable'] = isset($data['isUpdatable']) ? $data['isUpdatable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['serialNumber']) && (mb_strlen($this->container['serialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) > 64)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['issuer']) && (mb_strlen($this->container['issuer']) > 256)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 256)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 256.";
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
    * Gets id
    *  证书ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 证书ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serialNumber
    *  证书序列号
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
    * @param string|null $serialNumber 证书序列号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名算法
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
    * @param string|null $signatureAlgorithm 签名算法
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets issuer
    *  证书颁发者
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
    * @param string|null $issuer 证书颁发者
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
    *  证书主题
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
    * @param string|null $subject 证书主题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间
    *
    * @return \DateTime|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param \DateTime|null $expireTime 证书过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets isUpdatable
    *  是否能更新内容
    *
    * @return bool|null
    */
    public function getIsUpdatable()
    {
        return $this->container['isUpdatable'];
    }

    /**
    * Sets isUpdatable
    *
    * @param bool|null $isUpdatable 是否能更新内容
    *
    * @return $this
    */
    public function setIsUpdatable($isUpdatable)
    {
        $this->container['isUpdatable'] = $isUpdatable;
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

