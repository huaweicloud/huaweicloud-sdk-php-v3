<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateParametersForImportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateParametersForImportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID。
    * importToken  密钥导入令牌。
    * expirationTime  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * publicKey  加密密钥材料的公钥，base64格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'importToken' => 'string',
            'expirationTime' => 'int',
            'publicKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID。
    * importToken  密钥导入令牌。
    * expirationTime  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * publicKey  加密密钥材料的公钥，base64格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'importToken' => null,
        'expirationTime' => 'int64',
        'publicKey' => null
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
    * keyId  密钥ID。
    * importToken  密钥导入令牌。
    * expirationTime  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * publicKey  加密密钥材料的公钥，base64格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'importToken' => 'import_token',
            'expirationTime' => 'expiration_time',
            'publicKey' => 'public_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID。
    * importToken  密钥导入令牌。
    * expirationTime  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * publicKey  加密密钥材料的公钥，base64格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'importToken' => 'setImportToken',
            'expirationTime' => 'setExpirationTime',
            'publicKey' => 'setPublicKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID。
    * importToken  密钥导入令牌。
    * expirationTime  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * publicKey  加密密钥材料的公钥，base64格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'importToken' => 'getImportToken',
            'expirationTime' => 'getExpirationTime',
            'publicKey' => 'getPublicKey'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['importToken'] = isset($data['importToken']) ? $data['importToken'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['importToken']) && !preg_match("/^[0-9a-zA-Z+\/=]{200,6144}$/", $this->container['importToken'])) {
                $invalidProperties[] = "invalid value for 'importToken', must be conform to the pattern /^[0-9a-zA-Z+\/=]{200,6144}$/.";
            }
            if (!is_null($this->container['expirationTime']) && ($this->container['expirationTime'] > 10000000000)) {
                $invalidProperties[] = "invalid value for 'expirationTime', must be smaller than or equal to 10000000000.";
            }
            if (!is_null($this->container['expirationTime']) && ($this->container['expirationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expirationTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicKey']) && !preg_match("/^[0-9a-zA-Z+\/=]{200,6144}$/", $this->container['publicKey'])) {
                $invalidProperties[] = "invalid value for 'publicKey', must be conform to the pattern /^[0-9a-zA-Z+\/=]{200,6144}$/.";
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
    * Gets keyId
    *  密钥ID。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets importToken
    *  密钥导入令牌。
    *
    * @return string|null
    */
    public function getImportToken()
    {
        return $this->container['importToken'];
    }

    /**
    * Sets importToken
    *
    * @param string|null $importToken 密钥导入令牌。
    *
    * @return $this
    */
    public function setImportToken($importToken)
    {
        $this->container['importToken'] = $importToken;
        return $this;
    }

    /**
    * Gets expirationTime
    *  导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param int|null $expirationTime 导入参数到期时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets publicKey
    *  加密密钥材料的公钥，base64格式。
    *
    * @return string|null
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string|null $publicKey 加密密钥材料的公钥，base64格式。
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
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

