<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArtifactInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArtifactInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * artifactType  产物类型，可选值：final(最终产物)、middle(中间产物)。
    * isBest  是否最优。
    * artifactId  产物id。最终产物为模型ID，中间产物为断点ID。
    * continueTrainNums  续训任务数量。
    * assetId  产物发布成功后的资产id。
    * assetName  产物发布成功后的资产名称。
    * status  发布状态。
    * epoch  轮数。
    * steps  步数。
    * loss  loss值
    * createTime  创建时间。
    * publishErrorMsg  产物发布失败的错误信息。
    * taskInfos  相关任务信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'artifactType' => 'string',
            'isBest' => 'bool',
            'artifactId' => 'string',
            'continueTrainNums' => 'int',
            'assetId' => 'string',
            'assetName' => 'string',
            'status' => 'string',
            'epoch' => 'int',
            'steps' => 'int',
            'loss' => 'double',
            'createTime' => 'string',
            'publishErrorMsg' => 'string',
            'taskInfos' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTrainTask[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * artifactType  产物类型，可选值：final(最终产物)、middle(中间产物)。
    * isBest  是否最优。
    * artifactId  产物id。最终产物为模型ID，中间产物为断点ID。
    * continueTrainNums  续训任务数量。
    * assetId  产物发布成功后的资产id。
    * assetName  产物发布成功后的资产名称。
    * status  发布状态。
    * epoch  轮数。
    * steps  步数。
    * loss  loss值
    * createTime  创建时间。
    * publishErrorMsg  产物发布失败的错误信息。
    * taskInfos  相关任务信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'artifactType' => null,
        'isBest' => null,
        'artifactId' => null,
        'continueTrainNums' => 'int32',
        'assetId' => null,
        'assetName' => null,
        'status' => null,
        'epoch' => null,
        'steps' => 'int32',
        'loss' => 'double',
        'createTime' => null,
        'publishErrorMsg' => null,
        'taskInfos' => null
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
    * artifactType  产物类型，可选值：final(最终产物)、middle(中间产物)。
    * isBest  是否最优。
    * artifactId  产物id。最终产物为模型ID，中间产物为断点ID。
    * continueTrainNums  续训任务数量。
    * assetId  产物发布成功后的资产id。
    * assetName  产物发布成功后的资产名称。
    * status  发布状态。
    * epoch  轮数。
    * steps  步数。
    * loss  loss值
    * createTime  创建时间。
    * publishErrorMsg  产物发布失败的错误信息。
    * taskInfos  相关任务信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'artifactType' => 'artifact_type',
            'isBest' => 'is_best',
            'artifactId' => 'artifact_id',
            'continueTrainNums' => 'continue_train_nums',
            'assetId' => 'asset_id',
            'assetName' => 'asset_name',
            'status' => 'status',
            'epoch' => 'epoch',
            'steps' => 'steps',
            'loss' => 'loss',
            'createTime' => 'create_time',
            'publishErrorMsg' => 'publish_error_msg',
            'taskInfos' => 'task_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * artifactType  产物类型，可选值：final(最终产物)、middle(中间产物)。
    * isBest  是否最优。
    * artifactId  产物id。最终产物为模型ID，中间产物为断点ID。
    * continueTrainNums  续训任务数量。
    * assetId  产物发布成功后的资产id。
    * assetName  产物发布成功后的资产名称。
    * status  发布状态。
    * epoch  轮数。
    * steps  步数。
    * loss  loss值
    * createTime  创建时间。
    * publishErrorMsg  产物发布失败的错误信息。
    * taskInfos  相关任务信息
    *
    * @var string[]
    */
    protected static $setters = [
            'artifactType' => 'setArtifactType',
            'isBest' => 'setIsBest',
            'artifactId' => 'setArtifactId',
            'continueTrainNums' => 'setContinueTrainNums',
            'assetId' => 'setAssetId',
            'assetName' => 'setAssetName',
            'status' => 'setStatus',
            'epoch' => 'setEpoch',
            'steps' => 'setSteps',
            'loss' => 'setLoss',
            'createTime' => 'setCreateTime',
            'publishErrorMsg' => 'setPublishErrorMsg',
            'taskInfos' => 'setTaskInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * artifactType  产物类型，可选值：final(最终产物)、middle(中间产物)。
    * isBest  是否最优。
    * artifactId  产物id。最终产物为模型ID，中间产物为断点ID。
    * continueTrainNums  续训任务数量。
    * assetId  产物发布成功后的资产id。
    * assetName  产物发布成功后的资产名称。
    * status  发布状态。
    * epoch  轮数。
    * steps  步数。
    * loss  loss值
    * createTime  创建时间。
    * publishErrorMsg  产物发布失败的错误信息。
    * taskInfos  相关任务信息
    *
    * @var string[]
    */
    protected static $getters = [
            'artifactType' => 'getArtifactType',
            'isBest' => 'getIsBest',
            'artifactId' => 'getArtifactId',
            'continueTrainNums' => 'getContinueTrainNums',
            'assetId' => 'getAssetId',
            'assetName' => 'getAssetName',
            'status' => 'getStatus',
            'epoch' => 'getEpoch',
            'steps' => 'getSteps',
            'loss' => 'getLoss',
            'createTime' => 'getCreateTime',
            'publishErrorMsg' => 'getPublishErrorMsg',
            'taskInfos' => 'getTaskInfos'
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
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['isBest'] = isset($data['isBest']) ? $data['isBest'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['continueTrainNums'] = isset($data['continueTrainNums']) ? $data['continueTrainNums'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['epoch'] = isset($data['epoch']) ? $data['epoch'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['loss'] = isset($data['loss']) ? $data['loss'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['publishErrorMsg'] = isset($data['publishErrorMsg']) ? $data['publishErrorMsg'] : null;
        $this->container['taskInfos'] = isset($data['taskInfos']) ? $data['taskInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['artifactType']) && !preg_match("/final|middle/", $this->container['artifactType'])) {
                $invalidProperties[] = "invalid value for 'artifactType', must be conform to the pattern /final|middle/.";
            }
            if (!is_null($this->container['artifactId']) && (mb_strlen($this->container['artifactId']) > 100)) {
                $invalidProperties[] = "invalid value for 'artifactId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['artifactId']) && (mb_strlen($this->container['artifactId']) < 0)) {
                $invalidProperties[] = "invalid value for 'artifactId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['continueTrainNums']) && ($this->container['continueTrainNums'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'continueTrainNums', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['continueTrainNums']) && ($this->container['continueTrainNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'continueTrainNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/published|publishing|publish_failed|not_publish/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /published|publishing|publish_failed|not_publish/.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'epoch', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['epoch']) && ($this->container['epoch'] < 0)) {
                $invalidProperties[] = "invalid value for 'epoch', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['steps']) && ($this->container['steps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'steps', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['steps']) && ($this->container['steps'] < 0)) {
                $invalidProperties[] = "invalid value for 'steps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loss']) && ($this->container['loss'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'loss', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['loss']) && ($this->container['loss'] < 0)) {
                $invalidProperties[] = "invalid value for 'loss', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishErrorMsg']) && (mb_strlen($this->container['publishErrorMsg']) > 10000)) {
                $invalidProperties[] = "invalid value for 'publishErrorMsg', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['publishErrorMsg']) && (mb_strlen($this->container['publishErrorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'publishErrorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets artifactType
    *  产物类型，可选值：final(最终产物)、middle(中间产物)。
    *
    * @return string|null
    */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
    * Sets artifactType
    *
    * @param string|null $artifactType 产物类型，可选值：final(最终产物)、middle(中间产物)。
    *
    * @return $this
    */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;
        return $this;
    }

    /**
    * Gets isBest
    *  是否最优。
    *
    * @return bool|null
    */
    public function getIsBest()
    {
        return $this->container['isBest'];
    }

    /**
    * Sets isBest
    *
    * @param bool|null $isBest 是否最优。
    *
    * @return $this
    */
    public function setIsBest($isBest)
    {
        $this->container['isBest'] = $isBest;
        return $this;
    }

    /**
    * Gets artifactId
    *  产物id。最终产物为模型ID，中间产物为断点ID。
    *
    * @return string|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param string|null $artifactId 产物id。最终产物为模型ID，中间产物为断点ID。
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets continueTrainNums
    *  续训任务数量。
    *
    * @return int|null
    */
    public function getContinueTrainNums()
    {
        return $this->container['continueTrainNums'];
    }

    /**
    * Sets continueTrainNums
    *
    * @param int|null $continueTrainNums 续训任务数量。
    *
    * @return $this
    */
    public function setContinueTrainNums($continueTrainNums)
    {
        $this->container['continueTrainNums'] = $continueTrainNums;
        return $this;
    }

    /**
    * Gets assetId
    *  产物发布成功后的资产id。
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
    * @param string|null $assetId 产物发布成功后的资产id。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetName
    *  产物发布成功后的资产名称。
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 产物发布成功后的资产名称。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets status
    *  发布状态。
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
    * @param string|null $status 发布状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets epoch
    *  轮数。
    *
    * @return int|null
    */
    public function getEpoch()
    {
        return $this->container['epoch'];
    }

    /**
    * Sets epoch
    *
    * @param int|null $epoch 轮数。
    *
    * @return $this
    */
    public function setEpoch($epoch)
    {
        $this->container['epoch'] = $epoch;
        return $this;
    }

    /**
    * Gets steps
    *  步数。
    *
    * @return int|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param int|null $steps 步数。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets loss
    *  loss值
    *
    * @return double|null
    */
    public function getLoss()
    {
        return $this->container['loss'];
    }

    /**
    * Sets loss
    *
    * @param double|null $loss loss值
    *
    * @return $this
    */
    public function setLoss($loss)
    {
        $this->container['loss'] = $loss;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets publishErrorMsg
    *  产物发布失败的错误信息。
    *
    * @return string|null
    */
    public function getPublishErrorMsg()
    {
        return $this->container['publishErrorMsg'];
    }

    /**
    * Sets publishErrorMsg
    *
    * @param string|null $publishErrorMsg 产物发布失败的错误信息。
    *
    * @return $this
    */
    public function setPublishErrorMsg($publishErrorMsg)
    {
        $this->container['publishErrorMsg'] = $publishErrorMsg;
        return $this;
    }

    /**
    * Gets taskInfos
    *  相关任务信息
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTrainTask[]|null
    */
    public function getTaskInfos()
    {
        return $this->container['taskInfos'];
    }

    /**
    * Sets taskInfos
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTrainTask[]|null $taskInfos 相关任务信息
    *
    * @return $this
    */
    public function setTaskInfos($taskInfos)
    {
        $this->container['taskInfos'] = $taskInfos;
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

