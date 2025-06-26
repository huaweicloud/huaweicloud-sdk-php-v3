<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisTaskNodeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisTaskNodeDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * code  code
    * name  诊断步骤名称
    * nameZh  诊断步骤名称(中文)
    * diagnosisTaskId  诊断任务ID
    * status  任务状态，waiting,executing,failed,finish,cancel
    * diagnosisRecordId  诊断步骤主键ID
    * startTime  诊断步骤开始时间
    * endTime  诊断步骤结束时间
    * message  诊断步骤执行结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'name' => 'string',
            'nameZh' => 'string',
            'diagnosisTaskId' => 'string',
            'status' => 'string',
            'diagnosisRecordId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * code  code
    * name  诊断步骤名称
    * nameZh  诊断步骤名称(中文)
    * diagnosisTaskId  诊断任务ID
    * status  任务状态，waiting,executing,failed,finish,cancel
    * diagnosisRecordId  诊断步骤主键ID
    * startTime  诊断步骤开始时间
    * endTime  诊断步骤结束时间
    * message  诊断步骤执行结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'name' => null,
        'nameZh' => null,
        'diagnosisTaskId' => null,
        'status' => null,
        'diagnosisRecordId' => null,
        'startTime' => null,
        'endTime' => null,
        'message' => null
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
    * id  id
    * code  code
    * name  诊断步骤名称
    * nameZh  诊断步骤名称(中文)
    * diagnosisTaskId  诊断任务ID
    * status  任务状态，waiting,executing,failed,finish,cancel
    * diagnosisRecordId  诊断步骤主键ID
    * startTime  诊断步骤开始时间
    * endTime  诊断步骤结束时间
    * message  诊断步骤执行结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'name' => 'name',
            'nameZh' => 'name_zh',
            'diagnosisTaskId' => 'diagnosis_task_id',
            'status' => 'status',
            'diagnosisRecordId' => 'diagnosis_record_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * code  code
    * name  诊断步骤名称
    * nameZh  诊断步骤名称(中文)
    * diagnosisTaskId  诊断任务ID
    * status  任务状态，waiting,executing,failed,finish,cancel
    * diagnosisRecordId  诊断步骤主键ID
    * startTime  诊断步骤开始时间
    * endTime  诊断步骤结束时间
    * message  诊断步骤执行结果
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'name' => 'setName',
            'nameZh' => 'setNameZh',
            'diagnosisTaskId' => 'setDiagnosisTaskId',
            'status' => 'setStatus',
            'diagnosisRecordId' => 'setDiagnosisRecordId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * code  code
    * name  诊断步骤名称
    * nameZh  诊断步骤名称(中文)
    * diagnosisTaskId  诊断任务ID
    * status  任务状态，waiting,executing,failed,finish,cancel
    * diagnosisRecordId  诊断步骤主键ID
    * startTime  诊断步骤开始时间
    * endTime  诊断步骤结束时间
    * message  诊断步骤执行结果
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'name' => 'getName',
            'nameZh' => 'getNameZh',
            'diagnosisTaskId' => 'getDiagnosisTaskId',
            'status' => 'getStatus',
            'diagnosisRecordId' => 'getDiagnosisRecordId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'message' => 'getMessage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['diagnosisTaskId'] = isset($data['diagnosisTaskId']) ? $data['diagnosisTaskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['diagnosisRecordId'] = isset($data['diagnosisRecordId']) ? $data['diagnosisRecordId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diagnosisTaskId']) && (mb_strlen($this->container['diagnosisTaskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'diagnosisTaskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['diagnosisTaskId']) && (mb_strlen($this->container['diagnosisTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'diagnosisTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diagnosisRecordId']) && (mb_strlen($this->container['diagnosisRecordId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'diagnosisRecordId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['diagnosisRecordId']) && (mb_strlen($this->container['diagnosisRecordId']) < 0)) {
                $invalidProperties[] = "invalid value for 'diagnosisRecordId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 1000000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  code
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code code
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  诊断步骤名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 诊断步骤名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameZh
    *  诊断步骤名称(中文)
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 诊断步骤名称(中文)
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets diagnosisTaskId
    *  诊断任务ID
    *
    * @return string|null
    */
    public function getDiagnosisTaskId()
    {
        return $this->container['diagnosisTaskId'];
    }

    /**
    * Sets diagnosisTaskId
    *
    * @param string|null $diagnosisTaskId 诊断任务ID
    *
    * @return $this
    */
    public function setDiagnosisTaskId($diagnosisTaskId)
    {
        $this->container['diagnosisTaskId'] = $diagnosisTaskId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，waiting,executing,failed,finish,cancel
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
    * @param string|null $status 任务状态，waiting,executing,failed,finish,cancel
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets diagnosisRecordId
    *  诊断步骤主键ID
    *
    * @return string|null
    */
    public function getDiagnosisRecordId()
    {
        return $this->container['diagnosisRecordId'];
    }

    /**
    * Sets diagnosisRecordId
    *
    * @param string|null $diagnosisRecordId 诊断步骤主键ID
    *
    * @return $this
    */
    public function setDiagnosisRecordId($diagnosisRecordId)
    {
        $this->container['diagnosisRecordId'] = $diagnosisRecordId;
        return $this;
    }

    /**
    * Gets startTime
    *  诊断步骤开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 诊断步骤开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  诊断步骤结束时间
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
    * @param string|null $endTime 诊断步骤结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets message
    *  诊断步骤执行结果
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 诊断步骤执行结果
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

