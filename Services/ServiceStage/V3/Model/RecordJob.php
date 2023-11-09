<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequence  sequence
    * deployType  deployType
    * jobId  jobId
    * jobInfo  jobInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequence' => 'int',
            'deployType' => 'string',
            'jobId' => 'string',
            'jobInfo' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJobInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequence  sequence
    * deployType  deployType
    * jobId  jobId
    * jobInfo  jobInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequence' => null,
        'deployType' => null,
        'jobId' => null,
        'jobInfo' => null
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
    * sequence  sequence
    * deployType  deployType
    * jobId  jobId
    * jobInfo  jobInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequence' => 'sequence',
            'deployType' => 'deploy_type',
            'jobId' => 'job_id',
            'jobInfo' => 'job_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequence  sequence
    * deployType  deployType
    * jobId  jobId
    * jobInfo  jobInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'sequence' => 'setSequence',
            'deployType' => 'setDeployType',
            'jobId' => 'setJobId',
            'jobInfo' => 'setJobInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequence  sequence
    * deployType  deployType
    * jobId  jobId
    * jobInfo  jobInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'sequence' => 'getSequence',
            'deployType' => 'getDeployType',
            'jobId' => 'getJobId',
            'jobInfo' => 'getJobInfo'
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobInfo'] = isset($data['jobInfo']) ? $data['jobInfo'] : null;
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
    * Gets sequence
    *  sequence
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence sequence
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets deployType
    *  deployType
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType deployType
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets jobId
    *  jobId
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId jobId
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobInfo
    *  jobInfo
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJobInfo|null
    */
    public function getJobInfo()
    {
        return $this->container['jobInfo'];
    }

    /**
    * Sets jobInfo
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJobInfo|null $jobInfo jobInfo
    *
    * @return $this
    */
    public function setJobInfo($jobInfo)
    {
        $this->container['jobInfo'] = $jobInfo;
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

