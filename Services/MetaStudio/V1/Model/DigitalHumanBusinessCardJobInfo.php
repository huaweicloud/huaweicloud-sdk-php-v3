<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DigitalHumanBusinessCardJobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DigitalHumanBusinessCardJobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * state  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    * startTime  数字人名片制作开始时间。
    * endTime  数字人名片制作结束时间。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'state' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'outputAssetConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'createTime' => 'string',
            'lastupdateTime' => 'string',
            'businessCardType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * state  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    * startTime  数字人名片制作开始时间。
    * endTime  数字人名片制作结束时间。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'state' => null,
        'startTime' => null,
        'endTime' => null,
        'outputAssetConfig' => null,
        'errorInfo' => null,
        'createTime' => null,
        'lastupdateTime' => null,
        'businessCardType' => null
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
    * jobId  任务ID。
    * state  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    * startTime  数字人名片制作开始时间。
    * endTime  数字人名片制作结束时间。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'state' => 'state',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'outputAssetConfig' => 'output_asset_config',
            'errorInfo' => 'error_info',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'businessCardType' => 'business_card_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * state  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    * startTime  数字人名片制作开始时间。
    * endTime  数字人名片制作结束时间。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'outputAssetConfig' => 'setOutputAssetConfig',
            'errorInfo' => 'setErrorInfo',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'businessCardType' => 'setBusinessCardType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * state  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    * startTime  数字人名片制作开始时间。
    * endTime  数字人名片制作结束时间。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'outputAssetConfig' => 'getOutputAssetConfig',
            'errorInfo' => 'getErrorInfo',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'businessCardType' => 'getBusinessCardType'
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
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    const STATE_CANCELED = 'CANCELED';
    const STATE_BLOCK = 'BLOCK';
    const BUSINESS_CARD_TYPE__2_D_DIGITAL_HUMAN_CARD = '2D_DIGITAL_HUMAN_CARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAITING,
            self::STATE_PROCESSING,
            self::STATE_SUCCEED,
            self::STATE_FAILED,
            self::STATE_CANCELED,
            self::STATE_BLOCK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBusinessCardTypeAllowableValues()
    {
        return [
            self::BUSINESS_CARD_TYPE__2_D_DIGITAL_HUMAN_CARD,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['outputAssetConfig'] = isset($data['outputAssetConfig']) ? $data['outputAssetConfig'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['businessCardType'] = isset($data['businessCardType']) ? $data['businessCardType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['lastupdateTime']) && (mb_strlen($this->container['lastupdateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastupdateTime']) && (mb_strlen($this->container['lastupdateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getBusinessCardTypeAllowableValues();
                if (!is_null($this->container['businessCardType']) && !in_array($this->container['businessCardType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessCardType', must be one of '%s'",
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
    * Gets jobId
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * BLOCK: 冻结
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startTime
    *  数字人名片制作开始时间。
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
    * @param string|null $startTime 数字人名片制作开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  数字人名片制作结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 数字人名片制作结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets outputAssetConfig
    *  outputAssetConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo|null
    */
    public function getOutputAssetConfig()
    {
        return $this->container['outputAssetConfig'];
    }

    /**
    * Sets outputAssetConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo|null $outputAssetConfig outputAssetConfig
    *
    * @return $this
    */
    public function setOutputAssetConfig($outputAssetConfig)
    {
        $this->container['outputAssetConfig'] = $outputAssetConfig;
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
    * Gets createTime
    *  任务创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间。
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
    *  任务更新时间。
    *
    * @return string|null
    */
    public function getLastupdateTime()
    {
        return $this->container['lastupdateTime'];
    }

    /**
    * Sets lastupdateTime
    *
    * @param string|null $lastupdateTime 任务更新时间。
    *
    * @return $this
    */
    public function setLastupdateTime($lastupdateTime)
    {
        $this->container['lastupdateTime'] = $lastupdateTime;
        return $this;
    }

    /**
    * Gets businessCardType
    *  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @return string|null
    */
    public function getBusinessCardType()
    {
        return $this->container['businessCardType'];
    }

    /**
    * Sets businessCardType
    *
    * @param string|null $businessCardType 数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片
    *
    * @return $this
    */
    public function setBusinessCardType($businessCardType)
    {
        $this->container['businessCardType'] = $businessCardType;
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

