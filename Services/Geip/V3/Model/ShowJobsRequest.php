<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  job_id
    * fields  fields
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'fields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  job_id
    * fields  fields
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'fields' => null
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
    * jobId  job_id
    * fields  fields
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  job_id
    * fields  fields
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  job_id
    * fields  fields
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'fields' => 'getFields'
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
    const FIELDS_ID = 'id';
    const FIELDS_ACTION = 'action';
    const FIELDS_STATUS = 'status';
    const FIELDS_ERROR_TASK = 'error_task';
    const FIELDS_ERROR_CODE = 'error_code';
    const FIELDS_ERROR_MESSAGE = 'error_message';
    const FIELDS_START_TIME = 'start_time';
    const FIELDS_END_TIME = 'end_time';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_ACTION,
            self::FIELDS_STATUS,
            self::FIELDS_ERROR_TASK,
            self::FIELDS_ERROR_CODE,
            self::FIELDS_ERROR_MESSAGE,
            self::FIELDS_START_TIME,
            self::FIELDS_END_TIME,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 30)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 30.";
            }
            if (!preg_match("/[a-z0-9-]{30,64}/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /[a-z0-9-]{30,64}/.";
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
    * Gets jobId
    *  job_id
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
    * @param string $jobId job_id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets fields
    *  fields
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields fields
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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

