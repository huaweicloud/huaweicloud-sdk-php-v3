<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVoiceTrainingJobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVoiceTrainingJobRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    * updateUntil  过滤更新时间<=输入时间的记录。
    * updateSince  过滤更新时间>=输入时间的记录。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * state  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    * jobId  任务id。
    * voiceName  声音名称。
    * tag  任务标签。
    * jobType  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    * batchName  批次名称。
    * sortKey  排序字段，当前支持：ceate_time/update_time
    * sortDir  排序规则：desc(降序)/asc(升序)
    * isOndemandResource  是否是按需任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'createUntil' => 'string',
            'createSince' => 'string',
            'updateUntil' => 'string',
            'updateSince' => 'string',
            'xAppUserId' => 'string',
            'state' => 'string',
            'jobId' => 'string',
            'voiceName' => 'string',
            'tag' => 'string',
            'jobType' => 'string',
            'batchName' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'isOndemandResource' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    * updateUntil  过滤更新时间<=输入时间的记录。
    * updateSince  过滤更新时间>=输入时间的记录。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * state  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    * jobId  任务id。
    * voiceName  声音名称。
    * tag  任务标签。
    * jobType  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    * batchName  批次名称。
    * sortKey  排序字段，当前支持：ceate_time/update_time
    * sortDir  排序规则：desc(降序)/asc(升序)
    * isOndemandResource  是否是按需任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'uint32',
        'limit' => 'uint32',
        'createUntil' => null,
        'createSince' => null,
        'updateUntil' => null,
        'updateSince' => null,
        'xAppUserId' => null,
        'state' => null,
        'jobId' => null,
        'voiceName' => null,
        'tag' => null,
        'jobType' => null,
        'batchName' => null,
        'sortKey' => null,
        'sortDir' => null,
        'isOndemandResource' => null
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
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    * updateUntil  过滤更新时间<=输入时间的记录。
    * updateSince  过滤更新时间>=输入时间的记录。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * state  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    * jobId  任务id。
    * voiceName  声音名称。
    * tag  任务标签。
    * jobType  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    * batchName  批次名称。
    * sortKey  排序字段，当前支持：ceate_time/update_time
    * sortDir  排序规则：desc(降序)/asc(升序)
    * isOndemandResource  是否是按需任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'createUntil' => 'create_until',
            'createSince' => 'create_since',
            'updateUntil' => 'update_until',
            'updateSince' => 'update_since',
            'xAppUserId' => 'X-App-UserId',
            'state' => 'state',
            'jobId' => 'job_id',
            'voiceName' => 'voice_name',
            'tag' => 'tag',
            'jobType' => 'job_type',
            'batchName' => 'batch_name',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'isOndemandResource' => 'is_ondemand_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    * updateUntil  过滤更新时间<=输入时间的记录。
    * updateSince  过滤更新时间>=输入时间的记录。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * state  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    * jobId  任务id。
    * voiceName  声音名称。
    * tag  任务标签。
    * jobType  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    * batchName  批次名称。
    * sortKey  排序字段，当前支持：ceate_time/update_time
    * sortDir  排序规则：desc(降序)/asc(升序)
    * isOndemandResource  是否是按需任务
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'createUntil' => 'setCreateUntil',
            'createSince' => 'setCreateSince',
            'updateUntil' => 'setUpdateUntil',
            'updateSince' => 'setUpdateSince',
            'xAppUserId' => 'setXAppUserId',
            'state' => 'setState',
            'jobId' => 'setJobId',
            'voiceName' => 'setVoiceName',
            'tag' => 'setTag',
            'jobType' => 'setJobType',
            'batchName' => 'setBatchName',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'isOndemandResource' => 'setIsOndemandResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    * updateUntil  过滤更新时间<=输入时间的记录。
    * updateSince  过滤更新时间>=输入时间的记录。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * state  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    * jobId  任务id。
    * voiceName  声音名称。
    * tag  任务标签。
    * jobType  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    * batchName  批次名称。
    * sortKey  排序字段，当前支持：ceate_time/update_time
    * sortDir  排序规则：desc(降序)/asc(升序)
    * isOndemandResource  是否是按需任务
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'createUntil' => 'getCreateUntil',
            'createSince' => 'getCreateSince',
            'updateUntil' => 'getUpdateUntil',
            'updateSince' => 'getUpdateSince',
            'xAppUserId' => 'getXAppUserId',
            'state' => 'getState',
            'jobId' => 'getJobId',
            'voiceName' => 'getVoiceName',
            'tag' => 'getTag',
            'jobType' => 'getJobType',
            'batchName' => 'getBatchName',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'isOndemandResource' => 'getIsOndemandResource'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['createUntil'] = isset($data['createUntil']) ? $data['createUntil'] : null;
        $this->container['createSince'] = isset($data['createSince']) ? $data['createSince'] : null;
        $this->container['updateUntil'] = isset($data['updateUntil']) ? $data['updateUntil'] : null;
        $this->container['updateSince'] = isset($data['updateSince']) ? $data['updateSince'] : null;
        $this->container['xAppUserId'] = isset($data['xAppUserId']) ? $data['xAppUserId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['voiceName'] = isset($data['voiceName']) ? $data['voiceName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['isOndemandResource'] = isset($data['isOndemandResource']) ? $data['isOndemandResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createUntil']) && (mb_strlen($this->container['createUntil']) > 20)) {
                $invalidProperties[] = "invalid value for 'createUntil', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createUntil']) && (mb_strlen($this->container['createUntil']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUntil', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createSince']) && (mb_strlen($this->container['createSince']) > 20)) {
                $invalidProperties[] = "invalid value for 'createSince', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createSince']) && (mb_strlen($this->container['createSince']) < 0)) {
                $invalidProperties[] = "invalid value for 'createSince', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUntil']) && (mb_strlen($this->container['updateUntil']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateUntil', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateUntil']) && (mb_strlen($this->container['updateUntil']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUntil', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateSince']) && (mb_strlen($this->container['updateSince']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateSince', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateSince']) && (mb_strlen($this->container['updateSince']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateSince', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 128)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['voiceName']) && (mb_strlen($this->container['voiceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['voiceName']) && (mb_strlen($this->container['voiceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 32)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
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
    * Gets offset
    *  偏移量，表示从此偏移量开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets createUntil
    *  过滤创建时间<=输入时间的记录。
    *
    * @return string|null
    */
    public function getCreateUntil()
    {
        return $this->container['createUntil'];
    }

    /**
    * Sets createUntil
    *
    * @param string|null $createUntil 过滤创建时间<=输入时间的记录。
    *
    * @return $this
    */
    public function setCreateUntil($createUntil)
    {
        $this->container['createUntil'] = $createUntil;
        return $this;
    }

    /**
    * Gets createSince
    *  过滤创建时间>=输入时间的记录。
    *
    * @return string|null
    */
    public function getCreateSince()
    {
        return $this->container['createSince'];
    }

    /**
    * Sets createSince
    *
    * @param string|null $createSince 过滤创建时间>=输入时间的记录。
    *
    * @return $this
    */
    public function setCreateSince($createSince)
    {
        $this->container['createSince'] = $createSince;
        return $this;
    }

    /**
    * Gets updateUntil
    *  过滤更新时间<=输入时间的记录。
    *
    * @return string|null
    */
    public function getUpdateUntil()
    {
        return $this->container['updateUntil'];
    }

    /**
    * Sets updateUntil
    *
    * @param string|null $updateUntil 过滤更新时间<=输入时间的记录。
    *
    * @return $this
    */
    public function setUpdateUntil($updateUntil)
    {
        $this->container['updateUntil'] = $updateUntil;
        return $this;
    }

    /**
    * Gets updateSince
    *  过滤更新时间>=输入时间的记录。
    *
    * @return string|null
    */
    public function getUpdateSince()
    {
        return $this->container['updateSince'];
    }

    /**
    * Sets updateSince
    *
    * @param string|null $updateSince 过滤更新时间>=输入时间的记录。
    *
    * @return $this
    */
    public function setUpdateSince($updateSince)
    {
        $this->container['updateSince'] = $updateSince;
        return $this;
    }

    /**
    * Gets xAppUserId
    *  第三方用户ID。不允许输入中文。
    *
    * @return string|null
    */
    public function getXAppUserId()
    {
        return $this->container['xAppUserId'];
    }

    /**
    * Sets xAppUserId
    *
    * @param string|null $xAppUserId 第三方用户ID。不允许输入中文。
    *
    * @return $this
    */
    public function setXAppUserId($xAppUserId)
    {
        $this->container['xAppUserId'] = $xAppUserId;
        return $this;
    }

    /**
    * Gets state
    *  任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态，默认所有状态。 可多个状态查询，使用英文逗号分隔。 如state=FAILED,WAITING
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id。
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
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets voiceName
    *  声音名称。
    *
    * @return string|null
    */
    public function getVoiceName()
    {
        return $this->container['voiceName'];
    }

    /**
    * Sets voiceName
    *
    * @param string|null $voiceName 声音名称。
    *
    * @return $this
    */
    public function setVoiceName($voiceName)
    {
        $this->container['voiceName'] = $voiceName;
        return $this;
    }

    /**
    * Gets tag
    *  任务标签。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 任务标签。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets jobType
    *  训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 训练类型。 * BASIC: 基础版(20句话) * MIDDLE: 进阶版(100句话) * ADVANCE: 高级版 * THIRD_PARTY: 第三方出门问问训练版 * THIRD_PARTY_LJZN: 第三方逻辑智能训练版 * FLEXUS: Flexus版---用的是大模型特征提取
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets batchName
    *  批次名称。
    *
    * @return string|null
    */
    public function getBatchName()
    {
        return $this->container['batchName'];
    }

    /**
    * Sets batchName
    *
    * @param string|null $batchName 批次名称。
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段，当前支持：ceate_time/update_time
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段，当前支持：ceate_time/update_time
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序规则：desc(降序)/asc(升序)
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序规则：desc(降序)/asc(升序)
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets isOndemandResource
    *  是否是按需任务
    *
    * @return bool|null
    */
    public function getIsOndemandResource()
    {
        return $this->container['isOndemandResource'];
    }

    /**
    * Sets isOndemandResource
    *
    * @param bool|null $isOndemandResource 是否是按需任务
    *
    * @return $this
    */
    public function setIsOndemandResource($isOndemandResource)
    {
        $this->container['isOndemandResource'] = $isOndemandResource;
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

