<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHistoryDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHistoryDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  构建任务名称
    * buildNumber  构建编号
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * parameters  本次构建的参数，Map类型，敏感参数值返回*号
    * buildSteps  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'buildNumber' => 'int',
            'projectId' => 'string',
            'projectName' => 'string',
            'parameters' => 'map[string,string]',
            'buildSteps' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildStep[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  构建任务名称
    * buildNumber  构建编号
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * parameters  本次构建的参数，Map类型，敏感参数值返回*号
    * buildSteps  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'buildNumber' => 'int32',
        'projectId' => null,
        'projectName' => null,
        'parameters' => null,
        'buildSteps' => null
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
    * jobName  构建任务名称
    * buildNumber  构建编号
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * parameters  本次构建的参数，Map类型，敏感参数值返回*号
    * buildSteps  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'buildNumber' => 'build_number',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'parameters' => 'parameters',
            'buildSteps' => 'build_steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  构建任务名称
    * buildNumber  构建编号
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * parameters  本次构建的参数，Map类型，敏感参数值返回*号
    * buildSteps  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'buildNumber' => 'setBuildNumber',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'parameters' => 'setParameters',
            'buildSteps' => 'setBuildSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  构建任务名称
    * buildNumber  构建编号
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * parameters  本次构建的参数，Map类型，敏感参数值返回*号
    * buildSteps  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'buildNumber' => 'getBuildNumber',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'parameters' => 'getParameters',
            'buildSteps' => 'getBuildSteps'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['buildSteps'] = isset($data['buildSteps']) ? $data['buildSteps'] : null;
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
    * Gets jobName
    *  构建任务名称
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
    * @param string|null $jobName 构建任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets buildNumber
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
    * Sets buildNumber
    *
    * @param int|null $buildNumber 构建编号
    *
    * @return $this
    */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;
        return $this;
    }

    /**
    * Gets projectId
    *  构建任务所在项目的ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 构建任务所在项目的ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  构建任务所在项目的名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 构建任务所在项目的名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets parameters
    *  本次构建的参数，Map类型，敏感参数值返回*号
    *
    * @return map[string,string]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,string]|null $parameters 本次构建的参数，Map类型，敏感参数值返回*号
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets buildSteps
    *  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildStep[]|null
    */
    public function getBuildSteps()
    {
        return $this->container['buildSteps'];
    }

    /**
    * Sets buildSteps
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildStep[]|null $buildSteps 本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @return $this
    */
    public function setBuildSteps($buildSteps)
    {
        $this->container['buildSteps'] = $buildSteps;
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

