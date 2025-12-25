<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsResponseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsResponseVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configId  配置id
    * configName  配置名称
    * enable  是否开启
    * logGroupId  日志组Id
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypes  logTypes
    * ltsInfos  lts日志信息map
    * pipeAlias  管道别名
    * typePrefix  类型前缀
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configId' => 'string',
            'configName' => 'string',
            'enable' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'logType' => 'string',
            'logTypes' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLogTypes',
            'ltsInfos' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLtsInfos[]',
            'pipeAlias' => 'string',
            'typePrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configId  配置id
    * configName  配置名称
    * enable  是否开启
    * logGroupId  日志组Id
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypes  logTypes
    * ltsInfos  lts日志信息map
    * pipeAlias  管道别名
    * typePrefix  类型前缀
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configId' => null,
        'configName' => null,
        'enable' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'logType' => null,
        'logTypes' => null,
        'ltsInfos' => null,
        'pipeAlias' => null,
        'typePrefix' => null
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
    * configId  配置id
    * configName  配置名称
    * enable  是否开启
    * logGroupId  日志组Id
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypes  logTypes
    * ltsInfos  lts日志信息map
    * pipeAlias  管道别名
    * typePrefix  类型前缀
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configId' => 'config_id',
            'configName' => 'config_name',
            'enable' => 'enable',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'logType' => 'log_type',
            'logTypes' => 'log_types',
            'ltsInfos' => 'lts_infos',
            'pipeAlias' => 'pipe_alias',
            'typePrefix' => 'type_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configId  配置id
    * configName  配置名称
    * enable  是否开启
    * logGroupId  日志组Id
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypes  logTypes
    * ltsInfos  lts日志信息map
    * pipeAlias  管道别名
    * typePrefix  类型前缀
    *
    * @var string[]
    */
    protected static $setters = [
            'configId' => 'setConfigId',
            'configName' => 'setConfigName',
            'enable' => 'setEnable',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'logType' => 'setLogType',
            'logTypes' => 'setLogTypes',
            'ltsInfos' => 'setLtsInfos',
            'pipeAlias' => 'setPipeAlias',
            'typePrefix' => 'setTypePrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configId  配置id
    * configName  配置名称
    * enable  是否开启
    * logGroupId  日志组Id
    * logStreamId  日志流ID
    * logType  日志类型
    * logTypes  logTypes
    * ltsInfos  lts日志信息map
    * pipeAlias  管道别名
    * typePrefix  类型前缀
    *
    * @var string[]
    */
    protected static $getters = [
            'configId' => 'getConfigId',
            'configName' => 'getConfigName',
            'enable' => 'getEnable',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'logType' => 'getLogType',
            'logTypes' => 'getLogTypes',
            'ltsInfos' => 'getLtsInfos',
            'pipeAlias' => 'getPipeAlias',
            'typePrefix' => 'getTypePrefix'
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
        $this->container['configId'] = isset($data['configId']) ? $data['configId'] : null;
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logTypes'] = isset($data['logTypes']) ? $data['logTypes'] : null;
        $this->container['ltsInfos'] = isset($data['ltsInfos']) ? $data['ltsInfos'] : null;
        $this->container['pipeAlias'] = isset($data['pipeAlias']) ? $data['pipeAlias'] : null;
        $this->container['typePrefix'] = isset($data['typePrefix']) ? $data['typePrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configId']) && (mb_strlen($this->container['configId']) > 36)) {
                $invalidProperties[] = "invalid value for 'configId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['configId']) && (mb_strlen($this->container['configId']) < 32)) {
                $invalidProperties[] = "invalid value for 'configId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) > 255)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['configName']) && (mb_strlen($this->container['configName']) < 1)) {
                $invalidProperties[] = "invalid value for 'configName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) > 255)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enable']) && (mb_strlen($this->container['enable']) < 1)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 255)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 32)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['logType']) && (mb_strlen($this->container['logType']) > 36)) {
                $invalidProperties[] = "invalid value for 'logType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logType']) && (mb_strlen($this->container['logType']) < 1)) {
                $invalidProperties[] = "invalid value for 'logType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pipeAlias']) && (mb_strlen($this->container['pipeAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['typePrefix']) && (mb_strlen($this->container['typePrefix']) > 255)) {
                $invalidProperties[] = "invalid value for 'typePrefix', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['typePrefix']) && (mb_strlen($this->container['typePrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'typePrefix', the character length must be bigger than or equal to 1.";
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
    * Gets configId
    *  配置id
    *
    * @return string|null
    */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
    * Sets configId
    *
    * @param string|null $configId 配置id
    *
    * @return $this
    */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;
        return $this;
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
    *  日志组Id
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
    * @param string|null $logGroupId 日志组Id
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
    * Gets logTypes
    *  logTypes
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLogTypes|null
    */
    public function getLogTypes()
    {
        return $this->container['logTypes'];
    }

    /**
    * Sets logTypes
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLogTypes|null $logTypes logTypes
    *
    * @return $this
    */
    public function setLogTypes($logTypes)
    {
        $this->container['logTypes'] = $logTypes;
        return $this;
    }

    /**
    * Gets ltsInfos
    *  lts日志信息map
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLtsInfos[]|null
    */
    public function getLtsInfos()
    {
        return $this->container['ltsInfos'];
    }

    /**
    * Sets ltsInfos
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoLtsInfos[]|null $ltsInfos lts日志信息map
    *
    * @return $this
    */
    public function setLtsInfos($ltsInfos)
    {
        $this->container['ltsInfos'] = $ltsInfos;
        return $this;
    }

    /**
    * Gets pipeAlias
    *  管道别名
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
    * @param string|null $pipeAlias 管道别名
    *
    * @return $this
    */
    public function setPipeAlias($pipeAlias)
    {
        $this->container['pipeAlias'] = $pipeAlias;
        return $this;
    }

    /**
    * Gets typePrefix
    *  类型前缀
    *
    * @return string|null
    */
    public function getTypePrefix()
    {
        return $this->container['typePrefix'];
    }

    /**
    * Sets typePrefix
    *
    * @param string|null $typePrefix 类型前缀
    *
    * @return $this
    */
    public function setTypePrefix($typePrefix)
    {
        $this->container['typePrefix'] = $typePrefix;
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

