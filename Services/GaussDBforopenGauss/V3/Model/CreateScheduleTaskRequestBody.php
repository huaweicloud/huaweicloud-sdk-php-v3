<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateScheduleTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateScheduleTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  实例ID列表。
    * startTime  任务开始时间。
    * upgradeType  实例升级类型。
    * upgradeAction  实例升级操作。
    * targetVersion  实例升级目标版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'startTime' => 'string',
            'upgradeType' => 'string',
            'upgradeAction' => 'string',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  实例ID列表。
    * startTime  任务开始时间。
    * upgradeType  实例升级类型。
    * upgradeAction  实例升级操作。
    * targetVersion  实例升级目标版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'startTime' => null,
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
    * instanceIds  实例ID列表。
    * startTime  任务开始时间。
    * upgradeType  实例升级类型。
    * upgradeAction  实例升级操作。
    * targetVersion  实例升级目标版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'startTime' => 'start_time',
            'upgradeType' => 'upgrade_type',
            'upgradeAction' => 'upgrade_action',
            'targetVersion' => 'target_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  实例ID列表。
    * startTime  任务开始时间。
    * upgradeType  实例升级类型。
    * upgradeAction  实例升级操作。
    * targetVersion  实例升级目标版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'startTime' => 'setStartTime',
            'upgradeType' => 'setUpgradeType',
            'upgradeAction' => 'setUpgradeAction',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  实例ID列表。
    * startTime  任务开始时间。
    * upgradeType  实例升级类型。
    * upgradeAction  实例升级操作。
    * targetVersion  实例升级目标版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'startTime' => 'getStartTime',
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
    const UPGRADE_TYPE_HOTFIX = 'hotfix';
    const UPGRADE_ACTION_UPGRADE_AUTO_COMMIT = 'upgradeAutoCommit';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeTypeAllowableValues()
    {
        return [
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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

        if ($this->container['upgradeAction'] === null) {
            $invalidProperties[] = "'upgradeAction' can't be null";
        }
            $allowedValues = $this->getUpgradeActionAllowableValues();
                if (!is_null($this->container['upgradeAction']) && !in_array($this->container['upgradeAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradeAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
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
    *  实例ID列表。
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
    * @param string[] $instanceIds 实例ID列表。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 任务开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets upgradeType
    *  实例升级类型。
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
    * @param string $upgradeType 实例升级类型。
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
    *  实例升级操作。
    *
    * @return string
    */
    public function getUpgradeAction()
    {
        return $this->container['upgradeAction'];
    }

    /**
    * Sets upgradeAction
    *
    * @param string $upgradeAction 实例升级操作。
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
    *  实例升级目标版本。
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion 实例升级目标版本。
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

