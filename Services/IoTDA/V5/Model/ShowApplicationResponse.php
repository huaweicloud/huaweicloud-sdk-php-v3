<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appName' => 'string',
            'createTime' => 'string',
            'defaultApp' => 'bool',
            'appType' => 'string',
            'username' => 'string',
            'permission' => 'string',
            'lastInstanceId' => 'string',
            'currentInstanceId' => 'string',
            'serviceName' => 'string',
            'freezed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appName' => null,
        'createTime' => null,
        'defaultApp' => null,
        'appType' => null,
        'username' => null,
        'permission' => null,
        'lastInstanceId' => null,
        'currentInstanceId' => null,
        'serviceName' => null,
        'freezed' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appName' => 'app_name',
            'createTime' => 'create_time',
            'defaultApp' => 'default_app',
            'appType' => 'app_type',
            'username' => 'username',
            'permission' => 'permission',
            'lastInstanceId' => 'last_instance_id',
            'currentInstanceId' => 'current_instance_id',
            'serviceName' => 'service_name',
            'freezed' => 'freezed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'createTime' => 'setCreateTime',
            'defaultApp' => 'setDefaultApp',
            'appType' => 'setAppType',
            'username' => 'setUsername',
            'permission' => 'setPermission',
            'lastInstanceId' => 'setLastInstanceId',
            'currentInstanceId' => 'setCurrentInstanceId',
            'serviceName' => 'setServiceName',
            'freezed' => 'setFreezed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'createTime' => 'getCreateTime',
            'defaultApp' => 'getDefaultApp',
            'appType' => 'getAppType',
            'username' => 'getUsername',
            'permission' => 'getPermission',
            'lastInstanceId' => 'getLastInstanceId',
            'currentInstanceId' => 'getCurrentInstanceId',
            'serviceName' => 'getServiceName',
            'freezed' => 'getFreezed'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['defaultApp'] = isset($data['defaultApp']) ? $data['defaultApp'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['lastInstanceId'] = isset($data['lastInstanceId']) ? $data['lastInstanceId'] : null;
        $this->container['currentInstanceId'] = isset($data['currentInstanceId']) ? $data['currentInstanceId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['freezed'] = isset($data['freezed']) ? $data['freezed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 64)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 32)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 64)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 0)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) > 64)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) < 0)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastInstanceId']) && (mb_strlen($this->container['lastInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastInstanceId']) && (mb_strlen($this->container['lastInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentInstanceId']) && (mb_strlen($this->container['currentInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentInstanceId']) && (mb_strlen($this->container['currentInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 0.";
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
    * Gets appId
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 资源空间ID，唯一标识一个资源空间，由物联网平台在创建资源空间时分配。资源空间对应的是物联网平台原有的应用，在物联网平台的含义与应用一致，只是变更了名称。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
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
    * @param string|null $appName 资源空间名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets createTime
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 资源空间创建时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets defaultApp
    *
    * @return bool|null
    */
    public function getDefaultApp()
    {
        return $this->container['defaultApp'];
    }

    /**
    * Sets defaultApp
    *
    * @param bool|null $defaultApp 是否为默认资源空间
    *
    * @return $this
    */
    public function setDefaultApp($defaultApp)
    {
        $this->container['defaultApp'] = $defaultApp;
        return $this;
    }

    /**
    * Gets appType
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType app的类型，标准版：Junior | 高级版：Normal
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets username
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 用户名。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets permission
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission app与用户的授权关系时，响应为：all | bind | edit | query ，其中bind权限类似于ALL权限，属于子用户权限。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets lastInstanceId
    *
    * @return string|null
    */
    public function getLastInstanceId()
    {
        return $this->container['lastInstanceId'];
    }

    /**
    * Sets lastInstanceId
    *
    * @param string|null $lastInstanceId 迁移前实例ID。
    *
    * @return $this
    */
    public function setLastInstanceId($lastInstanceId)
    {
        $this->container['lastInstanceId'] = $lastInstanceId;
        return $this;
    }

    /**
    * Gets currentInstanceId
    *
    * @return string|null
    */
    public function getCurrentInstanceId()
    {
        return $this->container['currentInstanceId'];
    }

    /**
    * Sets currentInstanceId
    *
    * @param string|null $currentInstanceId 当前实例ID。
    *
    * @return $this
    */
    public function setCurrentInstanceId($currentInstanceId)
    {
        $this->container['currentInstanceId'] = $currentInstanceId;
        return $this;
    }

    /**
    * Gets serviceName
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 对接的服务名
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets freezed
    *
    * @return bool|null
    */
    public function getFreezed()
    {
        return $this->container['freezed'];
    }

    /**
    * Sets freezed
    *
    * @param bool|null $freezed 是否冻结
    *
    * @return $this
    */
    public function setFreezed($freezed)
    {
        $this->container['freezed'] = $freezed;
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

