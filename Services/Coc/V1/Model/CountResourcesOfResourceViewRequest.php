<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountResourcesOfResourceViewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountResourcesOfResourceViewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * viewId  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'viewId' => 'string',
            'provider' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * viewId  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'viewId' => null,
        'provider' => null,
        'type' => null
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
    * viewId  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'viewId' => 'view_id',
            'provider' => 'provider',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * viewId  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'viewId' => 'setViewId',
            'provider' => 'setProvider',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * viewId  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    * provider  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'viewId' => 'getViewId',
            'provider' => 'getProvider',
            'type' => 'getType'
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
        $this->container['viewId'] = isset($data['viewId']) ? $data['viewId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['viewId'] === null) {
            $invalidProperties[] = "'viewId' can't be null";
        }
            if ((mb_strlen($this->container['viewId']) > 32)) {
                $invalidProperties[] = "invalid value for 'viewId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['viewId']) < 1)) {
                $invalidProperties[] = "invalid value for 'viewId', the character length must be bigger than or equal to 1.";
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
    * Gets viewId
    *  **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getViewId()
    {
        return $this->container['viewId'];
    }

    /**
    * Sets viewId
    *
    * @param string $viewId **参数解释：** 视图ID。 **约束限制：** 不涉及。 **取值范围：** 自定义生成 长度1~32之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setViewId($viewId)
    {
        $this->container['viewId'] = $viewId;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider **参数解释：** 云服务名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可选esc，cce等资源。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 资源类型名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

