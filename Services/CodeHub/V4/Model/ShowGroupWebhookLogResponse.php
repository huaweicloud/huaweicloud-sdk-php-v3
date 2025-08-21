<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupWebhookLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupWebhookLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** Webhook 日志id。
    * webHookId  **参数解释：** Webhook id。
    * trigger  **参数解释：** 触发类型。
    * url  **参数解释：** 请求地址。
    * responseStatus  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    * executionDuration  **参数解释：** 响应耗时，单位是秒
    * uuid  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * requestHeaders  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    * requestData  **参数解释：** 请求体，此处会将用户邮箱隐藏
    * responseHeaders  **参数解释：** 响应头
    * responseBody  **参数解释：** 响应体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'webHookId' => 'int',
            'trigger' => 'string',
            'url' => 'string',
            'responseStatus' => 'string',
            'executionDuration' => 'double',
            'uuid' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'requestHeaders' => 'object',
            'requestData' => 'object',
            'responseHeaders' => 'object',
            'responseBody' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** Webhook 日志id。
    * webHookId  **参数解释：** Webhook id。
    * trigger  **参数解释：** 触发类型。
    * url  **参数解释：** 请求地址。
    * responseStatus  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    * executionDuration  **参数解释：** 响应耗时，单位是秒
    * uuid  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * requestHeaders  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    * requestData  **参数解释：** 请求体，此处会将用户邮箱隐藏
    * responseHeaders  **参数解释：** 响应头
    * responseBody  **参数解释：** 响应体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'webHookId' => 'int32',
        'trigger' => null,
        'url' => null,
        'responseStatus' => null,
        'executionDuration' => 'double',
        'uuid' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'requestHeaders' => null,
        'requestData' => null,
        'responseHeaders' => null,
        'responseBody' => null
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
    * id  **参数解释：** Webhook 日志id。
    * webHookId  **参数解释：** Webhook id。
    * trigger  **参数解释：** 触发类型。
    * url  **参数解释：** 请求地址。
    * responseStatus  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    * executionDuration  **参数解释：** 响应耗时，单位是秒
    * uuid  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * requestHeaders  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    * requestData  **参数解释：** 请求体，此处会将用户邮箱隐藏
    * responseHeaders  **参数解释：** 响应头
    * responseBody  **参数解释：** 响应体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'webHookId' => 'web_hook_id',
            'trigger' => 'trigger',
            'url' => 'url',
            'responseStatus' => 'response_status',
            'executionDuration' => 'execution_duration',
            'uuid' => 'uuid',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'requestHeaders' => 'request_headers',
            'requestData' => 'request_data',
            'responseHeaders' => 'response_headers',
            'responseBody' => 'response_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** Webhook 日志id。
    * webHookId  **参数解释：** Webhook id。
    * trigger  **参数解释：** 触发类型。
    * url  **参数解释：** 请求地址。
    * responseStatus  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    * executionDuration  **参数解释：** 响应耗时，单位是秒
    * uuid  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * requestHeaders  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    * requestData  **参数解释：** 请求体，此处会将用户邮箱隐藏
    * responseHeaders  **参数解释：** 响应头
    * responseBody  **参数解释：** 响应体
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'webHookId' => 'setWebHookId',
            'trigger' => 'setTrigger',
            'url' => 'setUrl',
            'responseStatus' => 'setResponseStatus',
            'executionDuration' => 'setExecutionDuration',
            'uuid' => 'setUuid',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'requestHeaders' => 'setRequestHeaders',
            'requestData' => 'setRequestData',
            'responseHeaders' => 'setResponseHeaders',
            'responseBody' => 'setResponseBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** Webhook 日志id。
    * webHookId  **参数解释：** Webhook id。
    * trigger  **参数解释：** 触发类型。
    * url  **参数解释：** 请求地址。
    * responseStatus  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    * executionDuration  **参数解释：** 响应耗时，单位是秒
    * uuid  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * requestHeaders  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    * requestData  **参数解释：** 请求体，此处会将用户邮箱隐藏
    * responseHeaders  **参数解释：** 响应头
    * responseBody  **参数解释：** 响应体
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'webHookId' => 'getWebHookId',
            'trigger' => 'getTrigger',
            'url' => 'getUrl',
            'responseStatus' => 'getResponseStatus',
            'executionDuration' => 'getExecutionDuration',
            'uuid' => 'getUuid',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'requestHeaders' => 'getRequestHeaders',
            'requestData' => 'getRequestData',
            'responseHeaders' => 'getResponseHeaders',
            'responseBody' => 'getResponseBody'
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
        $this->container['webHookId'] = isset($data['webHookId']) ? $data['webHookId'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['responseStatus'] = isset($data['responseStatus']) ? $data['responseStatus'] : null;
        $this->container['executionDuration'] = isset($data['executionDuration']) ? $data['executionDuration'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['requestHeaders'] = isset($data['requestHeaders']) ? $data['requestHeaders'] : null;
        $this->container['requestData'] = isset($data['requestData']) ? $data['requestData'] : null;
        $this->container['responseHeaders'] = isset($data['responseHeaders']) ? $data['responseHeaders'] : null;
        $this->container['responseBody'] = isset($data['responseBody']) ? $data['responseBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['webHookId']) && ($this->container['webHookId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webHookId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webHookId']) && ($this->container['webHookId'] < 1)) {
                $invalidProperties[] = "invalid value for 'webHookId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['trigger']) && (mb_strlen($this->container['trigger']) > 100)) {
                $invalidProperties[] = "invalid value for 'trigger', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['trigger']) && (mb_strlen($this->container['trigger']) < 1)) {
                $invalidProperties[] = "invalid value for 'trigger', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 100000)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['responseStatus']) && (mb_strlen($this->container['responseStatus']) > 100)) {
                $invalidProperties[] = "invalid value for 'responseStatus', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['responseStatus']) && (mb_strlen($this->container['responseStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'responseStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executionDuration']) && ($this->container['executionDuration'] > 300)) {
                $invalidProperties[] = "invalid value for 'executionDuration', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['executionDuration']) && ($this->container['executionDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'executionDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 100)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** Webhook 日志id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** Webhook 日志id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets webHookId
    *  **参数解释：** Webhook id。
    *
    * @return int|null
    */
    public function getWebHookId()
    {
        return $this->container['webHookId'];
    }

    /**
    * Sets webHookId
    *
    * @param int|null $webHookId **参数解释：** Webhook id。
    *
    * @return $this
    */
    public function setWebHookId($webHookId)
    {
        $this->container['webHookId'] = $webHookId;
        return $this;
    }

    /**
    * Gets trigger
    *  **参数解释：** 触发类型。
    *
    * @return string|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param string|null $trigger **参数解释：** 触发类型。
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** 请求地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** 请求地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets responseStatus
    *  **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    *
    * @return string|null
    */
    public function getResponseStatus()
    {
        return $this->container['responseStatus'];
    }

    /**
    * Sets responseStatus
    *
    * @param string|null $responseStatus **参数解释：** 响应状态，默认是响应码，如果webhook地址未返回或者其他异常情况，则记录为internal error
    *
    * @return $this
    */
    public function setResponseStatus($responseStatus)
    {
        $this->container['responseStatus'] = $responseStatus;
        return $this;
    }

    /**
    * Gets executionDuration
    *  **参数解释：** 响应耗时，单位是秒
    *
    * @return double|null
    */
    public function getExecutionDuration()
    {
        return $this->container['executionDuration'];
    }

    /**
    * Sets executionDuration
    *
    * @param double|null $executionDuration **参数解释：** 响应耗时，单位是秒
    *
    * @return $this
    */
    public function setExecutionDuration($executionDuration)
    {
        $this->container['executionDuration'] = $executionDuration;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid **参数解释：** Webhook每次发送消息的时候，会在请求体中带上uuid字段，此处为该记录的uuid字段
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
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
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets requestHeaders
    *  **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    *
    * @return object|null
    */
    public function getRequestHeaders()
    {
        return $this->container['requestHeaders'];
    }

    /**
    * Sets requestHeaders
    *
    * @param object|null $requestHeaders **参数解释：** 请求头，此处会将敏感信息如传递的token隐藏
    *
    * @return $this
    */
    public function setRequestHeaders($requestHeaders)
    {
        $this->container['requestHeaders'] = $requestHeaders;
        return $this;
    }

    /**
    * Gets requestData
    *  **参数解释：** 请求体，此处会将用户邮箱隐藏
    *
    * @return object|null
    */
    public function getRequestData()
    {
        return $this->container['requestData'];
    }

    /**
    * Sets requestData
    *
    * @param object|null $requestData **参数解释：** 请求体，此处会将用户邮箱隐藏
    *
    * @return $this
    */
    public function setRequestData($requestData)
    {
        $this->container['requestData'] = $requestData;
        return $this;
    }

    /**
    * Gets responseHeaders
    *  **参数解释：** 响应头
    *
    * @return object|null
    */
    public function getResponseHeaders()
    {
        return $this->container['responseHeaders'];
    }

    /**
    * Sets responseHeaders
    *
    * @param object|null $responseHeaders **参数解释：** 响应头
    *
    * @return $this
    */
    public function setResponseHeaders($responseHeaders)
    {
        $this->container['responseHeaders'] = $responseHeaders;
        return $this;
    }

    /**
    * Gets responseBody
    *  **参数解释：** 响应体
    *
    * @return object|null
    */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
    * Sets responseBody
    *
    * @param object|null $responseBody **参数解释：** 响应体
    *
    * @return $this
    */
    public function setResponseBody($responseBody)
    {
        $this->container['responseBody'] = $responseBody;
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

