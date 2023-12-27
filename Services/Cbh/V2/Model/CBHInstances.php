<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CBHInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CBHInstances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specification  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    * password  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * region  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * availabilityZone  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * slaveAvailabilityZone  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * chargingMode  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    * periodType  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    * periodNum  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    * network  network
    * ipv6Enable  云堡垒机实例是否支持IPV6。  默认值为“false”。
    * enterpriseProjectId  企业项目ID。  默认值为“0”。
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    * tags  标签信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specification' => 'string',
            'instanceName' => 'string',
            'password' => 'string',
            'region' => 'string',
            'availabilityZone' => 'string',
            'slaveAvailabilityZone' => 'string',
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int',
            'isAutoPay' => 'int',
            'network' => '\HuaweiCloud\SDK\Cbh\V2\Model\NetworkInfoCreate',
            'ipv6Enable' => 'bool',
            'enterpriseProjectId' => 'string',
            'attachDiskSize' => 'int',
            'tags' => '\HuaweiCloud\SDK\Cbh\V2\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specification  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    * password  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * region  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * availabilityZone  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * slaveAvailabilityZone  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * chargingMode  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    * periodType  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    * periodNum  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    * network  network
    * ipv6Enable  云堡垒机实例是否支持IPV6。  默认值为“false”。
    * enterpriseProjectId  企业项目ID。  默认值为“0”。
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    * tags  标签信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specification' => null,
        'instanceName' => null,
        'password' => null,
        'region' => null,
        'availabilityZone' => null,
        'slaveAvailabilityZone' => null,
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'network' => null,
        'ipv6Enable' => null,
        'enterpriseProjectId' => null,
        'attachDiskSize' => null,
        'tags' => null
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
    * specification  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    * password  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * region  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * availabilityZone  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * slaveAvailabilityZone  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * chargingMode  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    * periodType  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    * periodNum  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    * network  network
    * ipv6Enable  云堡垒机实例是否支持IPV6。  默认值为“false”。
    * enterpriseProjectId  企业项目ID。  默认值为“0”。
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    * tags  标签信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specification' => 'specification',
            'instanceName' => 'instance_name',
            'password' => 'password',
            'region' => 'region',
            'availabilityZone' => 'availability_zone',
            'slaveAvailabilityZone' => 'slave_availability_zone',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay',
            'network' => 'network',
            'ipv6Enable' => 'ipv6_enable',
            'enterpriseProjectId' => 'enterprise_project_id',
            'attachDiskSize' => 'attach_disk_size',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specification  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    * password  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * region  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * availabilityZone  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * slaveAvailabilityZone  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * chargingMode  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    * periodType  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    * periodNum  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    * network  network
    * ipv6Enable  云堡垒机实例是否支持IPV6。  默认值为“false”。
    * enterpriseProjectId  企业项目ID。  默认值为“0”。
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    * tags  标签信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'specification' => 'setSpecification',
            'instanceName' => 'setInstanceName',
            'password' => 'setPassword',
            'region' => 'setRegion',
            'availabilityZone' => 'setAvailabilityZone',
            'slaveAvailabilityZone' => 'setSlaveAvailabilityZone',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'network' => 'setNetwork',
            'ipv6Enable' => 'setIpv6Enable',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'attachDiskSize' => 'setAttachDiskSize',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specification  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    * password  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * region  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * availabilityZone  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * slaveAvailabilityZone  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * chargingMode  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    * periodType  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    * periodNum  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    * isAutoRenew  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    * isAutoPay  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    * network  network
    * ipv6Enable  云堡垒机实例是否支持IPV6。  默认值为“false”。
    * enterpriseProjectId  企业项目ID。  默认值为“0”。
    * attachDiskSize  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    * tags  标签信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'specification' => 'getSpecification',
            'instanceName' => 'getInstanceName',
            'password' => 'getPassword',
            'region' => 'getRegion',
            'availabilityZone' => 'getAvailabilityZone',
            'slaveAvailabilityZone' => 'getSlaveAvailabilityZone',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'network' => 'getNetwork',
            'ipv6Enable' => 'getIpv6Enable',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'attachDiskSize' => 'getAttachDiskSize',
            'tags' => 'getTags'
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
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['slaveAvailabilityZone'] = isset($data['slaveAvailabilityZone']) ? $data['slaveAvailabilityZone'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['attachDiskSize'] = isset($data['attachDiskSize']) ? $data['attachDiskSize'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
            if ((mb_strlen($this->container['specification']) > 64)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 64)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['password']) < 0)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveAvailabilityZone']) && (mb_strlen($this->container['slaveAvailabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'slaveAvailabilityZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['slaveAvailabilityZone']) && (mb_strlen($this->container['slaveAvailabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveAvailabilityZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if (($this->container['chargingMode'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['chargingMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodType']) && ($this->container['periodType'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['periodType']) && ($this->container['periodType'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 64)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] > 2)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be bigger than or equal to 0.";
            }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attachDiskSize']) && ($this->container['attachDiskSize'] > 300)) {
                $invalidProperties[] = "invalid value for 'attachDiskSize', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['attachDiskSize']) && ($this->container['attachDiskSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'attachDiskSize', must be bigger than or equal to 0.";
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
    * Gets specification
    *  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50  已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets instanceName
    *  云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 云堡垒机实例名称，取值范围：  只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。  例如：CBH-6b8e
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets password
    *  堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 堡垒机实例前端登录密码。  密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets region
    *  创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 创建云堡垒机实例所在局点ID。   可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 创建云堡垒机所在的可用分区，需要指定可用分区名称。(主备模式是作为主机可用区)  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets slaveAvailabilityZone
    *  创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return string|null
    */
    public function getSlaveAvailabilityZone()
    {
        return $this->container['slaveAvailabilityZone'];
    }

    /**
    * Sets slaveAvailabilityZone
    *
    * @param string|null $slaveAvailabilityZone 创建云堡垒机备机所在的可用分区，需要指定可用分区名称。(只创建单机时不传此字段)。  可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return $this
    */
    public function setSlaveAvailabilityZone($slaveAvailabilityZone)
    {
        $this->container['slaveAvailabilityZone'] = $slaveAvailabilityZone;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式。 - 0 包周期计费。 - 1 按需计费，部分局点支持。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型。（包周期模式必传） - 2：月 - 3：年
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 订购周期类型。（包周期模式必传） - 2：月 - 3：年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数。（包周期模式必传） - period_type=2（周期类型为月），取值范围[1，9] - periodType=3（周期类型为年），取值范围[1，10]
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 是否自动续订。 - 1，自动续订 - 0，不自动续订  默认值为“0”
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay 是否自动支付，下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付。 - 1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券) - 0：否（需要客户手动去支付，客户可以选择折扣和优惠券。）  默认值为“0”
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\NetworkInfoCreate
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\NetworkInfoCreate $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  云堡垒机实例是否支持IPV6。  默认值为“false”。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 云堡垒机实例是否支持IPV6。  默认值为“false”。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  默认值为“0”。
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
    * @param string|null $enterpriseProjectId 企业项目ID。  默认值为“0”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets attachDiskSize
    *  附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    *
    * @return int|null
    */
    public function getAttachDiskSize()
    {
        return $this->container['attachDiskSize'];
    }

    /**
    * Sets attachDiskSize
    *
    * @param int|null $attachDiskSize 附加磁盘大小。单位TB  > 说明： 附加磁盘和规格自带磁盘大小合起来不能超过300TB。
    *
    * @return $this
    */
    public function setAttachDiskSize($attachDiskSize)
    {
        $this->container['attachDiskSize'] = $attachDiskSize;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息。
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\ResourceTag[]|null $tags 标签信息。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

