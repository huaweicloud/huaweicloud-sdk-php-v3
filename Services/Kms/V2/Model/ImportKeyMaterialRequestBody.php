<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportKeyMaterialRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportKeyMaterialRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * importToken  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * encryptedKeyMaterial  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    * encryptedPrivatekey  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * expirationTime  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'importToken' => 'string',
            'encryptedKeyMaterial' => 'string',
            'encryptedPrivatekey' => 'string',
            'expirationTime' => 'int',
            'sequence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * importToken  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * encryptedKeyMaterial  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    * encryptedPrivatekey  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * expirationTime  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'importToken' => null,
        'encryptedKeyMaterial' => null,
        'encryptedPrivatekey' => null,
        'expirationTime' => 'int64',
        'sequence' => null
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
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * importToken  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * encryptedKeyMaterial  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    * encryptedPrivatekey  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * expirationTime  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'importToken' => 'import_token',
            'encryptedKeyMaterial' => 'encrypted_key_material',
            'encryptedPrivatekey' => 'encrypted_privatekey',
            'expirationTime' => 'expiration_time',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * importToken  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * encryptedKeyMaterial  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    * encryptedPrivatekey  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * expirationTime  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'importToken' => 'setImportToken',
            'encryptedKeyMaterial' => 'setEncryptedKeyMaterial',
            'encryptedPrivatekey' => 'setEncryptedPrivatekey',
            'expirationTime' => 'setExpirationTime',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * importToken  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * encryptedKeyMaterial  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    * encryptedPrivatekey  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    * expirationTime  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'importToken' => 'getImportToken',
            'encryptedKeyMaterial' => 'getEncryptedKeyMaterial',
            'encryptedPrivatekey' => 'getEncryptedPrivatekey',
            'expirationTime' => 'getExpirationTime',
            'sequence' => 'getSequence'
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
        $this->container['encryptedKeyMaterial'] = isset($data['encryptedKeyMaterial']) ? $data['encryptedKeyMaterial'] : null;
        $this->container['encryptedPrivatekey'] = isset($data['encryptedPrivatekey']) ? $data['encryptedPrivatekey'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['importToken'] === null) {
            $invalidProperties[] = "'importToken' can't be null";
        }
            if (!preg_match("/^[0-9a-zA-Z+\/=]{200,6144}$/", $this->container['importToken'])) {
                $invalidProperties[] = "invalid value for 'importToken', must be conform to the pattern /^[0-9a-zA-Z+\/=]{200,6144}$/.";
            }
        if ($this->container['encryptedKeyMaterial'] === null) {
            $invalidProperties[] = "'encryptedKeyMaterial' can't be null";
        }
            if (!preg_match("/^[0-9a-zA-Z+\/=]{344,360}$/", $this->container['encryptedKeyMaterial'])) {
                $invalidProperties[] = "invalid value for 'encryptedKeyMaterial', must be conform to the pattern /^[0-9a-zA-Z+\/=]{344,360}$/.";
            }
            if (!is_null($this->container['encryptedPrivatekey']) && !preg_match("/^[0-9a-zA-Z+\/=]{200,6144}$/", $this->container['encryptedPrivatekey'])) {
                $invalidProperties[] = "invalid value for 'encryptedPrivatekey', must be conform to the pattern /^[0-9a-zA-Z+\/=]{200,6144}$/.";
            }
            if (!is_null($this->container['expirationTime']) && ($this->container['expirationTime'] > 10000000000)) {
                $invalidProperties[] = "invalid value for 'expirationTime', must be smaller than or equal to 10000000000.";
            }
            if (!is_null($this->container['expirationTime']) && ($this->container['expirationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expirationTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) > 36)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) < 0)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be bigger than or equal to 0.";
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
    *  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    *
    * @return string
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string $keyId 密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
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
    *  密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    *
    * @return string
    */
    public function getImportToken()
    {
        return $this->container['importToken'];
    }

    /**
    * Sets importToken
    *
    * @param string $importToken 密钥导入令牌，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    *
    * @return $this
    */
    public function setImportToken($importToken)
    {
        $this->container['importToken'] = $importToken;
        return $this;
    }

    /**
    * Gets encryptedKeyMaterial
    *  加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    *
    * @return string
    */
    public function getEncryptedKeyMaterial()
    {
        return $this->container['encryptedKeyMaterial'];
    }

    /**
    * Sets encryptedKeyMaterial
    *
    * @param string $encryptedKeyMaterial 加密后的对称密钥材料，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{344,360}$”。若导入非对称密钥，则该参数为用于加密私钥的临时中间密钥。
    *
    * @return $this
    */
    public function setEncryptedKeyMaterial($encryptedKeyMaterial)
    {
        $this->container['encryptedKeyMaterial'] = $encryptedKeyMaterial;
        return $this;
    }

    /**
    * Gets encryptedPrivatekey
    *  使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    *
    * @return string|null
    */
    public function getEncryptedPrivatekey()
    {
        return $this->container['encryptedPrivatekey'];
    }

    /**
    * Sets encryptedPrivatekey
    *
    * @param string|null $encryptedPrivatekey 使用临时中间密钥加密后的私钥，导入非对称密钥需要该参数，base64格式，满足正则匹配“^[0-9a-zA-Z+/=]{200,6144}$”。
    *
    * @return $this
    */
    public function setEncryptedPrivatekey($encryptedPrivatekey)
    {
        $this->container['encryptedPrivatekey'] = $encryptedPrivatekey;
        return $this;
    }

    /**
    * Gets expirationTime
    *  密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
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
    * @param int|null $expirationTime 密钥材料到期时间，时间戳，即从1970年1月1日至该时间的总秒数，KMS会在该时间的24小时内删除密钥材料。 例如：1550291833
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets sequence
    *  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return string|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param string|null $sequence 请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

