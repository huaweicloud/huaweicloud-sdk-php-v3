<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchRunFlinkJobsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchRunFlinkJobsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resumeSavepoint  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    * jobIds  
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resumeSavepoint' => 'bool',
            'jobIds' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resumeSavepoint  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    * jobIds  
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resumeSavepoint' => null,
        'jobIds' => 'int64'
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
    * resumeSavepoint  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    * jobIds  
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resumeSavepoint' => 'resume_savepoint',
            'jobIds' => 'job_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resumeSavepoint  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    * jobIds  
    *
    * @var string[]
    */
    protected static $setters = [
            'resumeSavepoint' => 'setResumeSavepoint',
            'jobIds' => 'setJobIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resumeSavepoint  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    * jobIds  
    *
    * @var string[]
    */
    protected static $getters = [
            'resumeSavepoint' => 'getResumeSavepoint',
            'jobIds' => 'getJobIds'
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
        $this->container['resumeSavepoint'] = isset($data['resumeSavepoint']) ? $data['resumeSavepoint'] : null;
        $this->container['jobIds'] = isset($data['jobIds']) ? $data['jobIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobIds'] === null) {
            $invalidProperties[] = "'jobIds' can't be null";
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
    * Gets resumeSavepoint
    *  是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    *
    * @return bool|null
    */
    public function getResumeSavepoint()
    {
        return $this->container['resumeSavepoint'];
    }

    /**
    * Sets resumeSavepoint
    *
    * @param bool|null $resumeSavepoint 是否将作业从最近创建的保存点恢复。类型为boolean。  当resume_savepoint为true时，表示作业从最近创建的保存点恢复。 当resume_savepoint为false时，表示不恢复正常启动。默认为false。
    *
    * @return $this
    */
    public function setResumeSavepoint($resumeSavepoint)
    {
        $this->container['resumeSavepoint'] = $resumeSavepoint;
        return $this;
    }

    /**
    * Gets jobIds
    *  
    *
    * @return int[]
    */
    public function getJobIds()
    {
        return $this->container['jobIds'];
    }

    /**
    * Sets jobIds
    *
    * @param int[] $jobIds 
    *
    * @return $this
    */
    public function setJobIds($jobIds)
    {
        $this->container['jobIds'] = $jobIds;
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

