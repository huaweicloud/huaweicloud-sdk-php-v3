<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHostsStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHostsStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  服务器总数
    * riskNum  有风险服务器数
    * unprotectedNum  未防护服务器数
    * notInstalledNum  Agent未安装数
    * installedFailedNum  Agent安装失败数
    * notOnlineNum  Agent不在线数
    * versionBasicNum  开启基础版服务器数
    * versionAdvancedNum  开启专业版服务器数
    * versionEnterpriseNum  开启企业版服务器数
    * versionPremiumNum  开启旗舰版服务器数
    * versionWtpNum  开启网页防篡改版服务器数
    * versionContainerNum  开启容器版服务器数
    * hostGroupNum  服务器组总数
    * serverGroupNum  资产服务器组数量
    * assetValueList  资产重要性列表
    * serverGroupList  服务器组列表
    * ignoreHostNum  已忽略服务器数
    * protectedNum  防护中服务器数
    * protectInterruptNum  防护中断服务器数
    * idleNum  空闲配额数
    * premiumNonSpNum  旗舰版主机未开启agent自保护数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'riskNum' => 'int',
            'unprotectedNum' => 'int',
            'notInstalledNum' => 'int',
            'installedFailedNum' => 'int',
            'notOnlineNum' => 'int',
            'versionBasicNum' => 'int',
            'versionAdvancedNum' => 'int',
            'versionEnterpriseNum' => 'int',
            'versionPremiumNum' => 'int',
            'versionWtpNum' => 'int',
            'versionContainerNum' => 'int',
            'hostGroupNum' => 'int',
            'serverGroupNum' => 'int',
            'assetValueList' => '\HuaweiCloud\SDK\Hss\V5\Model\AssetValueHostNumInfo[]',
            'serverGroupList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerGroupItem[]',
            'ignoreHostNum' => 'int',
            'protectedNum' => 'int',
            'protectInterruptNum' => 'int',
            'idleNum' => 'int',
            'premiumNonSpNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  服务器总数
    * riskNum  有风险服务器数
    * unprotectedNum  未防护服务器数
    * notInstalledNum  Agent未安装数
    * installedFailedNum  Agent安装失败数
    * notOnlineNum  Agent不在线数
    * versionBasicNum  开启基础版服务器数
    * versionAdvancedNum  开启专业版服务器数
    * versionEnterpriseNum  开启企业版服务器数
    * versionPremiumNum  开启旗舰版服务器数
    * versionWtpNum  开启网页防篡改版服务器数
    * versionContainerNum  开启容器版服务器数
    * hostGroupNum  服务器组总数
    * serverGroupNum  资产服务器组数量
    * assetValueList  资产重要性列表
    * serverGroupList  服务器组列表
    * ignoreHostNum  已忽略服务器数
    * protectedNum  防护中服务器数
    * protectInterruptNum  防护中断服务器数
    * idleNum  空闲配额数
    * premiumNonSpNum  旗舰版主机未开启agent自保护数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'riskNum' => 'int32',
        'unprotectedNum' => 'int32',
        'notInstalledNum' => 'int32',
        'installedFailedNum' => 'int32',
        'notOnlineNum' => 'int32',
        'versionBasicNum' => 'int32',
        'versionAdvancedNum' => 'int32',
        'versionEnterpriseNum' => 'int32',
        'versionPremiumNum' => 'int32',
        'versionWtpNum' => 'int32',
        'versionContainerNum' => 'int32',
        'hostGroupNum' => 'int32',
        'serverGroupNum' => 'int32',
        'assetValueList' => null,
        'serverGroupList' => null,
        'ignoreHostNum' => 'int32',
        'protectedNum' => 'int32',
        'protectInterruptNum' => 'int32',
        'idleNum' => 'int32',
        'premiumNonSpNum' => 'int32'
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
    * totalNum  服务器总数
    * riskNum  有风险服务器数
    * unprotectedNum  未防护服务器数
    * notInstalledNum  Agent未安装数
    * installedFailedNum  Agent安装失败数
    * notOnlineNum  Agent不在线数
    * versionBasicNum  开启基础版服务器数
    * versionAdvancedNum  开启专业版服务器数
    * versionEnterpriseNum  开启企业版服务器数
    * versionPremiumNum  开启旗舰版服务器数
    * versionWtpNum  开启网页防篡改版服务器数
    * versionContainerNum  开启容器版服务器数
    * hostGroupNum  服务器组总数
    * serverGroupNum  资产服务器组数量
    * assetValueList  资产重要性列表
    * serverGroupList  服务器组列表
    * ignoreHostNum  已忽略服务器数
    * protectedNum  防护中服务器数
    * protectInterruptNum  防护中断服务器数
    * idleNum  空闲配额数
    * premiumNonSpNum  旗舰版主机未开启agent自保护数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'riskNum' => 'risk_num',
            'unprotectedNum' => 'unprotected_num',
            'notInstalledNum' => 'not_installed_num',
            'installedFailedNum' => 'installed_failed_num',
            'notOnlineNum' => 'not_online_num',
            'versionBasicNum' => 'version_basic_num',
            'versionAdvancedNum' => 'version_advanced_num',
            'versionEnterpriseNum' => 'version_enterprise_num',
            'versionPremiumNum' => 'version_premium_num',
            'versionWtpNum' => 'version_wtp_num',
            'versionContainerNum' => 'version_container_num',
            'hostGroupNum' => 'host_group_num',
            'serverGroupNum' => 'server_group_num',
            'assetValueList' => 'asset_value_list',
            'serverGroupList' => 'server_group_list',
            'ignoreHostNum' => 'ignore_host_num',
            'protectedNum' => 'protected_num',
            'protectInterruptNum' => 'protect_interrupt_num',
            'idleNum' => 'idle_num',
            'premiumNonSpNum' => 'premium_non_sp_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  服务器总数
    * riskNum  有风险服务器数
    * unprotectedNum  未防护服务器数
    * notInstalledNum  Agent未安装数
    * installedFailedNum  Agent安装失败数
    * notOnlineNum  Agent不在线数
    * versionBasicNum  开启基础版服务器数
    * versionAdvancedNum  开启专业版服务器数
    * versionEnterpriseNum  开启企业版服务器数
    * versionPremiumNum  开启旗舰版服务器数
    * versionWtpNum  开启网页防篡改版服务器数
    * versionContainerNum  开启容器版服务器数
    * hostGroupNum  服务器组总数
    * serverGroupNum  资产服务器组数量
    * assetValueList  资产重要性列表
    * serverGroupList  服务器组列表
    * ignoreHostNum  已忽略服务器数
    * protectedNum  防护中服务器数
    * protectInterruptNum  防护中断服务器数
    * idleNum  空闲配额数
    * premiumNonSpNum  旗舰版主机未开启agent自保护数
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'riskNum' => 'setRiskNum',
            'unprotectedNum' => 'setUnprotectedNum',
            'notInstalledNum' => 'setNotInstalledNum',
            'installedFailedNum' => 'setInstalledFailedNum',
            'notOnlineNum' => 'setNotOnlineNum',
            'versionBasicNum' => 'setVersionBasicNum',
            'versionAdvancedNum' => 'setVersionAdvancedNum',
            'versionEnterpriseNum' => 'setVersionEnterpriseNum',
            'versionPremiumNum' => 'setVersionPremiumNum',
            'versionWtpNum' => 'setVersionWtpNum',
            'versionContainerNum' => 'setVersionContainerNum',
            'hostGroupNum' => 'setHostGroupNum',
            'serverGroupNum' => 'setServerGroupNum',
            'assetValueList' => 'setAssetValueList',
            'serverGroupList' => 'setServerGroupList',
            'ignoreHostNum' => 'setIgnoreHostNum',
            'protectedNum' => 'setProtectedNum',
            'protectInterruptNum' => 'setProtectInterruptNum',
            'idleNum' => 'setIdleNum',
            'premiumNonSpNum' => 'setPremiumNonSpNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  服务器总数
    * riskNum  有风险服务器数
    * unprotectedNum  未防护服务器数
    * notInstalledNum  Agent未安装数
    * installedFailedNum  Agent安装失败数
    * notOnlineNum  Agent不在线数
    * versionBasicNum  开启基础版服务器数
    * versionAdvancedNum  开启专业版服务器数
    * versionEnterpriseNum  开启企业版服务器数
    * versionPremiumNum  开启旗舰版服务器数
    * versionWtpNum  开启网页防篡改版服务器数
    * versionContainerNum  开启容器版服务器数
    * hostGroupNum  服务器组总数
    * serverGroupNum  资产服务器组数量
    * assetValueList  资产重要性列表
    * serverGroupList  服务器组列表
    * ignoreHostNum  已忽略服务器数
    * protectedNum  防护中服务器数
    * protectInterruptNum  防护中断服务器数
    * idleNum  空闲配额数
    * premiumNonSpNum  旗舰版主机未开启agent自保护数
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'riskNum' => 'getRiskNum',
            'unprotectedNum' => 'getUnprotectedNum',
            'notInstalledNum' => 'getNotInstalledNum',
            'installedFailedNum' => 'getInstalledFailedNum',
            'notOnlineNum' => 'getNotOnlineNum',
            'versionBasicNum' => 'getVersionBasicNum',
            'versionAdvancedNum' => 'getVersionAdvancedNum',
            'versionEnterpriseNum' => 'getVersionEnterpriseNum',
            'versionPremiumNum' => 'getVersionPremiumNum',
            'versionWtpNum' => 'getVersionWtpNum',
            'versionContainerNum' => 'getVersionContainerNum',
            'hostGroupNum' => 'getHostGroupNum',
            'serverGroupNum' => 'getServerGroupNum',
            'assetValueList' => 'getAssetValueList',
            'serverGroupList' => 'getServerGroupList',
            'ignoreHostNum' => 'getIgnoreHostNum',
            'protectedNum' => 'getProtectedNum',
            'protectInterruptNum' => 'getProtectInterruptNum',
            'idleNum' => 'getIdleNum',
            'premiumNonSpNum' => 'getPremiumNonSpNum'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['unprotectedNum'] = isset($data['unprotectedNum']) ? $data['unprotectedNum'] : null;
        $this->container['notInstalledNum'] = isset($data['notInstalledNum']) ? $data['notInstalledNum'] : null;
        $this->container['installedFailedNum'] = isset($data['installedFailedNum']) ? $data['installedFailedNum'] : null;
        $this->container['notOnlineNum'] = isset($data['notOnlineNum']) ? $data['notOnlineNum'] : null;
        $this->container['versionBasicNum'] = isset($data['versionBasicNum']) ? $data['versionBasicNum'] : null;
        $this->container['versionAdvancedNum'] = isset($data['versionAdvancedNum']) ? $data['versionAdvancedNum'] : null;
        $this->container['versionEnterpriseNum'] = isset($data['versionEnterpriseNum']) ? $data['versionEnterpriseNum'] : null;
        $this->container['versionPremiumNum'] = isset($data['versionPremiumNum']) ? $data['versionPremiumNum'] : null;
        $this->container['versionWtpNum'] = isset($data['versionWtpNum']) ? $data['versionWtpNum'] : null;
        $this->container['versionContainerNum'] = isset($data['versionContainerNum']) ? $data['versionContainerNum'] : null;
        $this->container['hostGroupNum'] = isset($data['hostGroupNum']) ? $data['hostGroupNum'] : null;
        $this->container['serverGroupNum'] = isset($data['serverGroupNum']) ? $data['serverGroupNum'] : null;
        $this->container['assetValueList'] = isset($data['assetValueList']) ? $data['assetValueList'] : null;
        $this->container['serverGroupList'] = isset($data['serverGroupList']) ? $data['serverGroupList'] : null;
        $this->container['ignoreHostNum'] = isset($data['ignoreHostNum']) ? $data['ignoreHostNum'] : null;
        $this->container['protectedNum'] = isset($data['protectedNum']) ? $data['protectedNum'] : null;
        $this->container['protectInterruptNum'] = isset($data['protectInterruptNum']) ? $data['protectInterruptNum'] : null;
        $this->container['idleNum'] = isset($data['idleNum']) ? $data['idleNum'] : null;
        $this->container['premiumNonSpNum'] = isset($data['premiumNonSpNum']) ? $data['premiumNonSpNum'] : null;
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
    * Gets totalNum
    *  服务器总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 服务器总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets riskNum
    *  有风险服务器数
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum 有风险服务器数
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets unprotectedNum
    *  未防护服务器数
    *
    * @return int|null
    */
    public function getUnprotectedNum()
    {
        return $this->container['unprotectedNum'];
    }

    /**
    * Sets unprotectedNum
    *
    * @param int|null $unprotectedNum 未防护服务器数
    *
    * @return $this
    */
    public function setUnprotectedNum($unprotectedNum)
    {
        $this->container['unprotectedNum'] = $unprotectedNum;
        return $this;
    }

    /**
    * Gets notInstalledNum
    *  Agent未安装数
    *
    * @return int|null
    */
    public function getNotInstalledNum()
    {
        return $this->container['notInstalledNum'];
    }

    /**
    * Sets notInstalledNum
    *
    * @param int|null $notInstalledNum Agent未安装数
    *
    * @return $this
    */
    public function setNotInstalledNum($notInstalledNum)
    {
        $this->container['notInstalledNum'] = $notInstalledNum;
        return $this;
    }

    /**
    * Gets installedFailedNum
    *  Agent安装失败数
    *
    * @return int|null
    */
    public function getInstalledFailedNum()
    {
        return $this->container['installedFailedNum'];
    }

    /**
    * Sets installedFailedNum
    *
    * @param int|null $installedFailedNum Agent安装失败数
    *
    * @return $this
    */
    public function setInstalledFailedNum($installedFailedNum)
    {
        $this->container['installedFailedNum'] = $installedFailedNum;
        return $this;
    }

    /**
    * Gets notOnlineNum
    *  Agent不在线数
    *
    * @return int|null
    */
    public function getNotOnlineNum()
    {
        return $this->container['notOnlineNum'];
    }

    /**
    * Sets notOnlineNum
    *
    * @param int|null $notOnlineNum Agent不在线数
    *
    * @return $this
    */
    public function setNotOnlineNum($notOnlineNum)
    {
        $this->container['notOnlineNum'] = $notOnlineNum;
        return $this;
    }

    /**
    * Gets versionBasicNum
    *  开启基础版服务器数
    *
    * @return int|null
    */
    public function getVersionBasicNum()
    {
        return $this->container['versionBasicNum'];
    }

    /**
    * Sets versionBasicNum
    *
    * @param int|null $versionBasicNum 开启基础版服务器数
    *
    * @return $this
    */
    public function setVersionBasicNum($versionBasicNum)
    {
        $this->container['versionBasicNum'] = $versionBasicNum;
        return $this;
    }

    /**
    * Gets versionAdvancedNum
    *  开启专业版服务器数
    *
    * @return int|null
    */
    public function getVersionAdvancedNum()
    {
        return $this->container['versionAdvancedNum'];
    }

    /**
    * Sets versionAdvancedNum
    *
    * @param int|null $versionAdvancedNum 开启专业版服务器数
    *
    * @return $this
    */
    public function setVersionAdvancedNum($versionAdvancedNum)
    {
        $this->container['versionAdvancedNum'] = $versionAdvancedNum;
        return $this;
    }

    /**
    * Gets versionEnterpriseNum
    *  开启企业版服务器数
    *
    * @return int|null
    */
    public function getVersionEnterpriseNum()
    {
        return $this->container['versionEnterpriseNum'];
    }

    /**
    * Sets versionEnterpriseNum
    *
    * @param int|null $versionEnterpriseNum 开启企业版服务器数
    *
    * @return $this
    */
    public function setVersionEnterpriseNum($versionEnterpriseNum)
    {
        $this->container['versionEnterpriseNum'] = $versionEnterpriseNum;
        return $this;
    }

    /**
    * Gets versionPremiumNum
    *  开启旗舰版服务器数
    *
    * @return int|null
    */
    public function getVersionPremiumNum()
    {
        return $this->container['versionPremiumNum'];
    }

    /**
    * Sets versionPremiumNum
    *
    * @param int|null $versionPremiumNum 开启旗舰版服务器数
    *
    * @return $this
    */
    public function setVersionPremiumNum($versionPremiumNum)
    {
        $this->container['versionPremiumNum'] = $versionPremiumNum;
        return $this;
    }

    /**
    * Gets versionWtpNum
    *  开启网页防篡改版服务器数
    *
    * @return int|null
    */
    public function getVersionWtpNum()
    {
        return $this->container['versionWtpNum'];
    }

    /**
    * Sets versionWtpNum
    *
    * @param int|null $versionWtpNum 开启网页防篡改版服务器数
    *
    * @return $this
    */
    public function setVersionWtpNum($versionWtpNum)
    {
        $this->container['versionWtpNum'] = $versionWtpNum;
        return $this;
    }

    /**
    * Gets versionContainerNum
    *  开启容器版服务器数
    *
    * @return int|null
    */
    public function getVersionContainerNum()
    {
        return $this->container['versionContainerNum'];
    }

    /**
    * Sets versionContainerNum
    *
    * @param int|null $versionContainerNum 开启容器版服务器数
    *
    * @return $this
    */
    public function setVersionContainerNum($versionContainerNum)
    {
        $this->container['versionContainerNum'] = $versionContainerNum;
        return $this;
    }

    /**
    * Gets hostGroupNum
    *  服务器组总数
    *
    * @return int|null
    */
    public function getHostGroupNum()
    {
        return $this->container['hostGroupNum'];
    }

    /**
    * Sets hostGroupNum
    *
    * @param int|null $hostGroupNum 服务器组总数
    *
    * @return $this
    */
    public function setHostGroupNum($hostGroupNum)
    {
        $this->container['hostGroupNum'] = $hostGroupNum;
        return $this;
    }

    /**
    * Gets serverGroupNum
    *  资产服务器组数量
    *
    * @return int|null
    */
    public function getServerGroupNum()
    {
        return $this->container['serverGroupNum'];
    }

    /**
    * Sets serverGroupNum
    *
    * @param int|null $serverGroupNum 资产服务器组数量
    *
    * @return $this
    */
    public function setServerGroupNum($serverGroupNum)
    {
        $this->container['serverGroupNum'] = $serverGroupNum;
        return $this;
    }

    /**
    * Gets assetValueList
    *  资产重要性列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AssetValueHostNumInfo[]|null
    */
    public function getAssetValueList()
    {
        return $this->container['assetValueList'];
    }

    /**
    * Sets assetValueList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AssetValueHostNumInfo[]|null $assetValueList 资产重要性列表
    *
    * @return $this
    */
    public function setAssetValueList($assetValueList)
    {
        $this->container['assetValueList'] = $assetValueList;
        return $this;
    }

    /**
    * Gets serverGroupList
    *  服务器组列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerGroupItem[]|null
    */
    public function getServerGroupList()
    {
        return $this->container['serverGroupList'];
    }

    /**
    * Sets serverGroupList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerGroupItem[]|null $serverGroupList 服务器组列表
    *
    * @return $this
    */
    public function setServerGroupList($serverGroupList)
    {
        $this->container['serverGroupList'] = $serverGroupList;
        return $this;
    }

    /**
    * Gets ignoreHostNum
    *  已忽略服务器数
    *
    * @return int|null
    */
    public function getIgnoreHostNum()
    {
        return $this->container['ignoreHostNum'];
    }

    /**
    * Sets ignoreHostNum
    *
    * @param int|null $ignoreHostNum 已忽略服务器数
    *
    * @return $this
    */
    public function setIgnoreHostNum($ignoreHostNum)
    {
        $this->container['ignoreHostNum'] = $ignoreHostNum;
        return $this;
    }

    /**
    * Gets protectedNum
    *  防护中服务器数
    *
    * @return int|null
    */
    public function getProtectedNum()
    {
        return $this->container['protectedNum'];
    }

    /**
    * Sets protectedNum
    *
    * @param int|null $protectedNum 防护中服务器数
    *
    * @return $this
    */
    public function setProtectedNum($protectedNum)
    {
        $this->container['protectedNum'] = $protectedNum;
        return $this;
    }

    /**
    * Gets protectInterruptNum
    *  防护中断服务器数
    *
    * @return int|null
    */
    public function getProtectInterruptNum()
    {
        return $this->container['protectInterruptNum'];
    }

    /**
    * Sets protectInterruptNum
    *
    * @param int|null $protectInterruptNum 防护中断服务器数
    *
    * @return $this
    */
    public function setProtectInterruptNum($protectInterruptNum)
    {
        $this->container['protectInterruptNum'] = $protectInterruptNum;
        return $this;
    }

    /**
    * Gets idleNum
    *  空闲配额数
    *
    * @return int|null
    */
    public function getIdleNum()
    {
        return $this->container['idleNum'];
    }

    /**
    * Sets idleNum
    *
    * @param int|null $idleNum 空闲配额数
    *
    * @return $this
    */
    public function setIdleNum($idleNum)
    {
        $this->container['idleNum'] = $idleNum;
        return $this;
    }

    /**
    * Gets premiumNonSpNum
    *  旗舰版主机未开启agent自保护数
    *
    * @return int|null
    */
    public function getPremiumNonSpNum()
    {
        return $this->container['premiumNonSpNum'];
    }

    /**
    * Sets premiumNonSpNum
    *
    * @param int|null $premiumNonSpNum 旗舰版主机未开启agent自保护数
    *
    * @return $this
    */
    public function setPremiumNonSpNum($premiumNonSpNum)
    {
        $this->container['premiumNonSpNum'] = $premiumNonSpNum;
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

