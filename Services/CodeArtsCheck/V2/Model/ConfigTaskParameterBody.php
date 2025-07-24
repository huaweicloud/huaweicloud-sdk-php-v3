<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigTaskParameterBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigTaskParameterBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkId  检查工具ID
    * rulesetId  规则集ID
    * language  规则集语言
    * status  off：关闭，on：开启
    * taskCheckSettings  检查参数信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkId' => 'int',
            'rulesetId' => 'string',
            'language' => 'string',
            'status' => 'string',
            'taskCheckSettings' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskCheckSettingsItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkId  检查工具ID
    * rulesetId  规则集ID
    * language  规则集语言
    * status  off：关闭，on：开启
    * taskCheckSettings  检查参数信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkId' => null,
        'rulesetId' => null,
        'language' => null,
        'status' => null,
        'taskCheckSettings' => null
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
    * checkId  检查工具ID
    * rulesetId  规则集ID
    * language  规则集语言
    * status  off：关闭，on：开启
    * taskCheckSettings  检查参数信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkId' => 'check_id',
            'rulesetId' => 'ruleset_id',
            'language' => 'language',
            'status' => 'status',
            'taskCheckSettings' => 'task_check_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkId  检查工具ID
    * rulesetId  规则集ID
    * language  规则集语言
    * status  off：关闭，on：开启
    * taskCheckSettings  检查参数信息
    *
    * @var string[]
    */
    protected static $setters = [
            'checkId' => 'setCheckId',
            'rulesetId' => 'setRulesetId',
            'language' => 'setLanguage',
            'status' => 'setStatus',
            'taskCheckSettings' => 'setTaskCheckSettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkId  检查工具ID
    * rulesetId  规则集ID
    * language  规则集语言
    * status  off：关闭，on：开启
    * taskCheckSettings  检查参数信息
    *
    * @var string[]
    */
    protected static $getters = [
            'checkId' => 'getCheckId',
            'rulesetId' => 'getRulesetId',
            'language' => 'getLanguage',
            'status' => 'getStatus',
            'taskCheckSettings' => 'getTaskCheckSettings'
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
        $this->container['checkId'] = isset($data['checkId']) ? $data['checkId'] : null;
        $this->container['rulesetId'] = isset($data['rulesetId']) ? $data['rulesetId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskCheckSettings'] = isset($data['taskCheckSettings']) ? $data['taskCheckSettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checkId'] === null) {
            $invalidProperties[] = "'checkId' can't be null";
        }
        if ($this->container['rulesetId'] === null) {
            $invalidProperties[] = "'rulesetId' can't be null";
        }
            if ((mb_strlen($this->container['rulesetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'rulesetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['rulesetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rulesetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 128)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 3)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['taskCheckSettings'] === null) {
            $invalidProperties[] = "'taskCheckSettings' can't be null";
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
    * Gets checkId
    *  检查工具ID
    *
    * @return int
    */
    public function getCheckId()
    {
        return $this->container['checkId'];
    }

    /**
    * Sets checkId
    *
    * @param int $checkId 检查工具ID
    *
    * @return $this
    */
    public function setCheckId($checkId)
    {
        $this->container['checkId'] = $checkId;
        return $this;
    }

    /**
    * Gets rulesetId
    *  规则集ID
    *
    * @return string
    */
    public function getRulesetId()
    {
        return $this->container['rulesetId'];
    }

    /**
    * Sets rulesetId
    *
    * @param string $rulesetId 规则集ID
    *
    * @return $this
    */
    public function setRulesetId($rulesetId)
    {
        $this->container['rulesetId'] = $rulesetId;
        return $this;
    }

    /**
    * Gets language
    *  规则集语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 规则集语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets status
    *  off：关闭，on：开启
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status off：关闭，on：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskCheckSettings
    *  检查参数信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskCheckSettingsItem[]
    */
    public function getTaskCheckSettings()
    {
        return $this->container['taskCheckSettings'];
    }

    /**
    * Sets taskCheckSettings
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskCheckSettingsItem[] $taskCheckSettings 检查参数信息
    *
    * @return $this
    */
    public function setTaskCheckSettings($taskCheckSettings)
    {
        $this->container['taskCheckSettings'] = $taskCheckSettings;
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

