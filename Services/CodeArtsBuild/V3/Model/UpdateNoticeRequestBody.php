<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNoticeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNoticeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noticeType  通知类型
    * enabledEventTypeNames  开启的通知的种类
    * sendSwitch  是否开启消息通知。
    * paramConfig  通知参数配置
    * useProjectNotice  是否使用项目级消息通知设置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noticeType' => 'string',
            'enabledEventTypeNames' => 'string[]',
            'sendSwitch' => 'string',
            'paramConfig' => 'string',
            'useProjectNotice' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noticeType  通知类型
    * enabledEventTypeNames  开启的通知的种类
    * sendSwitch  是否开启消息通知。
    * paramConfig  通知参数配置
    * useProjectNotice  是否使用项目级消息通知设置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noticeType' => null,
        'enabledEventTypeNames' => null,
        'sendSwitch' => null,
        'paramConfig' => null,
        'useProjectNotice' => null
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
    * noticeType  通知类型
    * enabledEventTypeNames  开启的通知的种类
    * sendSwitch  是否开启消息通知。
    * paramConfig  通知参数配置
    * useProjectNotice  是否使用项目级消息通知设置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noticeType' => 'notice_type',
            'enabledEventTypeNames' => 'enabled_event_type_names',
            'sendSwitch' => 'send_switch',
            'paramConfig' => 'param_config',
            'useProjectNotice' => 'use_project_notice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noticeType  通知类型
    * enabledEventTypeNames  开启的通知的种类
    * sendSwitch  是否开启消息通知。
    * paramConfig  通知参数配置
    * useProjectNotice  是否使用项目级消息通知设置。
    *
    * @var string[]
    */
    protected static $setters = [
            'noticeType' => 'setNoticeType',
            'enabledEventTypeNames' => 'setEnabledEventTypeNames',
            'sendSwitch' => 'setSendSwitch',
            'paramConfig' => 'setParamConfig',
            'useProjectNotice' => 'setUseProjectNotice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noticeType  通知类型
    * enabledEventTypeNames  开启的通知的种类
    * sendSwitch  是否开启消息通知。
    * paramConfig  通知参数配置
    * useProjectNotice  是否使用项目级消息通知设置。
    *
    * @var string[]
    */
    protected static $getters = [
            'noticeType' => 'getNoticeType',
            'enabledEventTypeNames' => 'getEnabledEventTypeNames',
            'sendSwitch' => 'getSendSwitch',
            'paramConfig' => 'getParamConfig',
            'useProjectNotice' => 'getUseProjectNotice'
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
        $this->container['noticeType'] = isset($data['noticeType']) ? $data['noticeType'] : null;
        $this->container['enabledEventTypeNames'] = isset($data['enabledEventTypeNames']) ? $data['enabledEventTypeNames'] : null;
        $this->container['sendSwitch'] = isset($data['sendSwitch']) ? $data['sendSwitch'] : null;
        $this->container['paramConfig'] = isset($data['paramConfig']) ? $data['paramConfig'] : null;
        $this->container['useProjectNotice'] = isset($data['useProjectNotice']) ? $data['useProjectNotice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['noticeType'] === null) {
            $invalidProperties[] = "'noticeType' can't be null";
        }
        if ($this->container['enabledEventTypeNames'] === null) {
            $invalidProperties[] = "'enabledEventTypeNames' can't be null";
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
    * Gets noticeType
    *  通知类型
    *
    * @return string
    */
    public function getNoticeType()
    {
        return $this->container['noticeType'];
    }

    /**
    * Sets noticeType
    *
    * @param string $noticeType 通知类型
    *
    * @return $this
    */
    public function setNoticeType($noticeType)
    {
        $this->container['noticeType'] = $noticeType;
        return $this;
    }

    /**
    * Gets enabledEventTypeNames
    *  开启的通知的种类
    *
    * @return string[]
    */
    public function getEnabledEventTypeNames()
    {
        return $this->container['enabledEventTypeNames'];
    }

    /**
    * Sets enabledEventTypeNames
    *
    * @param string[] $enabledEventTypeNames 开启的通知的种类
    *
    * @return $this
    */
    public function setEnabledEventTypeNames($enabledEventTypeNames)
    {
        $this->container['enabledEventTypeNames'] = $enabledEventTypeNames;
        return $this;
    }

    /**
    * Gets sendSwitch
    *  是否开启消息通知。
    *
    * @return string|null
    */
    public function getSendSwitch()
    {
        return $this->container['sendSwitch'];
    }

    /**
    * Sets sendSwitch
    *
    * @param string|null $sendSwitch 是否开启消息通知。
    *
    * @return $this
    */
    public function setSendSwitch($sendSwitch)
    {
        $this->container['sendSwitch'] = $sendSwitch;
        return $this;
    }

    /**
    * Gets paramConfig
    *  通知参数配置
    *
    * @return string|null
    */
    public function getParamConfig()
    {
        return $this->container['paramConfig'];
    }

    /**
    * Sets paramConfig
    *
    * @param string|null $paramConfig 通知参数配置
    *
    * @return $this
    */
    public function setParamConfig($paramConfig)
    {
        $this->container['paramConfig'] = $paramConfig;
        return $this;
    }

    /**
    * Gets useProjectNotice
    *  是否使用项目级消息通知设置。
    *
    * @return string|null
    */
    public function getUseProjectNotice()
    {
        return $this->container['useProjectNotice'];
    }

    /**
    * Sets useProjectNotice
    *
    * @param string|null $useProjectNotice 是否使用项目级消息通知设置。
    *
    * @return $this
    */
    public function setUseProjectNotice($useProjectNotice)
    {
        $this->container['useProjectNotice'] = $useProjectNotice;
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

