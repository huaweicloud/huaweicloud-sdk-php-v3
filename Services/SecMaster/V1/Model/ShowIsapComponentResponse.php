<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIsapComponentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIsapComponentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * createTime  毫秒时间戳
    * description  相关描述
    * historyVersion  历史版本
    * maintainer  保持
    * timeZone  时区
    * updateTime  毫秒时间戳
    * upgrade  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    * upgradeFailMessage  更新失败的消息
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'componentName' => 'string',
            'createTime' => 'int',
            'description' => 'string',
            'historyVersion' => 'string',
            'maintainer' => 'string',
            'timeZone' => 'string',
            'updateTime' => 'int',
            'upgrade' => 'string',
            'upgradeFailMessage' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * createTime  毫秒时间戳
    * description  相关描述
    * historyVersion  历史版本
    * maintainer  保持
    * timeZone  时区
    * updateTime  毫秒时间戳
    * upgrade  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    * upgradeFailMessage  更新失败的消息
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'componentName' => null,
        'createTime' => 'int64',
        'description' => null,
        'historyVersion' => null,
        'maintainer' => null,
        'timeZone' => null,
        'updateTime' => 'int64',
        'upgrade' => null,
        'upgradeFailMessage' => null,
        'version' => null
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
    * componentId  组件id.
    * componentName  组件名称
    * createTime  毫秒时间戳
    * description  相关描述
    * historyVersion  历史版本
    * maintainer  保持
    * timeZone  时区
    * updateTime  毫秒时间戳
    * upgrade  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    * upgradeFailMessage  更新失败的消息
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'componentName' => 'component_name',
            'createTime' => 'create_time',
            'description' => 'description',
            'historyVersion' => 'history_version',
            'maintainer' => 'maintainer',
            'timeZone' => 'time_zone',
            'updateTime' => 'update_time',
            'upgrade' => 'upgrade',
            'upgradeFailMessage' => 'upgrade_fail_message',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  组件id.
    * componentName  组件名称
    * createTime  毫秒时间戳
    * description  相关描述
    * historyVersion  历史版本
    * maintainer  保持
    * timeZone  时区
    * updateTime  毫秒时间戳
    * upgrade  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    * upgradeFailMessage  更新失败的消息
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'createTime' => 'setCreateTime',
            'description' => 'setDescription',
            'historyVersion' => 'setHistoryVersion',
            'maintainer' => 'setMaintainer',
            'timeZone' => 'setTimeZone',
            'updateTime' => 'setUpdateTime',
            'upgrade' => 'setUpgrade',
            'upgradeFailMessage' => 'setUpgradeFailMessage',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  组件id.
    * componentName  组件名称
    * createTime  毫秒时间戳
    * description  相关描述
    * historyVersion  历史版本
    * maintainer  保持
    * timeZone  时区
    * updateTime  毫秒时间戳
    * upgrade  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    * upgradeFailMessage  更新失败的消息
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'createTime' => 'getCreateTime',
            'description' => 'getDescription',
            'historyVersion' => 'getHistoryVersion',
            'maintainer' => 'getMaintainer',
            'timeZone' => 'getTimeZone',
            'updateTime' => 'getUpdateTime',
            'upgrade' => 'getUpgrade',
            'upgradeFailMessage' => 'getUpgradeFailMessage',
            'version' => 'getVersion'
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
    const UPGRADE_NEED_UPGRADE = 'NEED_UPGRADE';
    const UPGRADE_UPGRADING = 'UPGRADING';
    const UPGRADE_SUCCESS_UPGRADE = 'SUCCESS_UPGRADE';
    const UPGRADE_FAIL_UPGRADE = 'FAIL_UPGRADE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradeAllowableValues()
    {
        return [
            self::UPGRADE_NEED_UPGRADE,
            self::UPGRADE_UPGRADING,
            self::UPGRADE_SUCCESS_UPGRADE,
            self::UPGRADE_FAIL_UPGRADE,
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['historyVersion'] = isset($data['historyVersion']) ? $data['historyVersion'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['upgrade'] = isset($data['upgrade']) ? $data['upgrade'] : null;
        $this->container['upgradeFailMessage'] = isset($data['upgradeFailMessage']) ? $data['upgradeFailMessage'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['historyVersion']) && (mb_strlen($this->container['historyVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'historyVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['historyVersion']) && (mb_strlen($this->container['historyVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'historyVersion', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['maintainer']) && (mb_strlen($this->container['maintainer']) > 1024)) {
                $invalidProperties[] = "invalid value for 'maintainer', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['maintainer']) && (mb_strlen($this->container['maintainer']) < 1)) {
                $invalidProperties[] = "invalid value for 'maintainer', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 40)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 3)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUpgradeAllowableValues();
                if (!is_null($this->container['upgrade']) && !in_array($this->container['upgrade'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgrade', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['upgradeFailMessage']) && (mb_strlen($this->container['upgradeFailMessage']) > 256)) {
                $invalidProperties[] = "invalid value for 'upgradeFailMessage', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['upgradeFailMessage']) && (mb_strlen($this->container['upgradeFailMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'upgradeFailMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
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
    * Gets componentId
    *  组件id.
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id.
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名称
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 毫秒时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets description
    *  相关描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 相关描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets historyVersion
    *  历史版本
    *
    * @return string|null
    */
    public function getHistoryVersion()
    {
        return $this->container['historyVersion'];
    }

    /**
    * Sets historyVersion
    *
    * @param string|null $historyVersion 历史版本
    *
    * @return $this
    */
    public function setHistoryVersion($historyVersion)
    {
        $this->container['historyVersion'] = $historyVersion;
        return $this;
    }

    /**
    * Gets maintainer
    *  保持
    *
    * @return string|null
    */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
    * Sets maintainer
    *
    * @param string|null $maintainer 保持
    *
    * @return $this
    */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets updateTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets upgrade
    *  **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getUpgrade()
    {
        return $this->container['upgrade'];
    }

    /**
    * Sets upgrade
    *
    * @param string|null $upgrade **参数解释**: 升级 - NEED_UPGRADE 需要升级 - UPGRADING 升级中 - SUCCESS_UPGRADE 升级成功 - FAIL_UPGRADE 升级失败  **约束限制** 不涉及 **取值范围**: - NEED_UPGRADE - UPGRADING - SUCCESS_UPGRADE - FAIL_UPGRADE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setUpgrade($upgrade)
    {
        $this->container['upgrade'] = $upgrade;
        return $this;
    }

    /**
    * Gets upgradeFailMessage
    *  更新失败的消息
    *
    * @return string|null
    */
    public function getUpgradeFailMessage()
    {
        return $this->container['upgradeFailMessage'];
    }

    /**
    * Sets upgradeFailMessage
    *
    * @param string|null $upgradeFailMessage 更新失败的消息
    *
    * @return $this
    */
    public function setUpgradeFailMessage($upgradeFailMessage)
    {
        $this->container['upgradeFailMessage'] = $upgradeFailMessage;
        return $this;
    }

    /**
    * Gets version
    *  安全云脑版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 安全云脑版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

