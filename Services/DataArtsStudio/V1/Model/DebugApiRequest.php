<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DebugApiRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DebugApiRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'dlmType' => 'string',
            'contentType' => 'string',
            'apiId' => 'string',
            'instanceId' => 'string',
            'body' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'dlmType' => null,
        'contentType' => null,
        'apiId' => null,
        'instanceId' => null,
        'body' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'dlmType' => 'Dlm-Type',
            'contentType' => 'Content-Type',
            'apiId' => 'api_id',
            'instanceId' => 'instance_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'dlmType' => 'setDlmType',
            'contentType' => 'setContentType',
            'apiId' => 'setApiId',
            'instanceId' => 'setInstanceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * dlmType  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    * contentType  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    * apiId  api编号。
    * instanceId  集群编号。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'dlmType' => 'getDlmType',
            'contentType' => 'getContentType',
            'apiId' => 'getApiId',
            'instanceId' => 'getInstanceId',
            'body' => 'getBody'
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
    const DLM_TYPE_SHARED = 'SHARED';
    const DLM_TYPE_EXCLUSIVE = 'EXCLUSIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDlmTypeAllowableValues()
    {
        return [
            self::DLM_TYPE_SHARED,
            self::DLM_TYPE_EXCLUSIVE,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['dlmType'] = isset($data['dlmType']) ? $data['dlmType'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            $allowedValues = $this->getDlmTypeAllowableValues();
                if (!is_null($this->container['dlmType']) && !in_array($this->container['dlmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dlmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['apiId'] === null) {
            $invalidProperties[] = "'apiId' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets dlmType
    *  数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return string|null
    */
    public function getDlmType()
    {
        return $this->container['dlmType'];
    }

    /**
    * Sets dlmType
    *
    * @param string|null $dlmType 数据服务的版本类型，指定SHARED共享版或EXCLUSIVE专享版。
    *
    * @return $this
    */
    public function setDlmType($dlmType)
    {
        $this->container['dlmType'] = $dlmType;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 消息体的类型（格式），有Body体的情况下必选，没有Body体无需填写。如果请求消息体中含有中文字符，则需要通过charset=utf8指定中文字符集，例如取值为：application/json;charset=utf8。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets apiId
    *  api编号。
    *
    * @return string
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string $apiId api编号。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets instanceId
    *  集群编号。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 集群编号。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestDTO|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestDTO|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

