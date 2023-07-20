<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoSQLDrRpoAndRto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoSQLDrRpoAndRto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scene  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    * rpo  倒换或切换丢失数据时长，单位：秒（s）
    * rto  倒换或切换恢复时长，单位：秒（s）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scene' => 'string',
            'rpo' => 'int',
            'rto' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scene  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    * rpo  倒换或切换丢失数据时长，单位：秒（s）
    * rto  倒换或切换恢复时长，单位：秒（s）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scene' => null,
        'rpo' => 'int64',
        'rto' => 'int64'
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
    * scene  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    * rpo  倒换或切换丢失数据时长，单位：秒（s）
    * rto  倒换或切换恢复时长，单位：秒（s）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scene' => 'scene',
            'rpo' => 'rpo',
            'rto' => 'rto'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scene  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    * rpo  倒换或切换丢失数据时长，单位：秒（s）
    * rto  倒换或切换恢复时长，单位：秒（s）
    *
    * @var string[]
    */
    protected static $setters = [
            'scene' => 'setScene',
            'rpo' => 'setRpo',
            'rto' => 'setRto'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scene  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    * rpo  倒换或切换丢失数据时长，单位：秒（s）
    * rto  倒换或切换恢复时长，单位：秒（s）
    *
    * @var string[]
    */
    protected static $getters = [
            'scene' => 'getScene',
            'rpo' => 'getRpo',
            'rto' => 'getRto'
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
    const SCENE_FAILOVER = 'FAILOVER';
    const SCENE_SWITCHOVER = 'SWITCHOVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSceneAllowableValues()
    {
        return [
            self::SCENE_FAILOVER,
            self::SCENE_SWITCHOVER,
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
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['rpo'] = isset($data['rpo']) ? $data['rpo'] : null;
        $this->container['rto'] = isset($data['rto']) ? $data['rto'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
        }
            $allowedValues = $this->getSceneAllowableValues();
                if (!is_null($this->container['scene']) && !in_array($this->container['scene'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scene', must be one of '%s'",
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
    * Gets scene
    *  场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene 场景，枚举值   FAILOVER 强制切换;    SWITCHOVER 主备倒换
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets rpo
    *  倒换或切换丢失数据时长，单位：秒（s）
    *
    * @return int|null
    */
    public function getRpo()
    {
        return $this->container['rpo'];
    }

    /**
    * Sets rpo
    *
    * @param int|null $rpo 倒换或切换丢失数据时长，单位：秒（s）
    *
    * @return $this
    */
    public function setRpo($rpo)
    {
        $this->container['rpo'] = $rpo;
        return $this;
    }

    /**
    * Gets rto
    *  倒换或切换恢复时长，单位：秒（s）
    *
    * @return int|null
    */
    public function getRto()
    {
        return $this->container['rto'];
    }

    /**
    * Sets rto
    *
    * @param int|null $rto 倒换或切换恢复时长，单位：秒（s）
    *
    * @return $this
    */
    public function setRto($rto)
    {
        $this->container['rto'] = $rto;
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

