<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsRquestVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsRquestVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  配置名称
    * description  描述
    * enable  是否开启
    * logGroupId  日志ID
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypePrefix  日志前缀
    * pipeAlias  日志别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'description' => 'string',
            'enable' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'logType' => 'string',
            'logTypePrefix' => 'string',
            'pipeAlias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  配置名称
    * description  描述
    * enable  是否开启
    * logGroupId  日志ID
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypePrefix  日志前缀
    * pipeAlias  日志别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'description' => null,
        'enable' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'logType' => null,
        'logTypePrefix' => null,
        'pipeAlias' => null
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
    * configName  配置名称
    * description  描述
    * enable  是否开启
    * logGroupId  日志ID
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypePrefix  日志前缀
    * pipeAlias  日志别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'description' => 'description',
            'enable' => 'enable',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'logType' => 'log_type',
            'logTypePrefix' => 'log_type_prefix',
            'pipeAlias' => 'pipe_alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  配置名称
    * description  描述
    * enable  是否开启
    * logGroupId  日志ID
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypePrefix  日志前缀
    * pipeAlias  日志别名
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'description' => 'setDescription',
            'enable' => 'setEnable',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'logType' => 'setLogType',
            'logTypePrefix' => 'setLogTypePrefix',
            'pipeAlias' => 'setPipeAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  配置名称
    * description  描述
    * enable  是否开启
    * logGroupId  日志ID
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypePrefix  日志前缀
    * pipeAlias  日志别名
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'description' => 'getDescription',
            'enable' => 'getEnable',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'logType' => 'getLogType',
            'logTypePrefix' => 'getLogTypePrefix',
            'pipeAlias' => 'getPipeAlias'
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logTypePrefix'] = isset($data['logTypePrefix']) ? $data['logTypePrefix'] : null;
        $this->container['pipeAlias'] = isset($data['pipeAlias']) ? $data['pipeAlias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) > 255)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) < 1)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) > 255)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) < 1)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 32)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['logType']) && (mb_strlen($this->container['logType']) > 255)) {
                $invalidProperties[] = "invalid value for 'logType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logType']) && (mb_strlen($this->container['logType']) < 1)) {
                $invalidProperties[] = "invalid value for 'logType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logTypePrefix']) && (mb_strlen($this->container['logTypePrefix']) > 255)) {
                $invalidProperties[] = "invalid value for 'logTypePrefix', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logTypePrefix']) && (mb_strlen($this->container['logTypePrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'logTypePrefix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be bigger than or equal to 1.";
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
    * Gets configName
    *  配置名称
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配置名称
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 是否开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志ID
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logType
    *  日志类型
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType 日志类型
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets logTypePrefix
    *  日志前缀
    *
    * @return string|null
    */
    public function getLogTypePrefix()
    {
        return $this->container['logTypePrefix'];
    }

    /**
    * Sets logTypePrefix
    *
    * @param string|null $logTypePrefix 日志前缀
    *
    * @return $this
    */
    public function setLogTypePrefix($logTypePrefix)
    {
        $this->container['logTypePrefix'] = $logTypePrefix;
        return $this;
    }

    /**
    * Gets pipeAlias
    *  日志别名
    *
    * @return string|null
    */
    public function getPipeAlias()
    {
        return $this->container['pipeAlias'];
    }

    /**
    * Sets pipeAlias
    *
    * @param string|null $pipeAlias 日志别名
    *
    * @return $this
    */
    public function setPipeAlias($pipeAlias)
    {
        $this->container['pipeAlias'] = $pipeAlias;
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

