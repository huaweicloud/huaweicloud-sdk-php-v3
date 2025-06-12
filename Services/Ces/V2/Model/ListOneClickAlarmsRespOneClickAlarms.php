<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOneClickAlarmsRespOneClickAlarms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOneClickAlarmsResp_one_click_alarms';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oneClickAlarmId  一键告警ID
    * namespace  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * description  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    * enabled  是否启用一键告警。true:开启，false：关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oneClickAlarmId' => 'string',
            'namespace' => 'string',
            'description' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oneClickAlarmId  一键告警ID
    * namespace  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * description  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    * enabled  是否启用一键告警。true:开启，false：关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oneClickAlarmId' => null,
        'namespace' => null,
        'description' => null,
        'enabled' => null
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
    * oneClickAlarmId  一键告警ID
    * namespace  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * description  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    * enabled  是否启用一键告警。true:开启，false：关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oneClickAlarmId' => 'one_click_alarm_id',
            'namespace' => 'namespace',
            'description' => 'description',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oneClickAlarmId  一键告警ID
    * namespace  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * description  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    * enabled  是否启用一键告警。true:开启，false：关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'oneClickAlarmId' => 'setOneClickAlarmId',
            'namespace' => 'setNamespace',
            'description' => 'setDescription',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oneClickAlarmId  一键告警ID
    * namespace  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * description  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    * enabled  是否启用一键告警。true:开启，false：关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'oneClickAlarmId' => 'getOneClickAlarmId',
            'namespace' => 'getNamespace',
            'description' => 'getDescription',
            'enabled' => 'getEnabled'
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
        $this->container['oneClickAlarmId'] = isset($data['oneClickAlarmId']) ? $data['oneClickAlarmId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oneClickAlarmId'] === null) {
            $invalidProperties[] = "'oneClickAlarmId' can't be null";
        }
            if ((mb_strlen($this->container['oneClickAlarmId']) > 64)) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['oneClickAlarmId']) < 1)) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]|[0-9]){1,64}$/", $this->container['oneClickAlarmId'])) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]){1,64}$/.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets oneClickAlarmId
    *  一键告警ID
    *
    * @return string
    */
    public function getOneClickAlarmId()
    {
        return $this->container['oneClickAlarmId'];
    }

    /**
    * Sets oneClickAlarmId
    *
    * @param string $oneClickAlarmId 一键告警ID
    *
    * @return $this
    */
    public function setOneClickAlarmId($oneClickAlarmId)
    {
        $this->container['oneClickAlarmId'] = $oneClickAlarmId;
        return $this;
    }

    /**
    * Gets namespace
    *  服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 服务的命名空间，查询各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets description
    *  一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 一键告警描述，长度范围[0,256]，该字段默认值为空字符串
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用一键告警。true:开启，false：关闭。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否启用一键告警。true:开启，false：关闭。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

