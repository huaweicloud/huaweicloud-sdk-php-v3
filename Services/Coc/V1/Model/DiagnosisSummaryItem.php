<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisSummaryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisSummaryItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  被诊断实例的ID
    * instanceName  被诊断实例的名称
    * progress  被诊断实例的诊断进度
    * status  诊断任务状态，waiting,executing,failed,finish,cancel
    * normalItemNum  实例的正常诊断项数量
    * abnormalItemNum  实例的异常诊断项数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'progress' => 'int',
            'status' => 'string',
            'normalItemNum' => 'int',
            'abnormalItemNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  被诊断实例的ID
    * instanceName  被诊断实例的名称
    * progress  被诊断实例的诊断进度
    * status  诊断任务状态，waiting,executing,failed,finish,cancel
    * normalItemNum  实例的正常诊断项数量
    * abnormalItemNum  实例的异常诊断项数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'progress' => 'int32',
        'status' => null,
        'normalItemNum' => 'int32',
        'abnormalItemNum' => 'int32'
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
    * instanceId  被诊断实例的ID
    * instanceName  被诊断实例的名称
    * progress  被诊断实例的诊断进度
    * status  诊断任务状态，waiting,executing,failed,finish,cancel
    * normalItemNum  实例的正常诊断项数量
    * abnormalItemNum  实例的异常诊断项数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'progress' => 'progress',
            'status' => 'status',
            'normalItemNum' => 'normal_item_num',
            'abnormalItemNum' => 'abnormal_item_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  被诊断实例的ID
    * instanceName  被诊断实例的名称
    * progress  被诊断实例的诊断进度
    * status  诊断任务状态，waiting,executing,failed,finish,cancel
    * normalItemNum  实例的正常诊断项数量
    * abnormalItemNum  实例的异常诊断项数量
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'progress' => 'setProgress',
            'status' => 'setStatus',
            'normalItemNum' => 'setNormalItemNum',
            'abnormalItemNum' => 'setAbnormalItemNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  被诊断实例的ID
    * instanceName  被诊断实例的名称
    * progress  被诊断实例的诊断进度
    * status  诊断任务状态，waiting,executing,failed,finish,cancel
    * normalItemNum  实例的正常诊断项数量
    * abnormalItemNum  实例的异常诊断项数量
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'progress' => 'getProgress',
            'status' => 'getStatus',
            'normalItemNum' => 'getNormalItemNum',
            'abnormalItemNum' => 'getAbnormalItemNum'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['normalItemNum'] = isset($data['normalItemNum']) ? $data['normalItemNum'] : null;
        $this->container['abnormalItemNum'] = isset($data['abnormalItemNum']) ? $data['abnormalItemNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['normalItemNum']) && ($this->container['normalItemNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'normalItemNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['normalItemNum']) && ($this->container['normalItemNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'normalItemNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalItemNum']) && ($this->container['abnormalItemNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'abnormalItemNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['abnormalItemNum']) && ($this->container['abnormalItemNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalItemNum', must be bigger than or equal to 0.";
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
    *  被诊断实例的ID
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
    * @param string|null $instanceId 被诊断实例的ID
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
    *  被诊断实例的名称
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
    * @param string|null $instanceName 被诊断实例的名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets progress
    *  被诊断实例的诊断进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 被诊断实例的诊断进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets status
    *  诊断任务状态，waiting,executing,failed,finish,cancel
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 诊断任务状态，waiting,executing,failed,finish,cancel
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets normalItemNum
    *  实例的正常诊断项数量
    *
    * @return int|null
    */
    public function getNormalItemNum()
    {
        return $this->container['normalItemNum'];
    }

    /**
    * Sets normalItemNum
    *
    * @param int|null $normalItemNum 实例的正常诊断项数量
    *
    * @return $this
    */
    public function setNormalItemNum($normalItemNum)
    {
        $this->container['normalItemNum'] = $normalItemNum;
        return $this;
    }

    /**
    * Gets abnormalItemNum
    *  实例的异常诊断项数量
    *
    * @return int|null
    */
    public function getAbnormalItemNum()
    {
        return $this->container['abnormalItemNum'];
    }

    /**
    * Sets abnormalItemNum
    *
    * @param int|null $abnormalItemNum 实例的异常诊断项数量
    *
    * @return $this
    */
    public function setAbnormalItemNum($abnormalItemNum)
    {
        $this->container['abnormalItemNum'] = $abnormalItemNum;
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

