<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCnfReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCnfReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * confContent  配置文件内容。
    * setting  setting
    * sensitiveWords  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    * desc  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'confContent' => 'string',
            'setting' => '\HuaweiCloud\SDK\Css\V1\Model\Setting',
            'sensitiveWords' => 'string[]',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * confContent  配置文件内容。
    * setting  setting
    * sensitiveWords  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    * desc  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'confContent' => null,
        'setting' => null,
        'sensitiveWords' => null,
        'desc' => null
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
    * name  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * confContent  配置文件内容。
    * setting  setting
    * sensitiveWords  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    * desc  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'confContent' => 'conf_content',
            'setting' => 'setting',
            'sensitiveWords' => 'sensitive_words',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * confContent  配置文件内容。
    * setting  setting
    * sensitiveWords  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    * desc  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'confContent' => 'setConfContent',
            'setting' => 'setSetting',
            'sensitiveWords' => 'setSensitiveWords',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * confContent  配置文件内容。
    * setting  setting
    * sensitiveWords  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    * desc  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'confContent' => 'getConfContent',
            'setting' => 'getSetting',
            'sensitiveWords' => 'getSensitiveWords',
            'desc' => 'getDesc'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['confContent'] = isset($data['confContent']) ? $data['confContent'] : null;
        $this->container['setting'] = isset($data['setting']) ? $data['setting'] : null;
        $this->container['sensitiveWords'] = isset($data['sensitiveWords']) ? $data['sensitiveWords'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['confContent'] === null) {
            $invalidProperties[] = "'confContent' can't be null";
        }
        if ($this->container['setting'] === null) {
            $invalidProperties[] = "'setting' can't be null";
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
    * Gets name
    *  配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 配置文件名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets confContent
    *  配置文件内容。
    *
    * @return string
    */
    public function getConfContent()
    {
        return $this->container['confContent'];
    }

    /**
    * Sets confContent
    *
    * @param string $confContent 配置文件内容。
    *
    * @return $this
    */
    public function setConfContent($confContent)
    {
        $this->container['confContent'] = $confContent;
        return $this;
    }

    /**
    * Gets setting
    *  setting
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\Setting
    */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
    * Sets setting
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\Setting $setting setting
    *
    * @return $this
    */
    public function setSetting($setting)
    {
        $this->container['setting'] = $setting;
        return $this;
    }

    /**
    * Gets sensitiveWords
    *  敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    *
    * @return string[]|null
    */
    public function getSensitiveWords()
    {
        return $this->container['sensitiveWords'];
    }

    /**
    * Sets sensitiveWords
    *
    * @param string[]|null $sensitiveWords 敏感字符替换 输入需要隐藏的敏感字串列表。配置隐藏字符串列表后，在返回的配置内容中，会将所有在列表中的字串隐藏为***（列表最大支持20条，单个字串最大长度512字节）
    *
    * @return $this
    */
    public function setSensitiveWords($sensitiveWords)
    {
        $this->container['sensitiveWords'] = $sensitiveWords;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 配置文件描述。 **约束限制**： 不涉及 **取值范围**： 不超过128个字符。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

