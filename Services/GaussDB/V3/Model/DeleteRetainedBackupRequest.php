<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteRetainedBackupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteRetainedBackupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * backupId  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'backupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * backupId  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'backupId' => null
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
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * backupId  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'backupId' => 'backup_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * backupId  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'backupId' => 'setBackupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * backupId  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'backupId' => 'getBackupId'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
        }
            if ((mb_strlen($this->container['backupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['backupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be bigger than or equal to 36.";
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
    * Gets xLanguage
    *  **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
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
    * @param string|null $xLanguage **参数解释**：  请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
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
    * @param string $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  通过调用[查询回收站实例信息](https://support.huaweicloud.com/api-taurusdb/ListRecycleInstances.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets backupId
    *  **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string $backupId **参数解释**：  待删除的回收站保留备份ID。  获取方法：调用[查询实例回收站中保留的备份列表](https://support.huaweicloud.com/api-taurusdb/ListRetainedBackups.html)接口获取。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为br07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
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

