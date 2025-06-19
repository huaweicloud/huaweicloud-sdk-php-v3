<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BranchVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BranchVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * number  开发分支名称
    * isMaster  是否为Master分支
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planStartDate  开始时间
    * planStartTimestamp  开始时间戳
    * planEndDate  结束时间
    * planEndTimestamp  结束时间戳
    * asynGit  是否同步git库
    * projectUuid  项目ID（云龙场景，传入微服务ID）
    * projectName  项目名称（云龙场景，传入微服务名）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'number' => 'string',
            'isMaster' => 'string',
            'pbiId' => 'string',
            'pbiName' => 'string',
            'planStartDate' => 'string',
            'planStartTimestamp' => 'int',
            'planEndDate' => 'string',
            'planEndTimestamp' => 'int',
            'asynGit' => 'string',
            'projectUuid' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * number  开发分支名称
    * isMaster  是否为Master分支
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planStartDate  开始时间
    * planStartTimestamp  开始时间戳
    * planEndDate  结束时间
    * planEndTimestamp  结束时间戳
    * asynGit  是否同步git库
    * projectUuid  项目ID（云龙场景，传入微服务ID）
    * projectName  项目名称（云龙场景，传入微服务名）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'number' => null,
        'isMaster' => null,
        'pbiId' => null,
        'pbiName' => null,
        'planStartDate' => null,
        'planStartTimestamp' => 'int64',
        'planEndDate' => null,
        'planEndTimestamp' => 'int64',
        'asynGit' => null,
        'projectUuid' => null,
        'projectName' => null
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
    * name  名称
    * number  开发分支名称
    * isMaster  是否为Master分支
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planStartDate  开始时间
    * planStartTimestamp  开始时间戳
    * planEndDate  结束时间
    * planEndTimestamp  结束时间戳
    * asynGit  是否同步git库
    * projectUuid  项目ID（云龙场景，传入微服务ID）
    * projectName  项目名称（云龙场景，传入微服务名）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'number' => 'number',
            'isMaster' => 'is_master',
            'pbiId' => 'pbi_id',
            'pbiName' => 'pbi_name',
            'planStartDate' => 'plan_start_date',
            'planStartTimestamp' => 'plan_start_timestamp',
            'planEndDate' => 'plan_end_date',
            'planEndTimestamp' => 'plan_end_timestamp',
            'asynGit' => 'asyn_git',
            'projectUuid' => 'project_uuid',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * number  开发分支名称
    * isMaster  是否为Master分支
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planStartDate  开始时间
    * planStartTimestamp  开始时间戳
    * planEndDate  结束时间
    * planEndTimestamp  结束时间戳
    * asynGit  是否同步git库
    * projectUuid  项目ID（云龙场景，传入微服务ID）
    * projectName  项目名称（云龙场景，传入微服务名）
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'number' => 'setNumber',
            'isMaster' => 'setIsMaster',
            'pbiId' => 'setPbiId',
            'pbiName' => 'setPbiName',
            'planStartDate' => 'setPlanStartDate',
            'planStartTimestamp' => 'setPlanStartTimestamp',
            'planEndDate' => 'setPlanEndDate',
            'planEndTimestamp' => 'setPlanEndTimestamp',
            'asynGit' => 'setAsynGit',
            'projectUuid' => 'setProjectUuid',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * number  开发分支名称
    * isMaster  是否为Master分支
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planStartDate  开始时间
    * planStartTimestamp  开始时间戳
    * planEndDate  结束时间
    * planEndTimestamp  结束时间戳
    * asynGit  是否同步git库
    * projectUuid  项目ID（云龙场景，传入微服务ID）
    * projectName  项目名称（云龙场景，传入微服务名）
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'number' => 'getNumber',
            'isMaster' => 'getIsMaster',
            'pbiId' => 'getPbiId',
            'pbiName' => 'getPbiName',
            'planStartDate' => 'getPlanStartDate',
            'planStartTimestamp' => 'getPlanStartTimestamp',
            'planEndDate' => 'getPlanEndDate',
            'planEndTimestamp' => 'getPlanEndTimestamp',
            'asynGit' => 'getAsynGit',
            'projectUuid' => 'getProjectUuid',
            'projectName' => 'getProjectName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['isMaster'] = isset($data['isMaster']) ? $data['isMaster'] : null;
        $this->container['pbiId'] = isset($data['pbiId']) ? $data['pbiId'] : null;
        $this->container['pbiName'] = isset($data['pbiName']) ? $data['pbiName'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['planStartTimestamp'] = isset($data['planStartTimestamp']) ? $data['planStartTimestamp'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['planEndTimestamp'] = isset($data['planEndTimestamp']) ? $data['planEndTimestamp'] : null;
        $this->container['asynGit'] = isset($data['asynGit']) ? $data['asynGit'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
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
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  开发分支名称
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 开发分支名称
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets isMaster
    *  是否为Master分支
    *
    * @return string|null
    */
    public function getIsMaster()
    {
        return $this->container['isMaster'];
    }

    /**
    * Sets isMaster
    *
    * @param string|null $isMaster 是否为Master分支
    *
    * @return $this
    */
    public function setIsMaster($isMaster)
    {
        $this->container['isMaster'] = $isMaster;
        return $this;
    }

    /**
    * Gets pbiId
    *  PBI ID
    *
    * @return string|null
    */
    public function getPbiId()
    {
        return $this->container['pbiId'];
    }

    /**
    * Sets pbiId
    *
    * @param string|null $pbiId PBI ID
    *
    * @return $this
    */
    public function setPbiId($pbiId)
    {
        $this->container['pbiId'] = $pbiId;
        return $this;
    }

    /**
    * Gets pbiName
    *  PBI信息
    *
    * @return string|null
    */
    public function getPbiName()
    {
        return $this->container['pbiName'];
    }

    /**
    * Sets pbiName
    *
    * @param string|null $pbiName PBI信息
    *
    * @return $this
    */
    public function setPbiName($pbiName)
    {
        $this->container['pbiName'] = $pbiName;
        return $this;
    }

    /**
    * Gets planStartDate
    *  开始时间
    *
    * @return string|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param string|null $planStartDate 开始时间
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets planStartTimestamp
    *  开始时间戳
    *
    * @return int|null
    */
    public function getPlanStartTimestamp()
    {
        return $this->container['planStartTimestamp'];
    }

    /**
    * Sets planStartTimestamp
    *
    * @param int|null $planStartTimestamp 开始时间戳
    *
    * @return $this
    */
    public function setPlanStartTimestamp($planStartTimestamp)
    {
        $this->container['planStartTimestamp'] = $planStartTimestamp;
        return $this;
    }

    /**
    * Gets planEndDate
    *  结束时间
    *
    * @return string|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param string|null $planEndDate 结束时间
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets planEndTimestamp
    *  结束时间戳
    *
    * @return int|null
    */
    public function getPlanEndTimestamp()
    {
        return $this->container['planEndTimestamp'];
    }

    /**
    * Sets planEndTimestamp
    *
    * @param int|null $planEndTimestamp 结束时间戳
    *
    * @return $this
    */
    public function setPlanEndTimestamp($planEndTimestamp)
    {
        $this->container['planEndTimestamp'] = $planEndTimestamp;
        return $this;
    }

    /**
    * Gets asynGit
    *  是否同步git库
    *
    * @return string|null
    */
    public function getAsynGit()
    {
        return $this->container['asynGit'];
    }

    /**
    * Sets asynGit
    *
    * @param string|null $asynGit 是否同步git库
    *
    * @return $this
    */
    public function setAsynGit($asynGit)
    {
        $this->container['asynGit'] = $asynGit;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID（云龙场景，传入微服务ID）
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 项目ID（云龙场景，传入微服务ID）
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称（云龙场景，传入微服务名）
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
    * @param string|null $projectName 项目名称（云龙场景，传入微服务名）
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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

