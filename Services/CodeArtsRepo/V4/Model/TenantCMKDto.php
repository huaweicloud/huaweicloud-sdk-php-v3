<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TenantCMKDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TenantCMKDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cmkKeyName' => 'string',
            'cmkKeyId' => 'string',
            'keyState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cmkKeyName' => null,
        'cmkKeyId' => null,
        'keyState' => null
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
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cmkKeyName' => 'cmk_key_name',
            'cmkKeyId' => 'cmk_key_id',
            'keyState' => 'key_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'cmkKeyName' => 'setCmkKeyName',
            'cmkKeyId' => 'setCmkKeyId',
            'keyState' => 'setKeyState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'cmkKeyName' => 'getCmkKeyName',
            'cmkKeyId' => 'getCmkKeyId',
            'keyState' => 'getKeyState'
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
    const KEY_STATE__1 = '1';
    const KEY_STATE__2 = '2';
    const KEY_STATE__3 = '3';
    const KEY_STATE__4 = '4';
    const KEY_STATE__5 = '5';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyStateAllowableValues()
    {
        return [
            self::KEY_STATE__1,
            self::KEY_STATE__2,
            self::KEY_STATE__3,
            self::KEY_STATE__4,
            self::KEY_STATE__5,
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
        $this->container['cmkKeyName'] = isset($data['cmkKeyName']) ? $data['cmkKeyName'] : null;
        $this->container['cmkKeyId'] = isset($data['cmkKeyId']) ? $data['cmkKeyId'] : null;
        $this->container['keyState'] = isset($data['keyState']) ? $data['keyState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cmkKeyName']) && (mb_strlen($this->container['cmkKeyName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cmkKeyName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cmkKeyName']) && (mb_strlen($this->container['cmkKeyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmkKeyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmkKeyId']) && (mb_strlen($this->container['cmkKeyId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cmkKeyId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cmkKeyId']) && (mb_strlen($this->container['cmkKeyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmkKeyId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getKeyStateAllowableValues();
                if (!is_null($this->container['keyState']) && !in_array($this->container['keyState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keyState', must be one of '%s'",
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
    * Gets cmkKeyName
    *  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCmkKeyName()
    {
        return $this->container['cmkKeyName'];
    }

    /**
    * Sets cmkKeyName
    *
    * @param string|null $cmkKeyName **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCmkKeyName($cmkKeyName)
    {
        $this->container['cmkKeyName'] = $cmkKeyName;
        return $this;
    }

    /**
    * Gets cmkKeyId
    *  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCmkKeyId()
    {
        return $this->container['cmkKeyId'];
    }

    /**
    * Sets cmkKeyId
    *
    * @param string|null $cmkKeyId **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCmkKeyId($cmkKeyId)
    {
        $this->container['cmkKeyId'] = $cmkKeyId;
        return $this;
    }

    /**
    * Gets keyState
    *  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @return string|null
    */
    public function getKeyState()
    {
        return $this->container['keyState'];
    }

    /**
    * Sets keyState
    *
    * @param string|null $keyState **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @return $this
    */
    public function setKeyState($keyState)
    {
        $this->container['keyState'] = $keyState;
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

