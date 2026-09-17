<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowLogTplContrast implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowLogTplContrast';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateOfPreDay  前一日慢日志模板数据列表
    * templateOfCurDay  当日慢日志模板数据列表
    * executeTimeIncrease  执行耗时是否增长
    * lockWaitIncrease  锁等待耗时是否增长
    * newTemplate  是否新增模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateOfPreDay' => '\HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]',
            'templateOfCurDay' => '\HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]',
            'executeTimeIncrease' => 'bool',
            'lockWaitIncrease' => 'bool',
            'newTemplate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateOfPreDay  前一日慢日志模板数据列表
    * templateOfCurDay  当日慢日志模板数据列表
    * executeTimeIncrease  执行耗时是否增长
    * lockWaitIncrease  锁等待耗时是否增长
    * newTemplate  是否新增模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateOfPreDay' => null,
        'templateOfCurDay' => null,
        'executeTimeIncrease' => null,
        'lockWaitIncrease' => null,
        'newTemplate' => null
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
    * templateOfPreDay  前一日慢日志模板数据列表
    * templateOfCurDay  当日慢日志模板数据列表
    * executeTimeIncrease  执行耗时是否增长
    * lockWaitIncrease  锁等待耗时是否增长
    * newTemplate  是否新增模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateOfPreDay' => 'template_of_pre_day',
            'templateOfCurDay' => 'template_of_cur_day',
            'executeTimeIncrease' => 'execute_time_increase',
            'lockWaitIncrease' => 'lock_wait_increase',
            'newTemplate' => 'new_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateOfPreDay  前一日慢日志模板数据列表
    * templateOfCurDay  当日慢日志模板数据列表
    * executeTimeIncrease  执行耗时是否增长
    * lockWaitIncrease  锁等待耗时是否增长
    * newTemplate  是否新增模板
    *
    * @var string[]
    */
    protected static $setters = [
            'templateOfPreDay' => 'setTemplateOfPreDay',
            'templateOfCurDay' => 'setTemplateOfCurDay',
            'executeTimeIncrease' => 'setExecuteTimeIncrease',
            'lockWaitIncrease' => 'setLockWaitIncrease',
            'newTemplate' => 'setNewTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateOfPreDay  前一日慢日志模板数据列表
    * templateOfCurDay  当日慢日志模板数据列表
    * executeTimeIncrease  执行耗时是否增长
    * lockWaitIncrease  锁等待耗时是否增长
    * newTemplate  是否新增模板
    *
    * @var string[]
    */
    protected static $getters = [
            'templateOfPreDay' => 'getTemplateOfPreDay',
            'templateOfCurDay' => 'getTemplateOfCurDay',
            'executeTimeIncrease' => 'getExecuteTimeIncrease',
            'lockWaitIncrease' => 'getLockWaitIncrease',
            'newTemplate' => 'getNewTemplate'
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
        $this->container['templateOfPreDay'] = isset($data['templateOfPreDay']) ? $data['templateOfPreDay'] : null;
        $this->container['templateOfCurDay'] = isset($data['templateOfCurDay']) ? $data['templateOfCurDay'] : null;
        $this->container['executeTimeIncrease'] = isset($data['executeTimeIncrease']) ? $data['executeTimeIncrease'] : null;
        $this->container['lockWaitIncrease'] = isset($data['lockWaitIncrease']) ? $data['lockWaitIncrease'] : null;
        $this->container['newTemplate'] = isset($data['newTemplate']) ? $data['newTemplate'] : null;
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
    * Gets templateOfPreDay
    *  前一日慢日志模板数据列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]|null
    */
    public function getTemplateOfPreDay()
    {
        return $this->container['templateOfPreDay'];
    }

    /**
    * Sets templateOfPreDay
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]|null $templateOfPreDay 前一日慢日志模板数据列表
    *
    * @return $this
    */
    public function setTemplateOfPreDay($templateOfPreDay)
    {
        $this->container['templateOfPreDay'] = $templateOfPreDay;
        return $this;
    }

    /**
    * Gets templateOfCurDay
    *  当日慢日志模板数据列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]|null
    */
    public function getTemplateOfCurDay()
    {
        return $this->container['templateOfCurDay'];
    }

    /**
    * Sets templateOfCurDay
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTemplate[]|null $templateOfCurDay 当日慢日志模板数据列表
    *
    * @return $this
    */
    public function setTemplateOfCurDay($templateOfCurDay)
    {
        $this->container['templateOfCurDay'] = $templateOfCurDay;
        return $this;
    }

    /**
    * Gets executeTimeIncrease
    *  执行耗时是否增长
    *
    * @return bool|null
    */
    public function getExecuteTimeIncrease()
    {
        return $this->container['executeTimeIncrease'];
    }

    /**
    * Sets executeTimeIncrease
    *
    * @param bool|null $executeTimeIncrease 执行耗时是否增长
    *
    * @return $this
    */
    public function setExecuteTimeIncrease($executeTimeIncrease)
    {
        $this->container['executeTimeIncrease'] = $executeTimeIncrease;
        return $this;
    }

    /**
    * Gets lockWaitIncrease
    *  锁等待耗时是否增长
    *
    * @return bool|null
    */
    public function getLockWaitIncrease()
    {
        return $this->container['lockWaitIncrease'];
    }

    /**
    * Sets lockWaitIncrease
    *
    * @param bool|null $lockWaitIncrease 锁等待耗时是否增长
    *
    * @return $this
    */
    public function setLockWaitIncrease($lockWaitIncrease)
    {
        $this->container['lockWaitIncrease'] = $lockWaitIncrease;
        return $this;
    }

    /**
    * Gets newTemplate
    *  是否新增模板
    *
    * @return bool|null
    */
    public function getNewTemplate()
    {
        return $this->container['newTemplate'];
    }

    /**
    * Sets newTemplate
    *
    * @param bool|null $newTemplate 是否新增模板
    *
    * @return $this
    */
    public function setNewTemplate($newTemplate)
    {
        $this->container['newTemplate'] = $newTemplate;
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

