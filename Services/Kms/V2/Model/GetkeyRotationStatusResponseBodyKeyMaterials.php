<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetkeyRotationStatusResponseBodyKeyMaterials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetkeyRotationStatusResponseBody_key_materials';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * materialId  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    * chargeId  **参数解释：** 计费ID **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    * expirationTime  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    * state  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'materialId' => 'string',
            'chargeId' => 'string',
            'createTime' => 'string',
            'expirationTime' => 'string',
            'state' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * materialId  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    * chargeId  **参数解释：** 计费ID **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    * expirationTime  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    * state  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'materialId' => null,
        'chargeId' => null,
        'createTime' => null,
        'expirationTime' => null,
        'state' => null
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
    * materialId  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    * chargeId  **参数解释：** 计费ID **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    * expirationTime  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    * state  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'materialId' => 'material_id',
            'chargeId' => 'charge_id',
            'createTime' => 'create_time',
            'expirationTime' => 'expiration_time',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * materialId  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    * chargeId  **参数解释：** 计费ID **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    * expirationTime  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    * state  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @var string[]
    */
    protected static $setters = [
            'materialId' => 'setMaterialId',
            'chargeId' => 'setChargeId',
            'createTime' => 'setCreateTime',
            'expirationTime' => 'setExpirationTime',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * materialId  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    * chargeId  **参数解释：** 计费ID **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    * expirationTime  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    * state  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @var string[]
    */
    protected static $getters = [
            'materialId' => 'getMaterialId',
            'chargeId' => 'getChargeId',
            'createTime' => 'getCreateTime',
            'expirationTime' => 'getExpirationTime',
            'state' => 'getState'
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
        $this->container['materialId'] = isset($data['materialId']) ? $data['materialId'] : null;
        $this->container['chargeId'] = isset($data['chargeId']) ? $data['chargeId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
    * Gets materialId
    *  **参数解释：** 密钥材料ID **取值范围：** uuid格式
    *
    * @return string|null
    */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
    * Sets materialId
    *
    * @param string|null $materialId **参数解释：** 密钥材料ID **取值范围：** uuid格式
    *
    * @return $this
    */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;
        return $this;
    }

    /**
    * Gets chargeId
    *  **参数解释：** 计费ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getChargeId()
    {
        return $this->container['chargeId'];
    }

    /**
    * Sets chargeId
    *
    * @param string|null $chargeId **参数解释：** 计费ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setChargeId($chargeId)
    {
        $this->container['chargeId'] = $chargeId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释：** 密钥材料创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets expirationTime
    *  **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string|null $expirationTime **参数解释：** 密钥材料过期时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state **参数解释：** 密钥材料状态 **取值范围：** 0：等待轮转状态；2：启用状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

