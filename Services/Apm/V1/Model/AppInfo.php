<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envName  环境名称。
    * envId  环境id。
    * appName  组件名称。
    * appId  组件id。
    * onlineCount  在线探针数。
    * disableCount  手动停止探针数。
    * offlineCount  离线探针数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envName' => 'string',
            'envId' => 'int',
            'appName' => 'string',
            'appId' => 'int',
            'onlineCount' => 'int',
            'disableCount' => 'int',
            'offlineCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envName  环境名称。
    * envId  环境id。
    * appName  组件名称。
    * appId  组件id。
    * onlineCount  在线探针数。
    * disableCount  手动停止探针数。
    * offlineCount  离线探针数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envName' => null,
        'envId' => 'int64',
        'appName' => null,
        'appId' => 'int64',
        'onlineCount' => 'int32',
        'disableCount' => 'int32',
        'offlineCount' => 'int32'
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
    * envName  环境名称。
    * envId  环境id。
    * appName  组件名称。
    * appId  组件id。
    * onlineCount  在线探针数。
    * disableCount  手动停止探针数。
    * offlineCount  离线探针数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envName' => 'env_name',
            'envId' => 'env_id',
            'appName' => 'app_name',
            'appId' => 'app_id',
            'onlineCount' => 'online_count',
            'disableCount' => 'disable_count',
            'offlineCount' => 'offline_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envName  环境名称。
    * envId  环境id。
    * appName  组件名称。
    * appId  组件id。
    * onlineCount  在线探针数。
    * disableCount  手动停止探针数。
    * offlineCount  离线探针数。
    *
    * @var string[]
    */
    protected static $setters = [
            'envName' => 'setEnvName',
            'envId' => 'setEnvId',
            'appName' => 'setAppName',
            'appId' => 'setAppId',
            'onlineCount' => 'setOnlineCount',
            'disableCount' => 'setDisableCount',
            'offlineCount' => 'setOfflineCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envName  环境名称。
    * envId  环境id。
    * appName  组件名称。
    * appId  组件id。
    * onlineCount  在线探针数。
    * disableCount  手动停止探针数。
    * offlineCount  离线探针数。
    *
    * @var string[]
    */
    protected static $getters = [
            'envName' => 'getEnvName',
            'envId' => 'getEnvId',
            'appName' => 'getAppName',
            'appId' => 'getAppId',
            'onlineCount' => 'getOnlineCount',
            'disableCount' => 'getDisableCount',
            'offlineCount' => 'getOfflineCount'
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
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['onlineCount'] = isset($data['onlineCount']) ? $data['onlineCount'] : null;
        $this->container['disableCount'] = isset($data['disableCount']) ? $data['disableCount'] : null;
        $this->container['offlineCount'] = isset($data['offlineCount']) ? $data['offlineCount'] : null;
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
    * Gets envName
    *  环境名称。
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境名称。
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
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
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appId
    *  组件id。
    *
    * @return int|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param int|null $appId 组件id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets onlineCount
    *  在线探针数。
    *
    * @return int|null
    */
    public function getOnlineCount()
    {
        return $this->container['onlineCount'];
    }

    /**
    * Sets onlineCount
    *
    * @param int|null $onlineCount 在线探针数。
    *
    * @return $this
    */
    public function setOnlineCount($onlineCount)
    {
        $this->container['onlineCount'] = $onlineCount;
        return $this;
    }

    /**
    * Gets disableCount
    *  手动停止探针数。
    *
    * @return int|null
    */
    public function getDisableCount()
    {
        return $this->container['disableCount'];
    }

    /**
    * Sets disableCount
    *
    * @param int|null $disableCount 手动停止探针数。
    *
    * @return $this
    */
    public function setDisableCount($disableCount)
    {
        $this->container['disableCount'] = $disableCount;
        return $this;
    }

    /**
    * Gets offlineCount
    *  离线探针数。
    *
    * @return int|null
    */
    public function getOfflineCount()
    {
        return $this->container['offlineCount'];
    }

    /**
    * Sets offlineCount
    *
    * @param int|null $offlineCount 离线探针数。
    *
    * @return $this
    */
    public function setOfflineCount($offlineCount)
    {
        $this->container['offlineCount'] = $offlineCount;
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

