<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeyDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeyDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID。
    * domainId  用户域ID。
    * keyAlias  密钥别名。
    * realm  密钥区域。
    * keySpec  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
    * keyUsage  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述。
    * creationDate  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeletionDate  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * keyState  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    * defaultKeyFlag  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    * keyType  密钥类型。
    * expirationTime  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * origin  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * sysEnterpriseProjectId  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * keystoreId  密钥库ID
    * keyLabel  密钥在加密机中的标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'domainId' => 'string',
            'keyAlias' => 'string',
            'realm' => 'string',
            'keySpec' => 'string',
            'keyUsage' => 'string',
            'keyDescription' => 'string',
            'creationDate' => 'string',
            'scheduledDeletionDate' => 'string',
            'keyState' => 'string',
            'defaultKeyFlag' => 'string',
            'keyType' => 'string',
            'expirationTime' => 'string',
            'origin' => 'string',
            'keyRotationEnabled' => 'string',
            'sysEnterpriseProjectId' => 'string',
            'keystoreId' => 'string',
            'keyLabel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID。
    * domainId  用户域ID。
    * keyAlias  密钥别名。
    * realm  密钥区域。
    * keySpec  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
    * keyUsage  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述。
    * creationDate  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeletionDate  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * keyState  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    * defaultKeyFlag  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    * keyType  密钥类型。
    * expirationTime  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * origin  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * sysEnterpriseProjectId  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * keystoreId  密钥库ID
    * keyLabel  密钥在加密机中的标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'domainId' => null,
        'keyAlias' => null,
        'realm' => null,
        'keySpec' => null,
        'keyUsage' => null,
        'keyDescription' => null,
        'creationDate' => null,
        'scheduledDeletionDate' => null,
        'keyState' => null,
        'defaultKeyFlag' => null,
        'keyType' => null,
        'expirationTime' => null,
        'origin' => null,
        'keyRotationEnabled' => null,
        'sysEnterpriseProjectId' => null,
        'keystoreId' => null,
        'keyLabel' => null
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
    * domainId  用户域ID。
    * keyAlias  密钥别名。
    * realm  密钥区域。
    * keySpec  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
    * keyUsage  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述。
    * creationDate  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeletionDate  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * keyState  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    * defaultKeyFlag  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    * keyType  密钥类型。
    * expirationTime  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * origin  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * sysEnterpriseProjectId  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * keystoreId  密钥库ID
    * keyLabel  密钥在加密机中的标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'domainId' => 'domain_id',
            'keyAlias' => 'key_alias',
            'realm' => 'realm',
            'keySpec' => 'key_spec',
            'keyUsage' => 'key_usage',
            'keyDescription' => 'key_description',
            'creationDate' => 'creation_date',
            'scheduledDeletionDate' => 'scheduled_deletion_date',
            'keyState' => 'key_state',
            'defaultKeyFlag' => 'default_key_flag',
            'keyType' => 'key_type',
            'expirationTime' => 'expiration_time',
            'origin' => 'origin',
            'keyRotationEnabled' => 'key_rotation_enabled',
            'sysEnterpriseProjectId' => 'sys_enterprise_project_id',
            'keystoreId' => 'keystore_id',
            'keyLabel' => 'key_label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID。
    * domainId  用户域ID。
    * keyAlias  密钥别名。
    * realm  密钥区域。
    * keySpec  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
    * keyUsage  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述。
    * creationDate  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeletionDate  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * keyState  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    * defaultKeyFlag  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    * keyType  密钥类型。
    * expirationTime  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * origin  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * sysEnterpriseProjectId  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * keystoreId  密钥库ID
    * keyLabel  密钥在加密机中的标签
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'domainId' => 'setDomainId',
            'keyAlias' => 'setKeyAlias',
            'realm' => 'setRealm',
            'keySpec' => 'setKeySpec',
            'keyUsage' => 'setKeyUsage',
            'keyDescription' => 'setKeyDescription',
            'creationDate' => 'setCreationDate',
            'scheduledDeletionDate' => 'setScheduledDeletionDate',
            'keyState' => 'setKeyState',
            'defaultKeyFlag' => 'setDefaultKeyFlag',
            'keyType' => 'setKeyType',
            'expirationTime' => 'setExpirationTime',
            'origin' => 'setOrigin',
            'keyRotationEnabled' => 'setKeyRotationEnabled',
            'sysEnterpriseProjectId' => 'setSysEnterpriseProjectId',
            'keystoreId' => 'setKeystoreId',
            'keyLabel' => 'setKeyLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID。
    * domainId  用户域ID。
    * keyAlias  密钥别名。
    * realm  密钥区域。
    * keySpec  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
    * keyUsage  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
    * keyDescription  密钥描述。
    * creationDate  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeletionDate  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * keyState  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    * defaultKeyFlag  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    * keyType  密钥类型。
    * expirationTime  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * origin  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * sysEnterpriseProjectId  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * keystoreId  密钥库ID
    * keyLabel  密钥在加密机中的标签
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'domainId' => 'getDomainId',
            'keyAlias' => 'getKeyAlias',
            'realm' => 'getRealm',
            'keySpec' => 'getKeySpec',
            'keyUsage' => 'getKeyUsage',
            'keyDescription' => 'getKeyDescription',
            'creationDate' => 'getCreationDate',
            'scheduledDeletionDate' => 'getScheduledDeletionDate',
            'keyState' => 'getKeyState',
            'defaultKeyFlag' => 'getDefaultKeyFlag',
            'keyType' => 'getKeyType',
            'expirationTime' => 'getExpirationTime',
            'origin' => 'getOrigin',
            'keyRotationEnabled' => 'getKeyRotationEnabled',
            'sysEnterpriseProjectId' => 'getSysEnterpriseProjectId',
            'keystoreId' => 'getKeystoreId',
            'keyLabel' => 'getKeyLabel'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['keyAlias'] = isset($data['keyAlias']) ? $data['keyAlias'] : null;
        $this->container['realm'] = isset($data['realm']) ? $data['realm'] : null;
        $this->container['keySpec'] = isset($data['keySpec']) ? $data['keySpec'] : null;
        $this->container['keyUsage'] = isset($data['keyUsage']) ? $data['keyUsage'] : null;
        $this->container['keyDescription'] = isset($data['keyDescription']) ? $data['keyDescription'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['scheduledDeletionDate'] = isset($data['scheduledDeletionDate']) ? $data['scheduledDeletionDate'] : null;
        $this->container['keyState'] = isset($data['keyState']) ? $data['keyState'] : null;
        $this->container['defaultKeyFlag'] = isset($data['defaultKeyFlag']) ? $data['defaultKeyFlag'] : null;
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['keyRotationEnabled'] = isset($data['keyRotationEnabled']) ? $data['keyRotationEnabled'] : null;
        $this->container['sysEnterpriseProjectId'] = isset($data['sysEnterpriseProjectId']) ? $data['sysEnterpriseProjectId'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
        $this->container['keyLabel'] = isset($data['keyLabel']) ? $data['keyLabel'] : null;
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
            if (!is_null($this->container['keyId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['keyId'])) {
                $invalidProperties[] = "invalid value for 'keyId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['keyAlias']) && (mb_strlen($this->container['keyAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['keyAlias']) && (mb_strlen($this->container['keyAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['realm']) && (mb_strlen($this->container['realm']) > 255)) {
                $invalidProperties[] = "invalid value for 'realm', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['realm']) && (mb_strlen($this->container['realm']) < 0)) {
                $invalidProperties[] = "invalid value for 'realm', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) > 13)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) < 13)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['scheduledDeletionDate']) && (mb_strlen($this->container['scheduledDeletionDate']) > 13)) {
                $invalidProperties[] = "invalid value for 'scheduledDeletionDate', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['scheduledDeletionDate']) && (mb_strlen($this->container['scheduledDeletionDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledDeletionDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyState']) && !preg_match("/^[1-5]{1}$/", $this->container['keyState'])) {
                $invalidProperties[] = "invalid value for 'keyState', must be conform to the pattern /^[1-5]{1}$/.";
            }
            if (!is_null($this->container['defaultKeyFlag']) && (mb_strlen($this->container['defaultKeyFlag']) > 1)) {
                $invalidProperties[] = "invalid value for 'defaultKeyFlag', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['defaultKeyFlag']) && (mb_strlen($this->container['defaultKeyFlag']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultKeyFlag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyType']) && (mb_strlen($this->container['keyType']) > 13)) {
                $invalidProperties[] = "invalid value for 'keyType', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['keyType']) && (mb_strlen($this->container['keyType']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expirationTime']) && (mb_strlen($this->container['expirationTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'expirationTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['expirationTime']) && (mb_strlen($this->container['expirationTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expirationTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOriginAllowableValues();
                if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['keyRotationEnabled']) && (mb_strlen($this->container['keyRotationEnabled']) > 5)) {
                $invalidProperties[] = "invalid value for 'keyRotationEnabled', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['keyRotationEnabled']) && (mb_strlen($this->container['keyRotationEnabled']) < 4)) {
                $invalidProperties[] = "invalid value for 'keyRotationEnabled', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['sysEnterpriseProjectId']) && (mb_strlen($this->container['sysEnterpriseProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'sysEnterpriseProjectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sysEnterpriseProjectId']) && (mb_strlen($this->container['sysEnterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sysEnterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets domainId
    *  用户域ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户域ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets keyAlias
    *  密钥别名。
    *
    * @return string|null
    */
    public function getKeyAlias()
    {
        return $this->container['keyAlias'];
    }

    /**
    * Sets keyAlias
    *
    * @param string|null $keyAlias 密钥别名。
    *
    * @return $this
    */
    public function setKeyAlias($keyAlias)
    {
        $this->container['keyAlias'] = $keyAlias;
        return $this;
    }

    /**
    * Gets realm
    *  密钥区域。
    *
    * @return string|null
    */
    public function getRealm()
    {
        return $this->container['realm'];
    }

    /**
    * Sets realm
    *
    * @param string|null $realm 密钥区域。
    *
    * @return $this
    */
    public function setRealm($realm)
    {
        $this->container['realm'] = $realm;
        return $this;
    }

    /**
    * Gets keySpec
    *  密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
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
    * @param string|null $keySpec 密钥生成算法。  - AES_256  - SM4  - RSA_2048  - RSA_3072  - RSA_4096  - EC_P256  - EC_P384  - SM2
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
    *  密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
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
    * @param string|null $keyUsage 密钥用途。 - ENCRYPT_DECRYPT - SIGN_VERIFY
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
    *  密钥描述。
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
    * @param string|null $keyDescription 密钥描述。
    *
    * @return $this
    */
    public function setKeyDescription($keyDescription)
    {
        $this->container['keyDescription'] = $keyDescription;
        return $this;
    }

    /**
    * Gets creationDate
    *  密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 密钥创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets scheduledDeletionDate
    *  密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return string|null
    */
    public function getScheduledDeletionDate()
    {
        return $this->container['scheduledDeletionDate'];
    }

    /**
    * Sets scheduledDeletionDate
    *
    * @param string|null $scheduledDeletionDate 密钥计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setScheduledDeletionDate($scheduledDeletionDate)
    {
        $this->container['scheduledDeletionDate'] = $scheduledDeletionDate;
        return $this;
    }

    /**
    * Gets keyState
    *  密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    *
    * @return string|null
    */
    public function getKeyState()
    {
        return $this->container['keyState'];
    }

    /**
    * Sets keyState
    *
    * @param string|null $keyState 密钥状态，满足正则匹配“^[1-5]{1}$”，枚举如下：  - “1”表示待激活状态  - “2”表示启用状态  - “3”表示禁用状态  - “4”表示计划删除状态  - “5”表示等待导入状态
    *
    * @return $this
    */
    public function setKeyState($keyState)
    {
        $this->container['keyState'] = $keyState;
        return $this;
    }

    /**
    * Gets defaultKeyFlag
    *  默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    *
    * @return string|null
    */
    public function getDefaultKeyFlag()
    {
        return $this->container['defaultKeyFlag'];
    }

    /**
    * Sets defaultKeyFlag
    *
    * @param string|null $defaultKeyFlag 默认主密钥标识，默认主密钥标识为1，非默认标识为0。
    *
    * @return $this
    */
    public function setDefaultKeyFlag($defaultKeyFlag)
    {
        $this->container['defaultKeyFlag'] = $defaultKeyFlag;
        return $this;
    }

    /**
    * Gets keyType
    *  密钥类型。
    *
    * @return string|null
    */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
    * Sets keyType
    *
    * @param string|null $keyType 密钥类型。
    *
    * @return $this
    */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;
        return $this;
    }

    /**
    * Gets expirationTime
    *  密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return string|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string|null $expirationTime 密钥材料失效时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets origin
    *  密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
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
    * @param string|null $origin 密钥来源，默认为“kms”，枚举如下：  - kms表示密钥材料由kms生成kms表示密钥材料由kms生成  - external表示密钥材料由外部导入
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets keyRotationEnabled
    *  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    *
    * @return string|null
    */
    public function getKeyRotationEnabled()
    {
        return $this->container['keyRotationEnabled'];
    }

    /**
    * Sets keyRotationEnabled
    *
    * @param string|null $keyRotationEnabled 密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    *
    * @return $this
    */
    public function setKeyRotationEnabled($keyRotationEnabled)
    {
        $this->container['keyRotationEnabled'] = $keyRotationEnabled;
        return $this;
    }

    /**
    * Gets sysEnterpriseProjectId
    *  企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @return string|null
    */
    public function getSysEnterpriseProjectId()
    {
        return $this->container['sysEnterpriseProjectId'];
    }

    /**
    * Sets sysEnterpriseProjectId
    *
    * @param string|null $sysEnterpriseProjectId 企业项目ID，默认为“0”。  - 对于开通企业项目的用户，表示资源处于默认企业项目下。  - 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @return $this
    */
    public function setSysEnterpriseProjectId($sysEnterpriseProjectId)
    {
        $this->container['sysEnterpriseProjectId'] = $sysEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets keystoreId
    *  密钥库ID
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
    * @param string|null $keystoreId 密钥库ID
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets keyLabel
    *  密钥在加密机中的标签
    *
    * @return string|null
    */
    public function getKeyLabel()
    {
        return $this->container['keyLabel'];
    }

    /**
    * Sets keyLabel
    *
    * @param string|null $keyLabel 密钥在加密机中的标签
    *
    * @return $this
    */
    public function setKeyLabel($keyLabel)
    {
        $this->container['keyLabel'] = $keyLabel;
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

