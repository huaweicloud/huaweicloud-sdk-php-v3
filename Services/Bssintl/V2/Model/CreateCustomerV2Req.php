<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * domainName  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    * email  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    * verificationCode  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    * domainArea  |国家地区编码| |2位字母|
    * xaccountId  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
    * password  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
    * isCloseMarketMs  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    * indirectPartnerId  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
    * includeAssociationResult  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'email' => 'string',
            'verificationCode' => 'string',
            'domainArea' => 'string',
            'xaccountId' => 'string',
            'xaccountType' => 'string',
            'password' => 'string',
            'isCloseMarketMs' => 'string',
            'indirectPartnerId' => 'string',
            'includeAssociationResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    * email  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    * verificationCode  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    * domainArea  |国家地区编码| |2位字母|
    * xaccountId  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
    * password  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
    * isCloseMarketMs  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    * indirectPartnerId  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
    * includeAssociationResult  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'email' => null,
        'verificationCode' => null,
        'domainArea' => null,
        'xaccountId' => null,
        'xaccountType' => null,
        'password' => null,
        'isCloseMarketMs' => null,
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
    * domainName  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    * email  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    * verificationCode  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    * domainArea  |国家地区编码| |2位字母|
    * xaccountId  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
    * password  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
    * isCloseMarketMs  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    * indirectPartnerId  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
    * includeAssociationResult  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'email' => 'email',
            'verificationCode' => 'verification_code',
            'domainArea' => 'domain_area',
            'xaccountId' => 'xaccount_id',
            'xaccountType' => 'xaccount_type',
            'password' => 'password',
            'isCloseMarketMs' => 'is_close_market_ms',
            'indirectPartnerId' => 'indirect_partner_id',
            'includeAssociationResult' => 'include_association_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    * email  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    * verificationCode  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    * domainArea  |国家地区编码| |2位字母|
    * xaccountId  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
    * password  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
    * isCloseMarketMs  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    * indirectPartnerId  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
    * includeAssociationResult  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'email' => 'setEmail',
            'verificationCode' => 'setVerificationCode',
            'domainArea' => 'setDomainArea',
            'xaccountId' => 'setXaccountId',
            'xaccountType' => 'setXaccountType',
            'password' => 'setPassword',
            'isCloseMarketMs' => 'setIsCloseMarketMs',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'includeAssociationResult' => 'setIncludeAssociationResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    * email  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    * verificationCode  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    * domainArea  |国家地区编码| |2位字母|
    * xaccountId  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
    * password  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
    * isCloseMarketMs  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    * indirectPartnerId  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
    * includeAssociationResult  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'email' => 'getEmail',
            'verificationCode' => 'getVerificationCode',
            'domainArea' => 'getDomainArea',
            'xaccountId' => 'getXaccountId',
            'xaccountType' => 'getXaccountType',
            'password' => 'getPassword',
            'isCloseMarketMs' => 'getIsCloseMarketMs',
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['verificationCode'] = isset($data['verificationCode']) ? $data['verificationCode'] : null;
        $this->container['domainArea'] = isset($data['domainArea']) ? $data['domainArea'] : null;
        $this->container['xaccountId'] = isset($data['xaccountId']) ? $data['xaccountId'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['isCloseMarketMs'] = isset($data['isCloseMarketMs']) ? $data['isCloseMarketMs'] : 'false';
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
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) > 10)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainArea']) && (mb_strlen($this->container['domainArea']) > 2)) {
                $invalidProperties[] = "invalid value for 'domainArea', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['domainArea']) && (mb_strlen($this->container['domainArea']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainArea', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 6)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['isCloseMarketMs']) && (mb_strlen($this->container['isCloseMarketMs']) > 10)) {
                $invalidProperties[] = "invalid value for 'isCloseMarketMs', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['isCloseMarketMs']) && (mb_strlen($this->container['isCloseMarketMs']) < 0)) {
                $invalidProperties[] = "invalid value for 'isCloseMarketMs', the character length must be bigger than or equal to 0.";
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
    *  |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
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
    * @param string|null $domainName |参数名称：客户的华为云账号名| |参数的约束及描述：该参数非必填，不能以“op_”或“shadow_”开头且不能全为数字。且只允许最大长度64的字符串,如果为空，随机生成。校验规则^[a-zA-Z0-9\\u00c0-\\u00ff-._ ]{0,64}$|
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets email
    *  |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email |参数名称：邮箱| |参数的约束及描述：该参数非必填，且只允许最大长度64的字符串,必须含有@,如果接入的是香港站的网关，则该字段必填，否则该字段忽略|
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets verificationCode
    *  |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
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
    * @param string|null $verificationCode |参数名称：验证码| |参数的约束及描述：该参数必填，如果输入的是手机，就是手机验证码，如果输入的是邮箱，就是邮箱验证码|
    *
    * @return $this
    */
    public function setVerificationCode($verificationCode)
    {
        $this->container['verificationCode'] = $verificationCode;
        return $this;
    }

    /**
    * Gets domainArea
    *  |国家地区编码| |2位字母|
    *
    * @return string|null
    */
    public function getDomainArea()
    {
        return $this->container['domainArea'];
    }

    /**
    * Sets domainArea
    *
    * @param string|null $domainArea |国家地区编码| |2位字母|
    *
    * @return $this
    */
    public function setDomainArea($domainArea)
    {
        $this->container['domainArea'] = $domainArea;
        return $this;
    }

    /**
    * Gets xaccountId
    *  |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
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
    * @param string $xaccountId |参数名称：第3方系统的用户唯一标识| |参数的约束及描述：该参数必填，且只允许最大长度128的字符串|
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
    *  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
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
    * @param string $xaccountType |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该参数必填，且只允许最大长度30的字符串,该标识的具体值由华为分配|
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
    *  |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
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
    * @param string|null $password |参数名称：密码| |参数的约束及描述：该参数选填，长度6~32位字符，至少包含以下四种字符中的两种： 大写字母、小写字母、数字、特殊字符，不能和账号名或倒序的账号名相同，不能包含手机号，不能包含邮箱|
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
    *  |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
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
    * @param string|null $isCloseMarketMs |是否关闭营销消息| |参数的约束及描述：该参数选填。false：不关闭，True：关闭，默认不关闭|
    *
    * @return $this
    */
    public function setIsCloseMarketMs($isCloseMarketMs)
    {
        $this->container['isCloseMarketMs'] = $isCloseMarketMs;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
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
    * @param string|null $indirectPartnerId |参数名称：二级渠道ID| |参数的约束及描述：该参数非必填，二级渠道ID，最大长度64|
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
    *  |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
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
    * @param bool|null $includeAssociationResult |参数名称：是否返回关联结果| |参数的约束及描述：该参数非必填|
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

