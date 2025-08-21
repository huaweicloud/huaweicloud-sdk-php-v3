<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGroupWebhookRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGroupWebhookRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * hookId  **参数解释：**  Webhook id。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'int',
            'hookId' => 'int',
            'body' => '\HuaweiCloud\SDK\CodeHub\V4\Model\WebhookParamsDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * hookId  **参数解释：**  Webhook id。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => 'int32',
        'hookId' => 'int32',
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
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * hookId  **参数解释：**  Webhook id。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'hookId' => 'hook_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * hookId  **参数解释：**  Webhook id。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'hookId' => 'setHookId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * hookId  **参数解释：**  Webhook id。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'hookId' => 'getHookId',
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
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
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if (($this->container['groupId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['groupId'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', must be bigger than or equal to 1.";
            }
        if ($this->container['hookId'] === null) {
            $invalidProperties[] = "'hookId' can't be null";
        }
            if (($this->container['hookId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hookId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['hookId'] < 1)) {
                $invalidProperties[] = "invalid value for 'hookId', must be bigger than or equal to 1.";
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
    * Gets groupId
    *  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return int
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int $groupId **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hookId
    *  **参数解释：**  Webhook id。
    *
    * @return int
    */
    public function getHookId()
    {
        return $this->container['hookId'];
    }

    /**
    * Sets hookId
    *
    * @param int $hookId **参数解释：**  Webhook id。
    *
    * @return $this
    */
    public function setHookId($hookId)
    {
        $this->container['hookId'] = $hookId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\WebhookParamsDto|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\WebhookParamsDto|null $body body
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

