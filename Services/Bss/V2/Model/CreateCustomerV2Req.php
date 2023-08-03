<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomerV2Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomerV2Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    * mobilePhone  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    * verificationCode  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    * xaccountId  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * password  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    * isCloseMarketMs  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    * cooperationType  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    * includeAssociationResult  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'mobilePhone' => 'string',
            'verificationCode' => 'string',
            'xaccountId' => 'string',
            'xaccountType' => 'string',
            'password' => 'string',
            'isCloseMarketMs' => 'string',
            'cooperationType' => 'string',
            'indirectPartnerId' => 'string',
            'includeAssociationResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    * mobilePhone  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    * verificationCode  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    * xaccountId  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * password  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    * isCloseMarketMs  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    * cooperationType  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    * includeAssociationResult  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'mobilePhone' => null,
        'verificationCode' => null,
        'xaccountId' => null,
        'xaccountType' => null,
        'password' => null,
        'isCloseMarketMs' => null,
        'cooperationType' => null,
        'indirectPartnerId' => null,
        'includeAssociationResult' => null
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
    * domainName  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    * mobilePhone  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    * verificationCode  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    * xaccountId  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * password  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    * isCloseMarketMs  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    * cooperationType  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    * includeAssociationResult  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'mobilePhone' => 'mobile_phone',
            'verificationCode' => 'verification_code',
            'xaccountId' => 'xaccount_id',
            'xaccountType' => 'xaccount_type',
            'password' => 'password',
            'isCloseMarketMs' => 'is_close_market_ms',
            'cooperationType' => 'cooperation_type',
            'indirectPartnerId' => 'indirect_partner_id',
            'includeAssociationResult' => 'include_association_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    * mobilePhone  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    * verificationCode  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    * xaccountId  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * password  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    * isCloseMarketMs  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    * cooperationType  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    * includeAssociationResult  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'mobilePhone' => 'setMobilePhone',
            'verificationCode' => 'setVerificationCode',
            'xaccountId' => 'setXaccountId',
            'xaccountType' => 'setXaccountType',
            'password' => 'setPassword',
            'isCloseMarketMs' => 'setIsCloseMarketMs',
            'cooperationType' => 'setCooperationType',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'includeAssociationResult' => 'setIncludeAssociationResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    * mobilePhone  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    * verificationCode  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    * xaccountId  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * password  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    * isCloseMarketMs  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    * cooperationType  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    * includeAssociationResult  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'mobilePhone' => 'getMobilePhone',
            'verificationCode' => 'getVerificationCode',
            'xaccountId' => 'getXaccountId',
            'xaccountType' => 'getXaccountType',
            'password' => 'getPassword',
            'isCloseMarketMs' => 'getIsCloseMarketMs',
            'cooperationType' => 'getCooperationType',
            'indirectPartnerId' => 'getIndirectPartnerId',
            'includeAssociationResult' => 'getIncludeAssociationResult'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['verificationCode'] = isset($data['verificationCode']) ? $data['verificationCode'] : null;
        $this->container['xaccountId'] = isset($data['xaccountId']) ? $data['xaccountId'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['isCloseMarketMs'] = isset($data['isCloseMarketMs']) ? $data['isCloseMarketMs'] : null;
        $this->container['cooperationType'] = isset($data['cooperationType']) ? $data['cooperationType'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['includeAssociationResult'] = isset($data['includeAssociationResult']) ? $data['includeAssociationResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 32)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) > 10)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['xaccountId'] === null) {
            $invalidProperties[] = "'xaccountId' can't be null";
        }
            if ((mb_strlen($this->container['xaccountId']) > 128)) {
                $invalidProperties[] = "invalid value for 'xaccountId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['xaccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xaccountId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['xaccountType'] === null) {
            $invalidProperties[] = "'xaccountType' can't be null";
        }
            if ((mb_strlen($this->container['xaccountType']) > 64)) {
                $invalidProperties[] = "invalid value for 'xaccountType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['xaccountType']) < 1)) {
                $invalidProperties[] = "invalid value for 'xaccountType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 32)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 8)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['isCloseMarketMs']) && (mb_strlen($this->container['isCloseMarketMs']) > 10)) {
                $invalidProperties[] = "invalid value for 'isCloseMarketMs', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['isCloseMarketMs']) && (mb_strlen($this->container['isCloseMarketMs']) < 0)) {
                $invalidProperties[] = "invalid value for 'isCloseMarketMs', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cooperationType']) && (mb_strlen($this->container['cooperationType']) > 1)) {
                $invalidProperties[] = "invalid value for 'cooperationType', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['cooperationType']) && (mb_strlen($this->container['cooperationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cooperationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets domainName
    *  客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
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
    * @param string|null $domainName 客户的华为云账号名。 如果为空，随机生成。 不能以“op_”或“shadow_”开头且不能全为数字。 校验长度（5到32位）和规则^\\(\\[a-zA-Z_-\\]\\(\\[a-zA-Z0-9_-\\]\\)\\*\\)$。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    *
    * @return string|null
    */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
    * Sets mobilePhone
    *
    * @param string|null $mobilePhone 手机号。 目前系统只支持中国的手机号。 示例：13XXXXXXXXX
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets verificationCode
    *  验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    *
    * @return string|null
    */
    public function getVerificationCode()
    {
        return $this->container['verificationCode'];
    }

    /**
    * Sets verificationCode
    *
    * @param string|null $verificationCode 验证码。 请调用“发送验证码”接口获取。 如果手机号不存在，则不需要输入验证码。
    *
    * @return $this
    */
    public function setVerificationCode($verificationCode)
    {
        $this->container['verificationCode'] = $verificationCode;
        return $this;
    }

    /**
    * Gets xaccountId
    *  伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    *
    * @return string
    */
    public function getXaccountId()
    {
        return $this->container['xaccountId'];
    }

    /**
    * Sets xaccountId
    *
    * @param string $xaccountId 伙伴销售平台的用户唯一标识，该标识的具体值由伙伴分配。
    *
    * @return $this
    */
    public function setXaccountId($xaccountId)
    {
        $this->container['xaccountId'] = $xaccountId;
        return $this;
    }

    /**
    * Gets xaccountType
    *  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    *
    * @return string
    */
    public function getXaccountType()
    {
        return $this->container['xaccountType'];
    }

    /**
    * Sets xaccountType
    *
    * @param string $xaccountType 华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    *
    * @return $this
    */
    public function setXaccountType($xaccountType)
    {
        $this->container['xaccountType'] = $xaccountType;
        return $this;
    }

    /**
    * Gets password
    *  密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 密码规则如下： 至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符；不能和账号名或倒序的账号名相同；不能包含手机号。 如果为空，用户没有密码，则不能直接在华为云登录，只能通过伙伴系统SSO方式跳转到华为云。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets isCloseMarketMs
    *  是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    *
    * @return string|null
    */
    public function getIsCloseMarketMs()
    {
        return $this->container['isCloseMarketMs'];
    }

    /**
    * Sets isCloseMarketMs
    *
    * @param string|null $isCloseMarketMs 是否关闭营销消息的发送： true：关闭false：不关闭（默认）
    *
    * @return $this
    */
    public function setIsCloseMarketMs($isCloseMarketMs)
    {
        $this->container['isCloseMarketMs'] = $isCloseMarketMs;
        return $this;
    }

    /**
    * Gets cooperationType
    *  合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    *
    * @return string|null
    */
    public function getCooperationType()
    {
        return $this->container['cooperationType'];
    }

    /**
    * Sets cooperationType
    *
    * @param string|null $cooperationType 合作类型。 1：顾问销售。 不传递或传递非1的值，默认会创建成代售模式的客户。
    *
    * @return $this
    */
    public function setCooperationType($cooperationType)
    {
        $this->container['cooperationType'] = $cooperationType;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 如果需要创建云经销商的子客户，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets includeAssociationResult
    *  是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @return bool|null
    */
    public function getIncludeAssociationResult()
    {
        return $this->container['includeAssociationResult'];
    }

    /**
    * Sets includeAssociationResult
    *
    * @param bool|null $includeAssociationResult 是否返回子客户的关联结果。 true：返回子客户和伙伴的关联结果false：不返回子客户和伙伴的关联结果 默认值为false。
    *
    * @return $this
    */
    public function setIncludeAssociationResult($includeAssociationResult)
    {
        $this->container['includeAssociationResult'] = $includeAssociationResult;
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

