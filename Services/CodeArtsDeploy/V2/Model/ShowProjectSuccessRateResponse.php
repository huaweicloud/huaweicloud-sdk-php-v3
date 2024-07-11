<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectSuccessRateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectSuccessRateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successRate  成功率
    * projectId  项目id
    * projectName  项目名称
    * startDate  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    * taskCount  查询到的应用数
    * recordCount  查询到的应用部署记录数
    * successRecordCount  成功的应用部署记录数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successRate' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'startDate' => 'string',
            'endDate' => 'string',
            'taskCount' => 'int',
            'recordCount' => 'int',
            'successRecordCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successRate  成功率
    * projectId  项目id
    * projectName  项目名称
    * startDate  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    * taskCount  查询到的应用数
    * recordCount  查询到的应用部署记录数
    * successRecordCount  成功的应用部署记录数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successRate' => null,
        'projectId' => null,
        'projectName' => null,
        'startDate' => null,
        'endDate' => null,
        'taskCount' => null,
        'recordCount' => null,
        'successRecordCount' => null
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
    * successRate  成功率
    * projectId  项目id
    * projectName  项目名称
    * startDate  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    * taskCount  查询到的应用数
    * recordCount  查询到的应用部署记录数
    * successRecordCount  成功的应用部署记录数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successRate' => 'success_rate',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'taskCount' => 'task_count',
            'recordCount' => 'record_count',
            'successRecordCount' => 'success_record_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successRate  成功率
    * projectId  项目id
    * projectName  项目名称
    * startDate  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    * taskCount  查询到的应用数
    * recordCount  查询到的应用部署记录数
    * successRecordCount  成功的应用部署记录数
    *
    * @var string[]
    */
    protected static $setters = [
            'successRate' => 'setSuccessRate',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'taskCount' => 'setTaskCount',
            'recordCount' => 'setRecordCount',
            'successRecordCount' => 'setSuccessRecordCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successRate  成功率
    * projectId  项目id
    * projectName  项目名称
    * startDate  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    * taskCount  查询到的应用数
    * recordCount  查询到的应用部署记录数
    * successRecordCount  成功的应用部署记录数
    *
    * @var string[]
    */
    protected static $getters = [
            'successRate' => 'getSuccessRate',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'taskCount' => 'getTaskCount',
            'recordCount' => 'getRecordCount',
            'successRecordCount' => 'getSuccessRecordCount'
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
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['taskCount'] = isset($data['taskCount']) ? $data['taskCount'] : null;
        $this->container['recordCount'] = isset($data['recordCount']) ? $data['recordCount'] : null;
        $this->container['successRecordCount'] = isset($data['successRecordCount']) ? $data['successRecordCount'] : null;
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
    * Gets successRate
    *  成功率
    *
    * @return string|null
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param string|null $successRate 成功率
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
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
    *  应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
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
    * @param string|null $startDate 应用部署开始时间范围的左边界（包含），格式yyyy-MM-dd
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
    *  应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
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
    * @param string|null $endDate 应用部署开始时间范围的右边界（包含），格式yyyy-MM-dd
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets taskCount
    *  查询到的应用数
    *
    * @return int|null
    */
    public function getTaskCount()
    {
        return $this->container['taskCount'];
    }

    /**
    * Sets taskCount
    *
    * @param int|null $taskCount 查询到的应用数
    *
    * @return $this
    */
    public function setTaskCount($taskCount)
    {
        $this->container['taskCount'] = $taskCount;
        return $this;
    }

    /**
    * Gets recordCount
    *  查询到的应用部署记录数
    *
    * @return int|null
    */
    public function getRecordCount()
    {
        return $this->container['recordCount'];
    }

    /**
    * Sets recordCount
    *
    * @param int|null $recordCount 查询到的应用部署记录数
    *
    * @return $this
    */
    public function setRecordCount($recordCount)
    {
        $this->container['recordCount'] = $recordCount;
        return $this;
    }

    /**
    * Gets successRecordCount
    *  成功的应用部署记录数
    *
    * @return int|null
    */
    public function getSuccessRecordCount()
    {
        return $this->container['successRecordCount'];
    }

    /**
    * Sets successRecordCount
    *
    * @param int|null $successRecordCount 成功的应用部署记录数
    *
    * @return $this
    */
    public function setSuccessRecordCount($successRecordCount)
    {
        $this->container['successRecordCount'] = $successRecordCount;
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

