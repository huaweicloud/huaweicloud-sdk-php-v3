<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleteType  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    * jobId  任务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleteType' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleteType  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    * jobId  任务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleteType' => null,
        'jobId' => null
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
    * deleteType  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    * jobId  任务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleteType' => 'delete_type',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleteType  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    * jobId  任务ID
    *
    * @var string[]
    */
    protected static $setters = [
            'deleteType' => 'setDeleteType',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleteType  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    * jobId  任务ID
    *
    * @var string[]
    */
    protected static $getters = [
            'deleteType' => 'getDeleteType',
            'jobId' => 'getJobId'
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
    const DELETE_TYPE_TERMINATE = 'terminate';
    const DELETE_TYPE_FORCE_TERMINATE = 'force_terminate';
    const DELETE_TYPE_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteTypeAllowableValues()
    {
        return [
            self::DELETE_TYPE_TERMINATE,
            self::DELETE_TYPE_FORCE_TERMINATE,
            self::DELETE_TYPE_DELETE,
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
        $this->container['deleteType'] = isset($data['deleteType']) ? $data['deleteType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deleteType'] === null) {
            $invalidProperties[] = "'deleteType' can't be null";
        }
            $allowedValues = $this->getDeleteTypeAllowableValues();
                if (!is_null($this->container['deleteType']) && !in_array($this->container['deleteType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
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
    * Gets deleteType
    *  terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    *
    * @return string
    */
    public function getDeleteType()
    {
        return $this->container['deleteType'];
    }

    /**
    * Sets deleteType
    *
    * @param string $deleteType terminate:结束迁移任务,force_terminate:强制结束迁移任务,delete:删除迁移任务
    *
    * @return $this
    */
    public function setDeleteType($deleteType)
    {
        $this->container['deleteType'] = $deleteType;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

