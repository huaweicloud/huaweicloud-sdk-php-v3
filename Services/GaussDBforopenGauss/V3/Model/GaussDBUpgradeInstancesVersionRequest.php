<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GaussDBUpgradeInstancesVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GaussDBUpgradeInstancesVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  批量实例ID。
    * upgradeType  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    * targetVersion  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'upgradeType' => 'string',
            'upgradeAction' => 'string',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  批量实例ID。
    * upgradeType  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    * targetVersion  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'upgradeType' => null,
        'upgradeAction' => null,
        'targetVersion' => null
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
    * instanceIds  批量实例ID。
    * upgradeType  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    * targetVersion  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'upgradeType' => 'upgrade_type',
            'upgradeAction' => 'upgrade_action',
            'targetVersion' => 'target_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  批量实例ID。
    * upgradeType  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    * targetVersion  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'upgradeType' => 'setUpgradeType',
            'upgradeAction' => 'setUpgradeAction',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  批量实例ID。
    * upgradeType  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    * upgradeAction  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    * targetVersion  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'upgradeType' => 'getUpgradeType',
            'upgradeAction' => 'getUpgradeAction',
            'targetVersion' => 'getTargetVersion'
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
    const UPGRADE_TYPE_INPLACE = 'inplace';
    const UPGRADE_TYPE_GREY = 'grey';
    const UPGRADE_TYPE_HOTFIX = 'hotfix';
    const UPGRADE_ACTION_UPGRADE_AUTO_COMMIT = 'upgradeAutoCommit';
    const UPGRADE_ACTION_UPGRADE = 'upgrade';
    const UPGRADE_ACTION_COMMIT = 'commit';
    const UPGRADE_ACTION_ROLLBACK = 'rollback';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeTypeAllowableValues()
    {
        return [
            self::UPGRADE_TYPE_INPLACE,
            self::UPGRADE_TYPE_GREY,
            self::UPGRADE_TYPE_HOTFIX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeActionAllowableValues()
    {
        return [
            self::UPGRADE_ACTION_UPGRADE_AUTO_COMMIT,
            self::UPGRADE_ACTION_UPGRADE,
            self::UPGRADE_ACTION_COMMIT,
            self::UPGRADE_ACTION_ROLLBACK,
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['upgradeType'] = isset($data['upgradeType']) ? $data['upgradeType'] : null;
        $this->container['upgradeAction'] = isset($data['upgradeAction']) ? $data['upgradeAction'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['upgradeType'] === null) {
            $invalidProperties[] = "'upgradeType' can't be null";
        }
            $allowedValues = $this->getUpgradeTypeAllowableValues();
                if (!is_null($this->container['upgradeType']) && !in_array($this->container['upgradeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getUpgradeActionAllowableValues();
                if (!is_null($this->container['upgradeAction']) && !in_array($this->container['upgradeAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceIds
    *  批量实例ID。
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds 批量实例ID。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets upgradeType
    *  实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    *
    * @return string
    */
    public function getUpgradeType()
    {
        return $this->container['upgradeType'];
    }

    /**
    * Sets upgradeType
    *
    * @param string $upgradeType 实例升级类型，包括就地升级，灰度升级、热补丁升级三种。
    *
    * @return $this
    */
    public function setUpgradeType($upgradeType)
    {
        $this->container['upgradeType'] = $upgradeType;
        return $this;
    }

    /**
    * Gets upgradeAction
    *  实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    *
    * @return string|null
    */
    public function getUpgradeAction()
    {
        return $this->container['upgradeAction'];
    }

    /**
    * Sets upgradeAction
    *
    * @param string|null $upgradeAction 实例升级操作，就地升级无需传值。灰度升级包括升级自动提交，升级待观察，提交升级，升级回退四种。
    *
    * @return $this
    */
    public function setUpgradeAction($upgradeAction)
    {
        $this->container['upgradeAction'] = $upgradeAction;
        return $this;
    }

    /**
    * Gets targetVersion
    *  批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
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
    * @param string|null $targetVersion 批量实例升级目标版本，非必填。如果未传值灰度升级和就地升级默认升级到当前实例的优选版本，热补丁升级无需传该值，默认升级实例所有可升级热补丁。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

