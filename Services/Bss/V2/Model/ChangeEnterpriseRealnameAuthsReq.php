<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeEnterpriseRealnameAuthsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeEnterpriseRealnameAuthsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * identifyType  认证方案： 1：单位证件扫描
    * certificateType  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    * verifiedFileUrl  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * corpName  单位名称。 不能全是数字、特殊字符、空格。
    * verifiedNumber  单位证件号码。
    * regCountry  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    * regAddress  实名认证企业注册地址。
    * changeType  变更类型： 1：个人变企业
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * enterprisePerson  enterprisePerson
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'identifyType' => 'int',
            'certificateType' => 'int',
            'verifiedFileUrl' => 'string[]',
            'corpName' => 'string',
            'verifiedNumber' => 'string',
            'regCountry' => 'string',
            'regAddress' => 'string',
            'changeType' => 'int',
            'xaccountType' => 'string',
            'enterprisePerson' => '\HuaweiCloud\SDK\Bss\V2\Model\EnterprisePersonNew'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * identifyType  认证方案： 1：单位证件扫描
    * certificateType  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    * verifiedFileUrl  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * corpName  单位名称。 不能全是数字、特殊字符、空格。
    * verifiedNumber  单位证件号码。
    * regCountry  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    * regAddress  实名认证企业注册地址。
    * changeType  变更类型： 1：个人变企业
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * enterprisePerson  enterprisePerson
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'identifyType' => 'int32',
        'certificateType' => 'int32',
        'verifiedFileUrl' => null,
        'corpName' => null,
        'verifiedNumber' => null,
        'regCountry' => null,
        'regAddress' => null,
        'changeType' => 'int32',
        'xaccountType' => null,
        'enterprisePerson' => null
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
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * identifyType  认证方案： 1：单位证件扫描
    * certificateType  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    * verifiedFileUrl  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * corpName  单位名称。 不能全是数字、特殊字符、空格。
    * verifiedNumber  单位证件号码。
    * regCountry  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    * regAddress  实名认证企业注册地址。
    * changeType  变更类型： 1：个人变企业
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * enterprisePerson  enterprisePerson
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'identifyType' => 'identify_type',
            'certificateType' => 'certificate_type',
            'verifiedFileUrl' => 'verified_file_url',
            'corpName' => 'corp_name',
            'verifiedNumber' => 'verified_number',
            'regCountry' => 'reg_country',
            'regAddress' => 'reg_address',
            'changeType' => 'change_type',
            'xaccountType' => 'xaccount_type',
            'enterprisePerson' => 'enterprise_person'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * identifyType  认证方案： 1：单位证件扫描
    * certificateType  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    * verifiedFileUrl  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * corpName  单位名称。 不能全是数字、特殊字符、空格。
    * verifiedNumber  单位证件号码。
    * regCountry  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    * regAddress  实名认证企业注册地址。
    * changeType  变更类型： 1：个人变企业
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * enterprisePerson  enterprisePerson
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'identifyType' => 'setIdentifyType',
            'certificateType' => 'setCertificateType',
            'verifiedFileUrl' => 'setVerifiedFileUrl',
            'corpName' => 'setCorpName',
            'verifiedNumber' => 'setVerifiedNumber',
            'regCountry' => 'setRegCountry',
            'regAddress' => 'setRegAddress',
            'changeType' => 'setChangeType',
            'xaccountType' => 'setXaccountType',
            'enterprisePerson' => 'setEnterprisePerson'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * identifyType  认证方案： 1：单位证件扫描
    * certificateType  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    * verifiedFileUrl  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * corpName  单位名称。 不能全是数字、特殊字符、空格。
    * verifiedNumber  单位证件号码。
    * regCountry  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    * regAddress  实名认证企业注册地址。
    * changeType  变更类型： 1：个人变企业
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * enterprisePerson  enterprisePerson
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'identifyType' => 'getIdentifyType',
            'certificateType' => 'getCertificateType',
            'verifiedFileUrl' => 'getVerifiedFileUrl',
            'corpName' => 'getCorpName',
            'verifiedNumber' => 'getVerifiedNumber',
            'regCountry' => 'getRegCountry',
            'regAddress' => 'getRegAddress',
            'changeType' => 'getChangeType',
            'xaccountType' => 'getXaccountType',
            'enterprisePerson' => 'getEnterprisePerson'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['identifyType'] = isset($data['identifyType']) ? $data['identifyType'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['verifiedFileUrl'] = isset($data['verifiedFileUrl']) ? $data['verifiedFileUrl'] : null;
        $this->container['corpName'] = isset($data['corpName']) ? $data['corpName'] : null;
        $this->container['verifiedNumber'] = isset($data['verifiedNumber']) ? $data['verifiedNumber'] : null;
        $this->container['regCountry'] = isset($data['regCountry']) ? $data['regCountry'] : null;
        $this->container['regAddress'] = isset($data['regAddress']) ? $data['regAddress'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['enterprisePerson'] = isset($data['enterprisePerson']) ? $data['enterprisePerson'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if ((mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['customerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['identifyType'] === null) {
            $invalidProperties[] = "'identifyType' can't be null";
        }
            if (($this->container['identifyType'] > 32)) {
                $invalidProperties[] = "invalid value for 'identifyType', must be smaller than or equal to 32.";
            }
            if (($this->container['identifyType'] < 0)) {
                $invalidProperties[] = "invalid value for 'identifyType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certificateType']) && ($this->container['certificateType'] > 99)) {
                $invalidProperties[] = "invalid value for 'certificateType', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['certificateType']) && ($this->container['certificateType'] < 0)) {
                $invalidProperties[] = "invalid value for 'certificateType', must be bigger than or equal to 0.";
            }
        if ($this->container['verifiedFileUrl'] === null) {
            $invalidProperties[] = "'verifiedFileUrl' can't be null";
        }
        if ($this->container['corpName'] === null) {
            $invalidProperties[] = "'corpName' can't be null";
        }
            if ((mb_strlen($this->container['corpName']) > 255)) {
                $invalidProperties[] = "invalid value for 'corpName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['corpName']) < 1)) {
                $invalidProperties[] = "invalid value for 'corpName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['verifiedNumber'] === null) {
            $invalidProperties[] = "'verifiedNumber' can't be null";
        }
            if ((mb_strlen($this->container['verifiedNumber']) > 32)) {
                $invalidProperties[] = "invalid value for 'verifiedNumber', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['verifiedNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifiedNumber', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regCountry']) && (mb_strlen($this->container['regCountry']) > 10)) {
                $invalidProperties[] = "invalid value for 'regCountry', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['regCountry']) && (mb_strlen($this->container['regCountry']) < 0)) {
                $invalidProperties[] = "invalid value for 'regCountry', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regAddress']) && (mb_strlen($this->container['regAddress']) > 256)) {
                $invalidProperties[] = "invalid value for 'regAddress', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['regAddress']) && (mb_strlen($this->container['regAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'regAddress', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['changeType'] === null) {
            $invalidProperties[] = "'changeType' can't be null";
        }
            if (($this->container['changeType'] > 1)) {
                $invalidProperties[] = "invalid value for 'changeType', must be smaller than or equal to 1.";
            }
            if (($this->container['changeType'] < 1)) {
                $invalidProperties[] = "invalid value for 'changeType', must be bigger than or equal to 1.";
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
    * Gets customerId
    *  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets identifyType
    *  认证方案： 1：单位证件扫描
    *
    * @return int
    */
    public function getIdentifyType()
    {
        return $this->container['identifyType'];
    }

    /**
    * Sets identifyType
    *
    * @param int $identifyType 认证方案： 1：单位证件扫描
    *
    * @return $this
    */
    public function setIdentifyType($identifyType)
    {
        $this->container['identifyType'] = $identifyType;
        return $this;
    }

    /**
    * Gets certificateType
    *  单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    *
    * @return int|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param int|null $certificateType 单位证件类型： 0：企业营业执照1：事业单位法人证书2：社会团体法人登记证书3：行政执法主体资格证4：组织机构代码证99：其他
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets verifiedFileUrl
    *  单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    *
    * @return string[]
    */
    public function getVerifiedFileUrl()
    {
        return $this->container['verifiedFileUrl'];
    }

    /**
    * Sets verifiedFileUrl
    *
    * @param string[] $verifiedFileUrl 单位证件认证时证件附件的文件URL。 附件地址必须按照顺序填写，先填写单位证件的附件，如果存在单位人员信息，再填写单位人员的身份证附件。 单位证件顺序为： 第1张单位证件照附件， 单位人员的证件顺序为： 第1张个人身份证的人像面 第2张个人身份证的国徽面 以营业执照举例，假设存在法人的情况下，第1张上传的是营业执照扫描件abc.023，第2张是法人的身份证人像面照片def004，第3张是法人的国徽面照片gh007，那么上传顺序需要是： abc023 def004 gh007 的顺序填写URL（文件名称区分大小写） 证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。 这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下： 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是： https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    *
    * @return $this
    */
    public function setVerifiedFileUrl($verifiedFileUrl)
    {
        $this->container['verifiedFileUrl'] = $verifiedFileUrl;
        return $this;
    }

    /**
    * Gets corpName
    *  单位名称。 不能全是数字、特殊字符、空格。
    *
    * @return string
    */
    public function getCorpName()
    {
        return $this->container['corpName'];
    }

    /**
    * Sets corpName
    *
    * @param string $corpName 单位名称。 不能全是数字、特殊字符、空格。
    *
    * @return $this
    */
    public function setCorpName($corpName)
    {
        $this->container['corpName'] = $corpName;
        return $this;
    }

    /**
    * Gets verifiedNumber
    *  单位证件号码。
    *
    * @return string
    */
    public function getVerifiedNumber()
    {
        return $this->container['verifiedNumber'];
    }

    /**
    * Sets verifiedNumber
    *
    * @param string $verifiedNumber 单位证件号码。
    *
    * @return $this
    */
    public function setVerifiedNumber($verifiedNumber)
    {
        $this->container['verifiedNumber'] = $verifiedNumber;
        return $this;
    }

    /**
    * Gets regCountry
    *  实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    *
    * @return string|null
    */
    public function getRegCountry()
    {
        return $this->container['regCountry'];
    }

    /**
    * Sets regCountry
    *
    * @param string|null $regCountry 实名认证填写的注册国家。国家的两位字母简码。 例如：注册国家为“中国”请填写“CN”。
    *
    * @return $this
    */
    public function setRegCountry($regCountry)
    {
        $this->container['regCountry'] = $regCountry;
        return $this;
    }

    /**
    * Gets regAddress
    *  实名认证企业注册地址。
    *
    * @return string|null
    */
    public function getRegAddress()
    {
        return $this->container['regAddress'];
    }

    /**
    * Sets regAddress
    *
    * @param string|null $regAddress 实名认证企业注册地址。
    *
    * @return $this
    */
    public function setRegAddress($regAddress)
    {
        $this->container['regAddress'] = $regAddress;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型： 1：个人变企业
    *
    * @return int
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param int $changeType 变更类型： 1：个人变企业
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
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
    * Gets enterprisePerson
    *  enterprisePerson
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\EnterprisePersonNew|null
    */
    public function getEnterprisePerson()
    {
        return $this->container['enterprisePerson'];
    }

    /**
    * Sets enterprisePerson
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\EnterprisePersonNew|null $enterprisePerson enterprisePerson
    *
    * @return $this
    */
    public function setEnterprisePerson($enterprisePerson)
    {
        $this->container['enterprisePerson'] = $enterprisePerson;
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

