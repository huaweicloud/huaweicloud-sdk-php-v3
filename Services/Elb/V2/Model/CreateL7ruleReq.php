<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateL7ruleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateL7ruleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  转发规则所在的项目ID。
    * adminStateUp  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配内容
    * compareType  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    * key  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    * value  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * invert  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'adminStateUp' => 'bool',
            'type' => 'string',
            'compareType' => 'string',
            'key' => 'string',
            'value' => 'string',
            'invert' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  转发规则所在的项目ID。
    * adminStateUp  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配内容
    * compareType  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    * key  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    * value  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * invert  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'adminStateUp' => null,
        'type' => null,
        'compareType' => null,
        'key' => null,
        'value' => null,
        'invert' => null
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
    * tenantId  转发规则所在的项目ID。
    * adminStateUp  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配内容
    * compareType  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    * key  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    * value  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * invert  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'adminStateUp' => 'admin_state_up',
            'type' => 'type',
            'compareType' => 'compare_type',
            'key' => 'key',
            'value' => 'value',
            'invert' => 'invert'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  转发规则所在的项目ID。
    * adminStateUp  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配内容
    * compareType  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    * key  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    * value  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * invert  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'adminStateUp' => 'setAdminStateUp',
            'type' => 'setType',
            'compareType' => 'setCompareType',
            'key' => 'setKey',
            'value' => 'setValue',
            'invert' => 'setInvert'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  转发规则所在的项目ID。
    * adminStateUp  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配内容
    * compareType  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    * key  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    * value  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * invert  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'adminStateUp' => 'getAdminStateUp',
            'type' => 'getType',
            'compareType' => 'getCompareType',
            'key' => 'getKey',
            'value' => 'getValue',
            'invert' => 'getInvert'
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
    const TYPE_HOST_NAME = 'HOST_NAME';
    const TYPE_PATH = 'PATH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HOST_NAME,
            self::TYPE_PATH,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['invert'] = isset($data['invert']) ? $data['invert'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
        }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 255)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
    * Gets tenantId
    *  转发规则所在的项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 转发规则所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 转发规则的管理状态；该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets type
    *  转发规则的匹配内容
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 转发规则的匹配内容
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets compareType
    *  转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType 转发规则的匹配方式。type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX， STARTS_WITH，EQUAL_TO。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets key
    *  匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 匹配内容的键值。目前匹配内容为HOST_NAME和PATH时，该字段不生效。该字段能更新但不会生效。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 匹配内容的值。其值不能包含空格。使用说明：当type为HOST_NAME时，取值范围：String(100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。当type为PATH时，取值范围：String(128)。当转发规则的compare_type为STARTS_WITH，EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets invert
    *  是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @return bool|null
    */
    public function getInvert()
    {
        return $this->container['invert'];
    }

    /**
    * Sets invert
    *
    * @param bool|null $invert 是否反向匹配； 取值范围：true/false。默认值：false； 该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setInvert($invert)
    {
        $this->container['invert'] = $invert;
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

