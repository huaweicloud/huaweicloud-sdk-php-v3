<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionSmnForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionSmnForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  **参数说明**：SMN服务对应的region区域。
    * projectId  **参数说明**：SMN服务对应的projectId信息。
    * themeName  **参数说明**：SMN服务对应的主题名称。
    * topicUrn  **参数说明**：SMN服务对应的topic的主题URN。
    * messageContent  **参数说明**：短信或邮件的内容。。
    * messageTitle  **参数说明**：短信或邮件的主题。。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'projectId' => 'string',
            'themeName' => 'string',
            'topicUrn' => 'string',
            'messageContent' => 'string',
            'messageTitle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  **参数说明**：SMN服务对应的region区域。
    * projectId  **参数说明**：SMN服务对应的projectId信息。
    * themeName  **参数说明**：SMN服务对应的主题名称。
    * topicUrn  **参数说明**：SMN服务对应的topic的主题URN。
    * messageContent  **参数说明**：短信或邮件的内容。。
    * messageTitle  **参数说明**：短信或邮件的主题。。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'projectId' => null,
        'themeName' => null,
        'topicUrn' => null,
        'messageContent' => null,
        'messageTitle' => null
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
    * regionName  **参数说明**：SMN服务对应的region区域。
    * projectId  **参数说明**：SMN服务对应的projectId信息。
    * themeName  **参数说明**：SMN服务对应的主题名称。
    * topicUrn  **参数说明**：SMN服务对应的topic的主题URN。
    * messageContent  **参数说明**：短信或邮件的内容。。
    * messageTitle  **参数说明**：短信或邮件的主题。。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'themeName' => 'theme_name',
            'topicUrn' => 'topic_urn',
            'messageContent' => 'message_content',
            'messageTitle' => 'message_title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  **参数说明**：SMN服务对应的region区域。
    * projectId  **参数说明**：SMN服务对应的projectId信息。
    * themeName  **参数说明**：SMN服务对应的主题名称。
    * topicUrn  **参数说明**：SMN服务对应的topic的主题URN。
    * messageContent  **参数说明**：短信或邮件的内容。。
    * messageTitle  **参数说明**：短信或邮件的主题。。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'themeName' => 'setThemeName',
            'topicUrn' => 'setTopicUrn',
            'messageContent' => 'setMessageContent',
            'messageTitle' => 'setMessageTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  **参数说明**：SMN服务对应的region区域。
    * projectId  **参数说明**：SMN服务对应的projectId信息。
    * themeName  **参数说明**：SMN服务对应的主题名称。
    * topicUrn  **参数说明**：SMN服务对应的topic的主题URN。
    * messageContent  **参数说明**：短信或邮件的内容。。
    * messageTitle  **参数说明**：短信或邮件的主题。。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'themeName' => 'getThemeName',
            'topicUrn' => 'getTopicUrn',
            'messageContent' => 'getMessageContent',
            'messageTitle' => 'getMessageTitle'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['themeName'] = isset($data['themeName']) ? $data['themeName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['messageContent'] = isset($data['messageContent']) ? $data['messageContent'] : null;
        $this->container['messageTitle'] = isset($data['messageTitle']) ? $data['messageTitle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if ((mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['themeName'] === null) {
            $invalidProperties[] = "'themeName' can't be null";
        }
            if ((mb_strlen($this->container['themeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'themeName', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['messageContent'] === null) {
            $invalidProperties[] = "'messageContent' can't be null";
        }
            if ((mb_strlen($this->container['messageContent']) > 1024)) {
                $invalidProperties[] = "invalid value for 'messageContent', the character length must be smaller than or equal to 1024.";
            }
        if ($this->container['messageTitle'] === null) {
            $invalidProperties[] = "'messageTitle' can't be null";
        }
            if ((mb_strlen($this->container['messageTitle']) > 256)) {
                $invalidProperties[] = "invalid value for 'messageTitle', the character length must be smaller than or equal to 256.";
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
    * Gets regionName
    *  **参数说明**：SMN服务对应的region区域。
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName **参数说明**：SMN服务对应的region区域。
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数说明**：SMN服务对应的projectId信息。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数说明**：SMN服务对应的projectId信息。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets themeName
    *  **参数说明**：SMN服务对应的主题名称。
    *
    * @return string
    */
    public function getThemeName()
    {
        return $this->container['themeName'];
    }

    /**
    * Sets themeName
    *
    * @param string $themeName **参数说明**：SMN服务对应的主题名称。
    *
    * @return $this
    */
    public function setThemeName($themeName)
    {
        $this->container['themeName'] = $themeName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数说明**：SMN服务对应的topic的主题URN。
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
    * @param string $topicUrn **参数说明**：SMN服务对应的topic的主题URN。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets messageContent
    *  **参数说明**：短信或邮件的内容。。
    *
    * @return string
    */
    public function getMessageContent()
    {
        return $this->container['messageContent'];
    }

    /**
    * Sets messageContent
    *
    * @param string $messageContent **参数说明**：短信或邮件的内容。。
    *
    * @return $this
    */
    public function setMessageContent($messageContent)
    {
        $this->container['messageContent'] = $messageContent;
        return $this;
    }

    /**
    * Gets messageTitle
    *  **参数说明**：短信或邮件的主题。。
    *
    * @return string
    */
    public function getMessageTitle()
    {
        return $this->container['messageTitle'];
    }

    /**
    * Sets messageTitle
    *
    * @param string $messageTitle **参数说明**：短信或邮件的主题。。
    *
    * @return $this
    */
    public function setMessageTitle($messageTitle)
    {
        $this->container['messageTitle'] = $messageTitle;
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

