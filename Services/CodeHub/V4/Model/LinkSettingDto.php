<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LinkSettingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LinkSettingDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * active  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    * url  **参数解释：** Link服务的对接地址。
    * appAuthType  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    * appAk  **参数解释：** Link服务的对接鉴权ak。
    * appSk  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'active' => 'bool',
            'url' => 'string',
            'appAuthType' => 'string',
            'appAk' => 'string',
            'appSk' => 'string',
            'categories' => 'string',
            'excludeStatuses' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * active  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    * url  **参数解释：** Link服务的对接地址。
    * appAuthType  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    * appAk  **参数解释：** Link服务的对接鉴权ak。
    * appSk  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'active' => null,
        'url' => null,
        'appAuthType' => null,
        'appAk' => null,
        'appSk' => null,
        'categories' => null,
        'excludeStatuses' => null
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
    * active  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    * url  **参数解释：** Link服务的对接地址。
    * appAuthType  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    * appAk  **参数解释：** Link服务的对接鉴权ak。
    * appSk  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'active' => 'active',
            'url' => 'url',
            'appAuthType' => 'app_auth_type',
            'appAk' => 'app_ak',
            'appSk' => 'app_sk',
            'categories' => 'categories',
            'excludeStatuses' => 'exclude_statuses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * active  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    * url  **参数解释：** Link服务的对接地址。
    * appAuthType  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    * appAk  **参数解释：** Link服务的对接鉴权ak。
    * appSk  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'active' => 'setActive',
            'url' => 'setUrl',
            'appAuthType' => 'setAppAuthType',
            'appAk' => 'setAppAk',
            'appSk' => 'setAppSk',
            'categories' => 'setCategories',
            'excludeStatuses' => 'setExcludeStatuses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * active  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    * url  **参数解释：** Link服务的对接地址。
    * appAuthType  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    * appAk  **参数解释：** Link服务的对接鉴权ak。
    * appSk  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'active' => 'getActive',
            'url' => 'getUrl',
            'appAuthType' => 'getAppAuthType',
            'appAk' => 'getAppAk',
            'appSk' => 'getAppSk',
            'categories' => 'getCategories',
            'excludeStatuses' => 'getExcludeStatuses'
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
    const APP_AUTH_TYPE_AK_SK = 'ak_sk';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppAuthTypeAllowableValues()
    {
        return [
            self::APP_AUTH_TYPE_AK_SK,
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['appAuthType'] = isset($data['appAuthType']) ? $data['appAuthType'] : null;
        $this->container['appAk'] = isset($data['appAk']) ? $data['appAk'] : null;
        $this->container['appSk'] = isset($data['appSk']) ? $data['appSk'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['excludeStatuses'] = isset($data['excludeStatuses']) ? $data['excludeStatuses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 200)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAppAuthTypeAllowableValues();
                if (!is_null($this->container['appAuthType']) && !in_array($this->container['appAuthType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appAuthType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['appAk']) && (mb_strlen($this->container['appAk']) > 200)) {
                $invalidProperties[] = "invalid value for 'appAk', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['appAk']) && (mb_strlen($this->container['appAk']) < 0)) {
                $invalidProperties[] = "invalid value for 'appAk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appSk']) && (mb_strlen($this->container['appSk']) > 200)) {
                $invalidProperties[] = "invalid value for 'appSk', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['appSk']) && (mb_strlen($this->container['appSk']) < 0)) {
                $invalidProperties[] = "invalid value for 'appSk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) > 200)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) < 0)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeStatuses']) && (mb_strlen($this->container['excludeStatuses']) > 200)) {
                $invalidProperties[] = "invalid value for 'excludeStatuses', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['excludeStatuses']) && (mb_strlen($this->container['excludeStatuses']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeStatuses', the character length must be bigger than or equal to 0.";
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
    * Gets active
    *  **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active **参数解释：** 是否开启集成Link服务 **取值范围：** true：开启集成Link服务，false：未开启集成Link服务。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** Link服务的对接地址。
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
    * @param string|null $url **参数解释：** Link服务的对接地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets appAuthType
    *  **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    *
    * @return string|null
    */
    public function getAppAuthType()
    {
        return $this->container['appAuthType'];
    }

    /**
    * Sets appAuthType
    *
    * @param string|null $appAuthType **参数解释：** Link服务的对接鉴权类型，ak_sk代表使用ak和sk来鉴权。
    *
    * @return $this
    */
    public function setAppAuthType($appAuthType)
    {
        $this->container['appAuthType'] = $appAuthType;
        return $this;
    }

    /**
    * Gets appAk
    *  **参数解释：** Link服务的对接鉴权ak。
    *
    * @return string|null
    */
    public function getAppAk()
    {
        return $this->container['appAk'];
    }

    /**
    * Sets appAk
    *
    * @param string|null $appAk **参数解释：** Link服务的对接鉴权ak。
    *
    * @return $this
    */
    public function setAppAk($appAk)
    {
        $this->container['appAk'] = $appAk;
        return $this;
    }

    /**
    * Gets appSk
    *  **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    *
    * @return string|null
    */
    public function getAppSk()
    {
        return $this->container['appSk'];
    }

    /**
    * Sets appSk
    *
    * @param string|null $appSk **参数解释：** Link服务的对接鉴权sk，作为返回值时若已配置则返回掩码，掩码格式为************。
    *
    * @return $this
    */
    public function setAppSk($appSk)
    {
        $this->container['appSk'] = $appSk;
        return $this;
    }

    /**
    * Gets categories
    *  **参数解释：** 可关联类型列表，逗号分隔。
    *
    * @return string|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string|null $categories **参数解释：** 可关联类型列表，逗号分隔。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets excludeStatuses
    *  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @return string|null
    */
    public function getExcludeStatuses()
    {
        return $this->container['excludeStatuses'];
    }

    /**
    * Sets excludeStatuses
    *
    * @param string|null $excludeStatuses **参数解释：** 排除状态列表，逗号分隔。
    *
    * @return $this
    */
    public function setExcludeStatuses($excludeStatuses)
    {
        $this->container['excludeStatuses'] = $excludeStatuses;
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

