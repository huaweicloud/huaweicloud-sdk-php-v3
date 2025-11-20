<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNotificationSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNotificationSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  消息通知配置的唯一标识符。
    * urn  消息通知配置的唯一资源标识符。
    * analyzerId  分析器的唯一标识符。
    * analyzerName  分析器的名称。
    * analyzerType  analyzerType
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    * createdAt  创建消息通知配置的时间。
    * updatedAt  上次更新消息通知配置的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'urn' => 'string',
            'analyzerId' => 'string',
            'analyzerName' => 'string',
            'analyzerType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType',
            'mcSwitch' => 'bool',
            'smnTopicUrns' => 'string[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  消息通知配置的唯一标识符。
    * urn  消息通知配置的唯一资源标识符。
    * analyzerId  分析器的唯一标识符。
    * analyzerName  分析器的名称。
    * analyzerType  analyzerType
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    * createdAt  创建消息通知配置的时间。
    * updatedAt  上次更新消息通知配置的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'urn' => null,
        'analyzerId' => null,
        'analyzerName' => null,
        'analyzerType' => null,
        'mcSwitch' => null,
        'smnTopicUrns' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  消息通知配置的唯一标识符。
    * urn  消息通知配置的唯一资源标识符。
    * analyzerId  分析器的唯一标识符。
    * analyzerName  分析器的名称。
    * analyzerType  analyzerType
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    * createdAt  创建消息通知配置的时间。
    * updatedAt  上次更新消息通知配置的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'urn' => 'urn',
            'analyzerId' => 'analyzer_id',
            'analyzerName' => 'analyzer_name',
            'analyzerType' => 'analyzer_type',
            'mcSwitch' => 'mc_switch',
            'smnTopicUrns' => 'smn_topic_urns',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  消息通知配置的唯一标识符。
    * urn  消息通知配置的唯一资源标识符。
    * analyzerId  分析器的唯一标识符。
    * analyzerName  分析器的名称。
    * analyzerType  analyzerType
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    * createdAt  创建消息通知配置的时间。
    * updatedAt  上次更新消息通知配置的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'urn' => 'setUrn',
            'analyzerId' => 'setAnalyzerId',
            'analyzerName' => 'setAnalyzerName',
            'analyzerType' => 'setAnalyzerType',
            'mcSwitch' => 'setMcSwitch',
            'smnTopicUrns' => 'setSmnTopicUrns',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  消息通知配置的唯一标识符。
    * urn  消息通知配置的唯一资源标识符。
    * analyzerId  分析器的唯一标识符。
    * analyzerName  分析器的名称。
    * analyzerType  analyzerType
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    * createdAt  创建消息通知配置的时间。
    * updatedAt  上次更新消息通知配置的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'urn' => 'getUrn',
            'analyzerId' => 'getAnalyzerId',
            'analyzerName' => 'getAnalyzerName',
            'analyzerType' => 'getAnalyzerType',
            'mcSwitch' => 'getMcSwitch',
            'smnTopicUrns' => 'getSmnTopicUrns',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['analyzerId'] = isset($data['analyzerId']) ? $data['analyzerId'] : null;
        $this->container['analyzerName'] = isset($data['analyzerName']) ? $data['analyzerName'] : null;
        $this->container['analyzerType'] = isset($data['analyzerType']) ? $data['analyzerType'] : null;
        $this->container['mcSwitch'] = isset($data['mcSwitch']) ? $data['mcSwitch'] : null;
        $this->container['smnTopicUrns'] = isset($data['smnTopicUrns']) ? $data['smnTopicUrns'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && !preg_match("/^[\\w-]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['analyzerId']) && (mb_strlen($this->container['analyzerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['analyzerId']) && (mb_strlen($this->container['analyzerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['analyzerId']) && !preg_match("/^[\\w-]+$/", $this->container['analyzerId'])) {
                $invalidProperties[] = "invalid value for 'analyzerId', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['analyzerName']) && (mb_strlen($this->container['analyzerName']) > 255)) {
                $invalidProperties[] = "invalid value for 'analyzerName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['analyzerName']) && (mb_strlen($this->container['analyzerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'analyzerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['analyzerName']) && !preg_match("/^[A-Za-z][A-Za-z0-9_.-]*$/", $this->container['analyzerName'])) {
                $invalidProperties[] = "invalid value for 'analyzerName', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_.-]*$/.";
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
    *  消息通知配置的唯一标识符。
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
    * @param string|null $id 消息通知配置的唯一标识符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  消息通知配置的唯一资源标识符。
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn 消息通知配置的唯一资源标识符。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets analyzerId
    *  分析器的唯一标识符。
    *
    * @return string|null
    */
    public function getAnalyzerId()
    {
        return $this->container['analyzerId'];
    }

    /**
    * Sets analyzerId
    *
    * @param string|null $analyzerId 分析器的唯一标识符。
    *
    * @return $this
    */
    public function setAnalyzerId($analyzerId)
    {
        $this->container['analyzerId'] = $analyzerId;
        return $this;
    }

    /**
    * Gets analyzerName
    *  分析器的名称。
    *
    * @return string|null
    */
    public function getAnalyzerName()
    {
        return $this->container['analyzerName'];
    }

    /**
    * Sets analyzerName
    *
    * @param string|null $analyzerName 分析器的名称。
    *
    * @return $this
    */
    public function setAnalyzerName($analyzerName)
    {
        $this->container['analyzerName'] = $analyzerName;
        return $this;
    }

    /**
    * Gets analyzerType
    *  analyzerType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType|null
    */
    public function getAnalyzerType()
    {
        return $this->container['analyzerType'];
    }

    /**
    * Sets analyzerType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType|null $analyzerType analyzerType
    *
    * @return $this
    */
    public function setAnalyzerType($analyzerType)
    {
        $this->container['analyzerType'] = $analyzerType;
        return $this;
    }

    /**
    * Gets mcSwitch
    *  是否开启消息中心通知开关。
    *
    * @return bool|null
    */
    public function getMcSwitch()
    {
        return $this->container['mcSwitch'];
    }

    /**
    * Sets mcSwitch
    *
    * @param bool|null $mcSwitch 是否开启消息中心通知开关。
    *
    * @return $this
    */
    public function setMcSwitch($mcSwitch)
    {
        $this->container['mcSwitch'] = $mcSwitch;
        return $this;
    }

    /**
    * Gets smnTopicUrns
    *  消息通知配置的SMN主题URN列表。
    *
    * @return string[]|null
    */
    public function getSmnTopicUrns()
    {
        return $this->container['smnTopicUrns'];
    }

    /**
    * Sets smnTopicUrns
    *
    * @param string[]|null $smnTopicUrns 消息通知配置的SMN主题URN列表。
    *
    * @return $this
    */
    public function setSmnTopicUrns($smnTopicUrns)
    {
        $this->container['smnTopicUrns'] = $smnTopicUrns;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建消息通知配置的时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建消息通知配置的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  上次更新消息通知配置的时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 上次更新消息通知配置的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

