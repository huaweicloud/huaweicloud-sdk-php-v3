<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlSwitchResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlSwitchResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    * saveDays  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    * storageMode  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    * isExcludeSysUser  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isOpen' => 'bool',
            'beginTime' => 'string',
            'endTime' => 'string',
            'saveDays' => 'int',
            'storageMode' => 'string',
            'ltsConfig' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsConfigInfoResult',
            'sqlTypeRange' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeInfoResult[]',
            'isExcludeSysUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    * saveDays  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    * storageMode  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    * isExcludeSysUser  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isOpen' => null,
        'beginTime' => null,
        'endTime' => null,
        'saveDays' => null,
        'storageMode' => null,
        'ltsConfig' => null,
        'sqlTypeRange' => null,
        'isExcludeSysUser' => null
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
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    * saveDays  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    * storageMode  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    * isExcludeSysUser  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isOpen' => 'is_open',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'saveDays' => 'save_days',
            'storageMode' => 'storage_mode',
            'ltsConfig' => 'lts_config',
            'sqlTypeRange' => 'sql_type_range',
            'isExcludeSysUser' => 'is_exclude_sys_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    * saveDays  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    * storageMode  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    * isExcludeSysUser  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @var string[]
    */
    protected static $setters = [
            'isOpen' => 'setIsOpen',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'saveDays' => 'setSaveDays',
            'storageMode' => 'setStorageMode',
            'ltsConfig' => 'setLtsConfig',
            'sqlTypeRange' => 'setSqlTypeRange',
            'isExcludeSysUser' => 'setIsExcludeSysUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    * saveDays  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    * storageMode  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    * ltsConfig  ltsConfig
    * sqlTypeRange  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    * isExcludeSysUser  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @var string[]
    */
    protected static $getters = [
            'isOpen' => 'getIsOpen',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'saveDays' => 'getSaveDays',
            'storageMode' => 'getStorageMode',
            'ltsConfig' => 'getLtsConfig',
            'sqlTypeRange' => 'getSqlTypeRange',
            'isExcludeSysUser' => 'getIsExcludeSysUser'
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
        $this->container['isOpen'] = isset($data['isOpen']) ? $data['isOpen'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['saveDays'] = isset($data['saveDays']) ? $data['saveDays'] : null;
        $this->container['storageMode'] = isset($data['storageMode']) ? $data['storageMode'] : null;
        $this->container['ltsConfig'] = isset($data['ltsConfig']) ? $data['ltsConfig'] : null;
        $this->container['sqlTypeRange'] = isset($data['sqlTypeRange']) ? $data['sqlTypeRange'] : null;
        $this->container['isExcludeSysUser'] = isset($data['isExcludeSysUser']) ? $data['isExcludeSysUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['saveDays']) && ($this->container['saveDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'saveDays', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['saveDays']) && ($this->container['saveDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'saveDays', must be bigger than or equal to 1.";
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
    * Gets isOpen
    *  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    *
    * @return bool|null
    */
    public function getIsOpen()
    {
        return $this->container['isOpen'];
    }

    /**
    * Sets isOpen
    *
    * @param bool|null $isOpen **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    *
    * @return $this
    */
    public function setIsOpen($isOpen)
    {
        $this->container['isOpen'] = $isOpen;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**: 开关状态持续的结束时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 为null则表示，开关状态还在持续，没有发生切换。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets saveDays
    *  **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    *
    * @return int|null
    */
    public function getSaveDays()
    {
        return $this->container['saveDays'];
    }

    /**
    * Sets saveDays
    *
    * @param int|null $saveDays **参数解释**: 已采集的全量SQL数据的最大保留天数。 **取值范围**: [1,30]
    *
    * @return $this
    */
    public function setSaveDays($saveDays)
    {
        $this->container['saveDays'] = $saveDays;
        return $this;
    }

    /**
    * Gets storageMode
    *  **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    *
    * @return string|null
    */
    public function getStorageMode()
    {
        return $this->container['storageMode'];
    }

    /**
    * Sets storageMode
    *
    * @param string|null $storageMode **参数解释**: 全量SQL数据存储类型。 **取值范围**: - LTS：LTS云日志服务。
    *
    * @return $this
    */
    public function setStorageMode($storageMode)
    {
        $this->container['storageMode'] = $storageMode;
        return $this;
    }

    /**
    * Gets ltsConfig
    *  ltsConfig
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsConfigInfoResult|null
    */
    public function getLtsConfig()
    {
        return $this->container['ltsConfig'];
    }

    /**
    * Sets ltsConfig
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsConfigInfoResult|null $ltsConfig ltsConfig
    *
    * @return $this
    */
    public function setLtsConfig($ltsConfig)
    {
        $this->container['ltsConfig'] = $ltsConfig;
        return $this;
    }

    /**
    * Gets sqlTypeRange
    *  **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeInfoResult[]|null
    */
    public function getSqlTypeRange()
    {
        return $this->container['sqlTypeRange'];
    }

    /**
    * Sets sqlTypeRange
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\SqlTypeInfoResult[]|null $sqlTypeRange **参数解释**: SQL采集类型列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlTypeRange($sqlTypeRange)
    {
        $this->container['sqlTypeRange'] = $sqlTypeRange;
        return $this;
    }

    /**
    * Gets isExcludeSysUser
    *  **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @return bool|null
    */
    public function getIsExcludeSysUser()
    {
        return $this->container['isExcludeSysUser'];
    }

    /**
    * Sets isExcludeSysUser
    *
    * @param bool|null $isExcludeSysUser **参数解释**: 实例ID。 **取值范围**: 不涉及。是否过滤系统用户。使能该选项后，全量SQL采集将会跳过系统用户所执行的SQL记录
    *
    * @return $this
    */
    public function setIsExcludeSysUser($isExcludeSysUser)
    {
        $this->container['isExcludeSysUser'] = $isExcludeSysUser;
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

