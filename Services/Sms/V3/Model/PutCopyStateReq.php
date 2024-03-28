<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutCopyStateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutCopyStateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * copystate  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    * migrationcycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'copystate' => 'string',
            'migrationcycle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * copystate  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    * migrationcycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'copystate' => null,
        'migrationcycle' => null
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
    * copystate  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    * migrationcycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'copystate' => 'copystate',
            'migrationcycle' => 'migrationcycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * copystate  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    * migrationcycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $setters = [
            'copystate' => 'setCopystate',
            'migrationcycle' => 'setMigrationcycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * copystate  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    * migrationcycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @var string[]
    */
    protected static $getters = [
            'copystate' => 'getCopystate',
            'migrationcycle' => 'getMigrationcycle'
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
    const COPYSTATE_UNAVAILABLE = 'UNAVAILABLE';
    const COPYSTATE_WAITING = 'WAITING';
    const COPYSTATE_INIT = 'INIT';
    const COPYSTATE_REPLICATE = 'REPLICATE';
    const COPYSTATE_SYNCING = 'SYNCING';
    const COPYSTATE_STOPPING = 'STOPPING';
    const COPYSTATE_STOPPED = 'STOPPED';
    const COPYSTATE_DELETING = 'DELETING';
    const COPYSTATE_ERROR = 'ERROR';
    const COPYSTATE_CLONING = 'CLONING';
    const COPYSTATE_CUTOVERING = 'CUTOVERING';
    const COPYSTATE_FINISHED = 'FINISHED';
    const MIGRATIONCYCLE_CUTOVERING = 'cutovering';
    const MIGRATIONCYCLE_CUTOVERED = 'cutovered';
    const MIGRATIONCYCLE_CHECKING = 'checking';
    const MIGRATIONCYCLE_SETTING = 'setting';
    const MIGRATIONCYCLE_REPLICATING = 'replicating';
    const MIGRATIONCYCLE_SYNCING = 'syncing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCopystateAllowableValues()
    {
        return [
            self::COPYSTATE_UNAVAILABLE,
            self::COPYSTATE_WAITING,
            self::COPYSTATE_INIT,
            self::COPYSTATE_REPLICATE,
            self::COPYSTATE_SYNCING,
            self::COPYSTATE_STOPPING,
            self::COPYSTATE_STOPPED,
            self::COPYSTATE_DELETING,
            self::COPYSTATE_ERROR,
            self::COPYSTATE_CLONING,
            self::COPYSTATE_CUTOVERING,
            self::COPYSTATE_FINISHED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationcycleAllowableValues()
    {
        return [
            self::MIGRATIONCYCLE_CUTOVERING,
            self::MIGRATIONCYCLE_CUTOVERED,
            self::MIGRATIONCYCLE_CHECKING,
            self::MIGRATIONCYCLE_SETTING,
            self::MIGRATIONCYCLE_REPLICATING,
            self::MIGRATIONCYCLE_SYNCING,
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
        $this->container['copystate'] = isset($data['copystate']) ? $data['copystate'] : null;
        $this->container['migrationcycle'] = isset($data['migrationcycle']) ? $data['migrationcycle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCopystateAllowableValues();
                if (!is_null($this->container['copystate']) && !in_array($this->container['copystate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'copystate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrationcycleAllowableValues();
                if (!is_null($this->container['migrationcycle']) && !in_array($this->container['migrationcycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationcycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets copystate
    *  源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    *
    * @return string|null
    */
    public function getCopystate()
    {
        return $this->container['copystate'];
    }

    /**
    * Sets copystate
    *
    * @param string|null $copystate 源端服务器状 UNAVAILABLE：环境校验不通过 WAITING：等待 INIT：初始化 REPLICATE：复制 SYNCING：持续同步 STOPPING：暂停中 STOPPED：已暂停 DELETING：删除中 ERROR：错误 CLONING：等待克隆完成 CUTOVERING：启动目的端中 FINISHED：启动目的端完成
    *
    * @return $this
    */
    public function setCopystate($copystate)
    {
        $this->container['copystate'] = $copystate;
        return $this;
    }

    /**
    * Gets migrationcycle
    *  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @return string|null
    */
    public function getMigrationcycle()
    {
        return $this->container['migrationcycle'];
    }

    /**
    * Sets migrationcycle
    *
    * @param string|null $migrationcycle 迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @return $this
    */
    public function setMigrationcycle($migrationcycle)
    {
        $this->container['migrationcycle'] = $migrationcycle;
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

