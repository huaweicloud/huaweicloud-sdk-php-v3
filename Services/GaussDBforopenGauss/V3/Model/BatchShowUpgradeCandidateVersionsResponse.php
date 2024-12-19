<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchShowUpgradeCandidateVersionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchShowUpgradeCandidateVersionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeTypeList  升级类型信息列表。
    * targetVersion  升级目标版本，没有在滚动升级中返回null。
    * upgradeCandidateVersions  可以升级的版本，包括大小版本。
    * hotfixUpgradeInfos  可以升级的热补丁信息。
    * hotfixRollbackInfos  可以回滚的热补丁信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeTypeList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeTypeInfo[]',
            'targetVersion' => 'string',
            'upgradeCandidateVersions' => 'string[]',
            'hotfixUpgradeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]',
            'hotfixRollbackInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeTypeList  升级类型信息列表。
    * targetVersion  升级目标版本，没有在滚动升级中返回null。
    * upgradeCandidateVersions  可以升级的版本，包括大小版本。
    * hotfixUpgradeInfos  可以升级的热补丁信息。
    * hotfixRollbackInfos  可以回滚的热补丁信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeTypeList' => null,
        'targetVersion' => null,
        'upgradeCandidateVersions' => null,
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
    * upgradeTypeList  升级类型信息列表。
    * targetVersion  升级目标版本，没有在滚动升级中返回null。
    * upgradeCandidateVersions  可以升级的版本，包括大小版本。
    * hotfixUpgradeInfos  可以升级的热补丁信息。
    * hotfixRollbackInfos  可以回滚的热补丁信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeTypeList' => 'upgrade_type_list',
            'targetVersion' => 'target_version',
            'upgradeCandidateVersions' => 'upgrade_candidate_versions',
            'hotfixUpgradeInfos' => 'hotfix_upgrade_infos',
            'hotfixRollbackInfos' => 'hotfix_rollback_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeTypeList  升级类型信息列表。
    * targetVersion  升级目标版本，没有在滚动升级中返回null。
    * upgradeCandidateVersions  可以升级的版本，包括大小版本。
    * hotfixUpgradeInfos  可以升级的热补丁信息。
    * hotfixRollbackInfos  可以回滚的热补丁信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeTypeList' => 'setUpgradeTypeList',
            'targetVersion' => 'setTargetVersion',
            'upgradeCandidateVersions' => 'setUpgradeCandidateVersions',
            'hotfixUpgradeInfos' => 'setHotfixUpgradeInfos',
            'hotfixRollbackInfos' => 'setHotfixRollbackInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeTypeList  升级类型信息列表。
    * targetVersion  升级目标版本，没有在滚动升级中返回null。
    * upgradeCandidateVersions  可以升级的版本，包括大小版本。
    * hotfixUpgradeInfos  可以升级的热补丁信息。
    * hotfixRollbackInfos  可以回滚的热补丁信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeTypeList' => 'getUpgradeTypeList',
            'targetVersion' => 'getTargetVersion',
            'upgradeCandidateVersions' => 'getUpgradeCandidateVersions',
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
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['upgradeCandidateVersions'] = isset($data['upgradeCandidateVersions']) ? $data['upgradeCandidateVersions'] : null;
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
    *  升级类型信息列表。
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
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradeTypeInfo[]|null $upgradeTypeList 升级类型信息列表。
    *
    * @return $this
    */
    public function setUpgradeTypeList($upgradeTypeList)
    {
        $this->container['upgradeTypeList'] = $upgradeTypeList;
        return $this;
    }

    /**
    * Gets targetVersion
    *  升级目标版本，没有在滚动升级中返回null。
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
    * @param string|null $targetVersion 升级目标版本，没有在滚动升级中返回null。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets upgradeCandidateVersions
    *  可以升级的版本，包括大小版本。
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
    * @param string[]|null $upgradeCandidateVersions 可以升级的版本，包括大小版本。
    *
    * @return $this
    */
    public function setUpgradeCandidateVersions($upgradeCandidateVersions)
    {
        $this->container['upgradeCandidateVersions'] = $upgradeCandidateVersions;
        return $this;
    }

    /**
    * Gets hotfixUpgradeInfos
    *  可以升级的热补丁信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]|null
    */
    public function getHotfixUpgradeInfos()
    {
        return $this->container['hotfixUpgradeInfos'];
    }

    /**
    * Sets hotfixUpgradeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]|null $hotfixUpgradeInfos 可以升级的热补丁信息。
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
    *  可以回滚的热补丁信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]|null
    */
    public function getHotfixRollbackInfos()
    {
        return $this->container['hotfixRollbackInfos'];
    }

    /**
    * Sets hotfixRollbackInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HotfixInfoResult[]|null $hotfixRollbackInfos 可以回滚的热补丁信息。
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

