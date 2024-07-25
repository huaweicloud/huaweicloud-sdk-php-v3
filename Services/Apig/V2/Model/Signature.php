<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Signature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Signature';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * signType  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    * signKey  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    * signSecret  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    * signAlgorithm  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    * updateTime  更新时间
    * createTime  创建时间
    * id  签名密钥的编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'signType' => 'string',
            'signKey' => 'string',
            'signSecret' => 'string',
            'signAlgorithm' => 'string',
            'updateTime' => '\DateTime',
            'createTime' => '\DateTime',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * signType  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    * signKey  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    * signSecret  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    * signAlgorithm  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    * updateTime  更新时间
    * createTime  创建时间
    * id  签名密钥的编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'signType' => null,
        'signKey' => null,
        'signSecret' => null,
        'signAlgorithm' => null,
        'updateTime' => 'date-time',
        'createTime' => 'date-time',
        'id' => null
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
    * name  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * signType  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    * signKey  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    * signSecret  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    * signAlgorithm  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    * updateTime  更新时间
    * createTime  创建时间
    * id  签名密钥的编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'signType' => 'sign_type',
            'signKey' => 'sign_key',
            'signSecret' => 'sign_secret',
            'signAlgorithm' => 'sign_algorithm',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * signType  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    * signKey  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    * signSecret  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    * signAlgorithm  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    * updateTime  更新时间
    * createTime  创建时间
    * id  签名密钥的编号
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'signType' => 'setSignType',
            'signKey' => 'setSignKey',
            'signSecret' => 'setSignSecret',
            'signAlgorithm' => 'setSignAlgorithm',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * signType  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    * signKey  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    * signSecret  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    * signAlgorithm  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    * updateTime  更新时间
    * createTime  创建时间
    * id  签名密钥的编号
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'signType' => 'getSignType',
            'signKey' => 'getSignKey',
            'signSecret' => 'getSignSecret',
            'signAlgorithm' => 'getSignAlgorithm',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'id' => 'getId'
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
    const SIGN_TYPE_HMAC = 'hmac';
    const SIGN_TYPE_BASIC = 'basic';
    const SIGN_TYPE_PUBLIC_KEY = 'public_key';
    const SIGN_TYPE_AES = 'aes';
    const SIGN_ALGORITHM_AES_128_CFB = 'aes-128-cfb';
    const SIGN_ALGORITHM_AES_256_CFB = 'aes-256-cfb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignTypeAllowableValues()
    {
        return [
            self::SIGN_TYPE_HMAC,
            self::SIGN_TYPE_BASIC,
            self::SIGN_TYPE_PUBLIC_KEY,
            self::SIGN_TYPE_AES,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignAlgorithmAllowableValues()
    {
        return [
            self::SIGN_ALGORITHM_AES_128_CFB,
            self::SIGN_ALGORITHM_AES_256_CFB,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['signType'] = isset($data['signType']) ? $data['signType'] : null;
        $this->container['signKey'] = isset($data['signKey']) ? $data['signKey'] : null;
        $this->container['signSecret'] = isset($data['signSecret']) ? $data['signSecret'] : null;
        $this->container['signAlgorithm'] = isset($data['signAlgorithm']) ? $data['signAlgorithm'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
            $allowedValues = $this->getSignTypeAllowableValues();
                if (!is_null($this->container['signType']) && !in_array($this->container['signType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSignAlgorithmAllowableValues();
                if (!is_null($this->container['signAlgorithm']) && !in_array($this->container['signAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets signType
    *  签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    *
    * @return string|null
    */
    public function getSignType()
    {
        return $this->container['signType'];
    }

    /**
    * Sets signType
    *
    * @param string|null $signType 签名密钥类型： - hmac - basic - public_key - aes  basic类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。  public_key类型开启实例配置public_key才可使用，实例特性配置详情请参考“附录 > 实例支持的APIG特性”，如确认实例不存在public_key配置可联系技术工程师开启。  aes类型需要实例升级到对应版本，如果不存在可联系技术工程师升级。
    *
    * @return $this
    */
    public function setSignType($signType)
    {
        $this->container['signType'] = $signType;
        return $this;
    }

    /**
    * Gets signKey
    *  签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    *
    * @return string|null
    */
    public function getSignKey()
    {
        return $this->container['signKey'];
    }

    /**
    * Sets signKey
    *
    * @param string|null $signKey 签名密钥的key。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母或数字开头，8 ~ 32字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，且只能以英文字母开头，4 ~ 32字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，+，/，=，可以英文字母，数字，+，/开头，8 ~ 512字符。未填写时后台自动生成。 - aes类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，签名算法为aes-128-cfb时为16个字符，签名算法为aes-256-cfb时为32个字符。未填写时后台自动生成。
    *
    * @return $this
    */
    public function setSignKey($signKey)
    {
        $this->container['signKey'] = $signKey;
        return $this;
    }

    /**
    * Gets signSecret
    *  签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    *
    * @return string|null
    */
    public function getSignSecret()
    {
        return $this->container['signSecret'];
    }

    /**
    * Sets signSecret
    *
    * @param string|null $signSecret 签名密钥的密钥。 - hmac类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，16 ~ 64字符。未填写时后台自动生成。 - basic类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，且只能以英文字母或数字开头，8 ~ 64字符。未填写时后台自动生成。 - public_key类型的签名密钥key：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16 ~ 2048字符。未填写时后台自动生成。 - aes类型签名密钥使用的向量：支持英文，数字，下划线，中划线，!，@，#，$，%，+，/，=，可以英文字母，数字，+，/开头，16个字符。未填写时后台自动生成。
    *
    * @return $this
    */
    public function setSignSecret($signSecret)
    {
        $this->container['signSecret'] = $signSecret;
        return $this;
    }

    /**
    * Gets signAlgorithm
    *  签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    *
    * @return string|null
    */
    public function getSignAlgorithm()
    {
        return $this->container['signAlgorithm'];
    }

    /**
    * Sets signAlgorithm
    *
    * @param string|null $signAlgorithm 签名算法。默认值为空，仅aes类型签名密钥支持选择签名算法，其他类型签名密钥不支持签名算法。
    *
    * @return $this
    */
    public function setSignAlgorithm($signAlgorithm)
    {
        $this->container['signAlgorithm'] = $signAlgorithm;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets id
    *  签名密钥的编号
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
    * @param string|null $id 签名密钥的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

