<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVoiceTrainingJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVoiceTrainingJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  jobType
    * jobId  任务id。
    * appUserId  用户id。
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * sex  性别。 * FEMALE: 女性 * MALE: 是男性
    * language  语言。
    * state  state
    * rejectTimes  本次任务中该状态出现的次数
    * assetId  当任务状态为成功时呈现,音色模型在资产库中的id。
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * voiceAuthorizationUrl  用户授权书连接。
    * createType  createType
    * tag  tag
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    * allocatedResource  allocatedResource
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\JobType',
            'jobId' => 'string',
            'appUserId' => 'string',
            'voiceName' => 'string',
            'sex' => 'string',
            'language' => 'string',
            'state' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\JobState',
            'rejectTimes' => 'int',
            'assetId' => 'string',
            'jobFailedCode' => 'string',
            'jobFailedReason' => 'string',
            'createTime' => 'int',
            'lastupdateTime' => 'int',
            'voiceAuthorizationUrl' => 'string',
            'createType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType',
            'tag' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag',
            'phone' => 'string',
            'dhtmsJobId' => 'string',
            'batchName' => 'string',
            'allocatedResource' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingAllocatedResource'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  jobType
    * jobId  任务id。
    * appUserId  用户id。
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * sex  性别。 * FEMALE: 女性 * MALE: 是男性
    * language  语言。
    * state  state
    * rejectTimes  本次任务中该状态出现的次数
    * assetId  当任务状态为成功时呈现,音色模型在资产库中的id。
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * voiceAuthorizationUrl  用户授权书连接。
    * createType  createType
    * tag  tag
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    * allocatedResource  allocatedResource
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'jobId' => null,
        'appUserId' => null,
        'voiceName' => null,
        'sex' => null,
        'language' => null,
        'state' => null,
        'rejectTimes' => null,
        'assetId' => null,
        'jobFailedCode' => null,
        'jobFailedReason' => null,
        'createTime' => 'int64',
        'lastupdateTime' => 'int64',
        'voiceAuthorizationUrl' => null,
        'createType' => null,
        'tag' => null,
        'phone' => null,
        'dhtmsJobId' => null,
        'batchName' => null,
        'allocatedResource' => null
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
    * jobType  jobType
    * jobId  任务id。
    * appUserId  用户id。
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * sex  性别。 * FEMALE: 女性 * MALE: 是男性
    * language  语言。
    * state  state
    * rejectTimes  本次任务中该状态出现的次数
    * assetId  当任务状态为成功时呈现,音色模型在资产库中的id。
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * voiceAuthorizationUrl  用户授权书连接。
    * createType  createType
    * tag  tag
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    * allocatedResource  allocatedResource
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'jobId' => 'job_id',
            'appUserId' => 'app_user_id',
            'voiceName' => 'voice_name',
            'sex' => 'sex',
            'language' => 'language',
            'state' => 'state',
            'rejectTimes' => 'reject_times',
            'assetId' => 'asset_id',
            'jobFailedCode' => 'job_failed_code',
            'jobFailedReason' => 'job_failed_reason',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'voiceAuthorizationUrl' => 'voice_authorization_url',
            'createType' => 'create_type',
            'tag' => 'tag',
            'phone' => 'phone',
            'dhtmsJobId' => 'dhtms_job_id',
            'batchName' => 'batch_name',
            'allocatedResource' => 'allocated_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  jobType
    * jobId  任务id。
    * appUserId  用户id。
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * sex  性别。 * FEMALE: 女性 * MALE: 是男性
    * language  语言。
    * state  state
    * rejectTimes  本次任务中该状态出现的次数
    * assetId  当任务状态为成功时呈现,音色模型在资产库中的id。
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * voiceAuthorizationUrl  用户授权书连接。
    * createType  createType
    * tag  tag
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    * allocatedResource  allocatedResource
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'jobId' => 'setJobId',
            'appUserId' => 'setAppUserId',
            'voiceName' => 'setVoiceName',
            'sex' => 'setSex',
            'language' => 'setLanguage',
            'state' => 'setState',
            'rejectTimes' => 'setRejectTimes',
            'assetId' => 'setAssetId',
            'jobFailedCode' => 'setJobFailedCode',
            'jobFailedReason' => 'setJobFailedReason',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'voiceAuthorizationUrl' => 'setVoiceAuthorizationUrl',
            'createType' => 'setCreateType',
            'tag' => 'setTag',
            'phone' => 'setPhone',
            'dhtmsJobId' => 'setDhtmsJobId',
            'batchName' => 'setBatchName',
            'allocatedResource' => 'setAllocatedResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  jobType
    * jobId  任务id。
    * appUserId  用户id。
    * voiceName  音色名称。该名称会作为资产库中音色模型资产名称。
    * sex  性别。 * FEMALE: 女性 * MALE: 是男性
    * language  语言。
    * state  state
    * rejectTimes  本次任务中该状态出现的次数
    * assetId  当任务状态为成功时呈现,音色模型在资产库中的id。
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * voiceAuthorizationUrl  用户授权书连接。
    * createType  createType
    * tag  tag
    * phone  手机号
    * dhtmsJobId  形象制作任务id
    * batchName  批次名称
    * allocatedResource  allocatedResource
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'jobId' => 'getJobId',
            'appUserId' => 'getAppUserId',
            'voiceName' => 'getVoiceName',
            'sex' => 'getSex',
            'language' => 'getLanguage',
            'state' => 'getState',
            'rejectTimes' => 'getRejectTimes',
            'assetId' => 'getAssetId',
            'jobFailedCode' => 'getJobFailedCode',
            'jobFailedReason' => 'getJobFailedReason',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'voiceAuthorizationUrl' => 'getVoiceAuthorizationUrl',
            'createType' => 'getCreateType',
            'tag' => 'getTag',
            'phone' => 'getPhone',
            'dhtmsJobId' => 'getDhtmsJobId',
            'batchName' => 'getBatchName',
            'allocatedResource' => 'getAllocatedResource'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['appUserId'] = isset($data['appUserId']) ? $data['appUserId'] : null;
        $this->container['voiceName'] = isset($data['voiceName']) ? $data['voiceName'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['rejectTimes'] = isset($data['rejectTimes']) ? $data['rejectTimes'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['jobFailedCode'] = isset($data['jobFailedCode']) ? $data['jobFailedCode'] : null;
        $this->container['jobFailedReason'] = isset($data['jobFailedReason']) ? $data['jobFailedReason'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['voiceAuthorizationUrl'] = isset($data['voiceAuthorizationUrl']) ? $data['voiceAuthorizationUrl'] : null;
        $this->container['createType'] = isset($data['createType']) ? $data['createType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['dhtmsJobId'] = isset($data['dhtmsJobId']) ? $data['dhtmsJobId'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
        $this->container['allocatedResource'] = isset($data['allocatedResource']) ? $data['allocatedResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['voiceName']) && (mb_strlen($this->container['voiceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['voiceName']) && (mb_strlen($this->container['voiceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 64)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 64)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rejectTimes']) && ($this->container['rejectTimes'] > 10)) {
                $invalidProperties[] = "invalid value for 'rejectTimes', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['rejectTimes']) && ($this->container['rejectTimes'] < 1)) {
                $invalidProperties[] = "invalid value for 'rejectTimes', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobFailedCode']) && (mb_strlen($this->container['jobFailedCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobFailedCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobFailedCode']) && (mb_strlen($this->container['jobFailedCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobFailedCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobFailedReason']) && (mb_strlen($this->container['jobFailedReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobFailedReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobFailedReason']) && (mb_strlen($this->container['jobFailedReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobFailedReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastupdateTime']) && ($this->container['lastupdateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lastupdateTime']) && ($this->container['lastupdateTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['voiceAuthorizationUrl']) && (mb_strlen($this->container['voiceAuthorizationUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'voiceAuthorizationUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['voiceAuthorizationUrl']) && (mb_strlen($this->container['voiceAuthorizationUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceAuthorizationUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 16)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dhtmsJobId']) && (mb_strlen($this->container['dhtmsJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dhtmsJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dhtmsJobId']) && (mb_strlen($this->container['dhtmsJobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dhtmsJobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
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
    * Gets jobType
    *  jobType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\JobType|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\JobType|null $jobType jobType
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
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
    * Gets appUserId
    *  用户id。
    *
    * @return string|null
    */
    public function getAppUserId()
    {
        return $this->container['appUserId'];
    }

    /**
    * Sets appUserId
    *
    * @param string|null $appUserId 用户id。
    *
    * @return $this
    */
    public function setAppUserId($appUserId)
    {
        $this->container['appUserId'] = $appUserId;
        return $this;
    }

    /**
    * Gets voiceName
    *  音色名称。该名称会作为资产库中音色模型资产名称。
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
    * @param string|null $voiceName 音色名称。该名称会作为资产库中音色模型资产名称。
    *
    * @return $this
    */
    public function setVoiceName($voiceName)
    {
        $this->container['voiceName'] = $voiceName;
        return $this;
    }

    /**
    * Gets sex
    *  性别。 * FEMALE: 女性 * MALE: 是男性
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别。 * FEMALE: 女性 * MALE: 是男性
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets language
    *  语言。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\JobState|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\JobState|null $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets rejectTimes
    *  本次任务中该状态出现的次数
    *
    * @return int|null
    */
    public function getRejectTimes()
    {
        return $this->container['rejectTimes'];
    }

    /**
    * Sets rejectTimes
    *
    * @param int|null $rejectTimes 本次任务中该状态出现的次数
    *
    * @return $this
    */
    public function setRejectTimes($rejectTimes)
    {
        $this->container['rejectTimes'] = $rejectTimes;
        return $this;
    }

    /**
    * Gets assetId
    *  当任务状态为成功时呈现,音色模型在资产库中的id。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 当任务状态为成功时呈现,音色模型在资产库中的id。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets jobFailedCode
    *  当任务失败时呈现,失败错误码。
    *
    * @return string|null
    */
    public function getJobFailedCode()
    {
        return $this->container['jobFailedCode'];
    }

    /**
    * Sets jobFailedCode
    *
    * @param string|null $jobFailedCode 当任务失败时呈现,失败错误码。
    *
    * @return $this
    */
    public function setJobFailedCode($jobFailedCode)
    {
        $this->container['jobFailedCode'] = $jobFailedCode;
        return $this;
    }

    /**
    * Gets jobFailedReason
    *  当任务失败时呈现,失败原因。
    *
    * @return string|null
    */
    public function getJobFailedReason()
    {
        return $this->container['jobFailedReason'];
    }

    /**
    * Sets jobFailedReason
    *
    * @param string|null $jobFailedReason 当任务失败时呈现,失败原因。
    *
    * @return $this
    */
    public function setJobFailedReason($jobFailedReason)
    {
        $this->container['jobFailedReason'] = $jobFailedReason;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
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
    * @param int|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastupdateTime
    *  任务状态更新时间。
    *
    * @return int|null
    */
    public function getLastupdateTime()
    {
        return $this->container['lastupdateTime'];
    }

    /**
    * Sets lastupdateTime
    *
    * @param int|null $lastupdateTime 任务状态更新时间。
    *
    * @return $this
    */
    public function setLastupdateTime($lastupdateTime)
    {
        $this->container['lastupdateTime'] = $lastupdateTime;
        return $this;
    }

    /**
    * Gets voiceAuthorizationUrl
    *  用户授权书连接。
    *
    * @return string|null
    */
    public function getVoiceAuthorizationUrl()
    {
        return $this->container['voiceAuthorizationUrl'];
    }

    /**
    * Sets voiceAuthorizationUrl
    *
    * @param string|null $voiceAuthorizationUrl 用户授权书连接。
    *
    * @return $this
    */
    public function setVoiceAuthorizationUrl($voiceAuthorizationUrl)
    {
        $this->container['voiceAuthorizationUrl'] = $voiceAuthorizationUrl;
        return $this;
    }

    /**
    * Gets createType
    *  createType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType|null
    */
    public function getCreateType()
    {
        return $this->container['createType'];
    }

    /**
    * Sets createType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateType|null $createType createType
    *
    * @return $this
    */
    public function setCreateType($createType)
    {
        $this->container['createType'] = $createType;
        return $this;
    }

    /**
    * Gets tag
    *  tag
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\JobTag|null $tag tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets phone
    *  手机号
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets dhtmsJobId
    *  形象制作任务id
    *
    * @return string|null
    */
    public function getDhtmsJobId()
    {
        return $this->container['dhtmsJobId'];
    }

    /**
    * Sets dhtmsJobId
    *
    * @param string|null $dhtmsJobId 形象制作任务id
    *
    * @return $this
    */
    public function setDhtmsJobId($dhtmsJobId)
    {
        $this->container['dhtmsJobId'] = $dhtmsJobId;
        return $this;
    }

    /**
    * Gets batchName
    *  批次名称
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
    * @param string|null $batchName 批次名称
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
        return $this;
    }

    /**
    * Gets allocatedResource
    *  allocatedResource
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingAllocatedResource|null
    */
    public function getAllocatedResource()
    {
        return $this->container['allocatedResource'];
    }

    /**
    * Sets allocatedResource
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingAllocatedResource|null $allocatedResource allocatedResource
    *
    * @return $this
    */
    public function setAllocatedResource($allocatedResource)
    {
        $this->container['allocatedResource'] = $allocatedResource;
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

