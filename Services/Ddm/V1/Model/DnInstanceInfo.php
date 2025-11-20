<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * accessHost  ip。
    * accessPort  端口。
    * engine  引擎。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'accessHost' => 'string',
            'accessPort' => 'int',
            'engine' => 'string',
            'engineVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * accessHost  ip。
    * accessPort  端口。
    * engine  引擎。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'accessHost' => null,
        'accessPort' => null,
        'engine' => null,
        'engineVersion' => null
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * accessHost  ip。
    * accessPort  端口。
    * engine  引擎。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'accessHost' => 'access_host',
            'accessPort' => 'access_port',
            'engine' => 'engine',
            'engineVersion' => 'engine_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id。
    * instanceName  实例名称。
    * accessHost  ip。
    * accessPort  端口。
    * engine  引擎。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'accessHost' => 'setAccessHost',
            'accessPort' => 'setAccessPort',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id。
    * instanceName  实例名称。
    * accessHost  ip。
    * accessPort  端口。
    * engine  引擎。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'accessHost' => 'getAccessHost',
            'accessPort' => 'getAccessPort',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['accessHost'] = isset($data['accessHost']) ? $data['accessHost'] : null;
        $this->container['accessPort'] = isset($data['accessPort']) ? $data['accessPort'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessHost']) && (mb_strlen($this->container['accessHost']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessHost', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessHost']) && (mb_strlen($this->container['accessHost']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessHost', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engine']) && (mb_strlen($this->container['engine']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engine', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['engine']) && (mb_strlen($this->container['engine']) < 1)) {
                $invalidProperties[] = "invalid value for 'engine', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets accessHost
    *  ip。
    *
    * @return string|null
    */
    public function getAccessHost()
    {
        return $this->container['accessHost'];
    }

    /**
    * Sets accessHost
    *
    * @param string|null $accessHost ip。
    *
    * @return $this
    */
    public function setAccessHost($accessHost)
    {
        $this->container['accessHost'] = $accessHost;
        return $this;
    }

    /**
    * Gets accessPort
    *  端口。
    *
    * @return int|null
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param int|null $accessPort 端口。
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets engine
    *  引擎。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 引擎。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
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

