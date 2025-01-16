<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MessageTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MessageTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * messageTemplateId  模板ID。
    * messageTemplateName  模板名称。
    * protocol  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    * tagNames  模板tag列表
    * createTime  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'messageTemplateId' => 'string',
            'messageTemplateName' => 'string',
            'protocol' => 'string',
            'tagNames' => 'string[]',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * messageTemplateId  模板ID。
    * messageTemplateName  模板名称。
    * protocol  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    * tagNames  模板tag列表
    * createTime  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'messageTemplateId' => null,
        'messageTemplateName' => null,
        'protocol' => null,
        'tagNames' => null,
        'createTime' => null,
        'updateTime' => null
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
    * messageTemplateId  模板ID。
    * messageTemplateName  模板名称。
    * protocol  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    * tagNames  模板tag列表
    * createTime  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'messageTemplateId' => 'message_template_id',
            'messageTemplateName' => 'message_template_name',
            'protocol' => 'protocol',
            'tagNames' => 'tag_names',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * messageTemplateId  模板ID。
    * messageTemplateName  模板名称。
    * protocol  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    * tagNames  模板tag列表
    * createTime  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'messageTemplateId' => 'setMessageTemplateId',
            'messageTemplateName' => 'setMessageTemplateName',
            'protocol' => 'setProtocol',
            'tagNames' => 'setTagNames',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * messageTemplateId  模板ID。
    * messageTemplateName  模板名称。
    * protocol  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    * tagNames  模板tag列表
    * createTime  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'messageTemplateId' => 'getMessageTemplateId',
            'messageTemplateName' => 'getMessageTemplateName',
            'protocol' => 'getProtocol',
            'tagNames' => 'getTagNames',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['messageTemplateId'] = isset($data['messageTemplateId']) ? $data['messageTemplateId'] : null;
        $this->container['messageTemplateName'] = isset($data['messageTemplateName']) ? $data['messageTemplateName'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['tagNames'] = isset($data['tagNames']) ? $data['tagNames'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['messageTemplateId'] === null) {
            $invalidProperties[] = "'messageTemplateId' can't be null";
        }
        if ($this->container['messageTemplateName'] === null) {
            $invalidProperties[] = "'messageTemplateName' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['tagNames'] === null) {
            $invalidProperties[] = "'tagNames' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets messageTemplateId
    *  模板ID。
    *
    * @return string
    */
    public function getMessageTemplateId()
    {
        return $this->container['messageTemplateId'];
    }

    /**
    * Sets messageTemplateId
    *
    * @param string $messageTemplateId 模板ID。
    *
    * @return $this
    */
    public function setMessageTemplateId($messageTemplateId)
    {
        $this->container['messageTemplateId'] = $messageTemplateId;
        return $this;
    }

    /**
    * Gets messageTemplateName
    *  模板名称。
    *
    * @return string
    */
    public function getMessageTemplateName()
    {
        return $this->container['messageTemplateName'];
    }

    /**
    * Sets messageTemplateName
    *
    * @param string $messageTemplateName 模板名称。
    *
    * @return $this
    */
    public function setMessageTemplateName($messageTemplateName)
    {
        $this->container['messageTemplateName'] = $messageTemplateName;
        return $this;
    }

    /**
    * Gets protocol
    *  模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 模板协议类型。  目前支持的协议包括：  “email”：邮件传输协议。  “sms”：短信传输协议。  “functionstage”：FunctionGraph（函数）传输协议。  “http”、“https”：HTTP/HTTPS传输协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets tagNames
    *  模板tag列表
    *
    * @return string[]
    */
    public function getTagNames()
    {
        return $this->container['tagNames'];
    }

    /**
    * Sets tagNames
    *
    * @param string[] $tagNames 模板tag列表
    *
    * @return $this
    */
    public function setTagNames($tagNames)
    {
        $this->container['tagNames'] = $tagNames;
        return $this;
    }

    /**
    * Gets createTime
    *  模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 模板创建时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 模板最后更新时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

