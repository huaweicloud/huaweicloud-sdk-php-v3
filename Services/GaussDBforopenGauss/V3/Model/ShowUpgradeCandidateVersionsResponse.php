<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUpgradeCandidateVersionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUpgradeCandidateVersionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeTypeList  升级类型信息列表
    * rollbackEnabled  是否可以回滚，true可以回滚，false不可以回滚
    * sourceVersion  原版本
    * targetVersion  升级目标版本，没有在滚动升级中返回null
    * rollUpgradeProgress  rollUpgradeProgress
    * upgradeCandidateVersions  可以升级的版本，包括大小版本，滚动升级中返回空数组
    * hotfixUpgradeCandidateVersions  可以升级的热补丁版本，滚动升级中返回空数组
    * hotfixRollbackCandidateVersions  可以回滚的热补丁版本，滚动升级中返回空数组
    * hotfixUpgradeInfos  hotfixUpgradeInfos
    * hotfixRollbackInfos  hotfixRollbackInfos
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeTypeList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeTypeInfo[]',
            'rollbackEnabled' => 'bool',
            'sourceVersion' => 'string',
            'targetVersion' => 'string',
            'rollUpgradeProgress' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RollUpgradeProgress',
            'upgradeCandidateVersions' => 'string[]',
            'hotfixUpgradeCandidateVersions' => 'string[]',
            'hotfixRollbackCandidateVersions' => 'string[]',
            'hotfixUpgradeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixUpgradeInfos',
            'hotfixRollbackInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixRollbackInfos'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeTypeList  升级类型信息列表
    * rollbackEnabled  是否可以回滚，true可以回滚，false不可以回滚
    * sourceVersion  原版本
    * targetVersion  升级目标版本，没有在滚动升级中返回null
    * rollUpgradeProgress  rollUpgradeProgress
    * upgradeCandidateVersions  可以升级的版本，包括大小版本，滚动升级中返回空数组
    * hotfixUpgradeCandidateVersions  可以升级的热补丁版本，滚动升级中返回空数组
    * hotfixRollbackCandidateVersions  可以回滚的热补丁版本，滚动升级中返回空数组
    * hotfixUpgradeInfos  hotfixUpgradeInfos
    * hotfixRollbackInfos  hotfixRollbackInfos
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeTypeList' => null,
        'rollbackEnabled' => null,
        'sourceVersion' => null,
        'targetVersion' => null,
        'rollUpgradeProgress' => null,
        'upgradeCandidateVersions' => null,
        'hotfixUpgradeCandidateVersions' => null,
        'hotfixRollbackCandidateVersions' => null,
        'hotfixUpgradeInfos' => null,
        'hotfixRollbackInfos' => null
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
    * upgradeTypeList  升级类型信息列表
    * rollbackEnabled  是否可以回滚，true可以回滚，false不可以回滚
    * sourceVersion  原版本
    * targetVersion  升级目标版本，没有在滚动升级中返回null
    * rollUpgradeProgress  rollUpgradeProgress
    * upgradeCandidateVersions  可以升级的版本，包括大小版本，滚动升级中返回空数组
    * hotfixUpgradeCandidateVersions  可以升级的热补丁版本，滚动升级中返回空数组
    * hotfixRollbackCandidateVersions  可以回滚的热补丁版本，滚动升级中返回空数组
    * hotfixUpgradeInfos  hotfixUpgradeInfos
    * hotfixRollbackInfos  hotfixRollbackInfos
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeTypeList' => 'upgrade_type_list',
            'rollbackEnabled' => 'rollback_enabled',
            'sourceVersion' => 'source_version',
            'targetVersion' => 'target_version',
            'rollUpgradeProgress' => 'roll_upgrade_progress',
            'upgradeCandidateVersions' => 'upgrade_candidate_versions',
            'hotfixUpgradeCandidateVersions' => 'hotfix_upgrade_candidate_versions',
            'hotfixRollbackCandidateVersions' => 'hotfix_rollback_candidate_versions',
            'hotfixUpgradeInfos' => 'hotfix_upgrade_infos',
            'hotfixRollbackInfos' => 'hotfix_rollback_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeTypeList  升级类型信息列表
    * rollbackEnabled  是否可以回滚，true可以回滚，false不可以回滚
    * sourceVersion  原版本
    * targetVersion  升级目标版本，没有在滚动升级中返回null
    * rollUpgradeProgress  rollUpgradeProgress
    * upgradeCandidateVersions  可以升级的版本，包括大小版本，滚动升级中返回空数组
    * hotfixUpgradeCandidateVersions  可以升级的热补丁版本，滚动升级中返回空数组
    * hotfixRollbackCandidateVersions  可以回滚的热补丁版本，滚动升级中返回空数组
    * hotfixUpgradeInfos  hotfixUpgradeInfos
    * hotfixRollbackInfos  hotfixRollbackInfos
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeTypeList' => 'setUpgradeTypeList',
            'rollbackEnabled' => 'setRollbackEnabled',
            'sourceVersion' => 'setSourceVersion',
            'targetVersion' => 'setTargetVersion',
            'rollUpgradeProgress' => 'setRollUpgradeProgress',
            'upgradeCandidateVersions' => 'setUpgradeCandidateVersions',
            'hotfixUpgradeCandidateVersions' => 'setHotfixUpgradeCandidateVersions',
            'hotfixRollbackCandidateVersions' => 'setHotfixRollbackCandidateVersions',
            'hotfixUpgradeInfos' => 'setHotfixUpgradeInfos',
            'hotfixRollbackInfos' => 'setHotfixRollbackInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeTypeList  升级类型信息列表
    * rollbackEnabled  是否可以回滚，true可以回滚，false不可以回滚
    * sourceVersion  原版本
    * targetVersion  升级目标版本，没有在滚动升级中返回null
    * rollUpgradeProgress  rollUpgradeProgress
    * upgradeCandidateVersions  可以升级的版本，包括大小版本，滚动升级中返回空数组
    * hotfixUpgradeCandidateVersions  可以升级的热补丁版本，滚动升级中返回空数组
    * hotfixRollbackCandidateVersions  可以回滚的热补丁版本，滚动升级中返回空数组
    * hotfixUpgradeInfos  hotfixUpgradeInfos
    * hotfixRollbackInfos  hotfixRollbackInfos
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeTypeList' => 'getUpgradeTypeList',
            'rollbackEnabled' => 'getRollbackEnabled',
            'sourceVersion' => 'getSourceVersion',
            'targetVersion' => 'getTargetVersion',
            'rollUpgradeProgress' => 'getRollUpgradeProgress',
            'upgradeCandidateVersions' => 'getUpgradeCandidateVersions',
            'hotfixUpgradeCandidateVersions' => 'getHotfixUpgradeCandidateVersions',
            'hotfixRollbackCandidateVersions' => 'getHotfixRollbackCandidateVersions',
            'hotfixUpgradeInfos' => 'getHotfixUpgradeInfos',
            'hotfixRollbackInfos' => 'getHotfixRollbackInfos'
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
        $this->container['upgradeTypeList'] = isset($data['upgradeTypeList']) ? $data['upgradeTypeList'] : null;
        $this->container['rollbackEnabled'] = isset($data['rollbackEnabled']) ? $data['rollbackEnabled'] : null;
        $this->container['sourceVersion'] = isset($data['sourceVersion']) ? $data['sourceVersion'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['rollUpgradeProgress'] = isset($data['rollUpgradeProgress']) ? $data['rollUpgradeProgress'] : null;
        $this->container['upgradeCandidateVersions'] = isset($data['upgradeCandidateVersions']) ? $data['upgradeCandidateVersions'] : null;
        $this->container['hotfixUpgradeCandidateVersions'] = isset($data['hotfixUpgradeCandidateVersions']) ? $data['hotfixUpgradeCandidateVersions'] : null;
        $this->container['hotfixRollbackCandidateVersions'] = isset($data['hotfixRollbackCandidateVersions']) ? $data['hotfixRollbackCandidateVersions'] : null;
        $this->container['hotfixUpgradeInfos'] = isset($data['hotfixUpgradeInfos']) ? $data['hotfixUpgradeInfos'] : null;
        $this->container['hotfixRollbackInfos'] = isset($data['hotfixRollbackInfos']) ? $data['hotfixRollbackInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceVersion']) && (mb_strlen($this->container['sourceVersion']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sourceVersion', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sourceVersion']) && (mb_strlen($this->container['sourceVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) > 1000)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be bigger than or equal to 0.";
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
    * Gets upgradeTypeList
    *  升级类型信息列表
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeTypeInfo[]|null
    */
    public function getUpgradeTypeList()
    {
        return $this->container['upgradeTypeList'];
    }

    /**
    * Sets upgradeTypeList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeTypeInfo[]|null $upgradeTypeList 升级类型信息列表
    *
    * @return $this
    */
    public function setUpgradeTypeList($upgradeTypeList)
    {
        $this->container['upgradeTypeList'] = $upgradeTypeList;
        return $this;
    }

    /**
    * Gets rollbackEnabled
    *  是否可以回滚，true可以回滚，false不可以回滚
    *
    * @return bool|null
    */
    public function getRollbackEnabled()
    {
        return $this->container['rollbackEnabled'];
    }

    /**
    * Sets rollbackEnabled
    *
    * @param bool|null $rollbackEnabled 是否可以回滚，true可以回滚，false不可以回滚
    *
    * @return $this
    */
    public function setRollbackEnabled($rollbackEnabled)
    {
        $this->container['rollbackEnabled'] = $rollbackEnabled;
        return $this;
    }

    /**
    * Gets sourceVersion
    *  原版本
    *
    * @return string|null
    */
    public function getSourceVersion()
    {
        return $this->container['sourceVersion'];
    }

    /**
    * Sets sourceVersion
    *
    * @param string|null $sourceVersion 原版本
    *
    * @return $this
    */
    public function setSourceVersion($sourceVersion)
    {
        $this->container['sourceVersion'] = $sourceVersion;
        return $this;
    }

    /**
    * Gets targetVersion
    *  升级目标版本，没有在滚动升级中返回null
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 升级目标版本，没有在滚动升级中返回null
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets rollUpgradeProgress
    *  rollUpgradeProgress
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RollUpgradeProgress|null
    */
    public function getRollUpgradeProgress()
    {
        return $this->container['rollUpgradeProgress'];
    }

    /**
    * Sets rollUpgradeProgress
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RollUpgradeProgress|null $rollUpgradeProgress rollUpgradeProgress
    *
    * @return $this
    */
    public function setRollUpgradeProgress($rollUpgradeProgress)
    {
        $this->container['rollUpgradeProgress'] = $rollUpgradeProgress;
        return $this;
    }

    /**
    * Gets upgradeCandidateVersions
    *  可以升级的版本，包括大小版本，滚动升级中返回空数组
    *
    * @return string[]|null
    */
    public function getUpgradeCandidateVersions()
    {
        return $this->container['upgradeCandidateVersions'];
    }

    /**
    * Sets upgradeCandidateVersions
    *
    * @param string[]|null $upgradeCandidateVersions 可以升级的版本，包括大小版本，滚动升级中返回空数组
    *
    * @return $this
    */
    public function setUpgradeCandidateVersions($upgradeCandidateVersions)
    {
        $this->container['upgradeCandidateVersions'] = $upgradeCandidateVersions;
        return $this;
    }

    /**
    * Gets hotfixUpgradeCandidateVersions
    *  可以升级的热补丁版本，滚动升级中返回空数组
    *
    * @return string[]|null
    */
    public function getHotfixUpgradeCandidateVersions()
    {
        return $this->container['hotfixUpgradeCandidateVersions'];
    }

    /**
    * Sets hotfixUpgradeCandidateVersions
    *
    * @param string[]|null $hotfixUpgradeCandidateVersions 可以升级的热补丁版本，滚动升级中返回空数组
    *
    * @return $this
    */
    public function setHotfixUpgradeCandidateVersions($hotfixUpgradeCandidateVersions)
    {
        $this->container['hotfixUpgradeCandidateVersions'] = $hotfixUpgradeCandidateVersions;
        return $this;
    }

    /**
    * Gets hotfixRollbackCandidateVersions
    *  可以回滚的热补丁版本，滚动升级中返回空数组
    *
    * @return string[]|null
    */
    public function getHotfixRollbackCandidateVersions()
    {
        return $this->container['hotfixRollbackCandidateVersions'];
    }

    /**
    * Sets hotfixRollbackCandidateVersions
    *
    * @param string[]|null $hotfixRollbackCandidateVersions 可以回滚的热补丁版本，滚动升级中返回空数组
    *
    * @return $this
    */
    public function setHotfixRollbackCandidateVersions($hotfixRollbackCandidateVersions)
    {
        $this->container['hotfixRollbackCandidateVersions'] = $hotfixRollbackCandidateVersions;
        return $this;
    }

    /**
    * Gets hotfixUpgradeInfos
    *  hotfixUpgradeInfos
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixUpgradeInfos|null
    */
    public function getHotfixUpgradeInfos()
    {
        return $this->container['hotfixUpgradeInfos'];
    }

    /**
    * Sets hotfixUpgradeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixUpgradeInfos|null $hotfixUpgradeInfos hotfixUpgradeInfos
    *
    * @return $this
    */
    public function setHotfixUpgradeInfos($hotfixUpgradeInfos)
    {
        $this->container['hotfixUpgradeInfos'] = $hotfixUpgradeInfos;
        return $this;
    }

    /**
    * Gets hotfixRollbackInfos
    *  hotfixRollbackInfos
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixRollbackInfos|null
    */
    public function getHotfixRollbackInfos()
    {
        return $this->container['hotfixRollbackInfos'];
    }

    /**
    * Sets hotfixRollbackInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixRollbackInfos|null $hotfixRollbackInfos hotfixRollbackInfos
    *
    * @return $this
    */
    public function setHotfixRollbackInfos($hotfixRollbackInfos)
    {
        $this->container['hotfixRollbackInfos'] = $hotfixRollbackInfos;
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

