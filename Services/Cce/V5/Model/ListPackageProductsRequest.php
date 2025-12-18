<?php

namespace HuaweiCloud\SDK\Cce\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPackageProductsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPackageProductsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * locale  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'locale' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * locale  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'locale' => null
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
    * locale  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'locale' => 'locale'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * locale  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @var string[]
    */
    protected static $setters = [
            'locale' => 'setLocale'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * locale  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @var string[]
    */
    protected static $getters = [
            'locale' => 'getLocale'
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
    const LOCALE_ZH_CN = 'zh-cn';
    const LOCALE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_ZH_CN,
            self::LOCALE_EN_US,
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
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLocaleAllowableValues();
                if (!is_null($this->container['locale']) && !in_array($this->container['locale'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'locale', must be one of '%s'",
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
    * Gets locale
    *  **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale **参数解释**： 参数表示用户的语言/所在区域。根据 locale 参数，系统会返回适合该语言/区域的套餐包名称。 **约束限制：** 不涉及 **取值范围**： - zh-cn: 显示中文名称，例如：“Autopilot 通用型 1,000 核时CPU月包” - en-us: 显示英文名称，例如：“Autopilot General Computing 1,000 vCPU-hours CPU monthly package”  **默认取值：** zh-cn
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
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

