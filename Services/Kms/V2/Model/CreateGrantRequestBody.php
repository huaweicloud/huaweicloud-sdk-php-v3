<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGrantRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGrantRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    * name  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。有效值：“user”，“domain”。默认值为“user”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'granteePrincipal' => 'string',
            'operations' => 'string[]',
            'name' => 'string',
            'retiringPrincipal' => 'string',
            'granteePrincipalType' => 'string',
            'sequence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    * name  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。有效值：“user”，“domain”。默认值为“user”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'granteePrincipal' => null,
        'operations' => null,
        'name' => null,
        'retiringPrincipal' => null,
        'granteePrincipalType' => null,
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
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    * name  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。有效值：“user”，“domain”。默认值为“user”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'granteePrincipal' => 'grantee_principal',
            'operations' => 'operations',
            'name' => 'name',
            'retiringPrincipal' => 'retiring_principal',
            'granteePrincipalType' => 'grantee_principal_type',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    * name  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。有效值：“user”，“domain”。默认值为“user”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'granteePrincipal' => 'setGranteePrincipal',
            'operations' => 'setOperations',
            'name' => 'setName',
            'retiringPrincipal' => 'setRetiringPrincipal',
            'granteePrincipalType' => 'setGranteePrincipalType',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    * name  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。有效值：“user”，“domain”。默认值为“user”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'granteePrincipal' => 'getGranteePrincipal',
            'operations' => 'getOperations',
            'name' => 'getName',
            'retiringPrincipal' => 'getRetiringPrincipal',
            'granteePrincipalType' => 'getGranteePrincipalType',
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
    const GRANTEE_PRINCIPAL_TYPE_USER = 'user';
    const GRANTEE_PRINCIPAL_TYPE_DOMAIN = 'domain';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGranteePrincipalTypeAllowableValues()
    {
        return [
            self::GRANTEE_PRINCIPAL_TYPE_USER,
            self::GRANTEE_PRINCIPAL_TYPE_DOMAIN,
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['granteePrincipal'] = isset($data['granteePrincipal']) ? $data['granteePrincipal'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retiringPrincipal'] = isset($data['retiringPrincipal']) ? $data['retiringPrincipal'] : null;
        $this->container['granteePrincipalType'] = isset($data['granteePrincipalType']) ? $data['granteePrincipalType'] : null;
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
        if ($this->container['granteePrincipal'] === null) {
            $invalidProperties[] = "'granteePrincipal' can't be null";
        }
            if ((mb_strlen($this->container['granteePrincipal']) > 64)) {
                $invalidProperties[] = "invalid value for 'granteePrincipal', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['granteePrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'granteePrincipal', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['operations'] === null) {
            $invalidProperties[] = "'operations' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['retiringPrincipal']) && (mb_strlen($this->container['retiringPrincipal']) > 64)) {
                $invalidProperties[] = "invalid value for 'retiringPrincipal', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['retiringPrincipal']) && (mb_strlen($this->container['retiringPrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'retiringPrincipal', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getGranteePrincipalTypeAllowableValues();
                if (!is_null($this->container['granteePrincipalType']) && !in_array($this->container['granteePrincipalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'granteePrincipalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets granteePrincipal
    *  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return string
    */
    public function getGranteePrincipal()
    {
        return $this->container['granteePrincipal'];
    }

    /**
    * Sets granteePrincipal
    *
    * @param string $granteePrincipal 被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return $this
    */
    public function setGranteePrincipal($granteePrincipal)
    {
        $this->container['granteePrincipal'] = $granteePrincipal;
        return $this;
    }

    /**
    * Gets operations
    *  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    *
    * @return string[]
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param string[] $operations 授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。  - “create-datakey” 创建数据密钥  - “create-datakey-without-plaintext” 创建不含明文数据密钥  - “encrypt-datakey” 加密数据密钥  - “decrypt-datakey” 解密数据密钥  - “describe-key” 查询密钥信息  - “retire-grant” 退役授权  - “encrypt-data” 加密数据  - “decrypt-data” 解密数据
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
        return $this;
    }

    /**
    * Gets name
    *  授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
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
    * @param string|null $name 授权名称，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets retiringPrincipal
    *  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return string|null
    */
    public function getRetiringPrincipal()
    {
        return $this->container['retiringPrincipal'];
    }

    /**
    * Sets retiringPrincipal
    *
    * @param string|null $retiringPrincipal 可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return $this
    */
    public function setRetiringPrincipal($retiringPrincipal)
    {
        $this->container['retiringPrincipal'] = $retiringPrincipal;
        return $this;
    }

    /**
    * Gets granteePrincipalType
    *  授权类型。有效值：“user”，“domain”。默认值为“user”。
    *
    * @return string|null
    */
    public function getGranteePrincipalType()
    {
        return $this->container['granteePrincipalType'];
    }

    /**
    * Sets granteePrincipalType
    *
    * @param string|null $granteePrincipalType 授权类型。有效值：“user”，“domain”。默认值为“user”。
    *
    * @return $this
    */
    public function setGranteePrincipalType($granteePrincipalType)
    {
        $this->container['granteePrincipalType'] = $granteePrincipalType;
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

