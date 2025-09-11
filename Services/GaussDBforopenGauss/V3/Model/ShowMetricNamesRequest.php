<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetricNamesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetricNamesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * groupName  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * groupName  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'groupName' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * groupName  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * groupName  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * groupName  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'groupName' => 'getGroupName'
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
    const GROUP_NAME_CPUMEMORY = 'CPUMEMORY';
    const GROUP_NAME_IOSTORAGE = 'IOSTORAGE';
    const GROUP_NAME_NETWORK = 'NETWORK';
    const GROUP_NAME_CONNECTION = 'CONNECTION';
    const GROUP_NAME_TRANSACTION = 'TRANSACTION';
    const GROUP_NAME_LOCK = 'LOCK';
    const GROUP_NAME_SYNCSTAT = 'SYNCSTAT';
    const GROUP_NAME_PROCESSRESOURCE = 'PROCESSRESOURCE';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupNameAllowableValues()
    {
        return [
            self::GROUP_NAME_CPUMEMORY,
            self::GROUP_NAME_IOSTORAGE,
            self::GROUP_NAME_NETWORK,
            self::GROUP_NAME_CONNECTION,
            self::GROUP_NAME_TRANSACTION,
            self::GROUP_NAME_LOCK,
            self::GROUP_NAME_SYNCSTAT,
            self::GROUP_NAME_PROCESSRESOURCE,
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
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

        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            $allowedValues = $this->getGroupNameAllowableValues();
                if (!is_null($this->container['groupName']) && !in_array($this->container['groupName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'groupName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
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
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName **参数解释**: 指标分组名称。 **约束限制**: 不涉及。 **取值范围**: - CPUMEMORY：CPU/内存。 - IOSTORAGE：IO存储。 - NETWORK：网络。 - CONNECTION：连接。 - TRANSACTION：事务。 - LOCK：锁。 - SYNCSTAT：同步状态。 - PROCESSRESOURCE：进程资源。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

