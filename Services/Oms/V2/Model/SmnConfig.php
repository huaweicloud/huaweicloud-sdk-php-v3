<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    * topicUrn  迁移任务所绑定的SMN消息主题的urn号。
    * triggerConditions  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'topicUrn' => 'string',
            'triggerConditions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    * topicUrn  迁移任务所绑定的SMN消息主题的urn号。
    * triggerConditions  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'topicUrn' => null,
        'triggerConditions' => null
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
    * language  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    * topicUrn  迁移任务所绑定的SMN消息主题的urn号。
    * triggerConditions  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'topicUrn' => 'topic_urn',
            'triggerConditions' => 'trigger_conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    * topicUrn  迁移任务所绑定的SMN消息主题的urn号。
    * triggerConditions  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'topicUrn' => 'setTopicUrn',
            'triggerConditions' => 'setTriggerConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    * topicUrn  迁移任务所绑定的SMN消息主题的urn号。
    * triggerConditions  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'topicUrn' => 'getTopicUrn',
            'triggerConditions' => 'getTriggerConditions'
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
    const LANGUAGE_ZH_CN = 'zh-cn';
    const LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_EN_US,
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : 'en-us';
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['triggerConditions'] = isset($data['triggerConditions']) ? $data['triggerConditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['topicUrn'])) {
                $invalidProperties[] = "invalid value for 'topicUrn', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['triggerConditions'] === null) {
            $invalidProperties[] = "'triggerConditions' can't be null";
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
    * Gets language
    *  当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
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
    * @param string|null $language 当前用户所使用的管理控制台的语言。  可以选择zh-cn或者en-us。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets topicUrn
    *  迁移任务所绑定的SMN消息主题的urn号。
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 迁移任务所绑定的SMN消息主题的urn号。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets triggerConditions
    *  SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @return string[]
    */
    public function getTriggerConditions()
    {
        return $this->container['triggerConditions'];
    }

    /**
    * Sets triggerConditions
    *
    * @param string[] $triggerConditions SMN消息的触发条件，取决于迁移任务状态。  迁移任务状态的取值范围为SUCCESS或者FAILURE。  - FAILURE表示任务失败后发送SMN消息。 - SUCCESS表示任务成功后发送SMN消息。
    *
    * @return $this
    */
    public function setTriggerConditions($triggerConditions)
    {
        $this->container['triggerConditions'] = $triggerConditions;
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

