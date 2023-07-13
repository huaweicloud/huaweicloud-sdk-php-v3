<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyIndividualRealnameAuthsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyIndividualRealnameAuthsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * identifyType  认证方案： 0：个人证件认证 4：个人银行卡认证
    * verifiedType  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    * verifiedFileUrl  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * name  姓名。
    * verifiedNumber  证件号码。
    * changeType  变更类型： -1：首次实名认证
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * bankCardInfo  bankCardInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'identifyType' => 'int',
            'verifiedType' => 'int',
            'verifiedFileUrl' => 'string[]',
            'name' => 'string',
            'verifiedNumber' => 'string',
            'changeType' => 'int',
            'xaccountType' => 'string',
            'bankCardInfo' => '\HuaweiCloud\SDK\Bss\V2\Model\BankCardInfoV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * identifyType  认证方案： 0：个人证件认证 4：个人银行卡认证
    * verifiedType  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    * verifiedFileUrl  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * name  姓名。
    * verifiedNumber  证件号码。
    * changeType  变更类型： -1：首次实名认证
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * bankCardInfo  bankCardInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'identifyType' => 'int32',
        'verifiedType' => 'int32',
        'verifiedFileUrl' => null,
        'name' => null,
        'verifiedNumber' => null,
        'changeType' => 'int32',
        'xaccountType' => null,
        'bankCardInfo' => null
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
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * identifyType  认证方案： 0：个人证件认证 4：个人银行卡认证
    * verifiedType  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    * verifiedFileUrl  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * name  姓名。
    * verifiedNumber  证件号码。
    * changeType  变更类型： -1：首次实名认证
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * bankCardInfo  bankCardInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'identifyType' => 'identify_type',
            'verifiedType' => 'verified_type',
            'verifiedFileUrl' => 'verified_file_url',
            'name' => 'name',
            'verifiedNumber' => 'verified_number',
            'changeType' => 'change_type',
            'xaccountType' => 'xaccount_type',
            'bankCardInfo' => 'bank_card_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * identifyType  认证方案： 0：个人证件认证 4：个人银行卡认证
    * verifiedType  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    * verifiedFileUrl  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * name  姓名。
    * verifiedNumber  证件号码。
    * changeType  变更类型： -1：首次实名认证
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * bankCardInfo  bankCardInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'identifyType' => 'setIdentifyType',
            'verifiedType' => 'setVerifiedType',
            'verifiedFileUrl' => 'setVerifiedFileUrl',
            'name' => 'setName',
            'verifiedNumber' => 'setVerifiedNumber',
            'changeType' => 'setChangeType',
            'xaccountType' => 'setXaccountType',
            'bankCardInfo' => 'setBankCardInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * identifyType  认证方案： 0：个人证件认证 4：个人银行卡认证
    * verifiedType  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    * verifiedFileUrl  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    * name  姓名。
    * verifiedNumber  证件号码。
    * changeType  变更类型： -1：首次实名认证
    * xaccountType  华为分给合作伙伴的平台标识。 该标识的具体值由华为分配。获取方法请参见如何获取xaccountType的取值。
    * bankCardInfo  bankCardInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'identifyType' => 'getIdentifyType',
            'verifiedType' => 'getVerifiedType',
            'verifiedFileUrl' => 'getVerifiedFileUrl',
            'name' => 'getName',
            'verifiedNumber' => 'getVerifiedNumber',
            'changeType' => 'getChangeType',
            'xaccountType' => 'getXaccountType',
            'bankCardInfo' => 'getBankCardInfo'
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
        $this->container['verifiedType'] = isset($data['verifiedType']) ? $data['verifiedType'] : null;
        $this->container['verifiedFileUrl'] = isset($data['verifiedFileUrl']) ? $data['verifiedFileUrl'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['verifiedNumber'] = isset($data['verifiedNumber']) ? $data['verifiedNumber'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['bankCardInfo'] = isset($data['bankCardInfo']) ? $data['bankCardInfo'] : null;
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
            if (!is_null($this->container['verifiedType']) && ($this->container['verifiedType'] > 32)) {
                $invalidProperties[] = "invalid value for 'verifiedType', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['verifiedType']) && ($this->container['verifiedType'] < 0)) {
                $invalidProperties[] = "invalid value for 'verifiedType', must be bigger than or equal to 0.";
            }
        if ($this->container['verifiedFileUrl'] === null) {
            $invalidProperties[] = "'verifiedFileUrl' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['changeType']) && ($this->container['changeType'] > -1)) {
                $invalidProperties[] = "invalid value for 'changeType', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['changeType']) && ($this->container['changeType'] < -1)) {
                $invalidProperties[] = "invalid value for 'changeType', must be bigger than or equal to -1.";
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
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
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
    * @param string $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
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
    *  认证方案： 0：个人证件认证 4：个人银行卡认证
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
    * @param int $identifyType 认证方案： 0：个人证件认证 4：个人银行卡认证
    *
    * @return $this
    */
    public function setIdentifyType($identifyType)
    {
        $this->container['identifyType'] = $identifyType;
        return $this;
    }

    /**
    * Gets verifiedType
    *  证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    *
    * @return int|null
    */
    public function getVerifiedType()
    {
        return $this->container['verifiedType'];
    }

    /**
    * Sets verifiedType
    *
    * @param int|null $verifiedType 证件类型： 0：身份证，上传的附件为3张，第1张是身份证人像面，第2张是身份证国徽面，第3张是个人手持身份证人像面； 3：护照，上传的附件为3张，第1张是护照个人资料页，第2张是，护照入境盖章页，第3张是手持护照个人资料页； 5：港澳通行证，上传的附件为3张，第1张是港澳居民来往内地通行证正面（人像面），第2张是港澳居民来往内地通行证反面，第3张是手持港澳居民来往内地通行证人像面； 6：台湾通行证，上传的附件为3张，第1张是台湾居民来往大陆通行证正面（人像面），第2张是台湾居民来往大陆通行证反面，第3张是手持台湾居民来往大陆通行证人像面； 9：港澳居民居住证，上传的附件为3张，第1张是港澳居民居住证人像面，第2张是，港澳居民居住证国徽面，第3张是手持港澳居民居住证人像面照片； 10：台湾居民居住证，上传的附件为3张，第1张是台湾居民居住证人像面，第2张是台湾居民居住证国徽面，第3张是手持台湾居民居住证人像面照片。 当identify_type=0的时候，该字段需要填写，否则忽略该字段的取值。
    *
    * @return $this
    */
    public function setVerifiedType($verifiedType)
    {
        $this->container['verifiedType'] = $verifiedType;
        return $this;
    }

    /**
    * Gets verifiedFileUrl
    *  个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
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
    * @param string[] $verifiedFileUrl 个人证件认证时证件附件的文件URL，该URL地址必须按照顺序填写。以身份证举例，譬如身份证人像面文件名称是abc023，国徽面是def004，个人手持身份证人像面是gh007，那么这个地方需要按照 abc023 def004 gh007 的顺序填写URL（文件名称区分大小写）。 个人银行卡认证时直接上传一张个人扫脸的图片附件即可。证件附件目前仅仅支持jpg、jpeg、bmp、png、gif、pdf格式，单个文件最大不超过10M。这个URL是相对URL，不需要包含桶名和download目录，只要包含download目录下的子目录和对应文件名称即可。举例如下：如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/abc023.jpg，该字段填写abc023.jpg； 如果上传的证件附件在桶中的位置是：https://bucketname.obs.Endpoint.myhuaweicloud.com/download/test/abc023.jpg，该字段填写test/abc023.jpg。
    *
    * @return $this
    */
    public function setVerifiedFileUrl($verifiedFileUrl)
    {
        $this->container['verifiedFileUrl'] = $verifiedFileUrl;
        return $this;
    }

    /**
    * Gets name
    *  姓名。
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
    * @param string $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets verifiedNumber
    *  证件号码。
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
    * @param string $verifiedNumber 证件号码。
    *
    * @return $this
    */
    public function setVerifiedNumber($verifiedNumber)
    {
        $this->container['verifiedNumber'] = $verifiedNumber;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型： -1：首次实名认证
    *
    * @return int|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param int|null $changeType 变更类型： -1：首次实名认证
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
    * Gets bankCardInfo
    *  bankCardInfo
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\BankCardInfoV2|null
    */
    public function getBankCardInfo()
    {
        return $this->container['bankCardInfo'];
    }

    /**
    * Sets bankCardInfo
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\BankCardInfoV2|null $bankCardInfo bankCardInfo
    *
    * @return $this
    */
    public function setBankCardInfo($bankCardInfo)
    {
        $this->container['bankCardInfo'] = $bankCardInfo;
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

