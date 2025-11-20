<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUserQuotaDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUserQuotaDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * modelingCount2dModel  分身数字人训练模型数量。-1表示无限制。
    * modelingCount2dModelFlexus  分身数字人flexus版训练模型数量。-1表示无限制。
    * videoTime2dModel  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    * videoTimeFlexus2dModel  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    * voiceCloneBasic  声音克隆基础版。-1表示无限制。
    * voiceCloneMiddle  声音克隆进阶版。-1表示无限制。
    * voiceCloneAdvance  声音克隆高级版。-1表示无限制。
    * voiceCloneFlexus  声音克隆flexus版。-1表示无限制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'modelingCount2dModel' => 'int',
            'modelingCount2dModelFlexus' => 'int',
            'videoTime2dModel' => 'float',
            'videoTimeFlexus2dModel' => 'float',
            'voiceCloneBasic' => 'int',
            'voiceCloneMiddle' => 'int',
            'voiceCloneAdvance' => 'int',
            'voiceCloneFlexus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * modelingCount2dModel  分身数字人训练模型数量。-1表示无限制。
    * modelingCount2dModelFlexus  分身数字人flexus版训练模型数量。-1表示无限制。
    * videoTime2dModel  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    * videoTimeFlexus2dModel  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    * voiceCloneBasic  声音克隆基础版。-1表示无限制。
    * voiceCloneMiddle  声音克隆进阶版。-1表示无限制。
    * voiceCloneAdvance  声音克隆高级版。-1表示无限制。
    * voiceCloneFlexus  声音克隆flexus版。-1表示无限制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'modelingCount2dModel' => null,
        'modelingCount2dModelFlexus' => null,
        'videoTime2dModel' => 'float',
        'videoTimeFlexus2dModel' => 'float',
        'voiceCloneBasic' => null,
        'voiceCloneMiddle' => null,
        'voiceCloneAdvance' => null,
        'voiceCloneFlexus' => null
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
    * modelingCount2dModel  分身数字人训练模型数量。-1表示无限制。
    * modelingCount2dModelFlexus  分身数字人flexus版训练模型数量。-1表示无限制。
    * videoTime2dModel  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    * videoTimeFlexus2dModel  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    * voiceCloneBasic  声音克隆基础版。-1表示无限制。
    * voiceCloneMiddle  声音克隆进阶版。-1表示无限制。
    * voiceCloneAdvance  声音克隆高级版。-1表示无限制。
    * voiceCloneFlexus  声音克隆flexus版。-1表示无限制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'modelingCount2dModel' => 'modeling_count_2d_model',
            'modelingCount2dModelFlexus' => 'modeling_count_2d_model_flexus',
            'videoTime2dModel' => 'video_time_2d_model',
            'videoTimeFlexus2dModel' => 'video_time_flexus_2d_model',
            'voiceCloneBasic' => 'voice_clone_basic',
            'voiceCloneMiddle' => 'voice_clone_middle',
            'voiceCloneAdvance' => 'voice_clone_advance',
            'voiceCloneFlexus' => 'voice_clone_flexus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * modelingCount2dModel  分身数字人训练模型数量。-1表示无限制。
    * modelingCount2dModelFlexus  分身数字人flexus版训练模型数量。-1表示无限制。
    * videoTime2dModel  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    * videoTimeFlexus2dModel  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    * voiceCloneBasic  声音克隆基础版。-1表示无限制。
    * voiceCloneMiddle  声音克隆进阶版。-1表示无限制。
    * voiceCloneAdvance  声音克隆高级版。-1表示无限制。
    * voiceCloneFlexus  声音克隆flexus版。-1表示无限制。
    *
    * @var string[]
    */
    protected static $setters = [
            'modelingCount2dModel' => 'setModelingCount2dModel',
            'modelingCount2dModelFlexus' => 'setModelingCount2dModelFlexus',
            'videoTime2dModel' => 'setVideoTime2dModel',
            'videoTimeFlexus2dModel' => 'setVideoTimeFlexus2dModel',
            'voiceCloneBasic' => 'setVoiceCloneBasic',
            'voiceCloneMiddle' => 'setVoiceCloneMiddle',
            'voiceCloneAdvance' => 'setVoiceCloneAdvance',
            'voiceCloneFlexus' => 'setVoiceCloneFlexus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * modelingCount2dModel  分身数字人训练模型数量。-1表示无限制。
    * modelingCount2dModelFlexus  分身数字人flexus版训练模型数量。-1表示无限制。
    * videoTime2dModel  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    * videoTimeFlexus2dModel  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    * voiceCloneBasic  声音克隆基础版。-1表示无限制。
    * voiceCloneMiddle  声音克隆进阶版。-1表示无限制。
    * voiceCloneAdvance  声音克隆高级版。-1表示无限制。
    * voiceCloneFlexus  声音克隆flexus版。-1表示无限制。
    *
    * @var string[]
    */
    protected static $getters = [
            'modelingCount2dModel' => 'getModelingCount2dModel',
            'modelingCount2dModelFlexus' => 'getModelingCount2dModelFlexus',
            'videoTime2dModel' => 'getVideoTime2dModel',
            'videoTimeFlexus2dModel' => 'getVideoTimeFlexus2dModel',
            'voiceCloneBasic' => 'getVoiceCloneBasic',
            'voiceCloneMiddle' => 'getVoiceCloneMiddle',
            'voiceCloneAdvance' => 'getVoiceCloneAdvance',
            'voiceCloneFlexus' => 'getVoiceCloneFlexus'
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
        $this->container['modelingCount2dModel'] = isset($data['modelingCount2dModel']) ? $data['modelingCount2dModel'] : null;
        $this->container['modelingCount2dModelFlexus'] = isset($data['modelingCount2dModelFlexus']) ? $data['modelingCount2dModelFlexus'] : null;
        $this->container['videoTime2dModel'] = isset($data['videoTime2dModel']) ? $data['videoTime2dModel'] : null;
        $this->container['videoTimeFlexus2dModel'] = isset($data['videoTimeFlexus2dModel']) ? $data['videoTimeFlexus2dModel'] : null;
        $this->container['voiceCloneBasic'] = isset($data['voiceCloneBasic']) ? $data['voiceCloneBasic'] : null;
        $this->container['voiceCloneMiddle'] = isset($data['voiceCloneMiddle']) ? $data['voiceCloneMiddle'] : null;
        $this->container['voiceCloneAdvance'] = isset($data['voiceCloneAdvance']) ? $data['voiceCloneAdvance'] : null;
        $this->container['voiceCloneFlexus'] = isset($data['voiceCloneFlexus']) ? $data['voiceCloneFlexus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['modelingCount2dModel']) && ($this->container['modelingCount2dModel'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'modelingCount2dModel', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['modelingCount2dModel']) && ($this->container['modelingCount2dModel'] < -1)) {
                $invalidProperties[] = "invalid value for 'modelingCount2dModel', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['modelingCount2dModelFlexus']) && ($this->container['modelingCount2dModelFlexus'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'modelingCount2dModelFlexus', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['modelingCount2dModelFlexus']) && ($this->container['modelingCount2dModelFlexus'] < -1)) {
                $invalidProperties[] = "invalid value for 'modelingCount2dModelFlexus', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['videoTime2dModel']) && ($this->container['videoTime2dModel'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'videoTime2dModel', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['videoTime2dModel']) && ($this->container['videoTime2dModel'] < -1)) {
                $invalidProperties[] = "invalid value for 'videoTime2dModel', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['videoTimeFlexus2dModel']) && ($this->container['videoTimeFlexus2dModel'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'videoTimeFlexus2dModel', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['videoTimeFlexus2dModel']) && ($this->container['videoTimeFlexus2dModel'] < -1)) {
                $invalidProperties[] = "invalid value for 'videoTimeFlexus2dModel', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['voiceCloneBasic']) && ($this->container['voiceCloneBasic'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'voiceCloneBasic', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['voiceCloneBasic']) && ($this->container['voiceCloneBasic'] < -1)) {
                $invalidProperties[] = "invalid value for 'voiceCloneBasic', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['voiceCloneMiddle']) && ($this->container['voiceCloneMiddle'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'voiceCloneMiddle', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['voiceCloneMiddle']) && ($this->container['voiceCloneMiddle'] < -1)) {
                $invalidProperties[] = "invalid value for 'voiceCloneMiddle', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['voiceCloneAdvance']) && ($this->container['voiceCloneAdvance'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'voiceCloneAdvance', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['voiceCloneAdvance']) && ($this->container['voiceCloneAdvance'] < -1)) {
                $invalidProperties[] = "invalid value for 'voiceCloneAdvance', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['voiceCloneFlexus']) && ($this->container['voiceCloneFlexus'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'voiceCloneFlexus', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['voiceCloneFlexus']) && ($this->container['voiceCloneFlexus'] < -1)) {
                $invalidProperties[] = "invalid value for 'voiceCloneFlexus', must be bigger than or equal to -1.";
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
    * Gets modelingCount2dModel
    *  分身数字人训练模型数量。-1表示无限制。
    *
    * @return int|null
    */
    public function getModelingCount2dModel()
    {
        return $this->container['modelingCount2dModel'];
    }

    /**
    * Sets modelingCount2dModel
    *
    * @param int|null $modelingCount2dModel 分身数字人训练模型数量。-1表示无限制。
    *
    * @return $this
    */
    public function setModelingCount2dModel($modelingCount2dModel)
    {
        $this->container['modelingCount2dModel'] = $modelingCount2dModel;
        return $this;
    }

    /**
    * Gets modelingCount2dModelFlexus
    *  分身数字人flexus版训练模型数量。-1表示无限制。
    *
    * @return int|null
    */
    public function getModelingCount2dModelFlexus()
    {
        return $this->container['modelingCount2dModelFlexus'];
    }

    /**
    * Sets modelingCount2dModelFlexus
    *
    * @param int|null $modelingCount2dModelFlexus 分身数字人flexus版训练模型数量。-1表示无限制。
    *
    * @return $this
    */
    public function setModelingCount2dModelFlexus($modelingCount2dModelFlexus)
    {
        $this->container['modelingCount2dModelFlexus'] = $modelingCount2dModelFlexus;
        return $this;
    }

    /**
    * Gets videoTime2dModel
    *  分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    *
    * @return float|null
    */
    public function getVideoTime2dModel()
    {
        return $this->container['videoTime2dModel'];
    }

    /**
    * Sets videoTime2dModel
    *
    * @param float|null $videoTime2dModel 分身数字人视频制作内容时间，单位分钟。-1表示无限制。
    *
    * @return $this
    */
    public function setVideoTime2dModel($videoTime2dModel)
    {
        $this->container['videoTime2dModel'] = $videoTime2dModel;
        return $this;
    }

    /**
    * Gets videoTimeFlexus2dModel
    *  分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    *
    * @return float|null
    */
    public function getVideoTimeFlexus2dModel()
    {
        return $this->container['videoTimeFlexus2dModel'];
    }

    /**
    * Sets videoTimeFlexus2dModel
    *
    * @param float|null $videoTimeFlexus2dModel 分身数字人视频制作flexus版内容时间，单位分钟。-1表示无限制。
    *
    * @return $this
    */
    public function setVideoTimeFlexus2dModel($videoTimeFlexus2dModel)
    {
        $this->container['videoTimeFlexus2dModel'] = $videoTimeFlexus2dModel;
        return $this;
    }

    /**
    * Gets voiceCloneBasic
    *  声音克隆基础版。-1表示无限制。
    *
    * @return int|null
    */
    public function getVoiceCloneBasic()
    {
        return $this->container['voiceCloneBasic'];
    }

    /**
    * Sets voiceCloneBasic
    *
    * @param int|null $voiceCloneBasic 声音克隆基础版。-1表示无限制。
    *
    * @return $this
    */
    public function setVoiceCloneBasic($voiceCloneBasic)
    {
        $this->container['voiceCloneBasic'] = $voiceCloneBasic;
        return $this;
    }

    /**
    * Gets voiceCloneMiddle
    *  声音克隆进阶版。-1表示无限制。
    *
    * @return int|null
    */
    public function getVoiceCloneMiddle()
    {
        return $this->container['voiceCloneMiddle'];
    }

    /**
    * Sets voiceCloneMiddle
    *
    * @param int|null $voiceCloneMiddle 声音克隆进阶版。-1表示无限制。
    *
    * @return $this
    */
    public function setVoiceCloneMiddle($voiceCloneMiddle)
    {
        $this->container['voiceCloneMiddle'] = $voiceCloneMiddle;
        return $this;
    }

    /**
    * Gets voiceCloneAdvance
    *  声音克隆高级版。-1表示无限制。
    *
    * @return int|null
    */
    public function getVoiceCloneAdvance()
    {
        return $this->container['voiceCloneAdvance'];
    }

    /**
    * Sets voiceCloneAdvance
    *
    * @param int|null $voiceCloneAdvance 声音克隆高级版。-1表示无限制。
    *
    * @return $this
    */
    public function setVoiceCloneAdvance($voiceCloneAdvance)
    {
        $this->container['voiceCloneAdvance'] = $voiceCloneAdvance;
        return $this;
    }

    /**
    * Gets voiceCloneFlexus
    *  声音克隆flexus版。-1表示无限制。
    *
    * @return int|null
    */
    public function getVoiceCloneFlexus()
    {
        return $this->container['voiceCloneFlexus'];
    }

    /**
    * Sets voiceCloneFlexus
    *
    * @param int|null $voiceCloneFlexus 声音克隆flexus版。-1表示无限制。
    *
    * @return $this
    */
    public function setVoiceCloneFlexus($voiceCloneFlexus)
    {
        $this->container['voiceCloneFlexus'] = $voiceCloneFlexus;
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

