<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAppInstanceRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAppInstanceRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  动作类型
    * namespace  命名空间，应用实例部署于非默认命名空间(default)时必填
    * appVersion  升级的目标版本号，动作类型为upgrade时必填
    * values  应用实例chart配置，动作类型为upgrade时必填
    * rollbackVersion  回退的目标版本号，动作类型为rollback时必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'namespace' => 'string',
            'appVersion' => 'string',
            'values' => 'object',
            'rollbackVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  动作类型
    * namespace  命名空间，应用实例部署于非默认命名空间(default)时必填
    * appVersion  升级的目标版本号，动作类型为upgrade时必填
    * values  应用实例chart配置，动作类型为upgrade时必填
    * rollbackVersion  回退的目标版本号，动作类型为rollback时必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'namespace' => null,
        'appVersion' => null,
        'values' => null,
        'rollbackVersion' => null
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
    * action  动作类型
    * namespace  命名空间，应用实例部署于非默认命名空间(default)时必填
    * appVersion  升级的目标版本号，动作类型为upgrade时必填
    * values  应用实例chart配置，动作类型为upgrade时必填
    * rollbackVersion  回退的目标版本号，动作类型为rollback时必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'namespace' => 'namespace',
            'appVersion' => 'app_version',
            'values' => 'values',
            'rollbackVersion' => 'rollback_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  动作类型
    * namespace  命名空间，应用实例部署于非默认命名空间(default)时必填
    * appVersion  升级的目标版本号，动作类型为upgrade时必填
    * values  应用实例chart配置，动作类型为upgrade时必填
    * rollbackVersion  回退的目标版本号，动作类型为rollback时必填
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'namespace' => 'setNamespace',
            'appVersion' => 'setAppVersion',
            'values' => 'setValues',
            'rollbackVersion' => 'setRollbackVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  动作类型
    * namespace  命名空间，应用实例部署于非默认命名空间(default)时必填
    * appVersion  升级的目标版本号，动作类型为upgrade时必填
    * values  应用实例chart配置，动作类型为upgrade时必填
    * rollbackVersion  回退的目标版本号，动作类型为rollback时必填
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'namespace' => 'getNamespace',
            'appVersion' => 'getAppVersion',
            'values' => 'getValues',
            'rollbackVersion' => 'getRollbackVersion'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['rollbackVersion'] = isset($data['rollbackVersion']) ? $data['rollbackVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if (!preg_match("/(upgrade|rollback)/", $this->container['action'])) {
                $invalidProperties[] = "invalid value for 'action', must be conform to the pattern /(upgrade|rollback)/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 63)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/[a-z0-9]([-a-z0-9]*[a-z0-9])?/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /[a-z0-9]([-a-z0-9]*[a-z0-9])?/.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appVersion']) && !preg_match("/[0-9]+\\.[0-9]+\\.[0-9]+/", $this->container['appVersion'])) {
                $invalidProperties[] = "invalid value for 'appVersion', must be conform to the pattern /[0-9]+\\.[0-9]+\\.[0-9]+/.";
            }
            if (!is_null($this->container['rollbackVersion']) && (mb_strlen($this->container['rollbackVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'rollbackVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['rollbackVersion']) && (mb_strlen($this->container['rollbackVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'rollbackVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rollbackVersion']) && !preg_match("/[0-9]{1,32}/", $this->container['rollbackVersion'])) {
                $invalidProperties[] = "invalid value for 'rollbackVersion', must be conform to the pattern /[0-9]{1,32}/.";
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
    * Gets action
    *  动作类型
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 动作类型
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间，应用实例部署于非默认命名空间(default)时必填
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间，应用实例部署于非默认命名空间(default)时必填
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets appVersion
    *  升级的目标版本号，动作类型为upgrade时必填
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 升级的目标版本号，动作类型为upgrade时必填
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets values
    *  应用实例chart配置，动作类型为upgrade时必填
    *
    * @return object|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param object|null $values 应用实例chart配置，动作类型为upgrade时必填
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets rollbackVersion
    *  回退的目标版本号，动作类型为rollback时必填
    *
    * @return string|null
    */
    public function getRollbackVersion()
    {
        return $this->container['rollbackVersion'];
    }

    /**
    * Sets rollbackVersion
    *
    * @param string|null $rollbackVersion 回退的目标版本号，动作类型为rollback时必填
    *
    * @return $this
    */
    public function setRollbackVersion($rollbackVersion)
    {
        $this->container['rollbackVersion'] = $rollbackVersion;
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

