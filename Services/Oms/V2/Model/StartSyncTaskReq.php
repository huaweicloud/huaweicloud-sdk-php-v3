<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSyncTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSyncTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * srcKmsKeyId  KMS密钥ID，36个字符
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * dstKmsKeyId  KMS密钥ID，36个字符
    * sourceCdnAuthenticationKey  CDN鉴权密钥。
    * sourceCdnCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * sourceCdnKmsKeyId  KMS密钥ID，36个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcAk' => 'string',
            'srcSk' => 'string',
            'srcCryptoType' => 'string',
            'srcKmsKeyId' => 'string',
            'dstAk' => 'string',
            'dstSk' => 'string',
            'dstCryptoType' => 'string',
            'dstKmsKeyId' => 'string',
            'sourceCdnAuthenticationKey' => 'string',
            'sourceCdnCryptoType' => 'string',
            'sourceCdnKmsKeyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * srcKmsKeyId  KMS密钥ID，36个字符
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * dstKmsKeyId  KMS密钥ID，36个字符
    * sourceCdnAuthenticationKey  CDN鉴权密钥。
    * sourceCdnCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * sourceCdnKmsKeyId  KMS密钥ID，36个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcAk' => null,
        'srcSk' => null,
        'srcCryptoType' => null,
        'srcKmsKeyId' => null,
        'dstAk' => null,
        'dstSk' => null,
        'dstCryptoType' => null,
        'dstKmsKeyId' => null,
        'sourceCdnAuthenticationKey' => null,
        'sourceCdnCryptoType' => null,
        'sourceCdnKmsKeyId' => null
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
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * srcKmsKeyId  KMS密钥ID，36个字符
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * dstKmsKeyId  KMS密钥ID，36个字符
    * sourceCdnAuthenticationKey  CDN鉴权密钥。
    * sourceCdnCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * sourceCdnKmsKeyId  KMS密钥ID，36个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcAk' => 'src_ak',
            'srcSk' => 'src_sk',
            'srcCryptoType' => 'src_crypto_type',
            'srcKmsKeyId' => 'src_kms_key_id',
            'dstAk' => 'dst_ak',
            'dstSk' => 'dst_sk',
            'dstCryptoType' => 'dst_crypto_type',
            'dstKmsKeyId' => 'dst_kms_key_id',
            'sourceCdnAuthenticationKey' => 'source_cdn_authentication_key',
            'sourceCdnCryptoType' => 'source_cdn_crypto_type',
            'sourceCdnKmsKeyId' => 'source_cdn_kms_key_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * srcKmsKeyId  KMS密钥ID，36个字符
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * dstKmsKeyId  KMS密钥ID，36个字符
    * sourceCdnAuthenticationKey  CDN鉴权密钥。
    * sourceCdnCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * sourceCdnKmsKeyId  KMS密钥ID，36个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'srcAk' => 'setSrcAk',
            'srcSk' => 'setSrcSk',
            'srcCryptoType' => 'setSrcCryptoType',
            'srcKmsKeyId' => 'setSrcKmsKeyId',
            'dstAk' => 'setDstAk',
            'dstSk' => 'setDstSk',
            'dstCryptoType' => 'setDstCryptoType',
            'dstKmsKeyId' => 'setDstKmsKeyId',
            'sourceCdnAuthenticationKey' => 'setSourceCdnAuthenticationKey',
            'sourceCdnCryptoType' => 'setSourceCdnCryptoType',
            'sourceCdnKmsKeyId' => 'setSourceCdnKmsKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * srcKmsKeyId  KMS密钥ID，36个字符
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * dstKmsKeyId  KMS密钥ID，36个字符
    * sourceCdnAuthenticationKey  CDN鉴权密钥。
    * sourceCdnCryptoType  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    * sourceCdnKmsKeyId  KMS密钥ID，36个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'srcAk' => 'getSrcAk',
            'srcSk' => 'getSrcSk',
            'srcCryptoType' => 'getSrcCryptoType',
            'srcKmsKeyId' => 'getSrcKmsKeyId',
            'dstAk' => 'getDstAk',
            'dstSk' => 'getDstSk',
            'dstCryptoType' => 'getDstCryptoType',
            'dstKmsKeyId' => 'getDstKmsKeyId',
            'sourceCdnAuthenticationKey' => 'getSourceCdnAuthenticationKey',
            'sourceCdnCryptoType' => 'getSourceCdnCryptoType',
            'sourceCdnKmsKeyId' => 'getSourceCdnKmsKeyId'
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
    const SRC_CRYPTO_TYPE__DEFAULT = 'DEFAULT';
    const SRC_CRYPTO_TYPE_KMS = 'KMS';
    const DST_CRYPTO_TYPE__DEFAULT = 'DEFAULT';
    const DST_CRYPTO_TYPE_KMS = 'KMS';
    const SOURCE_CDN_CRYPTO_TYPE__DEFAULT = 'DEFAULT';
    const SOURCE_CDN_CRYPTO_TYPE_KMS = 'KMS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSrcCryptoTypeAllowableValues()
    {
        return [
            self::SRC_CRYPTO_TYPE__DEFAULT,
            self::SRC_CRYPTO_TYPE_KMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDstCryptoTypeAllowableValues()
    {
        return [
            self::DST_CRYPTO_TYPE__DEFAULT,
            self::DST_CRYPTO_TYPE_KMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceCdnCryptoTypeAllowableValues()
    {
        return [
            self::SOURCE_CDN_CRYPTO_TYPE__DEFAULT,
            self::SOURCE_CDN_CRYPTO_TYPE_KMS,
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
        $this->container['srcAk'] = isset($data['srcAk']) ? $data['srcAk'] : null;
        $this->container['srcSk'] = isset($data['srcSk']) ? $data['srcSk'] : null;
        $this->container['srcCryptoType'] = isset($data['srcCryptoType']) ? $data['srcCryptoType'] : null;
        $this->container['srcKmsKeyId'] = isset($data['srcKmsKeyId']) ? $data['srcKmsKeyId'] : null;
        $this->container['dstAk'] = isset($data['dstAk']) ? $data['dstAk'] : null;
        $this->container['dstSk'] = isset($data['dstSk']) ? $data['dstSk'] : null;
        $this->container['dstCryptoType'] = isset($data['dstCryptoType']) ? $data['dstCryptoType'] : null;
        $this->container['dstKmsKeyId'] = isset($data['dstKmsKeyId']) ? $data['dstKmsKeyId'] : null;
        $this->container['sourceCdnAuthenticationKey'] = isset($data['sourceCdnAuthenticationKey']) ? $data['sourceCdnAuthenticationKey'] : null;
        $this->container['sourceCdnCryptoType'] = isset($data['sourceCdnCryptoType']) ? $data['sourceCdnCryptoType'] : null;
        $this->container['sourceCdnKmsKeyId'] = isset($data['sourceCdnKmsKeyId']) ? $data['sourceCdnKmsKeyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['srcAk'] === null) {
            $invalidProperties[] = "'srcAk' can't be null";
        }
            if ((mb_strlen($this->container['srcAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['srcAk']) < 1)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcAk'])) {
                $invalidProperties[] = "invalid value for 'srcAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['srcSk'] === null) {
            $invalidProperties[] = "'srcSk' can't be null";
        }
            if ((mb_strlen($this->container['srcSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['srcSk']) < 1)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcSk'])) {
                $invalidProperties[] = "invalid value for 'srcSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getSrcCryptoTypeAllowableValues();
                if (!is_null($this->container['srcCryptoType']) && !in_array($this->container['srcCryptoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'srcCryptoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['srcCryptoType']) && (mb_strlen($this->container['srcCryptoType']) > 32)) {
                $invalidProperties[] = "invalid value for 'srcCryptoType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['srcCryptoType']) && (mb_strlen($this->container['srcCryptoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'srcCryptoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['srcKmsKeyId']) && (mb_strlen($this->container['srcKmsKeyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'srcKmsKeyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['srcKmsKeyId']) && (mb_strlen($this->container['srcKmsKeyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcKmsKeyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcKmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['srcKmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'srcKmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
        if ($this->container['dstAk'] === null) {
            $invalidProperties[] = "'dstAk' can't be null";
        }
            if ((mb_strlen($this->container['dstAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstAk']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstAk'])) {
                $invalidProperties[] = "invalid value for 'dstAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstSk'] === null) {
            $invalidProperties[] = "'dstSk' can't be null";
        }
            if ((mb_strlen($this->container['dstSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstSk']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstSk'])) {
                $invalidProperties[] = "invalid value for 'dstSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getDstCryptoTypeAllowableValues();
                if (!is_null($this->container['dstCryptoType']) && !in_array($this->container['dstCryptoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dstCryptoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dstCryptoType']) && (mb_strlen($this->container['dstCryptoType']) > 32)) {
                $invalidProperties[] = "invalid value for 'dstCryptoType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dstCryptoType']) && (mb_strlen($this->container['dstCryptoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstCryptoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dstKmsKeyId']) && (mb_strlen($this->container['dstKmsKeyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dstKmsKeyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dstKmsKeyId']) && (mb_strlen($this->container['dstKmsKeyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstKmsKeyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstKmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['dstKmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'dstKmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sourceCdnAuthenticationKey'])) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getSourceCdnCryptoTypeAllowableValues();
                if (!is_null($this->container['sourceCdnCryptoType']) && !in_array($this->container['sourceCdnCryptoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceCdnCryptoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sourceCdnCryptoType']) && (mb_strlen($this->container['sourceCdnCryptoType']) > 32)) {
                $invalidProperties[] = "invalid value for 'sourceCdnCryptoType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sourceCdnCryptoType']) && (mb_strlen($this->container['sourceCdnCryptoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceCdnCryptoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceCdnKmsKeyId']) && (mb_strlen($this->container['sourceCdnKmsKeyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceCdnKmsKeyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceCdnKmsKeyId']) && (mb_strlen($this->container['sourceCdnKmsKeyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceCdnKmsKeyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceCdnKmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['sourceCdnKmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'sourceCdnKmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets srcAk
    *  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return string
    */
    public function getSrcAk()
    {
        return $this->container['srcAk'];
    }

    /**
    * Sets srcAk
    *
    * @param string $srcAk 源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return $this
    */
    public function setSrcAk($srcAk)
    {
        $this->container['srcAk'] = $srcAk;
        return $this;
    }

    /**
    * Gets srcSk
    *  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return string
    */
    public function getSrcSk()
    {
        return $this->container['srcSk'];
    }

    /**
    * Sets srcSk
    *
    * @param string $srcSk 源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return $this
    */
    public function setSrcSk($srcSk)
    {
        $this->container['srcSk'] = $srcSk;
        return $this;
    }

    /**
    * Gets srcCryptoType
    *  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return string|null
    */
    public function getSrcCryptoType()
    {
        return $this->container['srcCryptoType'];
    }

    /**
    * Sets srcCryptoType
    *
    * @param string|null $srcCryptoType 加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return $this
    */
    public function setSrcCryptoType($srcCryptoType)
    {
        $this->container['srcCryptoType'] = $srcCryptoType;
        return $this;
    }

    /**
    * Gets srcKmsKeyId
    *  KMS密钥ID，36个字符
    *
    * @return string|null
    */
    public function getSrcKmsKeyId()
    {
        return $this->container['srcKmsKeyId'];
    }

    /**
    * Sets srcKmsKeyId
    *
    * @param string|null $srcKmsKeyId KMS密钥ID，36个字符
    *
    * @return $this
    */
    public function setSrcKmsKeyId($srcKmsKeyId)
    {
        $this->container['srcKmsKeyId'] = $srcKmsKeyId;
        return $this;
    }

    /**
    * Gets dstAk
    *  目的端节点AK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstAk()
    {
        return $this->container['dstAk'];
    }

    /**
    * Sets dstAk
    *
    * @param string $dstAk 目的端节点AK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstAk($dstAk)
    {
        $this->container['dstAk'] = $dstAk;
        return $this;
    }

    /**
    * Gets dstSk
    *  目的端节点SK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstSk()
    {
        return $this->container['dstSk'];
    }

    /**
    * Sets dstSk
    *
    * @param string $dstSk 目的端节点SK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstSk($dstSk)
    {
        $this->container['dstSk'] = $dstSk;
        return $this;
    }

    /**
    * Gets dstCryptoType
    *  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return string|null
    */
    public function getDstCryptoType()
    {
        return $this->container['dstCryptoType'];
    }

    /**
    * Sets dstCryptoType
    *
    * @param string|null $dstCryptoType 加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return $this
    */
    public function setDstCryptoType($dstCryptoType)
    {
        $this->container['dstCryptoType'] = $dstCryptoType;
        return $this;
    }

    /**
    * Gets dstKmsKeyId
    *  KMS密钥ID，36个字符
    *
    * @return string|null
    */
    public function getDstKmsKeyId()
    {
        return $this->container['dstKmsKeyId'];
    }

    /**
    * Sets dstKmsKeyId
    *
    * @param string|null $dstKmsKeyId KMS密钥ID，36个字符
    *
    * @return $this
    */
    public function setDstKmsKeyId($dstKmsKeyId)
    {
        $this->container['dstKmsKeyId'] = $dstKmsKeyId;
        return $this;
    }

    /**
    * Gets sourceCdnAuthenticationKey
    *  CDN鉴权密钥。
    *
    * @return string|null
    */
    public function getSourceCdnAuthenticationKey()
    {
        return $this->container['sourceCdnAuthenticationKey'];
    }

    /**
    * Sets sourceCdnAuthenticationKey
    *
    * @param string|null $sourceCdnAuthenticationKey CDN鉴权密钥。
    *
    * @return $this
    */
    public function setSourceCdnAuthenticationKey($sourceCdnAuthenticationKey)
    {
        $this->container['sourceCdnAuthenticationKey'] = $sourceCdnAuthenticationKey;
        return $this;
    }

    /**
    * Gets sourceCdnCryptoType
    *  加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return string|null
    */
    public function getSourceCdnCryptoType()
    {
        return $this->container['sourceCdnCryptoType'];
    }

    /**
    * Sets sourceCdnCryptoType
    *
    * @param string|null $sourceCdnCryptoType 加解密类型，默认为DEFAULT，可选类型为DEFAULT、KMS
    *
    * @return $this
    */
    public function setSourceCdnCryptoType($sourceCdnCryptoType)
    {
        $this->container['sourceCdnCryptoType'] = $sourceCdnCryptoType;
        return $this;
    }

    /**
    * Gets sourceCdnKmsKeyId
    *  KMS密钥ID，36个字符
    *
    * @return string|null
    */
    public function getSourceCdnKmsKeyId()
    {
        return $this->container['sourceCdnKmsKeyId'];
    }

    /**
    * Sets sourceCdnKmsKeyId
    *
    * @param string|null $sourceCdnKmsKeyId KMS密钥ID，36个字符
    *
    * @return $this
    */
    public function setSourceCdnKmsKeyId($sourceCdnKmsKeyId)
    {
        $this->container['sourceCdnKmsKeyId'] = $sourceCdnKmsKeyId;
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

