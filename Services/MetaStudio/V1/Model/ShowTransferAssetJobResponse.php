<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTransferAssetJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTransferAssetJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  转移资产任务ID
    * transferType  transferType
    * transferAssets  转移资产列表
    * state  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    * srcProjectId  源用户ID
    * destProjectId  目标用户ID
    * memo  备注信息
    * reason  冻结/解冻原因。
    * startTime  资产转移开始时间
    * finishTime  资产转移完成时间
    * expireTime  资产转移过期时间
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * errorInfo  errorInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'transferType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum',
            'transferAssets' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\DigitalAssetSummary[]',
            'state' => 'string',
            'srcProjectId' => 'string',
            'destProjectId' => 'string',
            'memo' => 'string',
            'reason' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'expireTime' => 'string',
            'isNeedBilling' => 'bool',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  转移资产任务ID
    * transferType  transferType
    * transferAssets  转移资产列表
    * state  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    * srcProjectId  源用户ID
    * destProjectId  目标用户ID
    * memo  备注信息
    * reason  冻结/解冻原因。
    * startTime  资产转移开始时间
    * finishTime  资产转移完成时间
    * expireTime  资产转移过期时间
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * errorInfo  errorInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'transferType' => null,
        'transferAssets' => null,
        'state' => null,
        'srcProjectId' => null,
        'destProjectId' => null,
        'memo' => null,
        'reason' => null,
        'startTime' => null,
        'finishTime' => null,
        'expireTime' => null,
        'isNeedBilling' => null,
        'errorInfo' => null,
        'xRequestId' => null
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
    * jobId  转移资产任务ID
    * transferType  transferType
    * transferAssets  转移资产列表
    * state  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    * srcProjectId  源用户ID
    * destProjectId  目标用户ID
    * memo  备注信息
    * reason  冻结/解冻原因。
    * startTime  资产转移开始时间
    * finishTime  资产转移完成时间
    * expireTime  资产转移过期时间
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * errorInfo  errorInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'transferType' => 'transfer_type',
            'transferAssets' => 'transfer_assets',
            'state' => 'state',
            'srcProjectId' => 'src_project_id',
            'destProjectId' => 'dest_project_id',
            'memo' => 'memo',
            'reason' => 'reason',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'expireTime' => 'expire_time',
            'isNeedBilling' => 'is_need_billing',
            'errorInfo' => 'error_info',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  转移资产任务ID
    * transferType  transferType
    * transferAssets  转移资产列表
    * state  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    * srcProjectId  源用户ID
    * destProjectId  目标用户ID
    * memo  备注信息
    * reason  冻结/解冻原因。
    * startTime  资产转移开始时间
    * finishTime  资产转移完成时间
    * expireTime  资产转移过期时间
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * errorInfo  errorInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'transferType' => 'setTransferType',
            'transferAssets' => 'setTransferAssets',
            'state' => 'setState',
            'srcProjectId' => 'setSrcProjectId',
            'destProjectId' => 'setDestProjectId',
            'memo' => 'setMemo',
            'reason' => 'setReason',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'expireTime' => 'setExpireTime',
            'isNeedBilling' => 'setIsNeedBilling',
            'errorInfo' => 'setErrorInfo',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  转移资产任务ID
    * transferType  transferType
    * transferAssets  转移资产列表
    * state  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    * srcProjectId  源用户ID
    * destProjectId  目标用户ID
    * memo  备注信息
    * reason  冻结/解冻原因。
    * startTime  资产转移开始时间
    * finishTime  资产转移完成时间
    * expireTime  资产转移过期时间
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * errorInfo  errorInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'transferType' => 'getTransferType',
            'transferAssets' => 'getTransferAssets',
            'state' => 'getState',
            'srcProjectId' => 'getSrcProjectId',
            'destProjectId' => 'getDestProjectId',
            'memo' => 'getMemo',
            'reason' => 'getReason',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'expireTime' => 'getExpireTime',
            'isNeedBilling' => 'getIsNeedBilling',
            'errorInfo' => 'getErrorInfo',
            'xRequestId' => 'getXRequestId'
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
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_ACCEPT = 'ACCEPT';
    const STATE_REJECT = 'REJECT';
    const STATE_CANCEL = 'CANCEL';
    const STATE_FAIL = 'FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PROCESSING,
            self::STATE_ACCEPT,
            self::STATE_REJECT,
            self::STATE_CANCEL,
            self::STATE_FAIL,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['transferAssets'] = isset($data['transferAssets']) ? $data['transferAssets'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['srcProjectId'] = isset($data['srcProjectId']) ? $data['srcProjectId'] : null;
        $this->container['destProjectId'] = isset($data['destProjectId']) ? $data['destProjectId'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['isNeedBilling'] = isset($data['isNeedBilling']) ? $data['isNeedBilling'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['destProjectId']) && (mb_strlen($this->container['destProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'destProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['destProjectId']) && (mb_strlen($this->container['destProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'destProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 256)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 0)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 256)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
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
    * Gets jobId
    *  转移资产任务ID
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
    * @param string|null $jobId 转移资产任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets transferType
    *  transferType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum|null
    */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
    * Sets transferType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum|null $transferType transferType
    *
    * @return $this
    */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;
        return $this;
    }

    /**
    * Gets transferAssets
    *  转移资产列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\DigitalAssetSummary[]|null
    */
    public function getTransferAssets()
    {
        return $this->container['transferAssets'];
    }

    /**
    * Sets transferAssets
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\DigitalAssetSummary[]|null $transferAssets 转移资产列表
    *
    * @return $this
    */
    public function setTransferAssets($transferAssets)
    {
        $this->container['transferAssets'] = $transferAssets;
        return $this;
    }

    /**
    * Gets state
    *  任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
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
    * @param string|null $state 任务状态 - PROCESSING: 处理过程中 - ACCEPT： 接受 - REJECT： 拒绝 - CANCEL：取消 - FAIL: 失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets srcProjectId
    *  源用户ID
    *
    * @return string|null
    */
    public function getSrcProjectId()
    {
        return $this->container['srcProjectId'];
    }

    /**
    * Sets srcProjectId
    *
    * @param string|null $srcProjectId 源用户ID
    *
    * @return $this
    */
    public function setSrcProjectId($srcProjectId)
    {
        $this->container['srcProjectId'] = $srcProjectId;
        return $this;
    }

    /**
    * Gets destProjectId
    *  目标用户ID
    *
    * @return string|null
    */
    public function getDestProjectId()
    {
        return $this->container['destProjectId'];
    }

    /**
    * Sets destProjectId
    *
    * @param string|null $destProjectId 目标用户ID
    *
    * @return $this
    */
    public function setDestProjectId($destProjectId)
    {
        $this->container['destProjectId'] = $destProjectId;
        return $this;
    }

    /**
    * Gets memo
    *  备注信息
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 备注信息
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets reason
    *  冻结/解冻原因。
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
    * @param string|null $reason 冻结/解冻原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets startTime
    *  资产转移开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 资产转移开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  资产转移完成时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 资产转移完成时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  资产转移过期时间
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 资产转移过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets isNeedBilling
    *  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    *
    * @return bool|null
    */
    public function getIsNeedBilling()
    {
        return $this->container['isNeedBilling'];
    }

    /**
    * Sets isNeedBilling
    *
    * @param bool|null $isNeedBilling 资产转移时，是否需要从接收方扣减资源（产生计费话单）
    *
    * @return $this
    */
    public function setIsNeedBilling($isNeedBilling)
    {
        $this->container['isNeedBilling'] = $isNeedBilling;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

