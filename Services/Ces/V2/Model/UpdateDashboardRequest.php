<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDashboardRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDashboardRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardId  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardId' => 'string',
            'body' => '\HuaweiCloud\SDK\Ces\V2\Model\UpdateDashboardRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardId  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardId' => null,
        'body' => null
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
    * dashboardId  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardId' => 'dashboard_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardId  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardId' => 'setDashboardId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardId  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardId' => 'getDashboardId',
            'body' => 'getBody'
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
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dashboardId'] === null) {
            $invalidProperties[] = "'dashboardId' can't be null";
        }
            if (!preg_match("/^db([a-z]|[A-Z]|[0-9]){22}$/", $this->container['dashboardId'])) {
                $invalidProperties[] = "invalid value for 'dashboardId', must be conform to the pattern /^db([a-z]|[A-Z]|[0-9]){22}$/.";
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
    * Gets dashboardId
    *  **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string $dashboardId **参数解释**: 监控看板id **约束限制**: 不涉及。 **取值范围**: 以db开头，包含22个字母和数字，长度为24个字符 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\UpdateDashboardRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\UpdateDashboardRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

