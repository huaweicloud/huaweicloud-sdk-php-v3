<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteFunctionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteFunctionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    * spAuthToken  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    * stageAuthToken  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    * functionId  **参数说明**：函数ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'spAuthToken' => 'string',
            'stageAuthToken' => 'string',
            'functionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    * spAuthToken  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    * stageAuthToken  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    * functionId  **参数说明**：函数ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'spAuthToken' => null,
        'stageAuthToken' => null,
        'functionId' => null
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
    * instanceId  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    * spAuthToken  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    * stageAuthToken  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    * functionId  **参数说明**：函数ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'Instance-Id',
            'spAuthToken' => 'Sp-Auth-Token',
            'stageAuthToken' => 'Stage-Auth-Token',
            'functionId' => 'function_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    * spAuthToken  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    * stageAuthToken  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    * functionId  **参数说明**：函数ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'spAuthToken' => 'setSpAuthToken',
            'stageAuthToken' => 'setStageAuthToken',
            'functionId' => 'setFunctionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    * spAuthToken  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    * stageAuthToken  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    * functionId  **参数说明**：函数ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'spAuthToken' => 'getSpAuthToken',
            'stageAuthToken' => 'getStageAuthToken',
            'functionId' => 'getFunctionId'
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
        $this->container['spAuthToken'] = isset($data['spAuthToken']) ? $data['spAuthToken'] : null;
        $this->container['stageAuthToken'] = isset($data['stageAuthToken']) ? $data['stageAuthToken'] : null;
        $this->container['functionId'] = isset($data['functionId']) ? $data['functionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-f-]{1,36}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-f-]{1,36}/.";
            }
        if ($this->container['functionId'] === null) {
            $invalidProperties[] = "'functionId' can't be null";
        }
            if ((mb_strlen($this->container['functionId']) > 256)) {
                $invalidProperties[] = "invalid value for 'functionId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['functionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'functionId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{0,36}$/", $this->container['functionId'])) {
                $invalidProperties[] = "invalid value for 'functionId', must be conform to the pattern /^[a-zA-Z0-9_-]{0,36}$/.";
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
    *  **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数说明**：实例ID。物理多租下各实例的唯一标识，建议携带该参数，在使用专业版时必须携带该参数。您可以在IoTDA管理控制台界面，选择左侧导航栏“总览”页签查看当前实例的ID，具体获取方式请参考[[查看实例详情](https://support.huaweicloud.com/usermanual-iothub/iot_01_0079.html#section1)](tag:hws) [[查看实例详情](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0079.html#section1)](tag:hws_hk)。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets spAuthToken
    *  **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    *
    * @return string|null
    */
    public function getSpAuthToken()
    {
        return $this->container['spAuthToken'];
    }

    /**
    * Sets spAuthToken
    *
    * @param string|null $spAuthToken **参数说明**：Sp用户Token。通过调用IoBPS服务获取SP用户Token。
    *
    * @return $this
    */
    public function setSpAuthToken($spAuthToken)
    {
        $this->container['spAuthToken'] = $spAuthToken;
        return $this;
    }

    /**
    * Gets stageAuthToken
    *  **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    *
    * @return string|null
    */
    public function getStageAuthToken()
    {
        return $this->container['stageAuthToken'];
    }

    /**
    * Sets stageAuthToken
    *
    * @param string|null $stageAuthToken **参数说明**：Stage用户的Token, 仅提供给IoStage服务使用。
    *
    * @return $this
    */
    public function setStageAuthToken($stageAuthToken)
    {
        $this->container['stageAuthToken'] = $stageAuthToken;
        return $this;
    }

    /**
    * Gets functionId
    *  **参数说明**：函数ID。
    *
    * @return string
    */
    public function getFunctionId()
    {
        return $this->container['functionId'];
    }

    /**
    * Sets functionId
    *
    * @param string $functionId **参数说明**：函数ID。
    *
    * @return $this
    */
    public function setFunctionId($functionId)
    {
        $this->container['functionId'] = $functionId;
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

