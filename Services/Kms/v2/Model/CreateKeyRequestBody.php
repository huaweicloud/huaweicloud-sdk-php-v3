<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyAlias  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    * keySpec  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * keyUsage  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述，取值0到255字符。
    * origin  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    * enterpriseProjectId  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * keystoreId  密钥库ID，默认使用KMS默认密钥库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyAlias' => 'string',
            'keySpec' => 'string',
            'keyUsage' => 'string',
            'keyDescription' => 'string',
            'origin' => 'string',
            'enterpriseProjectId' => 'string',
            'sequence' => 'string',
            'keystoreId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyAlias  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    * keySpec  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * keyUsage  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述，取值0到255字符。
    * origin  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    * enterpriseProjectId  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * keystoreId  密钥库ID，默认使用KMS默认密钥库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyAlias' => null,
        'keySpec' => null,
        'keyUsage' => null,
        'keyDescription' => null,
        'origin' => null,
        'enterpriseProjectId' => null,
        'sequence' => null,
        'keystoreId' => null
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
    * keyAlias  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    * keySpec  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * keyUsage  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述，取值0到255字符。
    * origin  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    * enterpriseProjectId  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * keystoreId  密钥库ID，默认使用KMS默认密钥库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyAlias' => 'key_alias',
            'keySpec' => 'key_spec',
            'keyUsage' => 'key_usage',
            'keyDescription' => 'key_description',
            'origin' => 'origin',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sequence' => 'sequence',
            'keystoreId' => 'keystore_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyAlias  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    * keySpec  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * keyUsage  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述，取值0到255字符。
    * origin  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    * enterpriseProjectId  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * keystoreId  密钥库ID，默认使用KMS默认密钥库
    *
    * @var string[]
    */
    protected static $setters = [
            'keyAlias' => 'setKeyAlias',
            'keySpec' => 'setKeySpec',
            'keyUsage' => 'setKeyUsage',
            'keyDescription' => 'setKeyDescription',
            'origin' => 'setOrigin',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sequence' => 'setSequence',
            'keystoreId' => 'setKeystoreId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyAlias  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    * keySpec  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * keyUsage  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述，取值0到255字符。
    * origin  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    * enterpriseProjectId  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * keystoreId  密钥库ID，默认使用KMS默认密钥库
    *
    * @var string[]
    */
    protected static $getters = [
            'keyAlias' => 'getKeyAlias',
            'keySpec' => 'getKeySpec',
            'keyUsage' => 'getKeyUsage',
            'keyDescription' => 'getKeyDescription',
            'origin' => 'getOrigin',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sequence' => 'getSequence',
            'keystoreId' => 'getKeystoreId'
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
    const KEY_SPEC_AES_256 = 'AES_256';
    const KEY_SPEC_SM4 = 'SM4';
    const KEY_SPEC_RSA_2048 = 'RSA_2048';
    const KEY_SPEC_RSA_3072 = 'RSA_3072';
    const KEY_SPEC_RSA_4096 = 'RSA_4096';
    const KEY_SPEC_EC_P256 = 'EC_P256';
    const KEY_SPEC_EC_P384 = 'EC_P384';
    const KEY_SPEC_SM2 = 'SM2';
    const KEY_USAGE_ENCRYPT_DECRYPT = 'ENCRYPT_DECRYPT';
    const KEY_USAGE_SIGN_VERIFY = 'SIGN_VERIFY';
    const ORIGIN_KMS = 'kms';
    const ORIGIN_EXTERNAL = 'external';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeySpecAllowableValues()
    {
        return [
            self::KEY_SPEC_AES_256,
            self::KEY_SPEC_SM4,
            self::KEY_SPEC_RSA_2048,
            self::KEY_SPEC_RSA_3072,
            self::KEY_SPEC_RSA_4096,
            self::KEY_SPEC_EC_P256,
            self::KEY_SPEC_EC_P384,
            self::KEY_SPEC_SM2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyUsageAllowableValues()
    {
        return [
            self::KEY_USAGE_ENCRYPT_DECRYPT,
            self::KEY_USAGE_SIGN_VERIFY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_KMS,
            self::ORIGIN_EXTERNAL,
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
        $this->container['keyAlias'] = isset($data['keyAlias']) ? $data['keyAlias'] : null;
        $this->container['keySpec'] = isset($data['keySpec']) ? $data['keySpec'] : null;
        $this->container['keyUsage'] = isset($data['keyUsage']) ? $data['keyUsage'] : null;
        $this->container['keyDescription'] = isset($data['keyDescription']) ? $data['keyDescription'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyAlias'] === null) {
            $invalidProperties[] = "'keyAlias' can't be null";
        }
            if ((mb_strlen($this->container['keyAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keyAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getKeySpecAllowableValues();
                if (!is_null($this->container['keySpec']) && !in_array($this->container['keySpec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keySpec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getKeyUsageAllowableValues();
                if (!is_null($this->container['keyUsage']) && !in_array($this->container['keyUsage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keyUsage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['keyDescription']) && (mb_strlen($this->container['keyDescription']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyDescription', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['keyDescription']) && (mb_strlen($this->container['keyDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOriginAllowableValues();
                if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets keyAlias
    *  非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    *
    * @return string
    */
    public function getKeyAlias()
    {
        return $this->container['keyAlias'];
    }

    /**
    * Sets keyAlias
    *
    * @param string $keyAlias 非默认主密钥别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与系统服务创建的默认主密钥别名重名。
    *
    * @return $this
    */
    public function setKeyAlias($keyAlias)
    {
        $this->container['keyAlias'] = $keyAlias;
        return $this;
    }

    /**
    * Gets keySpec
    *  密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    *
    * @return string|null
    */
    public function getKeySpec()
    {
        return $this->container['keySpec'];
    }

    /**
    * Sets keySpec
    *
    * @param string|null $keySpec 密钥生成算法，默认为“AES_256”，枚举如下： - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    *
    * @return $this
    */
    public function setKeySpec($keySpec)
    {
        $this->container['keySpec'] = $keySpec;
        return $this;
    }

    /**
    * Gets keyUsage
    *  密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    *
    * @return string|null
    */
    public function getKeyUsage()
    {
        return $this->container['keyUsage'];
    }

    /**
    * Sets keyUsage
    *
    * @param string|null $keyUsage 密钥用途，对称密钥默认为“ENCRYPT_DECRYPT”，非对称密钥默认为“SIGN_VERIFY”，枚举如下： - ENCRYPT_DECRYPT - SIGN_VERIFY
    *
    * @return $this
    */
    public function setKeyUsage($keyUsage)
    {
        $this->container['keyUsage'] = $keyUsage;
        return $this;
    }

    /**
    * Gets keyDescription
    *  密钥描述，取值0到255字符。
    *
    * @return string|null
    */
    public function getKeyDescription()
    {
        return $this->container['keyDescription'];
    }

    /**
    * Sets keyDescription
    *
    * @param string|null $keyDescription 密钥描述，取值0到255字符。
    *
    * @return $this
    */
    public function setKeyDescription($keyDescription)
    {
        $this->container['keyDescription'] = $keyDescription;
        return $this;
    }

    /**
    * Gets origin
    *  密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    *
    * @return string|null
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string|null $origin 密钥来源，默认为“kms”，枚举如下： - kms：表示密钥材料由kms生成。 - external：表示密钥材料由外部导入。
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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
    * Gets keystoreId
    *  密钥库ID，默认使用KMS默认密钥库
    *
    * @return string|null
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string|null $keystoreId 密钥库ID，默认使用KMS默认密钥库
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
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

