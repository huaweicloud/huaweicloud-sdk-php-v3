<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDiagnosisNodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDiagnosisNodeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  诊断工单ID
    * code  诊断步骤编码
    * instanceId  被诊断实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'code' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  诊断工单ID
    * code  诊断步骤编码
    * instanceId  被诊断实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'code' => null,
        'instanceId' => null
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
    * taskId  诊断工单ID
    * code  诊断步骤编码
    * instanceId  被诊断实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'code' => 'code',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  诊断工单ID
    * code  诊断步骤编码
    * instanceId  被诊断实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'code' => 'setCode',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  诊断工单ID
    * code  诊断步骤编码
    * instanceId  被诊断实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'code' => 'getCode',
            'instanceId' => 'getInstanceId'
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
    const CODE_HOLMES_INSTALL = 'holmesInstall';
    const CODE_DATA_COLLECTION = 'dataCollection';
    const CODE_DIAGNOSIS_FAULT = 'diagnosisFault';
    const CODE_HOLMES_UN_INSTALL = 'holmesUnInstall';
    const CODE_RDS_DIAGNOSIS = 'rdsDiagnosis';
    const CODE_DCS_DIAGNOSIS = 'dcsDiagnosis';
    const CODE_DMS_DIAGNOSIS = 'dmsDiagnosis';
    const CODE_ELB_DIAGNOSIS = 'elbDiagnosis';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_HOLMES_INSTALL,
            self::CODE_DATA_COLLECTION,
            self::CODE_DIAGNOSIS_FAULT,
            self::CODE_HOLMES_UN_INSTALL,
            self::CODE_RDS_DIAGNOSIS,
            self::CODE_DCS_DIAGNOSIS,
            self::CODE_DMS_DIAGNOSIS,
            self::CODE_ELB_DIAGNOSIS,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
            $allowedValues = $this->getCodeAllowableValues();
                if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  诊断工单ID
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 诊断工单ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets code
    *  诊断步骤编码
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 诊断步骤编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets instanceId
    *  被诊断实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 被诊断实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

