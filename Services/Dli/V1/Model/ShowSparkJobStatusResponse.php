<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSparkJobStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSparkJobStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'state' => null
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
    * id  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'state' => 'getState'
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
    const STATE_STARTING = 'starting';
    const STATE_RUNNING = 'running';
    const STATE_DEAD = 'dead';
    const STATE_SUCCESS = 'success';
    const STATE_RECOVERING = 'recovering';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_STARTING,
            self::STATE_RUNNING,
            self::STATE_DEAD,
            self::STATE_SUCCESS,
            self::STATE_RECOVERING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets id
    *  参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 参数解释:  批处理作业的ID，采用UUID（通用唯一识别码）格式 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 参数解释:  批处理作业的状态。starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复 示例: success 约束限制:  无 取值范围: starting（批处理作业正在启动） running（批处理作业正在执行任务） dead（批处理作业已退出） success（批处理作业执行成功） recovering（批处理作业正在恢复） 默认取值: 无
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

