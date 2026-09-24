<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrePaidBillingCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrePaidBillingCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    * consistentLevel  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    * objectType  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    * protectType  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    * size  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    * chargingMode  计费模式，仅支持填写pre_paid：代表包年/包月模式
    * periodType  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    * periodNum  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    * isAutoRenew  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    * isAutoPay  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    * consoleUrl  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    * isMultiAz  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    * isDoubleAz  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    * promotionInfo  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * purchaseMode  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * orderId  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'consistentLevel' => 'string',
            'objectType' => 'string',
            'protectType' => 'string',
            'size' => 'int',
            'chargingMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool',
            'consoleUrl' => 'string',
            'isMultiAz' => 'bool',
            'isDoubleAz' => 'bool',
            'promotionInfo' => 'string',
            'purchaseMode' => 'string',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    * consistentLevel  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    * objectType  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    * protectType  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    * size  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    * chargingMode  计费模式，仅支持填写pre_paid：代表包年/包月模式
    * periodType  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    * periodNum  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    * isAutoRenew  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    * isAutoPay  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    * consoleUrl  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    * isMultiAz  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    * isDoubleAz  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    * promotionInfo  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * purchaseMode  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * orderId  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'consistentLevel' => null,
        'objectType' => null,
        'protectType' => null,
        'size' => 'int32',
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'consoleUrl' => null,
        'isMultiAz' => null,
        'isDoubleAz' => null,
        'promotionInfo' => null,
        'purchaseMode' => null,
        'orderId' => null
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
    * cloudType  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    * consistentLevel  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    * objectType  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    * protectType  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    * size  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    * chargingMode  计费模式，仅支持填写pre_paid：代表包年/包月模式
    * periodType  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    * periodNum  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    * isAutoRenew  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    * isAutoPay  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    * consoleUrl  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    * isMultiAz  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    * isDoubleAz  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    * promotionInfo  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * purchaseMode  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * orderId  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'consistentLevel' => 'consistent_level',
            'objectType' => 'object_type',
            'protectType' => 'protect_type',
            'size' => 'size',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay',
            'consoleUrl' => 'console_url',
            'isMultiAz' => 'is_multi_az',
            'isDoubleAz' => 'is_double_az',
            'promotionInfo' => 'promotion_info',
            'purchaseMode' => 'purchase_mode',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    * consistentLevel  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    * objectType  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    * protectType  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    * size  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    * chargingMode  计费模式，仅支持填写pre_paid：代表包年/包月模式
    * periodType  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    * periodNum  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    * isAutoRenew  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    * isAutoPay  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    * consoleUrl  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    * isMultiAz  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    * isDoubleAz  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    * promotionInfo  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * purchaseMode  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * orderId  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'consistentLevel' => 'setConsistentLevel',
            'objectType' => 'setObjectType',
            'protectType' => 'setProtectType',
            'size' => 'setSize',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'consoleUrl' => 'setConsoleUrl',
            'isMultiAz' => 'setIsMultiAz',
            'isDoubleAz' => 'setIsDoubleAz',
            'promotionInfo' => 'setPromotionInfo',
            'purchaseMode' => 'setPurchaseMode',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    * consistentLevel  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    * objectType  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    * protectType  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    * size  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    * chargingMode  计费模式，仅支持填写pre_paid：代表包年/包月模式
    * periodType  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    * periodNum  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    * isAutoRenew  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    * isAutoPay  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    * consoleUrl  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    * isMultiAz  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    * isDoubleAz  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    * promotionInfo  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * purchaseMode  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    * orderId  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'consistentLevel' => 'getConsistentLevel',
            'objectType' => 'getObjectType',
            'protectType' => 'getProtectType',
            'size' => 'getSize',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'consoleUrl' => 'getConsoleUrl',
            'isMultiAz' => 'getIsMultiAz',
            'isDoubleAz' => 'getIsDoubleAz',
            'promotionInfo' => 'getPromotionInfo',
            'purchaseMode' => 'getPurchaseMode',
            'orderId' => 'getOrderId'
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
    const PERIOD_TYPE_YEAR = 'year';
    const PERIOD_TYPE_MONTH = 'month';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_YEAR,
            self::PERIOD_TYPE_MONTH,
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['consistentLevel'] = isset($data['consistentLevel']) ? $data['consistentLevel'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['consoleUrl'] = isset($data['consoleUrl']) ? $data['consoleUrl'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : null;
        $this->container['isDoubleAz'] = isset($data['isDoubleAz']) ? $data['isDoubleAz'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['purchaseMode'] = isset($data['purchaseMode']) ? $data['purchaseMode'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consistentLevel'] === null) {
            $invalidProperties[] = "'consistentLevel' can't be null";
        }
        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
        if ($this->container['protectType'] === null) {
            $invalidProperties[] = "'protectType' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 10485760)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 10485760.";
            }
            if (($this->container['size'] < 10)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 10.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['consoleUrl']) && (mb_strlen($this->container['consoleUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'consoleUrl', the character length must be bigger than or equal to 1.";
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
    * Gets cloudType
    *  云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 云类型，默认为public，支持类型如下。 [public：公有云; hybrid: 混合云](tag:hws,hws_hk,ctc) [public：公有云](tag:dt,ocb,tlf,sbc,g42,tm,hk_g42)
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets consistentLevel
    *  [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    *
    * @return string
    */
    public function getConsistentLevel()
    {
        return $this->container['consistentLevel'];
    }

    /**
    * Sets consistentLevel
    *
    * @param string $consistentLevel [功能描述：存储库规格。取值范围：app_consistent: 应用一致性，crash_consistent: 崩溃一致性。默认取值不涉及。](tag:hws,hws_hk,fcs_vm,ctc,tm,g42,hk_g42) [功能描述：存储库规格。取值范围：crash_consistent: 崩溃一致性。默认取值不涉及。](tag:dt,ocb,tlf,sbc,hcso_dt)
    *
    * @return $this
    */
    public function setConsistentLevel($consistentLevel)
    {
        $this->container['consistentLevel'] = $consistentLevel;
        return $this;
    }

    /**
    * Gets objectType
    *  [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType [对象类型，支持\"server\", \"disk\", \"turbo\", \"workspace\", \"vmware\", \"rds\"和\"file\"共七种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面，vmware：VMware，rds：关系型数据库，file：文件。默认取值不涉及。](tag:hws,hws_hk) [对象类型，支持\"server\", \"disk\"和\"turbo\"共三种。server：云服务器，disk：云硬盘，turbo：文件系统。默认取值不涉及。](tag:ctc,fcs_vm,ocb,hk_g42,sbc,hws_ocb) [对象类型，支持\"server\"和\"disk\"共两种。server：云服务器，disk：云硬盘。默认取值不涉及。](tag:dt,tlf,tm,cmcc,hcso_dt) [对象类型，支持\"server\", \"disk\", \"turbo\"和\"workspace\"共四种。server：云服务器，disk：云硬盘，turbo：文件系统，workspace：云桌面。默认取值不涉及。](tag:g42)
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets protectType
    *  保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    *
    * @return string
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string $protectType 保护类型，默认取值不涉及。取值范围如下： [backup：备份，replication：复制](tag:hws,hws_hk,ocb,hws_ocb) [backup：备份](tag:tlf,tm,cmcc,fcs_vm,g42,dt,hk_g42,sbc,hcso_dt)
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets size
    *  资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 资源容量大小，单位GB，取值范围：10-10485760，默认取值不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，仅支持填写pre_paid：代表包年/包月模式
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode 计费模式，仅支持填写pre_paid：代表包年/包月模式
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
    *  功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 功能说明：订购周期单位。charging_mode参数为pre_paid时period_type参数会生效，并且period_type参数为必选。默认取值不涉及。 取值范围： - month：月 - year：年
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
    *  功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 功能说明：订购周期数，charging_mode为pre_paid时period_num参数会生效，并且period_num参数为为必选。默认取值不涉及。 取值范围：[1-9]
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
    *  功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew 功能说明：到期后是否自动续期，默认为false 取值范围： - true：到期后自动续期 - false：到期后不自动续期
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
    *  功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 功能说明：是否自动付费，默认为false 取值范围： - true：下单后自动付费 - false：下单后不自动付费
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets consoleUrl
    *  云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    *
    * @return string|null
    */
    public function getConsoleUrl()
    {
        return $this->container['consoleUrl'];
    }

    /**
    * Sets consoleUrl
    *
    * @param string|null $consoleUrl 云服务console_url。 订购订单支付完成后，客户可以通过此URL跳转到云服务Console页面查看信息。（仅手动支付时涉及）。默认取值不涉及。
    *
    * @return $this
    */
    public function setConsoleUrl($consoleUrl)
    {
        $this->container['consoleUrl'] = $consoleUrl;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    *
    * @return bool|null
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param bool|null $isMultiAz 功能说明：存储库是否具有多AZ属性，即底层备份是否为多AZ备份，默认为false 取值范围： - true：存储库具有多AZ属性 - false：存储库不具有多AZ属性
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
        return $this;
    }

    /**
    * Gets isDoubleAz
    *  功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    *
    * @return bool|null
    */
    public function getIsDoubleAz()
    {
        return $this->container['isDoubleAz'];
    }

    /**
    * Sets isDoubleAz
    *
    * @param bool|null $isDoubleAz 功能说明：存储库是否具有融合桶属性，即底层备份是否为融合桶备份，默认为false 取值范围： - true：存储库具有融合桶属性 - false：存储库不具有融合桶属性
    *
    * @return $this
    */
    public function setIsDoubleAz($isDoubleAz)
    {
        $this->container['isDoubleAz'] = $isDoubleAz;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 促销信息，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets purchaseMode
    *  购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return string|null
    */
    public function getPurchaseMode()
    {
        return $this->container['purchaseMode'];
    }

    /**
    * Sets purchaseMode
    *
    * @param string|null $purchaseMode 购买模式，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return $this
    */
    public function setPurchaseMode($purchaseMode)
    {
        $this->container['purchaseMode'] = $purchaseMode;
        return $this;
    }

    /**
    * Gets orderId
    *  订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单 ID，包周期时可选参数，取值范围不涉及，默认取值不涉及。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

