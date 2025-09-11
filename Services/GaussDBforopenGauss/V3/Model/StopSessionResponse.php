<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StopSessionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StopSessionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionIds  **参数解释**： 查杀指定会话ID列表。
    * success  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionIds' => 'string[]',
            'success' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionIds  **参数解释**： 查杀指定会话ID列表。
    * success  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionIds' => null,
        'success' => null
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
    * sessionIds  **参数解释**： 查杀指定会话ID列表。
    * success  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionIds' => 'session_ids',
            'success' => 'success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionIds  **参数解释**： 查杀指定会话ID列表。
    * success  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionIds' => 'setSessionIds',
            'success' => 'setSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionIds  **参数解释**： 查杀指定会话ID列表。
    * success  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionIds' => 'getSessionIds',
            'success' => 'getSuccess'
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
        $this->container['sessionIds'] = isset($data['sessionIds']) ? $data['sessionIds'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets sessionIds
    *  **参数解释**： 查杀指定会话ID列表。
    *
    * @return string[]|null
    */
    public function getSessionIds()
    {
        return $this->container['sessionIds'];
    }

    /**
    * Sets sessionIds
    *
    * @param string[]|null $sessionIds **参数解释**： 查杀指定会话ID列表。
    *
    * @return $this
    */
    public function setSessionIds($sessionIds)
    {
        $this->container['sessionIds'] = $sessionIds;
        return $this;
    }

    /**
    * Gets success
    *  **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success **参数解释**： 结束会话操作执行是否成功。 **取值范围**: - true：成功。 - false：失败。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
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

