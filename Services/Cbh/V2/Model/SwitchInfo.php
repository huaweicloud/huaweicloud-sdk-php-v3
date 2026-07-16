<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSupportUnibuy  是否支持unibuy。 - true：是 - false：否
    * isSupportFloatIpv6  是否支持浮动IPv6。 - true：是 - false：否
    * isSupportAdminLogin  是否支持管理员登录。 - true：是 - false：否
    * isSupportUpdateHa  是否支持更新HA。 - true：是 - false：否
    * isSupportTms  是否支持TMS。 - true：是 - false：否
    * isSupportEps  是否支持EPS。 - true：是 - false：否
    * isSupportIamLogin  是否支持IAM登录。 - true：是 - false：否
    * isSupportIpv6  是否支持IPv6。 - true：是 - false：否
    * isSupportHa  是否支持HA。 - true：是 - false：否
    * isSupportReset  是否支持重置。 - true：是 - false：否
    * isSupportUpgradeInstance  是否支持升级实例。 - true：是 - false：否
    * isSupportChangeSecurityGroup  是否支持更改安全组。 - true：是 - false：否
    * isSupportManuallyIp  是否支持手动IP。 - true：是 - false：否
    * isSupportCapacityExpantion  是否支持容量扩展。 - true：是 - false：否
    * isSupportHaExpantion  是否支持HA扩展。 - true：是 - false：否
    * isSupportAgencyAuthorize  是否支持代理授权。 - true：是 - false：否
    * isSupportChangeVpc  是否支持更改VPC。 - true：是 - false：否
    * isSupportCluster  是否支持集群。 - true：是 - false：否
    * isSupportOndemand  是否支持按需。 - true：是 - false：否
    * isSupportPeriod  是否支持周期。 - true：是 - false：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSupportUnibuy' => 'bool',
            'isSupportFloatIpv6' => 'bool',
            'isSupportAdminLogin' => 'bool',
            'isSupportUpdateHa' => 'bool',
            'isSupportTms' => 'bool',
            'isSupportEps' => 'bool',
            'isSupportIamLogin' => 'bool',
            'isSupportIpv6' => 'bool',
            'isSupportHa' => 'bool',
            'isSupportReset' => 'bool',
            'isSupportUpgradeInstance' => 'bool',
            'isSupportChangeSecurityGroup' => 'bool',
            'isSupportManuallyIp' => 'bool',
            'isSupportCapacityExpantion' => 'bool',
            'isSupportHaExpantion' => 'bool',
            'isSupportAgencyAuthorize' => 'bool',
            'isSupportChangeVpc' => 'bool',
            'isSupportCluster' => 'bool',
            'isSupportOndemand' => 'bool',
            'isSupportPeriod' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSupportUnibuy  是否支持unibuy。 - true：是 - false：否
    * isSupportFloatIpv6  是否支持浮动IPv6。 - true：是 - false：否
    * isSupportAdminLogin  是否支持管理员登录。 - true：是 - false：否
    * isSupportUpdateHa  是否支持更新HA。 - true：是 - false：否
    * isSupportTms  是否支持TMS。 - true：是 - false：否
    * isSupportEps  是否支持EPS。 - true：是 - false：否
    * isSupportIamLogin  是否支持IAM登录。 - true：是 - false：否
    * isSupportIpv6  是否支持IPv6。 - true：是 - false：否
    * isSupportHa  是否支持HA。 - true：是 - false：否
    * isSupportReset  是否支持重置。 - true：是 - false：否
    * isSupportUpgradeInstance  是否支持升级实例。 - true：是 - false：否
    * isSupportChangeSecurityGroup  是否支持更改安全组。 - true：是 - false：否
    * isSupportManuallyIp  是否支持手动IP。 - true：是 - false：否
    * isSupportCapacityExpantion  是否支持容量扩展。 - true：是 - false：否
    * isSupportHaExpantion  是否支持HA扩展。 - true：是 - false：否
    * isSupportAgencyAuthorize  是否支持代理授权。 - true：是 - false：否
    * isSupportChangeVpc  是否支持更改VPC。 - true：是 - false：否
    * isSupportCluster  是否支持集群。 - true：是 - false：否
    * isSupportOndemand  是否支持按需。 - true：是 - false：否
    * isSupportPeriod  是否支持周期。 - true：是 - false：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSupportUnibuy' => null,
        'isSupportFloatIpv6' => null,
        'isSupportAdminLogin' => null,
        'isSupportUpdateHa' => null,
        'isSupportTms' => null,
        'isSupportEps' => null,
        'isSupportIamLogin' => null,
        'isSupportIpv6' => null,
        'isSupportHa' => null,
        'isSupportReset' => null,
        'isSupportUpgradeInstance' => null,
        'isSupportChangeSecurityGroup' => null,
        'isSupportManuallyIp' => null,
        'isSupportCapacityExpantion' => null,
        'isSupportHaExpantion' => null,
        'isSupportAgencyAuthorize' => null,
        'isSupportChangeVpc' => null,
        'isSupportCluster' => null,
        'isSupportOndemand' => null,
        'isSupportPeriod' => null
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
    * isSupportUnibuy  是否支持unibuy。 - true：是 - false：否
    * isSupportFloatIpv6  是否支持浮动IPv6。 - true：是 - false：否
    * isSupportAdminLogin  是否支持管理员登录。 - true：是 - false：否
    * isSupportUpdateHa  是否支持更新HA。 - true：是 - false：否
    * isSupportTms  是否支持TMS。 - true：是 - false：否
    * isSupportEps  是否支持EPS。 - true：是 - false：否
    * isSupportIamLogin  是否支持IAM登录。 - true：是 - false：否
    * isSupportIpv6  是否支持IPv6。 - true：是 - false：否
    * isSupportHa  是否支持HA。 - true：是 - false：否
    * isSupportReset  是否支持重置。 - true：是 - false：否
    * isSupportUpgradeInstance  是否支持升级实例。 - true：是 - false：否
    * isSupportChangeSecurityGroup  是否支持更改安全组。 - true：是 - false：否
    * isSupportManuallyIp  是否支持手动IP。 - true：是 - false：否
    * isSupportCapacityExpantion  是否支持容量扩展。 - true：是 - false：否
    * isSupportHaExpantion  是否支持HA扩展。 - true：是 - false：否
    * isSupportAgencyAuthorize  是否支持代理授权。 - true：是 - false：否
    * isSupportChangeVpc  是否支持更改VPC。 - true：是 - false：否
    * isSupportCluster  是否支持集群。 - true：是 - false：否
    * isSupportOndemand  是否支持按需。 - true：是 - false：否
    * isSupportPeriod  是否支持周期。 - true：是 - false：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSupportUnibuy' => 'is_support_unibuy',
            'isSupportFloatIpv6' => 'is_support_float_ipv6',
            'isSupportAdminLogin' => 'is_support_admin_login',
            'isSupportUpdateHa' => 'is_support_update_ha',
            'isSupportTms' => 'is_support_tms',
            'isSupportEps' => 'is_support_eps',
            'isSupportIamLogin' => 'is_support_iam_login',
            'isSupportIpv6' => 'is_support_ipv6',
            'isSupportHa' => 'is_support_ha',
            'isSupportReset' => 'is_support_reset',
            'isSupportUpgradeInstance' => 'is_support_upgrade_instance',
            'isSupportChangeSecurityGroup' => 'is_support_change_security_group',
            'isSupportManuallyIp' => 'is_support_manually_ip',
            'isSupportCapacityExpantion' => 'is_support_capacity_expantion',
            'isSupportHaExpantion' => 'is_support_ha_expantion',
            'isSupportAgencyAuthorize' => 'is_support_agency_authorize',
            'isSupportChangeVpc' => 'is_support_change_vpc',
            'isSupportCluster' => 'is_support_cluster',
            'isSupportOndemand' => 'is_support_ondemand',
            'isSupportPeriod' => 'is_support_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSupportUnibuy  是否支持unibuy。 - true：是 - false：否
    * isSupportFloatIpv6  是否支持浮动IPv6。 - true：是 - false：否
    * isSupportAdminLogin  是否支持管理员登录。 - true：是 - false：否
    * isSupportUpdateHa  是否支持更新HA。 - true：是 - false：否
    * isSupportTms  是否支持TMS。 - true：是 - false：否
    * isSupportEps  是否支持EPS。 - true：是 - false：否
    * isSupportIamLogin  是否支持IAM登录。 - true：是 - false：否
    * isSupportIpv6  是否支持IPv6。 - true：是 - false：否
    * isSupportHa  是否支持HA。 - true：是 - false：否
    * isSupportReset  是否支持重置。 - true：是 - false：否
    * isSupportUpgradeInstance  是否支持升级实例。 - true：是 - false：否
    * isSupportChangeSecurityGroup  是否支持更改安全组。 - true：是 - false：否
    * isSupportManuallyIp  是否支持手动IP。 - true：是 - false：否
    * isSupportCapacityExpantion  是否支持容量扩展。 - true：是 - false：否
    * isSupportHaExpantion  是否支持HA扩展。 - true：是 - false：否
    * isSupportAgencyAuthorize  是否支持代理授权。 - true：是 - false：否
    * isSupportChangeVpc  是否支持更改VPC。 - true：是 - false：否
    * isSupportCluster  是否支持集群。 - true：是 - false：否
    * isSupportOndemand  是否支持按需。 - true：是 - false：否
    * isSupportPeriod  是否支持周期。 - true：是 - false：否
    *
    * @var string[]
    */
    protected static $setters = [
            'isSupportUnibuy' => 'setIsSupportUnibuy',
            'isSupportFloatIpv6' => 'setIsSupportFloatIpv6',
            'isSupportAdminLogin' => 'setIsSupportAdminLogin',
            'isSupportUpdateHa' => 'setIsSupportUpdateHa',
            'isSupportTms' => 'setIsSupportTms',
            'isSupportEps' => 'setIsSupportEps',
            'isSupportIamLogin' => 'setIsSupportIamLogin',
            'isSupportIpv6' => 'setIsSupportIpv6',
            'isSupportHa' => 'setIsSupportHa',
            'isSupportReset' => 'setIsSupportReset',
            'isSupportUpgradeInstance' => 'setIsSupportUpgradeInstance',
            'isSupportChangeSecurityGroup' => 'setIsSupportChangeSecurityGroup',
            'isSupportManuallyIp' => 'setIsSupportManuallyIp',
            'isSupportCapacityExpantion' => 'setIsSupportCapacityExpantion',
            'isSupportHaExpantion' => 'setIsSupportHaExpantion',
            'isSupportAgencyAuthorize' => 'setIsSupportAgencyAuthorize',
            'isSupportChangeVpc' => 'setIsSupportChangeVpc',
            'isSupportCluster' => 'setIsSupportCluster',
            'isSupportOndemand' => 'setIsSupportOndemand',
            'isSupportPeriod' => 'setIsSupportPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSupportUnibuy  是否支持unibuy。 - true：是 - false：否
    * isSupportFloatIpv6  是否支持浮动IPv6。 - true：是 - false：否
    * isSupportAdminLogin  是否支持管理员登录。 - true：是 - false：否
    * isSupportUpdateHa  是否支持更新HA。 - true：是 - false：否
    * isSupportTms  是否支持TMS。 - true：是 - false：否
    * isSupportEps  是否支持EPS。 - true：是 - false：否
    * isSupportIamLogin  是否支持IAM登录。 - true：是 - false：否
    * isSupportIpv6  是否支持IPv6。 - true：是 - false：否
    * isSupportHa  是否支持HA。 - true：是 - false：否
    * isSupportReset  是否支持重置。 - true：是 - false：否
    * isSupportUpgradeInstance  是否支持升级实例。 - true：是 - false：否
    * isSupportChangeSecurityGroup  是否支持更改安全组。 - true：是 - false：否
    * isSupportManuallyIp  是否支持手动IP。 - true：是 - false：否
    * isSupportCapacityExpantion  是否支持容量扩展。 - true：是 - false：否
    * isSupportHaExpantion  是否支持HA扩展。 - true：是 - false：否
    * isSupportAgencyAuthorize  是否支持代理授权。 - true：是 - false：否
    * isSupportChangeVpc  是否支持更改VPC。 - true：是 - false：否
    * isSupportCluster  是否支持集群。 - true：是 - false：否
    * isSupportOndemand  是否支持按需。 - true：是 - false：否
    * isSupportPeriod  是否支持周期。 - true：是 - false：否
    *
    * @var string[]
    */
    protected static $getters = [
            'isSupportUnibuy' => 'getIsSupportUnibuy',
            'isSupportFloatIpv6' => 'getIsSupportFloatIpv6',
            'isSupportAdminLogin' => 'getIsSupportAdminLogin',
            'isSupportUpdateHa' => 'getIsSupportUpdateHa',
            'isSupportTms' => 'getIsSupportTms',
            'isSupportEps' => 'getIsSupportEps',
            'isSupportIamLogin' => 'getIsSupportIamLogin',
            'isSupportIpv6' => 'getIsSupportIpv6',
            'isSupportHa' => 'getIsSupportHa',
            'isSupportReset' => 'getIsSupportReset',
            'isSupportUpgradeInstance' => 'getIsSupportUpgradeInstance',
            'isSupportChangeSecurityGroup' => 'getIsSupportChangeSecurityGroup',
            'isSupportManuallyIp' => 'getIsSupportManuallyIp',
            'isSupportCapacityExpantion' => 'getIsSupportCapacityExpantion',
            'isSupportHaExpantion' => 'getIsSupportHaExpantion',
            'isSupportAgencyAuthorize' => 'getIsSupportAgencyAuthorize',
            'isSupportChangeVpc' => 'getIsSupportChangeVpc',
            'isSupportCluster' => 'getIsSupportCluster',
            'isSupportOndemand' => 'getIsSupportOndemand',
            'isSupportPeriod' => 'getIsSupportPeriod'
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
        $this->container['isSupportUnibuy'] = isset($data['isSupportUnibuy']) ? $data['isSupportUnibuy'] : null;
        $this->container['isSupportFloatIpv6'] = isset($data['isSupportFloatIpv6']) ? $data['isSupportFloatIpv6'] : null;
        $this->container['isSupportAdminLogin'] = isset($data['isSupportAdminLogin']) ? $data['isSupportAdminLogin'] : null;
        $this->container['isSupportUpdateHa'] = isset($data['isSupportUpdateHa']) ? $data['isSupportUpdateHa'] : null;
        $this->container['isSupportTms'] = isset($data['isSupportTms']) ? $data['isSupportTms'] : null;
        $this->container['isSupportEps'] = isset($data['isSupportEps']) ? $data['isSupportEps'] : null;
        $this->container['isSupportIamLogin'] = isset($data['isSupportIamLogin']) ? $data['isSupportIamLogin'] : null;
        $this->container['isSupportIpv6'] = isset($data['isSupportIpv6']) ? $data['isSupportIpv6'] : null;
        $this->container['isSupportHa'] = isset($data['isSupportHa']) ? $data['isSupportHa'] : null;
        $this->container['isSupportReset'] = isset($data['isSupportReset']) ? $data['isSupportReset'] : null;
        $this->container['isSupportUpgradeInstance'] = isset($data['isSupportUpgradeInstance']) ? $data['isSupportUpgradeInstance'] : null;
        $this->container['isSupportChangeSecurityGroup'] = isset($data['isSupportChangeSecurityGroup']) ? $data['isSupportChangeSecurityGroup'] : null;
        $this->container['isSupportManuallyIp'] = isset($data['isSupportManuallyIp']) ? $data['isSupportManuallyIp'] : null;
        $this->container['isSupportCapacityExpantion'] = isset($data['isSupportCapacityExpantion']) ? $data['isSupportCapacityExpantion'] : null;
        $this->container['isSupportHaExpantion'] = isset($data['isSupportHaExpantion']) ? $data['isSupportHaExpantion'] : null;
        $this->container['isSupportAgencyAuthorize'] = isset($data['isSupportAgencyAuthorize']) ? $data['isSupportAgencyAuthorize'] : null;
        $this->container['isSupportChangeVpc'] = isset($data['isSupportChangeVpc']) ? $data['isSupportChangeVpc'] : null;
        $this->container['isSupportCluster'] = isset($data['isSupportCluster']) ? $data['isSupportCluster'] : null;
        $this->container['isSupportOndemand'] = isset($data['isSupportOndemand']) ? $data['isSupportOndemand'] : null;
        $this->container['isSupportPeriod'] = isset($data['isSupportPeriod']) ? $data['isSupportPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets isSupportUnibuy
    *  是否支持unibuy。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportUnibuy()
    {
        return $this->container['isSupportUnibuy'];
    }

    /**
    * Sets isSupportUnibuy
    *
    * @param bool|null $isSupportUnibuy 是否支持unibuy。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportUnibuy($isSupportUnibuy)
    {
        $this->container['isSupportUnibuy'] = $isSupportUnibuy;
        return $this;
    }

    /**
    * Gets isSupportFloatIpv6
    *  是否支持浮动IPv6。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportFloatIpv6()
    {
        return $this->container['isSupportFloatIpv6'];
    }

    /**
    * Sets isSupportFloatIpv6
    *
    * @param bool|null $isSupportFloatIpv6 是否支持浮动IPv6。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportFloatIpv6($isSupportFloatIpv6)
    {
        $this->container['isSupportFloatIpv6'] = $isSupportFloatIpv6;
        return $this;
    }

    /**
    * Gets isSupportAdminLogin
    *  是否支持管理员登录。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportAdminLogin()
    {
        return $this->container['isSupportAdminLogin'];
    }

    /**
    * Sets isSupportAdminLogin
    *
    * @param bool|null $isSupportAdminLogin 是否支持管理员登录。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportAdminLogin($isSupportAdminLogin)
    {
        $this->container['isSupportAdminLogin'] = $isSupportAdminLogin;
        return $this;
    }

    /**
    * Gets isSupportUpdateHa
    *  是否支持更新HA。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportUpdateHa()
    {
        return $this->container['isSupportUpdateHa'];
    }

    /**
    * Sets isSupportUpdateHa
    *
    * @param bool|null $isSupportUpdateHa 是否支持更新HA。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportUpdateHa($isSupportUpdateHa)
    {
        $this->container['isSupportUpdateHa'] = $isSupportUpdateHa;
        return $this;
    }

    /**
    * Gets isSupportTms
    *  是否支持TMS。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportTms()
    {
        return $this->container['isSupportTms'];
    }

    /**
    * Sets isSupportTms
    *
    * @param bool|null $isSupportTms 是否支持TMS。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportTms($isSupportTms)
    {
        $this->container['isSupportTms'] = $isSupportTms;
        return $this;
    }

    /**
    * Gets isSupportEps
    *  是否支持EPS。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportEps()
    {
        return $this->container['isSupportEps'];
    }

    /**
    * Sets isSupportEps
    *
    * @param bool|null $isSupportEps 是否支持EPS。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportEps($isSupportEps)
    {
        $this->container['isSupportEps'] = $isSupportEps;
        return $this;
    }

    /**
    * Gets isSupportIamLogin
    *  是否支持IAM登录。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportIamLogin()
    {
        return $this->container['isSupportIamLogin'];
    }

    /**
    * Sets isSupportIamLogin
    *
    * @param bool|null $isSupportIamLogin 是否支持IAM登录。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportIamLogin($isSupportIamLogin)
    {
        $this->container['isSupportIamLogin'] = $isSupportIamLogin;
        return $this;
    }

    /**
    * Gets isSupportIpv6
    *  是否支持IPv6。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportIpv6()
    {
        return $this->container['isSupportIpv6'];
    }

    /**
    * Sets isSupportIpv6
    *
    * @param bool|null $isSupportIpv6 是否支持IPv6。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportIpv6($isSupportIpv6)
    {
        $this->container['isSupportIpv6'] = $isSupportIpv6;
        return $this;
    }

    /**
    * Gets isSupportHa
    *  是否支持HA。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportHa()
    {
        return $this->container['isSupportHa'];
    }

    /**
    * Sets isSupportHa
    *
    * @param bool|null $isSupportHa 是否支持HA。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportHa($isSupportHa)
    {
        $this->container['isSupportHa'] = $isSupportHa;
        return $this;
    }

    /**
    * Gets isSupportReset
    *  是否支持重置。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportReset()
    {
        return $this->container['isSupportReset'];
    }

    /**
    * Sets isSupportReset
    *
    * @param bool|null $isSupportReset 是否支持重置。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportReset($isSupportReset)
    {
        $this->container['isSupportReset'] = $isSupportReset;
        return $this;
    }

    /**
    * Gets isSupportUpgradeInstance
    *  是否支持升级实例。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportUpgradeInstance()
    {
        return $this->container['isSupportUpgradeInstance'];
    }

    /**
    * Sets isSupportUpgradeInstance
    *
    * @param bool|null $isSupportUpgradeInstance 是否支持升级实例。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportUpgradeInstance($isSupportUpgradeInstance)
    {
        $this->container['isSupportUpgradeInstance'] = $isSupportUpgradeInstance;
        return $this;
    }

    /**
    * Gets isSupportChangeSecurityGroup
    *  是否支持更改安全组。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportChangeSecurityGroup()
    {
        return $this->container['isSupportChangeSecurityGroup'];
    }

    /**
    * Sets isSupportChangeSecurityGroup
    *
    * @param bool|null $isSupportChangeSecurityGroup 是否支持更改安全组。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportChangeSecurityGroup($isSupportChangeSecurityGroup)
    {
        $this->container['isSupportChangeSecurityGroup'] = $isSupportChangeSecurityGroup;
        return $this;
    }

    /**
    * Gets isSupportManuallyIp
    *  是否支持手动IP。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportManuallyIp()
    {
        return $this->container['isSupportManuallyIp'];
    }

    /**
    * Sets isSupportManuallyIp
    *
    * @param bool|null $isSupportManuallyIp 是否支持手动IP。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportManuallyIp($isSupportManuallyIp)
    {
        $this->container['isSupportManuallyIp'] = $isSupportManuallyIp;
        return $this;
    }

    /**
    * Gets isSupportCapacityExpantion
    *  是否支持容量扩展。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportCapacityExpantion()
    {
        return $this->container['isSupportCapacityExpantion'];
    }

    /**
    * Sets isSupportCapacityExpantion
    *
    * @param bool|null $isSupportCapacityExpantion 是否支持容量扩展。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportCapacityExpantion($isSupportCapacityExpantion)
    {
        $this->container['isSupportCapacityExpantion'] = $isSupportCapacityExpantion;
        return $this;
    }

    /**
    * Gets isSupportHaExpantion
    *  是否支持HA扩展。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportHaExpantion()
    {
        return $this->container['isSupportHaExpantion'];
    }

    /**
    * Sets isSupportHaExpantion
    *
    * @param bool|null $isSupportHaExpantion 是否支持HA扩展。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportHaExpantion($isSupportHaExpantion)
    {
        $this->container['isSupportHaExpantion'] = $isSupportHaExpantion;
        return $this;
    }

    /**
    * Gets isSupportAgencyAuthorize
    *  是否支持代理授权。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportAgencyAuthorize()
    {
        return $this->container['isSupportAgencyAuthorize'];
    }

    /**
    * Sets isSupportAgencyAuthorize
    *
    * @param bool|null $isSupportAgencyAuthorize 是否支持代理授权。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportAgencyAuthorize($isSupportAgencyAuthorize)
    {
        $this->container['isSupportAgencyAuthorize'] = $isSupportAgencyAuthorize;
        return $this;
    }

    /**
    * Gets isSupportChangeVpc
    *  是否支持更改VPC。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportChangeVpc()
    {
        return $this->container['isSupportChangeVpc'];
    }

    /**
    * Sets isSupportChangeVpc
    *
    * @param bool|null $isSupportChangeVpc 是否支持更改VPC。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportChangeVpc($isSupportChangeVpc)
    {
        $this->container['isSupportChangeVpc'] = $isSupportChangeVpc;
        return $this;
    }

    /**
    * Gets isSupportCluster
    *  是否支持集群。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportCluster()
    {
        return $this->container['isSupportCluster'];
    }

    /**
    * Sets isSupportCluster
    *
    * @param bool|null $isSupportCluster 是否支持集群。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportCluster($isSupportCluster)
    {
        $this->container['isSupportCluster'] = $isSupportCluster;
        return $this;
    }

    /**
    * Gets isSupportOndemand
    *  是否支持按需。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportOndemand()
    {
        return $this->container['isSupportOndemand'];
    }

    /**
    * Sets isSupportOndemand
    *
    * @param bool|null $isSupportOndemand 是否支持按需。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportOndemand($isSupportOndemand)
    {
        $this->container['isSupportOndemand'] = $isSupportOndemand;
        return $this;
    }

    /**
    * Gets isSupportPeriod
    *  是否支持周期。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsSupportPeriod()
    {
        return $this->container['isSupportPeriod'];
    }

    /**
    * Sets isSupportPeriod
    *
    * @param bool|null $isSupportPeriod 是否支持周期。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsSupportPeriod($isSupportPeriod)
    {
        $this->container['isSupportPeriod'] = $isSupportPeriod;
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

