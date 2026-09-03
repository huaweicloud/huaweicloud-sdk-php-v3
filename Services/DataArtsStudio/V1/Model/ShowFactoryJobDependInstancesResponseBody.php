<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFactoryJobDependInstancesResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFactoryJobDependInstancesResponse_body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  依赖的作业名称。
    * jobPath  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    * dependLayer  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    * workspaceName  依赖的作业所在的工作空间名称。
    * owner  作业责任人。创建作业时指定的作业负责人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'jobPath' => 'string',
            'dependLayer' => 'string',
            'workspaceName' => 'string',
            'owner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  依赖的作业名称。
    * jobPath  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    * dependLayer  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    * workspaceName  依赖的作业所在的工作空间名称。
    * owner  作业责任人。创建作业时指定的作业负责人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'jobPath' => null,
        'dependLayer' => null,
        'workspaceName' => null,
        'owner' => null
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
    * jobName  依赖的作业名称。
    * jobPath  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    * dependLayer  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    * workspaceName  依赖的作业所在的工作空间名称。
    * owner  作业责任人。创建作业时指定的作业负责人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'jobPath' => 'job_path',
            'dependLayer' => 'depend_layer',
            'workspaceName' => 'workspace_name',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  依赖的作业名称。
    * jobPath  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    * dependLayer  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    * workspaceName  依赖的作业所在的工作空间名称。
    * owner  作业责任人。创建作业时指定的作业负责人。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'jobPath' => 'setJobPath',
            'dependLayer' => 'setDependLayer',
            'workspaceName' => 'setWorkspaceName',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  依赖的作业名称。
    * jobPath  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    * dependLayer  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    * workspaceName  依赖的作业所在的工作空间名称。
    * owner  作业责任人。创建作业时指定的作业负责人。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'jobPath' => 'getJobPath',
            'dependLayer' => 'getDependLayer',
            'workspaceName' => 'getWorkspaceName',
            'owner' => 'getOwner'
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
    const DEPEND_LAYER_PARENT = 'parent';
    const DEPEND_LAYER_CHILD = 'child';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDependLayerAllowableValues()
    {
        return [
            self::DEPEND_LAYER_PARENT,
            self::DEPEND_LAYER_CHILD,
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobPath'] = isset($data['jobPath']) ? $data['jobPath'] : null;
        $this->container['dependLayer'] = isset($data['dependLayer']) ? $data['dependLayer'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDependLayerAllowableValues();
                if (!is_null($this->container['dependLayer']) && !in_array($this->container['dependLayer'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dependLayer', must be one of '%s'",
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
    * Gets jobName
    *  依赖的作业名称。
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
    * @param string|null $jobName 依赖的作业名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobPath
    *  依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    *
    * @return string|null
    */
    public function getJobPath()
    {
        return $this->container['jobPath'];
    }

    /**
    * Sets jobPath
    *
    * @param string|null $jobPath 依赖的作业所在目录路径。作业在根目录下返回\"/\"。
    *
    * @return $this
    */
    public function setJobPath($jobPath)
    {
        $this->container['jobPath'] = $jobPath;
        return $this;
    }

    /**
    * Gets dependLayer
    *  当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    *
    * @return string|null
    */
    public function getDependLayer()
    {
        return $this->container['dependLayer'];
    }

    /**
    * Sets dependLayer
    *
    * @param string|null $dependLayer 当前作业与查询目标作业的依赖关系方向。 取值范围： - parent：当前作业是查询目标作业的上游作业。 - child：当前作业是查询目标作业的下游作业。
    *
    * @return $this
    */
    public function setDependLayer($dependLayer)
    {
        $this->container['dependLayer'] = $dependLayer;
        return $this;
    }

    /**
    * Gets workspaceName
    *  依赖的作业所在的工作空间名称。
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 依赖的作业所在的工作空间名称。
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets owner
    *  作业责任人。创建作业时指定的作业负责人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 作业责任人。创建作业时指定的作业负责人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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

