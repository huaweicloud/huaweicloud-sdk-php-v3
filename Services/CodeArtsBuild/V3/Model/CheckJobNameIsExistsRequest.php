<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckJobNameIsExistsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckJobNameIsExistsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * jobName  任务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'jobName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * jobName  任务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'jobName' => null
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
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * jobName  任务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'jobName' => 'job_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * jobName  任务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'jobName' => 'setJobName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * jobName  任务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'jobName' => 'getJobName'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
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
    * Gets projectId
    *  CodeArts项目ID，32位数字、小写字母组合。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId CodeArts项目ID，32位数字、小写字母组合。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
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

