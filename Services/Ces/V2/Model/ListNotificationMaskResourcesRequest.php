<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationMaskResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationMaskResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationMaskId  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationMaskId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationMaskId  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationMaskId' => null,
        'offset' => null,
        'limit' => null
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
    * notificationMaskId  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationMaskId' => 'notification_mask_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationMaskId  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationMaskId' => 'setNotificationMaskId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationMaskId  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationMaskId' => 'getNotificationMaskId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['notificationMaskId'] = isset($data['notificationMaskId']) ? $data['notificationMaskId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationMaskId'] === null) {
            $invalidProperties[] = "'notificationMaskId' can't be null";
        }
            if ((mb_strlen($this->container['notificationMaskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['notificationMaskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]|[0-9]){1,64}$/", $this->container['notificationMaskId'])) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]){1,64}$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets notificationMaskId
    *  **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getNotificationMaskId()
    {
        return $this->container['notificationMaskId'];
    }

    /**
    * Sets notificationMaskId
    *
    * @param string $notificationMaskId **参数解释**： 屏蔽规则ID。    **约束限制**： 不涉及。 **取值范围**： 只能包含字母、数字，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationMaskId($notificationMaskId)
    {
        $this->container['notificationMaskId'] = $notificationMaskId;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页大小
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

