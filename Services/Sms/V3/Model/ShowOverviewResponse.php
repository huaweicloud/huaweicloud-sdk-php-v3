<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * waiting  等待中
    * replicate  复制中
    * syncing  同步中
    * stopped  已暂停
    * deleting  删除中
    * cutovering  启动目的端中
    * unavailable  环境校验不通过
    * stopping  暂停中
    * skipping  跳过中
    * finished  启动目的端完成
    * initialize  初始化
    * error  错误
    * cloning  等待克隆完成
    * unconfigured  未配置目的端
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'waiting' => 'int',
            'replicate' => 'int',
            'syncing' => 'int',
            'stopped' => 'int',
            'deleting' => 'int',
            'cutovering' => 'int',
            'unavailable' => 'int',
            'stopping' => 'int',
            'skipping' => 'int',
            'finished' => 'int',
            'initialize' => 'int',
            'error' => 'int',
            'cloning' => 'int',
            'unconfigured' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * waiting  等待中
    * replicate  复制中
    * syncing  同步中
    * stopped  已暂停
    * deleting  删除中
    * cutovering  启动目的端中
    * unavailable  环境校验不通过
    * stopping  暂停中
    * skipping  跳过中
    * finished  启动目的端完成
    * initialize  初始化
    * error  错误
    * cloning  等待克隆完成
    * unconfigured  未配置目的端
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'waiting' => 'int32',
        'replicate' => 'int32',
        'syncing' => 'int32',
        'stopped' => 'int32',
        'deleting' => 'int32',
        'cutovering' => 'int32',
        'unavailable' => 'int32',
        'stopping' => 'int32',
        'skipping' => 'int32',
        'finished' => 'int32',
        'initialize' => 'int32',
        'error' => 'int32',
        'cloning' => 'int32',
        'unconfigured' => 'int32'
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
    * waiting  等待中
    * replicate  复制中
    * syncing  同步中
    * stopped  已暂停
    * deleting  删除中
    * cutovering  启动目的端中
    * unavailable  环境校验不通过
    * stopping  暂停中
    * skipping  跳过中
    * finished  启动目的端完成
    * initialize  初始化
    * error  错误
    * cloning  等待克隆完成
    * unconfigured  未配置目的端
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'waiting' => 'waiting',
            'replicate' => 'replicate',
            'syncing' => 'syncing',
            'stopped' => 'stopped',
            'deleting' => 'deleting',
            'cutovering' => 'cutovering',
            'unavailable' => 'unavailable',
            'stopping' => 'stopping',
            'skipping' => 'skipping',
            'finished' => 'finished',
            'initialize' => 'initialize',
            'error' => 'error',
            'cloning' => 'cloning',
            'unconfigured' => 'unconfigured'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * waiting  等待中
    * replicate  复制中
    * syncing  同步中
    * stopped  已暂停
    * deleting  删除中
    * cutovering  启动目的端中
    * unavailable  环境校验不通过
    * stopping  暂停中
    * skipping  跳过中
    * finished  启动目的端完成
    * initialize  初始化
    * error  错误
    * cloning  等待克隆完成
    * unconfigured  未配置目的端
    *
    * @var string[]
    */
    protected static $setters = [
            'waiting' => 'setWaiting',
            'replicate' => 'setReplicate',
            'syncing' => 'setSyncing',
            'stopped' => 'setStopped',
            'deleting' => 'setDeleting',
            'cutovering' => 'setCutovering',
            'unavailable' => 'setUnavailable',
            'stopping' => 'setStopping',
            'skipping' => 'setSkipping',
            'finished' => 'setFinished',
            'initialize' => 'setInitialize',
            'error' => 'setError',
            'cloning' => 'setCloning',
            'unconfigured' => 'setUnconfigured'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * waiting  等待中
    * replicate  复制中
    * syncing  同步中
    * stopped  已暂停
    * deleting  删除中
    * cutovering  启动目的端中
    * unavailable  环境校验不通过
    * stopping  暂停中
    * skipping  跳过中
    * finished  启动目的端完成
    * initialize  初始化
    * error  错误
    * cloning  等待克隆完成
    * unconfigured  未配置目的端
    *
    * @var string[]
    */
    protected static $getters = [
            'waiting' => 'getWaiting',
            'replicate' => 'getReplicate',
            'syncing' => 'getSyncing',
            'stopped' => 'getStopped',
            'deleting' => 'getDeleting',
            'cutovering' => 'getCutovering',
            'unavailable' => 'getUnavailable',
            'stopping' => 'getStopping',
            'skipping' => 'getSkipping',
            'finished' => 'getFinished',
            'initialize' => 'getInitialize',
            'error' => 'getError',
            'cloning' => 'getCloning',
            'unconfigured' => 'getUnconfigured'
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
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
        $this->container['replicate'] = isset($data['replicate']) ? $data['replicate'] : null;
        $this->container['syncing'] = isset($data['syncing']) ? $data['syncing'] : null;
        $this->container['stopped'] = isset($data['stopped']) ? $data['stopped'] : null;
        $this->container['deleting'] = isset($data['deleting']) ? $data['deleting'] : null;
        $this->container['cutovering'] = isset($data['cutovering']) ? $data['cutovering'] : null;
        $this->container['unavailable'] = isset($data['unavailable']) ? $data['unavailable'] : null;
        $this->container['stopping'] = isset($data['stopping']) ? $data['stopping'] : null;
        $this->container['skipping'] = isset($data['skipping']) ? $data['skipping'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['initialize'] = isset($data['initialize']) ? $data['initialize'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['cloning'] = isset($data['cloning']) ? $data['cloning'] : null;
        $this->container['unconfigured'] = isset($data['unconfigured']) ? $data['unconfigured'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['waiting']) && ($this->container['waiting'] > 1000)) {
                $invalidProperties[] = "invalid value for 'waiting', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['waiting']) && ($this->container['waiting'] < 0)) {
                $invalidProperties[] = "invalid value for 'waiting', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['replicate']) && ($this->container['replicate'] > 1000)) {
                $invalidProperties[] = "invalid value for 'replicate', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['replicate']) && ($this->container['replicate'] < 0)) {
                $invalidProperties[] = "invalid value for 'replicate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncing']) && ($this->container['syncing'] > 1000)) {
                $invalidProperties[] = "invalid value for 'syncing', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['syncing']) && ($this->container['syncing'] < 0)) {
                $invalidProperties[] = "invalid value for 'syncing', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stopped']) && ($this->container['stopped'] > 1000)) {
                $invalidProperties[] = "invalid value for 'stopped', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['stopped']) && ($this->container['stopped'] < 0)) {
                $invalidProperties[] = "invalid value for 'stopped', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleting']) && ($this->container['deleting'] > 1000)) {
                $invalidProperties[] = "invalid value for 'deleting', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['deleting']) && ($this->container['deleting'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleting', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cutovering']) && ($this->container['cutovering'] > 1000)) {
                $invalidProperties[] = "invalid value for 'cutovering', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cutovering']) && ($this->container['cutovering'] < 0)) {
                $invalidProperties[] = "invalid value for 'cutovering', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unavailable']) && ($this->container['unavailable'] > 1000)) {
                $invalidProperties[] = "invalid value for 'unavailable', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['unavailable']) && ($this->container['unavailable'] < 0)) {
                $invalidProperties[] = "invalid value for 'unavailable', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stopping']) && ($this->container['stopping'] > 1000)) {
                $invalidProperties[] = "invalid value for 'stopping', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['stopping']) && ($this->container['stopping'] < 0)) {
                $invalidProperties[] = "invalid value for 'stopping', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skipping']) && ($this->container['skipping'] > 1000)) {
                $invalidProperties[] = "invalid value for 'skipping', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['skipping']) && ($this->container['skipping'] < 0)) {
                $invalidProperties[] = "invalid value for 'skipping', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finished']) && ($this->container['finished'] > 1000)) {
                $invalidProperties[] = "invalid value for 'finished', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['finished']) && ($this->container['finished'] < 0)) {
                $invalidProperties[] = "invalid value for 'finished', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['initialize']) && ($this->container['initialize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'initialize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['initialize']) && ($this->container['initialize'] < 0)) {
                $invalidProperties[] = "invalid value for 'initialize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['error']) && ($this->container['error'] > 1000)) {
                $invalidProperties[] = "invalid value for 'error', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['error']) && ($this->container['error'] < 0)) {
                $invalidProperties[] = "invalid value for 'error', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloning']) && ($this->container['cloning'] > 1000)) {
                $invalidProperties[] = "invalid value for 'cloning', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cloning']) && ($this->container['cloning'] < 0)) {
                $invalidProperties[] = "invalid value for 'cloning', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unconfigured']) && ($this->container['unconfigured'] > 1000)) {
                $invalidProperties[] = "invalid value for 'unconfigured', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['unconfigured']) && ($this->container['unconfigured'] < 0)) {
                $invalidProperties[] = "invalid value for 'unconfigured', must be bigger than or equal to 0.";
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
    * Gets waiting
    *  等待中
    *
    * @return int|null
    */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
    * Sets waiting
    *
    * @param int|null $waiting 等待中
    *
    * @return $this
    */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;
        return $this;
    }

    /**
    * Gets replicate
    *  复制中
    *
    * @return int|null
    */
    public function getReplicate()
    {
        return $this->container['replicate'];
    }

    /**
    * Sets replicate
    *
    * @param int|null $replicate 复制中
    *
    * @return $this
    */
    public function setReplicate($replicate)
    {
        $this->container['replicate'] = $replicate;
        return $this;
    }

    /**
    * Gets syncing
    *  同步中
    *
    * @return int|null
    */
    public function getSyncing()
    {
        return $this->container['syncing'];
    }

    /**
    * Sets syncing
    *
    * @param int|null $syncing 同步中
    *
    * @return $this
    */
    public function setSyncing($syncing)
    {
        $this->container['syncing'] = $syncing;
        return $this;
    }

    /**
    * Gets stopped
    *  已暂停
    *
    * @return int|null
    */
    public function getStopped()
    {
        return $this->container['stopped'];
    }

    /**
    * Sets stopped
    *
    * @param int|null $stopped 已暂停
    *
    * @return $this
    */
    public function setStopped($stopped)
    {
        $this->container['stopped'] = $stopped;
        return $this;
    }

    /**
    * Gets deleting
    *  删除中
    *
    * @return int|null
    */
    public function getDeleting()
    {
        return $this->container['deleting'];
    }

    /**
    * Sets deleting
    *
    * @param int|null $deleting 删除中
    *
    * @return $this
    */
    public function setDeleting($deleting)
    {
        $this->container['deleting'] = $deleting;
        return $this;
    }

    /**
    * Gets cutovering
    *  启动目的端中
    *
    * @return int|null
    */
    public function getCutovering()
    {
        return $this->container['cutovering'];
    }

    /**
    * Sets cutovering
    *
    * @param int|null $cutovering 启动目的端中
    *
    * @return $this
    */
    public function setCutovering($cutovering)
    {
        $this->container['cutovering'] = $cutovering;
        return $this;
    }

    /**
    * Gets unavailable
    *  环境校验不通过
    *
    * @return int|null
    */
    public function getUnavailable()
    {
        return $this->container['unavailable'];
    }

    /**
    * Sets unavailable
    *
    * @param int|null $unavailable 环境校验不通过
    *
    * @return $this
    */
    public function setUnavailable($unavailable)
    {
        $this->container['unavailable'] = $unavailable;
        return $this;
    }

    /**
    * Gets stopping
    *  暂停中
    *
    * @return int|null
    */
    public function getStopping()
    {
        return $this->container['stopping'];
    }

    /**
    * Sets stopping
    *
    * @param int|null $stopping 暂停中
    *
    * @return $this
    */
    public function setStopping($stopping)
    {
        $this->container['stopping'] = $stopping;
        return $this;
    }

    /**
    * Gets skipping
    *  跳过中
    *
    * @return int|null
    */
    public function getSkipping()
    {
        return $this->container['skipping'];
    }

    /**
    * Sets skipping
    *
    * @param int|null $skipping 跳过中
    *
    * @return $this
    */
    public function setSkipping($skipping)
    {
        $this->container['skipping'] = $skipping;
        return $this;
    }

    /**
    * Gets finished
    *  启动目的端完成
    *
    * @return int|null
    */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
    * Sets finished
    *
    * @param int|null $finished 启动目的端完成
    *
    * @return $this
    */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;
        return $this;
    }

    /**
    * Gets initialize
    *  初始化
    *
    * @return int|null
    */
    public function getInitialize()
    {
        return $this->container['initialize'];
    }

    /**
    * Sets initialize
    *
    * @param int|null $initialize 初始化
    *
    * @return $this
    */
    public function setInitialize($initialize)
    {
        $this->container['initialize'] = $initialize;
        return $this;
    }

    /**
    * Gets error
    *  错误
    *
    * @return int|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param int|null $error 错误
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets cloning
    *  等待克隆完成
    *
    * @return int|null
    */
    public function getCloning()
    {
        return $this->container['cloning'];
    }

    /**
    * Sets cloning
    *
    * @param int|null $cloning 等待克隆完成
    *
    * @return $this
    */
    public function setCloning($cloning)
    {
        $this->container['cloning'] = $cloning;
        return $this;
    }

    /**
    * Gets unconfigured
    *  未配置目的端
    *
    * @return int|null
    */
    public function getUnconfigured()
    {
        return $this->container['unconfigured'];
    }

    /**
    * Sets unconfigured
    *
    * @param int|null $unconfigured 未配置目的端
    *
    * @return $this
    */
    public function setUnconfigured($unconfigured)
    {
        $this->container['unconfigured'] = $unconfigured;
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

