<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAssessTaskResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAssessTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识ID
    * applicationName  应用名称
    * applicationId  应用ID
    * status  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    * reason  失败原因
    * progress  评估进度
    * score  score
    * assessReportId  评估报告编号ID
    * createTime  创建时间
    * lastAssessTime  最新评估时间
    * lastUpdateTime  最新更新时间
    * creator  创建人ID
    * creatorName  创建人名称
    * operator  操作人ID
    * operatorName  操作人名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'applicationName' => 'string',
            'applicationId' => 'string',
            'status' => 'string',
            'reason' => 'string',
            'progress' => 'int',
            'score' => 'double',
            'assessReportId' => 'string',
            'createTime' => 'int',
            'lastAssessTime' => 'int',
            'lastUpdateTime' => 'int',
            'creator' => 'string',
            'creatorName' => 'string',
            'operator' => 'string',
            'operatorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识ID
    * applicationName  应用名称
    * applicationId  应用ID
    * status  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    * reason  失败原因
    * progress  评估进度
    * score  score
    * assessReportId  评估报告编号ID
    * createTime  创建时间
    * lastAssessTime  最新评估时间
    * lastUpdateTime  最新更新时间
    * creator  创建人ID
    * creatorName  创建人名称
    * operator  操作人ID
    * operatorName  操作人名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'applicationName' => null,
        'applicationId' => null,
        'status' => null,
        'reason' => null,
        'progress' => null,
        'score' => 'double',
        'assessReportId' => null,
        'createTime' => 'int64',
        'lastAssessTime' => 'int64',
        'lastUpdateTime' => 'int64',
        'creator' => null,
        'creatorName' => null,
        'operator' => null,
        'operatorName' => null
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
    * id  唯一标识ID
    * applicationName  应用名称
    * applicationId  应用ID
    * status  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    * reason  失败原因
    * progress  评估进度
    * score  score
    * assessReportId  评估报告编号ID
    * createTime  创建时间
    * lastAssessTime  最新评估时间
    * lastUpdateTime  最新更新时间
    * creator  创建人ID
    * creatorName  创建人名称
    * operator  操作人ID
    * operatorName  操作人名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'applicationName' => 'application_name',
            'applicationId' => 'application_id',
            'status' => 'status',
            'reason' => 'reason',
            'progress' => 'progress',
            'score' => 'score',
            'assessReportId' => 'assess_report_id',
            'createTime' => 'create_time',
            'lastAssessTime' => 'last_assess_time',
            'lastUpdateTime' => 'last_update_time',
            'creator' => 'creator',
            'creatorName' => 'creator_name',
            'operator' => 'operator',
            'operatorName' => 'operator_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识ID
    * applicationName  应用名称
    * applicationId  应用ID
    * status  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    * reason  失败原因
    * progress  评估进度
    * score  score
    * assessReportId  评估报告编号ID
    * createTime  创建时间
    * lastAssessTime  最新评估时间
    * lastUpdateTime  最新更新时间
    * creator  创建人ID
    * creatorName  创建人名称
    * operator  操作人ID
    * operatorName  操作人名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'applicationName' => 'setApplicationName',
            'applicationId' => 'setApplicationId',
            'status' => 'setStatus',
            'reason' => 'setReason',
            'progress' => 'setProgress',
            'score' => 'setScore',
            'assessReportId' => 'setAssessReportId',
            'createTime' => 'setCreateTime',
            'lastAssessTime' => 'setLastAssessTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'creator' => 'setCreator',
            'creatorName' => 'setCreatorName',
            'operator' => 'setOperator',
            'operatorName' => 'setOperatorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识ID
    * applicationName  应用名称
    * applicationId  应用ID
    * status  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    * reason  失败原因
    * progress  评估进度
    * score  score
    * assessReportId  评估报告编号ID
    * createTime  创建时间
    * lastAssessTime  最新评估时间
    * lastUpdateTime  最新更新时间
    * creator  创建人ID
    * creatorName  创建人名称
    * operator  操作人ID
    * operatorName  操作人名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'applicationName' => 'getApplicationName',
            'applicationId' => 'getApplicationId',
            'status' => 'getStatus',
            'reason' => 'getReason',
            'progress' => 'getProgress',
            'score' => 'getScore',
            'assessReportId' => 'getAssessReportId',
            'createTime' => 'getCreateTime',
            'lastAssessTime' => 'getLastAssessTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'creator' => 'getCreator',
            'creatorName' => 'getCreatorName',
            'operator' => 'getOperator',
            'operatorName' => 'getOperatorName'
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
    const STATUS_NO_ASSESSMENT = 'no_assessment';
    const STATUS_ASSESS_FINISH = 'assess_finish';
    const STATUS_ASSESS_FAILED = 'assess_failed';
    const STATUS_ASSESSING = 'assessing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NO_ASSESSMENT,
            self::STATUS_ASSESS_FINISH,
            self::STATUS_ASSESS_FAILED,
            self::STATUS_ASSESSING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['assessReportId'] = isset($data['assessReportId']) ? $data['assessReportId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastAssessTime'] = isset($data['lastAssessTime']) ? $data['lastAssessTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operatorName'] = isset($data['operatorName']) ? $data['operatorName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assessReportId']) && (mb_strlen($this->container['assessReportId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assessReportId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assessReportId']) && (mb_strlen($this->container['assessReportId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assessReportId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 64)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 64)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operatorName']) && (mb_strlen($this->container['operatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'operatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operatorName']) && (mb_strlen($this->container['operatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatorName', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  唯一标识ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets applicationName
    *  应用名称
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName 应用名称
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用ID
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用ID
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets status
    *  评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 评估任务状态.  no_assessment 未评估 assess_finish 评估完成 assess_failed 评估失败 assessing     评估中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  失败原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 失败原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets progress
    *  评估进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 评估进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets score
    *  score
    *
    * @return double|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param double|null $score score
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets assessReportId
    *  评估报告编号ID
    *
    * @return string|null
    */
    public function getAssessReportId()
    {
        return $this->container['assessReportId'];
    }

    /**
    * Sets assessReportId
    *
    * @param string|null $assessReportId 评估报告编号ID
    *
    * @return $this
    */
    public function setAssessReportId($assessReportId)
    {
        $this->container['assessReportId'] = $assessReportId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastAssessTime
    *  最新评估时间
    *
    * @return int|null
    */
    public function getLastAssessTime()
    {
        return $this->container['lastAssessTime'];
    }

    /**
    * Sets lastAssessTime
    *
    * @param int|null $lastAssessTime 最新评估时间
    *
    * @return $this
    */
    public function setLastAssessTime($lastAssessTime)
    {
        $this->container['lastAssessTime'] = $lastAssessTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最新更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最新更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人ID
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets operator
    *  操作人ID
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人ID
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operatorName
    *  操作人名称
    *
    * @return string|null
    */
    public function getOperatorName()
    {
        return $this->container['operatorName'];
    }

    /**
    * Sets operatorName
    *
    * @param string|null $operatorName 操作人名称
    *
    * @return $this
    */
    public function setOperatorName($operatorName)
    {
        $this->container['operatorName'] = $operatorName;
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

