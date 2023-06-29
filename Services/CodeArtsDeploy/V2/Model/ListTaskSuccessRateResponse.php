<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskSuccessRateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskSuccessRateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * projectName  项目名称
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * tasksSuccessRate  应用的成功率列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectName' => 'string',
            'startDate' => 'string',
            'endDate' => 'string',
            'tasksSuccessRate' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskSuccessRate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * projectName  项目名称
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * tasksSuccessRate  应用的成功率列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectName' => null,
        'startDate' => null,
        'endDate' => null,
        'tasksSuccessRate' => null
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
    * projectId  项目ID
    * projectName  项目名称
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * tasksSuccessRate  应用的成功率列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'tasksSuccessRate' => 'tasks_success_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * projectName  项目名称
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * tasksSuccessRate  应用的成功率列表
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'tasksSuccessRate' => 'setTasksSuccessRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * projectName  项目名称
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * tasksSuccessRate  应用的成功率列表
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'tasksSuccessRate' => 'getTasksSuccessRate'
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
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['tasksSuccessRate'] = isset($data['tasksSuccessRate']) ? $data['tasksSuccessRate'] : null;
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
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
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
    *  项目名称
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
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets startDate
    *  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets tasksSuccessRate
    *  应用的成功率列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskSuccessRate[]|null
    */
    public function getTasksSuccessRate()
    {
        return $this->container['tasksSuccessRate'];
    }

    /**
    * Sets tasksSuccessRate
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskSuccessRate[]|null $tasksSuccessRate 应用的成功率列表
    *
    * @return $this
    */
    public function setTasksSuccessRate($tasksSuccessRate)
    {
        $this->container['tasksSuccessRate'] = $tasksSuccessRate;
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

