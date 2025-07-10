<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobPipelineInfoItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobPipelineInfoItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scms  构建执行SCM
    * parameters  参数
    * jobName  任务名称
    * jobNameMassage  任务名称信息
    * jobNameRegex  任务名称正则
    * sourceCode  任务名称正则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scms' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobPipelineInfoParameters[]',
            'jobName' => 'string',
            'jobNameMassage' => 'string',
            'jobNameRegex' => 'string',
            'sourceCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scms  构建执行SCM
    * parameters  参数
    * jobName  任务名称
    * jobNameMassage  任务名称信息
    * jobNameRegex  任务名称正则
    * sourceCode  任务名称正则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scms' => null,
        'parameters' => null,
        'jobName' => null,
        'jobNameMassage' => null,
        'jobNameRegex' => null,
        'sourceCode' => null
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
    * scms  构建执行SCM
    * parameters  参数
    * jobName  任务名称
    * jobNameMassage  任务名称信息
    * jobNameRegex  任务名称正则
    * sourceCode  任务名称正则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scms' => 'scms',
            'parameters' => 'parameters',
            'jobName' => 'job_name',
            'jobNameMassage' => 'job_name_massage',
            'jobNameRegex' => 'job_name_regex',
            'sourceCode' => 'source_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scms  构建执行SCM
    * parameters  参数
    * jobName  任务名称
    * jobNameMassage  任务名称信息
    * jobNameRegex  任务名称正则
    * sourceCode  任务名称正则
    *
    * @var string[]
    */
    protected static $setters = [
            'scms' => 'setScms',
            'parameters' => 'setParameters',
            'jobName' => 'setJobName',
            'jobNameMassage' => 'setJobNameMassage',
            'jobNameRegex' => 'setJobNameRegex',
            'sourceCode' => 'setSourceCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scms  构建执行SCM
    * parameters  参数
    * jobName  任务名称
    * jobNameMassage  任务名称信息
    * jobNameRegex  任务名称正则
    * sourceCode  任务名称正则
    *
    * @var string[]
    */
    protected static $getters = [
            'scms' => 'getScms',
            'parameters' => 'getParameters',
            'jobName' => 'getJobName',
            'jobNameMassage' => 'getJobNameMassage',
            'jobNameRegex' => 'getJobNameRegex',
            'sourceCode' => 'getSourceCode'
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
        $this->container['scms'] = isset($data['scms']) ? $data['scms'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobNameMassage'] = isset($data['jobNameMassage']) ? $data['jobNameMassage'] : null;
        $this->container['jobNameRegex'] = isset($data['jobNameRegex']) ? $data['jobNameRegex'] : null;
        $this->container['sourceCode'] = isset($data['sourceCode']) ? $data['sourceCode'] : null;
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
    * Gets scms
    *  构建执行SCM
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]|null
    */
    public function getScms()
    {
        return $this->container['scms'];
    }

    /**
    * Sets scms
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobScm[]|null $scms 构建执行SCM
    *
    * @return $this
    */
    public function setScms($scms)
    {
        $this->container['scms'] = $scms;
        return $this;
    }

    /**
    * Gets parameters
    *  参数
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobPipelineInfoParameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobPipelineInfoParameters[]|null $parameters 参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobNameMassage
    *  任务名称信息
    *
    * @return string|null
    */
    public function getJobNameMassage()
    {
        return $this->container['jobNameMassage'];
    }

    /**
    * Sets jobNameMassage
    *
    * @param string|null $jobNameMassage 任务名称信息
    *
    * @return $this
    */
    public function setJobNameMassage($jobNameMassage)
    {
        $this->container['jobNameMassage'] = $jobNameMassage;
        return $this;
    }

    /**
    * Gets jobNameRegex
    *  任务名称正则
    *
    * @return string|null
    */
    public function getJobNameRegex()
    {
        return $this->container['jobNameRegex'];
    }

    /**
    * Sets jobNameRegex
    *
    * @param string|null $jobNameRegex 任务名称正则
    *
    * @return $this
    */
    public function setJobNameRegex($jobNameRegex)
    {
        $this->container['jobNameRegex'] = $jobNameRegex;
        return $this;
    }

    /**
    * Gets sourceCode
    *  任务名称正则
    *
    * @return string|null
    */
    public function getSourceCode()
    {
        return $this->container['sourceCode'];
    }

    /**
    * Sets sourceCode
    *
    * @param string|null $sourceCode 任务名称正则
    *
    * @return $this
    */
    public function setSourceCode($sourceCode)
    {
        $this->container['sourceCode'] = $sourceCode;
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

