<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Connection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Connection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelReferCount  数值
    * connectionId  UUID
    * connectionType  connectionType
    * description  描述信息
    * info  描述信息
    * moduleId  UUID
    * templateTitle  相关标题
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelReferCount' => 'int',
            'connectionId' => 'string',
            'connectionType' => '\HuaweiCloud\SDK\SecMaster\V1\Model\FilterConnectionType',
            'description' => 'string',
            'info' => 'string',
            'moduleId' => 'string',
            'templateTitle' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelReferCount  数值
    * connectionId  UUID
    * connectionType  connectionType
    * description  描述信息
    * info  描述信息
    * moduleId  UUID
    * templateTitle  相关标题
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelReferCount' => 'int64',
        'connectionId' => null,
        'connectionType' => null,
        'description' => null,
        'info' => null,
        'moduleId' => null,
        'templateTitle' => null,
        'title' => null
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
    * channelReferCount  数值
    * connectionId  UUID
    * connectionType  connectionType
    * description  描述信息
    * info  描述信息
    * moduleId  UUID
    * templateTitle  相关标题
    * title  相关标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelReferCount' => 'channel_refer_count',
            'connectionId' => 'connection_id',
            'connectionType' => 'connection_type',
            'description' => 'description',
            'info' => 'info',
            'moduleId' => 'module_id',
            'templateTitle' => 'template_title',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelReferCount  数值
    * connectionId  UUID
    * connectionType  connectionType
    * description  描述信息
    * info  描述信息
    * moduleId  UUID
    * templateTitle  相关标题
    * title  相关标题
    *
    * @var string[]
    */
    protected static $setters = [
            'channelReferCount' => 'setChannelReferCount',
            'connectionId' => 'setConnectionId',
            'connectionType' => 'setConnectionType',
            'description' => 'setDescription',
            'info' => 'setInfo',
            'moduleId' => 'setModuleId',
            'templateTitle' => 'setTemplateTitle',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelReferCount  数值
    * connectionId  UUID
    * connectionType  connectionType
    * description  描述信息
    * info  描述信息
    * moduleId  UUID
    * templateTitle  相关标题
    * title  相关标题
    *
    * @var string[]
    */
    protected static $getters = [
            'channelReferCount' => 'getChannelReferCount',
            'connectionId' => 'getConnectionId',
            'connectionType' => 'getConnectionType',
            'description' => 'getDescription',
            'info' => 'getInfo',
            'moduleId' => 'getModuleId',
            'templateTitle' => 'getTemplateTitle',
            'title' => 'getTitle'
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
        $this->container['channelReferCount'] = isset($data['channelReferCount']) ? $data['channelReferCount'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['templateTitle'] = isset($data['templateTitle']) ? $data['templateTitle'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['channelReferCount']) && ($this->container['channelReferCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'channelReferCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['channelReferCount']) && ($this->container['channelReferCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'channelReferCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['info']) && (mb_strlen($this->container['info']) > 1024)) {
                $invalidProperties[] = "invalid value for 'info', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['info']) && (mb_strlen($this->container['info']) < 1)) {
                $invalidProperties[] = "invalid value for 'info', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['templateTitle']) && (mb_strlen($this->container['templateTitle']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateTitle', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateTitle']) && (mb_strlen($this->container['templateTitle']) < 5)) {
                $invalidProperties[] = "invalid value for 'templateTitle', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
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
    * Gets channelReferCount
    *  数值
    *
    * @return int|null
    */
    public function getChannelReferCount()
    {
        return $this->container['channelReferCount'];
    }

    /**
    * Sets channelReferCount
    *
    * @param int|null $channelReferCount 数值
    *
    * @return $this
    */
    public function setChannelReferCount($channelReferCount)
    {
        $this->container['channelReferCount'] = $channelReferCount;
        return $this;
    }

    /**
    * Gets connectionId
    *  UUID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId UUID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets connectionType
    *  connectionType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\FilterConnectionType|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\FilterConnectionType|null $connectionType connectionType
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets info
    *  描述信息
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info 描述信息
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets moduleId
    *  UUID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId UUID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets templateTitle
    *  相关标题
    *
    * @return string|null
    */
    public function getTemplateTitle()
    {
        return $this->container['templateTitle'];
    }

    /**
    * Sets templateTitle
    *
    * @param string|null $templateTitle 相关标题
    *
    * @return $this
    */
    public function setTemplateTitle($templateTitle)
    {
        $this->container['templateTitle'] = $templateTitle;
        return $this;
    }

    /**
    * Gets title
    *  相关标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 相关标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

