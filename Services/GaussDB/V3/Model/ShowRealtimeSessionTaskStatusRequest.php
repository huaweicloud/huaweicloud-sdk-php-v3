<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealtimeSessionTaskStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealtimeSessionTaskStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    * nodeId  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * requestId  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'xLanguage' => 'string',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    * nodeId  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * requestId  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'xLanguage' => null,
        'requestId' => null
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
    * instanceId  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    * nodeId  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * requestId  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'xLanguage' => 'X-Language',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    * nodeId  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * requestId  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'xLanguage' => 'setXLanguage',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    * nodeId  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    * requestId  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'xLanguage' => 'getXLanguage',
            'requestId' => 'getRequestId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['nodeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 72)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 72.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 2)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['requestId'] === null) {
            $invalidProperties[] = "'requestId' can't be null";
        }
            if ((mb_strlen($this->container['requestId']) > 72)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 72.";
            }
            if ((mb_strlen($this->container['requestId']) < 2)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 2.";
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
    * Gets instanceId
    *  参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
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
    * @param string $instanceId 参数解释：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ShowMysqlInstanceList.html)。  约束限制：  不涉及。  取值范围：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  默认取值：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**：  节点ID。 获取方法请参见[查询实例详情信息](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us - zh-cn  **默认取值**：  en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets requestId
    *  **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string $requestId **参数解释**：  收集全部实时会话信息任务ID。  获取方法请参见[收集全部实时会话信息](https://support.huaweicloud.com/api-taurusdb/CollectRealtimeSession.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

