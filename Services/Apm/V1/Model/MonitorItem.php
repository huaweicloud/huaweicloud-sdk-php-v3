<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MonitorItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MonitorItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  监控项id。
    * envId  环境id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * displayName  采集器展示名称。
    * collectInterval  采集间隔。
    * disabled  是否禁用。
    * statusChangeUserId  修改采集状态用户id。
    * statusChangeUserName  修改采集状态用户名称。
    * statusChangeTime  修改采集状态时间。
    * configChangeUserId  修改采集配置用户id。
    * configChangeUserName  修改采集配置用户名称。
    * configChangeTime  修改采集配置时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'envId' => 'int',
            'collectorId' => 'int',
            'collectorName' => 'string',
            'displayName' => 'string',
            'collectInterval' => 'int',
            'disabled' => 'bool',
            'statusChangeUserId' => 'string',
            'statusChangeUserName' => 'string',
            'statusChangeTime' => 'string',
            'configChangeUserId' => 'string',
            'configChangeUserName' => 'string',
            'configChangeTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  监控项id。
    * envId  环境id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * displayName  采集器展示名称。
    * collectInterval  采集间隔。
    * disabled  是否禁用。
    * statusChangeUserId  修改采集状态用户id。
    * statusChangeUserName  修改采集状态用户名称。
    * statusChangeTime  修改采集状态时间。
    * configChangeUserId  修改采集配置用户id。
    * configChangeUserName  修改采集配置用户名称。
    * configChangeTime  修改采集配置时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'envId' => 'int64',
        'collectorId' => 'int32',
        'collectorName' => null,
        'displayName' => null,
        'collectInterval' => 'int32',
        'disabled' => null,
        'statusChangeUserId' => null,
        'statusChangeUserName' => null,
        'statusChangeTime' => null,
        'configChangeUserId' => null,
        'configChangeUserName' => null,
        'configChangeTime' => null
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
    * id  监控项id。
    * envId  环境id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * displayName  采集器展示名称。
    * collectInterval  采集间隔。
    * disabled  是否禁用。
    * statusChangeUserId  修改采集状态用户id。
    * statusChangeUserName  修改采集状态用户名称。
    * statusChangeTime  修改采集状态时间。
    * configChangeUserId  修改采集配置用户id。
    * configChangeUserName  修改采集配置用户名称。
    * configChangeTime  修改采集配置时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'envId' => 'env_id',
            'collectorId' => 'collector_id',
            'collectorName' => 'collector_name',
            'displayName' => 'display_name',
            'collectInterval' => 'collect_interval',
            'disabled' => 'disabled',
            'statusChangeUserId' => 'status_change_user_id',
            'statusChangeUserName' => 'status_change_user_name',
            'statusChangeTime' => 'status_change_time',
            'configChangeUserId' => 'config_change_user_id',
            'configChangeUserName' => 'config_change_user_name',
            'configChangeTime' => 'config_change_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  监控项id。
    * envId  环境id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * displayName  采集器展示名称。
    * collectInterval  采集间隔。
    * disabled  是否禁用。
    * statusChangeUserId  修改采集状态用户id。
    * statusChangeUserName  修改采集状态用户名称。
    * statusChangeTime  修改采集状态时间。
    * configChangeUserId  修改采集配置用户id。
    * configChangeUserName  修改采集配置用户名称。
    * configChangeTime  修改采集配置时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'envId' => 'setEnvId',
            'collectorId' => 'setCollectorId',
            'collectorName' => 'setCollectorName',
            'displayName' => 'setDisplayName',
            'collectInterval' => 'setCollectInterval',
            'disabled' => 'setDisabled',
            'statusChangeUserId' => 'setStatusChangeUserId',
            'statusChangeUserName' => 'setStatusChangeUserName',
            'statusChangeTime' => 'setStatusChangeTime',
            'configChangeUserId' => 'setConfigChangeUserId',
            'configChangeUserName' => 'setConfigChangeUserName',
            'configChangeTime' => 'setConfigChangeTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  监控项id。
    * envId  环境id。
    * collectorId  采集器id。
    * collectorName  采集器名称。
    * displayName  采集器展示名称。
    * collectInterval  采集间隔。
    * disabled  是否禁用。
    * statusChangeUserId  修改采集状态用户id。
    * statusChangeUserName  修改采集状态用户名称。
    * statusChangeTime  修改采集状态时间。
    * configChangeUserId  修改采集配置用户id。
    * configChangeUserName  修改采集配置用户名称。
    * configChangeTime  修改采集配置时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'envId' => 'getEnvId',
            'collectorId' => 'getCollectorId',
            'collectorName' => 'getCollectorName',
            'displayName' => 'getDisplayName',
            'collectInterval' => 'getCollectInterval',
            'disabled' => 'getDisabled',
            'statusChangeUserId' => 'getStatusChangeUserId',
            'statusChangeUserName' => 'getStatusChangeUserName',
            'statusChangeTime' => 'getStatusChangeTime',
            'configChangeUserId' => 'getConfigChangeUserId',
            'configChangeUserName' => 'getConfigChangeUserName',
            'configChangeTime' => 'getConfigChangeTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['collectorId'] = isset($data['collectorId']) ? $data['collectorId'] : null;
        $this->container['collectorName'] = isset($data['collectorName']) ? $data['collectorName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['collectInterval'] = isset($data['collectInterval']) ? $data['collectInterval'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['statusChangeUserId'] = isset($data['statusChangeUserId']) ? $data['statusChangeUserId'] : null;
        $this->container['statusChangeUserName'] = isset($data['statusChangeUserName']) ? $data['statusChangeUserName'] : null;
        $this->container['statusChangeTime'] = isset($data['statusChangeTime']) ? $data['statusChangeTime'] : null;
        $this->container['configChangeUserId'] = isset($data['configChangeUserId']) ? $data['configChangeUserId'] : null;
        $this->container['configChangeUserName'] = isset($data['configChangeUserName']) ? $data['configChangeUserName'] : null;
        $this->container['configChangeTime'] = isset($data['configChangeTime']) ? $data['configChangeTime'] : null;
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
    * Gets id
    *  监控项id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 监控项id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets collectorId
    *  采集器id。
    *
    * @return int|null
    */
    public function getCollectorId()
    {
        return $this->container['collectorId'];
    }

    /**
    * Sets collectorId
    *
    * @param int|null $collectorId 采集器id。
    *
    * @return $this
    */
    public function setCollectorId($collectorId)
    {
        $this->container['collectorId'] = $collectorId;
        return $this;
    }

    /**
    * Gets collectorName
    *  采集器名称。
    *
    * @return string|null
    */
    public function getCollectorName()
    {
        return $this->container['collectorName'];
    }

    /**
    * Sets collectorName
    *
    * @param string|null $collectorName 采集器名称。
    *
    * @return $this
    */
    public function setCollectorName($collectorName)
    {
        $this->container['collectorName'] = $collectorName;
        return $this;
    }

    /**
    * Gets displayName
    *  采集器展示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 采集器展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets collectInterval
    *  采集间隔。
    *
    * @return int|null
    */
    public function getCollectInterval()
    {
        return $this->container['collectInterval'];
    }

    /**
    * Sets collectInterval
    *
    * @param int|null $collectInterval 采集间隔。
    *
    * @return $this
    */
    public function setCollectInterval($collectInterval)
    {
        $this->container['collectInterval'] = $collectInterval;
        return $this;
    }

    /**
    * Gets disabled
    *  是否禁用。
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否禁用。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets statusChangeUserId
    *  修改采集状态用户id。
    *
    * @return string|null
    */
    public function getStatusChangeUserId()
    {
        return $this->container['statusChangeUserId'];
    }

    /**
    * Sets statusChangeUserId
    *
    * @param string|null $statusChangeUserId 修改采集状态用户id。
    *
    * @return $this
    */
    public function setStatusChangeUserId($statusChangeUserId)
    {
        $this->container['statusChangeUserId'] = $statusChangeUserId;
        return $this;
    }

    /**
    * Gets statusChangeUserName
    *  修改采集状态用户名称。
    *
    * @return string|null
    */
    public function getStatusChangeUserName()
    {
        return $this->container['statusChangeUserName'];
    }

    /**
    * Sets statusChangeUserName
    *
    * @param string|null $statusChangeUserName 修改采集状态用户名称。
    *
    * @return $this
    */
    public function setStatusChangeUserName($statusChangeUserName)
    {
        $this->container['statusChangeUserName'] = $statusChangeUserName;
        return $this;
    }

    /**
    * Gets statusChangeTime
    *  修改采集状态时间。
    *
    * @return string|null
    */
    public function getStatusChangeTime()
    {
        return $this->container['statusChangeTime'];
    }

    /**
    * Sets statusChangeTime
    *
    * @param string|null $statusChangeTime 修改采集状态时间。
    *
    * @return $this
    */
    public function setStatusChangeTime($statusChangeTime)
    {
        $this->container['statusChangeTime'] = $statusChangeTime;
        return $this;
    }

    /**
    * Gets configChangeUserId
    *  修改采集配置用户id。
    *
    * @return string|null
    */
    public function getConfigChangeUserId()
    {
        return $this->container['configChangeUserId'];
    }

    /**
    * Sets configChangeUserId
    *
    * @param string|null $configChangeUserId 修改采集配置用户id。
    *
    * @return $this
    */
    public function setConfigChangeUserId($configChangeUserId)
    {
        $this->container['configChangeUserId'] = $configChangeUserId;
        return $this;
    }

    /**
    * Gets configChangeUserName
    *  修改采集配置用户名称。
    *
    * @return string|null
    */
    public function getConfigChangeUserName()
    {
        return $this->container['configChangeUserName'];
    }

    /**
    * Sets configChangeUserName
    *
    * @param string|null $configChangeUserName 修改采集配置用户名称。
    *
    * @return $this
    */
    public function setConfigChangeUserName($configChangeUserName)
    {
        $this->container['configChangeUserName'] = $configChangeUserName;
        return $this;
    }

    /**
    * Gets configChangeTime
    *  修改采集配置时间。
    *
    * @return string|null
    */
    public function getConfigChangeTime()
    {
        return $this->container['configChangeTime'];
    }

    /**
    * Sets configChangeTime
    *
    * @param string|null $configChangeTime 修改采集配置时间。
    *
    * @return $this
    */
    public function setConfigChangeTime($configChangeTime)
    {
        $this->container['configChangeTime'] = $configChangeTime;
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

